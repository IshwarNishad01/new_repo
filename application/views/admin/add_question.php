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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
						<?php if (isset($_REQUEST['add_s'])) { ?>
							<p style="color:green;font-size:20px ;"> Successfully Added......</p><?php } ?>
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Questions</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Fill Details</header>


								</div>
								<form action="" method="POST" enctype="multipart/form-data">
									<div class="card-body row">
										<!-- <div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txttitle" name="event_title" required>
											<label class="mdl-textfield__label">Title</label>
										</div>
									</div> -->
										<!-- <div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txttitle" name="ans_name" required>
											<label class="mdl-textfield__label">Answer</label>
										</div>
									</div> -->
										<div class="row">
											<div class="col-lg-6 p-t-20">
												<label><b>Course:-</b></label>
												<select class="mdl-textfield__input form-control" name="course" id="course" required>
													<option disabled selected>Select Course</option>
													<?php

													$show = $this->ExamModel->get_course_name();

													foreach ($show as $key) { ?>

														<option value="<?= $key->course_id; ?>"><?= $key->course_name; ?></option>
													<?php } ?>
												</select>
											</div>

											<div class="col-lg-6 p-t-20">
												<label><b>Exam Paper_id:-</b></label>
												<select id="exam" class="md1-textfield form-control" name="paper_id" required >
													<option value="">Select Exam</option>
												</select>
											</div>

										</div>

										<div class="col-lg-12 p-t-20">
											<label><b>Question:-</b></label>
											<input type="text" name="ques" id="ques" class="form-control" required>
										</div>

										<br> <br>
										<table class="tabel table-borderd tabel-striped" cellsapcing="10" cellpadding="10">
											<tr>
												<td><label><b>Option A:-</b></label></td>
												<div>
													<td><input type="text" name="A" required="" class="form-control"></td>
												</div>
											</tr>
											<tr>
												<td><label><b>Option B:-</b></label></td>
												<div>
													<td><input type="text" name="B" required="" class="form-control"></td>
												</div>
											</tr>
											<tr>
												<td><label><b>Option C:-</b></label></td>
												<div>
													<td><input type="text" name="C" required="" class="form-control"></td>
												</div>
											</tr>
											<tr>
												<td><label><b>Option D:-</b></label></td>
												<div>
													<td><input type="text" name="D" required="" class="form-control"></td>
												</div>
											</tr>
											<tr>
												<td><label><b>ANSWER:-</b></label></td>
												<div>
													<td><input type="text" name="answer" required="" class="form-control"></td>
												</div>
											</tr>
										</table>
										<div class="col-lg-12 p-t-20 text-center">
											<button type="submit" class="form-control mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">ADD</button>

											<a href="exam_list" class="btn btn-success">
												See All Questions
											</a>
										</div>
								</form>
							</div>
						</div>
					</div>
					<br><br>
					<!-- <div class="card-body row">
									<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle bg-light" id="example4 table-responcive" style="display:none;">
										<thead>
											<tr>
												<th>S.No.</th>
												<th>Course</th>
												<th>Total Marks</th>
												<th>Exam Paper_id</th>
												<th>Question Marks</th>
												<th>Question</th>
												<th>Option A</th>
												<th>Option B</th>
												<th>Option C</th>
												<th>Option D</th>
												<th>Date</th>
											</tr>
										</thead>
										<tbody>
											<?php
											// $ans=$this->ExamModel->ans_add();
											$sn = 1;
											foreach ($que as $key) { ?>
											<tr>
												<td><?php echo $sn++; ?></td>
												<td><?= $key->course ?></td>
												 <td><?= $key->mark ?></td>
												 <td><?= $key->paper_id ?></td>
												 <td><?= $key->ques_mark ?></td>
												 <td><?= $key->ques ?></td>
												 <td><?= $key->A ?></td>
												 <td><?= $key->B ?></td>
												 <td><?= $key->C ?></td>
												 <td><?= $key->D ?></td>
												 <td><?= $key->date ?></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
						 </div> -->
				</div>
			</div>
		</div>
	</div>


	<!-- end footer -->
	</div>
	<!-- start js include path -->



	<script>
		$(document).ready(function() {
			$('#course').change(function() {
				var course_id = $(this).val();
				if (course_id !== '') {
					$.ajax({
						url: "<?php echo base_url('AdminController/get_exams'); ?>",
						type: "post",
						data: {
							course_id: course_id
						},
						dataType: 'json',
						success: function(response) {
							$('#exam').empty();
							$('#exam').append('<option value="">Select Exam</option>');
							$.each(response, function(index, data) {
								$('#exam').append('<option value="' + data.exam_id + '">' + data.exam_name + '</option>');
							});
						}
					});
				} else {
					$('#exam').empty();
					$('#exam').append('<option value="">Select Exam</option>');
				}
			});
		});
	</script>


	<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/popper/popper.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- Common js-->
	<script src="<?= base_url(); ?>assets/admin_assets/js/app.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/js/layout.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/material/material.min.js"></script>
	<!-- chart js -->
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/js/pages/chart/apex/home-data3.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/js/pages/sparkline/sparkline-data.js"></script>







	<!-- <script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/popper/popper.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/feather/feather.min.js"></script>
	
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	
	<script src="<?= base_url(); ?>assets/admin_assets/js/app.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/js/layout.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/js/theme-color.js"></script>
	
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/material/material.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/js/pages/date-time/date-time.init.js"></script>
	dropzone -->
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/dropzone/dropzone.js"></script>
	<script src="<?= base_url(); ?>assets/admin_assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('#preview_take').change(function(event){
      var x=URL.createObjectURL(event.target.files[0]);
      $('#preview').attr("src",x);
     $('#preview').css("width", "100px");
$('#preview').css("height", "100px");

    });
  });
</script> -->
	<!-- end js include path -->
</body>

</html>
