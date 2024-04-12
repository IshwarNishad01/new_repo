
<?php include('header.php');?>

<div class="container-xxl mt-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Achiever</h6>
                <h1 class="mb-5">Achiever</h1>
            </div>

        <section class="all_collection_area container-fluid" style="padding-top: 10px;margin-bottom: 10px;"> 
            <div class="fluid-container">
                <div class="row g-4">
                    <?php
                        foreach($achievers as $key)
                        {
                        
                        ?>
                        
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?=base_url();?>assets/admin_assets/uploads/<?php echo $key->image ?>" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5>Name: <?= $key->name ?></h5>
                            <p>Batch: <?php echo $key->batch ?></p>
                            <p>Designation: <?php echo $key->designation ?></p>	
                        </div>
                    </div>
                </div>
		
			<?php   }  ?>
			</div>
		</div>       
        </div>
           </section>
        </div>
    </div>

<?php include('footer.php');?>
