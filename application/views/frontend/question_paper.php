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

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">

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
							<div class="card-box">

								<div class="card-head">
									<header>Exam Information</header>

									<table class="table table-bordered">
										<?php
										$course_id = $_SESSION['course_name'];

										// $data = $this->db->query("select * from exam where course_id='$course_id' and status='active' order by desc exam_id limit 1")->result();

										$examID = $this->input->get('id');

										// $data = $this->db->query("select * from exam where course_id='$course_id' and status='active' order by exam_id desc limit 1")->result();


										$data = $this->db->query("select * from exam where exam_id='$examID' and status='active' order by exam_id desc limit 1")->result();


										if (!empty($data)) {


											foreach ($data as $show) {
												# code...

										?>

												<tr>
													<th>Exam Name</th>
													<th><?= $show->exam_name;
															$_SESSION['exam_n'] = $show->exam_name;
															$_SESSION['exam_id'] = $show->exam_id;
															?></th>
												</tr>
												<tr>
													<th>Duration</th>
													<th><?= $show->duration;
															$_SESSION['duration'] = $show->duration;

															?> mintus</th>
												</tr>
												<tr>
													<th>Total Questions</th>
													<th><?= $show->total_question;
															$_SESSION['total_question'] = $show->total_question;

															?></th>
												</tr>
												<tr>
													<th>Total Marks</th>
													<th><?= $show->total_mark;
															$_SESSION['total_mark'] = $show->total_mark;

															?></th>
												</tr>

											<?php }
											?>


											<center class="mb-5">
												<p>Note : Check your personal and exam information if it is not correct than contact to admin</p>
												<a href="exam_paper_final?<?php echo $_SESSION['exam_id'] ?>" class="btn btn-primary"> Start Exam </a>
											</center>

										<?php
										} else {
										?>
											<center class="">
												<p>Exam Paper not found for this course... </p>
												<a href="<?= base_url('dashboard') ?>" class="btn btn-primary"> Back To Home </a>
											</center>
										<?php
										} ?>
									</table>


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
             Start User Chat 
            <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
              <div class="chat-sidebar-list">
                <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
                  <div class="chat-header">
                    <h5 class="list-heading">Online</h5>
                  </div>
                  <ul class="media-list list-items">
                    <li class="media"><img class="media-object" src="<?= base_url(); ?>assets/admin_assets/img/user/user3.jpg" width="35" height="35" alt="...">
                      <i class="online dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">John Deo</h5>
                        <div class="media-heading-sub">Spine Surgeon</div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-status">
                        <span class="badge badge-success">5</span>
                      </div> <img class="media-object" src="<?= base_url(); ?>assets/admin_assets/img/user/user1.jpg" width="35" height="35" alt="...">
                      <i class="busy dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Rajesh</h5>
                        <div class="media-heading-sub">Director</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="<?= base_url(); ?>assets/admin_assets/img/user/user5.jpg" width="35" height="35" alt="...">
                      <i class="away dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Jacob Ryan</h5>
                        <div class="media-heading-sub">Ortho Surgeon</div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-status">
                        <span class="badge badge-danger">8</span>
                      </div> <img class="media-object" src="<?= base_url(); ?>assets/admin_assets/img/user/user4.jpg" width="35" height="35" alt="...">
                      <i class="online dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Kehn Anderson</h5>
                        <div class="media-heading-sub">CEO</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="<?= base_url(); ?>assets/admin_assets/img/user/user2.jpg" width="35" height="35" alt="...">
                      <i class="busy dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Sarah Smith</h5>
                        <div class="media-heading-sub">Anaesthetics</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="<?= base_url(); ?>assets/admin_assets/img/user/user7.jpg" width="35" height="35" alt="...">
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
                        <span class="badge badge-warning">4</span>
                      </div> <img class="media-object" src="<?= base_url(); ?>assets/admin_assets/img/user/user6.jpg" width="35" height="35" alt="...">
                      <i class="offline dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Jennifer Maklen</h5>
                        <div class="media-heading-sub">Nurse</div>
                        <div class="media-heading-small">Last seen 01:20 AM</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="<?= base_url(); ?>assets/admin_assets/img/user/user8.jpg" width="35" height="35" alt="...">
                      <i class="offline dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Lina Smith</h5>
                        <div class="media-heading-sub">Ortho Surgeon</div>
                        <div class="media-heading-small">Last seen 11:14 PM</div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-status">
                        <span class="badge badge-success">9</span>
                      </div> <img class="media-object" src="<?= base_url(); ?>assets/admin_assets/img/user/user9.jpg" width="35" height="35" alt="...">
                      <i class="offline dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Jeff Adam</h5>
                        <div class="media-heading-sub">Compounder</div>
                        <div class="media-heading-small">Last seen 3:31 PM</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="<?= base_url(); ?>assets/admin_assets/img/user/user10.jpg" width="35" height="35" alt="...">
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
			<!-- <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
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
            </div> -->
		</div>
	</div>
	</div> -->
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
