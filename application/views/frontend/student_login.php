<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration form</title>

  <link rel="icon" type="image/png" href="assets/img/fevicon.png">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/plugins/selectbox/select_option1.css">
  <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css" type="text/css" media="screen">
  <link rel="stylesheet" href="assets/plugins/calender/fullcalendar.min.css">
  <link rel="stylesheet" href="assets/plugins/animate.css">
  <link rel="stylesheet" href="assets/plugins/pop-up/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.carousel.css" media="screen">

  <!-- GOOGLE FONT -->
  <link href='css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
  <link href='css-1?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/default.css" id="option_color">

</head>

<body class="body-wrapper">
    <div class="main_wrapper">

    <?php include'layout/header.php';?>
<br><br>
        <div class="container" style="border:1px solid black; width:573px;">
<!-- <div class="container"> -->
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
                <br><br><br>
				<center class="display-6 pt-5"><h1>Student Login</h1></center>
                <br><br>
				<form method="post" action="stu_login" >
					<label><b>Student Email:-</b></label>
					<input type="text" name="student_email" class="form-control">
                    <br>
					<label><b>Student Password:-</b></label>
					<input type="password" name="student_pwd" class="form-control">
					<br>
					<button class="btn btn-primary form-control">Login</button>
                    <br><br><br><br><br><br>
				</form>
			</div>
			<!-- <div class="col-md-3"></div>
		</div> -->
	</div>
    </div>   
    <br><br>
<?php include'layout/footer.php';?>

    
<script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/flexslider/jquery.flexslider.js"></script>
<script src="assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="assets/plugins/pop-up/jquery.magnific-popup.js"></script>
<script src="assets/plugins/animation/waypoints.min.js"></script>
<script src="assets/plugins/count-up/jquery.counterup.js"></script>
<script src="assets/plugins/animation/wow.min.js"></script>
<script src="assets/plugins/animation/moment.min.js"></script>
<script src="assets/plugins/calender/fullcalendar.min.js"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
<script src="assets/plugins/timer/jquery.syotimer.js"></script>
<script src="assets/plugins/smoothscroll/SmoothScroll.js"></script>
<script src="assets/js/custom.js"></script>

<link href="assets/options/optionswitch.css" rel="stylesheet">
<script src="assets/options/optionswitcher.js"></script>

</body>
</html>
