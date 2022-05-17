<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
/**
 *
 * @author UGEL04
 *        
 */
class inicio extends CI_Controller {
	
	public function __construct() {
		Date_default_timezone_set ('GMT');
		parent::__construct ();
		$this->load->library ( 'session' );
		$this->load->library ( 'encrypt' );
		$this->load->database ();
	}
	
	/** INICIO - VISTA DE LOGIN **/
	public function index() {
		$user = $this->Usuario_model->datos ();
		if (empty ( $user )) {
			
			// loading captcha helper
			$this->load->helper ( 'captcha' );
			
			$data ['resp'] = false;
			
			$cod_captcha = $this->session->userdata ( 'cod_captcha' );
			
			if ($cod_captcha) {
				$this->form_validation->set_rules ( 'userCaptcha', 'Captcha', 'trim|required|callback_check_captcha' );
			}else{
				$data ['captcha'] = $this->crear_captcha ();
			}
			
			$this->form_validation->set_rules ( 'User', 'Usuario', 'trim|required|xss_clean' );
			$this->form_validation->set_rules ( 'Password', 'Contraseña', 'trim|required|xss_clean' );
			
			$usuario = $this->input->post ( 'User' );
			$password = $this->input->post ( 'Password' );
			$userCaptcha = $this->input->post ( 'userCaptcha' );
			
			if ($this->form_validation->run () == FALSE) {
				
				if ($cod_captcha) {
					$data ['captcha'] = $this->crear_captcha ();
					$captcha_value = $this->session->userdata ( 'captchaWord' );
					$data ['captcha_value'] = $captcha_value;
					$data ['resp'] = true;
				}
				
				$this->load->view ( '_inicio', $data );
			} else {
				
				if ( $this->validar_usuario ( $usuario, $password )) {
					
					redirect ( 'convocatoria', 'refresh' );
				} else {
					$_SESSION ['cod_captcha'] = true;
					$this->session->mark_as_temp ( 'cod_captcha', 300 );
					if ($cod_captcha) {
						$data ['captcha'] = $this->crear_captcha ();
					}
					// $this->session->set_tempdata ( 'cod_captcha', true, 10);
					$data ['resp'] = true;
					$this->load->view ( '_inicio', $data );
				}
			}
		} else {
			redirect ( 'convocatoria', 'refresh' );
		}
	}
	/** FINAL - VISTA DE LOGIN **/
	
	/** INICIO - VERIFICAR CAPTCHA **/
	function check_captcha($captcha) {
		$captcha_value = $this->session->userdata ( 'captchaWord' );
		$resp = false;
		 if (strcmp ( strtoupper ( $captcha ), strtoupper ( $captcha_value ) ) == 0) {
			$resp = true;
		}else{
			$this->form_validation->set_message ( 'check_captcha', 'Captcha ingresado incorrectamente!' );
		}
		return $resp;
	}
	/** FINAL - VERIFICAR CAPTCHA **/
	
	/** INICIO - CREACIÓN DE IMG CAPTCHA **/
	function crear_captcha() {
		$random_number = substr ( number_format ( time () * rand (), 0, '', '' ), 0, 4 );
		// setting up captcha config
		$vals = array (
				'word' => $random_number,
				'img_path' => './captcha/',
				'img_url' => base_url () . 'captcha/',
				'img_width' => 90,
				'img_height' => 40,
				'font_size' => 18,
				'font_path' => FCPATH . 'captcha/font/verdana.ttf',
				'expiration' => 10 
		);
		
		$this->session->set_userdata ( 'captchaWord', $random_number );
		
		/*
		 * $cont = $this->session->userdata ( 'cont' );
		 * $this->session->set_userdata ( 'cont', $cont+1 );
		 */
		
		return create_captcha ( $vals );
	}
	/** FINAL - CREACIÓN DE IMG CAPTCHA **/
	
	/** INICIO - AUTENTIFICACIÓN **/
	function validar_usuario($usuario, $password) {
		$resultado = false;
		$resp = $this->Usuario_model->obtenerPassword ( $usuario );
		
		if (! empty ( $resp ) && ($this->encrypt->decode ( $resp [0] ['Password'] ) == $password)) {
			$array = array (
					'user' => $resp [0] ['usuario'],
					'nombres' => $resp [0] ['nombres'],
					'vista' => 0 
			);
			$this->db->reconnect ();
			$this->session->set_userdata ( $array );
			$resultado = true;
		}
		
		return $resultado;
	}
	/** FINAL - AUTENTIFICACIÓN **/
	
	/** INICIO - LOGOUT **/
	public function salir() {
		$this->session->sess_destroy ();
		
		redirect ( 'Inicio', 'refresh' );
	}
	/** FINAL - LOGOUT **/
	
	/** INICIO - COLAPSAR MENU **/
	public function vista() {
		$this->Usuario_model->cambio_vista ();
		echo json_encode ( 1 );
	}
	/** FINAL - COLAPSAR MENU **/
	
	
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
			$result = $this->Usuario_model->actualizar_clave($this->Usuario_model->datos(),$password);
	
			if ($result[0]['ID'] > 0) {
				$resp = array ('resp' => true,'msg' => 'Se cambio la contraseña correctamente.');
			}
			else{
				$resp = array ('resp' => false,'msg' => 'No se pudo cambiar la contraseña.');
			}
		}
	
		echo json_encode ( $resp );
	
	}
	/** FINAL - ACTUALIZAR EL PASSWORD DEL USUARIO **/
	
	
}