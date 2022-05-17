<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class normativa_model extends CI_Model {
	public function __construct() {
		parent::__construct ();
		$this->load->database ();
	}

	/* ********** (INICIO) CONVOCATORIAS ********** */
	
	
	var $sql_parcial = null;
	
	private function _get_datatables_query() {
		
				$sql = "SELECT * FROM view_normativas ";
				
				$sql .= "WHERE 1 = 1 ";
				
				if ($_POST ['columns'] [1] ['search'] ['value'] > 0) { // Estado
					$sql .= " AND estado = '" . $_POST ['columns'] [1] ['search'] ['value'] . "' ";
				}
				if ( $_POST ['columns'] [2] ['search'] ['value'] != '' ) { // Número
					$sql .= " AND IDtipo LIKE '%" . $_POST ['columns'] [2] ['search'] ['value'] . "%' ";
				}
				if (! empty ( $_POST ['columns'] [3] ['search'] ['value'] )) { // Contrato
					$sql .= " AND asuntoContrato LIKE '%" . $_POST ['columns'] [3] ['search'] ['value'] . "%' ";
				}
				if (! empty ( $_POST ['columns'] [4] ['search'] ['value'] )) { // Tipo
					$sql .= " AND IDtipo = '" . $_POST ['columns'] [4] ['search'] ['value'] . "' ";
				}
				
				
				$this->sql_parcial = $sql;
				if ($_POST ['length'] != - 1)
					$sql .= " LIMIT " . $_POST ['start'] . ", " . $_POST ['length'];
					return $sql;
	}
	
	function get_datatables() {
		$sql = $this->_get_datatables_query ();
		$query = $this->db->query ( $sql );
		return $query->result ();
	}
	
	function count_filtered() {
		$query = $this->db->query ( $this->sql_parcial );
		return $query->num_rows ();
	}
	
	public function count_all() {
		$this->db->from ( 'normativa' );
		return $this->db->count_all_results ();
		return $query->num_rows ();
	}
	
        
    public function registrar_normativa($tipo,$asuntoContrato,$estado,$usuario,$url_normativa){
		$query = $this->db->query("CALL USP_INSERTAR_CONVOCATORIANOR('$tipo','$asuntoContrato','$estado','$usuario' ,'$url_normativa')");
		if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
	}

	public function save($data){
		return $this->db->insert("normativa",$data);
	}
	
	public function actualizar_normativa($IDnormativa,$tipo,$asuntoContrato,$estado,$usuario, $url_normativa){
		$query = $this->db->query("CALL USP_ACTUALIZAR_CONVOCATORIANOR('$IDnormativa','$tipo','$asuntoContrato','$estado',null,'$usuario' ,'$url_normativa')");
		return true;
	}

	public function obtener_normativa($IDconvocatoria){
		$query = $this->db->query("CALL USP_LISTAR_NORMATIVA('$IDconvocatoria')");
		return $query->row ();
	}
	

	public function eliminar_normativa($IDconvocatoria,$usuario){
		$query = $this->db->query("CALL USP_ELIMINAR_NORMATIVA('$IDconvocatoria','$usuario')");
		return true;
	}
	
	public function validar_numero($tipo,$numero){
		$query = $this->db->query("SELECT numero from normativa where YEAR(fechaRegistro) = YEAR(CURDATE()) and numero = '$numero' and IDtipo ='$tipo'");
		return $query->result_array();
	}
	
	public function validar_numero_actualizar($tipo,$numero,$ID){
		$query = $this->db->query("SELECT numero from normativa where YEAR(fechaRegistro) = YEAR(CURDATE()) and numero = '$numero' and IDtipo= '$tipo' and IDconvocatoria != $ID");
		return $query->result_array();
	}
	
	public function listar_tipos(){
		$query = $this->db->query("Select IDtipo,descripcionLarga from tipo");
		return $query->result_array();
	}
	
	
	public function get_normativas($id_tipo){

		$query = $this -> db -> query("select * from normativa where IDtipo = $id_tipo order by IDconvocatoria desc");

		return $query -> result_array();
	}
	/* ********** (FIN) PLAZAS ********** */
	

}
