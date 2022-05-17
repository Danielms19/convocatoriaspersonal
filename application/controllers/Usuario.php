<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class usuario extends CI_Controller {
	
	public function __construct() {
		Date_default_timezone_set ('GMT');
		parent::__construct ();
		$session = $this->Usuario_model->datos ();
		$usuario = $this->session->userdata ( 'user' );
		if (empty ( $session ) || $usuario != 'admin') {
			redirect ( 'inicio', 'refresh' );
		}
		$this->load->model ( 'Usuario_model', 'usuario' );
	}
	
	/** INICIO - VISTA DE USUARIOS**/
	public function index() {
		$data ['pag'] = "2";
		$this->load->view ( '_usuario',$data );
	}
	/** FINAL - VISTA DE USUARIOS**/
	
	/** INICIO - LISTA DE USUARIOS **/
	public function lista_usuarios() {
		$list = $this->usuario->get_usuario_datatables ();
		$data = array ();
		$no = $_POST ['start'];
		
		foreach ( $list as $miembro ) {
			$no ++;
			$row = array ();
			$row [] = $miembro->usuario;
			$row [] = $miembro->nombres;
			if($miembro->estado == 1)
				$row [] = '<div class="text-center"><span class="label label-success">ACTIVO</span></div>';
			else 
				$row [] = '<div class="text-center"><span class="label label-danger">DESACTIVO</span></div>';
			
			$row [] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Editar miembro" onclick="editar_usuario(' . "'" . $miembro->usuario . "'" . ')"><i class="fa fa-edit"></i> EDITAR</a>';
		
			$data [] = $row;
		}
		$output = array (
				"draw" => $_POST ['draw'],
				"recordsTotal" => $this->usuario->count_all_usuario (),
				"recordsFiltered" => $this->usuario->count_filtered_usuario (),
				"data" => $data 
		);
		
		echo json_encode ( $output );
	}
	/** FINAL - LISTA DE USUARIOS **/
	
	/** INICIO - OBTENER DATOS DEL USUARIO **/
	public function obtener_usuario($id) {
		$data = $this->usuario->obtener_usuario ( $id );
		echo json_encode ( $data );
	}
	/** FINAL - OBTENER DATOS DEL USUARIO **/
	
	/** INICIO - AGREGAR UN USUARIO **/
	public function agregar_usuario() {
		
		$this->_validacion();
		$this->load->library('encrypt');
		$resultado = $this->usuario->registrar_usuario(  
				mb_strtoupper($this->input->post ( 'usuario' ), 'UTF-8'),
				mb_strtoupper($this->input->post ( 'nombres' ), 'UTF-8'),
				$this->encrypt->encode($this->input->post ( 'clave' )));
		
		echo json_encode ( array (
				"status" => TRUE 
		) );
	}
	/** FINAL - AGREGAR UN USUARIO **/
	
	/** INICIO - ACTUALIZAR UN USUARIO **/
	public function actualizar_usuario() {
		
		$this->load->library('encrypt');
		$password = null;
		$clave = $this->input->post ( 'clave' );
		if(!empty( $clave )){ $password = $this->encrypt->encode ( $clave ); }
		 
		 $this->usuario->actualizar_usuario (  
		 		$this->input->post ( 'usuario' ),
				mb_strtoupper($this->input->post ( 'nombres' ),'UTF-8'),
				$password,
				$this->input->post ( 'estado' ) );
		 
		echo json_encode ( array (
				"status" => TRUE 
		) );
	}
	/** FINAL - ACTUALIZAR UN USUARIO **/
	
	/** INICIO - VALIDAR PASSWORD **/
   function password_check($str) {
		return (preg_match ( '#[0-9]#', $str ) && preg_match ( '#[a-zA-Z]#', $str )) ? TRUE : FALSE;
	}
	/** FINAL - VALIDAR PASSWORD **/
	
	/** INICIO - ACTUALIZAR EL PASSWORD DEL USUARIO **/
	public function cambio_password(){
		$resp = null;
	
		$this->form_validation->set_rules('password', 'Contraseña', 'trim|required|min_length[8]|alpha_numeric|callback_password_check');
		$this->form_validation->set_rules('passwordv', 'Contraseña', 'trim|required|min_length[8]|matches[password]');
			
		$this->form_validation->set_message('password_check','La contraseña debe contener mayúsculas y números.');
			
		if ($this->form_validation->run() == FALSE) {
			$resp = array ('pass1' => form_error('password'),
					'pass2' => 	form_error('passwordv')
			);
		}
		else {
			$this->load->library('encrypt');
			$password = $this->encrypt->encode($this->input->post ( 'password' ));
			$result = $this->usuario->actualizar_clave($this->usuario->datos(),$password);
	
			if ($result[0]['ID'] > 0) {
				$resp = array ('resp' => true,'msg' => 'Se cambio la contraseña correctamente.');
			}
			else{
				$resp = array ('resp' => true,'msg' => 'No se pudo cambiar la contraseña.');
			}
		}
		
		echo json_encode ( $resp );

	}
	/** FINAL - ACTUALIZAR EL PASSWORD DEL USUARIO **/
	
	/** INICIO - VALIDACIÓN DE REGISTRO DE USUARIO **/
	private function _validacion() {
		$data = array ();
		$data ['error_string'] = array ();
		$data ['inputerror'] = array ();
		$data ['status'] = TRUE;
	
		if ($this->input->post ( 'usuario' ) == '') {
			$data ['inputerror'] [] = 'usuario';
			$data ['error_string'] [] = 'El usuario es requerido';
			$data ['status'] = FALSE;
		}
		if ($this->input->post ( 'nombres' ) == '') {
			$data ['inputerror'] [] = 'nombres';
			$data ['error_string'] [] = 'Los nombres son requeridos';
			$data ['status'] = FALSE;
		}
		if ($this->input->post ( 'clave' ) == '') {
			$data ['inputerror'] [] = 'clave';
			$data ['error_string'] [] = 'La contraseña es requerida';
			$data ['status'] = FALSE;
		}
		$usuario = $this->usuario->obtener_usuario ( $this->input->post ( 'usuario' ) );
		if (!empty($usuario)) {
			$data ['inputerror'] [] = 'usuario';
			$data ['error_string'] [] = 'El usuario ya esta registrado';
			$data ['status'] = FALSE;
		}
		if ($data ['status'] === FALSE) {
			echo json_encode ( $data );
			exit ();
		}
	}
	/** FINAL - VALIDACIÓN DE REGISTRO DE USUARIO **/

}
