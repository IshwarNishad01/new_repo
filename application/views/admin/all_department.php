﻿<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="description" content="Responsive Admin Template">
	<meta name="author" content="SmartUniversity">
	<title>Smart University | Bootstrap Responsive Admin Template</title>
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
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.html">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Smart</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></iali>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
					<spanspan>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a class="fullscreen-btn"><i data-feather="maximize"></iali>
						<!-- start language menu -->
						<li class="dropdown language-switch">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img src="../assets/img/flags/gb.png" class="position-left" alt=""> English 
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="deutsch"><img src="../assets/img/flags/de.png" alt=""> Deutsch</a>
								</li>
								<li>
									<a class="ukrainian"><img src="../assets/img/flags/ua.png" alt=""> Українська</a>
								</li>
								<li>
									<a class="english"><img src="../assets/img/flags/gb.png" alt=""> English</a>
								</li>
								<li>
									<a class="espana"><img src="../assets/img/flags/es.png" alt=""> España</a>
								</li>
								<li>
									<a class="russian"><img src="../assets/img/flags/ru.png" alt=""> Русский</a>
								</li>
							</ul>
						</li>
						<!-- end language menu -->
						<!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<i data-feather="bell"></i>
								<span class="badge headerBadgeColor1"> 6span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Notifications</spanh3>
									<span class="notification-label purple-bgcolor">New span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></ispan>
													Congratulations!. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></ispan>
													<b>John Micleb>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></ispan>
													<b>Sneha Jogib>sent you a message. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink"><i class="fa fa-heart"></ispan>
													<b>Ravi Patelb>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow"><i class="fa fa-warning"></ispan> Warning! </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red"><i class="fa fa-times"></ispan> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notificationsa>
									</div>
								</li>
							</ul>
						</li>
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<i data-feather="mail"></i>
								<span class="badge headerBadgeColor2"> 2span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Messages</spanh3>
									<span class="notification-label cyan-bgcolor">New span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/user/user2.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Sarah Smithspan>
													<span class="time">Just Nowspan>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/user/user3.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> John Deospan>
													<span class="time">16 minsspan>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/user/user1.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Rajeshspan>
													<span class="time">2 hrsspan>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/user/user8.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Lina Smithspan>
													<span class="time">40 minsspan>
												</span>
												<span class="message"> Apply for Ortho Surgeonspan>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/user/user5.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Jacob Ryanspan>
													<span class="time">46 minsspan>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messagesa>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img alt="" class="img-circle " src="../assets/img/dp.jpg">
								<span class="username username-hide-on-mobile"> Sneha
							</spana>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Profilea>
								</li>
								<li>
									<a href="#">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.html">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="login.html">
										<i class="icon-logout"></i> Log Outa>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->
		<div class="settingSidebar">
			<a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
			</a>
			<div class="settingSidebar-body ps-container ps-theme-default">
				<div class=" fade show active">
					<div class="setting-panel-header">Setting Panel
					</div>
					<div class="quick-setting slimscroll-style">
						<ul id="themecolors">
							<li>
								<p class="sidebarSettingTitle">Sidebar Color</p>
							</li>
							<li class="complete">
								<div class="theme-color sidebar-theme">
									<a href="#" data-theme="white"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="green"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="red"><span class="head"></span><span class="cont"></spana>
								</div>
							</li>
							<li>
								<p class="sidebarSettingTitle">Header Brand color</p>
							</li>
							<li class="theme-option">
								<div class="theme-color logo-theme">
									<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></spana>
								</div>
							</li>
							<li>
								<p class="sidebarSettingTitle">Header color</p>
							</li>
							<li class="theme-option">
								<div class="theme-color header-theme">
									<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></spana>
									<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></spana>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<spanspan>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="sidebar-user">
									<div class="sidebar-user-picture">
										<img alt="image" src="../assets/img/dp.jpg">
									</div>
									<div class="sidebar-user-details">
										<div class="user-name">Sneha Patel</div>
										<div class="user-role">Administrator</div>
									</div>
								</div>
							</li>
							<li class="nav-item start ">
								<a href="#" class="nav-link nav-toggle">
									<i data-feather="airplay"></i>
									<span class="title">Dashboard</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item   ">
										<a href="index.html" class="nav-link ">
											<span class="title">Dashboard span>
										</a>
									</li>
									<li class="nav-item ">
										<a href="dashboard2.html" class="nav-link ">
											<span class="title">Dashboard span>
										</a>
									</li>
									<li class="nav-item">
										<a href="dashboard3.html" class="nav-link ">
											<span class="title">Dashboard span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="event.html" class="nav-link nav-toggle"> <i data-feather="calendar"></i>
									<span class="title">Event Management</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="user"></i>
									<span class="title">Professors</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_professors.html" class="nav-link "> <span class="title">All
												Professors</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_professor.html" class="nav-link "> <span class="title">Add
												Professor</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_professor_bootstrap.html" class="nav-link "> <span class="title">Add Professor Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_professor.html" class="nav-link "> <span class="title">Edit
												Professor</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="professor_profile.html" class="nav-link "> <span class="title">About
												Professor</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i data-feather="users"></i>
									<span class="title">Students</span><span class="arrow"></spana>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_students.html" class="nav-link "> <span class="title">All
												Students</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_student.html" class="nav-link "> <span class="title">Add
												Student</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_student_bootstrap.html" class="nav-link "> <span class="title">Add
												Student Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_student.html" class="nav-link "> <span class="title">Edit
												Student</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="student_profile.html" class="nav-link "> <span class="title">About
												Student</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="book"></i>
									<span class="title">Courses</span> <span class="arrow"></span>
									<span class="label label-rouded label-menu label-success">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_courses.html" class="nav-link "> <span class="title">All
												Courses</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_course.html" class="nav-link "> <span class="title">Add
												Course</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_course_bootstrap.html" class="nav-link "> <span class="title">Add
												Course Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_course.html" class="nav-link "> <span class="title">Edit
												Course</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="course_details.html" class="nav-link "> <span class="title">About
												Course</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="book-open"></i>
									<span class="title">Library</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_assets.html" class="nav-link "> <span class="title">All Library
												Assets</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_library.html" class="nav-link "> <span class="title">Add Library
												Asset</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_library_bootstrap.html" class="nav-link "> <span class="title">Add
												Asset Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_library.html" class="nav-link "> <span class="title">Edit
												Asset</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item active open">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="briefcase"></i>
									<span class="title">Departments</span> <span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item active">
										<a href="all_department.html" class="nav-link "> <span class="title">All
												Departments</span>
											<span class="selected"></span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_department.html" class="nav-link "> <span class="title">Add
												Department</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_department_bootstrap.html" class="nav-link "> <span class="title">Add Department Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_department.html" class="nav-link "> <span class="title">Edit
												Department</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="smile"></i>
									<span class="title">Staff</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_staffs.html" class="nav-link "> <span class="title">All
												Staff</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_staff.html" class="nav-link "> <span class="title">Add Staff</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_staff_bootstrap.html" class="nav-link "> <span class="title">Add
												Staff Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_staff.html" class="nav-link "> <span class="title">Edit
												Staff</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="staff_profile.html" class="nav-link "> <span class="title">Staff
												Profile</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="coffee"></i>
									<span class="title">Holiday</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_holidays.html" class="nav-link "> <span class="title">All
												Holiday</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_holiday.html" class="nav-link "> <span class="title">Add
												Holiday</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_holiday_bootstrap.html" class="nav-link "> <span class="title">Add
												Holiday Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_holiday.html" class="nav-link "> <span class="title">Edit
												Holiday</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i data-feather="mail"></i>
									<span class="title">Email</span>
									<span class="arrow"></span>
									<span class="label label-rouded label-menu label-danger">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="email_inbox.html" class="nav-link ">
											<span class="title">Inbox</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_view.html" class="nav-link ">
											<span class="title">View Mail</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_compose.html" class="nav-link ">
											<span class="title">Compose Mail</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="dollar-sign"></i>
									<span class="title">Fees</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="fees_collection.html" class="nav-link "> <span class="title">Fees
												Collection</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_fees.html" class="nav-link "> <span class="title">Add Feesspan>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_fees_bootstrap.html" class="nav-link "> <span class="title">Add
												Fees Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="fees_receipt.html" class="nav-link "> <span class="title">Fee
												Receipt</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="layout"></i>
									<span class="title">Layouts</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="layout_verticle.html" class="nav-link "> <span class="title">Verticle</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="layout_boxed.html" class="nav-link "> <span class="title">Boxedspan>
										</a>
									</li>
									<li class="nav-item">
										<a href="layout_collapse.html" class="nav-link "> <span class="title">Collapse</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="layout_hover_menu.html" class="nav-link "> <span class="title">Hover
												Menu</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="layout_right_sidebar.html" class="nav-link "> <span class="title">Right
												Sidebar</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="widget.html" class="nav-link nav-toggle"> <i data-feather="gift"></i>
									<span class="title">Widget</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i data-feather="copy"></i>
									<span class="title">UI Elements</span>
									<span class="label label-rouded label-menu label-warning">new</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="ui_buttons.html" class="nav-link ">
											<span class="title">Buttons</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_sweet_alert.html" class="nav-link ">
											<span class="title">Sweet Alert</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_tabs_accordions_navs.html" class="nav-link ">
											<span class="title">Tabs &amp; Accordions</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_typography.html" class="nav-link ">
											<span class="title">Typography</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="notification.html" class="nav-link ">
											<span class="title">Notification</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_icons.html" class="nav-link ">
											<span class="title">Icons</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_panels.html" class="nav-link ">
											<span class="title">Panels</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_grid.html" class="nav-link ">
											<span class="title">Grids</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_tree.html" class="nav-link ">
											<span class="title">Tree View</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ui_carousel.html" class="nav-link ">
											<span class="title">Carousel</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i data-feather="layers"></i>
									<span class="title">Material Elements</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="material_button.html" class="nav-link ">
											<span class="title">Buttons</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_tab.html" class="nav-link ">
											<span class="title">Tabs</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_chips.html" class="nav-link ">
											<span class="title">Chips</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_grid.html" class="nav-link ">
											<span class="title">Grid</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_icons.html" class="nav-link ">
											<span class="title">Icon</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_form.html" class="nav-link ">
											<span class="title">Form</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_datepicker.html" class="nav-link ">
											<span class="title">DatePicker</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_select.html" class="nav-link ">
											<span class="title">Select Item</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_loading.html" class="nav-link ">
											<span class="title">Loading</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_menu.html" class="nav-link ">
											<span class="title">Menu</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_slider.html" class="nav-link ">
											<span class="title">Slider</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_tables.html" class="nav-link ">
											<span class="title">Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_toggle.html" class="nav-link ">
											<span class="title">Toggle</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="material_badges.html" class="nav-link ">
											<span class="title">Badges</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i data-feather="server"></i>
									<span class="title">Formsspan>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="layouts_form.html" class="nav-link ">
											<span class="title">Form Layout</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="advance_form.html" class="nav-link ">
											<span class="title">Advance Component</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="wizard.html" class="nav-link ">
											<span class="title">Form Wizard</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="validation_form.html" class="nav-link ">
											<span class="title">Form Validation</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="editable_form.html" class="nav-link ">
											<span class="title">Editor</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i data-feather="grid"></i>
									<span class="title">Data Tables</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="basic_table.html" class="nav-link ">
											<span class="title">Basic Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="advanced_table.html" class="nav-link ">
											<span class="title">Advance Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="export_table.html" class="nav-link ">
											<span class="title">Export Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="child_row_table.html" class="nav-link ">
											<span class="title">Child Row Tables</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="group_table.html" class="nav-link ">
											<span class="title">Grouping</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="tableData.html" class="nav-link ">
											<span class="title">Tables With Sourced Data</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i data-feather="pie-chart"></i>
									<span class="title">Charts</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="charts_apexchart.html" class="nav-link ">
											<span class="title">Apex chart</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_amchart.html" class="nav-link ">
											<span class="title">amChart</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_plotly.html" class="nav-link ">
											<span class="title">Plotly Charts</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_echarts.html" class="nav-link ">
											<span class="title">eCharts</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_morris.html" class="nav-link ">
											<span class="title">Morris Charts</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="charts_chartjs.html" class="nav-link ">
											<span class="title">Chartjs</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i data-feather="map-pin"></i>
									<span class="title">Maps</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="google_maps.html" class="nav-link ">
											<span class="title">Google Maps</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="vector_maps.html" class="nav-link ">
											<span class="title">Vector Maps</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle"> <i data-feather="anchor"></i>
									<span class="title">Extra pages</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item  ">
										<a href="login.html" class="nav-link "> <span class="title">Login</span>
										</a>
									</li>
									<li class="nav-item  ">
										<a href="sign_up.html" class="nav-link "> <span class="title">Sign Up</span>
										</a>
									</li>
									<li class="nav-item  ">
										<a href="forgot_password.html" class="nav-link "> <span class="title">Forgot
												Password</span>
										</a>
									</li>
									<li class="nav-item"><a href="user_profile.html" class="nav-link "><span class="title">Profile</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="contact.html" class="nav-link "> <span class="title">Contact Us</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="lock_screen.html" class="nav-link "> <span class="title">Lock
												Screen</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="page-404.html" class="nav-link "> <span class="title">404 Page</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="page-500.html" class="nav-link "> <span class="title">500 Page</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="blank_page.html" class="nav-link "> <span class="title">Blank
												Page</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i data-feather="chevrons-down"></i>
									<span class="title">Multi Level Menu</span>
									<span class="arrow "></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
											<i data-feather="alert-octagon"></i> Item 1
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="javascript:;" class="nav-link nav-toggle">
													<i data-feather="aperture"></i> Arrow Toggle
													<span class="arrow "></span>
												</a>
												<ul class="sub-menu">
													<li class="nav-item">
														<a href="javascript:;" class="nav-link">
															<i data-feather="battery"></i> Sample Link a>
													</li>
													<li class="nav-item">
														<a href="#" class="nav-link">
															<i data-feather="award"></i> Sample Link a>
													</li>
													<li class="nav-item">
														<a href="#" class="nav-link">
															<i data-feather="box"></i> Sample Link a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i data-feather="clock"></i> Sample Link a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i data-feather="database"></i> Sample Link a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i data-feather="edit"></i> Sample Link a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
											<i data-feather="folder"></i> Arrow Toggle
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i data-feather="film"></i> Sample Link a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i data-feather="file"></i> Sample Link a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i data-feather="heart"></i> Sample Link 1
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i data-feather="lock"></i> Item 3a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Department List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Department</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Department List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-xl-12">
							<div class="card-box">
								<div class="card-head">
									<header>Department List</header>
									<button id="sdntmenu" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="sdntmenu">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<a href="add_professor.html" id="addRow" class="btn btn-primary">
													Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
									</div>
									<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
										<thead>
											<tr>
												<th>#</th>
												<th>Dept. Name</th>
												<th>Head OF Deptth>
												<th>Phone</th>
												<th>Email</th>
												<th>Starting Year</th>
												<th>Student capacity</th>
												<th>Edit</th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd">
												<td>td>
												<td>Mechanical Enggtd>
												<td>Sanjay Chohan</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>150</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>td>
												<td>Civil Enggtd>
												<td>Sanjana Patil</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>130</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="odd">
												<td>td>
												<td>Electrical Enggtd>
												<td>Pooja Sarma</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>160</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>td>
												<td>M.C.Atd>
												<td>Sanjay Chohan</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>150</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="odd">
												<td>td>
												<td>Computer Enggtd>
												<td>Rajesh Malhotra</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>2000</td>
												<td>60</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>td>
												<td>M.B.Atd>
												<td>Poonam Talati</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>2004</td>
												<td>250</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="odd">
												<td>td>
												<td>Mechanical Enggtd>
												<td>Sanjay Chohan</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>150</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>td>
												<td>Civil Enggtd>
												<td>Sanjana Patil</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>130</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="odd">
												<td>td>
												<td>Electrical Enggtd>
												<td>Pooja Sarma</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>160</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>10</td>
												<td>M.C.Atd>
												<td>Sanjay Chohan</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>150</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="odd">
												<td>11</td>
												<td>Computer Enggtd>
												<td>Rajesh Malhotra</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>2000</td>
												<td>60</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>12</td>
												<td>M.B.Atd>
												<td>Poonam Talati</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>2004</td>
												<td>250</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="odd">
												<td>13</td>
												<td>Mechanical Enggtd>
												<td>Sanjay Chohan</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>150</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>14</td>
												<td>Civil Enggtd>
												<td>Sanjana Patil</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>130</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="odd">
												<td>15</td>
												<td>Electrical Enggtd>
												<td>Pooja Sarma</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>160</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>16</td>
												<td>M.C.Atd>
												<td>Sanjay Chohan</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>1998</td>
												<td>150</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="odd">
												<td>17</td>
												<td>Computer Enggtd>
												<td>Rajesh Malhotra</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>2000</td>
												<td>60</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>18</td>
												<td>M.B.Atd>
												<td>Poonam Talati</td>
												<td>+123 4567890</td>
												<td>test@example.com</td>
												<td>2004</td>
												<td>250</td>
												<td>
													<a href="edit_department.html" class="tblEditBtn">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="tblDelBtn">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i class="material-icons">chat</i>Chat
								<span class="badge badge-danger">span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i class="material-icons">settings</i>
								Settings
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<!-- Start User Chat -->
						<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
							<div class="chat-sidebar-list">
								<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
									<div class="chat-header">
										<h5 class="list-heading">Online</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media"><img class="media-object" src="../assets/img/user/user3.jpg" width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">John Deo</h5>
												<div class="media-heading-sub">Spine Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">span>
											</div> <img class="media-object" src="../assets/img/user/user1.jpg" width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Rajesh</h5>
												<div class="media-heading-sub">Director</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/user/user5.jpg" width="35" height="35" alt="...">
											<i class="away dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jacob Ryan</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">span>
											</div> <img class="media-object" src="../assets/img/user/user4.jpg" width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Kehn Anderson</h5>
												<div class="media-heading-sub">CEO</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/user/user2.jpg" width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Sarah Smith</h5>
												<div class="media-heading-sub">Anaesthetics</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/user/user7.jpg" width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Vlad Cardella</h5>
												<div class="media-heading-sub">Cardiologist</div>
											</div>
										</li>
									</ul>
									<div class="chat-header">
										<h5 class="list-heading">Offline</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">span>
											</div> <img class="media-object" src="../assets/img/user/user6.jpg" width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jennifer Maklen</h5>
												<div class="media-heading-sub">Nurse</div>
												<div class="media-heading-small">Last seen 01:20 AM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/user/user8.jpg" width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Lina Smith</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
												<div class="media-heading-small">Last seen 11:14 PM</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">span>
											</div> <img class="media-object" src="../assets/img/user/user9.jpg" width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jeff Adam</h5>
												<div class="media-heading-sub">Compounder</div>
												<div class="media-heading-small">Last seen 3:31 PM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/user/user10.jpg" width="35" height="35" alt="...">
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
						<!-- End User Chat -->
						<!-- Start Setting Panel -->
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
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; Smart University Theme By
				<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	
<script src="<?=base_url();?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/popper/popper.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- Common js-->
	<script src="<?=base_url();?>assets/admin_assets/js/app.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/layout.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/material/material.min.js"></script>
	<!-- chart js -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/chart/apex/home-data3.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/sparkline/sparkline-data.js"></script>
	






	<!-- <script src="<?=base_url();?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/popper/popper.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/feather/feather.min.js"></script>
	
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	
	<script src="<?=base_url();?>assets/admin_assets/js/app.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/layout.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/theme-color.js"></script>
	
	<script src="<?=base_url();?>assets/admin_assets/plugins/material/material.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/date-time/date-time.init.js"></script>
	<!-- dropzone -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/dropzone/dropzone.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/dropzone/dropzone-call.js"></script> -->
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