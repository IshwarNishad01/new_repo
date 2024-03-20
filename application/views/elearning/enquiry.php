<?php include('header.php'); ?>


<div class="container-xxl mt-5">
	<div class="container py-5">
		<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
			<h4 class="section-title bg-white text-center text-primary px-3">Enquiry Form</h4>
		</div>


		<div class="container bg-light mt-5">
			<?php
			if (!empty($this->session->tempdata('show_success'))) {
			?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<?= $this->session->tempdata('show_success') ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php }
			?>
			<form action="" method="post">
				<div class="row g-3">
					<div class="col-md-6">
						<div class="form-floating">
							<input type="text" class="form-control" name="name" placeholder="Your Name">
							<label for="name">Your Name</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-floating">
							<input type="email" class="form-control" name="email" placeholder="Your Email">
							<label for="email">Your Email</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-floating">
							<input type="number" class="form-control" name="number" placeholder="Your Number">
							<label for="number">Your Number</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-floating">
							<input type="text" class="form-control" name="subject" placeholder="Subject Name">
							<label for="subject">Subject Name</label>
						</div>
					</div>
					<div class="col-12">
						<div class="form-floating">
							<textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 150px"></textarea>
							<label for="message">Message</label>
						</div>
					</div>
					<div class="col-12">
						<button class="btn btn-primary w-100 py-3" type="submit" name="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>
