<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Gaytri Typing</title>
	<!-- google font -->
	<link href="<?=base_url();?>assets/admin_assets/css/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">
	<!-- icons -->
	<link href="<?=base_url();?>assets/admin_assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css">
	<!--bootstrap -->
	<link href="<?=base_url();?>assets/admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/css/material_style.css">
	<!-- inbox style -->
	<link href="<?=base_url();?>assets/admin_assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css">
	<!-- Theme Styles -->
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/style.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css">
	<!-- favicon -->
	<!-- <link rel="shortcut icon" href="</?=base_url();?>assets/admin_assets/img/logo_gd_c.png"> -->
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
					<br><br>

						<div class="row ">
						<div class="col-xl-3 col-lg-6">
							<a href="<?=base_url('All_Student');?>">
							<div class="card comp-card">
								<div class="card-body">
									<div class="row align-items-center">

										<div class="col">
											<div class="col mt-0">
												<h4 class="info-box-title">Total Students Registration 
												</h4>
											</div>
											<?php 
												$data['r']=$this->db->query("select count(sid) as det from student_regi")->row_array();

											?>
											<h3 class="mt-1 mb-3 info-box-title col-green"><?php foreach($data as $key){ echo $key['det'];}?></h3>
											<div class="progress">
												<div class="progress-bar l-bg-purple" style="width: 45%"></div>
											</div>
										</div>
										<div class="col-auto">
											<div id="sparkline7"><canvas style="display: inline-block; width: 267px; height: 70px; vertical-align: top;"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div></a>
						</div>
						<div class="col-xl-3 col-lg-6">
							<a href="<?=base_url('All_Career');?>">
							<div class="card comp-card">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col">
											<div class="col mt-0">
												<h4 class="info-box-title">Total Career Application</h4>
											</div>
											<?php 
												$data1['r1']=$this->db->query("select count(career_id) as det1 from career")->row_array();

											?>
											<h3 class="mt-1 mb-3 info-box-title col-green"><?php foreach($data1 as $key1){ echo $key1['det1'];}?></h3>
											<div class="progress">
												<div class="progress-bar l-bg-red" style="width: 45%"></div>
											</div>
										</div>
										<div class="col-auto">
											<div id="sparkline12"><canvas style="display: inline-block; width: 367px; height: 70px; vertical-align: top;"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div></a>
						</div>
						<div class="col-xl-3 col-lg-6">
							<a href="">
							<div class="card comp-card">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col">
											<div class="col mt-0">

												<h4 class="info-box-title">Total Course</h4>
											</div>
											<h3 class="mt-1 mb-3 info-box-title col-green">4</h3>
											<div class="progress">
												<div class="progress-bar l-bg-green" style="width: 45%"></div>
											</div>
										</div>
										<div class="col-auto">
											<div id="sparkline9"><canvas style="display: inline-block; width: 167px; height: 70px; vertical-align: top;"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div></a>
						</div>
					
					</div>




				</div></div>
	<!-- 	<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; Smart University Theme By
				<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		
	</div>
</div>
	 start js include path -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/popper/popper.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- Common js-->
	<script src="<?=base_url();?>assets/admin_assets/js/app.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/layout.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/material/material.min.js"></script>
	<!--apex chart-->
	<script src="<?=base_url();?>assets/admin_assets/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/chart/apex/home-data.js"></script>
	<!-- summernote -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/summernote/summernote.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/summernote/summernote-data.js"></script>
	<!-- end js include path -->
</body>

</html>
