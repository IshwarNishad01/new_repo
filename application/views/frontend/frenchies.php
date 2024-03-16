<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>G D College</title>

  <!-- PLUGINS CSS STYLE -->
  <link rel="icon" type="image/png" href="<?=base_url();?>assets/img/fevicon.png">
  <link href="<?=base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/selectbox/select_option1.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/flexslider/flexslider.css" type="text/css" media="screen">
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/calender/fullcalendar.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/animate.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/pop-up/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/plugins/owl-carousel/owl.carousel.css" media="screen">

  <!-- GOOGLE FONT -->
  <link href='../../css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
  <link href='../../css-1?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/mystyle.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/default.css" id="option_color">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script href="<?=base_url();?>assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script href="<?=base_url();?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="body-wrapper">

  <div class="main_wrapper">

    <?php include 'layout/header.php'; ?>


    <div class="courses_section courses-fullwidth">
      <div class="container">
        <div class="row">

          <div class="col-xs-12 courses_right">
            <div class="courses_right_inner">
              <center><h1>Frenchies Application</h1></center><br>

              <div class="">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                   <!--  <th>S.No.</th> -->
                    <th>Date</th>
                    <th>Description</th>
                    
                    <th>View</th>
                    
                    

                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $a=1;

                    foreach($show as $key){?>
                   
                  <tr>
                    
                          <td>
                         <?=$key->date;?>
                        </td>
                        <td>
                          <?=$key->title;?>
                        </td>
                        
                        <td><a href="<?=base_url();?><?=$key->file_location;?>" target="_blank" class="btn btn-success">download</a></td>
                    
                    
                  </tr>
                 
                <?php } ?>

                  
                    
                  </tbody>
                  </table>
              </div><!--End courses-->

            

            </div><!-- end courses_right_inner -->
          </div><!-- end courses_right -->

        </div><!-- end row -->
      </div><!-- end container -->
    </div><!--end post section-->

    <?php include 'layout/footer.php';?>

</div>

<!-- JQUERY SCRIPTS -->
<script src="<?=base_url();?>assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="<?=base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/plugins/flexslider/jquery.flexslider.js"></script>
<script src="<?=base_url();?>assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=base_url();?>assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?=base_url();?>assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="<?=base_url();?>assets/plugins/pop-up/jquery.magnific-popup.js"></script>
<script src="<?=base_url();?>assets/plugins/animation/waypoints.min.js"></script>
<script src="<?=base_url();?>assets/plugins/count-up/jquery.counterup.js"></script>
<script src="<?=base_url();?>assets/plugins/animation/wow.min.js"></script>
<script src="<?=base_url();?>assets/plugins/animation/moment.min.js"></script>
<script src="<?=base_url();?>assets/plugins/calender/fullcalendar.min.js"></script>
<script src="<?=base_url();?>assets/plugins/owl-carousel/owl.carousel.js"></script>
<script src="<?=base_url();?>assets/plugins/timer/jquery.syotimer.js"></script>
<script src="<?=base_url();?>assets/plugins/smoothscroll/SmoothScroll.js"></script>
<script src="<?=base_url();?>assets/js/custom.js"></script>

<link href="<?=base_url();?>assets/options/optionswitch.css" rel="stylesheet">
<script src="<?=base_url();?>assets/options/optionswitcher.js"></script>
</body>
</html>

