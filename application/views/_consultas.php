<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Convocatorias - Personal</title>
    <meta name="description" content="UGEL 04" />
    <meta name="keywords" content="UGEL 04, CONVOCATORIAS" />
    <meta name="author" content="UGEL 04" />

       <link rel="stylesheet" href="<?php echo base_url(); ?>dist_consulta/css/spinner.css">
    <!-- BOOTSTRAP -->
    <link href="<?php echo base_url(); ?>dist_consulta/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="<?php echo base_url(); ?>dist_consulta/css/font-awesome.min.css" rel="stylesheet">

    <!-- LIGHTBOX 2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist_consulta/css/lightbox.css">
    <!-- OWL CAROSEL -->
    <link href="<?php echo base_url(); ?>dist_consulta/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>dist_consulta/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>dist_consulta/css/owl.transitions.css" rel="stylesheet">
    <!-- PORTFOLIO GRID -->
    <link href="<?php echo base_url(); ?>dist_consulta/bfassets/css/bootFolio.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>dist_consulta/css/helper.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>dist_consulta/css/idangerous.swiper.css">
    <!-- ICON -->
    <link href="<?php echo base_url(); ?>dist_consulta/css/pe-icon-7-stroke.css" rel="stylesheet">

    <!-- CUSTOM STYLE -->
    <link href="<?php echo base_url(); ?>dist_consulta/css/style.css" rel="stylesheet">
    
    
    	<link rel="icon" type="image/png"
	href="<?php echo base_url(); ?>dist/img/favicon.ico" />
   
   <style type="text/css">
   body{
   font-size: 12px;
   }
		  th {
		    background-color:#3b87c8;
		    color: #FFF;
		    position: relative;
		    text-align: left; 
		    padding: 8px;
		    font-size:14px;
		   
			} 
			
	.label {
	  font-size:10px;
	}
	
	.dataTables_wrapper .dataTables_processing {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 40px;
    margin-left: -50%;
    text-align: center;
    font-size: 1.2em;
    background-color: white;
    background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(25%, rgba(255, 255, 255, 0.9)), color-stop(75%, rgba(255, 255, 255, 0.9)), color-stop(100%, rgba(255, 255, 255, 0)));
    background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    background: -moz-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    background: -ms-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
}
   </style>
   
   
</head>

<body>
    <div class="spinner_hol">
      
    </div>


    <section class="we_are page about type_one" id="CONVOCATORIAS">
        <div class="container no-pading">
            <!-- ABOUT US SECTION TITLE AND DECS-->
        	 <br><br>
        	 <div  class="container">
				<div class="row">
					<div class="col-xs-12">
                			<ul class="nav navbar-left">
                            <li><a style="font-size: 20px" target="_blank" href="http://ugel04.gob.pe/">  <img id="logo" height="80" src="<?php echo base_url(); ?>dist/img/logo_login.png" alt="UGEL 04"> </a> </li>
	                        </ul> 
	                        <br>
                            <ul class="nav navbar-left">
                            <li><a style="font-size: 20px">  <h2 >&nbsp; CONVOCATORIAS DE CONTRATACIÓN DE PERSONAL &nbsp;<?php date_default_timezone_set('GMT'); echo date('Y'); ?></h2> </a> </li>
                             </ul>
                    </div>
                </div>
            </div>

         <div  class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-solid">
						<div class="box-header">
								<h3 style="font-size:18px">
									<i class="fa fa-search"></i> Búsqueda de Convocatorias de Personal
								</h3>
								
							</div>
							<br>
							<div class="box-body">
								<div class="form-horizontal">
										
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label col-md-4">Tipo de Convocatoria</label>
													<div class="col-md-8">
													<select id="tipo_convocatoria" data-column="4" class="search-input-select form-control select2" style="width: 100%" >
				                                        <option value="0">TODOS</option>
														<?php foreach($tipos as $tipo ){?>
														<option value="<?php echo $tipo['IDtipo']; ?>"><?php echo $tipo['descripcionLarga']?></option>
														<?php } ?>
														</select>
													</div>
												</div>
												</div>
												<div class="col-md-3">
												<div class="form-group">
													<label class="control-label col-md-2">Estado</label>
													<div class="col-md-8">
													<select data-column="1" class="search-input-select form-control select2" style="width: 100%">
																	<option value="0">TODOS</option>
																	<option value="1">ACTIVO</option>
																	<option value="2">EN PROCESO</option> 
																	<option value="3">CONCLUIDO</option> 
															</select>
													</div>
												</div>
												</div>
										</div>

								</div>
							</div>
					</div>
				</div>
				</div>
<br>


<div class="row">
                <div class="table-responsive">
                    
                
                    <table id="tableL"
										class="table table-condensed table-hover"
										cellspacing="0" width="100%">
										<thead class="">
											<tr>
												<th class="text-center" style="width: 50px;  vertical-align: middle;" >Item </th>
                                                <th class="text-center" style="width: 180px; vertical-align: middle;">Normativa </th>
												<th class="text-center" style="width: 50px;  vertical-align: middle;" >Documento </th>
                                                                                               
											</tr>
										</thead>
										<tbody id="tbody_normativa">
										</tbody>
									</table>
							
                   
                </div>
 </div>

				
				<div class="row">
                <div class="table-responsive">
                    
                    <table id="table"
										class="table table-condensed table-hover"
										cellspacing="0" width="100%">
										<thead class="">
											<tr>
												<th class="text-center" style="width: 150px;  vertical-align: middle;" >Item</th>
                                                <th class="text-center" style="width: 120px; vertical-align: middle;">Tipo </th>
												<th class="text-center" style="width: 120px;  vertical-align: middle;" >Fecha de Convocatoria</th>
												<th class="text-center" style="width: 500px; vertical-align: middle;" >Descripción</th>
												<th class="text-center" style="width: 120px; vertical-align: middle;">Convocatoria</th>
												<th class="text-center" style="width: 120px; vertical-align: middle;">Plazas</th>
												<th class="text-center" style="width: 200px; vertical-align: middle;">Cuadro de Mérito Preliminar</th>
												<th class="text-center" style="width: 200px; vertical-align: middle;">Cuadro de Mérito Final</th>
												<th class="text-center" style="width: 120px; vertical-align: middle;">Comunicado </th>
												<th class="text-center" style="width: 120px; vertical-align: middle;">Adjudicación </th>
                                                <th class="text-center" style="width: 120px; vertical-align: middle;">Estado</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
							
                   
                </div>
                </div>



            </div>
            
                </div>
            </div>
        </div>


    <!-- End About Us-->

    </section>



     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>dist_consulta/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>dist_consulta/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/lightbox.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/idangerous.swiper.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/idangerous.swiper.progress.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/jquery.hoverdir.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/bfassets/js/jquery.bootFolio.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/smoothscroll.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url(); ?>dist_consulta/js/matchMedia.js"></script> 
    <script src="<?php echo base_url(); ?>dist_consulta/js/script.js"></script>


	<script
		src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
	<script
		src="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
	<script
		src="<?php echo base_url(); ?>plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
      
      <script type="text/javascript">

      var table;
      var tableL;
      
      $(document).ready(function() {
		    table = $('#table').DataTable({
		    	"processing": true,
		        "serverSide": true,
		        "lengthChange": false,
		        "order": [],
		        "ajax": {
		            "url": "<?php echo site_url('consulta/lista')?>",
		            "type": "POST",
		            "data": {"ci_csrf_token":"<?php echo $this->security->get_csrf_hash(); ?>"}
		        },
		        "columnDefs": [
		        {
		            "targets": [ -1,-2, 1, 0, 2, 3,4,5,6],
		            "orderable": false,
		        },
		        ],     
		        "language": {
		        	"processing":     "Procesando...",
		            "lengthMenu":     "Mostrar _MENU_ registros",
		            "zeroRecords":    "No se encontraron resultados",
		            "emptyTable":     "Ningún dato disponible en esta tabla",
		            "info":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		            "infoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		            "infoFiltered":   "(filtrado de un total de _MAX_ registros)",
		            "infoPostFix":    "",
		            "search":         "Buscar:",
		            "url":            "",
		            "infoThousands":  ",",
		            "loadingRecords": "Cargando...",
		            "paginate": {
		                "first":    "Primero",
		                "last":     "Último",
		                "next":     "Siguiente",
		                "previous": "Anterior"
		            },
		            "aria": {
		                "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
		                "sortDescending": ": Activar para ordenar la columna de manera descendente"
		            }
		        },
		        "iDisplayLength": 15,
		    });

		    tableL = $('#tableL').DataTable({
		    		"searching": false,
		    		"showNEntries" : false,
		    		"bPaginate": false,
		    		"bInfo" : false,
		    		"language": {
		        	"processing":     "Procesando...",
		            "lengthMenu":     "Mostrar _MENU_ registros",
		            "zeroRecords":    "No se encontraron resultados",
		            "emptyTable":     "Debe seleccionar un tipo de convocatoria para mostrar la normativa",
		            "info":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		            "infoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		            "infoFiltered":   "(filtrado de un total de _MAX_ registros)",
		            "infoPostFix":    "",
		            "search":         "Buscar:",
		            "url":            "",
		            "infoThousands":  ",",
		            "loadingRecords": "Cargando...",
		            "paginate": {
		                "first":    "Primero",
		                "last":     "Último",
		                "next":     "Siguiente",
		                "previous": "Anterior"
		            },
		            "aria": {
		                "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
		                "sortDescending": ": Activar para ordenar la columna de manera descendente"
		            }
		        }
		    });

		
		   

		    $('#table_filter').css('display','none');
    	 
		});

      $('.search-input-text').on( 'keyup click', function () {   // for text boxes
	        var i = $(this).attr('data-column');  // getting column index
	        var v = $(this).val();  // getting search input value
	        table.columns(i).search(v).draw();
	    } );

	    $('.search-input-select').on( 'change', function () {   // for select box
	        var i =$(this).attr('data-column');
	        var v =$(this).val();
	        table.columns(i).search(v).draw();
 
	    } );



 $('#tipo_convocatoria').on( 'change', function () {   // for select box
          var i =$(this).attr('data-column');
          var v =$(this).val();
            
        console.log("valor: " + v);
 
              $.ajax({
                                    url: "<?php echo site_url('consulta/listar_normativa')?>",
                                    type: "POST",
                                    dataType: "JSON",
                                    data: {valor_tipo: v},
                                    success: function (data)
                                    { 
           $("#tbody_normativa").empty();

           var url_vacia = '<a href="https://www.ugel04.gob.pe/" target="_blank"><i class="fa fa-3x fa-book"></i> </a>';

                   for (var i = 0; i < data.length ; i++) {



   $('<tr>').append(
                    $('<td style="text-align: center;">').text(data[i].IDconvocatoria),
                    $('<td style="text-align: center;">').text(data[i].asuntoContrato),
        data[i].url_normativa == null ?  $('<td style="text-align: center;">').html(url_vacia) : $('<td style="text-align: center;">').html(`<a href="./documentos/normativas/${data[i].url_normativa}" target="_blank"><i class="fa fa-2x fa-book"></i>  </a>`)
                            ).appendTo('#tbody_normativa');



}
                                   
                                     
                                        console.log(data);
                                     
                                    },
                                    error: function(error){
                                        console.log(error);
                                    }
                                });






 
});


      </script>
      
</body>

</html>
