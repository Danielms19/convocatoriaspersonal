<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class normativa extends CI_Controller {

	public function __construct() {
		Date_default_timezone_set ('GMT');
		parent::__construct ();
		$session = $this->Usuario_model->datos ();
		if (empty ( $session )) {
			redirect ( 'inicio', 'refresh' );
		}
		$this->load->model ( 'Normativa_model', 'convocatoria' );
	
	}
	
	/** INICIO - VISTA DE INICIO DE convocatoriaS**/
	public function index() {
	//	$this->load->helper ( 'url' );
		$data ['pag'] = "3";
		$data ['tipos'] = $this->convocatoria->listar_tipos();
		
		$this->load->view ( '_normativa', $data );
	}
	/** FIN - VISTA DE INICIO DE convocatoriaS**/
	
	/** INICIO - LISTA LAS convocatoriaS **/
	public function lista() {
		
		
		$this->load->helper('directory');
		
		$list = $this->convocatoria->get_datatables ();
		$data = array ();
		$no = $_POST ['start'];
		foreach ( $list as $objeto ) {
			$no ++;
			$row = array ();
            $row [] = '<div class="text-center">' . $objeto->IDconvocatoria . '</div>';
			$row [] = '<div class="text-center">' . $objeto->descripcionCorta . '</div>';
			$row [] = '<div class="text-center">' . $objeto->asuntoContrato . '</div>';
            $row [] = '<div class="text-center"><a class="btn btn-sm btn-default" target="_blank" href="./documentos/normativas/' . $objeto->url_normativa . '" download="' . $objeto->url_normativa . '"><i class="fa fa-folder-open fa-2x" style="color: red;"></i></a>';;
		
			$row [] = '<div class="text-center"><a href="javascript:void(0)" title="Eliminar" onclick="eliminar_normativa(' . "'" . $objeto->IDconvocatoria . "'" . ')"><i class="fa fa-trash-o fa-2x"></i></a></div>';
		    $data [] = $row;
		}
		$output = array (
				"draw" => $_POST ['draw'],
				"recordsTotal" => $this->convocatoria->count_all (),
				"recordsFiltered" => $this->convocatoria->count_filtered (),
				"data" => $data
		);
		// output to json format
		echo json_encode ( $output );
	}
	/** FIN - LISTA LAS convocatoriaS **/
	
	
	public function subir(){
		
		$this->load->library ( 'upload' );
		$directory = $this->input->get('data');
		$this->upload = new Upload('/archivos/'.$directory.'/',$directory);
		
	}

	/*
	public function archivo(){
		
		$this->load->view ( '_archivo' );
	}*/
	


	private function _validacion_normativa() {
		$data = array ();
		$data ['error_string'] = array ();
		$data ['inputerror'] = array ();
		$data ['status'] = TRUE;
 
		if ($this->input->post ( 'tipo' ) == '') {
			$data ['inputerror'] [] = 'tipo';
			$data ['error_string'] [] = 'El tipo de normativa requerido.';
			$data ['status'] = FALSE;
		}

		if ($this->input->post ( 'asunto_normativa' ) == '') {
			$data ['inputerror'] [] = 'asunto_normativa';
			$data ['error_string'] [] = 'La descripción es requerido.';
			$data ['status'] = FALSE;
		}
		 
		if ($data ['status'] === FALSE) {
			echo json_encode ( $data );
			exit ();
		}
	}

	public function registrarnor(){
		$this->_validacion_normativa();

		$tipo 			= $this->input->post("tipo");
		$asuntoContrato 	= $this->input->post("asunto_normativa");
		$estado 		= $this->input->post("estado_normativa");
		$usuario 		= $this->Usuario_model->datos();
		
		$url_normativa 	= "";

		if (!empty($_FILES['url_normativa']['name'])) {
			$config['upload_path']   = 'documentos/normativas/';
	        $config['allowed_types'] = '*';

	        $this->load->library('upload');
	        $this->upload->initialize($config);

	        if ($this->upload->do_upload('url_normativa')){
	            $data = array(
	            	'upload_data' => $this->upload->data()
	            );
	            $url_normativa = $data["upload_data"]["file_name"];
	        }
		}
		

		$resp = $this->convocatoria->registrar_normativa($tipo,$asuntoContrato,$estado,$usuario,$url_normativa);
		
		echo json_encode( array (
				"status" => TRUE ,
				"ID" => $resp[0]['ID']
		) );
	}


	
	
	public function eliminar_archivo(){
		$archivo = $this->input->post('archivo');
		unlink('./archivos/'.$archivo);

		echo json_encode ( true );
	}
	
	public function obtener($id){
	
		$data = $this->convocatoria->obtener_normativa( $id );
		echo json_encode ( $data );
	}
	
	public function eliminar(){
		$data = $this->convocatoria->eliminar_normativa( $this->input->post('IDconvocatoria'),$this->Usuario_model->datos() );
		
		$resp = true;
		if($data != true){
			$resp = false;
		}
		
		echo json_encode ( array (
				"status" => $resp 
		)  );
		
	}

}
