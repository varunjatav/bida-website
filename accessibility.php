<?php include "config.php"; ?>
<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

	<meta charset="utf-8">
	<title>accessibility</title>
	<link rel="icon" type="img/x-icon" href="img/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121" />
	<meta name="msapplication-navbutton-color" content="#212121" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/animsition.min.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/unicons.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/lighbox.min.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/tooltip.min.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/swiper.min.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/style.css" />

	<style>
		.white {
			background-color: #fff !important;
			color: #000 !important;
		}

		.white a {
			color: #000 !important;
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
								Accessibility
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Quote section
		================================================== -->

		<div class="section over-hide">
			<div class="section-1400">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-10 col-xl-12">
							<div class="para-div" style="margin:3%">
								
								<p style="color: #000;">We are committed to ensure that the Official Website of BUNDELKHAND INDUSTRIAL DEVELOPMENT AUTHORITY, Government of Uttar Pradesh is accessible to all users irrespective of device in use, technology or ability. The website is designed, with an aim, to provide maximum accessibility and usability to its visitors. As a result, this website can be viewed from a variety of devices such as Desktop, Laptop, Computer, Mobile Device etc.

We have put in our best efforts to ensure that all information on this website is accessible to people with disabilities. For example, a user with visual disability can access this website using assistive technologies, such as screen readers and screen magnifiers.

We also aim to standardize and follow principles of usability and universal design, which should help all visitors of this website.

This website is designed using XHTML 1.0 Transitional to meet Guidelines for Indian Government Websites and also adheres to level A of the Web Content Accessibility Guidelines (WCAG) 2.0 laid down by the World Wide Web Consortium (W3C). Part of the information in the website is also made available through links to external Websites. External Websites are maintained by the respective departments/organizations that are responsible for making these sites accessible.

If you have any problem or suggestion regarding the accessibility of this website, please write to us. Do let us know the nature of the problem along with your contact information, if any.</p>

								
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

	<script src="<?php echo $website_cdn_ath; ?>js/jquery.min.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/popper.min.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/plugins.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/custom.js"></script>
	
</body>

</html>