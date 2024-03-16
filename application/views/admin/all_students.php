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
	<link href="<?=base_url();?>assets/admin_assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/admin_assets/css/pages/formlayout.css" rel="stylesheet" type="text/css">
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
	 <link rel="icon" type="image/png" href="<?=base_url();?>assets/admin_assets/img/fevicon.png">
	
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<?php include 'header1.php'?>

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
								<div class="page-title">All Enquiry List</div>
							</div>
							<!-- <ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Students</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Students List</li>
							</ol> -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
				<header>All Students List</header>
				<div class="tools">
	<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
														</div>
													</div>
	<div class="card-body ">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-6">
																<!-- <div class="btn-group">
																	<a href="add_professor.html" id="addRow" class="btn btn-primary">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																</div> -->
															</div>
														</div>
<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
		<thead>
																<tr>
																	<th></th>
																	<th> Name</th>
																	<th> Email </th>
																	<th> Mobile No. </th>
																	<th> Appling Course </th>
																	<!-- <th> Address </th> -->
																	<th>Registration date</th>
																	<th> Action </th>
																</tr>
										</thead>
									<tbody>
		<?php 
		$a=1;

		foreach($show as $key){?>
		<tr class="odd gradeX">
		<td class=""><?php echo $a++;?></td>
	<td class="left"><?=$key->stu_name;?></td>
	<td><a href="mailto:<?=$key->stu_email;?>"><?=$key->stu_email;?> </a></td>
	<td class="left"><?=$key->mobi_nu;?></td>
	<td><a href="left"><?=$key->adimission_course;?> </a></td>
<!-- <td><?=$key->home_addres;?>,<?=$key->city;?>,<?=$key->state;?></td> -->
	<td class="left"><?=$key->date;?></td>
																	<td>
<!-- <a href="edit_student.html" class="tblEditBtn">

<i class="fa fa-pencil"></i>
																		</a> -->
<a class="tblDelBtn" href="<?=base_url('SDelete');?>?q=<?=$key->sid;?>">
<i class="fa fa-trash-o"></i>
																		</a>
<!-- <a class="tblEditBtn" data-bs-target="#m1<?=$key->sid;?>" data-bs-toggle="modal"><i class="fa fa-eye"></i></a>> -->
<a class="tblEditBtn" href="veiwstu?q=<?=$key->sid;?>" ><i class="fa fa-eye"></i></a>
<div class="modal" id="m1<?=$key->sid;?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"><header>Student Detalis</header><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
			<div class="modal-body">

					<table class="table table-striped table-bordered">
						<tr><td colspan="2">Personal Info</td>
						</tr>
						<tr><td>Name</td>
							<td><?=$key->stu_name;?></td>
						</tr>
						<tr><td>Father Name</td>
							<td><?=$key->father_name;?></td>
						</tr>
						<tr><td>Mother Name</td>
							<td><?=$key->mother_name;?></td>
						</tr>
						<tr><td>Gender</td>
							<td><?=$key->gender;?></td>
						</tr>
						<tr><td>D.O.B</td>
							<td><?=$key->dateofbirth;?></td>
						</tr>
						<tr><td>Married Status</td>
							<td><?=$key->married_sts;?></td>
						</tr>
						<tr><td>Adhar No.</td>
							<td><?=$key->adhar;?></td>
						</tr>
						<tr><td>Religion</td>
							<td><?=$key->religion;?></td>
						</tr>
						<tr><td>Category</td>
							<td><?=$key->category;?></td>
						</tr>
						<tr><td>Family Income</td>
							<td><?=$key->family_income;?></td>
						</tr>
						<tr><td>Health</td>
							<td><?=$key->health_sts;?></td>
						</tr>
						<tr><td colspan="2">Contact Info</td></tr>
						<tr><td>Mobile No.</td>
							<td><?=$key->mobi_nu;?></td>
						</tr>
						<tr><td>Telephone No.</td>
							<td><?=$key->t_nu;?></td>
						</tr>
						<tr><td>Email</td>
							<td><?=$key->stu_email;?></td>
						</tr>
						<tr><td>Address</td>
							<td><?=$key->home_addres;?>,<?=$key->city;?>,<?=$key->state;?></td>
						</tr>
						<tr><td>Pin No.</td>
							<td><?=$key->pin;?></td>
						</tr>
						<tr><td colspan="2">Apply For</td></tr>
						<tr><td> Course</td>
							<td><?=$key->adimission_course;?></td>
						</tr>
						<tr><td> University</td>
							<td><?=$key->university;?></td>
						</tr>
						<tr><td colspan="2">Qualification</td></tr>
						<tr><td>Subject</td>
							<td><?=$key->pass_sub;?></td>
						</tr>
						<tr><td>Year of Completing</td>
							<td><?=$key->pass_year;?></td>
						</tr>
						<tr><td>Percent</td>
							<td><?=$key->pass_per;?></td>
						</tr>
						<!-- <tr><td>Subject</td>
							<td><?=$key->pass_sub;?></td>
						</tr> -->

					</table>










			<!-- 	<form action="#" id="form_sample_1" class="form-horizontal">
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-4">
													<input type="text" class="form-control" name="email" value="<?=$key->stu_name;?>">
													 </div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">gender
													<span class="required"> * </span>
												</label>
												<div class="col-md-4">
													<div class="input-group">
														
														<input type="text" class="form-control" name="" value="<?=$key->gender?>"> </div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Date of Birth
													<span class="required"> * </span>
												</label>
												<div class="col-md-4">
													<input name="" type="text" class="form-control" value="<?=$key->dateofbirth;?>">
													
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Number
													<span class="required"> * </span>
												</label>
												<div class="col-md-4">
													<input name="number" type="text" class="form-control"> </div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Credit Card
													<span class="required"> * </span>
												</label>
												<div class="col-md-4">
													<input name="creditcard" type="text" class="form-control">
													<span class="help-block"> e.g: 5500 0000 0000 0004 </span>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Occupation&nbsp;&nbsp;</label>
												<div class="col-md-4">
													<input name="occupation" type="text" class="form-control">
													<span class="help-block"> optional field </span>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Select
													<span class="required"> * </span>
												</label>
												<div class="col-md-4">
													<select class="form-select" name="select">
														<option value="">Select...</option>
														<option value="Category 1">Category 1</option>
														<option value="Category 2">Category 2</option>
														<option value="Category 3">Category 5</option>
														<option value="Category 4">Category 4</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="offset-md-3 col-md-9">
												<button type="submit" class="btn btn-info m-r-20">Submit</button>
												<button type="button" class="btn btn-default">Cancel</button>
											</div>
										</div>
									</form> -->
								
				
			</div>
		</div>
	</div>
</div>
																	</td>
																</tr>
																<?php } ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab2">
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user10.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Science </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br>Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user1.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Mathematics </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br>Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user2.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Sarah Smith </div>
																<div class="name-center"> Commerce </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br>New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user3.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">John Deo </div>
																<div class="name-center"> Arts </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br>Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user4.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Jay Soni </div>
																<div class="name-center"> M.B.A. </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br>Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user5.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Jacob Ryan </div>
																<div class="name-center"> Urology </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br>New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user6.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Megha Trivedi </div>
																<div class="name-center"> Electrical </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br>Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user1.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Mathematics </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br>Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user2.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Sarah Smith </div>
																<div class="name-center"> Commerce </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br>New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user10.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Science </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br>Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user1.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Mathematics </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br>Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?=base_url();?>assets/admin_assets/img/user/user3.jpg" class="doctor-pic" alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">John Deo </div>
																<div class="name-center"> Arts </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br>Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
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
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<!-- <div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i class="material-icons">chat</i>Chat
								<span class="badge badge-danger">4</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i class="material-icons">settings</i>
								Settings
							</a>
						</li>
					</ul>
					<div class="tab-content">
							<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
							<div class="chat-sidebar-list">
								<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
									<div class="chat-header">
										<h5 class="list-heading">Online</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media"><img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user3.jpg" width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">John Deo</h5>
												<div class="media-heading-sub">Spine Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">5</span>
											</div> <img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user1.jpg" width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Rajesh</h5>
												<div class="media-heading-sub">Director</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user5.jpg" width="35" height="35" alt="...">
											<i class="away dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jacob Ryan</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">8</span>
											</div> <img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user4.jpg" width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Kehn Anderson</h5>
												<div class="media-heading-sub">CEO</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user2.jpg" width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Sarah Smith</h5>
												<div class="media-heading-sub">Commerce</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user7.jpg" width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Vlad Cardella</h5>
												<div class="media-heading-sub">Civil</div>
											</div>
										</li>
									</ul>
									<div class="chat-header">
										<h5 class="list-heading">Offline</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">4</span>
											</div> <img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user6.jpg" width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jennifer Maklen</h5>
												<div class="media-heading-sub">Engineering</div>
												<div class="media-heading-small">Last seen 01:20 AM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user8.jpg" width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Lina Smith</h5>
												<div class="media-heading-sub">Science</div>
												<div class="media-heading-small">Last seen 11:14 PM</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">9</span>
											</div> <img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user9.jpg" width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jeff Adam</h5>
												<div class="media-heading-sub">Music</div>
												<div class="media-heading-small">Last seen 3:31 PM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user10.jpg" width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Anjelina Cardella</h5>
												<div class="media-heading-sub">Physiotherapist</div>
												<div class="media-heading-small">Last seen 7:45 PM</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
					 	<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
							<div class="chat-sidebar-settings-list slimscroll-style">
								<div class="chat-header">
									<h5 class="list-heading">Layout Settings</h5>
								</div>
								<div class="chatpane inner-content ">
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Sidebar Position</div>
											<div class="setting-set">
												<select class="sidebar-pos-option form-control input-inline input-sm input-small ">
													<option value="left" selected="selected">Left</option>
													<option value="right">Right</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Header</div>
											<div class="setting-set">
												<select class="page-header-option form-control input-inline input-sm input-small ">
													<option value="fixed" selected="selected">Fixed</option>
													<option value="default">Default</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Footer</div>
											<div class="setting-set">
												<select class="page-footer-option form-control input-inline input-sm input-small ">
													<option value="fixed">Fixed</option>
													<option value="default" selected="selected">Default</option>
												</select>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">Account Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Notifications</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
														<input type="checkbox" id="switch-1" class="mdl-switch__input" checked="">
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Show Online</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7">
														<input type="checkbox" id="switch-7" class="mdl-switch__input" checked="">
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Status</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
														<input type="checkbox" id="switch-2" class="mdl-switch__input" checked="">
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">2 Steps Verification</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
														<input type="checkbox" id="switch-3" class="mdl-switch__input" checked="">
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">General Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Location</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4">
														<input type="checkbox" id="switch-4" class="mdl-switch__input" checked="">
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Save Histry</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5">
														<input type="checkbox" id="switch-5" class="mdl-switch__input" checked="">
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Auto Updates</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6">
														<input type="checkbox" id="switch-6" class="mdl-switch__input" checked="">
													</label>
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
		
	<div class="page-footer">
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
	<!-- end js include path -->
</body>

</html>