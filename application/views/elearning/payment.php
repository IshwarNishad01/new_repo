

<!DOCTYPE html>
<html lang="hi">

<head>
	<meta charset="utf-8">
	<title>Gayatri Typing Or Steno Training Center</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?= base_url(); ?>assets/fronted_asset/img/logo.jpg" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="assets/fronted_asset/lib/animate/animate.min.css" rel="stylesheet">
	<link href="assets/fronted_asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="assets/fronted_asset/css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="assets/fronted_asset/css/style.css" rel="stylesheet">
	
	</head>

<body>
			
        <header id="header" class="sirow clrleft fixed-tops header">
            <div class="sirow clrleft info-details">
                <figure class="logo_f">
					<img class="img-fluid" src="assets/fronted_asset/img/g1.jpg" alt="" style="margin-bottom: -14px;">
		
				</figure>   
            </div>
		</header>
    <div class="container-xxl mt-5">
         <div class="container">
                    <?php
						if ($this->session->tempdata('payment_error') != "") {
						?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<?= $this->session->tempdata('payment_error') ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>

						<?php }	?>

						<?php
						if ($this->session->tempdata('show_payment_error') != "") {
						?>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<?= $this->session->tempdata('show_payment_error') ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>

						<?php }	?>
            <center>
                <h4 class="section-title bg-white text-center text-primary px-3">Payment</h4>
               
            </center>
        </div>
        </div>
    </div>

<?php include('footer1.php');?>
