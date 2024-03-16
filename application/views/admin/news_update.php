
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
						<?php if(isset($_REQUEST['add_event'])){?>
							<p style="color:green;font-size:20px ;"> Successfully Added......</p><?php } ?>
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add News</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Fill News Details</header>
									
									
								</div>
								<?php foreach($show as $key){?>
								<form action="<?=base_url('up');?>" method="POST" enctype="multipart/form-data">
								<div class="card-body row">
									<input type="hidden" value="<?=$key->news_id;?>" name="q">
									<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txttitle" name="event_hlt" value="<?=$key->news_hlt;?>">
											<label class="mdl-textfield__label">News Highlight</label>
										</div>
									</div>
								
									<!-- <div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="date" name="event_date" required>
											<label class="mdl-textfield__label">Event Date</label>
										</div>
									</div> -->
										<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input id="preview_take" type="file"  name="file_notice"><br>
											<img  height="100" width="100" src="<?=base_url();?>assets/upload_img/news_file/<?=$key->news_file;?>" >
										</div>
									</div>
									<!-- <div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="date1">
											<label class="mdl-textfield__label">Holiday End Date</label>
										</div>
									</div> -->
									<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield txt-full-width">
											<textarea class="mdl-textfield__input" rows="" id="text7" name="dtls" value=""><?=$key->news_dtls;?></textarea>
											<label class="mdl-textfield__label" for="text7">News Details</label>
										</div>
									</div>
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Submit</button>
										<button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Cancel</button>
									</div>
									</form>
								<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		<!-- end footer -->
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
	<!-- Common js-->
	<script src="<?=base_url();?>assets/admin_assets/js/app.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/layout.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/material/material.min.js"></script>
	<!-- chart js -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/chart/apex/home-data3.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/sparkline/sparkline-data.js"></script>
	






	<!-- <script src="<?=base_url();?>assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/popper/popper.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/feather/feather.min.js"></script>
	
	<script src="<?=base_url();?>assets/admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	
	<script src="<?=base_url();?>assets/admin_assets/js/app.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/layout.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/theme-color.js"></script>
	
	<script src="<?=base_url();?>assets/admin_assets/plugins/material/material.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/js/pages/date-time/date-time.init.js"></script>
	<!-- dropzone -->
	<script src="<?=base_url();?>assets/admin_assets/plugins/dropzone/dropzone.js"></script>
	<script src="<?=base_url();?>assets/admin_assets/plugins/dropzone/dropzone-call.js"></script> -->
	<!-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('#preview_take').change(function(event){
      var x=URL.createObjectURL(event.target.files[0]);
      $('#preview').attr("src",x);
     $('#preview').css("width", "100px");
$('#preview').css("height", "100px");

    });
  });
</script> -->
	<!-- end js include path -->
</body>

</html>