<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>G D College</title>

	<?php include 'layout/styles.php'; ?>
</head>
<body class="body-wrapper">

  <div class="main_wrapper">

    <?php include 'layout/header.php'; ?>


    <div class="courses_section courses-fullwidth">
      <div class="container">
        <div class="row">

         <!--  <div class="col-xs-12 col-sm-12 "> -->
            <div class="courses_right_inner">
              <center><h1>Results</h1></center><br>

              <div class="">
                <table class="table table-bordered table-striped ">
                 <!--  <thead> -->
                    <tr class="" style="color: white;">
                   <!--  <th>S.No.</th> -->
                    <th>Date</th>
                    <th >Description</th>
                    
                    <th>View</th>
                    
                    

                    </tr>
                 <!--  </thead>
                  <tbody> -->
                    <?php 
                    $a=1;

                    foreach($show as $key){?>
                   
                  <tr>
                    <!-- <td>
                         <?php echo $a++;?>
                          </td> -->
                          <td>
                            <?php
                            $data=$key->date;
                         echo  date("Y-m-d",strtotime($data));
                            ?>
                         
                        </td>
                        <td>
                          <?=$key->title;?>
                        </td>
                        
                        <td><a href="<?=base_url();?><?=$key->file_location;?>" target="_blank" class="btn btn-success">download</a></td>
                    
                    
                  </tr>
                 
                <?php } ?>

                  
                    
                 <!--  </tbody> -->
                  </table>
              </div><!--End courses-->

            

            </div><!-- end courses_right_inner -->
          <!-- </div> --><!-- end courses_right -->

        </div><!-- end row -->
      </div><!-- end container -->
    </div><!--end post section-->

    <?php include 'layout/footer.php';?>

</body>
</html>

