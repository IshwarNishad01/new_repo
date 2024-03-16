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
	<style type="text/css">
		@media screen(max-width: 400px){
			width:100%;
		}
		@media only screen and (max-width: 600px) {
 #example4{
   width:100%;
  }
}
	</style>
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
								<div class="page-title">Result List</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card-box card-responcive" >
								<div class="card-head">
									<!-- <button id="sdntmenu" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
										<i class="material-icons"></i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="sdntmenu">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul> -->
								</div>
								<div class="card-body ">
									<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4 table-responcive" >
										<thead>
											<tr>
												<th>S.No.</th>
												<th>Title </th>
												<th> View </th>
                                				<th> Date </th>
											</tr>
										</thead>
										<tbody>
											<?php 

												$sn=1;
											 foreach($shaw as $key){?>
											<tr class="odd gradeX">
												<td><?php echo $sn++;?></td>
												<td style="width: 2cm;"><?=$key->title?></td>
												<td style="width: 2cm;"><a href="<?=base_url();?><?=$key->file_location;?>" target="_blank" class="btn btn-primary">view</a></td>
                                                <td style="width: 4cm;"><?=$key->date;?></td>
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
				</div>
			</div> -->
			<!-- end chat sidebar -->
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
