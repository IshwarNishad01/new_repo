
<?php include('header.php');?>
<br><br>
    <div class="container-xxl">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="section-title bg-white text-center text-primary px-3">Our Gallery</h4>
                <!-- <h1 class="mb-5">OUR GALLERY<hr></h1> -->
            </div>
              
                    <h4 class="text-white mb-3">Gallery</h4>
                        <div class="row">
                            <?php
                            foreach($photo as $key){
                            ?>
                            <div class="col-12 col-sm-6 col-md-4 overflow-hidden ml-5">
                                <img src="<?=base_url();?>assets/admin_assets/uploads/<?php echo $key->photo ?>" alt="" style="height:100px; width:100px;">
                            </div>
                            <?php   }  ?>    
                    </div>
                </div>
            </div>
        </div>

<?php include('footer.php');?>
