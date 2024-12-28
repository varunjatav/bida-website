<?php include "config.php"; ?>
<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

	<meta charset="utf-8">
	<title>Rti</title>

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

	<style>
		.white {
			background-color: #fff !important;
			color: #000 !important;
		}

		.white a {
			color: #000 !important;
		}
		.padding-top-bottom-60{
			padding-top: 60px;
			padding-bottom: 60px;
		}
		@media (max-device-width: 800px) and (min-device-width: 315px) {
			.padding-top-mob-nav{
                padding-top: 50px;
            }
			.mbt-10{
				margin-bottom: 10px;
			}
        }
	</style>


</head>

<body>

	<div class="animsition">


		<?php include "includes/header.php"; ?>

		<div class="section over-hide padding-top-120 padding-top-mob-nav">
			<div
				class="top-header-parallax-section corporate-hero-back-img-1 section-background-rti parallax-hero-1200">
			</div>
			<div class="background-dark-over-hotel"></div>
			<div class="section-1400 z-bigger">
				<div class="container-fluid padding-top-bottom-60">
					<div class="row">
						<div class="col-lg">
							<h2 class="display-8 mb-3 color-white">
								Right to Information
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section over-hide bg-tri-form">
			<div class="section-1400">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-10 col-xl-12">
							<div class="section over-hide padding-top-bottom-60">
								<div class="row justify-content-center">
									<div class="col-md-6 col-lg-3 text-center services-wrap-2 mbt-10"
										data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s">
										<a target="_blank" href="img/rti-pdf.pdf">
											<div class="section border-4 px-2 py-3 rti-bg">
												<img class="mb-3 mx-auto" src="img/pdf-icon.png" alt="">
												<h6 class="mb-3 color-dark">
													Infrastructure and Industrial Development Department 
												</h6>
												<p class="mb-0 color-dark">
													<span>Click here to read(Hindi)</span>
												</p>
												<p class="mb-0 color-dark">Last Updated On – <span>March 12, 2024</span></p>
											</div>
										</a>
									</div>
									<div class="col-md-6 col-lg-3 text-center services-wrap-2  mbt-10"
										data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s">
										<a href="img/rti_hindi_form.pdf" target="_blank">
											<div class="section border-4 px-2 py-3 rti-bg">
												<img class="mb-3 mx-auto" src="img/pdf-icon.png" alt="">
												<h6 class="mb-3 color-dark">
													Right to Information(RTI) form in Hindi
												</h6>
												<p class="mb-0 color-dark">
													<span>Click here to download(Hindi)</span>
												</p>
												<p class="mb-0 color-dark">Last Updated On – <span>March 12, 2024</span></p>
											</div>
										</a>
									</div>
									<div class="col-md-6 col-lg-3 text-center services-wrap-2  mbt-10"
										data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s">
										<a href="img/rti_eng_form.pdf" target="_blank">
											<div class="section border-4 px-2 py-3 rti-bg">
												<img class="mb-3 mx-auto" src="img/pdf-icon.png" alt="">
												<h6 class="mb-3 color-dark">
													Right to Information(RTI) form in English
												</h6>
												<p class="mb-0 color-dark">
													<span>Click here to read(English)</span>
												</p>
												<p class="mb-0 color-dark">Last Updated On – <span>March 12, 2024</span></p>
											</div>
										</a>
									</div>
								</div>

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

</body>

</html>