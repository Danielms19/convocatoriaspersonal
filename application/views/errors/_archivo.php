<!DOCTYPE HTML>
<!--
/*
 * jQuery File Upload Plugin Demo
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
-->
<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>jQuery File Upload Demo</title>

<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">  
    
<!-- Generic page styles -->
<link rel="stylesheet" href="<?php echo base_url(); ?>upload/css/style.css">
<!-- blueimp Gallery styles  -->
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars  -->
<link rel="stylesheet" href="<?php echo base_url(); ?>upload/css/jquery.fileupload.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>upload/css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="<?php echo base_url(); ?>upload/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="<?php echo base_url(); ?>upload/css/jquery.fileupload-ui-noscript.css"></noscript>


<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   
  
  
   <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
	
	
	<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker-bs3.css">
<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/datepicker/datepicker3.css">

</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://github.com/blueimp/jQuery-File-Upload">jQuery File Upload</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="https://github.com/blueimp/jQuery-File-<?php echo base_url(); ?>upload/tags">Download</a></li>
                <li><a href="https://github.com/blueimp/jQuery-File-Upload">Source Code</a></li>
                <li><a href="https://github.com/blueimp/jQuery-File-<?php echo base_url(); ?>upload/wiki">Documentation</a></li>
                <li><a href="https://blueimp.net">&copy; Sebastian Tschan</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">

 <div class="row">
 <button type="button" onclick="registrar_convocatoria()">REGISTRO</button>
					<div class="col-xs-12">
						<div class="box box-solid box-primary">
						
							<div class="box-body">
								<div class="col-xs-12">
									<table id="table"
										class="table table-condensed table-hover responsive"
										cellspacing="0" width="100%">
										<thead>
											<tr>
												<th class="text-center" >Numero</th>
												<th style="width: 600px">Contrato</th>
												<th class="text-center">Bases</th>
												<th class="text-center" >Evaluación CV</th>
												<th class="text-center" style="width: 120px">Resultado Entrevista</th>
												<th class="text-center" style="width: 120px">Comunicado</th>
												<th class="text-center" style="width: 120px">Resultado final</th>
												<th class="text-center" style="width: 120px">Estado</th>
												<th class="text-center" style="width: 270px">ACCION</th>
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
				<strong><p id="respuesta_modal"></p></strong>
				</div>
					<div class="modal-footer" >
						<button type="button" class="btn btn-danger" onclick="cerrar_respuesta()">Aceptar</button>
					</div>
			</div>
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
				<strong><p >¿Desea eliminar esta convocatoria?</p></strong>
				</div>
					<div class="modal-footer" >
					<button type="button" id="btnEliminar" onclick="confirmar()"
							class="btn btn-danger">Eliminar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					
					</div>
			</div>
		</div>
</div>


<div class="modal fade" id="modal_convocatoria" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h3 class="modal-title" id="titulo_convocatoria" ></h3>
					</div>

<div class="modal-body" >
   
   <form id="form_convocatoria" class="form-horizontal">
					<input type="hidden" value="" id="IDconvocatoria" name="IDconvocatoria"> 
									<div class="form-group" id="form_estado" >
									<label class="control-label col-md-3">Estado</label>
									<div class="col-md-4">
										<select class="form-control" id="estado"
											name="estado" style="width: 100%" >
											<option value="1">ACTIVO</option>
											<option value="2">EN PROCESO</option>
											<option value="3">CULMINADO</option>
										</select> <span class="help-block"></span>
									</div>
								</div>	
								<div class="form-group">
									<label class="control-label col-md-3">Numero</label>
									<div class="col-md-7">
										<input name="numero" value="" class="form-control"
												type="text">
										<span class="help-block"></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Asunto contrato</label>
									<div class="col-md-7">
										<textarea name="asunto" 
											class="form-control"
											></textarea>
										<span class="help-block"></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Fecha</label>
									<div class="col-md-3">
										<input name="fecha" value="" class="form-control datepicker"
												type="text">
										<span class="help-block"></span>
									</div>
								</div>
								<button type="button" id="btnSave" onclick="guardar_convocatoria()"
							class="btn btn-primary">Guardar</button>
								</form>
   
     <div class="nav-tabs-custom" id="carga_archivos">
                <ul class="nav nav-tabs">
                  <li id="principal" onclick="cambio(1)"><a  data-toggle="tab">Bases</a></li>
                  <li onclick="cambio(2)" ><a  data-toggle="tab">Evaluación CV</a></li>
                  <li onclick="cambio(3)"><a  data-toggle="tab">Resultado Entrevista</a></li>
                  <li onclick="cambio(4)"><a  data-toggle="tab">Comunicado</a></li>
                  <li onclick="cambio(5)"><a  data-toggle="tab">Resultado final</a></li>
                </ul>
                
    <br>
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Agregar...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Cargar</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancelar</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Eliminar</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for <?php echo base_url(); ?>upload/download -->
        <table id="tabla_archivos" role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>
    
    
    
    
</div>

</div>


</div>

</div>

</div>
				
				</div>

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Cargar</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancelar</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
               <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Eliminar</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>


<!-- 

  <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" onclick="eliminar_archivo()">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>

  <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>


 -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo base_url(); ?>upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the <?php echo base_url(); ?>upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
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
<!-- The main application script -->

<script src="<?php echo base_url(); ?>plugins/datatables/table/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>plugins/datatables/table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/datatables/table/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/datatables/table/responsive.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    		<script
		src="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
	<script
		src="<?php echo base_url(); ?>plugins/datepicker/bootstrap-datepicker.js"></script>


 <script type="text/javascript">

		var save_method; //for save method string
		var table;
		var convocatoria = '';
		 
		$(document).ready(function() {
			
		    table = $('#table').DataTable({
		    	"processing": true,
		        "serverSide": true,
		        "order": [],
		        "bFilter": false,
		        "ajax": {
		            "url": "<?php echo site_url('convocatoria/lista')?>",
		            "type": "POST",
		            "data": {"ci_csrf_token":"<?php echo $this->security->get_csrf_hash(); ?>"}
		        },
		        "columnDefs": [
		        {
		            "targets": [ -1,-2, 1, 0, 2, 3,4,5,6 ],
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
		    
		   
		});

		function reload_table()
		{
		    table.ajax.reload(null,false); //reload datatable ajax
		}

		$( "#modal_convocatoria" ).on('hidden.bs.modal', function(){
			reload_table();
		});

		function cerrar_respuesta(){
			reload_table();
			 $('#modal_respuesta').modal('hide');
		}

		function editar_convocatoria(id){
			
				 $.ajax({
				        url : "<?php echo site_url('convocatoria/obtener/')?>/" + id,
				        type: "GET",
				        dataType: "JSON",
				        success: function(data)
				        {
					        
				        	$('[name="IDconvocatoria"]').val(data.IDconvocatoria);
				        	$('[name="estado"]').val(data.estado);
				        	$('[name="numero"]').val(data.numero);
				            $('[name="asunto"]').val(data.asuntoContrato);
				            $('[name="fecha"]').val(data.fecha);
				            
				            save_method = 'update';
							$('#carga_archivos').show();
							$('#modal_convocatoria').modal('show');
							$('#principal').addClass('active');
							convocatoria = id;
							cambio(1);
							
				        	$('#modal_form_plaza').modal('show');
				        	$('#titulo_convocatoria').text('Formulario para la edición de la convocatoria #'+ data.IDconvocatoria);
						},
				        error: function (jqXHR, textStatus, errorThrown)
				        {
				            alert('Error get data from ajax');
				        }
				    });
		}

		function cerrar(){
			reload_table();
			$('#modal_convocatoria').modal('hide');
		}

		function eliminar_convocatoria(id){
			$('#modal_confirmar').modal('show');
			$('#IDconvocatoria_e').val(id);
		}

		function confirmar(){
			$.ajax({
		        url : "<?php echo site_url('convocatoria/eliminar')?>",
		        type: "POST",
		        data: {IDconvocatoria: $('#IDconvocatoria_e').val()},
		        dataType: "JSON",
		        success: function(data)
		        {
			        if(data.status){
			        	$('#modal_confirmar').modal('hide');
			       		$('#respuesta_modal').text('El registro se ha eliminado con éxito.');
			        	
			        }else{
			        	$('#respuesta_modal').text('El registro no se podido eliminar.');
			        }
			        $('#modal_respuesta').modal('show');
		        	
				},
		        error: function (jqXHR, textStatus, errorThrown)
		        {
		            alert('Error get data from ajax');
		        }
		    });
		}

		function registrar_convocatoria(){
			save_method = 'add';
			$('#titulo_convocatoria').text('Registro de una nueva convocatoria');
			$('#carga_archivos').hide();
			$('#modal_convocatoria').modal('show');
		}

		function guardar_convocatoria(){
			$('#btnSave').text('Guardando...'); //change button text
		    $('#btnSave').attr('disabled',true); //set button disable
		    var url;
		 
		    if(save_method == 'add') {
		        url = "<?php echo site_url('convocatoria/registrar')?>";
		    } else {
		        url = "<?php echo site_url('convocatoria/actualizar')?>";
		    }
		 
		    // ajax adding data to database
		    $.ajax({
		        url : url,
		        type: "POST",
		        data: $('#form_convocatoria').serialize(),
		        dataType: "JSON",
		        success: function(data)
		        {
		           
		            // if success close modal and reload ajax table
		            if(data.status) {
			            console.log(data);
		                $('#carga_archivos').show();
		                $('#IDconvocatoria').val(data.ID);
		                convocatoria = data.ID;
		                cambio(1);
		               
		            } else {
		                for (var i = 0; i < data.inputerror.length; i++) {
		                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
		                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
		                }
		            }
		            $('#btnSave').text('Guardar'); //change button text
		            $('#btnSave').attr('disabled',false); //set button enable
		            reload_table();
		        },
		        error: function (jqXHR, textStatus, errorThrown)
		        {
		            alert('Error adding / update data');
		            $('#btnSave').text('Guardar'); //change button text
		            $('#btnSave').attr('disabled',false); //set button enable
		 
		        }
		    });
		}



$(function () {
    
load(convocatoria);
$('.datepicker').datepicker({
    autoclose: true,
    format: "yyyy-mm-dd",
    todayHighlight: true,
    orientation: "top auto",
    todayBtn: true,
    todayHighlight: true,
    language: "es"  
});

});

function cambio(url){
	$("table tbody.files").empty();
	load(convocatoria+'/'+url);
}

function load(folder){

	'use strict';

	

    //var folder = ''

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: '<?php echo site_url('convocatoria/subir')?>?data='+folder,
        
    });
    

    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

    if (window.location.hostname === 'blueimp.github.io') {
        // Demo settings:
        $('#fileupload').fileupload('option', {
            url: '<?php echo site_url('convocatoria/subir')?>',
            // Enable image resizing, except for Android and Opera,
            // which actually support image resizing, but fail to
            // send Blob objects via XHR requests:
            disableImageResize: /Android(?!.*Chrome)|Opera/
                .test(window.navigator.userAgent),
            maxFileSize: 999000,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
        });
        // Upload server status check for browsers with CORS support:
        if ($.support.cors) {
            $.ajax({
                url: '<?php echo site_url('convocatoria/subir')?>',
                type: 'HEAD'
            }).fail(function () {
                $('<div class="alert alert-danger"/>')
                    .text('Upload server currently unavailable - ' +
                            new Date())
                    .appendTo('#fileupload');
            });
        }
    } else {
        // Load existing files:
        $('#fileupload').addClass('fileupload-processing');
        $.ajax({
            // Uncomment the following to send cross-domain cookies:
            //xhrFields: {withCredentials: true},
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




<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
</body>
</html>
