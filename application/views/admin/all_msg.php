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
   
    @media only screen and (max-width: 600px) {
 #d{
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
                <div class="page-title">Contact List</div>
              </div>
              <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="">Contact </a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Messages</li>
              </ol>
            </div>
          </div>
          <div class="row" id="d">
            <div class="col-md-12 col-sm-12">
              <div class="card-box">
                <div class="card-head">
                  <header>Messages</header>
                  <button id="sdntmenu" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                    <i class="material-icons"></i>
                  </button>
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
                  <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        
                        <th> Action </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                        $sn=1;
                       foreach($show as $key){?>
                      <tr class="odd gradeX">
                        <td><?php echo $sn++;?></td>
                        <td><?=$key->con_name?></td>
                       
                        <td class="left"><?=$key->con_email;?></td>
                        <td class="left"><?=$key->msg_info;?></td>
                        
                        <td>
                         <!--  <a href="" class="tblEditBtn">
                            <i class="fa fa-pencil"></i>
                          </a> -->
                          <a  class="" href="<?=base_url('Delete_Msg');?>?q=<?=$key->con_id;?>" id="dlt" type="button">
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
                        <div class="media-heading-sub">Anaesthetics</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user7.jpg" width="35" height="35" alt="...">
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
                      </div> <img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user6.jpg" width="35" height="35" alt="...">
                      <i class="offline dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Jennifer Maklen</h5>
                        <div class="media-heading-sub">Nurse</div>
                        <div class="media-heading-small">Last seen 01:20 AM</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user8.jpg" width="35" height="35" alt="...">
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
                      </div> <img class="media-object" src="<?=base_url();?>assets/admin_assets/img/user/user9.jpg" width="35" height="35" alt="...">
                      <i class="offline dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Jeff Adam</h5>
                        <div class="media-heading-sub">Compounder</div>
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
  <!-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script> -->

</body>

</html>