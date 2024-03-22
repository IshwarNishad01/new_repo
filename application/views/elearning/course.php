<?php include('header.php'); ?>
<br><br>
<!-- Categories Start -->
<div class="container-xxl category">
	<div class="container">
		<center>
			<h4 class="section-title bg-white text-center text-primary px-3">Categories</h4>
			<h1 class="mb-5">Typing Categories</h1>
		</center>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 p-3">
				<div class="bg-white text-center">
					<h2 class="m-0 p-1">English Typing</h2>
				</div>
				<img class="img-responsive w-100" src="assets/fronted_asset/img/english-typing.jpg" alt="">

				<div class="bg-white text-center mt-3">
					<h2 class="m-0 p-1">Hindi Typing</h2>
				</div>
				<img class="img-responsive w-100" src="assets/fronted_asset/img/hindi-typing.jpg" alt="">
			</div>

			<div class="col-lg-6 col-md-6 bg-info">
				<center>
					<h2 style="margin-top: 10px; margin-bottom: 10px; font-weight: bolder;color: white;height:50px;font-size:30px;" class="btn  btn-block">NOTIFICATION</h2>
				</center>
				<div class="col-md-12">
					<div class="single_courses_desc">
						<?php
						foreach ($addnotification as $addnotification) { ?>
							<div class="title my-3">
								<a href="#" class="text-light text-center me-2"><img src="https://sparshpsceducation.com/assets/users/img/giphy.gif" width="50px" height="30px" style="border: 1px; background-color: white;padding: 2px;"> </a>
								<?php echo $addnotification->title ?>
							</div>
						<?php }
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- Categories Start -->

<!-- Courses Start -->

<div class="container-xxl mt-5">
	<div class="container py-5">
		<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
			<h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
			<h1 class="mb-5">Popular Typing Courses</h1>
		</div>

		<section class="all_collection_area container-fluid" style="padding-top: 10px;margin-bottom: 10px;">
			<div class="fluid-container">
				<div class="row">

					<?php
					foreach ($video as $video) {
					?>
						<div class="col-12 col-md-4 overflow-hidden">
							<?php echo $video->video ?>
						</div>
					<?php   }  ?>

				</div>
			</div>
		</section>

	</div>
</div>

<!-- courses end -->


<!-- Team Start -->
<div class="container-xxl py-5 mt-5">
	<div class="container">
		<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
			<h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
			<h1 class="mb-5">Expert Instructors</h1>
		</div>
		<div class="row g-4">
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
				<div class="team-item bg-light">
					<div class="overflow-hidden">
						<img class="img-fluid" src="assets/fronted_asset/img/team-1.jpg" alt="">
					</div>
					<div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
						<div class="bg-light d-flex justify-content-center pt-2 px-1">
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
						</div>
					</div>
					<div class="text-center p-4">
						<h5 class="mb-0">Instructor Name</h5>
						<small>Designation</small>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
				<div class="team-item bg-light">
					<div class="overflow-hidden">
						<img class="img-fluid" src="assets/fronted_asset/img/team-2.jpg" alt="">
					</div>
					<div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
						<div class="bg-light d-flex justify-content-center pt-2 px-1">
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
						</div>
					</div>
					<div class="text-center p-4">
						<h5 class="mb-0">Instructor Name</h5>
						<small>Designation</small>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="team-item bg-light">
					<div class="overflow-hidden">
						<img class="img-fluid" src="assets/fronted_asset/img/team-3.jpg" alt="">
					</div>
					<div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
						<div class="bg-light d-flex justify-content-center pt-2 px-1">
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
						</div>
					</div>
					<div class="text-center p-4">
						<h5 class="mb-0">Instructor Name</h5>
						<small>Designation</small>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
				<div class="team-item bg-light">
					<div class="overflow-hidden">
						<img class="img-fluid" src="assets/fronted_asset/img/team-4.jpg" alt="">
					</div>
					<div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
						<div class="bg-light d-flex justify-content-center pt-2 px-1">
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
							<a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
						</div>
					</div>
					<div class="text-center p-4">
						<h5 class="mb-0">Instructor Name</h5>
						<small>Designation</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Team End -->





<?php include('footer.php'); ?>
