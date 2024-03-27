<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Gayatri Typing</title>
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
	<link href="<?= base_url(); ?>assets/fronted_asset/img/logo.jpg" rel="icon">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin_assets/plugins/flatpicker/css/font.css">
	<style type="text/css">
		@media only screen and (max-width: 600px) {
			#example4 {
				width: 100%;
			}
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
								<div class="page-title">Manage Exam </div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?= base_url('admin/dashboard') ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Manage Exam</li>
							</ol>
						</div>
					</div>
					<div class="row">
					<div class="col-md-12 col-sm-12">
					<?php
						if ($this->session->tempdata('success') != "") {
								?>
									<div class="alert alert-success alert-dismissible fade show" role="alert">
										<?= $this->session->tempdata('success') ?>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>

								<?php }	?>

						
							<div class="card-box card-responcive">
								<div class="card-head">
									<header>Register Students List</header>
								</div>
								<div class="card-body table-responsive">

									<div class="row my-4">
										<div class="col-lg-6">
											<form action="<?= base_url('admin/exam_approval') ?>" method="post">

												<label for="form-label mb-3">Select Exam</label>
												<select name="exam_name" class="form-control mt-2" id="">
													<option selected disabled>Select Exam</option>
													<?php
													foreach ($paper as $value) {
													?>
														<option value="<?= $value->id ?>"><?= $value->p_name ?></option>
													<?php
													}
													?>

												</select>

										</div>
									</div>

									<h5 class="fw-bold mt-5">Select students who can give test...</h5>
									<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4 table-responsive">
										<thead>
											<tr>
												<th>S.No.</th>
												<th>✔</th>
												<th>Student Name</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$sn = 1;
											foreach ($show as $row) {
											?>
												<tr>
													<td><?= $sn ?></td>
													<td>
														<input type="checkbox" value="<?= $row->id ?>" name="approvalStudent[]" id="">
													</td>
													<td><?= $row->first_name . ' ' . $row->last_name ?></td>
													<td>
														<?php
														if ($row->user_type == 0) {
														?>
															<span class="badge badge-success">Connected</span>
														<?php } else { ?>
															<span class="badge badge-warning">Not Connected</span>
														<?php } ?>
													</td>
												</tr>
											<?php $sn++;
											}
											?>

										</tbody>
									</table>
									<div class="mt-5">
										<input type="submit" class="btn btn-info" name="submit" value="Save Changes" id="">
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	</div>

	</div>

	</div>
	<!-- start js include path -->
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


</body>

</html>
