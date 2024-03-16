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


</head>

<body class="body-wrapper">

	<div class="main_wrapper">

		<?php include 'layout/header.php'; ?>


		<div class="mainContent clearfix">
			<div class="container">

				<div class="upcoming_events event-col">
					<div class="row clearfix">
						<?php foreach ($show as $key) { ?>
							<div class="col-xs-6 col-sm-4 single_event_post">
								<div class="related_post_sec single_post" >
									<!--  <span class="date-wrapper">
                  <span class="date"><span>24</span>January</span>
                </span> -->
									<div class="rel_right">
										<h4><a href=""><?= $key->news_hlt;

																		?></a></h4>
										<div class="meta">
											<span class="place">Date:</span>
											<span class="event-time"><?= $key->date; ?></span>
										</div>
										<p><?php $a = $key->news_dtls;
												$d = str_split($a);
												// for ($i = 0; $i < 15; $i++) {
												// 	print($d[$i]);
												// }

												?></p>
										<a href="<?= base_url('News_Details'); ?>?q=<?= $key->news_id; ?>" class="btn btn-default commonBtn">view Detals</a>
									</div>
								</div>
							</div>
						<?php } ?>


					</div><!-- row clearfix -->
				</div>

			</div><!-- container -->
		</div><!-- mainContent -->
		<?php include 'layout/footer.php'; ?>
		<!-- menuFooter -->




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
