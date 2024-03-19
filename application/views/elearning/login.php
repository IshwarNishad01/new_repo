<?php include('header.php'); ?>

<div class="container-xxl mt-5">
	<div class="container py-5">
		<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
			<h4 class="section-title bg-white text-center text-primary px-3">Login Form</h4>
		</div>

		<center>
			<div class="container mt-5">
				<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
				</div>

	

				<form action="login-check" method="post">
		
					<div class="col-md-6">

					<?php
				if ($this->session->flashdata('error') != "") {
				?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<?= $this->session->flashdata('error')?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
			
			<?php }		?>

						<div class="form-floating">
							<input type="email" class="form-control" name="email" placeholder="Your Email">
							<label for="email">Your Email</label>
						</div>
					</div><br>
					<div class="col-md-6">
						<div class="form-floating">
							<input type="Password" class="form-control" name="password" placeholder="Your Password">
							<label for="password">Your Password</label>
						</div>
					</div><br>
					<div class="col-md-6">
						<button class="btn btn-primary w-100 py-3" type="submit" name="submit">Login</button>
					</div>
			</div>
			</form>
	</div>
	</center>
</div>
</div>

<?php include('footer.php'); ?>
