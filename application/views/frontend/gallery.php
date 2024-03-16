<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gallery - G.D. College</title>


	<?php include'layout/styles.php';?>

  <style type="text/css">
    #sl1{
      height: 14cm;
    }
    #lili{
    	height: 7cm;
    }
    #imim{
    	height: 7cm;
    	width: 100%;
    }
  </style>

</head>
<body class="body-wrapper">

  <div class="main_wrapper">

   <?php include'layout/header.php';?>


		<div class="custom_content clearfix">
			<div class="container">

				<div class="photo_gallery custom overflow-hidden" >
					<ul class="gallery popup-gallery gallery-3col">
						<?php foreach($show as $key){?>
						<li id="lili">
							<a href="<?=base_url();?>assets/upload_img/gallery/<?=$key->file?>" title="<?=$key->title;?>">
								<img src="<?=base_url();?>assets/upload_img/gallery/<?=$key->file?>" alt="" id="imim">
								<div class="overlay">
									<span class="zoom">
										<i class="fa fa-search"></i>
									</span>
								</div>
							</a>
						</li>
					<?php } ?>
							</ul>
				</div>

			</div>
		</div>

<?php include'layout/footer.php';?>


</body>
</html>

