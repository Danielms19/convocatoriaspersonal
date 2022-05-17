<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class reporte_model extends CI_Model {
	
	public function __construct() {
		parent::__construct ();
		$this->load->database ();
		$this->db_sql = $this->load->database ( 'sql', TRUE );
	}
	
	public function obtener_estado($SedeId,$Anio,$Numero) {
		$query = $this->db_sql->query ( "EXEC USP_ESTADO_EXPEDIENTE '$SedeId','$Anio','$Numero' " );
		return $query->result ();
	}

	public function obtener_expediente($SedeId,$Anio,$Numero) {
		$query = $this->db_sql->query ( "EXEC USP_EXPEDIENTE_FINAL '$SedeId','$Anio','$Numero' " );
		return $query->result ();
	}
	

	var $config = Array(
	    		'protocol' => 'smtp',
	    		'smtp_host' => 'ssl://smtp.googlemail.com',
	    		'smtp_port' => 465,
	    		'smtp_user' => 'notificacionresolucion@gmail.com',
	    		'smtp_pass' => '1UGELadmin',
	    		'mailtype'  => 'html'
	    		);

	public function enviar_correo($archivo)
	{
	


	    	
	    		$this->load->helper('string');
	    	
	    		
	    		$this->load->helper('string');

		    	$this->load->library('email', $this->config);
		    	$this->email->set_newline("\r\n");
		    	$this->email->from('notificacionresolucion@gmail.com','REPORTE SINAD');
		    	$this->email->to('alexndrpc6@gmail.com');
		    	$this->email->subject('REPORTE SINAD');

		    		$archivo = 'C:/reportes//'.$archivo.'.xls';
		    	 $this->email->attach($archivo);



	    		$this->email->send();
	    	

	    	

	    
	}

}
