<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payment - G.D. College</title>

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

    <?php include'layout/header.php'?>


	<div class="custom_content custom">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-8 custom_right">
					<div class="single_content_left">
						
						<h3>Application From</h3>
						
							<h4>Payment</h4>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="label">First name <span>*</span> </div>
									</div>
									<div class="col-xs-12 col-sm-8">
										<div class="text-field">
											<input type="text" class="form-control" name="fname">
										</div>
									</div>
								</div>
							</div><!--end form group-->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="label">Last name <span>*</span> </div>
									</div>
									<div class="col-xs-12 col-sm-8">
										<div class="text-field">
											<input type="text" class="form-control" name="lname">
										</div>
									</div>
								</div>
							</div><!--end form group-->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="label">Email <span>*</span> </div>
									</div>
									<div class="col-xs-12 col-sm-8">
										<div class="text-field">
											<input type="text" class="form-control" name="email">
										</div>
									</div>
								</div>
							</div><!--end form group-->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="label">Card type</div>
									</div>
									<div class="col-xs-12 col-sm-8">
										<div class="text-field">
											<ul class="card-type">
												<li>

													<input type="radio" id="radio01" name="card">
													<label for="radio01"><span><img src="../assets/img/apply/visa.png" alt=""></span></label>
												</li>
												<li>
													<input type="radio" id="radio02" name="card">
													<label for="radio02"><span><img src="../assets/img/apply/mc.png" alt=""></span></label>
												</li>
												<li>
													<input type="radio" id="radio03" name="card">
													<label for="radio03"><span><img src="../assets/img/apply/discover.png" alt=""></span></label>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div><!--end form group-->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="label">Card number <span>*</span> </div>
									</div>
									<div class="col-xs-12 col-sm-8">
										<div class="text-field">
											<input type="text" class="form-control" name="card">
										</div>
									</div>
								</div>
							</div><!--end form group-->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="label">Security code <span>*</span> </div>
									</div>
									<div class="col-xs-12 col-sm-8">
										<div class="text-field">
											<input type="text" class="form-control" name="security">
										</div>
									</div>
								</div>
							</div><!--end form group-->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="text-field">
											<select name="month" class="option-select">
												<option value="01">01- January</option>
												<option value="02">02- February</option>
												<option value="03">03- March</option>
												<option value="04">04- April</option>
												<option value="05">05- May</option>
												<option value="06">06- June</option>
												<option value="07">07- July</option>
												<option value="08">08- August</option>
												<option value="09">09- September</option>
												<option value="10">10- October</option>
												<option value="11">11- November</option>
												<option value="12">12- December</option>
										  </select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 custom_margin">
										<div class="text-field">
											<select name="year" class="option-select">
												<option value="15">2015</option>
												<option value="16">2016</option>
												<option value="17">2017</option>
												<option value="18">2018</option>
												<option value="19">2019</option>
												<option value="20">2020</option>
												<option value="21">2021</option>
												<option value="22">2022</option>
												<option value="23">2023</option>
												<option value="24">2024</option>
										  </select>
										</div>
									</div>
								</div>
							</div><!--end form group-->
							<input type="submit" value="Submit" class="commonBtn">
						</form>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 custom_left">
					<div class="sidebar">
						<div class="sidebar_item admission">
							<div class="item_inner program">
								<ul>
									<li><a href="about.html">About Royal College</a></li>
									<li><a href="campus.html">Campus Life</a></li>
									<li><a href="international_students.html">International Students</a></li>
									<li><a href="buying-steps.html">Admission</a></li>
									<li><a href="course-fullwidth.html">Courses</a></li>
									<li class="active"><a href="buying-steps.html">Apply Now</a></li>

								</ul>
							</div>
						</div><!--end sidebar item-->

						<div class="list_block">
							<div class="formArea admission">
							  <div class="formTitle">
								<h3>Find a Course</h3>
								<p>Offered in small class sizes with great emphasis on the demands of the specification and exam technique.</p>
							  </div><!-- formTitle -->
							  <form action="#" method="post">
								<div class="selectBox clearfix">
								  <select name="guiest_id1" id="guiest_id1">
									  <option value="0">Location</option>
									  <option value="1">Location_1</option>
									  <option value="2">Location_2</option>
									  <option value="3">Location_3</option>
								  </select>
								</div><!-- selectBox -->
								<div class="selectBox clearfix">
								  <select name="guiest_id2" id="guiest_id2">
									  <option value="0">Level</option>
									  <option value="1">Level_1</option>
									  <option value="2">Level_2</option>
									  <option value="3">Level_3</option>
								  </select>
								</div><!-- selectBox -->
								<div class="form-group">
								  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Course Name">
								</div>
								<button type="submit" class="btn btn-default btn-block commonBtn">Search</button>
							  </form>
							</div><!-- formArea -->
						</div>

						<div class="list_block">
							<div class="newsletter">
								<h3>Newsletter</h3>
								<form method="post" action="#">
									<div class="form-group">
									  <input type="text" placeholder="Email" id="exampleInputEmail1" class="form-control">
									</div>
									<button class="btn btn-default btn-block commonBtn" type="submit">Subscribe</button>
								</form>
							</div>
						</div>
					</div><!--end sidebar-->
				</div>
			</div><!--end row-->
		</div>
	</div><!--end custom content-->

<?php include'layout/footer.php'?>

</div>

<!-- JQUERY SCRIPTS -->
<script src="plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/pop-up/jquery.magnific-popup.js"></script>
<script src="plugins/animation/waypoints.min.js"></script>
<script src="plugins/count-up/jquery.counterup.js"></script>
<script src="plugins/animation/wow.min.js"></script>
<script src="plugins/animation/moment.min.js"></script>
<script src="plugins/calender/fullcalendar.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.js"></script>
<script src="plugins/timer/jquery.syotimer.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.js"></script>
<script src="js/custom.js"></script>

<link href="options/optionswitch.css" rel="stylesheet">
<script src="options/optionswitcher.js"></script>
</body>
</html>


