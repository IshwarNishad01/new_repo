<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Gayatri Typing</title>
	<!-- google font -->
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
	<link rel="icon" type="image/png" href="../assets/img/fevicon.png">
</head>

<body>
	<div class="main">
		<!-- Sing in  Form -->
		<section class="sign-in">
			<div class="container">
				<div class="signin-content">
					<!-- <div class="signin-image">
						<figure><img src="<?=base_url();?>admin_assets/img/pages/signin.jpg" alt="sing up image"></figure>
						
					</div> -->
					<div class="signin-form">
						<h2 class="form-title">GAYTRI TYPING
							<small style="color: #6777ef;">Admin Login</small>
						</h2>
						<?php if(isset($_REQUEST['error'])){?>
						<p style="color: red;">Invalid Id & Password......</p>
						<?php } ?>
						<?php if(isset($_REQUEST['logout'])){?>
						<p style="color: red;">logout successful......</p>
						<?php } ?>
						<form class="register-form" id="login-form" method="post" action="">
							<div class="form-group">
								<div class="">
									<input name="uname" type="text" placeholder="User Name" class="form-control input-height"> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="pwd" type="password" placeholder="Password" class="form-control input-height"> </div>
							</div>
							<!-- <div class="form-group">
								<input type="checkbox" name="remember-me" id="remember-me" class="agree-term">
								<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
									me</label>
							</div> -->
							<div class="form-group form-button">
								<button class="btn btn-round btn-primary" name="signin" id="signin">Login</button>
							</div>
						</form>
						<!-- <a href="<?=base_url('Admin_Add');?>" class="signup-image-link">Click here to Create an account</a>
						 -->
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- start js include path -->
	<script src="<?=base_url();?>admin_assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="<?=base_url();?>admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- end js include path -->
</body>

</html>