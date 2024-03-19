<?php include('header.php'); ?>

<div class="container-xxl">
	<div class="container py-5">
		<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
		</div>
		<div class="container bg-light mt-5">

			<div class="row">
				<div class="col-sm-6">
					<div class="card">
						<div class="user-form-body"></div>
						<div class="card-body">
							<!-- <center><a href="#" class="btn btn-secondary"></a></center> -->
							<button class="btn btn-secondary" onclick="showForm(1)">
								User Test Form
							</button>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<!-- <center><a href="#" class="btn btn-secondary">Registration Form</a></center> -->
							<button class="btn btn-secondary" onclick="showForm(2)">
								Registration Form
							</button>
						</div>
					</div>
				</div>
			</div>

			<br><br>
			<div class="user-test-body " id="user-body">
				<center>
					<h3>User Test Form</h3>
				</center>
				<hr>
				<form action="registration_user" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-floating">
								<input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name">
								<label for="name">Enter Your First Name</label>
							</div>
						</div><br><br><br>
						<div class="col-md-6">
							<div class="form-floating">
								<input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name">
								<label for="name">Enter Your Last Name</label>
							</div>
						</div><br><br><br>
						<div class="col-md-6">
							<div class="form-floating">
								<input type="text" class="form-control" name="email" placeholder="Enter Your Email">
								<label for="email">Enter Your Email</label>
							</div>
						</div><br><br><br>
						<div class="col-md-6">
							<div class="form-floating">
								<input type="Password" class="form-control" name="password" placeholder="Enter Your Password">
								<label for="password">Enter Your Password</label>
							</div>
						</div><br><br><br>
						<div class="col-md-12 mt-3">
							<button class="btn btn-primary w-100 py-3" type="submit" name="submit">Create Account</button>
						</div>
					</div>

				</form>
			</div>
		</div>
		<br><br>

		<div class="other-user-body" id="other-user-body">
			<center>
				<h3>Registration Form</h3>
			</center>
			<hr>

			<form action="registration_user2" method="post">
				<div class="row g-3">
					<div class="col-md-6">
						<div class="form-floating">
							<input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name">
							<label for="first name">Your First Name</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-floating">
							<input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name">
							<label for="last name">Your Last Name</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="date" class="form-control" name="dob" placeholder="Enter Your Date Of Birth">
							<label for="dob">Date Of Birth</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="text" class="form-control" name="group" placeholder="Enter Your Blood Group">
							<label for="group">Blood Group</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="number" class="form-control" name="identity" placeholder="Enter Your Adhar Number">
							<label for="identity">Adhar Number</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="number" class="form-control" name="yournumber" placeholder="Enter Your Number/parent Number">
							<label for="number">Your Number/parent Number</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="email" class="form-control" name="email" placeholder="Enter Your Email Id">
							<label for="email">Your Email Id</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="password" class="form-control" name="password" placeholder="Your Password">
							<label for="password">Your Password</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="text" class="form-control" name="qualification" placeholder="Enter Your Qualification">
							<label for="qualification">Your Qualification</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-floating">
							<input type="text" class="form-control" name="course" placeholder="Course Name">
							<label for="course">Course Name</label>
						</div>
					</div>

					<div class="col-12">
						<div class="form-floating">
							<textarea class="form-control" placeholder="Enter Your Temparary Address" name="temp_address" style="height: 100px"></textarea>
							<label for="address">Temprary Address</label>
						</div>
					</div>
					<div class="col-12">
						<div class="form-floating">
							<textarea class="form-control" placeholder="Enter Your Permanent Address" name="par_address" style="height: 100px"></textarea>
							<label for="address">Permanent Address</label>
						</div>
					</div>

					<div class="col-12">
						<button class="btn btn-primary w-100 py-3" type="submit">Sign Up</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>
</div>

<?php include('footer.php'); ?>
<script>

	const otherUserFormBody = document.getElementById('other-user-body');
	const userFormBody = document.getElementById('user-body');
	otherUserFormBody.style.display = 'none';
	function showForm(id) {

		if (id == 2) {
			otherUserFormBody.style.display = 'block';
			userFormBody.style.display = 'none';
		}
		if (id == 1) {
			userFormBody.style.display = 'block';
			otherUserFormBody.style.display = 'none';
		}

	}
</script>
