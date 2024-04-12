<?php include('header.php'); ?>

<div class="container-xxl">
	<div class="container py-5">
		<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
		</div>
		<div class="container bg-light mt-5">


			<br><br>
			<div class="user-test-body " id="user-body">
				<center>
					<h3>Registration Form</h3>
					<!-- <p class="mt-4">This form is for only students those connected with our coaching.</p> -->
				</center>
				<hr>
				<?php
				if (!empty($this->session->tempdata('success'))) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= $this->session->tempdata('success') ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

				<?php }	?>
				
				<form action="registration_user2" method="post" enctype="multipart/form-data">
					<div class="row g-3">
						<div class="col-md-6">
							<div class="form-floating">
								<input type="text" required class="form-control" name="first_name" placeholder="Enter Your First Name">
								<label for="first name">Your First Name</label>
							</div>
						</div>
				
					<div class="col-md-6">
						<div class="form-floating">
							<input type="date" required class="form-control" name="dob" placeholder="Enter Your Date Of Birth">
							<label for="dob">Date Of Birth</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="text" required class="form-control" name="qualification" placeholder="Enter Your Qualification">
							<label for="qualification">Your Qualification</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="number" required class="form-control" name="identity" placeholder="Enter Your Adhar Number">
							<label for="identity">Aadhar Number</label>
						</div>
					</div>

					<div class="col-md-6 mt-5">
						<div class="form-check">
							<input class="form-check-input" required type="checkbox" name="check" value="" id="check">
								<label class="form-check-label" for="flexCheckDefault">Are You A Student For Our Steno Coaching Classes</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-check form-check-inline">
							<input class="form-check-input" required type="radio" name="option" id="option" value="option1">
							<label class="form-check-label" for="inlineRadio1">Hindi, English Typing</label>
						</div><br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" required type="radio" name="option" id="option" value="option2">
							<label class="form-check-label" for="inlineRadio2">Hindi Steno</label>
						</div><br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" required type="radio" name="option" id="option" value="option3">
							<label class="form-check-label" for="inlineRadio3">Both Courses</label>
						</div>
					</div>

						<div class="col-6">
							<div class="form-group row">
								<div class="col-md-12">
									<input type="file" required name="image" id="image" class="form-control" required> 
								</div>
							</div>
						</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="number" required class="form-control" name="yournumber" placeholder="Enter Your Number/parent Number">
							<label for="number">Your Number/parent Number</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="email" required class="form-control" name="email" placeholder="Enter Your Email Id">
							<label for="email">Your Email Id</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="password" required class="form-control" name="password" placeholder="Your Password">
							<label for="password">Your Password</label>
						</div>
					</div>

					<input type="hidden" name="user_type" value="1" id="">
					

					<div class="col-12">
						<div class="form-floating">
							<textarea class="form-control" required placeholder="Enter Your Temparary Address" name="temp_address" style="height: 100px"></textarea>
							<label for="address">Temprary Address</label>
						</div>
					</div>
					<div class="col-12">
						<div class="form-floating">
							<textarea class="form-control" required placeholder="Enter Your Permanent Address" name="par_address" style="height: 100px"></textarea>
							<label for="address">Permanent Address</label>
						</div>
					</div>

					<div class="col-12">
							<p>
								If already account<a href="<?= base_url('login') ?>" class="btn btn-link btn-sm">Login Form? </a> 
							</p>
						<button class="btn btn-primary w-100 py-3" type="submit">Sign Up</button>
					</div>
				</div>
			</form>
			</div>
		</div>
		<br><br>

	

	</div>
</div>
</div>

<?php include('footer.php'); ?>

