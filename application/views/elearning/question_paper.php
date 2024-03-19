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

	<!-- for fonts -->
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>assets/admin_assets/fonts/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<style>
	#result{
		font-size: 18px;
		text-align: center;
	}
</style>
</head>


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
								<!-- <h5 class="text-center p-3">For Typing Test - </h5> -->
								<?php
								foreach ($paper as $row) { ?>
									<div class="card-body " id="bar-parent">
										<p class="text-center" id="given_text"><?= $row->message ?></p>
									</div>
								<?php } ?>


								<form action="submit-exam" method="post" class="p-3">
									<!-- id="typed_text" -->
									<!-- <textarea class="form-control border" name="typed_text" id="k2uu" cols="30" rows="10" oninput="getValue(this.value)"></textarea> -->
									<textarea id="user_type_text" class="form-control" cols="90" name="TextToConvert" rows="8"></textarea>


									<!-- <input type="submit" value="submit" name="submit" class="mt-3 mx-auto d-block" id="">
									<p id="demo" style="display: none;"></p> -->
								</form>


								<button class="btn btn-info ms-5" onclick="check()">Check Paper</button>
								<p id="result"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



</html>



<script>
	// given paragraph by admin
	const given_text = document.getElementById('given_text').innerText;
	const show_result = document.getElementById('result');
	console.log(given_text);


	// user type paragraph
	let user_type_text = document.getElementById("user_type_text");
	console.log(user_type_text.value);


	function check() {

		// // count paper paragraph total words
		let givenWordArray = given_text.split(" ");
		let userTypeWordArray = user_type_text.value.split(" ");

		console.log(givenWordArray);
		console.log(userTypeWordArray);

		let errors = 0;
		for (let i = 0; i < userTypeWordArray.length; i++) {
			if (givenWordArray[i] != userTypeWordArray[i]) {
				// console.log('wrong hai');
				for (let index = 0; index < userTypeWordArray[i].length; index++) {
					if (givenWordArray[i].charAt(index) != userTypeWordArray[i].charAt(index)) {
						errors++;
					}
				}
			}
		}


		document.getElementById('result').innerText = 'total given words are - ' + givenWordArray.length + ' you typed words - ' + userTypeWordArray.length + ' grammer mistake - ' + errors;



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




<!-- for fonts -->
<script type="text/javascript" src="assets/admin_assets/fonts/js/kd.js"></script>
<script type="text/javascript" src="assets/admin_assets/fonts/js/ch.js"></script>
<script type="text/javascript" src="assets/admin_assets/fonts/js/gndhi.js"></script>
<script type="text/javascript" src="assets/admin_assets/fonts/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/admin_assets/fonts/js/bootstrap/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {


		$('#k2u').click(function() {
			convert_kruti_to_unicode();
			return;
		})



		$('#k2uu').click(function() {
			convert_kruti_to_unicode();
			return;
		})

		$('#u2k').click(function() {
			Convert_to_Kritidev_010();
			return;
		})
	});
</script>
