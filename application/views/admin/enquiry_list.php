
		<!-- start header -->
		<?php include 'header1.php';?>
		<!-- end header -->
	
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php include 'sidebar.php';?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Enquiry List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Enquiry List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card-box card-responcive" >
				
								<div class="card-body ">
									<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4 table-responcive" >
										<thead>
											<tr>
												<th> S.No. </th>
												<th> Name </th>
												<th> Email </th>
												<th> Number </th>
												<th> Subject </th>
												<th> Message </th>
												<th> Date </th>
												<th> Action </th> 
											</tr>
										</thead>
										<tbody>
											<?php 

												$sn=1;
											 foreach($show as $key){
												// print_r($key);
												?>
											<tr class="odd gradeX">
												<td><?php echo $sn++;?></td>
												<td><?=$key->name;?></td>
												<td><?=$key->email?></td>
												<td><?=$key->number?></td>
												<td><?=$key->subject?></td>
												<td><?=$key->message?></td>
											    <td class="left"><?=$key->date?></td>
												<td><a href="delete_enquiry?id=<?=$key->id;?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
					</div>
				</div>
			</div> 
			<!-- end chat sidebar -->
		</div>
		
	</div>
	<!-- start js include path -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/popper/popper.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- data tables -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/table/table_data.js"></script>
	<!-- Common js-->
	<script src="<?=base_url();?>assets/admin_assets/js/app.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/layout.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/material/material.min.js"></script>
	

</body>

</html>