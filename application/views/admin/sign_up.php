<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>GD Professional College</title>
	<link href="../../../../../css-1?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
	<!-- icons -->
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="<?=base_url();?>assets/admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Theme Styles -->
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<!-- style -->
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/css/pages/login.css">
	<!-- favicon -->
<link rel="shortcut icon" href="<?=base_url();?>assets/admin_assets/img/fevicon.png">

</head>

<body>
	<div class="main">
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
						<figure><img src="<?=base_url();?>assets/admin_assets/img/pages/signup.jpg" alt="sing up image"></figure>
						
					</div>
				</div>
			</div>
		</section>
	</div></div></div></div></div>
	<!-- start js include path -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- end js include path -->
</body>

</html>