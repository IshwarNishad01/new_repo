<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>G.D. College</title>

	<?php include 'layout/styles.php'; ?>
</head>
<body class="body-wrapper">

  <div class="main_wrapper">

    <?php include'layout/header.php';?>

 <div class="custom_content custom">
    <div class="container">
      <div class="row">
         <center><h1>Payment</h1></center>
        <div class="col-xs-12 col-sm-2 "></div>
        <div class="col-xs-12 col-sm-4 ">
        
          <div class="single_content_left">
            <!-- <h3>Apply for Admission</h3>
            <p>Use this secure online application or <a href="#">download a PDF application</a>. All applicants are welcome and encouraged to apply. Should you have any questions as you complete the <a href="#">admissions process</a>, please contact our admissions office at (573) 777-9257 or flugumj@cislions.org. A non-refundable application fee of $30 must be submitted with the completed application form.</p>
            <h3>Application From</h3> -->

            <br>

            
              <div class="sidebar">
                <div class="sidebar_item">
                <div class="item_inner program">
                  
                  <img src="<?= base_url() ?>/assets/img/phonepay_new.jpeg">
                </div>
              </div>
              </div>
              
            </div>  
           
          </div>
         <!--  </div> -->
          <div class="col-xs-12 col-sm-6 ">
            <br><br><br>
            <?php if(isset($_REQUEST['add_s'])){?>
              <p style="color:green;font-size:20px ;" class="bg-success"> Successfully Submiting form......</p><?php } ?>
            <h4 class="text-danger">Note :</h4>

            <ul>
              <li>1 . After Payment share payment screenshort on whatsapp number 9343503022.</li><br>
              <li>2 . After payment registration will confirm</li>
              
            </ul>
          </div>
        </div>
      </div><!--end row-->
    </div>
  </div><!--end custom content-->

<?php include'layout/footer.php';?>


</body>
</html>

