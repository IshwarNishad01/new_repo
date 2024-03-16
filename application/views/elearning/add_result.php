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
	<link href="<?=base_url();?>assets/admin_assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css">
	<!--bootstrap -->
	<link href="<?=base_url();?>assets/admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/style.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css">
	<!-- dropzone -->
	<link href="<?=base_url();?>assets/admin_assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/flatpicker/css/flatpickr.min.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="<?=base_url();?>assets/admin_assets/img/gd_logo.png">
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
		<!-- start header -->
		<?php include 'header1.php';?>
		<!-- end header -->
	
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php include 'sidebar.php';?>
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<?php if(isset($_REQUEST['add_result'])){?>
							<p style="color:green;font-size:20px ;">Result Posted Successfully ......</p><?php } ?>
						<?php if(isset($_REQUEST['add_result'])){?>
							<p style="color:red;font-size:20px ;">Please check your file type and file size.</p><?php } ?>
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Result</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Result  Details</header>
									
									
								</div>
								<form action="" method="POST" enctype="multipart/form-data">
								<div class="card-body row">
									
									<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txttitle" name="title" required>
											<label class="mdl-textfield__label" >Result Title*</label>
										</div>
									</div>

										<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">

										<p >Upload File*</p>
											<input id="preview_take" type="file"  name="file_notice" required="" class="form-control"><br><small>only  pdf files are allowed to upload</small><br>
											
										</div>
									</div>
									
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Send</button>
										<!-- <button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Cancel</button> -->
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/popper/popper.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Common js-->
	<script src="<?=base_url();?>assets/admin_assets/js/app.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/layout.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/material/material.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/date-time/date-time.init.js"></script>
	<!-- dropzone -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/dropzone/dropzone.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/dropzone/dropzone-call.js"></script>
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
