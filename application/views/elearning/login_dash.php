
<?php include('header.php');?>
<!-- </?php
echo $this->session->userdata('id');
?> -->
    <div class="container-xxl">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="section-title bg-white text-center text-primary px-3">User dashboard</h4>
            </div>

        <div class="container bg-light mt-5">
            <form action="" method="post" >
                      <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="first_name" placeholder="Your First Name" value="">
                                    <label for="first name">Your First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="last_name" placeholder="Your Last Name" value="<?php $_SESSION['last_name']?>">
                                    <label for="last name">Your Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" value="<?=$_SESSION['email']?>">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password" placeholder="Your Password" value="<?=$_SESSION['password']?>">
                                    <label for="password">Your Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="yournumber" placeholder="Your Number" value="<?=$_SESSION['yournumber']?>">
                                    <label for="number">Your Number</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="parent_number" placeholder="Your Parent Number" value="<?=$_SESSION['parent_number']?>">
                                    <label for="parentnumber">Parent Number</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="dob" placeholder="Date Of Birth" value="<?=$_SESSION['dob']?>">
                                    <label for="dob">Date Of Birth</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="course" placeholder="Course Name" value="<?=$_SESSION['course']?>">
                                    <label for="course">Course Name</label>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Permanent Address" name="address" style="height: 100px" value="<?=$_SESSION['address']?>"></textarea>
                                    <label for="address">Permanent Address</label>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>

    <!-- <table class="table table-borderd table-striped table-hover hidden">
        <tr>
            <th>S.No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Number</th>
            <th>Parent Number</th>
            <th>DOB</th>
            <th>Course Name</th>
            <th>Address</th>
            <th>Date</th>
         </tr>
         <?php $sl=1;
         foreach($stu_info as $stu_info){
            // print_r($stu_info);
            ?>
         <tr>
            <td><?=$sl++;?></td>
            <td><?=$stu_info->first_name;?></td>
            <td><?=$stu_info->last_name;?></td>
            <td><?=$stu_info->email;?></td>
            <td><?=$stu_info->password;?></td>
            <td><?=$stu_info->yournumber;?></td>
            <td><?=$stu_info->parent_number;?></td>
            <td><?=$stu_info->dob;?></td>
            <td><?=$stu_info->course;?></td>
            <td><?=$stu_info->address;?></td>
            <td><?=$stu_info->date;?></td>
         </tr>

        <?php } ?>
        </table> -->
            </div>
        </div>
    </div>

<?php include('footer.php');?>