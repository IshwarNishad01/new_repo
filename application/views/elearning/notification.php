
<?php include('header.php');?>
<br><br>
<!-- Categories Start -->
    <div class="container-xxl category">
        <div class="container">
            <center>
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Typing Categories</h1>
            </center>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 col-md-6 p-3">
                    <div class="bg-white text-center">
                        <h2 class="m-0 p-1">English Typing</h2>
                    </div>
                      <img class="img-responsive w-100" src="assets/fronted_asset/img/english-typing.jpg" alt="">
                       
                     <div class="bg-white text-center">
                        <h2 class="m-0 p-1">Hindi Typing</h2>
                    </div>
                        <img class="img-responsive w-100" src="assets/fronted_asset/img/hindi-typing.jpg" alt="">
                </div>

            <div class="col-lg-6 col-md-6 bg-info">
                <center><h2 style="margin-top: 10px; margin-bottom: 10px; font-weight: bolder;color: white;height:50px;font-size:30px;" class="btn  btn-block">NOTIFICATION</h2></center>
                    <div class="col-md-12">
                        <div class="single_courses_desc">
                            <?php
                            foreach($addnotification as $addnotification) { ?>
                                 <div class="title my-3">
                                <a href="#" class="text-light text-center me-2"><img src="https://sparshpsceducation.com/assets/users/img/giphy.gif" width="50px" height="30px" style="border: 1px; background-color: white;padding: 2px;"> </a>
                                    <?php echo $addnotification->title?> 
                                    </div>
                            <?php }
                                ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Categories Start -->

<?php include('footer.php');?>