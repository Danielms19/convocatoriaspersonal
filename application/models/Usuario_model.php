<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class usuario_model extends CI_Model {
	function __construct() {
		parent::__construct ();
		$this->load->database ();
		$this->load->library ( 'session' );
	}
	public function obtenerPassword($user) {
		$query = $this->db->query ( "CALL USP_VALIDAR_USUARIO('$user',null,null,null,null)" );
		return $query->result_array ();
	}
	
	/* Obteniendo el nombre del usuario, guardado en la variable de session */
	public function datos() {
		$user = $this->session->userdata ( 'user' );
		return $user;
	}
	public function cambio_vista() {
		$vista = $this->session->userdata ( 'vista' );
		if ($vista == 0) {
			$this->session->set_userdata ( 'vista', 1 );
		} else {
			$this->session->set_userdata ( 'vista', 0 );
		}
	}
	public function vista() {
		$vista = $this->session->userdata ( 'vista' );
		return $vista;
	}
	
	public function actualizar_clave($usuario,$clave){
		$query = $this->db->query("CALL USP_ACTUALIZAR_USUARIO('1','$usuario','$clave','','')");
		return $query->result_array();
	}
	
	
	/* ********** (INICIO) MANTENIMIENTO USUARIO ********** */
	var $t_view_usuarios = 'view_usuarios';
	var $c_view_usuarios = array (
			'usuarioID',
			'nombres',
			'apepat',
			'apemat',
	);
	var $o_view_usuarios = null;
	
	private function _get_usuario_datatables_query() {
		$this->db->from ( $this->t_view_usuarios );
		$this->db->limit ( 100 );
		$i = 0;
		foreach ( $this->c_view_usuarios as $item ) {
			if ($_POST ['search'] ['value']) {
				if ($i === 0) {
					$this->db->group_start ();
					$this->db->like ( $item, $_POST ['search'] ['value'] );
				} else {
					$this->db->or_like ( $item, $_POST ['search'] ['value'] );
				}
				if (count ( $this->c_view_usuarios ) - 1 == $i)
					$this->db->group_end ();
			}
			$column [$i] = $item;
			$i ++;
		}
		if (isset ( $_POST ['order'] )) {
			$this->db->order_by ( $column [$_POST ['order'] ['0'] ['column']], $_POST ['order'] ['0'] ['dir'] );
		} else if (isset ( $this->o_view_usuarios )) {
			$order = $this->o_view_usuarios;
			$this->db->order_by ( key ( $order ), $order [key ( $order )] );
		}
	}
	function get_usuario_datatables() {
		$this->_get_usuario_datatables_query ();
		if ($_POST ['length'] != - 1)
			$this->db->limit ( $_POST ['length'], $_POST ['start'] );
			$query = $this->db->get ();
			return $query->result ();
	}
	function count_filtered_usuario() {
		$this->_get_usuario_datatables_query ();
		$query = $this->db->get ();
		return $query->num_rows ();
	}
	public function count_all_usuario() {
		$this->db->from ( $this->t_view_usuarios );
		return $this->db->count_all_results ();
	}
	public function obtener_usuario($id) {
		$this->db->from ( $this->t_view_usuarios );
		$this->db->where ( 'usuario', $id );
		$query = $this->db->get ();
		return $query->row ();
	}
	// agregar miembro del comite
	public function registrar_usuario($usuario,$nombres,$password) {
		$query = $this->db->query("CALL USP_INSERTAR_USUARIO('$usuario','$nombres','$password')");
		/*return $query->result_array();*/
		//$this->db->insert ( $this->t_miembro_comite, $data );
	
	}
	// editar miembro del comite
	public function actualizar_usuario($usuario,$nombres,$password,$estado) {
		$query = $this->db->query("CALL USP_ACTUALIZAR_USUARIO(2,'$usuario','$password','$nombres','$estado')");
	}
	/* ********** (FIN) MIEMBROS DEL COMITE ********** */
	
}