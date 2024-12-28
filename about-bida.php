<?php include "config.php"; ?>
<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

	<meta charset="utf-8">
	<title>About BIDA</title>
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
	<!-- Revolution Slider CSS
	================================================== -->
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/layers.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/navigation.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/settings.css" />
	<!-- Custom CSS
	================================================== -->
	<link rel="stylesheet" href="css/style.css" />

	<style>
		.white {
			background-color: #fff !important;
			color: #000 !important;
		}

		.white a {
			color: #000 !important;
		}

		.bg-tri {
			background-image: url('img/tricolorbackdropblur.png');
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-position: top;
		}

		@media (max-device-width: 800px) and (min-device-width: 315px) {
			.padding-top-mob-nav {
				padding-top: 120px;
			}
		}

		/* Fix the button container height to avoid layout shifts */
		#read-text-button-container {
			/* height: 35px; Adjust based on your button's height */
			/* width: 100px; Adjust based on your button's width */
			/* display: flex;
			justify-content: center;
			align-items: center; */
			display: inline-block;
		}

		/* Ensure the image size remains constant */
		#read-text-button-about img {
			width: 100%;
			height: auto;
		}

		#read-text-button-container{
			background-color: green;
			color: #fff;
			border-radius: 4px;
			margin-bottom: 10px;
			text-align: center;
		}
		#read-text-button-container a{
			display: block;
			cursor: pointer;
			padding: 5px 15px;
			display: flex;
			gap: 5px;
			align-items: center;
		}
		#read-text-button-container a img{
			width: 20px;
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
								About BIDA
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Quote section
		================================================== -->

		<div class="section over-hide padding-top-bottom-60 bg-tri">
			<div class="section-1400">
				<div class="container-fluid">
					<div style="text-align: center;">
						<p class="lead mb-3 text-uppercase font-weight-700">
						<h3 class="title-text-top"><span class="font-weight-700" style="font-size: 25px;">Bundelkhand
								Industrial
								Development Authority (BIDA)</span></h3>
						</p>
						<p class="lead mb-2">
						<p style="color: #000;background: #F78018; -webkit-linear-gradient:(#F78018);
							-webkit-background-clip: text;
							-webkit-text-fill-color: transparent;font-size: 23px;font-weight: 500;">"Happy and Healthy Investment Destination"</p>
						</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-10 col-md-8 col-lg-6 pr-xl-2 img-wrap" data-scroll-reveal="enter right move 40px over 0.5s after 0.3s" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
							<div class="col-12" style="margin-top:12px">
								<video src="video/slideshow.mp4" preload="auto" autoplay loop="loop" muted="muted" style="width: 100%;border-radius:14px;"></video>
							</div>
						</div>
						<div class="col-sm-10 col-md-8 col-lg-6 pl-xl-3 align-self-center mt-5 mt-lg-0" data-scroll-reveal="enter left move 40px over 0.5s after 0.3s" data-scroll-reveal-id="1" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">

							<div class="row mt-1" style="padding-left:10px;">
								<p id="text-to-read-about" style="color: #000;font-size:18px;">BIDA is envisioned as a transformative force, aiming to rewrite the narrative for the region. The vision and objectives are rooted in principles that prioritizes industrial vibrancy, self -sustainable and socially vibrant enclaves, high end investment opportunities enshrined with the commitment of ease of doing business and trade, green industries, affordable housing, world-class tourism with secure and seamless smart transportation.</br>Bundelkhand is an emerging a destination under the global vision of Shri Narendra Modi Hon’ble Prime Minister, India and the dynamic leadership of Yogi Adityanath Hon’ble Chief Minister, Uttar Pradesh. The objective is to set up a self-sustainable, liveable city that delivers an “Economically Vibrant and Ecologically Sustainable Ecosystem”, a world class enclave that would develop as a lush green area and advance in the state-of-the art Industrial Land Parcels. The essential idea is to have an Industrial enclave with a Moto of Happy and Healthy Investment Destination.</p>
							</div>

							<div class="left-btn2" id="read-text-button-container">
								<a onclick="toggleSpeechAbout()" id="read-text-button-about"><img src="img/play.svg" alt="">Read Text</a>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>

		<?php include "includes/footer.php"; ?>



		<div class="progress-wrap">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
			</svg>
		</div>

	</div>

	<script src="<?php echo $website_cdn_ath; ?>js/jquery.min.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/script.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/popper.min.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/plugins.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/custom.js"></script>

	<script>
		let isReading = false;
		let audio;

		function toggleSpeechAbout() {
			if (isReading) {
				stopSpeech();
				document.getElementById("read-text-button-about").innerHTML = '<img src="img/play.svg" alt="">Read Text';
				document.getElementById("read-text-button-container").style="background:green";
				
			} else {
				startSpeech();
				document.getElementById("read-text-button-about").innerHTML = '<img src="img/stop.png" alt="">Stop';
				document.getElementById("read-text-button-container").style="background:red";
				
			}
			isReading = !isReading;
		}

		function startSpeech() {
			var text = document.getElementById("text-to-read-about").innerText;
			let languageCode = detectLanguage(text);
			let voiceName = getVoiceName(languageCode);

			const apiKey = 'AIzaSyDP-yAaUIRSG3cpep-JpJ4vvLG_JPd2AI4'; // Replace this with your actual API key
			const url = `https://texttospeech.googleapis.com/v1/text:synthesize?key=${apiKey}`;
			const data = {
				'input': {
					'text': text
				},
				'voice': {
					'languageCode': languageCode,
					'name': voiceName,
					'ssmlGender': 'FEMALE'
				},
				'audioConfig': {
					'audioEncoding': 'MP3'
				}
			};
			const otherparam = {
				headers: {
					"Content-Type": "application/json; charset=UTF-8"
				},
				body: JSON.stringify(data),
				method: "POST"
			};
			fetch(url, otherparam)
				.then(response => response.json())
				.then(data => {
					// Decode the base64 audio content
					const audioContent = atob(data.audioContent);

					// Create an audio element
					audio = new Audio();
					audio.src = 'data:audio/mp3;base64,' + data.audioContent;

					// Play the audio
					audio.play();
				})
				.catch(error => {
					console.error('Error:', error);
					// Handle errors here
				});
		}

		function stopSpeech() {
			if (audio) {
				audio.pause();
				audio.currentTime = 0;
			}
		}

		function detectLanguage(text) {
			// Simple detection for English or Arabic
			if (/[a-zA-Z]/.test(text)) {
				return 'en-US';
			} else {
				return 'ar-XA';
			}
		}

		function getVoiceName(languageCode) {
			// Define voice names based on language codes
			if (languageCode === 'en-US') {
				return 'en-US-Studio-O'; // Adjust voice names as needed
			} else if (languageCode === 'ar-XA') {
				return 'ar-XA-Standard-A'; // Adjust voice names as needed
			} else {
				return 'en-US-Studio-O'; // Default voice name
			}
		}
	</script>
</body>

</html>
