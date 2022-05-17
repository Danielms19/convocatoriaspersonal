<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<title>SCD | UGEL Nº 04</title>
<!-- Tell the browser to be responsive to screen width -->
<meta
content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
		name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet"
				href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
				<!-- Font Awesome -->
				<link rel="stylesheet"
						href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
						<!-- Ionicons -->
						<link rel="stylesheet"
								href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
								<!-- Theme style -->
								<link rel="stylesheet"
										href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
										<!-- iCheck -->
										<link rel="stylesheet"
												href="<?php echo base_url(); ?>plugins/iCheck/flat/blue.css">

												<link rel="icon" type="image/png"
														href="<?php echo base_url(); ?>dist/img/favicon.ico" />

														<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
														<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.modal {
	text-align: center;
	padding: 0 !important;
}

.modal:before {
	content: '';
	display: inline-block;
	height: 100%;
	vertical-align: middle;
	margin-right: -4px;
}

.modal-dialog {
	display: inline-block;
	text-align: left;
	vertical-align: middle;
}

.noresize {
	resize: none;
}

.modal-body {
	max-height: 200px;
}
</style>
</head>

<body class="hold-transition login-page container">
	<div class="container">
	<?php if($resp){  ?>
		<!-- MENSAJE -->
		<div class="modal show" id="mRespuesta" tabindex="-1" role="dialog"
			aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="myModalLabel">
							<i class="fa fa-warning"></i>&nbsp;&nbsp;Advertencia
						</h4>
					</div>
					<div class="modal-body">
						<p align="center">
							<b>Los sentimos, las credenciales no son correctas.</b> <br> <br>
							<code>NOTA: Al tercer intento fallido, se le bloqueará la cuenta.</code>
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success btn-flat"
							onclick="Ocultar();">Aceptar</button>
					</div>
				</div>
			</div>
		</div>
	<?php }?>

	<div class="row" style="padding-top: 15%; padding-bottom: 40px"></div>
		<div class="row">
			<div class="col-md-5 col-md-offset-1">
				<div>
					<br /> <br /> <br /> <br /> <img
						src="<?php echo base_url(); ?>dist/img/logo_login.png"
						class="img-responsive center-block">
				</div>
			</div>
			<div class="col-md-4" style="margin-top: 30px">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 login-box-body">
						<h3 class="login-box-msg">INGRESO</h3>
						<?php 
						$attributes = array('method' => 'post');
						echo form_open("inicio/index",$attributes); ?>
        					<div class="form-group has-feedback">
								<input type="text" class="form-control" name="User"
									onblur="LimpiarUsuario()" placeholder="Ingrese usuario"
									value="<?php echo set_value('User'); ?>"> <span
									class="glyphicon glyphicon-user form-control-feedback"></span> <span
									class="text-red" id="errorusuario"><?php echo form_error('User');?></span>
							</div>
							<div class="form-group has-feedback">
								<input type="password" class="form-control" name="Password"
									onblur="LimpiarPassword()" placeholder="Ingrese contraseña"
									value="<?php echo set_value('Password'); ?>"> <span
									class="glyphicon glyphicon-lock form-control-feedback"></span> <span
									class="text-red" id="errorpassword"><?php echo form_error('Password');?></span>
							</div>
					
							<div class="row" <?php if(!$resp){ echo 'style="display:none;"'; }?> >  
								<div class="col-md-4">
									<?php echo $captcha['image']; ?>
								</div>
								<div class="col-md-8">
								<input type="text" autocomplete="off" id="userCaptcha"
									name="userCaptcha" placeholder="Código CAPTCHA"
									class="form-control" value="<?php if(!$resp){ echo $this->session->userdata ( 'captchaWord' ); }?>" >
									<span
									class="text-red" id="ss"><?php echo form_error('userCaptcha');?></span>
							</div>
							</div>
							
							<br>
							<div class="row">
								<div class="col-md-8">
									<a href=""><div>Olvide mi contraseña</div></a><br>
								</div>
							<div class="col-md-4">
								<button type="submit" name="Submit"
									class="btn btn-primary btn-block btn-flat">Ingresar</button>
							</div>
						</div>
        				<?php echo form_close();  ?>
        			</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery 2.1.4 -->
	<script
		src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- Bootstrap 3.3.5 -->
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>

	<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });

    function Ocultar(){
        $('#mRespuesta').attr('class','modal fade');
}

function LimpiarUsuario(){
	$('#errorusuario').text('');
}

function LimpiarPassword(){
	$('#errorpassword').text('');
}

</script>
</body>
</html>




