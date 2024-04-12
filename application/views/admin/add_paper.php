<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Gayatri Typing Or Steno Training Center</title>
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
	<link href="<?=base_url();?>assets/fronted_asset/img/logo.jpg" rel="icon">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin_assets/plugins/flatpicker/css/font.css">
<style>
	.hindi_font{
		font-size: 20px !important;
		font-weight: 600 !important;
	}
	.message{
		font-size: 20px !important;
		font-weight: 500 !important;
	}
	.ck-editor__editable[role="textbox"] {
         min-height: 200px;
    }
	.error{
		color: red;
	}

</style>

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
					
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Paper Pattern</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
						<?php
						if ($this->session->tempdata('add_paper') != "") {
								?>
									<div class="alert alert-success alert-dismissible fade show" role="alert">
										<?= $this->session->tempdata('add_paper') ?>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>

								<?php }	?>

							<div class="card-box">
								<div class="card-head">
									<header>Paper Details</header>
								</div>

								<div class="card-body" id="bar-parent">
									<form action="<?= base_url('admin/paper_data') ?>" class="form-horizontal" enctype="multipart/form-data" method="post">

										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Paper Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-7">
													<input type="text" name="p_name" data-required="1" placeholder="Paper name" class="form-control input-height" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3"> Exam Duration <br>(In Minutes)
													<span class="required"> * </span>
												</label>
												<div class="col-md-7">
													<input type="text" multiple="" name="duration" required id="preview_take" placeholder="Exam Duration" class="form-control input-height" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3"> Exam Date
													<span class="required"> * </span>
												</label>
												<div class="col-md-7">
													<input type="date" multiple="" name="e_date" required id="preview_take" placeholder="Enter Your Date" class="form-control input-height" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3"> Status
													<span class="required"> * </span>
												</label>
												<div class="col-md-7">
													<select name="status" id="" class="form-control" required >
														<option selected disabled>Select Status</option>
														<option value="Active">Active</option>
														<option value="Deactive">Deactive</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="control-label col-md-3"> Language
													<span class="required"> * </span>
												</label>
												<div class="col-md-7">
													<select name="language" id="" class="form-control" required  onchange="myfunction(this.value)">
														<option disabled selected>Select language</option>
														<option value="kruti">Hindi - Kurti Dev</option>
														<!-- <option value="mangal">Hindi - Mangal</option> -->
														<option value="english">English</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="control-label col-md-3" > Message
													<span class="required"> * </span>
												</label>
											<textarea id="content" class="form-control" name="message" cols="10" rows="10"></textarea>
									
									</div>
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit" name="submit" class="form-Control mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20  ms-2 btn-primary">Submit</button>
													</div>
												</div>
											</div>
										</div>

									</form>
									<div class="error">
										<?php if(!empty($msg)){
											echo $msg;
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<script>
			const paper_text = document.getElementById('content');

			function myfunction(value) {

				if (value == 'kruti') {
					paper_text.style.fontFamily = '"krutidev"';
					paper_text.value = "";
					paper_text.classList.add("hindi_font");

				} else {
					paper_text.style.fontFamily = '"English"';
					paper_text.value = "";
				}
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
		<script src="<?= base_url(); ?>assets/admin_assets/js/pages/date-time/date-time.init.js"></script>
		<!-- dropzone -->
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


<!-- CKEditor Codes......  -->

<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
	CKEDITOR.replace( 'message' );
</script>
