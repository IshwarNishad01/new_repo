<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Staff - G.D. College</title>

  <?php include'layout/styles.php';?>
  

</head>
<body class="body-wrapper">

  <div class="main_wrapper">

   <?php include'layout/header.php';?>


		<div class="custom_content clearfix">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="custom_title">
							<center><h1>OUR LEADERS</h1></center>
						</div><!--end custom_title-->
					</div><!--end col-xs-12-->
				</div><!--end row-->

				<div class="row">
					
					 <br>
					 <br>
					<!-- <div class="col-sm-3"></div> -->
					<div class="col-sm-6"><img src="../assets/img/stuff/member/six.jpg" alt="">
						<br>
							<center><h3>Mrs. Gangotri Yadaw</h3>
									<h5>MD</h5></center>

					</div>
					<div class="col-sm-6"><img src="../assets/img/stuff/member/five.jpg" alt="">
						<br>
									<!-- <center><h3>Mr. Duryodhan Yadaw</h3>
									<h5>Director</h5></center> -->

					</div>
					
				</div>
				<br>
				<div class="row">
					<div class="col-xs-12">
           <!-- <h2>Director's Message</h2>
						<ul class="list">
							<li>
								<a href="#">
									<div class="thumb">
										<img src="../assets/img/stuff/member/six.jpg" alt="">
									</div>
									<h3>Mrs. Gangotri Yadaw</h3>
									<h5>Director</h5>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="thumb">
										<img src="../assets/img/stuff/member/five.jpg" alt="">
									</div>
									<h3>Mr. Duryodhan Yadaw</h3>
									<h5>Director</h5>
								</a>
							</li>
            </ul> -->
            <br>
            <div class="custom_title">
					  <h2>Director's Message</h2></div>
					  <br>
            <div class="col-xs-12">
            	<p style="text-align: justify;">The centre head along with the faculty members welcomes all aspirants of higher learning to the G.D. PROFESSIONAL COLLEGE campus.</p>
            	<p style="text-align: justify;">First of all I want to discuss on the matter of unemployment, because it is the most common problem in today's society. Wrong selection of institute, wrong teaching pattern as well as the inappropriate certification causes this. With this desk, I want to aware the students to first of all, check the concern of institute along with it's teaching property.</p>
            	<p style="text-align: justify;">The wrong selection of courses is also a big problem in front of students. Many of the students do not know that what type of course would let him/her a bright future. Although there are so many short-term/long-term courses available in the market that might be beneficial for them but wrong counseling let them fall towards their precious time, money and after all their future.</p>
            	<p style="text-align: justify;">At, G.D. PROFESSIONAL COLLEGE I feel very proud to say that the relationship between faculty and students is not of conventional type, but representing a professional environment, the relationship is a bit contemporary.</p>
            	<p style="text-align: justify;">G.D. PROFESSIONAL COLLEGE is the only institution which is committed to give a strong atmosphere of education, a counselor to suggest you 'what to do?' , well qualified faculties who are always ready to remedy the conceptual problems and well equipped lab with new generation technologies of computing. Thanks all of you.</p>
            </div>
          </div>  
          
          <div class="col-xs-12">
						<div class="container">
				      <div class="row">
					     <div class="col-xs-12">
						    <div class="custom_title">
							   <center><h1>OUR TEACHERS</h1></center>
						    </div><!--end custom_title-->
					    </div><!--end col-xs-12-->
				    </div>
					<!-- 	<div class="row">
					    
					 <br>
					 <br>
					
					<div class="col-sm-4">
						<img src="../assets/img/stuff/member/second.jpg" alt="" class="img-fuild">
						<br>
							<center><h3>Mr. Prakash ware</h3>
									<h5>Assistant Manager & Assi.Teacher</h5></center>

					</div>
					<div class="col-sm-4">
						<center><img src="../assets/img/stuff/member/third.jpg" alt="">
						<br>
									<h3>Govind kumar jaypuriya</h3>
									<h5>Assistant Teacher</h5></center>

					</div>
					<div class="col-sm-4">
						<center><img src="../assets/img/stuff/member/fourth.jpg" alt=""style="height:7.1cm; width: 7cm;">
						<br>
									<h3>Samaru Ram Nag</h3>
									<h5>Assistant Teacher</h5></center>

					</div>
					
				</div> -->
				<div class="row">
					    
					 <br>
					 <br>
					<?php
					$teacher=$this->db->get("staff")->result();
					foreach ($teacher as $teacher) {
						
					?>
					<div class="col-sm-12 col-md-4 col-xs-12">
						<img src="<?=base_url();?><?=$teacher->file_location;?>" alt="" class="img-fuild" id="staff_img">
						<br>
							<center><h3><?=$teacher->name;?></h3>
									<h5><?=$teacher->designation;?></h5></center>

					</div>
					<?php } ?>
				</div>
				<br>
				<div class="custom_title">
					      <h2>Teacher's Message</h2>
					    </div>
					    <br>
					    <br>
						<div class="col-xs-12">
							<p>Dear Students,</p>
							<p style="text-align: justify;">Computer Applications is the most flourishing discipline that cultivates new trends in the field of computer science. The Department of Computer Applications is committed towards excellence in teaching and in inculcating a sense of pride and confidence in students. The objective is to empower students with the latest technical knowledge and skills by providing them with the best of teaching faculty, lab facilities and the perfect environment for learning. The department hosts various competitions every year that facilitate logical and software development skills of the students which also promotes job opportunities. The Department’s objective and endeavor is to promote sound technical, professional knowledge and creativity in the field of Artificial Intelligence and Data Science. The team is determined to take the department to greater heights.</p>
						</div>
					</div><!--end col-xs-12-->
				</div><!--end row-->
			</div>
		</div><!--end custom content-->
<br>
<?php include'layout/footer.php';?>


</body>
</html>

