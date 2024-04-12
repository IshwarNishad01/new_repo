<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Gayatri Typing Or Steno Training Center</title>
	<link href="../../../../../css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">
	<!-- icons -->
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css">
	<!--bootstrap -->
	<link href="<?= base_url(); ?>assets/admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- data tables -->
	<link href="<?= base_url(); ?>assets/admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin_assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin_assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="<?= base_url(); ?>assets/admin_assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/theme/light/style.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css">
	<!-- favicon -->
	<link href="<?= base_url(); ?>assets/admin_assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin_assets/plugins/flatpicker/css/flatpickr.min.css">
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/admin_assets/img/favicon.ico">

	<style type="text/css">
		@media only screen and (max-width: 600px) {
			#example4 {
				width: 100%;
			}
		}
		.clockDisplay{
			font-size: 24px;
		}
	</style>
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<div class="page-header navbar navbar-fixed-top" id="for_print1">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
				<a href="#">
						<span class=""><img class="img-fluid" src="<?=base_url();?>assets/fronted_asset/img/logo.jpg" alt="" style="width: 25% !important;"></span>
						<span class="">Admin</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<h3 class="m-3 object">Gayatri Typing Or Steno Training Center</h3>
				</ul>
			

				<!-- start mobile menu -->
				<a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">

					<ul class="nav navbar-nav pull-left" style="margin-right:100px;">
						<li><a class="fullscreen-btn"></a></li>
					
						

						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<?php
							    $qu = $this->db->query("SELECT * FROM registration where id = ".$this->session->userdata('userid'))->result();
								foreach ($qu as $row) {
							?>
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<i class="icon-user">  Profile</i>
								 <img src="<?= base_url()?>assets/admin_assets/uploads/<?= $row->image ?>" alt="">
								<span class="username username-hide-on-mobile">
								</span></a>

							<ul class="dropdown-menu dropdown-menu-default"> 

								<li>
									<a href="<?= base_url('view_profile/'.$row->id) ?>">
										<i class="icon-logout"></i>View Profile</a>
										
								</li>
								
								
								<li>
									<a href="<?= base_url('user-logout') ?>">
										<i class="icon-logout"></i> Log Out </a>
										<?php } ?>
								</li>

								
							</ul>
						</li>
						<!-- end manage user dropdown -->

					</ul>
				</div>
			</div>
		</div>
