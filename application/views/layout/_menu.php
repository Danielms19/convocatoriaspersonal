    <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="<?php echo base_url(); ?>convocatoria" class="navbar-brand"><b>UGEL</b> 04</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            </div><!-- /.navbar-collapse -->
            <ul class="nav navbar-nav">
            <li <?php   if($pag == 1){ echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>convocatoria"> Convocatorias</a></li>
            <li <?php   if($pag == 3){ echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>normativa"> Normativas</a></li>
           	<?php  if($this->session->userdata ( 'user' ) == 'admin') { ?>	
           		<li <?php   if($pag == 2){ echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>usuario"> Usuarios</a></li> 
           	<?php } ?>
          </ul>
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- The user image in the navbar-->
                      <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="hidden-xs"><?php echo $this->Usuario_model->datos();?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- The user image in the menu -->
                      <li class="user-header"><img
							src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg"
							class="img-circle" alt="User Image">
							<p><?php echo $this->Usuario_model->datos();?></p>
							</li>
                      	<li class="user-footer">
							<div class="pull-left">
								<a href="javascript:void(0)" onclick="cambioPassword()"
									class="btn btn-default btn-flat"><i class="fa fa-gear"></i>&nbsp;&nbsp;Opciones</a>
							</div>
							<div class="pull-right">
								<?php echo form_open ( "inicio/salir" ); ?>
                      		<button type="submit"
									class="btn btn-default btn-flat">
									<i class="fa fa-lock"></i>&nbsp;&nbsp;Salir
								</button>
                      		<?php echo form_close(); ?>
                      		</div>
						</li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      
      
      <div class="modal fade" id="modal_password" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h3 class="modal-title" >Cambio de contraseña</h3>
					</div>
				<div class="modal-body" >
				<div class="form-horizontal">
			<div id="respuesta_modal" class="alert alert-success alert-dismissible" hidden>
			<h4><i class="icon fa fa-check"></i> Respuesta!</h4> <p id="respuesta_password"><p>
			</div>
				
				<div class="form-group">
						<label class="control-label col-md-5">Contraseña</label>
						<div class="col-sm-7">
							<input type="password" id="password" name="password" class="form-control">
							<span class="text-red" id="errorclave"><span>						
						</div>
						
					
					</div>
					<div class="form-group">
						<label class="control-label col-md-5">Vuelva a escribir la contraseña</label>
						<div class="col-sm-7">
							<input type="password" id="passwordv" name="passwordv" class="form-control" >
							<span class="text-red" id="errorvclave"><span>						
						</div>
						
					
					</div>
				

			</div>
				</div>
					<div class="modal-footer" >
					<button type="button" id="btnSave" onclick="Password();"
							class="btn btn-primary">Cambiar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</div>
			</div>
		</div>
</div>
      
      <script>
			function cambioPassword(){
					$('#modal_password').modal('show');
			}

			function Password() {
			   $.ajax({
			        url: '<?php echo site_url('inicio/cambio_password') ?>',
			        type: 'post',
			        data: { password:$('#password').val(),
				        	passwordv:$('#passwordv').val()},
			        dataType: 'json',
			        success: function (s) {
			            console.log(s);
			            if (s['resp']) {
			                $(':input').val('');
			             $('#respuesta_password').text(s['msg']);
			             $("#respuesta_modal").show();
			             setTimeout(function(){
			                 $("#respuesta_modal").hide();
			             }, 2000);
			            }
			            else {
			            	document.getElementById("errorclave").innerHTML = s['pass1'];
			            	document.getElementById("errorvclave").innerHTML = s['pass2'];
			            }
			        }
			    });
			}
			
      </script>