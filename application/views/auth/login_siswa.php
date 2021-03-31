<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Siswa | Aplikasi Pembayaran SPP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/owl.theme.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>PLEASE LOGIN TO APP</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
          <div class="panel-body container">
              <form action="<?=site_url('/Auth/doLoginSiswa')?>" method="POST" id="loginForm">
                  <div class="form-group">
                      <label class="control-label" for="username">Username</label>
                      <input type="text" title="Please enter you username" required="" name="username" id="username" class="form-control">
                      <span class="help-block small">Your unique username to app</span>
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="password">Password</label>
                      <input type="password" title="Please enter your password" placeholder="******" required="" name="password" id="password" class="form-control">
                      <span class="help-block small">Your strong password</span>
                  </div>
                  <button class="btn btn-success btn-block loginbtn">Login</button>
              </form>
          </div>
        </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=base_url()?>assets/template/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?=base_url()?>assets/template/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/icheck/icheck.min.js"></script>
    <script src="<?=base_url()?>assets/template/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="<?=base_url()?>assets/template/js/tawk-chat.js"></script>
</body>

</html>