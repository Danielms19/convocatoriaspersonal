<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Usuarios</title>
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
	href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker-bs3.css">
<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/datepicker/datepicker3.css">
<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/select2/select2.min.css">
<!-- InputUpload -->
<link rel="stylesheet"
	href="<?php echo base_url(); ?>plugins/inputUpload/css/fileinput.min.css"
	media="all" type="text/css" />
<!-- Theme style -->
<link rel="stylesheet"
	href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
			 folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet"
	href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">


<link rel="icon" type="image/png"
	href="<?php echo base_url(); ?>dist/img/favicon.ico" />
<style>
form .form-group {
	margin-bottom: 8px;
}
		#sig-canvas {
			border: 2px dotted #CCCCCC;
			border-radius: 5px;
			cursor: crosshair;
		}
		#sig-dataUrl {
			width: 100%;
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
					Usuarios 
				</h1>
			</section>

			<!-- Main content -->
			<section class="content">
			
				<!---------- tabla miembros del comite ---------->
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-solid box-primary">
							<div class="box-header">
								<h3 class="box-title">
									<i class="fa fa-check-circle"></i> Usuarios del sistema
								</h3>
								
							</div>
							<!-- /.box-header -->
							<div class="box-body">
							<div class="box-tools pull-right">
									<div class="btn-toolbar">
										<button class="btn btn-sm btn-default"
											onclick="agregar_usuario()">
											<i class="fa fa-plus-circle"></i> AGREGAR USUARIO
										</button>
									</div>
								</div>
								<br><br>
								<table id="table_usuario"
									class="table table-bordered table-condensed table-hover responsive"
									cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Usuario</th>
											<th>Nombres</th>
											<th>Estado</th>
											<th style="width: 80px;">Acción</th>
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

</div>
		<!-- Inicio Modal: Agregar y/o Editar un usuario del sistema -->
		<div class="modal fade" id="modal_form_usuario" tabindex="-1"
			role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h3 class="modal-title" id="modal-title-usuario">Formulario de
							registro de usuario</h3>
					</div>
					<div class="modal-body form">
						<form action="#" id="form_usuario" class="form-horizontal">
							<div class="form-body">
							<div class="form-group">
									<label class="control-label col-md-3">Usuario</label>
									<div class="col-md-9">
										<input id="usuario" name="usuario"
											placeholder="Usuario"
											class="form-control" type="text"
											> <span class="help-block"></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Nombres</label>
									<div class="col-md-9">
										<input name="nombres" id="nombres"
											placeholder="Nombres"
											class="form-control" type="text"
											> <span class="help-block"></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Contraseña</label>
									<div class="col-md-9">
										<input type="password" id="clave" name="clave" placeholder="Contraseña"
											class="form-control" type="text"
											> <span class="help-block"></span>
									</div>
								</div>
								<div class="form-group" id="form_estado" hidden>
									<label class="control-label col-md-3">Estado</label>
									<div class="col-md-9">
										<select name="estado" id="estado" class="form-control">
											<option value="">¿ACTIVO O DESACTIVO?</option>
											<option value="1">ACTIVO</option>
											<option value="0">DESACTIVO</option>
										</select> <span class="help-block"></span>
									</div>
								</div>
								
							</div>
						</form>
					</div>
					<div class="modal-footer" id="modal_footer">
						<button type="button" id="btnSave" onclick="guardar_usuario()"
							class="btn btn-primary">Guardar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Fin Modal: Agregar y/o Editar un Miembro del Comité -->

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
		src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
	<script
		src="<?php echo base_url(); ?>plugins/select2/select2.full.min.js"></script>

	<script src="<?php echo base_url(); ?>dist/js/app.min.js"></script>

	<script src="<?php echo base_url(); ?>dist/js/vista.js"></script>

	<script type="text/javascript">	

var save_method; //for save method string
var table_docente;
var table_comite;
var table_plaza;


$(function () {
	//datatables
    table_usuario = $('#table_usuario').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('usuario/lista_usuarios')?>",
            "type": "POST",
            "data" :{"ci_csrf_token":"<?php echo $this->security->get_csrf_hash(); ?>"}
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
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
        "lengthMenu": [[10, 15, 20, 25], [10, 15, 20, 25]],
        "iDisplayLength": 10,
    });
    
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
	
});


function reload_table_usuario()
{
    table_usuario.ajax.reload(null,false); //reload datatable ajax
}


/******** comite de contratacion ********/
function agregar_usuario()
{
	$('#usuario').prop('disabled',false);
	$('#form_estado').hide();
    save_method = 'add';
    $('#form_usuario')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form_usuario').modal('show'); // show bootstrap modal
    $('#modal-title-usuario').text('Agregar usuario al sistema'); // Set Title to Bootstrap modal title
    $('#sig-clearBtn').click();
}


function editar_usuario(id)
{
	$('#form_estado').show();
	 $('#sig-clearBtn').click();
	 $('#usuario').prop('disabled',true);
    save_method = 'update';
    $('#form_usuario')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('usuario/obtener_usuario/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {         
            $('[name="usuarioID"]').val(data.usuarioID);
            $('[name="usuario"]').val(data.usuario);
            $('[name="nombres"]').val(data.nombres);
            $('[name="estado"]').val(data.estado);
        	$('#modal_form_usuario').modal('show'); // show bootstrap modal when complete loaded
        	$('#modal-title-usuario').text('Editar usuario del sistema'); // Set Title to Bootstrap modal title
		},
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });

}

function guardar_usuario()
{
    $('#btnSave').text('Guardando...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    var url;
 
    if(save_method == 'add') {
        url = "<?php echo site_url('usuario/agregar_usuario')?>";
    } else {
        url = "<?php echo site_url('usuario/actualizar_usuario')?>";
    }
 
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: {usuario:$('#usuario').val(),
              nombres:$('#nombres').val(),
              clave:$('#clave').val(),
              estado:$('#estado').val()},
        dataType: "JSON",
        success: function(data)
        {
            console.log(data);
            // if success close modal and reload ajax table
            if(data.status) {
                $('#modal_form_usuario').modal('hide');
                reload_table_usuario();
            } else {
                for (var i = 0; i < data.inputerror.length; i++) {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('Guardar'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('Guardar'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable
        }
    });
}



function LimpiarMensaje() {
    $('#mensajeError').text("");
}
 

</script>

</body>
</html>