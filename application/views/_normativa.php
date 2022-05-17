<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Convocatorias</title>
<!-- Tell the browser to be responsive to screen width -->
<meta
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css"
	rel="stylesheet">
<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/select2/select2.min.css">
<!-- Theme style -->
<link rel="stylesheet"
	href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
			 folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet"
	href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
	
<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker-bs3.css">
<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/datepicker/datepicker3.css">

<!-- blueimp Gallery styles  -->
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars  -->
<link rel="stylesheet" href="<?php echo base_url(); ?>upload/css/jquery.fileupload.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>upload/css/jquery.fileupload-ui.css">


<noscript><link rel="stylesheet" href="<?php echo base_url(); ?>upload/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="<?php echo base_url(); ?>upload/css/jquery.fileupload-ui-noscript.css"></noscript>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   


<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker-bs3.css">
<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/datepicker/datepicker3.css">

<link rel="icon" type="image/png"
	href="<?php echo base_url(); ?>dist/img/favicon.ico" />
	
	<style>
body {
	padding-right: 0 !important;
}

</style>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">
	
	<?php $this->load->view('layout/_menu'); ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
		<div class="container">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Control de Normativas 
				</h1>
			</section>

			<!-- Main content -->
			<section class="content">
			
				<!---------- tabla miembros del comite ---------->
							
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-solid">
						<div class="box-header">
								<h3 class="box-title">
									<i class="fa fa-search"></i> Búsqueda de Normativas
								</h3>
								
						</div>
						<div class="box-body">
                              <div class="box-tools pull-right">
									<div class="btn-toolbar">
										<button class="btn btn-sm btn-success"
											onclick="registrar_normativa()">
											<i class="fa fa-plus-circle"></i> AGREGAR NORMATIVA
										</button>
									</div>
								</div>  
								<br><br>
								<div class="form-horizontal">
										
								<div class="row">
							
								<div class="col-md-4">
								<div class="form-group">
									<label class="control-label col-md-4">Tipo</label>
									<div class="col-md-8">
									<select data-column="4" class="search-input-select form-control select2" style="width: 100%" >
										<option value="0">TODOS</option>
                                                                            <?php foreach($tipos as $tipo ){?>
										<option value="<?php echo $tipo['IDtipo']; ?>"><?php echo $tipo['descripcionLarga']?></option>
										<?php } ?>
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
				
				
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-solid">
							<div class="box-header">
								<h3 class="box-title">
									<i class="fa fa-check-circle"></i> Normativas Registradas  
								</h3>
								
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="table"
										class="table table-condensed table-hover responsive"
										cellspacing="0" width="100%">
								<thead>
									<tr>
									<th class="text-center" style="width: 150px;  vertical-align: middle;" >Item</th>
                                    <th class="text-center" style="width: 120px; vertical-align: middle;">Tipo</th>
									<th class="text-center" style="vertical-align: middle;" >Normativa</th>
                                    <th class="text-center" style="vertical-align: middle;" >Archivo</th>
									<th class="text-center" >ACCION</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
							</div>
						</div>
					</div>
				</div>

				
		
			</section>
			</div>
		</div>




<div class="modal fade" id="modal_confirmar" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h3 class="modal-title" >Confirmar</h3>
					</div>
				<div class="modal-body text-center" >
				<input type="hidden" value="" id="IDconvocatoria_e" > 
				<strong><p >¿Desea eliminar esta normativa?</p></strong>
				</div>
					<div class="modal-footer" >
					<button type="button" id="btnEliminar" onclick="confirmar()"
							class="btn btn-danger">Eliminar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					
					</div>
			</div>
		</div>
</div>


<div class="modal fade" id="modal_respuesta" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h3 class="modal-title" >Respuesta</h3>
					</div>
				<div class="modal-body text-center" >
				<strong><p id="p_respuesta_modal"></p></strong>
				</div>
					<div class="modal-footer" >
						<button type="button" class="btn btn-danger" onclick="cerrar_respuesta()">Aceptar</button>
					</div>
			</div>
		</div>
</div>
</div>

</div>
	

                <div class="modal fade" id="modal_normativa" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
	<h3  style="text-align: center;" class="modal-title" id="titulo_normativa">
 </h3>					</div>

<div class="modal-body" >
   
   <form id="form_normativa" class="form-horizontal" enctype="multipart/form-data">
					<input type="hidden" value="" id="IDconvocatoria" name="IDnormativa"> 
								<div class="form-group">
									<label class="control-label col-md-3">Tipo</label>
									<div class="col-md-5">
										<select name="tipo" id="tipo" class="form-control select2" style="width: 100%" >
										<option value="">SELECCIONE</option>
										<?php foreach($tipos as $tipo ){?>
										<option value="<?php echo $tipo['IDtipo']; ?>"><?php echo $tipo['descripcionLarga']?></option>
										<?php } ?>
										</select>
										<span class="help-block"></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Descripción</label>
									<div class="col-md-7">
										<textarea name="asunto_normativa" id="asunto_normativa"
											class="form-control"
											></textarea>
										<span class="help-block"></span>
									</div>
								</div>

								<div class="form-group">
										<label class="control-label col-md-3">Archivo normativa</label>
										<div class="col-md-7">
											<input type="file" name="url_normativa" id="url_normativa" accept=".pdf" class="form-control"/>
										</div>
								</div>

										<select class="form-control" id="estado"
											name="estado_normativa" style="visibility:hidden" >
											<option value="1">ACTIVO</option>
										</select> <span class="help-block"></span>


								<div class="box-tools pull-right">
									<div class="btn-toolbar">
										<button type="button" id="btnGuardar" name="guardar_normativa_convocatoria" onclick="guardar_normativa()"
							class="btn btn-primary " >Guardar</button>
								</form>
									</div>
								</div>
								
   <br><br>
</div>
</div>



</div>




</div>
                
<?php $this->load->view('layout/_footer'); ?>
		

	</div>
	         
	

<script
		src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<script
		src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
	<script
		src="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
	<script
		src="<?php echo base_url(); ?>plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script
		src="<?php echo base_url(); ?>plugins/select2/select2.full.min.js"></script>

	<script src="<?php echo base_url(); ?>dist/js/app.min.js"></script>


<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo base_url(); ?>upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the <?php echo base_url(); ?>upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>

<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>

<script src="<?php echo base_url(); ?>upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url(); ?>upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo base_url(); ?>upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo base_url(); ?>upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo base_url(); ?>upload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo base_url(); ?>upload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo base_url(); ?>upload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo base_url(); ?>upload/js/jquery.fileupload-ui.js"></script>

<script src="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>plugins/datepicker/bootstrap-datepicker.js"></script>

  <script type="text/javascript">
		var baseurl = "<?php echo base_url(); ?>";
		var save_method; 
		var table;
		var convocatoria = '';
		var tipo = '';
		 
		$(document).ready(function() {


			 $('.datepicker').datepicker({
			        autoclose: true,
			        format: "yyyy-mm-dd",
			        todayHighlight: true,
			        orientation: "top auto",
			        todayBtn: true,
			        todayHighlight: true,
			        language: "es" 
			    });

			 
				
		    table = $('#table').DataTable({
		    	"processing": true,
		        "serverSide": true,
		        "order": [],
		        "ajax": {
		            "url": "<?php echo site_url('normativa/lista')?>",
		            "type": "POST",
		            "data": {"ci_csrf_token":"<?php echo $this->security->get_csrf_hash(); ?>"}
		        },
		        "columnDefs": [
		        {
		            "targets": [1, 0, 2, 3,4],
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
		        "iDisplayLength": 10,
		    });

		    $("input").change(function(){
		        $(this).parent().parent().removeClass('has-error');
		        $(this).next().empty();
		    });
		    $("textarea").change(function(){
		        $(this).parent().parent().removeClass('has-error');
		        $(this).next().empty();
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

		function reload_table()
		{
		    table.ajax.reload(null,false); 
		}


		$( "#modal_convocatoria" ).on('hidden.bs.modal', function(){
			reload_table();
		});

		function cerrar_respuesta(){
			reload_table();
			 $('#modal_respuesta').modal('hide');
		}

		function editar_normativa(id){
			$('[name="fecha"]').val('');
				 $.ajax({
				        url : "<?php echo site_url('normativa/obtener/')?>/" + id,
				        type: "GET",
				        dataType: "JSON",
				        success: function(data)
				        {
					        console.log(data);
				        	$('#btnGuardar').text('Actualizar');
				        	$('[name="IDconvocatoria"]').val(data.IDconvocatoria);
				        	$('[name="tipo"]').val(data.IDtipo);
				        	$('[name="estado"]').val(data.estado);
				            $('[name="asunto"]').val(data.asuntoContrato);
				            $('[name="url_normativa"]').val(data.url_normativa);
				            save_method = 'update';
							$('#carga_archivos').show();
							$('#modal_convocatoria').modal('show');
							limpiar_tabs();
							convocatoria = id;
							cambio(1);
							
				        	$('#modal_form_plaza').modal('show');
				        	$('#titulo_convocatoria').text('Formulario para la edición de la normativa #'+ data.IDconvocatoria);
						},
				        error: function (jqXHR, textStatus, errorThrown)
				        {
				            alert('Error get data from ajax');
				        }
				    });
		}
/*
		function cerrar(){
			reload_table();
			$('#modal_convocatoria').modal('hide');
		}
*/
		function eliminar_normativa(id){
			$('#modal_confirmar').modal('show');
			$('#IDconvocatoria_e').val(id);
		}

		function confirmar(){
			$.ajax({
		        url : "<?php echo site_url('normativa/eliminar')?>",
		        type: "POST",
		        data: {IDconvocatoria: $('#IDconvocatoria_e').val()},
		        dataType: "JSON",
		        success: function(data)
		        {
			        if(data.status){
			        	$('#modal_confirmar').modal('hide');
			       		$('#p_respuesta_modal').text('El registro se ha eliminado con éxito.');
			        	
			        }else{
			        	$('#p_respuesta_modal').text('El registro no se podido eliminar.');
			        }
			        $('#modal_respuesta').modal('show');
		        	
				},
		        error: function (jqXHR, textStatus, errorThrown)
		        {
		            alert('Error get data from ajax');
		        }
		    });
		}

		function eliminar_archivo(archivo){
			dir = convocatoria+'/'+tipo+'/'+archivo;
			 $.ajax({
			        url : "<?php echo site_url('normativa/eliminar_archivo')?>",
			        type: "POST",
			        data: {archivo: dir },
			        dataType: "JSON",
			        success: function(data)
			        {
			        }
			    });
		}

   
                
         function registrar_normativa(){
			save_method = 'add';
			  $('#form_normativa')[0].reset();
			$('#btnGuardar').text('Guardar');
			$('#titulo_normativa').text('Registro de una nueva normativa');
			$('#carga_archivos').hide();
			$('#modal_normativa').modal('show');
		}
           //INICIO 
            function guardar_normativa(){
            	
		let formData = new FormData();
		formData.append("tipo", $("#tipo").val());
	        formData.append("asunto_normativa", $("#asunto_normativa").val());
	        formData.append("estado_normativa", $("#estado").val());

	        let url_normativa = $('#url_normativa')[0].files[0];

	        formData.append("url_normativa", url_normativa);

		    $.ajax({
		        url : baseurl + 'normativa/registrarnor',
		        type: "POST",
		        data: formData,
		        cache: false,
	           	contentType: false,
	           	processData: false,
			dataType: "JSON",
		        success: function(data)
		        {
		            if(data.status) {
		               	$('#modal_normativa').modal('hide');
				reload_table();
		            } else {
			           
		                for (var i = 0; i < data.inputerror.length; i++) {
		                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); 
		                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
		                }
		               $('button[name="guardar_normativa_convocatoria"]').text('Guardar'); 
		               $('button[name="guardar_normativa_convocatoria"]').attr('disabled',false); 
		            }

		           
		            
		            
		        },
		        error: function (jqXHR, textStatus, errorThrown)
		        {
		        	console.log(jqXHR);
		            alert('Error adding / update data');
		            $('#btnGuardar').text('Guardar'); 
		            $('#btnGuardar').attr('disabled',false); 
		 
		        }
		    });
		}

		//FIN 
		

		function limpiar_tabs(){
			
			$(".nav-tabs li").removeClass("active");
			$('#principal').addClass('active');
		}



		function cambio(url){
			tipo = url;
			$("table tbody.files").empty();
			load(convocatoria+'/'+url);
		}

		function load(folder){
			'use strict';
		
		    $('#fileupload').fileupload({
		        url: '<?php echo site_url('normativa/subir')?>?data='+folder,
		    });
		    
		    $('#fileupload').fileupload(
		        'option',
		        'redirect',
		        window.location.href.replace(
		            /\/[^\/]*$/,
		            '/cors/result.html?%s'
		        )
		    );
		
		    if (window.location.hostname === 'blueimp.github.io') {
		        $('#fileupload').fileupload('option', {
		            url: '<?php echo site_url('normativa/subir')?>',
		            disableImageResize: /Android(?!.*Chrome)|Opera/
		                .test(window.navigator.userAgent),
		            maxFileSize: 999000,
		            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
		        });
		        if ($.support.cors) {
		            $.ajax({
		                url: '<?php echo site_url('normativa/subir')?>',
		                type: 'HEAD'
		            }).fail(function () {
		                $('<div class="alert alert-danger"/>')
		                    .text('Upload server currently unavailable - ' +
		                            new Date())
		                    .appendTo('#fileupload');
		            });
		        }
		    } else {
		        $('#fileupload').addClass('fileupload-processing');
		        $.ajax({
		            url: $('#fileupload').fileupload('option', 'url'),
		            dataType: 'json',
		            context: $('#fileupload')[0]
		        }).always(function () {
		            $(this).removeClass('fileupload-processing');
		        }).done(function (result) {
		            $(this).fileupload('option', 'done')
		                .call(this, $.Event('done'), {result: result});
		        });
		    }
	}


</script>

	
</body>
</html>