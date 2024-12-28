<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

	<meta charset="utf-8">
	<title>Objective</title>
	<link rel="icon" type="img/x-icon" href="img/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121" />
	<meta name="msapplication-navbutton-color" content="#212121" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/animsition.min.css" />
	<link rel="stylesheet" href="css/unicons.css" />
	<link rel="stylesheet" href="css/lighbox.min.css" />
	<link rel="stylesheet" href="css/tooltip.min.css" />
	<link rel="stylesheet" href="css/swiper.min.css" />
	<link rel="stylesheet" href="css/style.css" />

	<style>
		.white {
			background-color: #fff !important;
			color: #000 !important;
		}

		.white a {
			color: #000 !important;
		}

		/* new css */
		.dsp {
			display: none;
		}

		.landing-shadow-4 {
			box-shadow: 0px 20px 50px -5px rgba(149, 164, 175, 0.4);
			/* overflow: auto;
			max-height: 315px; */
		}

		.tbl {
			border: 1px solid #ddd;
			margin-top: 20px;
			margin: 3%;
			color: #000;
		}

		.tbl-h a {
			font-size: 18px;
			color: #000;
		}

		.pdf {
			border-right: 1px solid #000;
			padding: 0 3px;

		}

		.pdf img {
			width: 20px;
		}

		.dc {
			display: flex;
			gap: 1%;
			font-size: 12px;
		}

		.lg {
			border-right: 1px solid #000;
			padding: 0 3px;
		}

		.dt {
			padding: 0 3px;
		}
		li{
			color:#000;
		}
		@media (max-device-width: 800px) and (min-device-width: 315px) {
			.padding-top-mob-nav{
                padding-top: 120px;
            }
			.display-8{
				font-size: 22px;
			}
			.para-div{
				text-align: justify;
			}
			.tbl-h a{
				font-size: 16px;
			}
			.pdf{
				width: 35%;
			}
            .screen{
                margin: 0;
            }
        }
	</style>


</head>

<body>

	<div class="animsition">

		<!-- Navigation
		================================================== -->

		<?php include "includes/header.php"; ?>

		<div class="section over-hide padding-top-120 padding-top-mob-nav">
			<div class="top-header-parallax-section corporate-hero-back-img-1 section-background-about parallax-hero-1200">
			</div>
			<div class="background-dark-over-hotel"></div>
			<div class="section-1400 z-bigger">
				<div class="container-fluid padding-top-bottom-60">
					<div class="row">
						<div class="col-lg">
							<h2 class="display-8 mb-3 color-white">
								
TERMS & CONDITIONS
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="section over-hide">
			<div class="section-1400">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-10 col-xl-12">

							<div class="para-div" style="margin:0 3%">
								<p class="lead mb-2">
								</p>
								<p style="color: #000;">This website has been designed, developed and maintained by Omni-Net Technologies Pvt. Ltd. on behalf of UPDESCO & hosted at Uttar Pradesh State Data Centre, Lucknow. <br>

Though all efforts have been made to ensure the accuracy of the content on this website, the same should not be construed as a statement of law or used for any legal purposes. In case of any ambiguity or doubts, users are advised to verify/check with the Department(s) and/or other source(s), and to obtain appropriate professional advice. <br>

Under no circumstances will BUNDELKHAND INDUSTRIAL DEVELOPMENT AUTHORITY/UPDESCO/Service Provider be liable for any expense, loss or damage including, without limitation, indirect or consequential loss or damage, or any expense, loss or damage whatsoever arising from use, or loss of use, of data, arising out of or in connection with the use of this website. These terms and conditions shall be governed by and construed in accordance with the Indian Laws. Any dispute arising under these terms and conditions shall be subject to the jurisdiction of the courts of India. <br>

All of the content and information brought to you by BUNDELKHAND INDUSTRIAL DEVELOPMENT AUTHORITY, Government of Uttar Pradesh. <br>

Please refer following policies related Privacy, Copyright and Hyperlinking of this website. If you need any further information then please feel free to contact us.</p>
<ul>
	<li><a href="privacy-policy.php">Privacy Policy</a>
</li>
	<li><a href="copyright.php">Copyright Policy</a>
</li>
	<li><a href="hyperlinking.php">Hyperlinking Policy</a></li>
</ul>
							</div>
                            
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include "includes/important-slider.php"; ?>

		<?php include "includes/footer.php"; ?>



		<div class="progress-wrap">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
			</svg>
		</div>

	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('.moreless-button').click(function() {
			$('.moretext').slideToggle();
			if ($('.moreless-button').text() == "Read more") {
				$(this).text("Read less")
			} else {
				$(this).text("Read more")
			}
		});
	</script>
</body>

</html>