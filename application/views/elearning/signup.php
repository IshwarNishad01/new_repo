<?php include('header.php'); ?>

<div class="container-xxl">
	<div class="container py-5">
		<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
		</div>
		<div class="container bg-light mt-5">


			<br><br>
			<div class="user-test-body " id="user-body">
				<center>
					<h3>Sign Up Form</h3>
				</center>
				<p class="mt-4">This form is for only students those connected with our coaching.If you are not student of our coaching then fill this registration form. <a class="btn btn-link btn-sm" href="<?= base_url('registration') ?>">Registration Form</a> </p>
				<hr>
				<?php
				if (!empty($this->session->tempdata('success'))) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= $this->session->tempdata('success') ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>

				<?php }	?>
				<form action="registration_user" method="post">
					<div class="row mt-5">
						<div class="col-md-6">
							<div class="form-floating">
								<input type="text" required class="form-control" name="first_name" placeholder="Enter Your First Name">
								<label for="name">Enter Your First Name</label>
							</div>
						</div><br><br><br>
						<div class="col-md-6">
							<div class="form-floating">
								<input type="text" required class="form-control" name="last_name" placeholder="Enter Your Last Name">
								<label for="name">Enter Your Last Name</label>
							</div>
						</div><br><br><br>
						<div class="col-md-6">
							<div class="form-floating">

								<input type="text" required class="form-control" name="email" placeholder="Enter Your Email">
								<label for="email">Enter Your Email</label>
							</div>
						</div><br><br><br>
						<input type="hidden" name="user_type" value="0" id="">
						<div class="col-md-6">
							<div class="form-floating">

								<input type="Password" required class="form-control" name="password" placeholder="Enter Your Password">
								<label for="password">Enter Your Password</label>
							</div>
						</div><br><br><br>
						<div class="col-md-12 mt-3">
							<p>
								If already account<a href="<?= base_url('login') ?>" class="btn btn-link btn-sm">Login Form? </a> 
							</p>
							<button class="btn btn-primary w-100 py-3" type="submit" name="submit">Create Account</button>
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

