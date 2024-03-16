<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>G.D. College</title>



	<!-- PLUGINS CSS STYLE -->
	<link rel="icon" type="image/png" href="<?= base_url() ?>./assets/img/fevicon.png">
	<link href="<?= base_url() ?>./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/selectbox/select_option1.css">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/flexslider/flexslider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/calender/fullcalendar.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/animate.css">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/pop-up/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>./assets/plugins/rs-plugin/css/settings.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>./assets/plugins/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- GOOGLE FONT -->
	<link href='<?= base_url() ?>../../css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
	<link href='<?= base_url() ?>../../css-1?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>./assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/css/default.css" id="option_color">


	<style type="text/css">
		#sl1 {
			height: 14cm;
		}

		#aproove_slide div a img {
			width: 8cm;
			height: 2cm;
		}

		@media only screen and (max-width: 400px) {
			#sl1 {
				height: 7cm;
			}

			#aproove_slide div a img {
				width: 5cm;
				height: 1cm;
			}
		}

		.float {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 40px;
			right: 40px;
			background-color: #25d366;
			color: #FFF;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 2px 2px 3px #999;
			z-index: 100;
		}

		#whatsappicon {
			margin-top: 16px
		}
	</style>



</head>

<body class="body-wrapper">
	<i></i>
	<div class="main_wrapper">

		<?php include 'layout/header.php'; ?>

		<div class="banner carousel slide" id="recommended-item-carousel" data-ride="carousel">
			<div class="slides carousel-inner">
				<div class="item active">
					<img src="./assets/img/home/slider/first.jpg" alt="" class="slipic" id="sl1">
					<div class="banner_caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="caption_inner animated fadeInUp">
										<h1>Welcome To G.D. College</h1>
										<p>G.D. College is one of the best in chhattisgarh that is working in the areas of Skill Development, Higher Education, Financial Inclusion, and other ICT-based services to bring about an inclusive change in the semi-urban and rural areas of the country.</p>
										<a href="about">Learn More</a>
									</div><!--end caption_inner-->
								</div>
							</div><!--end row-->
						</div><!--end container-->
					</div><!--end banner_caption-->
				</div>
				<div class="item">
					<img src="./assets/img/home/slider/second.jpg" alt="" class="slipic" id="sl1">
					<div class="banner_caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="caption_inner animated fadeInUp">
										<h1>Admission going on</h1>
										<!-- <p>Admission dates are notified very soon. To get admission in our courses generally, the authorities do not conduct any entrance tests. For admission: The students will have to visit the college or university to get information about the admission process.</p> -->
										<a href="apply">Apply Now</a>
									</div><!--end caption_inner-->
								</div>
							</div><!--end row-->
						</div><!--end container-->
					</div><!--end banner_caption-->
				</div>
				<div class="item">
					<img src="./assets/img/home/slider/slider3.jpg" alt="" class="slipic" id="sl1">
					<div class="banner_caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="caption_inner animated fadeInUp">

										<h1>Our team</h1>
										<!-- <p>it is always required to have some in-depth knowledge of the particular field to get an advantage over others in today’s competitive job market or to achieve any other career goals. Indeed, students are becoming more concerned about this and also showing interest in doing the relevant courses to expand their knowledge and skills.</p> -->
										<a href="allcourse">Find Course</a>
									</div><!--end caption_inner-->
								</div>
							</div><!--end row-->
						</div><!--end container-->
					</div><!--end banner_caption-->
				</div>
				<div class="item">
					<img src="./assets/img/home/slider/fourth.jpg" alt="" id="sl1">
					<div class="banner_caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="caption_inner animated fadeInUp">
										<h1>Find your dream course</h1>
										<!--  <p>If you’d love a career that puts you in a classroom to help children learn, then the Foundations of Teacher Education degree would be a great first step.Your training will include assisting children with math, science, reading and writing assignments as well as handling classroom management, clerical and other tasks related to instruction.</p> -->
										<a href="contact">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="./assets/img/home/slider/five.jpg" alt="" id="sl1">
					<div class="banner_caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="caption_inner animated fadeInUp">
										<h1>Arrange a Tour to your college</h1>
										<!-- <p>The social and political figures, who are all commited to one cause, that is to create and developed experts education facilities, in order to train deserving young men and women.</p> -->
										<a href="contact">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
				<img src="./assets/img/home/slider/prev.png">
			</a>
			<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
				<img src="./assets/img/home/slider/next.png">
			</a>
		</div>

		<div class="aboutArea" id="allcourse">
			<div class="container">
				<div class="row clearfix">
					<div class="col-xs-12">
						<div class="aboutTitle">
							<h2>Our Popular Courses</h2>
						</div><!-- aboutTitle -->
					</div><!-- col-sm-3 col-xs-12 -->
				</div><!-- row clearfix -->

				<div class="about_inner clearfix">
					<div class="row">

						<div class="col-xs-6 col-sm-3">
							<div class="aboutImage">
								<a href="dcadetails">
									<img src="./assets/img/home/learn/dca.jpg" alt="" class="img-responsive" style="height: 4.3cm;">
									<div class="overlay">
										<p style="text-align: justify;">DCA is a one-year computer-based diploma or course. The course is intended to provide learners with basic, realistic and technological details.</p>
									</div>
									<span class="captionLink">DCA<span></span></span>
								</a>
							</div><!-- aboutImage -->
						</div>

						<div class="col-xs-6 col-sm-3">
							<div class="aboutImage">
								<a href="pgdcadetails">
									<img src="./assets/img/home/learn/pgdca.jpg" alt="" class="img-responsive" style="height: 4.3cm;">
									<div class="overlay">
										<p style="text-align: justify;">PGDCA course duration is a 1 year focusing on advanced theoretical and development knowledge on Computer Science.</p>
									</div>
									<span class="captionLink">PGDCA<span></span></span>
								</a>
							</div><!-- aboutImage -->
						</div>

						<div class="col-xs-6 col-sm-3">
							<div class="aboutImage">
								<a href="bcadetails">
									<img src="./assets/img/home/learn/bca.jpg" alt="" class="img-responsive" style="height: 4.3cm;">
									<div class="overlay">
										<p style="text-align: justify;">BCA is a 3-year undergraduate course that imparts knowledge on the basics of computer application and software development.</p>
									</div>
									<span class="captionLink">BCA<span></span></span>
								</a>
							</div><!-- aboutImage -->
						</div>



						<div class="col-xs-6 col-sm-3">
							<div class="aboutImage">
								<a href="mcadetails">
									<img src="./assets/img/home/learn/mca.png" alt="" class="img-responsive" style="height: 4.3cm;">
									<div class="overlay">
										<p>MCA is a 3-years duration program and is targeted for those aspirants who are willing to dive deeper into the development of computer applications. </p>
									</div>
									<span class="captionLink">MCA<span></span></span>
								</a>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<br><br>
							<center><a href="all-course" class="btn " style="background-color:  #16d5b8;color: white;">View More</a></center>
						</div>
					</div>
				</div><!-- about_inner -->

			</div><!-- container -->
		</div><!-- aboutArea -->

		<div class="mainContent clearfix">
			<div class="container">
				<div class="row clearfix">

					<div class="col-sm-8 col-xs-12">
						<div class="videoNine clearfix">

							<div class="videoArea clearfix">
								<h3>Welcome To G.D. Proffesional College</h3>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-xs-12 videoLeft">
										<img src="./assets/img/about/gd_certi.jpeg">
									</div><!-- videoLeft -->
									<div class="col-lg-6 col-md-6 col-xs-12 videoRight">
										<p style="text-align: justify;">The institute is committed to the challenging task of development of technical education by preparing seasoned diploma in highly sophisticated field of technology. Development of India as an emerging industrial power is a demanding exercise as it involves the combination of cost effectiveness and efficiency along with producing world-class technology at the cutting edge.</p>
										<br>
										<p style="text-align: justify;">G.D. Professional College has created a unique atmosphere of educational excellence in the city of Jashpur. The institute was established in the year 2010 with due approval from All India Council of Technical Education (AICTE), New Delhi.</p>
										<a href="about" class="btn btn-block learnBtn">Learn More</a>
									</div><!-- videoRight -->
								</div><!-- row -->
							</div><!-- videoArea -->

							<div class="related_post_sec single_post">
								<h3>Recent News</h3>
								<ul>
									<?php
									foreach ($n_show as $key2) {
									?>
										<a href="<?= base_url('News') ?>?q=<?= $key2->news_id ?>">
											<li>

												<span class="rel_thumb">
													<img src="<?= base_url(); ?>./assets/upload_img/news_file/<?= $key2->news_file ?>" alt="" style="height: 5cm;width: 100%;">
												</span><!--end rel_thumb-->
												<div class="rel_right">
													<h4><img src="./assets/img/giphy.gif" style="width: 50px;"> <?= $key2->news_hlt; ?></h4>
													<div class="meta">
														<span class="author">Posted in: <?= $key2->date; ?></span>

													</div>
													<p><?= $key2->news_dtls; ?></p>
												</div>
												<!--end rel right-->
											</li>
										</a>
									<?php } ?>
									<!--  <li>
                    <span class="rel_thumb">
                      <a href="single-post-right-sidebar.html"><img src="../assets/img/news/related_thumb_02.jpg" alt=""></a>
                    </span>
                    <div class="rel_right">
                      <h4><a href="single-post-right-sidebar.html">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</a></h4>
                      <div class="meta">
                        <span class="author">Posted in: <a href="#">Exam</a></span>
                        <span class="date">on: <a href="#">January 24, 2015</a></span>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...</p>
                    </div>
                  </li> -->
								</ul>
							</div><!--related_post_sec-->

						</div><!--videoNine-->
					</div><!-- col-sm-8 col-xs-12 -->

					<div class="col-sm-4 col-xs-12">
						<div class="formArea clearfix">
							<div class="formTitle">
								<h3>Enquiry Form</h3>
								<p>Offered in small class sizes with great emphasis on the demands of the specification and exam technique.</p>
							</div><!-- formTitle -->
							<form method="post" action="">
								<div class="row">
									<div class="col-xs-12 col-sm-12">
										<?php if (isset($_REQUEST['success'])) { ?>
											<p style="color: green;">Your message is successfully send<br>

												Thank you ...</p>
										<?php } ?>
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
											<textarea class="form-control" cols="10" rows="3" name="msg"></textarea>
										</div>
									</div>
								</div><!--end row-->
								<button type="submit" class="btn commonBtn form-control">Send Message</button>
							</form>
						</div><!-- formArea -->
						<div class="list_block related_post_sec">
							<div class="upcoming_events">
								<h3 class="" style="background: #3e5366;padding: 10px;color: white;">Notice Board</h3>
								<marquee scrollamount="2" direction="up">
									<ul>
										<?php
										// $con = mysqli_connect("localhost", "cfrqauqqvr", "rZWPyj7Heg", "cfrqauqqvr");
										$con = mysqli_connect("localhost", "root", "", "gdcollege_new");
								
										$q = "select * from notice order by notice_id desc limit 4";
										$n_s = mysqli_query($con, $q);



										while ($key = mysqli_fetch_assoc($n_s)) { ?>
											<a href="<?= base_url('All_N'); ?>">
												<div>

													<li class="related_post_sec single_post">

														<span class="date-wrapper">
															<span class="date"><span> <?php echo $key['notice_day']; ?></span> <?php echo $key['notice_month']; ?></span>
														</span>
														<div class="rel_right">
															<h4> <?php echo $key['notice_hlt']; ?><img src="./assets/img/new.gif" style="width: 50px;"></h4>
															<div class="meta">
																<span class="place"><i class=""></i></span>
																<span class="event-time"><i class=""></i></span>
															</div>
														</div>

													</li>
												</div>
											</a>
										<?php } ?>

									</ul>
								</marquee>
								<a href="<?= base_url('All_N'); ?>" class="btn btn-default btn-block commonBtn">More Events</a>
							</div>
						</div><!-- end list_block -->
					</div><!-- col-sm-4 col-xs-12 -->

				</div><!-- row clearfix -->
			</div><!-- container -->
		</div><!-- mainContent -->

		<div class="count clearfix wow fadeIn paralax" data-wow-delay="100ms" style="background-image: url(./assets/img/home/paralax/paralax03.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-3">
						<div class="text-center">
							<div class="icon"><i class="fa fa-group"></i></div>
							<div class="counter">
								<span class="timer">82</span>
							</div>
							<div class="seperator-small"></div>
							<p>Students</p>
						</div>
					</div><!-- col-sm-3 -->
					<div class="col-xs-6 col-sm-3">
						<div class="text-center">
							<div class="icon"><i class="fa fa-book"></i></div>
							<div class="counter">
								<span class="timer">4</span>
							</div>
							<div class="seperator-small"></div>
							<p>Courses</p>
						</div>
					</div><!-- col-sm-3 -->
					<div class="col-xs-6 col-sm-3">
						<div class="text-center">
							<div class="icon"><i class="fa fa-male"></i></div>
							<div class="counter">
								<span class="timer">5</span>
							</div>
							<div class="seperator-small"></div>
							<p>Stuffs</p>
						</div>
					</div><!-- col-sm-3 -->
					<div class="col-xs-6 col-sm-3">
						<div class="text-center">
							<div class="icon"><i class="fa fa-map-marker"></i></div>
							<div class="counter">
								<span class="timer">1</span>
							</div>
							<div class="seperator-small"></div>
							<p>Locations</p>
						</div>
					</div><!-- col-sm-3 -->
				</div><!-- row -->
			</div>
		</div>
		<center>
			<h1>Our Students</h1>
		</center>
		<hr>
		<div class="brandSection clearfix">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="owl-carousel partnersLogoSlider" id="aproove_slide1">
							<?php
							$image = $this->db->query("select * from student_slider")->result();
							// $this->load->view('frontend/index',$image);

							foreach ($image as $key) {
								// print_r($key);exit();
							?>
								<div class="slide">
									<div class="student_logo">
										<a href="#"><img src="<?= base_url(); ?><?= $key->image; ?>" style="width:10cm; height:5cm;"><br>
											<table class="table">
												<tr>
													<td>Name </td>
													<td>:- <?= $key->name; ?></td>
												</tr>
												<tr>
													<td>Class </td>
													<td>:- <?= $key->class; ?></td>
												</tr>

											</table>
										</a>
									</div>
								</div>
							<?php } ?>
							<!-- <div class="slide">
                <div class="student_logo">
                  <a href="#"><img src="assets/upload_img/staff_file/Screenshot (9).png"></a>
                </div>
              </div>
              
               <div class="slide">
                <div class="student_logo">
                  <a href="#"><img src="assets/upload_img/staff_file/Screenshot (10).png"></a>
                </div>
              
              </div>  -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="brandSection clearfix">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="owl-carousel partnersLogoSlider" id="aproove_slide">
							<div class="slide">
								<div class="partnersLogo clearfix">
									<a href="#"><img src="https://kalingauniversity.ac.in/images/ku%20logo.png"></a>
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<a href="#"><img src="https://isbmuniversity.edu.in/static/media/isbm-university.785c9e10.png"></a>
								</div>
							</div>
							<!-- <div class="slide">
                <div class="partnersLogo clearfix">
                  <a href="#"><img src="../assets/img/home/rabi.jpg"></a>
                </div>
              </div> -->
							<div class="slide">
								<div class="partnersLogo clearfix">
									<a href="#"><img src="https://matsuniversity.ac.in/wp-content/uploads/2022/03/MATS-logo-440x168.png"></a>
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<a href="#"><img src="<?= base_url() ?>assets/img/home/aisect.png"></a>
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<a href="#"><img src="<?= base_url() ?>assets/img/home/cvru.jpg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Brand-section -->

		<?php include 'layout/footer.php'; ?>


		<a href="https://api.whatsapp.com/send?phone=+91 9343503022&text=Hello%21%20GD%20college,I%20info about your college%20." class="float" target="_blank">
			<i class="fa fa-whatsapp my-float" id="whatsappicon"></i>
		</a>

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
