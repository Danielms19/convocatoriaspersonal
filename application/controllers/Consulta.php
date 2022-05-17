<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class consulta extends CI_Controller {

	public function __construct() {
		Date_default_timezone_set ('GMT');
		parent::__construct ();
		
		$this->load->model ( 'Convocatoria_model', 'convocatoria' );
	
	}
	
	/** INICIO - VISTA DE INICIO DE convocatoriaS**/
	public function index() {
		
		$data ['tipos'] = $this->convocatoria->listar_tipos();
		$this->load->view ( '_consultas', $data );
	}
	
	/** FIN - VISTA DE INICIO DE convocatoriaS**/
	


	/**INICIO - LISTAR NORMATIVAS**/
		
		public function listar_normativa(){
			$id_tipo = $this->input->post('valor_tipo');
			$resultado=  $this-> convocatoria -> get_normativas($id_tipo);
				
				echo json_encode($resultado);
		}
	/** FIN - LISTAR NORMATIVAS**/
	


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
			$row [] = '<div class="text-center">' . $objeto->descripcionCorta.'-'.$objeto->IDconvocatoria .'-'.date_format(  date_create($objeto->fechaRegistro),"Y"). '</div>';
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
								/*onmouseover="javascript:LoadPDF('SOMEPDF','pdfCanvas');"*/
							}
						}
					$archivos .= '</div>';
					}
				}
				$row [] = $archivos;
			}
			
			
			/** $row [] = '<div class="text-center"><span class="fa fa-group"> POSTULAR</span></div>';**/


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
	
}
