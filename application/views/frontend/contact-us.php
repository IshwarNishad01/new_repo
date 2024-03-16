<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us - G.D. College</title>

  <!-- PLUGINS CSS STYLE -->
  <link rel="icon" type="image/png" href="../assets/img/fevicon.png">
  <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/plugins/selectbox/select_option1.css">
  <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/plugins/flexslider/flexslider.css" type="text/css" media="screen">
  <link rel="stylesheet" href="../assets/plugins/calender/fullcalendar.min.css">
  <link rel="stylesheet" href="../assets/plugins/animate.css">
  <link rel="stylesheet" href="../assets/plugins/pop-up/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="../assets/plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../assets/plugins/owl-carousel/owl.carousel.css" media="screen">

  <!-- GOOGLE FONT -->
  <link href='../../css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
  <link href='../../css-1?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/default.css" id="option_color">
  <style type="text/css">
    #sl1{
      height: 14cm;
    }
  </style>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="body-wrapper">

  <div class="main_wrapper">

   <?php include'layout/header.php';?>


		<div class="custom_content custom">
			<div class="container large">
				<div class="row">
					<div class="col-xs-12 col-sm-8 custom_right">
						<div class="single_content_left">
							<h3>Contact Form</h3>

							<?php if(isset($_REQUEST['success'])){?>
								<p style="color: green;">Your message is successfully send<br>

								Thank you ...</p>
							<?php } ?>

							<p>Please fill in the form below for Contacting Us or Grievance Redressal :</p>
							<div class="contact_form">
								<form method="post" action="#">
									<div class="row">
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<label>Name <span class="error">*</span></label>
												<input type="text" class="form-control" name="en_name">
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<label>Email <span class="error">*</span></label>
												<input type="text" class="form-control" name="en_email">
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<label>Number <span class="error">*</span></label>
												<input type="number" class="form-control" name="en_number">
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<label>Message <span class="error">*</span></label>
												<textarea class="form-control" cols="10" rows="5" name="msg"></textarea>
											</div>
										</div>
									</div><!--end row-->
									<button class="commonBtn" type="submit">send Message</button> 
								</form>
							</div>
						</div><!--end single content left-->
					</div>

					<div class="col-xs-12 col-sm-4 custom_left">
						<div class="sidebar">
							<div class="list_block sidebar_item">
								<h3>Contacts of G.D. Professional College</h3>
								<ul class="contact_info">
									<li><i class="fa fa-home"></i> High School Chowk , Good Shepherd Road, Kotba, District-Jashpur, Chhattisgarh</li>
									<li><i class="fa fa-envelope"></i> <a href="mailto:gdcollege39@gmail.com">gdcollege39@gmail.com</a></li>
									<li><i class="fa fa-phone"></i>8770742323, 8839327942 ,6268090671,7747909213</li>
									<li><i class="fa fa-whatsapp"></i>9343503022</li>
									<!-- <li><i class="fa fa-globe"></i> <a href="#">http://www.example.com</a></li> -->
								</ul>
							</div>
							<div class="list_block">
								<h3>Open Hours</h3>
								<ul class="contact_info">
									<li><strong>Monday-Friday:</strong> 10am to 5pm</li>
									<li><strong>Saturday:</strong> 10am to 3pm</li>
									<li><strong>Sunday:</strong> Closed</li>
								</ul>
							</div><!--end sidebar item-->
							<!-- <div class="list_block">
								<div class="newsletter">
									<h3>Newsletter</h3>
									<form method="post" action="#">
										<div class="form-group">
										  <input type="text" placeholder="Email" id="exampleInputEmail1" class="form-control">
										</div>
										<button class="btn btn-default btn-block commonBtn" type="submit">Subscribe</button>
									</form>
								</div>
							</div> -->
						</div><!--end sidebar-->
					</div>
				</div><!--end row-->
			</div>
		</div><!--end custom content-->

		<div class="contact_map">

   <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6996633.738164338!2d-104.57070294113542!3d31.10069597439005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C+USA!5e0!3m2!1sen!2sbd!4v1460121293489" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe> -->
		</div><!--end contact map-->

<?php include'layout/footer.php';?>

</div>

<!-- JQUERY SCRIPTS -->
<script src="../assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/flexslider/jquery.flexslider.js"></script>
<script src="../assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="../assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="../assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="../assets/plugins/pop-up/jquery.magnific-popup.js"></script>
<script src="../assets/plugins/animation/waypoints.min.js"></script>
<script src="../assets/plugins/count-up/jquery.counterup.js"></script>
<script src="../assets/plugins/animation/wow.min.js"></script>
<script src="../assets/plugins/animation/moment.min.js"></script>
<script src="../assets/plugins/calender/fullcalendar.min.js"></script>
<script src="../assets/plugins/owl-carousel/owl.carousel.js"></script>
<script src="../assets/plugins/timer/jquery.syotimer.js"></script>
<script src="../assets/plugins/smoothscroll/SmoothScroll.js"></script>
<script src="../assets/js/custom.js"></script>

<link href="../assets/options/optionswitch.css" rel="stylesheet">
<script src="../assets/options/optionswitcher.js"></script>
</body>
</html>

