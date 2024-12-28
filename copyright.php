<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

	<meta charset="utf-8">
	<title>Copyright</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121" />
	<meta name="msapplication-navbutton-color" content="#212121" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#212121" />
	<link rel="icon" type="img/x-icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/animsition.min.css" />
	<link rel="stylesheet" href="css/unicons.css" />
	<link rel="stylesheet" href="css/lighbox.min.css" />
	<link rel="stylesheet" href="css/tooltip.min.css" />
	<link rel="stylesheet" href="css/swiper.min.css" />
	<link rel="stylesheet" href="css/style.css" />
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
							COPYRIGHT POLICY
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
								<p style="color: #000;">Contents published on this website is subject to Copyright under BUNDELKHAND INDUSTRIAL DEVELOPMENT AUTHORITY, Government of Uttar Pradesh and can be reproduced and used by anyone after seeking proper permission/consent from concerned authorities of the department by sending a mail (with no applicable charges), for legal purposes only. The reproduced contents should not be used in a derogatory manner or in a misleading context. Also the source of contents should be acknowledged wherever it has been published or issued.

However, the permission to reproduce contents shall not extend to any material which is identified as being copyright of a third party. Authorization to reproduce such material must be obtained from the concerned departments/copyright holders.</p>

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