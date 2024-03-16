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
	<link href="<?=base_url();?>assets/admin_assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css">
	<!--bootstrap -->
	<link href="<?=base_url();?>assets/admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- data tables -->
	<link href="<?=base_url();?>assets/admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/style.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css">
	<!-- favicon -->
	<link rel="shortcut icon" href="<?=base_url();?>assets/admin_assets/img/favicon.ico">
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
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Career List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Career</a>&nbsp;<!-- <i class="fa fa-angle-right"></i> -->
								</li>
								<!-- <li class="active">News List</li> -->
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card-box">
								
								<div class="card-body ">
									<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
										<thead>
											<tr>
												<th>#</th>
												<!-- <th>Title </th> -->
												<th>Name</th>
												<!-- <th> Event Date </th> -->
												<th>contact no.</th>

												<th>email </th>
												<th>message </th>
												<th colspan="2">Action</th>

											</tr>
										</thead>
										<tbody>
											<?php 

												$sn=1;
											 foreach($show as $key){?>
											<tr class="odd gradeX">
												<td><?php echo $sn++;?></td>
												<!-- <td><?=$key->event_title?></td> -->
												
												<!-- <td class="left"><?=$key->event_date?></td> -->
												<td class="left"><?=$key->name?></td>
												<td><?=$key->mobile;?></td>
												<td><?=$key->email;?></td>
												<td><?=$key->msg;?></td>
												<td>
													<a href="<?=base_url();?>assets/upload_img/career_file/<?=$key->file?>" target="_blank">
														download
													</a>
												</td>
												<td>
													<a  class="" href="<?=base_url('Delete_Career');?>?q=<?=$key->career_id;?>" id="dlt" type="button">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
	</div>
	<!-- start js include path -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/popper/popper.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- data tables -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/table/table_data.js"></script>
	<!-- Common js-->
	<script src="<?=base_url();?>assets/admin_assets/js/app.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/layout.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/material/material.min.js"></script>
	
</body>

</html>