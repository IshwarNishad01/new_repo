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
						<!-- <div class="page-title-breadcrumb">
              <div class=" pull-left">
                <div class="page-title">Exam List</div>
              </div>
              <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="">Exam </a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Exam List</li>
              </ol>
            </div> -->
					</div>
					<div class="row" id="d">
						<div class="col-md-1"></div>
						<div class="col-md-10 col-sm-12">
							<form action="<?= base_url('') . 'exam-complete' ?>" method="post" id="myForm">
								<div class="card-box">
									<div class="card-head">
										<header>Questions are</header>
										<div id="countdown"></div>
										<div id="notifier"></div>
										<p id="demo"></p>
										<p id="showTime"></p>

										<center>



											<table class="table table-bordered">
												<?php
												// $data = $this->db->query("select * from exam join course on  exam.course_id=course.course_id join questions on questions.exam_id=exam.exam_id")->result();
												// $data = $this->db->query("select * from exam ")->result();
												$student_id = $_SESSION['regino'];
												$course_id = $_SESSION['course_name'];
												$exam_id = $_SESSION['exam_id'];

												// $data = $this->db->query("select * from regist_tb join exam on regist_tb.course_name=exam.course_id where regino = $student_id")->result();

												$data = $this->db->query("select * from questions where course_id = $course_id and exam_id = $exam_id")->result();

												$duration = $this->db->query("select * from exam where course_id = $course_id and exam_id = $exam_id")->result();

												$sn = 1;
												$qid = 1;
												$o_a = 1;
												$o_b = 1;
												$o_c = 1;
												$o_d = 1;

												foreach ($data as $key) {

												?>
													<tr>
														<td>Q <?= $sn; ?></td>
														<td><?= $key->question; ?><input type="hidden" value="<?= $key->qid; ?>" name="qid<?= $qid++; ?>">
															<input type="hidden" name="questions[]" id="" value="<?= $key->ques_refrence ?>">
															<br>Options are :
															<br>
															<label> A ) </label> <input type="radio" name="answer<?= $key->ques_refrence; ?>" value="<?= $key->option_a; ?>"> <?= $key->option_a; ?><br>
															<label> B ) </label><input type="radio" name="answer<?= $key->ques_refrence; ?>" value="<?= $key->option_b; ?>"> <?= $key->option_b; ?><br>

															<label> C ) </label><input type="radio" name="answer<?= $key->ques_refrence; ?>" value="<?= $key->option_c; ?>"> <?= $key->option_c; ?><br>

															<label> D ) </label><input type="radio" name="answer<?= $key->ques_refrence; ?>" value="<?= $key->option_d; ?>"> <?= $key->option_d; ?><br>

															<input style="display: none;" type="radio" checked="checked" name="answer<?= $key->ques_refrence; ?>" value="no answer">

														</td>

													</tr>
												<?php $sn++;
												} ?>
											</table>

											<input type="hidden" value="<?= $qid - 1; ?>" name="num">
										</center>

										<!--   <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="sdntmenu">
                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                    </li>
                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                    </li>
                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                      here</li>
                  </ul> -->


									</div>
									<div class="card-body ">

										<center>
											<!-- <p>Note : Check your personal and exam information if it is not correct than contact to admin</p> -->

											<!-- commented code  -->
											<!-- <a href="" class="btn btn-primary"> Submit </a> -->

											<input type="submit" class="btn btn-primary" value="submit" name="" id="">
										</center>

									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end page content -->

	</div>
	</div>
	</div>
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
	<!-- start js include path -->


	<script>
		var myTimer;

		function clock() {

			// var totalsecond = 0.1;
			// echo $duration[0]->duration;
			var totalsecond = <?php echo $duration[0]->duration ?>;
			// var totalsecond = 90;
			var totalSeconds = totalsecond * 60; // Change 5 to the desired number of hours

			myTimer = setInterval(myClock, 1000);

			function myClock() {
				var hours = Math.floor(totalSeconds / 3600);
				var minutes = Math.floor((totalSeconds % 3600) / 60);
				var seconds = totalSeconds % 60;

				document.getElementById("demo").innerHTML =
					hours + " hours " + minutes + " minutes " + seconds + " seconds ";

				totalSeconds--;
				if (totalSeconds < 30) {
					document.getElementById("showTime").innerHTML =
						"your time is running!";
				}
				if (totalSeconds == 0) {
					document.getElementById("showTime").innerHTML =
						"Countdown Complete!";
					clearInterval(myTimer);
					// window.location.href('<?= base_url('') . 'HomeController/time_up' ?>');
					// window.location = "<?= base_url('') . 'HomeController/paper_submit' ?>";
					document.getElementById('myForm').submit();

				}
			}
		}
	</script>

	<script>
		window.onload(function() {
			history.pushState();
			window.addEventListener('popstate', function() {
				history.pushState();
			});
		})
	</script>

	<script>
		// Check if the 'reloadCount' key exists in localStorage
		if (sessionStorage.getItem("reloadCount") === null) {
			// If not, initialize it with 1
			sessionStorage.setItem("reloadCount", 0);
		} else {
			// If it exists, increment its value by 1
			var count = parseInt(sessionStorage.getItem("reloadCount")) + 1;
			sessionStorage.setItem("reloadCount", count);
		}

		// Retrieve the value and store it in a variable
		var reloadCount = parseInt(sessionStorage.getItem("reloadCount"));
		if (reloadCount >= 1) {
			document.getElementById('myForm').submit();
			// localStorage.removeItem("reloadCount");
			sessionStorage.removeItem("reloadCount");

		}
	</script>

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
