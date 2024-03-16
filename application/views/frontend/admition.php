<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>G.D. College</title>

	<?php include 'layout/styles.php'; ?>

</head>

<body class="body-wrapper">

	<div class="main_wrapper">

		<?php include 'layout/header.php'; ?>

		<?php
		$id = $this->input->get('id');

		if (isset($id)) {
		?>
			<div class="custom_content custom">
				<div class="container">
					<div class="row">

						<div class="col-xs-12 col-sm-8 custom_right">
							<div class="single_content_left">
								<h3>Review Application</h3>
								<table class="table table-bordered">
									<?php
									$q = $this->db->query("
								select * from student_regi where sid='$id'")->result();
									foreach ($q as $key) {
										# code...


									?>
										<tr>
											<td>Student Name</td>
											<td><?= $key->stu_name; ?></td>
										</tr>
										<tr>
											<td>Father Name</td>
											<td><?= $key->father_name; ?></td>
										</tr>
										<tr>
											<td>Mother Name</td>
											<td><?= $key->mother_name; ?></td>
										</tr>
										<tr>
											<td>Gender</td>
											<td><?= $key->gender; ?></td>
										</tr>
										<tr>
											<td>Mobile No.</td>
											<td><?= $key->mobi_nu; ?></td>
										</tr>
										<tr>
											<td>Telephone No.</td>
											<td><?= $key->t_nu; ?></td>
										</tr>
										<tr>
											<td>Email</td>
											<td><?= $key->stu_email; ?></td>
										</tr>
										<tr>
											<td>Address</td>
											<td><?= $key->home_addres; ?>,<?= $key->city; ?>,<?= $key->state; ?></td>
										</tr>
										<tr>
											<td>Pin No.</td>
											<td><?= $key->pin; ?></td>
										</tr>
										<tr>
											<td>Course</td>
											<td><?= $key->adimission_course; ?></td>
										</tr>
										<tr>
											<td>University</td>
											<td><?= $key->university; ?></td>
										</tr>
										<tr>
											<td>D.O.B</td>
											<td><?= $key->dateofbirth; ?></td>
										</tr>
										<tr>
											<td>Subject</td>
											<td><?= $key->pass_sub; ?></td>
										</tr>
										<tr>
											<td>Year of Completing</td>
											<td><?= $key->pass_year; ?></td>
										</tr>
										<tr>
											<td>Percent</td>
											<td><?= $key->pass_per; ?></td>
										</tr>
										<tr>
											<td>Married Status</td>
											<td><?= $key->married_sts; ?></td>
										</tr>
										<tr>
											<td>Adhar No.</td>
											<td><?= $key->adhar; ?></td>
										</tr>
										<tr>
											<td>Religion</td>
											<td><?= $key->religion; ?></td>
										</tr>
										<tr>
											<td>Category</td>
											<td><?= $key->category; ?></td>
										</tr>
										<tr>
											<td>Family Income</td>
											<td><?= $key->family_income; ?></td>
										</tr>
								</table>
							</div>
						</div>

						<div class="col-xs-12 col-sm-4 col-md-4 custom_left">
							<div class="sidebar">
								<div class="sidebar_item admission">
									<div class="item_inner program">
										<button class="btn btn-primary" type="button" onclick="print_form();">take a print</button>
										<a href="payment?add_s" class="btn btn-danger">Go for the payment</a>

									</div>
								</div>
							</div><!--end sidebar-->
						</div>
					</div><!--end row-->
				</div>
			</div><!--end custom content-->



		<?php
									}
								} else {
		?>


		<div class="custom_content custom">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 col-sm-8 custom_right">
						<div class="single_content_left">
							<h3>Apply for Admission</h3>
							<p>Use this secure online application</a>. All applicants are welcome and encouraged to apply. Should you have any questions as you complete the <a href="#">admissions process</a>, please contact our admissions office at 7747909213,8770742323, 8839327942 ,6268090671.</p>

							<form action="#" method="post" class="apply_from">
								<h4>INFORMATION</h4>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Student Name <span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="text" class="form-control" name="sname" required="">
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Father's/Husband's Name</div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="text" class="form-control" name="fname" required="">
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Mother Name <span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="text" class="form-control" name="mname" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Gender <span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<select name="gender" class="option-select" required="">
													<option value="Not Selected">Select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>

												</select>
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Date of Birth <span class="error">*</span></div>
										</div>

										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="date" name="dob" class="form-control" required="">

											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Medium </div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<select name="medium" class="option-select">
													<option selected="selected" value="Not Selected">Select Medium</option>
													<option value="English">English</option>
													<option value="Hindi">Hindi</option>
												</select>
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Category <span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<select name="cast" class="option-select" required="">
													<option selected="selected" value="">Select Category</option>
													<option value="ST">ST</option>
													<option value="SC">SC</option>
													<option value="OBC">OBC</option>
													<option value="General">General</option>
												</select>
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Marital Status </div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<select name="married_status" class="option-select">
													<option selected="selected" value="">Select Status</option>
													<option value="Married">Married</option>
													<option value="Unmarried">Unmarried</option>
												</select>
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Aadhar No.</div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="number" class="form-control" name="adhar">
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Home Address <span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="text" class="form-control" name="home_add">
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">City <span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="text" class="form-control" name="city" required="">
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">State <span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<select name="state" class="option-select" required="">
													<option selected="selected" value="">Select State</option>
													<option value="Andhra Pradesh">Andhra Pradesh</option>
													<option value="Arunachal Pradesh">Arunachal Pradesh</option>
													<option value="Assam">Assam</option>
													<option value="Bihar">Bihar</option>
													<option value="Chhattisgarh">Chhattisgarh</option>
													<option value="Goa">Goa</option>
													<option value="Gujarat">Gujarat</option>
													<option value="Haryana">Haryana</option>
													<option value="Himachal Pradesh">Himachal Pradesh</option>
													<option value="Uttar Pradesh">Uttar Pradesh</option>
													<option value="Odisa">Odisa</option>
													<option value="Rajasthan">Rajasthan</option>
													<option value="Other">Other</option>
												</select>
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Pin Code <span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="Number" class="form-control" name="pin" required="">
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Religion</div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<select name="religion" class="option-select">
													<option selected="selected" value="">Select Religion</option>
													<option value="Hindu">Hindu</option>
													<option value="Muslim">Muslim</option>
													<option value="Christian">Christian</option>
													<option value="Sikh">Sikh</option>
												</select>
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Mobile No.<span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="Number" class="form-control" name="mno" required="">
											</div>
										</div>
									</div>
								</div><!--end form group-->
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Telephone No.</div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="Number" class="form-control" name="tno">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Email ID<span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="email" class="form-control" name="ename" required="">
											</div>
										</div>
									</div>
								</div>
								<h4>Select Course</h4>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Admission Course<span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<select name="selectcourse" class="option-select" required>
													<option selected="selected" value="">Select any</option>
													<option value="DCA">DCA</option>
													<option value="PGDCA">PGDCA</option>
													<option value="MCA">MCA</option>
													<option value="BCA">BCA</option>
													<option value="DCPA">DCPA</option>
													<option value="PGDYN">PGDYN</option>
													<option value="PGDRD">PGDRD</option>
													<option value="B.LIB">B.LIB</option>
													<option value="ADCHA">ADCHA
													</option>
													<option value="CCA">CCA</option>
													<option value="DEO">DEO</option>
													<option value="Others">Others</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<h4>Select University</h4>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Admission University<span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<select name="selectuniversity" class="option-select" required>
													<option selected="selected" value="">Select any</option>
													<option value="MATS university">MATS university</option>
													<option value="KALINGA university">KALINGA university</option>
													<option value="ISBM unversity">ISBM unversity</option>
													<option value="CV RAMAN university">CV RAMAN university</option>

													<option value="Others">Others</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<h4>Relavant Qualification</h4>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Main Course</div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="text" class="form-control" name="sub">
											</div>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Year of Passing</div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="Number" class="form-control" name="pyear">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">% of marks</div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="Number" class="form-control" name="per">
											</div>
										</div>
									</div>
								</div>
								<h4>General Information</h4>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">If a person with disability(nature of disability)</div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<select name="healthstate" class="option-select">
													<option selected="selected" value="">Select any</option>
													<option value="Speech & Hearing Impainment">Speech & Hearing Impainment</option>
													<option value="Locomotor Implainment">Locomotor Implainment</option>
													<option value="Visual Implainment">Visual Implainment</option>
													<option value="Low Vision">Low Vision</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="label">Family Income<span class="error">*</span></div>
										</div>
										<div class="col-xs-12 col-sm-8">
											<div class="text-field">
												<input type="Number" class="form-control" name="income">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">

										<div class="col-md-12 col-xs-12 col-sm-12">
											<br><br>
											<a href="payment"><button class="btn form-control" style="background-color: #16D5B8;" type="submit">Submit</button></a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4 custom_left">
						<div class="sidebar">
							<div class="sidebar_item admission">
								<div class="item_inner program">
									<ul>
										<li><a href="about">About G.D. College</a></li>
										<li><a href="infras">Campus Life</a></li>
										<li><a href="gallery">Gallery</a></li>
										<!-- <li><a href="course-fullwidth.html">Courses</a></li> -->
										<li class="active"><a href="">Apply Now</a></li>

									</ul>
								</div>
							</div>
						</div><!--end sidebar-->
					</div>
				</div><!--end row-->
			</div>
		</div><!--end custom content-->
	<?php } ?>

	<?php include 'layout/footer.php'; ?>



	<!-- JQUERY SCRIPTS -->
	<script type="text/javascript">
		function print_form() {
			document.getElementById('for_print').style.cssText = " visibility: hidden;";
			document.getElementById('for_print1').style.cssText = " visibility: hidden;";

			print();

			document.getElementById('for_print').style.cssText = " visibility: visible;";
			document.getElementById('for_print1').style.cssText = " visibility: visible;";

		}
	</script>

</body>

</html>
