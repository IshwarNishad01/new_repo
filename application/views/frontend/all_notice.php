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

          <div class="col-xs-12 courses_right">
            <div class="courses_right_inner">

            <!--  <div class="search_section">
                <form action="#" method="post">
                  <ul>
                    <li>
                      <input type="text" name="course-name" class="form-control" placeholder="Course Name">
                    </li>
                    <li>
                      <div class="selectBox clearfix">
                        <select name="guiest_id2" id="guiest_id2">
                          <option value="0">Level</option>
                          <option value="1">Level_1</option>
                          <option value="2">Level_2</option>
                          <option value="3">Level_3</option>
                        </select>
                      </div> selectBox -->
                    <!-- </li>
                    <li class="search_button">
                      <button class="btn btn-default btn-block commonBtn" type="submit">Search</button>
                    </li>
                  </ul>
                </form> -->
              <!-- </div> --><!--End search_section-->

              <div class="courses">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>S.No.</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>View</th>
                    
                    

                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $a=1;

                    foreach($show as $key){?>
                   
                  <tr>
                    <td>
                         <?php echo $a++;?>
                          </td>
                        <td>
                          <?=$key->notice_hlt;?>
                        </td>
                        <td>
                         <?=$key->notice_date;?>
                        </td>
                        <td><a href="<?=base_url();?>assets/upload_img/notice_file/<?=$key->notice_file?>">download</a></td>
                    
                    
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


</body>
</html>

