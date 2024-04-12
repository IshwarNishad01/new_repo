<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Gayatri Typing Or Steno Training Center</title>
	<!-- google font -->
	<link href="../../../../../css-1?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">

	   <!-- Favicon -->
	   <link href="assets/fronted_asset/img/logo.jpg" rel="icon">
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
				
					<div class="signin-form">
						<h2 class="form-title">GAYTRI TYPING
							<small style="color: #6777ef;">Admin Login</small>
						</h2>

						<?php
						if ($this->session->tempdata('admin_error') != "") {
						?>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<?= $this->session->tempdata('admin_error') ?>
							</div>

						<?php }	?>
					
						<form class="register-form" id="login-form" method="post" action="">
							<div class="form-group">
								<div class="">
									<input name="email" required type="email" placeholder="Enter Email" class="form-control input-height"> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="pwd" required type="password" placeholder="Enter Password" class="form-control input-height"> </div>
							</div>
						
							<div class="form-group form-button">
								<button class="btn btn-round btn-primary" name="signin" id="signin">Login</button>
							</div>
						</form>
				
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
