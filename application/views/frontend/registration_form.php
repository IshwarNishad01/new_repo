<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration form</title>

  <link rel="icon" type="image/png" href="assets/img/fevicon.png">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/plugins/selectbox/select_option1.css">
  <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css" type="text/css" media="screen">
  <link rel="stylesheet" href="assets/plugins/calender/fullcalendar.min.css">
  <link rel="stylesheet" href="assets/plugins/animate.css">
  <link rel="stylesheet" href="assets/plugins/pop-up/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.carousel.css" media="screen">

  <!-- GOOGLE FONT -->
  <link href='css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
  <link href='css-1?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/default.css" id="option_color">

</head>

<body class="body-wrapper">
    <div class="main_wrapper">

    <?php include'layout/header.php';?>
    <br>
        <div class="container bg-success">
            <form action="" method="post" >
              <br>
                <center><h1>Student Registration Form</h1></center>
                <hr>
                <?php if(isset($_REQUEST['success'])){?>
                    <center>
              <p style="color:green;font-size:20px ;"> Registration Successfully Done......</p>
              <p style="color:blue;font-size:20px ;"> Your Registration No. is  <?=$_REQUEST['regino'];?></p>
              </center>
            <?php } ?>
              <?php if(isset($_REQUEST['error'])){?>
              <p style="color:red;font-size:20px ;"> Registration Unsuccessful!!Please try again......</p>
              <hr>
            <?php } ?>
                <!-- <table class="table table-borderd table-striped table-hover"> -->
                    <div class="row">
                        <div class="col-sm-6">
                        <label><h5>First Name:-</h5></label>
                            <input type="text" name="first_name" required="" placeholder="Enter your Firstname" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label><h5>Last Name:-</h5></label>
                        <input type="text" name="last_name" required="" placeholder="Enter your Lastname" class="form-control">
                    </div>
                    
                  <div class="col-sm-6">
                        <label><h5>Date Of Birth:-</h5></label>
                        <input type="date" name="student_dob" required="" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label><h5>E-mail:-</h5></label>
                        <input type="text" name="student_email" required="" placeholder="Enter your E-Mail" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label><h5>Parents No.:-</h5></label>
                        <input type="number" name="student_parents" required="" placeholder="(+91)" class="form-control">
                        </div>
                    <div class="col-sm-6">
                        <label><h5>Student Number:-</h5></label>
                        <input type="number" name="student_num" required="" placeholder="(+91)" class="form-control">
                        </div>
                     <div class="col-sm-6">
                        <label><h5>Parmanent Address:-</h5></label>
                        <input type="text" name="student_address" required="" placeholder="Enter your Permanent Address" class="form-control">
                       </div>
                     <!-- <div class="col-sm-6">
                        <label><h5>College/school/company:-</h5></label>
                        <input type="text" name="student_college" required="" placeholder="Enter college/school/company name" class="form-control">
                        </div> -->
                    <div class="col-sm-6">
                        <label><h5>Password:-</h5></label>
                        <input type="text" name="student_pwd" required="" placeholder="Enter Password" class="form-control">
                         </div>    
                    <div class="col-sm-6">
                        <label><h5>Course:-</h5></label>
                        <select class="form-control" name="course_name" placeholder="Enter your Course Name" >
                        <?php 
                        $show = $this->db->get("course")->result();
                         foreach($show as $key){?>
                            <option value="<?=$key->course_id?>"><?=$key->course_name?></option>
                            <?php } ?>
                         </select>
                   
                    </div>
                     <div class="col-sm-6"></div><br><br>
</div>
                    <!-- <div class="row"> -->
                    <!-- <div class="col-12"> -->
                        <center><button class="btn btn-info form-control" style="margin-top:24px;">SUBMIT</button></center>
                  <!-- </div> --><br>

                  
                  </div>
               
        </form>
<br><br>
   
</div> 
<br>  
<?php include'layout/footer.php';?>

    
<script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/flexslider/jquery.flexslider.js"></script>
<script src="assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="assets/plugins/pop-up/jquery.magnific-popup.js"></script>
<script src="assets/plugins/animation/waypoints.min.js"></script>
<script src="assets/plugins/count-up/jquery.counterup.js"></script>
<script src="assets/plugins/animation/wow.min.js"></script>
<script src="assets/plugins/animation/moment.min.js"></script>
<script src="assets/plugins/calender/fullcalendar.min.js"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
<script src="assets/plugins/timer/jquery.syotimer.js"></script>
<script src="assets/plugins/smoothscroll/SmoothScroll.js"></script>
<script src="assets/js/custom.js"></script>

<link href="assets/options/optionswitch.css" rel="stylesheet">
<script src="assets/options/optionswitcher.js"></script>

</body>

</html>