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
		<?php include 'header1.php';?>
		<div class="page-container">
			<?php include 'sidebar.php';?>
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">View Application </div>
							</div>
							<div class=" pull-right">
								<div class="page-title"><button type="button" class="btn btn-danger" onclick="print_form();">print</button></div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card-box card-responcive" >
								<table class="table table-bordered">
							<?php
							
							foreach ($q as $key) {
								
							?>
							<tr>
								<td colspan="2">
									<br>
									<center>
								
								<img alt="image" src="<?=base_url();?>assets/admin_assets/img/logo_gd_c.png" style="height: 49px;width: 88px;margin-top: -19px;"><br>GD Professional College
								</center>
								</td>
							</tr>
							<tr>
								<td colspan="2">
								
								STUDENT INFORMATION</td>
							</tr>
							<tr>
								<td>Student Name</td>
								<td><?=$key->stu_name;?></td>
							</tr>
							<tr>
								<td>Father Name</td>
								<td><?=$key->father_name;?></td>
							</tr><tr>
								<td>Mother Name</td>
								<td><?=$key->mother_name;?></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td><?=$key->gender;?></td>
							</tr>
							<tr>
								<td>Mobile No.</td>
								<td><?=$key->mobi_nu;?></td>
							</tr>
							<tr>
								<td>Telephone No.</td>
								<td><?=$key->t_nu;?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><?=$key->stu_email;?></td>
							</tr><tr>
								<td>Address</td>
								<td><?=$key->home_addres;?>,<?=$key->city;?>,<?=$key->state;?></td>
							</tr>
							<tr>
								<td>Pin No.</td>
								<td><?=$key->pin;?></td>
							</tr>
							<tr>
								<td>Course</td>
								<td><?=$key->adimission_course;?></td>
							</tr>
							<tr>
								<td>University</td>
								<td><?=$key->university;?></td>
							</tr>
							<tr>
								<td>D.O.B</td>
								<td><?=$key->dateofbirth;?></td>
							</tr>
							<tr><td>Subject</td>
							<td><?=$key->pass_sub;?></td>
						</tr>
						<tr><td>Year of Completing</td>
							<td><?=$key->pass_year;?></td>
						</tr>
						<tr><td>Percent</td>
							<td><?=$key->pass_per;?></td>
						</tr>
							<tr>
								<td>Married Status</td>
								<td><?=$key->married_sts;?></td>
							</tr>
							<tr>
								<td>Adhar No.</td>
								<td><?=$key->adhar;?></td>
							</tr>
							<tr>
								<td>Religion</td>
								<td><?=$key->religion;?></td>
							</tr>
							<tr>
								<td>Category</td>
								<td><?=$key->category;?></td>
							</tr>
							<tr>
								<td>Family Income</td>
								<td><?=$key->family_income;?></td>
							</tr>
							<?php } ?>
						</table>
								</div>
						</div>
					</div>
				</div>
			</div>
			
					</div>
				</div>
			</div> 
			<!-- end chat sidebar -->
		</div>
		
	</div>
	<!-- start js include path -->
	<script type="text/javascript">
	function print_form() {
		// document.getElementById('for_print').style.cssText=" visibility: hidden;";
		document.getElementById('for_print1').style.cssText=" visibility: hidden;";
		
		print();

		// document.getElementById('for_print').style.cssText=" visibility: visible;";
		document.getElementById('for_print1').style.cssText=" visibility: visible;";
		
	}
</script>
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