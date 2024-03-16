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
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/admin_assets/img/favicon.ico">
	<style type="text/css">
		@media only screen and (max-width: 600px) {
			#d {
				width: 100%;
			}
		}
	</style>
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo" onload="clock()">

	<div class="page-wrapper">

		<div class="page-container">
			<div class="sidebar-container">
				<div class="sidemenu-container   fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 591px;">

							<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="">
								<center>
									<img src="https://gdcollege.co.in/assets/img/favicon_bg.jpg">
								</center>
								<center>
									<h4>GD Professional College</h4>
									<!-- <h6>An</h6> -->
									<h6>An ISO 9001:2015 certified</h6>
								</center>
								<table cellspacing="25" cellpadding="15">
									<tr>
										<th>Registration No:</th>
										<td><?= $_SESSION['regino']; ?></td>
									</tr>
									<tr>
										<th>Student Name </th>
										<td> : <?php echo $_SESSION['first_name']; ?> <?= $_SESSION['last_name']; ?></td>
									</tr>
									<tr>
										<th>Course </th>
										<?php
										$course = $_SESSION['course_name'];
										$course_name = $this->db->query("select * from course where course_id = $course")->result();
										?>

										<td> : <?= $course_name[0]->course_name ?></td>
									</tr>
								</table>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="page-content-wrapper">

				<div class="page-content">
					<div class="page-bar">

					</div>
					<div class="row" id="d">
						<div class="col-md-1"></div>
						<div class="col-md-10 col-sm-12">

							<div class="card-box">
								<div class="card-head">
									<header>Student Result</header>

								</div>
								<div class="card-body ">

									<h4>
										Total Questions - <?= $total_question ?>
									</h4>


									<h4>
										Total Marks - <?= $total_marks ?>
									</h4>


									<h4>
										Your Marks - <?= $student_marks ?>
									</h4>

									<h4>
										Correct Answers - <?= $correct_answers ?>
									</h4>

									<h4>
										Not Selected Answer- <?= $not_selected ?>
									</h4>

									<h4>
										Wrong Answer - <?= $wrong_answer ?>
									</h4>

									<a class="btn btn-primary" href="<?= base_url() . 'all-answers' ?>">Check Answer </a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	</div> -->
	<!-- end chat sidebar -->
	</div>
	<!-- end page container -->
	<!-- start footer -->
	<!-- <div class="page-footer">
      <div class="page-footer-inner"> 2017 &copy; Smart University Theme By
        <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
      </div>
      <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
      </div>
    </div> -->
	<!-- end footer -->
	</div>



	<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/popper/popper.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- data tables -->
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/js/pages/table/table_data.js"></script>
	<!-- Common js-->
	<script src="<?= base_url(); ?>assets/admin_assets/js/app.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/js/layout.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/material/material.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script> -->

</body>

</html>
