<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>GD Professional College</title>
	<!-- google font -->
	<link href="../../../../../css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">
	<!-- icons -->
	<link href="<?=base_url();?>assets/admin_assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css">
	<!--bootstrap -->
	<link href="<?=base_url();?>assets/admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/style.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css">
	<!-- dropzone -->
	<link href="<?=base_url();?>assets/admin_assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/flatpicker/css/flatpickr.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/css/pages/login.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="<?=base_url();?>assets/admin_assets/img/gd_logo.png">
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
		<!-- start header -->
		<?php include 'header1.php';?>
		<!-- end header -->
	
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php include 'sidebar.php';?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<?php if(isset($_REQUEST['add_event'])){?>
							<p style="color:green;font-size:20px ;">Event Successfully Added......</p><?php } ?>
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Admin</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						
						<section class="signup">
			<div class="container">
				<div class="signup-content">
					<div class="signup-form">
						<?php if(isset($_REQUEST['sign_up_successful'])){?>
							<p style="color:green;">registration successfully completed</p>
						<?php } ?>
						<h2 class="form-title">Sign up</h2>
						<form method="POST" class="register-form" id="register-form" action="">
							<div class="form-group">
								<div class="">
									<input name="uname" type="text" placeholder="Your Name" class="form-control input-height"> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="email" type="email" placeholder="Your Email" class="form-control input-height"> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="pwd" type="password" placeholder="Password" class="form-control input-height"> </div>
							</div>
							<!-- <div class="form-group">
								<div class="">
									<input name="re-pwd" type="password" placeholder="Repeat Password" class="form-control input-height"> </div>
							</div> -->
							<div class="form-group">
								<input type="checkbox" name="agree-term" id="agree-term" class="agree-term">
								<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
									statements in <a href="#" class="term-service">Terms of service</a></label>
							</div>
							<div class="form-group form-button">
								<button class="btn btn-round btn-primary" name="signup" id="register">Register</button>
							</div>
							<a href="<?=base_url("Admin_Login");?>" class="" >I am already member</a>
						</form>
					</div>
					<div class="signup-image">
						<!-- <figure><img src="<?=base_url();?>assets/admin_assets/img/pages/signup.jpg" alt="sing up image"></figure>
						 -->
					</div>
				</div>
			</div>
		</section>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/popper/popper.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Common js-->
	<script src="<?=base_url();?>assets/admin_assets/js/app.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/layout.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/material/material.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/date-time/date-time.init.js"></script>
	<!-- dropzone -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/dropzone/dropzone.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('#preview_take').change(function(event){
      var x=URL.createObjectURL(event.target.files[0]);
      $('#preview').attr("src",x);
     $('#preview').css("width", "100px");
$('#preview').css("height", "100px");

    });
  });
</script> -->
	<!-- end js include path -->
</body>

</html>