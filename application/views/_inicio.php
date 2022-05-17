<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/material/mmenu/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2016 17:47:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title>Ingreso | UGEL 04</title>

	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>dist/img/favicon.ico" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/login/css/bootstrap.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/login/css/bootstrap-extend.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/login/css/site.min3f0d.css?v2.2.0">


  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/login/css/login.min3f0d.css?v2.2.0">

  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700'>
  
  <style type="text/css">
  .page-login:before{background-image:url('<?php echo base_url(); ?>dist/login/images/login4.jpg')}
  </style>

  <!-- Scripts -->
  <script src="<?php echo base_url(); ?>dist/login/js/modernizr.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/breakpoints.min.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login layout-full page-dark">
  
  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="brand">
        <img height="100" width="300" class="brand-img" src="<?php echo base_url(); ?>dist/img/logo_login.png" alt="...">
      </div>
      <p>Ingrese sus credenciales</p>
    <?php 
						$attributes = array('method' => 'post');
						echo form_open("inicio/index",$attributes); ?>
        <div class="form-group form-material floating">
          <input type="text" class="form-control empty" id="inputName" name="User" value="<?php echo set_value('User'); ?>">
          <label class="floating-label" for="inputName">Usuario</label>
        </div>
        <div class="form-group form-material floating">
          <input type="password" class="form-control empty" id="inputPassword" name="Password" value="<?php echo set_value('Password'); ?>">
          <label class="floating-label" for="inputPassword">Contraseña</label>
        </div>
        <div class="row" <?php if(!$resp){ echo 'style="display:none;"'; }?> >  
								<div class="col-md-4">
									<?php echo $captcha['image']; ?>
								</div>
								<div class="col-md-8">
								<div class="form-group form-material floating">
          <input type="text" autocomplete="off" id="userCaptcha"
									name="userCaptcha" placeholder="Código CAPTCHA"
									class="form-control empty" value="<?php if(!$resp){ echo $this->session->userdata ( 'captchaWord' ); }?>" >
          <label class="floating-label" for="inputPassword">Contraseña</label>
        </div>
        
								
									<span
									class="text-red" id="ss"><?php echo form_error('userCaptcha');?></span>
							</div>
							</div>
        <div class="form-group clearfix">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
    <?php echo form_close();  ?>
    

      <footer class="page-copyright page-copyright-inverse">
        <p>E.T.I - UGEL 04</p>
        <p>© 2022. Todos los derechos reservados.</p>
        <div class="social">
          <a href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-dribbble" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src="<?php echo base_url(); ?>dist/login/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/animsition.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/jquery-asScroll.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/jquery.mousewheel.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/jquery.asScrollable.all.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/jquery-asHoverScroll.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/waves.min.js"></script>   

  <!-- Plugins 
  <script src="../../global/vendor/jquery-mmenu/jquery.mmenu.min.all.js"></script>
  <script src="../../global/vendor/switchery/switchery.min.js"></script>
  <script src="../../global/vendor/intro-js/intro.min.js"></script>
  <script src="../../global/vendor/screenfull/screenfull.min.js"></script>
  <script src="../../global/vendor/slidepanel/jquery-slidePanel.min.js"></script> -->

  <!-- Plugins For This Page -->
  <script src="<?php echo base_url(); ?>dist/login/js/jquery.placeholder.min.js"></script>

  <!-- Scripts -->
  <script src="<?php echo base_url(); ?>dist/login/js/core.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/site.min.js"></script>

  <script src="<?php echo base_url(); ?>dist/login/js/menubar.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/gridmenu.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/sidebar.min.js"></script>

  <script src="<?php echo base_url(); ?>dist/login/js/config-colors.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/config-tour.min.js"></script>

  <script src="<?php echo base_url(); ?>dist/login/js/asscrollable.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/animsition.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/slidepanel.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/switchery.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/tabs.min.js"></script>

  <script src="<?php echo base_url(); ?>dist/login/js/jquery-placeholder.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/login/js/material.min.js"></script> 


  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


  <!-- Google Analytics 
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js',
      'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
  </script> -->
</body>


<!-- Mirrored from getbootstrapadmin.com/remark/material/mmenu/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2016 17:47:02 GMT -->
</html>