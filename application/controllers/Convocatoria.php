<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class convocatoria extends CI_Controller {

	public function __construct() {
		Date_default_timezone_set ('GMT');
		parent::__construct ();
		$session = $this->Usuario_model->datos ();
		if (empty ( $session )) {
			redirect ( 'inicio', 'refresh' );
		}
		$this->load->model ( 'Convocatoria_model', 'convocatoria' );
	
	}
	
	/** INICIO - VISTA DE INICIO DE convocatoriaS**/
	public function index() {
	//	$this->load->helper ( 'url' );
		$data ['pag'] = "1";
		$data ['tipos'] = $this->convocatoria->listar_tipos();
		
		$this->load->view ( '_convocatoria', $data );
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
			$row [] = '<div class="text-center">' . $objeto->descripcionCorta .'-'.$objeto->IDconvocatoria .'-'.date_format(  date_create($objeto->fechaRegistro),"Y"). '</div>';
			$row [] = '<div class="text-center">' . $objeto->fecha . '</div>';
			$row [] = $objeto->asuntoContrato;
		
			$directorio = './archivos/'.$objeto->IDconvocatoria;
			
			for($i = 1; $i <= 6;$i++){
				$directorio_busqueda = $directorio.'/'.$i;
				$archivos = null;
				if(is_dir($directorio_busqueda)){
					$lista_archivos = scandir($directorio_busqueda);
					if(!empty($lista_archivos)){
						$archivos = '<div class="text-center">';
						foreach($lista_archivos as $archivo){
							if( file_exists($directorio_busqueda.'/'.$archivo) && !is_dir($directorio_busqueda.'/'.$archivo) ){
								$archivos .= '<a download href="'.base_url().$directorio_busqueda.'/'.$archivo.'" title="'.$archivo.'"  ><span class="fa-stack fa-lg"><i class="fa fa-file-text-o"></i></span></a>';
							}
						}
					$archivos .= '</div>';
					}
				}
				$row [] = $archivos;
			}
			
			
			
			$estado  = null;
			switch ($objeto->estado){
				case 1 :
					$estado = '<span class="label label-success">ACTIVO</span>';
					break;
				case 2:
					$estado = '<span class="label label-warning">EN PROCESO</span>';
					break;
				case 3:
					$estado = '<span class="label label-danger">CONCLUIDO</span>';
					break;
			}
			
			$row [] = '<div class="text-center">' . $estado . '</div>';
			
			
			$row [] = '<div class="text-center"><a href="javascript:void(0)" title="Editar" onclick="editar_convocatoria(' . "'" . $objeto->IDconvocatoria . "'" . ')"><i class="fa fa-pencil fa-2x"></i></a>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" title="Eliminar" onclick="eliminar_convocatoria(' . "'" . $objeto->IDconvocatoria . "'" . ')"><i class="fa fa-trash-o fa-2x"></i></a></div>';
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
 
		if ($this->input->post ( 'asunto_normativa' ) == '') {
			$data ['inputerror'] [] = 'asunto_normativa';
			$data ['error_string'] [] = 'La descripción es requerido.';
			$data ['status'] = FALSE;
		}
		 
		if ($this->input->post ( 'url_normativa' ) == '') {
			$data ['inputerror'] [] = 'url_normativa';
			$data ['error_string'] [] = 'la URL es requerida.';
			$data ['status'] = FALSE;
		}
		if ($data ['status'] === FALSE) {
			echo json_encode ( $data );
			exit ();
		}
	}



	private function _validacion() {
		$data = array ();
		$data ['error_string'] = array ();
		$data ['inputerror'] = array ();
		$data ['status'] = TRUE;

		if ($this->input->post ( 'fecha' ) == '') {
			$data ['inputerror'] [] = 'fecha';
			$data ['error_string'] [] = 'La fecha de publicación es requerido.';
			$data ['status'] = FALSE;
		}

		if ($this->input->post ( 'asunto' ) == '') {
			$data ['inputerror'] [] = 'asunto';
			$data ['error_string'] [] = 'La descripción es requerido.';
			$data ['status'] = FALSE;
		}


		if ($data ['status'] === FALSE) {
			echo json_encode ( $data );
			exit ();
		}
	}
	
	private function _validacion_actualizar() {
		$data = array ();
		$data ['error_string'] = array ();
		$data ['inputerror'] = array ();
		$data ['status'] = TRUE;
	
		if ($this->input->post ( 'fecha' ) == '') {
			$data ['inputerror'] [] = 'fecha';
			$data ['error_string'] [] = 'La fecha de publicación es requerido.';
			$data ['status'] = FALSE;
		}
		if ($this->input->post ( 'asunto' ) == '') {
			$data ['inputerror'] [] = 'asunto';
			$data ['error_string'] [] = 'La descripción es requerido.';
			$data ['status'] = FALSE;
		}
		
		if ($data ['status'] === FALSE) {
			echo json_encode ( $data );
			exit ();
		}
	}
	
	
	public function registrar(){
		$this->_validacion();
		$resp = $this->convocatoria->registrar_convocatoria($this->input->post('tipo'),
															$this->input->post('fechaadj'),
															$this->input->post('asunto'),
															$this->input->post('estado'),
															$this->input->post('fecha'),
															$this->Usuario_model->datos());
		
		echo json_encode( array (
				"status" => TRUE ,
				"ID" => $resp[0]['ID']
		) );
	}
	
	public function actualizar(){
		$this->_validacion_actualizar();
		$resp = $this->convocatoria->actualizar_convocatoria($this->input->post('IDconvocatoria'),
															 $this->input->post('tipo'),
															 $this->input->post('fechaadj'),
															 $this->input->post('asunto'),
															 $this->input->post('estado'),
															 $this->input->post('fecha'),
															 $this->Usuario_model->datos());
		
		echo json_encode( array (
				"status" => TRUE ,
				"ID" => $this->input->post('IDconvocatoria')
				
		) );
	}
        
        public function registrarnor(){
		$this->_validacion_normativa();
		$resp = $this->convocatoria->registrar_normativa($this->input->post('tipo'),
															$this->input->post('asunto_normativa'),
															$this->input->post('estado_normativa') ,
															$this->Usuario_model->datos(),
															$this->input->post('url_normativa'));
		
		echo json_encode( array (
				"status" => TRUE ,
				"ID" => $resp[0]['ID']
		) );
	}
	
	public function actualizarnor(){
		$this->_validacion_actualizar();
		$resp = $this->convocatoria->actualizar_convocatorianor($this->input->post('IDnormativa'),
															 $this->input->post('tipo'),
															 $this->input->post('fechaadj'),
															 $this->input->post('asunto'),
															 $this->input->post('estado'),
															 $this->input->post('fecha'),
															 $this->Usuario_model->datos());
		
		echo json_encode( array (
				"status" => TRUE ,
				"ID" => $this->input->post('IDconvocatoria')
				
		) );
	}
	
	public function eliminar_archivo(){
		$archivo = $this->input->post('archivo');
		unlink('./archivos/'.$archivo);

		echo json_encode ( true );
	}
	
	public function obtener($id){
	
		$data = $this->convocatoria->obtener_convocatoria ( $id );
		echo json_encode ( $data );
	}
	
	public function eliminar(){
		$data = $this->convocatoria->eliminar_convocatoria ( $this->input->post('IDconvocatoria'),$this->Usuario_model->datos() );
		
		$resp = true;
		if($data != true){
			$resp = false;
		}
		
		echo json_encode ( array (
				"status" => $resp 
		)  );
		
	}

}
