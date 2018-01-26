<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>MARS PROJECT</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/admin-style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
		      <form method="post" class="form-login" action="<?php echo site_url('login'); ?>/loginValidation">
		        <h2 class="form-login-heading">sign in now</h2>
		        
		        <?php if($this->session->userdata('error_status')=='login error') { ?>
	  				<div style="width: 100%; background-color: red; color: white; text-align: center;">
	  					Username or password is wrong
	  				</div>
	  			<?php } ?>
		        <div class="login-wrap">
		            <input name="username" type="text" class="form-control" placeholder="Username" autofocus>
		            <br>
		            <input name="password" type="password" class="form-control" placeholder="Password">
		            <label class="checkbox">
		                <!-- <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		                </span> -->
		            </label>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>		
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url(); ?>assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
