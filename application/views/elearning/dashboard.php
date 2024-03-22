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
	<link href="<?= base_url(); ?>assets/admin_assets/css/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">
	<!-- icons -->
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css">
	<!--bootstrap -->
	<link href="<?= base_url(); ?>assets/admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin_assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin_assets/css/material_style.css">
	<!-- inbox style -->
	<link href="<?= base_url(); ?>assets/admin_assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css">
	<!-- Theme Styles -->
	<link href="<?= base_url(); ?>assets/admin_assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/theme/light/style.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css">
	<!-- favicon -->
	<link href="assets/fronted_asset/img/logo.jpg" rel="icon">
	<!-- <link rel="shortcut icon" href="</?=base_url();?>assets/admin_assets/img/logo_gd_c.png"> -->
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<?php include 'header1.php'; ?>
		<!-- end header -->

		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php include 'sidebar.php'; ?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<br><br>

					<div class="row ">
						<div class="col-lg-12">
							<div class="card p-3">
								<h4 class="info-box-title">Welcome <?= $this->session->userdata('first_name') . $this->session->userdata('last_name') ?> !</h4>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6">
							<a href="<?= base_url('All_Career'); ?>">
								<div class="card comp-card">
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col">
												<div class="col-lg-6 mt-0">
													<h4 class="info-box-title">Total Paper</h4>
												</div>
												<?php
												$data1['r1'] = $this->db->query("select count(career_id) as det1 from career")->row_array();

												?>
												<h3 class="mt-1 mb-3 info-box-title col-green"><?php foreach ($data1 as $key1) {
																									echo $key1['det1'];
																								} ?></h3>
												<div class="progress">
													<div class="progress-bar l-bg-red" style="width: 45%"></div>
												</div>
											</div>
											<div class="col-lg-6">
												<div id="sparkline12"><canvas style="display: inline-block; width: 367px; height: 70px; vertical-align: top;"></canvas>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-3 col-lg-6">
							<a href="">
								<div class="card comp-card">
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col">
												<div class="col mt-0">

													<h4 class="info-box-title">Total Attempts</h4>
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
								</div>
							</a>
						</div>


						<div class="col-xl-3 col-lg-6">
							<a href="<?= base_url('All_Career'); ?>">
								<div class="card comp-card">
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col">
												<div class="col mt-0">
													<h4 class="info-box-title">Total Paper</h4>
												</div>
												<?php
												$totalpapers = $this->db->query("select * from paper")->result();
												?>
												<h3 class="mt-1 mb-3 info-box-title col-green"><?= count($totalpapers); ?></h3>
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
								</div>
							</a>
						</div>


					</div>




				</div>
			</div>

			<!-- start js include path -->

			
			<script>
				function showTime() {
					var date = new Date();
					var h = date.getHours(); // 0 - 23
					var m = date.getMinutes(); // 0 - 59
					var s = date.getSeconds(); // 0 - 59
					var session = "AM";

					if (h == 0) {
						h = 12;
					}

					if (h > 12) {
						h = h - 12;
						session = "PM";
					}

					h = (h < 10) ? "0" + h : h;
					m = (m < 10) ? "0" + m : m;
					s = (s < 10) ? "0" + s : s;

					var time = h + ":" + m + ":" + s + " " + session;
					document.getElementById("MyClockDisplay").innerText = time;
					document.getElementById("MyClockDisplay").textContent = time;

					setTimeout(showTime, 1000);

				}

				showTime();
			</script>


			<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
			<script src="<?= base_url(); ?>assets/admin_assets/plugins/popper/popper.js"></script>
			<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
			<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
			<script src="<?= base_url(); ?>assets/admin_assets/plugins/feather/feather.min.js"></script>
			<!-- bootstrap -->
			<script src="<?= base_url(); ?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
			<script src="<?= base_url(); ?>assets/admin_assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
			<script src="<?= base_url(); ?>assets/admin_assets/plugins/sparkline/jquery.sparkline.js"></script>
			<script src="<?= base_url(); ?>assets/admin_assets/js/pages/sparkline/sparkline-data.js"></script>
			<!-- Common js-->
			<script src="<?= base_url(); ?>assets/admin_assets/js/app.js"></script>
			<script src="<?= base_url(); ?>assets/admin_assets/js/layout.js"></script>
			<script src="<?= base_url(); ?>assets/admin_assets/js/theme-color.js"></script>
			<!-- material -->
			<script src="<?= base_url(); ?>assets/admin_assets/plugins/material/material.min.js"></script>
			<!--apex chart-->
			<script src="<?= base_url(); ?>assets/admin_assets/plugins/apexcharts/apexcharts.min.js"></script>
			<script src="<?= base_url(); ?>assets/admin_assets/js/pages/chart/apex/home-data.js"></script>
			<!-- summernote -->
			<script src="<?= base_url(); ?>assets/admin_assets/plugins/summernote/summernote.js"></script>
			<script src="<?= base_url(); ?>assets/admin_assets/js/pages/summernote/summernote-data.js"></script>
			<!-- end js include path -->
</body>

</html>
