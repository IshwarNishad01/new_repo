<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Career - G.D. College</title>


	<?php include'layout/styles.php';?>

</head>
<body class="body-wrapper">

  <div class="main_wrapper">

   <?php include'layout/header.php';?>


    <div class="custom_content custom">
      <div class="container large">
        <div class="row">
          <div class="col-xs-12 col-sm-8 custom_right">
            <div class="single_content_left">
              <h3>Career</h3>

              <?php if(isset($_REQUEST['success'])){?>
                <p style="color: green;">Your resume has been submiited successfully.Our talent acquistion team shall be in touch with you shortly.</p>
              <?php } ?>

              <p>Please fill in the form below for Contacting Us </p>
              <div class="contact_form">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <div class="form-group">
                        <label>Name <span class="error">*</span></label>
                        <input type="text" class="form-control" name="en_name">
                      </div>
                    </div>
                  </div><!--end row-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <div class="form-group">
                        <label>Email <span class="error">*</span></label>
                        <input type="text" class="form-control" name="en_email">
                      </div>
                    </div>
                  </div><!--end row-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <div class="form-group">
                        <label>Mobile Number <span class="error">*</span></label>
                        <input type="number" class="form-control" name="mobno">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <div class="form-group">
                        <label>Upload CV <span class="error">*</span><br>Upload only pdf file.</label>
                 <input type="file" class="form-control" name="file_notice">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-11">
                      <div class="form-group">
                        <label>Message <span class="error">*</span></label>
                        <textarea style="width: 11.25cm;" class="form-control" cols="" rows="5" name="msg"></textarea>
                      </div>
                    </div>
                  </div><!--end row-->
                  <button class="commonBtn" type="submit">send Message</button> 
                </form>
              </div>
            </div><!--end single content left-->
          </div>

          <div class="col-xs-12 col-sm-4 custom_left">
            <div class="sidebar">
              <div class="list_block sidebar_item">
                <h3>Contacts of G.D. Professional College</h3>
                <ul class="contact_info">
                  <li><i class="fa fa-home"></i> High School Chowk , Good Shepherd Road, Kotba, District-Jashpur, Chhattisgarh</li>
                  <li><i class="fa fa-envelope"></i> <a href="mailto:gdcollege39@gmail.com">gdcollege39@gmail.com</a></li>
                  <li><i class="fa fa-phone"></i>8770742323, 8839327942 ,6268090671,7747909213</li>

                  <li><i class="fa fa-whatsapp"></i>9343503022</li>
                  <!-- <li><i class="fa fa-globe"></i> <a href="#">http://www.example.com</a></li> -->
                </ul>
              </div>
              <div class="list_block">
                <h3>Open Hours</h3>
                <ul class="contact_info">
                  <li><strong>Monday-Friday:</strong> 10am to 5pm</li>
                  <li><strong>Saturday:</strong> 10am to 3pm</li>
                  <li><strong>Sunday:</strong> Closed</li>
                </ul>
              </div><!--end sidebar item-->
              <!-- <div class="list_block">
                <div class="newsletter">
                  <h3>Newsletter</h3>
                  <form method="post" action="#">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="exampleInputEmail1" class="form-control">
                    </div>
                    <button class="btn btn-default btn-block commonBtn" type="submit">Subscribe</button>
                  </form>
                </div>
              </div> -->
            </div><!--end sidebar-->
          </div>
        </div><!--end row-->
      </div>
    </div><!--end custom content-->

    <div class="contact_map">

     <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6996633.738164338!2d-104.57070294113542!3d31.10069597439005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C+USA!5e0!3m2!1sen!2sbd!4v1460121293489" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe> -->
    </div><!--end contact map-->

<?php include'layout/footer.php';?>


</body>
</html>

