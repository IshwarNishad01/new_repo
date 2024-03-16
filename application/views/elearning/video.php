
<?php include('header.php');?>

<div class="container-xxl">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="section-title bg-white text-center text-primary px-3">Videos</h4>
                <h1 class="mb-5">Popular Typing Video Courses</h1>
            </div>

        <section class="all_collection_area container-fluid" style="padding-top: 10px;margin-bottom: 10px;"> 
            <div class="fluid-container">
                <div class="row">
                    <?php
                    foreach($video as $video){
                    ?>
                    <div class="col-12 col-sm-6 col-md-4 overflow-hidden ml-5">
                        <?php echo $video->video?> 
                    </div>
                <?php   }  ?>

                </div>
           </div>
           </section>
        </div>
    </div>

<?php include('footer.php');?>