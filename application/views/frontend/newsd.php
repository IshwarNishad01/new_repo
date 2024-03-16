<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>G.D. College</title>



	<!-- PLUGINS CSS STYLE -->
	<link rel="icon" type="image/png" href="<?= base_url() ?>./assets/img/fevicon.png">
	<link href="<?= base_url() ?>./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/selectbox/select_option1.css">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/flexslider/flexslider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/calender/fullcalendar.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/animate.css">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/plugins/pop-up/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>./assets/plugins/rs-plugin/css/settings.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>./assets/plugins/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- GOOGLE FONT -->
	<link href='<?= base_url() ?>../../css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
	<link href='<?= base_url() ?>../../css-1?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>./assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>./assets/css/default.css" id="option_color">


	<style type="text/css">
		#sl1 {
			height: 14cm;
		}

		#aproove_slide div a img {
			width: 8cm;
			height: 2cm;
		}

		@media only screen and (max-width: 400px) {
			#sl1 {
				height: 7cm;
			}

			#aproove_slide div a img {
				width: 5cm;
				height: 1cm;
			}
		}

		.float {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 40px;
			right: 40px;
			background-color: #25d366;
			color: #FFF;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 2px 2px 3px #999;
			z-index: 100;
		}

		#whatsappicon {
			margin-top: 16px
		}
	</style>



</head>
<body class="body-wrapper">

  <div class="main_wrapper">

  
  <?php include'layout/header.php';?>


		<div class="post_section">
			<div class="container">
        <div class="row clearfix">

				  <div class="col-xs-12 col-sm-8 post_left">

            <div class="upcoming_events event-col">
              <div class="related_post_sec single_post">
                <span class="date-wrapper">
                
                </span>

                <?php foreach($show as $key){?>
                <div class="">
                  <div class="single_post single-event">
                    <h1><?=$key->news_hlt;?></h1>
                    <div class="meta">
                      <span class="place"></span>
                      <span class="event-time"><i class="fa fa-clock-o"></i><?=$key->date;?></span>
                    </div>
                    <div class="post_desc">
                     <img src="<?=base_url();?>assets/upload_img/news_file/<?=$key->news_file?>">
                      <div class="block_quate">
                        <p><?=$key->news_dtls;?></p>
                      </div>
                      <p></p>

                      <p></p>

                      <p></p>
                    </div><!--end post desc-->

                    <!-- <div class="post_bottom">
                      <ul>
                        <li class="like">
                          <a href="#">
                            <img src="img/news/like_icon.png" alt="">
                            <span>12</span>
                          </a>
                        </li>
                        <li class="share">
                          <a href="#">
                            <img src="img/news/share_icon.png" alt="">
                            <span>12</span>
                          </a>
                        </li>
                        <li class="favorite">
                          <a href="#">
                            <img src="img/news/favorite_icon.png" alt="">
                            <span>12</span>
                          </a>
                        </li>
                      </ul>
                    </div> --><!--end post bottom-->
                  </div><!--end single_post-->
                </div>
              <?php } ?>
              </div>
            </div>

            <!-- <div class="comments_section">
                <div class="comment_post">
                  <h3>Comments</h3>
                  <div class="comment_header">
                    <ul>
                      <li class="comment_count">1 comment</li>
                      <li class="comment_favorite_count"><i class="fa fa-star"></i> <span>0</span></li>
                    </ul>
                  </div>
                  <form class="reply" action="#" method="post">
                    <div class="postbox">
                      <div class="avatar">
                        <span class="user">
                        <img alt="Avatar" src="img/news/avatar.png">
                        </span>
                      </div>
                      <div class="comments_field">
                        <input type="text" class="form-control comments" placeholder="Leave a message...">
                      </div>
                    </div>
                    <div id="post_list">
                      <div class="comment_tools">
                        <ul>
                          <li class="sort"><a href="#">Best <i class="fa fa-caret-down"></i></a></li>
                          <li class="community"><a href="#">Community</a></li>
                          <li class="setting"><a href="#"><img src="img/news/setting.png" alt=""> <i class="fa fa-caret-down"></i></a></li>
                          <li class="share"><a href="#">Share <i class="fa fa-share-square-o"></i></a></li>
                        </ul>
                      </div>
                      <div class="post-content" data-role="post-content">
                        <div class="avatar">
                          <span class="user">
                          <img alt="Avatar" src="img/news/avatar.png">
                          </span>
                        </div>
                        <div class="post-body">
                          <div class="post-top">
                            <span class="post-byline">
                              <span class="author publisher-anchor-color"><a href="#">Gavin Hoffman</a></span>
                            </span>
                            <span class="post-meta">
                              <a href="#">5 hours ago</a>
                            </span>
                          </div>
                          <div class="post-body-inner">
                            <div class="post-message">
                              <p>I loving this DISQUS PSD - so easy to edit to see what my design looks like before I install :)</p>
                            </div>
                          </div>
                          <ul class="comment_footer">
                            <li data-role="voting" class="voting">
                              <a href="#">
                                <span class="control left"><i class="fa fa-angle-up"></i></span>
                              </a>
                              <span title="Vote down" data-action="downvote" class="vote-down  count-1" role="button">

                                <span class="control"><i class="fa fa-angle-down"></i></span>
                              </span>
                            </li>
                            <li data-role="reply-link" class="reply">
                              <a data-action="reply" href="#">Reply</a>
                            </li>
                            <li class="share">
                              <a class="toggle"><span class="text">Share <i class="fa fa-angle-right"></i></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="comment_bottom_block">
                    <ul>
                      <li><a href="#"><i class="fa fa-rss"></i> &nbsp; Comment feed</a></li>
                      <li><a href="#"><i class="fa fa-envelope-o"></i> &nbsp; Subscribe via email</a></li>
                    </ul>
                  </div>
                </div>
                <div class="comments_form">
                  <h3>Post A Comment</h3>
                  <form action="#" method="post">
                    <div class="half">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="half right">
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="full">
                      <textarea rows="9" cols="10" class="form-control" placeholder="Write a comment"></textarea>
                    </div>
                    <input type="submit" class="commonBtn" value="Submit">
                  </form>
                </div>
              </div> -->

          </div>

         <!--end post_right-->

				</div><!--row-->
			</div>
		</div><!--end post section-->

		<?php include'layout/footer.php';?>
</div>

	<!-- JQUERY SCRIPTS -->
	<script src="../assets/plugins/jquery/jquery-1.11.1.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/flexslider/jquery.flexslider.js"></script>
	<script src="../assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="../assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="../assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
	<script src="../assets/plugins/pop-up/jquery.magnific-popup.js"></script>
	<script src="../assets/plugins/animation/waypoints.min.js"></script>
	<script src="../assets/plugins/count-up/jquery.counterup.js"></script>
	<script src="../assets/plugins/animation/wow.min.js"></script>
	<script src="../assets/plugins/animation/moment.min.js"></script>
	<script src="../assets/plugins/calender/fullcalendar.min.js"></script>
	<script src="../assets/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="../assets/plugins/timer/jquery.syotimer.js"></script>
	<script src="../assets/plugins/smoothscroll/SmoothScroll.js"></script>
	<script src="../assets/js/custom.js"></script>

	<link href="../assets/options/optionswitch.css" rel="stylesheet">
	<script src="../assets/options/optionswitcher.js"></script>
</body>
</html>

