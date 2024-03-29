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
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css">
	<!--bootstrap -->
	<link href="<?= base_url(); ?>assets/admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin_assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin_assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="<?= base_url(); ?>assets/admin_assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/theme/light/style.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css">
	<!-- dropzone -->
	<link href="<?= base_url(); ?>assets/admin_assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin_assets/plugins/flatpicker/css/flatpickr.min.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/admin_assets/img/gd_logo.png">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin_assets/plugins/flatpicker/css/font.css">

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
					<div class="page-bar">
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<!-- <header>Paper Details</header> -->
								</div>
								<h5 class="text-center p-3">For Typing Test - </h5>
								<?php
								foreach ($paper as $row) { ?>
									<div class="card-body " id="bar-parent">
										<p class="text-center" id="text"><?= $row->message ?></p>
									</div>
								<?php } ?>


								<form action="submit-exam" method="post" class="p-3">

									<textarea class="form-control border" name="typed_text" id="typed_text" cols="30" rows="10" oninput="getValue(this.value)"></textarea>

									<input type="submit" value="submit" name="submit" class="mt-3 mx-auto d-block" id="">
									<p id="demo" style="display: none;"></p>
								</form>
								<button id="check" onclick="check()">click vfhere</button>
								<p id="result"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			const paper_text = document.getElementById('text').innerText;
			// console.log(paper_text);


			let text = document.getElementById("typed_text");
			let demo = document.getElementById("demo");

			function getValue(value) {
				console.log(value);
			}

			function myfunction() {
				demo.innerText = text.textContent;
				// console.log(text.value)
			}

			function check() {
				let typetext = demo.innerText;

				// count paper paragraph total words
				let typeword = typetext.split(" ");
				let words = paper_text.split(" ");

				let right = 0;
				let wrongs = 0;


				document.getElementById('result').innerText = 'total given words is - ' + words.length + ' you typed words - ' + typeword.length + ' grammer mistake - ' + wrongs;



			}
		</script>
		<!-- start js include path -->
		<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
		<script src="<?= base_url(); ?>assets/admin_assets/plugins/popper/popper.js"></script>
		<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
		<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
		<script src="<?= base_url(); ?>assets/admin_assets/plugins/feather/feather.min.js"></script>
		<!-- bootstrap -->
		<script src="<?= base_url(); ?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<!-- Common js-->
		<script src="<?= base_url(); ?>assets/admin_assets/js/app.js"></script>
		<script src="<?= base_url(); ?>assets/admin_assets/js/layout.js"></script>
		<script src="<?= base_url(); ?>assets/admin_assets/js/theme-color.js"></script>
		<!-- Material -->
		<script src="<?= base_url(); ?>assets/admin_assets/plugins/material/material.min.js"></script>
		<script src="<?= base_url(); ?>assets/admin_assets/js/pages/material-select/getmdl-select.js"></script>
		<script src="<?= base_url(); ?>assets/admin_assets/plugins/flatpicker/js/flatpicker.min.js"></script>
		<script src="<?= base_url(); ?>assets/admin_assets/plugins/flatpicker/js/font.js"></script>
		<script src="<?= base_url(); ?>assets/admin_assets/js/pages/date-time/date-time.init.js"></script>
		<!-- dropzone -->
		<script src="<?= base_url(); ?>assets/admin_assets/plugins/dropzone/dropzone.js"></script>
		<script src="<?= base_url(); ?>assets/admin_assets/plugins/dropzone/dropzone-call.js"></script>

</body>

</html>
