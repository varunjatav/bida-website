<?php
include "config.php";
// include "land_require_list_data.php";
require "counter/counter.php";
require "visitors_count.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

	<meta charset="utf-8">
	<title>Bundelkhand Industrial Development Authority</title>
	<link rel="icon" type="img/x-icon" href="img/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121" />
	<meta name="msapplication-navbutton-color" content="#212121" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#212121" />
	<meta name="description" content="Bundelkhand Industrial Development Authority, Jhansi. The vision and objectives are rooted in principles that prioritizes industrial vibrancy, self -sustainable and socially vibrant enclaves. A world class enclave that would develop as a lush green area and advance in the state-of-the art Industrial Land Parcels.">
	<meta name="keywords" content="BIDA, BIDA Jhansi, Bundelkhand, Bundelkhand Industrial Development Authority Jhansi, LAMS, Land Acquisition Jhansi, Jhansi, Uttar Pradesh, Kashtkar Portal Jhansi, Kashtkar Sahmati Jhansi, Project Jhansi, Land Parcels, Jhansi Industry">
	<meta name="keywords" content="Land Acquisition Management System (LAMS)">
	<meta name="google-site-verification" content="google-site-verification=sxBvULcmeCvizfPxEPWdMbh03P7ku4cnvnmImq1M35o">
	<meta name="robots" content="index, follow">
	<meta name="geo.region" content="IN-UP">
	<meta name="geo.placename" content="Jhansi">
	<meta name="geo.position" content="25.449365014250464, 78.59112643146413">
	<meta name="ICBM" content="25.449365014250464, 78.59112643146413">
	<meta name="author" content="Bundelkhand Industrial Development Authority">
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/animsition.min.css" />
	<link rel="stylesheet" href="css/unicons.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/lighbox.min.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/tooltip.min.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/swiper.min.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/layers.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/navigation.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/settings.css" />
	<link rel="stylesheet" href="<?php echo $website_cdn_ath;
									?>css/style.css" />
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="<?php echo $website_cdn_ath;
									?>css/wheel.css">
	<!-- <link rel="stylesheet" href="lode-style.css"> -->
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'>
	<script src="<?php echo $website_cdn_ath; ?>js/jquery.min.js"></script>
	<script>
		document.write(`<style type="text/css">body{display:none}</style>
		`);
		jQuery(function(a) {
			a("body").css("display", "block");
		});
	</script>
	<style>
		.floating-button {
			padding: 10px 20px;
			position: fixed;
			bottom: 20px;
			right: 20px;
			/* width: 60px; */
			/* height: 60px; */
			background-color: #007bff;
			color: white !important;
			font-size: 18px;
			font-weight: bold;
			border-radius: 10px;
			display: flex;
			justify-content: center;
			align-items: center;
			box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
			cursor: pointer;
			transition: background-color 0.3s ease, box-shadow 0.3s ease;
			z-index: 99999;
		}

		.floating-button a {
			color: #fff;
		}

		.floating-button:hover {
			background-color: #0056b3;
			box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
		}
	</style>

</head>

<body>

	<div class="">

		<?php include "includes/header.php"; ?>



		<div class="section over-hide full-height full-height-xl padding-top-bottom-120 padding-top-mob-nav" style="position: relative;">
			<div class="height-80 parallax-hero-1200">
				<div class="poster_background"></div>
				<div id="video-wrap" class="parallax-top">
					<video class="video_background" preload="none" autoplay loop="loop" muted="muted" playsinline style="width: 100%;height: 100%;object-fit: fill;">
						<source src="<?php echo $website_cdn_ath; ?>video/hero-video.mp4" type="video/mp4">
					</video>
				</div>
			</div>
			<div class="new_marq">
				<span class="marquee_news text-styling">
					काश्तकार सहमति अपलोड करने के लिए <a href="lams/kashtkarlogin">यहाँ क्लिक करे</a>
				</span>
			</div>


		</div>


		<!-- <div class="left-toggel" style="display:none;">
			<div class="box-left-text" id="box-left-text">
				<p style="color: #fff;background: #38da3c;">News & Policies</p>
			</div>

			<div class="left-tab">
				<div class="view-content">
					<div class="views-row">
						<div class="views-field views-field-nothing">
							<div class="field-content country-v2-right-banner">
								<div class="warpper2">
									<input class="radio" id="two" name="group" type="radio">
									<input class="radio" id="one" name="group" type="radio" checked>
									<input class="radio" id="three" name="group" type="radio">
									<div class="tabs">
										<a class="close-tab" href="#">-></a>
										<label class="tab" id="two-tab" for="two">Invest India Action</label>
										<label class="tab" id="one-tab" for="one">Investment news</label>
										<label class="tab" id="three-tab" for="three">Policies</label>
									</div>
									<div class="panels">
										<div class="panel" id="one-panel">
											<div class="news-box">
												<div class="panel-title">Bundelkhand transformation: BIDA's plan for
													35,000
													acres of growth</div>
											</div>
											<div class="news-box">
												<div class="panel-title">The Bundelkhand region, sprawling across
													seven
													districts in Uttar Pradesh and six districts in Madhya Pradesh,
													covers a
													staggering 69,000 square kilometres</div>
											</div>
											<div class="news-box">
												<div class="panel-title">BIDA will lead an ambitious plan, backed by
													substantial
													investments and strategic projects.</div>
											</div>
											<div class="news-box">
												<div class="panel-title">The first phase of this ambitious
													development project
													involves acquiring 35,000 acres of land valued at over Rs 6,000
													crore in
													Jhansi district, spanning 33 revenue villages</div>
											</div>
										</div>
										<div class="panel" id="two-panel">
											<div class="news-box">
												<div class="panel-title">Bundelkhand transformation: BIDA's plan for
													35,000
													acres of growth</div>
											</div>
											<div class="news-box">
												<div class="panel-title">The Bundelkhand region, sprawling across
													seven
													districts in Uttar Pradesh and six districts in Madhya Pradesh,
													covers a
													staggering 69,000 square kilometres</div>
											</div>
											<div class="news-box">
												<div class="panel-title">BIDA will lead an ambitious plan, backed by
													substantial
													investments and strategic projects.</div>
											</div>
											<div class="news-box">
												<div class="panel-title">The first phase of this ambitious
													development project
													involves acquiring 35,000 acres of land valued at over Rs 6,000
													crore in
													Jhansi district, spanning 33 revenue villages</div>
											</div>
										</div>
										<div class="panel" id="three-panel">
											<div class="news-box">
												<div class="panel-title">Bundelkhand transformation: BIDA's plan for
													35,000
													acres of growth</div>
											</div>
											<div class="news-box">
												<div class="panel-title">The Bundelkhand region, sprawling across
													seven
													districts in Uttar Pradesh and six districts in Madhya Pradesh,
													covers a
													staggering 69,000 square kilometres</div>
											</div>
											<div class="news-box">
												<div class="panel-title">BIDA will lead an ambitious plan, backed by
													substantial
													investments and strategic projects.</div>
											</div>
											<div class="news-box">
												<div class="panel-title">The first phase of this ambitious
													development project
													involves acquiring 35,000 acres of land valued at over Rs 6,000
													crore in
													Jhansi district, spanning 33 revenue villages</div>
											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>

				</div>
			</div>
		</div> -->

		<div class="hero-bottom-section arrow-animation">
			<div class="section-1400">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-auto fade-hero">
							<a href="#page-section" class="text-decoration-none" data-gal='m_PageScroll2id'>
								<p class="font-weight-700 mb-0 size-18 color-white">
									<i class="uil uil-arrow-down size-26"></i>
								</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>






	<div style="position: relative;margin-left:10px;">
		<div style="position: absolute;z-index: 9;top: -132px;">
			<div style="background: #0000005c;border-radius:8px;">
				<div class="row fd-cl">
					<div class="mr-3 text-center border-counters-right" style="margin-left: 20px;padding: 0;">
						<div class="h3 mb-1 hero-counter" style="color: #fff;"><span class="counter digital">35300</span>
							acres</div>
						<p class="lead mb-0 hero-counter-text" style="color: #fff;">
							Total Land to be Acquired
						</p>
					</div>
					<div class="text-center border-counters-right" style="margin-right: 20px;padding: 0;">
						<div class="h3 mb-1 hero-counter" style="color: #fff;"><span class="counter digital"><?php echo $total_area_tobe_acquired ?> </span>
							acres</div>
						<p class="lead mb-0 hero-counter-text" style="color: #fff;">
							Total Land Acquired
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>



	<div class="posrel-block mt-4" style="position: relative;">
		<div class="section over-hide pb-4 height-video-m" id="footer" style="height: 90vh;">
			<div id="video-wrap" class="parallax-top">
				<video class="video_background" preload="none" autoplay loop="loop" muted="muted" playsinline style="width: 100%;height: 100%;object-fit: fill;">
					<source src="<?php echo $website_cdn_ath; ?>video/section-2.mp4" type="video/mp4">
				</video>
			</div>
			<div class="section-1400 z-bigger">
				<div class="container-fluid">
					<div class="col-12 text-center mb-1">
						<h3 class="title-text-top"><span class="font-weight-700 mobile-heading-font">WELCOME TO
								BUNDELKHAND INDUSTRIAL DEVELOPMENT
								AUTHORITY</span>
						</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="posa-popup" style="position: absolute;
                     z-index: 10;
                     left:53px;
                     bottom: 48px;">
			<a id="popupButton6" class="cta">
				<span>Explore</span>
				<svg width="13px" height="10px" viewBox="0 0 13 10">
					<path d="M1,5 L11,5"></path>
					<polyline points="8 1 12 5 8 9"></polyline>
				</svg>
			</a>

		</div>
	</div>

	<div id="popupContainer6">
		<div id="popupContent6">
			<div class="close">
				<span id="closeButton6"><i class="fa-solid fa-circle-xmark" style="color: #e66565;"></i></span>
			</div>
			<div class="read-text-popup" style="padding:10px;">
				<p class="lead mb-3 text-uppercase font-weight-700">
				<h3 class="popup-head-h3"><span class="font-weight-700 popup-head-m">Bundelkhand Industrial
						Development Authority</span></h3>
				</p>
				<p class="lead mb-2 popup-text-m" id="text-to-read" style="line-height: 23px;color:#000;">
					The Bundelkhand Industrial Development Authority (BIDA) emerges from the fertile soil of
					history
					and tradition, nestled within the heart of the Bundelkhand region in Uttar Pradesh. BIDA
					encompasses 33 villages that weave a rich tapestry of culture and heritage. From the
					exquisite
					Khajuraho carvings to the majestic Jhansi Fort, the region pulsates with the spirit of a
					glorious past.
					The objective is to set up a self-sustainable, liveable city that delivers an
					“Economically Vibrant and
					Ecologically Sustainable Ecosystem. The vision and objectives are rooted in principles
					that prioritizes
					industrial vibrancy, self -sustainable and socially vibrant enclaves, high end
					investment opportunities
					enshrined with the commitment of ease of doing business and trade, green industries,
					affordable
					housing, world-class tourism with secure and seamless smart transportation.
				</p>

				<div class="left-btn2">
					<div id="popupread">
						<a onclick="toggleSpeech()" id="read-text-button"><img src="img/play.svg" width="20px">Read Text</a>
					</div>

				</div>

			</div>
		</div>
	</div>


	<div class="slider-div mt-4">
		<div class="container-fluid">
			<div class="col-12 text-center mb-1">
				<h3 class="title-text-top"><span class="mobile-heading-font font-weight-700">Discover the Strategic
						Advantages of Investing in
						BIDA</span>
				</h3>
			</div>
		</div>
		<div class="slider-container">
			<div class="slide active" id="slide1">
				<div class="text-box">
					<div class="main_class active-main" id="cont_1">


						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/foodprocessing.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title">Food Processing Policy</div>
								<div class="obj-cntr">

									<div class="objs"><a class="button-big" href="foodpro#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="foodpro#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="foodpro#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="foodpro#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr iupm">
								<h5>Incentives under Pradhan Mantri Kisan Sampada Yojana:</h5>
								<h6> </h6>

								<ul>
									<li>100% exemption from <b> stamp duty</b>for the land purchased for the
										establishment of the food processing industry.</li>
									<li>Exemption from <b> Mandi fees</b> and cess for agricultural produce procured
										from other states for processing in Uttar Pradesh.</li>
									<li>Permission to <b> purchase land</b>(agricultural) for more than 12.5 acres
										for FPIs.</li>
									<li>Scheme for Creation of <b> backward and forward Linkages: </b> The
										admissible grant will be 35% of the eligible project cost subject to maximum
										of INR 5 Crores.</li>
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="foodpro">Know
											More</a></div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr iupm','read-text-iupm')" id="read-text-iupm"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="slide" id="slide2">
				<div class="text-box">
					<div class="main_class active-main" id="cont_2">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/jpeg-optimizer_headerimage.png" style="width:100%;border-radius: 8px;"></img>
								</div>
								<div class="video-title">Semiconductor Policy 2024</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="semiconductor#overview">Overview</a></div>
									<div class="objs"><a class="button-big" href="semiconductor#objective">Objectives</a></div>
									<div class="objs"><a class="button-big" href="semiconductor#eligibilty">Enablers</a></div>
									<div class="objs"><a class="button-big" href="semiconductor#insent">Incentives</a></div>
								</div>
							</div>
							<div class="txt-cntr scpi">
								<h5 style="margin-left:30px;">Semi Conductor Policy Incentives</h5>
								<ul>
									<li><span class="bold">Land Subsidy:</span>&nbsp;<span>Ground your visions with
											significant land discounts, paving the way for your groundbreaking
											projects.</span></li>
									<li><span class="bold">Financial Aids:</span>&nbsp;<span>A comprehensive suite
											of financial incentives awaits, from stamp duty exemptions and
											electricity duty waivers to SGST reimbursements, fueling your ambitious
											voyage.</span></li>
									<li><span class="bold">R&D Support:</span>&nbsp;<span>Boost your innovation with
											a 25% reimbursement on establishing R&D facilities, pushing the
											boundaries of what's possible</span></li>
								</ul>

								<div class="index-slider-btn">

									<div class="know-btn"><a class="btn-orange btn-2" href="semiconductor">Know
											More</a></div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr scpi','read-text-scpi')" id="read-text-scpi"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="slide" id="slide3">
				<div class="text-box">
					<div class="main_class active-main" id="cont_3">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/dasecimg.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title"> Defence & Aerospace Policy 2019</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="defence#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="defence#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="defence#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="defence#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr dapi">
								<h5> Defence & Aerospace Policy Incentives</h5>
								<ul>
									<li><b>Defence Corridor</b> worth INR 20,000 crore to be established in nearly
										3000 hectares of land in Bundelkhand Region.</li>
									<li><b>Private Defence and Aerospace D&A Park </b>to be developed in Bundelkhand
										region to attract 15% additional capital investment subsidies up to limit of
										INR 15 crore.</li>
									<li><span class="bold">Capital Subsidy</span>&nbsp;<span>at the rate of 10% upto
											maximum INR 500 Crores to all D&A units setting up projects in Jhansi
											and Chitrakut node of UPDIC.</span></li>
									<li><span class="bold">Transport Subsidy</span>&nbsp;<span> for Anchor units for
											transfer of technology.</span></li>
									<!-- <li><span class="bold">Reimbursement</span>&nbsp;<span>for setting up Effluent
												Treatment Plant(ETP) by D&A units.</span></li> -->
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="defence.php">Know
											More</a></div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr dapi','read-text-dapi')" id="read-text-dapi"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="slide" id="slide4">
				<div class="text-box">
					<div class="main_class active-main" id="cont_4">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/airports.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title"> Civil Aviation Promotion Policy 2017</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="aviation#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="aviation#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="aviation#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="aviation#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr capp">
								<h5> Civil Aviation Promotion Policy 2017 Incentives</h5>
								<h6> </h6>
								<ul>
									<li><span><span class="bold">VAT on ATF</span> will be waived off for ten years
											on all RCS flights </span>
									</li>
									<li><span><span class="bold">S-GST</span> reimbursement on sale of air tickets
											on RCS flights on a monthly
											basis.</span></li>
									<li><span><span class="bold">Viability Gap Funding</span> (for 50% of total
											seats) at 20% State Share
											according to RCS. </span></li>
									<li><span> <span class="bold">Electricity at subsidised rates</span> @Rs 4/Unit
											upto 30,000 units per
											month. </span></li>
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="aviation">Know
											More</a></div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr capp','read-text-capp')" id="read-text-capp"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="slide" id="slide5">
				<div class="text-box">
					<div class="main_class active-main" id="cont_5">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/energysector.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title"> Renewable Energy Policy 2022</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="renewenergy#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="renewenergy#objective">Objectives</a></div>
									<div class="objs"><a class="button-big" href="renewenergy#eligibilty">Enablers</a></div>
									<div class="objs"><a class="button-big" href="renewenergy#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr repi">
								<h5> Renewable Energy Policy Incentives</h5>

								<ul>
									<li><span class="bold">Infrastructure subsidy:</span>&nbsp;<span>For grid
											connectivity of Standalone Solar Power projects of capacity 5 MW and
											above proposed to be set up in Bundelkhand region, State Government will
											bear the cost for construction of maximum transmission line
											length.</span></li>
									<li><span><b>Green Energy corridor</b> is being set up in <b>Bundelkhand
												Region</b> of the State to facilitate evacuation of power of 4000 MW
											capacity.</span></li>
									<li><span> <b>Bundelkhand Saur Urja Pvt Ltd (BSUL)</b> have been formed for
											development of Solar Parks.</span></li>
									<li><span>Nodal Agency to create a land bank in State specifically <b>in
												Bundelkhand region</b> with the objective to remove the procedural
											delays in availability of land.</span></li>

								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="renewenergy">Know
											More</a></div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr repi','read-text-repi')" id="read-text-repi"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="slide" id="slide6">
				<div class="text-box">
					<div class="main_class active-main" id="cont_6">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/ph.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title"> Pharmaceutical and Medical Device Industry Policy 2023
								</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="hcare#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="hcare#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="hcare#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="hcare#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr pharm">
								<h5> Pharmaceutical and Medical Device Industry Policy Incentives</h5>
								<h6> </h6>
								<ul>
									<li><span class="bold">Capital Subsidy: </span>&nbsp;<span>@15% of investment up
											to Rs 200 Cr to be provided in 5 annual instalments in
											Bundelkhand.</span></li>
									<li><span class="bold"> Interest Subsidies:</span>&nbsp;<span>@5% p.a. for 5yrs
											on loan taken for procurement of P&M, up to max Rs 1 Cr p.a. per unit;
											Addtl subsidy @2% p.a for 7yrs for units in Bundelkhand.</span>

									</li>
									<li><span class="bold"> Electricity Duty Exemption: </span>&nbsp;<span>100%
											exemption for 10 yrs.</span></li>
									<li><span class="bold"> Stamp Duty: </span>&nbsp;<span> exemption @100% .</span>
									</li>
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="hcare">Know More</a>
									</div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr pharm','read-text-pharm')" id="read-text-pharm"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="slide" id="slide7">
				<div class="text-box">
					<div class="main_class active-main" id="cont_7">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/ithome.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title"> Information Technology & Start-Up Policy 2017-2022</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="ites#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="ites#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="ites#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="ites#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr itsss">
								<h5> Information Technology & Start-Up Policy Incentives</h5>
								<h6> </h6>
								<ul>
									<li><span class="bold">Interest subsidy </span>&nbsp;<span> @5% per annum for a
											period of 7 years.</span></li>
									<li><span class="bold"> Stamp Duty</span>&nbsp;<span> @100% exemption on
											purchase/lease of land/office space/ buildings for IT/ITeS use with
											condition of commencing operations within 3 years.</span></li>
									<li><span class="bold"> Electricity Duty </span>&nbsp;<span>@100% reimbursement
											for new IT/ITeS units for a period of 10 years post commencement of
											commercial operations.</span></li>
									<li>Smart IT City to be developed in Bundelkhand.</li>
								</ul>
								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="ites">Know More</a>
									</div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr itsss','read-text-itsss')" id="read-text-itsss"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
			<div class="slide" id="slide9">
				<div class="text-box">
					<div class="main_class active-main" id="cont_9">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/datacentre.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title"> Data Center Policy 2021 </div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="datacenter#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="datacenter#objective">Objectives</a></div>
									<div class="objs"><a class="button-big" href="datacenter#eligibilty">Enablers</a></div>
									<div class="objs"><a class="button-big" href="datacenter#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr datac">
								<h5> Data Center Incentives</h5>
								<h6> </h6>
								<ul>
									<li><span class="bold">Land Subsidy:</span>
										<span style="color:#000;">50% subsidy in <b>Bundelkhand</b>
											capped at 7.5% of the <b>total project cost</b> or INR 75 Crore,
											whichever is
											lower.</span><br><span>• 50% subsidy in <b>Bundelkhand</b> regions,
											capped at 7.5% of the total project cost or INR 75 Crore, whichever is
											lower.</span>
									</li>
									<li><span class="bold">Interest Subsidy: </span><span>Up to 60%
											reimbursement of annual interest for 7 years with a cap of INR 10 Crore
											per year, accumulating to a total ceiling of INR 50 Crore per
											park.</span></li>

									<li><span class="bold">Capital subsidy:</span>&nbsp;<span>@7% up to INR 20 Cr on
											Fixed Capital investment (FCI) excluding land and building .</span></li>
								</ul>
								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="datacenter">Know
											More</a></div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr datac','read-text-datac')" id="read-text-datac"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="slide" id="slide10">
				<div class="text-box">
					<div class="main_class active-main" id="cont_10">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/logictics.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title"> Warehousing and Logistics Policy 2022 </div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="logistics#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="logistics#objective">Objectives</a></div>
									<div class="objs"><a class="button-big" href="logistics#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="logistics#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr ware">
								<h5 style="margin-left:30px"> Warehousing & Logistics Policy Incentives</h5>
								<h6> </h6>
								<ul>
									<li><span class="bold">Front end Subsidies:
										</span>&nbsp;<span>Incentives offered to eligible projects before
											commencement of commercial operations.</span></li>
									<li><span class="bold">Stamp duty exemption:</span>&nbsp;<span> Concession of
											land use conversion for all eligible projects @75%.</span></li>
									<li><span class="bold">Ground Coverage:
										</span>&nbsp;<span> Storage facilities & Dry ports: upto 60%.</span></li>
									<li><span class="bold">Backend Subsidies:
										</span>&nbsp;<span> Incentives offered to eligible projects on commencement
											of commercial operations.</span></li>
									<li><span class="bold">Capital Subsidy:
										</span>&nbsp;<span>Storage facilities: @15% upto INR 5 Cr. anywhere in UP
											and upto INR 10 Cr. In designated Logistics Zones.</span></li>
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="logistics">Know
											More</a></div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr ware','read-text-ware')" id="read-text-ware"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>


			<div class="slide" id="slide11">
				<div class="text-box">
					<div class="main_class active-main" id="cont_11">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/evautomanuf.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title"> Electric Vehicle Manufacturing and Mobility Policy 2022
								</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="electric#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="electric#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="electric#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="electric#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr ev">
								<h5> Electric Vehicle Manufacturing and Mobility Policy Incentives</h5>
								<h6> </h6>
								<ul>
									<li>
										<div class="sec-points">
											<span class="bold">Capital Subsidy to Service providers:</span><br><span class="bold">• Charging Stations:</span>&nbsp;<span> (one time)
												investing minimum INR 25 lakh shall be provided capital subsidy @20%
												upto maximum INR 10 lakh per unit to 1st2000 Charging
												Stations.</span><br>
											<span><b>Land Subsidy:</b> 50% Land subsidy on prevailing sector rates
												shall be provided to SPV/PIA of EMC/ESDM Parks and individual ESDM
												units on purchase of land from state Agencies in Bundelkhand
												regions.</span><br>
											<span><b>Financial Subsidy:</b> 100 % Stamp Duty reimbursement on
												purchase/ lease of land post commencement of commercial
												production</span>
										</div>
									</li>
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="electric">Know
											More</a></div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr ev','read-text-ev')" id="read-text-ev"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="slide" id="slide12">
				<div class="text-box">
					<div class="main_class active-main" id="cont_12">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/carpetshome.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title">Textile and Garmenting Policy 2022 </div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="textiles#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="textiles#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="textiles#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="textiles#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr textile">
								<h5> Textile and Garmenting Policy Incentives</h5>
								<h6> </h6>
								<ul>
									<li><span class="bold">Capital Investment Subsidy: </span>&nbsp;<span><b>Capital
												Subsidy</b> of 25% of the investment made on purchase of Plant and
											Machinery will be reimbursed to the textiles and garments units, which
											generates minimum employment of 50 in <b>Bundelkhand
												Region.</b></span><br><span>In addition to the above, reimbursement
											of <b>additional capital subsidy</b> at the rate of 10 % will be
											provided to the units set up in <b>Bundelkhand Region.</b></span></li>
									<li><span class="bold">Land Subsidy</span>&nbsp;<span> @50% of land cost on land
											purchase from State Agencies.</span></li>
									<li><span class="bold">Stamp Duty exemption</span>&nbsp;<span> @100%.</span>
									</li>
									<!-- <li><span class="bold">SGST refund for 10 years </span>&nbsp;<span>@90% to MSME
												units, @80% to Mega units</span></li> -->
									<!-- <li><span class="bold">Electricity Duty exemption</span>&nbsp;<span> @100% tonew
												units for 10 years.</span></li> -->
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="textiles">Know
											More</a></div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr textile','read-text-textile')" id="read-text-textile"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>


			<div class="slide" id="slide13">
				<div class="text-box">
					<div class="main_class active-main" id="cont_13">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/fdi.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title">Fortune Global 500 & Fortune India 500 Companies Investment
									Promotion Policy 2023 </div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="fortunes#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="fortunes#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="fortunes#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="fortunes#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr fdi">
								<h5>Fortune Global 500 & Fortune India 500 Companies Investment Promotion Policy
									2023 Incentives</h5>
								<h6> </h6>
								<ul>
									<li><span class="bold">Front-End Land Subsidy </span>&nbsp;<span> of up to 80%
											depending on the region, with stipulated conditions on commencement of
											operations.</span></li>
									<li><span class="bold">Capital Subsidy: </span>&nbsp;<span>A capital subsidy,
											under a yearly ceiling of ₹100 crore, will be provided in seven equal
											annual instalments, with the percentage varying based on the
											geographical location within the state.</span></li>
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="fortunes">Know
											More</a></div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr fdi','read-text-fdi')" id="read-text-fdi"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="slide" id="slide14">
				<div class="text-box">
					<div class="main_class active-main" id="cont_14">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/carpanter.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title">Micro, Small and Medium Enterprises Promotion Policy - 2022
								</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="msme#overview">Overview</a></div>
									<div class="objs"><a class="button-big" href="msme#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="msme#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="msme#insent">Incentives</a></div>
								</div>
							</div>
							<div class="txt-cntr msme">
								<h5> Micro, Small and Medium Enterprises Promotion Policy Incentives</h5>
								<ul>
									<li><span class="bold">Capital Subsidy: </span>&nbsp;<span>MSME in the
											Bundelkhand region of the State will be eligible for capital subsidy of
											25%, 20% and 15%, respectively.</span></li>
									<li><span class="bold"> Interest Subsidy:</span>&nbsp;<span>100% Financial
											Assistance to be provided for <b>Bundelkhand region.</b></span></li>
									<li><span class="bold">Infrastructure Interest
											Subsidy:</span>&nbsp;<span>Infrastructure interest subsidy will be
											payable for 7 years.</span></li>
									<li><span class="bold"> Stamp Duty Exemption: </span>&nbsp;<span> 100% stamp
											duty exemption in Bundelkhand region.</span></li>
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="msme">Know
											More</a></div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr msme','read-text-msme')" id="read-text-msme"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="slide" id="slide15">
				<div class="text-box">
					<div class="main_class active-main" id="cont_15">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/jhansiimge.jpeg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title">Tourism Policy 2022</div>
								<div class="obj-cntr" style="bottom:15%">
									<div class="objs"><a class="button-big" href="tourism#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="tourism#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="tourism#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="tourism#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr tour">
								<h5>Uttar Pradesh Tourism Policy Incentives</h5>
								<ul>
									<li><span class="bold">Capital Investment Subsidy: </span>&nbsp;<span> New
											hotels, resorts, wellness centers, and more can avail of subsidies
											ranging from 10% to 25% for various projects, encouraging significant
											investment in the tourism sector.</span></li>
									<li><span class="bold"> Interest Subsidy and Stamp Duty
											Exemption:</span>&nbsp;<span>Offers incentives such as a 5% interest
											subsidy for up to 5 years and 100% exemption on stamp duty on the first
											transaction to promote tourism infrastructure.</span></li>
									<li><span class="bold"> Skill Development and Training Incentives:
										</span>&nbsp;<span> A 100% reimbursement of hospitality-related course fees.</span></li>
									<!-- <li><b>Bundelkhand</b> being developed as major tourism circuit under new
											tourism policy. </li> -->
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="tourism">Know More</a>
									</div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr tour','read-text-tour')" id="read-text-tour"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>


			<div class="slide" id="slide16">
				<div class="text-box">
					<div class="main_class active-main" id="cont_16">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/athlete.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title">New Sports Policy 2023</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="sports#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="sports#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="sports#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="sports#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr sports">
								<h5>New Sports Policy Incentives</h5>
								<ul>
									<li><span class="bold">Assistance to Grassroot Athletes: </span>&nbsp;<span>
											Annual assistance of INR 75,000 for athletes at junior level INR 50,000
											for athletes at sub Junior level.</span></li>
									<li><span class="bold"> Assistance to Development Athletes:</span>&nbsp;<span>
											Annual Financial assistance of INR 2 Lakhs for athletes for their
											physical well-being and diet.</span></li>
									<li><span class="bold">Assistance to Elite Athletes: </span>&nbsp;<span>Annual
											financial assistance of INR 3 lakhs to athletes for their physical
											well-being and diet.All the Athletes part of the UP sports Scheme,
											Coaches and sports science staff will also be covered by a cashless
											health insurance of INR 5 Lakhs each.</span>
									</li>
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="sports">Know More</a>
									</div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr msme','read-text-msme')" id="read-text-msme"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slide" id="slide17">
				<div class="text-box">
					<div class="main_class active-main" id="cont_17">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/townshiphome.jpg" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title">Township Policy 2023</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="township#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="township#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="township#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="township#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr town">
								<h5>Township Policy Incentives</h5>
								<ul>
									<li><span class="bold"> Eligibility for Private Developers:
										</span>&nbsp;<span>Private developers now have an opportunity to partake in
											township development projects, opening up new avenues for investment and
											growth.</span></li>
									<li><span class="bold">Flexibility in Land Use: </span>&nbsp;<span>For townships
											with a land area of below 50 acres, the policy designates these
											exclusively for residential purposes.</span></li>
									<li><span class="bold">Facilitation of Foreign Direct Investment (FDI):
										</span>&nbsp;<span>The policy aligns with the Indian government’s FDI
											policy, allowing for foreign investment in township projects, thereby
											broadening the investment pool.

											<div class="index-slider-btn">
												<div class="know-btn"><a class="btn-orange btn-2" href="township">Know More</a></div>
												<div class="left-btn2 read-text-button-container">
													<a onclick="toggleSpeechForInvesting('txt-cntr town','read-text-town')" id="read-text-town"><img src="img/play.svg" alt="">Read Text</a>
												</div>
											</div>
							</div>
						</div>

					</div>
				</div>

			</div>


			<div class="slide" id="slide18">
				<div class="text-box">
					<div class="main_class active-main" id="cont_18">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/filmimagemain.png" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title">Uttar Pradesh Film Sector Policy Overview</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="films#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="films#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="films#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="films#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr films">
								<h5>Uttar Pradesh Film Sector Policy Overview</h5>
								<ul>
									<li><span class="bold">60% of national box office collections </span>&nbsp;<span>
											come from Uttar Pradesh, NCR, and Mumbai.</span></li>
									<li> Uttar Pradesh was awarded the <b>Most Film Friendly State Award </b> in the National Film Festival in both 2015 and 2016.</li>
									<li>The state is set to host the <b>biggest film city in the country.</b></span></li>
									<li>With <b> more than 500 multiplexes and single screens</b>, Uttar Pradesh is a major hub for cinema.</li>
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="films">Know More</a>
									</div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr films','read-text-films')" id="read-text-films"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slide" id="slide19">
				<div class="text-box">
					<div class="main_class active-main" id="cont_19">
						<div class="invest-container">
							<div class="video-cntr">
								<div class="col-12">
									<img loading="lazy" src="img/starupmainimageone-final.png" style="width:100%;border-radius: 8px;"></img>
								</div>

								<div class="video-title">Uttar Pradesh Film Sector Policy Overview</div>
								<div class="obj-cntr">
									<div class="objs"><a class="button-big" href="startup#overview">Overview</a>
									</div>
									<div class="objs"><a class="button-big" href="startup#objective">Objectives</a>
									</div>
									<div class="objs"><a class="button-big" href="startup#eligibilty">Enablers</a>
									</div>
									<div class="objs"><a class="button-big" href="startup#insent">Incentives</a>
									</div>
								</div>
							</div>
							<div class="txt-cntr startups">
								<h5>Uttar Pradesh Startup Policy Overview</h5>
								<ul>
									<li><b>Top 3 Ranking :</b>To be among the top three states in the "States’ Startup Ranking".</li>
									<li><b>Incubation Support :</b> Establish and support a minimum of one incubator in each district, with a total goal of 100 incubators across the state.</li>
									<li><b>Ecosystem Development :</b>Create an ecosystem to support at least 10,000 startups.</li>
									<li><b>Physical Infrastructure :</b>Develop a minimum of One Million square feet of incubation/acceleration space.</li>
									<li><b>Centres of Excellence :</b>Establish eight state-of-the-art Centres of Excellence (CoEs).</li>
								</ul>

								<div class="index-slider-btn">
									<div class="know-btn"><a class="btn-orange btn-2" href="startup">Know More</a>
									</div>
									<div class="left-btn2 read-text-button-container">
										<a onclick="toggleSpeechForInvesting('txt-cntr startups','read-text-startups')" id="read-text-startups"><img src="img/play.svg" alt="">Read Text</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<i class=" arrow fa-solid fa-circle-arrow-left" id="prevBtn"></i>
			<i class="arrow fa-solid fa-circle-arrow-right" id="nextBtn"></i>
			<!-- <i class="arrow fa-solid fa-arrow-left" id="prevBtn"></i>
				<i class="arrow fa-solid fa-arrow-right" id="nextBtn"></i> -->
		</div>
	</div>

	<!-- Mobile/Tab Slider -->
	<div class="main-div-m">
		<div class="container-fluid">
			<div class="col-12 text-center mb-1">
				<h3 class="title-text-top"><span class="mobile-heading-font font-weight-700">Discover the Strategic
						Advantages of Investing in
						BIDA</span>
				</h3>
			</div>
		</div>

		<div class="slideshow-container-m">

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabfoodprocessing.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>Food Processing Policy Incentives</h4>
					<p style="color:#000;"> The Uttar Pradesh Agro & Food Processing Industry Policy-2022 aims to capitalise on the state's agricultural abundance to foster a dynamic, technologically advanced, and sustainable food processing sector.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="foodpro">Know More</a></div>
						<!-- <div class="sp-btn">Text to speech</div> -->
					</div>
				</div>
				<div class="clr"></div>
			</div>


			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabdefenceareospace.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>Defence & Aerospace Policy Incentives</h4>
					<p style="color:#000;"> The Uttar Pradesh Government is steering the nation toward an avant-garde future with its dynamic Defence & Aerospace (D&A) policy. Positioned in the heart of the Bundelkhand region, the Defence Industrial Corridor (DIC) stands as a beacon of innovation and opportunity.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="defence">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabsemiconductor.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>Semiconductor Policy Incentives</h4>
					<p style="color:#000;">The Uttar Pradesh Electronics and Semiconductors Policy 2024 is a strategic initiative aimed at positioning the state as a significant hub for semiconductor manufacturing, critical for bolstering economic growth, enhancing innovation, and supporting India's ambitions towards self-reliance in a strategically pivotal sector.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="semiconductor">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabaviation.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4> Civil Aviation Promotion Policy Incentives</h4>
					<p style="color:#000;"> Uttar Pradesh aims to strengthen its position as a significant aviation hub in India, bolstered by its strategic sectoral policies designed to foster growth, connectivity, and infrastructure development within the civil aviation domain. These initiatives are geared towards attracting aviation investors, with a focus on creating a more favourable business environment, enhancing air connectivity, and promoting trade and employment through infrastructural advancements in the state's civil aviation landscape.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="aviation">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabrenewableenergy.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4> Renewable Energy Policy Incentives</h4>
					<p style="color:#000;"> In an ambitious move to bolster the renewable energy sector, Uttar Pradesh unveils a comprehensive incentive policy targeted at renewable energy companies and investors. This policy aims to significantly ramp up renewable energy production capacity whilst fostering a conducive investment climate.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="renewenergy">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabpharma.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4> Pharmaceutical and Medical Device Industry Policy Incentives</h4>
					<p style="color:#000;"> The Uttar Pradesh Pharmaceutical and Medical Device Industry Policy, 2023, heralds a promising future for entities operating within these sectors. This policy is designed to position Uttar Pradesh as a leading hub for pharmaceutical and medical device manufacturing, leveraging its expansive market, robust R&D infrastructure, and strategic incentives to facilitate growth, innovation, and sustainability.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="hcare">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabitites.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>Information Technology & Start-Up Policy Incentives</h4>
					<p style="color:#000;"> The UP Information Technology Policy 2022 is not just a policy document; it is a testament to Uttar Pradesh’s commitment to becoming a leader in the IT and ITeS industry. By providing a wide range of fiscal incentives and highlighting the Bundelkhand region for targeted development, the policy creates an attractive ecosystem for IT ventures.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="ites">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabdatacentre.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>Data Center Policy Incentives</h4>
					<p style="color:#000;"> Uttar Pradesh is setting a global benchmark in the Data Center (DC) industry with its ambitious Data Center Policy 2021. This policy aims to establish the state as an attractive destination for investors and technology firms looking to tap into the rapidly growing DC market.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="datacenter">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tablogistics.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4> Warehousing and Logistics Policy Incentives</h4>
					<p style="color:#000;"> The Uttar Pradesh Warehousing and Logistics Policy 2022 emerges as a pivotal framework designed to position Uttar Pradesh, and specifically the Bundelkhand region, as a leading hub for logistics and warehousing, nationally and globally. This policy brief highlights the critical objectives, compelling incentives, and strategic initiatives set forth in the policy, aimed at captivating private investment, enhancing infrastructure capabilities, promoting employment, and endorsing green, sustainable practices.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="logistics">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabevcarmanuf.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4> Electric Vehicle Manufacturing and Mobility Policy Incentives</h4>
					<p style="color:#000;"> The advent of Electric Vehicles (EVs) is heralding a new era in the global automotive landscape, signalling a significant shift towards sustainable mobility. The Uttar Pradesh Electric Vehicle Manufacturing and Mobility Policy 2019 is crafted to place Uttar Pradesh at the forefront of this transition, leveraging its strategic advantages to foster growth in EV manufacturing and usage.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="electric">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabtextile.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4> Textile and Garmenting Policy Incentives</h4>
					<p style="color:#000;">The Government of Uttar Pradesh is determined to provide a favourable ecosystem and promote Indian Textiles & Apparel Industry to make them competitive with Industries from the leading textile & apparel exporting countries.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="textiles">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabfortunefdi.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>Fortune Global 500 & Fortune India 500 Companies Investment
						Promotion Policy Incentives</h4>
					<p style="color:#000;"> The Uttar Pradesh government is proud to announce the launch of the "Uttar Pradesh FDI, Fortune Global 500 & Fortune India 500 Companies Investment Promotion Policy 2023". This groundbreaking policy is designed to turbocharge the state's economy by attracting top-tier global investments.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="fortunes">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabmsme.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>Micro, Small and Medium Enterprises Promotion Policy Incentives</h4>
					<p style="color:#000;"> Uttar Pradesh, India's expansive state, stands as a significant economic powerhouse. This sector, crucial for regaining momentum and capturing new investment avenues post-pandemic, is central to realising Uttar Pradesh's vision of becoming a trillion-dollar economy.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="msme">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabjhansiwallpaper.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>Tourism Policy Incentives</h4>
					<p style="color:#000;"> Uttar Pradesh, with its rich tapestry of culture, history, and heritage, is making significant strides to strengthen its position as a core attraction for tourists, both domestic and international.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="tourism">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabsportspolicy.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>New Sports Policy Incentives</h4>
					<p style="color:#000;"> The New Sports Policy 2023, approved by the Uttar Pradesh cabinet and led by Chief Minister Yogi Adityanath, is set to revolutionise the sports landscape in the state. Designed to nurture a vibrant sports culture and propel athletes to new heights, this policy introduces a range of innovative strategies and provisions. Here’s what private academies and the public in Uttar Pradesh need to know.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="sports">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/tabtownshipplanning.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>Township Policy Incentives</h4>
					<p style="color:#000;"> The Uttar Pradesh Township Policy 2023 sets a foundation for modern, high-quality living spaces, catering to a diverse demographic. It marks a strategic pivot to foster private-sector participation in creating holistic townships, equipped with state-of-the-art amenities and infrastructural excellence. Finance Minister Suresh Khanna echoed the sentiment of progressive urbanisation, underscoring the government's commitment.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="township">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/filmsectormobile.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>Uttar Pradesh Film Sector Policy Overview</h4>
					<p style="color:#000;"> The Uttar Pradesh Film Sector Policy is designed to position the state as a premier destination for the film industry, leveraging its robust infrastructure, abundant labour, and rich heritage. With generous financial incentives and a variety of attractive locations, Uttar Pradesh offers an unparalleled filming experience. <br>Explore the opportunities that await you in Uttar Pradesh. Connect with us to learn more about how you can take advantage of these incentives and make your mark in the film industry.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="films">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="slider-div-m fade-m">
				<div class="img-div-m">
					<div><img loading="lazy" src="img/starupmainimagefourmobile-final.png" alt=""></div>
				</div>
				<div class="textm-div">
					<h4>Uttar Pradesh Startup Policy 2020</h4>
					<p style="color:#000;"> The Uttar Pradesh Startup Policy 2020, recently amended in 2022, is a comprehensive initiative designed to foster a thriving startup ecosystem in the state of Uttar Pradesh (UP). The policy is valid for five years from its notification date and supersedes previous policies (UP IT & Startup Policy 2016 and UP IT & Startup Policy 2017-2022). This policy aims to position UP among the top three states in the "States’ Startup Ranking" conducted by Startup India.</p>
					<div class="btn-m">
						<div class="know-btn-m"><a class="btn-orange btn-2" href="startup">Know More</a></div>

					</div>
				</div>
				<div class="clr"></div>
			</div>


			<br>
			<div style="text-align:center;display:none;">
				<span class="dot"></span>
				<span class="dot"></span>
				<!-- <span class="dot"></span> -->
			</div>





			<a class="prev-m" onclick="plusSlide(-1)" href="javascript:void(0)"><i class=" arrow fa-solid fa-circle-arrow-left"></i></a>
			<a class="next-m" onclick="plusSlides(1)" href="javascript:void(0)"><i class="arrow fa-solid fa-circle-arrow-right"></i></a>

		</div>



	</div>


	<!-- ///////// New position for wheel -->
	<div class="section bg-tri mt-4">
		<div>
			<div class="col-12 text-center mb-1">
				<p class="">
				<h3 class="title-text-top"><span class="mobile-heading-font font-weight-700">Citizen
						E-Services</span>
				</h3>
				</p>
			</div>

			<div class="container-fluid mt-4">
				<div class="row wheel-wrapper moblie-hide">
					<div id="sectors" class="sectors-info sector-state-txt col-sm-10 col-md-10 col-lg-10 pl-xl-5 mt-5 mt-lg-0" style="max-width: 78%;" data-scroll-reveal="enter right move 40px over 0.5s after 0.3s" data-scroll-reveal-id="6" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
						<h2 style="font-size:25px;font-weight:700">Grievance Management System
						</h2>
						<h3>
							<p id="parathree" style="color: #000;">
								The Grievance Management System serves the dual purpose of democratising the
								process
								of raising grievances and institutionalising the process of resolving them. By
								doing
								so, it ensures that grievances are handled in a systematic, fair, and unbiased
								manner, leading to satisfactory outcomes for all parties involved.
							</p>
							<h3>Key Features:</h3>
							<p id="paratwo" style="color: #000;">• Acknowledgment: Notify the employee that
								their
								grievance has been received and is being reviewed.
								<br>
								• Investigation: Conduct a thorough, impartial, and objective investigation into
								the
								grievance.
								<br>
								• Resolution: Communicate the findings and resolutions to the involved parties
								in a
								clear and respectful manner.
								<br>
								• Feedback: Encourage citizens / Organizations to provide feedback on the
								resolution
								process and overall satisfaction.

							</p>
							<div class="" style="display:flex;    align-items: center;justify-content: space-between;">
								<a id="paraone" href="grievance" class="cta">
									<span>Read More</span>
									<svg width="13px" height="10px" viewBox="0 0 13 10">
										<path d="M1,5 L11,5"></path>
										<polyline points="8 1 12 5 8 9"></polyline>
									</svg>
								</a>
								<p style="color:#000;font-size: 16px;margin-bottom:0px;"><span style="color:red;">Launching Soon:</span> Streamlined ERP Modules to
									Enhance
									Grievance Management System</p>
							</div>
						</h3>
					</div>

					<div class="wheel-container">
						<svg id="wheel" xmlns="http://www.w3.org/2000/svg" width="600" height="600" style="transform: rotate(78deg); transition: transform 0.5s ease-out 0.3s;">

							<g id="shapes">
								<g id="shape-1" data-shape="1" data-id="11" class="active" data-deg="0" transform="translate(250,385)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M29.137 152.858c-8.564-2.037-17.195-3.335-25.722-5.519-3.181-.815-3.117-3.192-2.068-5.846 3.251-8.221 6.416-16.476 9.61-24.719C24.616 81.516 38.272 46.257 51.932 10.999 54.829 3.52 64.816-1.623 72.125.949c1.067.374 2.128 2.906 1.962 4.293-.847 7.099-2.037 14.159-3.22 21.213-2.517 15.014-5.102 30.015-7.662 45.021-2.508 14.705-5.022 29.409-7.525 44.114-1.124 6.604-2.308 13.197-3.323 19.816-2.086 13.604-7.524 18.119-21.266 17.489">
									</path>
									<foreignObject width="125" x="-75" y="4" transform="translate(30) rotate(-77 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Grievance Management System" class="ellipsis" style="color: #fff;">Grievance Management System</span>
										</div>
									</foreignObject>
								</g>
								<g id="shape-2" data-shape="2" data-id="504" class="" data-deg="22.5" transform="translate(154,383)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M137.291 3.629c-7.216 10.487-14.417 21.034-21.704 31.523a34929.405 34929.405 0 0 1-53.9 77.386c-2.09 2.99-4.305 5.966-6.881 8.526-5.926 5.888-14.005 7.87-20.919 3.436-10.996-7.055-21.305-15.207-31.69-23.177-3.204-2.459-.517-4.509 1.567-6.155 10.419-8.229 20.885-16.398 31.275-24.663 28.063-22.323 56.179-44.58 84.055-67.133 4.508-3.647 12.612-4.462 18.197.257z">
									</path>
									<foreignObject width="125" x="-45" y="42" transform="translate(30) rotate(-49 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Land Acquisition and
														Management System (LAMS)" class="ellipsis" style="color: #fff;">Land Acquisition and
												Management System (LAMS)</span></div>
									</foreignObject>
								</g>
								<g id="shape-3" data-shape="3" data-id="509" class="" data-deg="45" transform="translate(84,370)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M178.708 7.096C138.592 29.654 98.825 51.965 59.113 74.375c-13.384 7.552-20.851 6.934-31.044-4.5A94.577 94.577 0 0 1 14.68 50.362c-4.938-9.61-8.748-19.81-12.858-29.832-1.965-4.793-1.223-6.035 3.961-6.512 13.933-1.281 27.89-2.309 41.83-3.517 22.583-1.956 45.16-3.984 67.741-5.967 16.055-1.409 32.098-3.029 48.177-4.081 7.126-.466 9.359 1.022 15.177 6.643z">
									</path>
									<foreignObject width="125" x="-5" y="26" transform="translate(30) rotate(-22 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Integrated Financial Accounting Management System (IFMS)" class="ellipsis" style="color: #fff;">Integrated Financial
												Accounting Management System (IFMS)</span>
										</div>
									</foreignObject>
								</g>
								<g id="shape-4" data-shape="4" data-id="667" class="" data-deg="67.5" transform="translate(66,306)" data-translatex="16">
									<path fill="#8cbe35" fill-rule="evenodd" d="M174.112 53.367c-7.622.208-13.994.489-20.369.538-30.905.244-61.81.446-92.716.619-12.332.069-24.676.381-36.992-.058-14.244-.507-20.743-6.895-21.982-21.112C1.274 24.412 1.007 15.42.695 6.444.494.626 1.22-.14 6.903.556c12.385 1.517 24.742 3.28 37.104 4.985 17.19 2.37 34.364 4.853 51.563 7.152 17.351 2.318 34.726 4.446 52.084 6.708 4.923.642 7.863 3.321 10.103 8.009 3.386 7.088 7.859 13.662 11.968 20.393 1.004 1.645 2.39 3.057 4.387 5.564z">
									</path>
									<foreignObject width="125" x="-15" y="20" transform="translate(30) rotate(0 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="eCitizen payment /IPS" class="ellipsis" style="color: #fff;">eCitizen payment /IPS </span></div>
									</foreignObject>
								</g>
								<g id="shape-5" data-shape="5" data-id="669" class="" data-deg="90" transform="translate(67,206)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M149.334 105.279c.225 3.408-1.699 4.65-5.412 3.843-29.419-6.398-58.831-12.825-88.269-19.128-12.937-2.769-25.927-5.288-38.899-7.89C5.395 79.825.291 73.142.219 61.521.089 40.704 8.066 22.259 16.538 3.949c1.992-4.307 3.629-4.41 8.297-.834 17.922 13.727 35.793 27.521 53.647 41.337a32329.004 32329.004 0 0 1 64.35 49.94c3.382 2.631 6.846 5.306 6.502 10.887z">
									</path>
									<foreignObject width="125" x="-5" y="53" transform="translate(30) rotate(25 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Supply Chain Management System  " class="ellipsis" style="color: #fff;">Supply Chain Management System </span>
										</div>
									</foreignObject>
								</g>
								<g id="shape-6" data-shape="6" data-id="670" class="" data-deg="112.5" transform="translate(104,134)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M111.962 161.12c-12.475-12.099-24.68-23.798-36.731-35.653a18813.486 18813.486 0 0 1-65.086-64.379 58.745 58.745 0 0 1-6.747-8.029C.114 48.352-.913 42.812 1.952 37.895c4.262-7.313 9.073-14.406 14.439-20.942 4.62-5.628 10.347-10.345 15.578-15.472 2.066-2.025 3.648-2.142 5.426.603 15.35 23.683 30.806 47.298 46.221 70.94 11.001 16.872 21.924 33.794 33.021 50.602 2.938 4.449 3.346 8.418 1.396 13.664-2.732 7.351-3.972 15.258-6.071 23.83z">
									</path>
									<foreignObject width="125" x="10" y="57" transform="translate(30) rotate(49 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Property Management" class="ellipsis" style="color: #fff;">Property Management</span>
										</div>
									</foreignObject>
								</g>
								<g id="shape-7" data-shape="7" data-id="671" class="" data-deg="135" transform="translate(162,85)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M67.461 168.627c-4.483-8.597-8.641-16.347-12.599-24.199C37.908 110.797 20.971 77.157 4.12 43.475-1.872 31.497-.796 24.84 10.486 17.719 20.587 11.345 31.801 6.713 42.617 1.508c4.212-2.026 4.939 1.431 5.491 4.319 2.94 15.406 6.046 30.787 8.613 46.257 5.728 34.532 11.193 69.107 16.704 103.673.831 5.212-2.19 8.716-5.964 12.87z">
									</path>
									<foreignObject width="125" x="20" y="62" transform="translate(30) rotate(71 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Allottee's Online Services Management System" class="ellipsis" style="color: #fff;">Allottee's Online Services
												Management System
											</span></div>
									</foreignObject>
								</g>
								<g id="shape-8" data-shape="8" data-id="673" class="" data-deg="157.5" transform="translate(245,66)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M.139 167.804c1.158-21.015 2.537-42.02 3.421-63.046 1.18-28.044 1.88-56.106 2.977-84.154C7.098 6.281 11.813 1.325 26.116.262 33.233-.267 40.425.254 47.583.228c4.299-.016 3.562 2.955 3.153 5.44-1.83 11.123-3.801 22.222-5.709 33.33-3.016 17.566-6.038 35.129-9.029 52.699-2.989 17.564-5.95 35.133-8.903 52.704-.328 1.954-.205 4.046-.864 5.866-.796 2.197-1.687 4.993-3.438 6.099-6.779 4.28-13.916 7.991-20.92 11.915l-1.734-.477z">
									</path>
									<foreignObject width="125" x="28" y="78" transform="translate(45) rotate(95 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="E-BG (Bank Guarantees)" class="ellipsis" style="color: #fff;">E-BG (Bank Guarantees)</span></div>
									</foreignObject>
								</g>
								<g id="shape-9" data-shape="9" data-id="510" class="" data-deg="180" transform="translate(284,68)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M71.343.792c9.639 1.379 20 5.788 30.232 10.552 3.729 1.736 7.355 3.694 11.055 5.494 3.129 1.523 3.444 3.239 1.103 5.986-22.771 26.718-45.469 53.497-68.165 80.279-10.756 12.692-21.416 25.466-32.231 38.109-2.051 2.397-4.406 4.695-7.046 6.361-1.367.863-3.669.241-5.548.291.15-1.584-.023-3.284.499-4.733 11.624-32.267 23.326-64.505 35.008-96.75 3.791-10.464 7.528-20.948 11.361-31.396C51.606 4.097 57.998-.007 71.343.792z">
									</path>
									<foreignObject width="125" x="25" y="19" transform="translate(30) rotate(117 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Tax and Legal Notice Management System (TLMS)" class="ellipsis" style="color: #fff;">Tax and Legal Notice
												Management System (TLMS)</span></div>
									</foreignObject>
								</g>
								<g id="shape-10" data-shape="10" data-id="511" class="" data-deg="202.5" transform="translate(315,105)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M151.068 26.11c-10.91 8.853-21.081 17.098-31.242 25.352a373053.268 373053.268 0 0 0-78.823 64.043c-7.581 6.161-10.003 5.901-18.357 1.363-5.247-2.851-11.351-4.123-17.072-6.1-1.38-.478-2.764-.945-4.986-1.704 1.584-1.908 2.58-3.346 3.805-4.549 32.532-31.951 65.038-63.928 97.666-95.782 11.454-11.181 16.636-11.455 29.088-1.224 6.791 5.58 12.899 11.994 19.921 18.601z">
									</path>
									<foreignObject width="125" x="-10" y="-8" transform="translate(30) rotate(138 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="E-Tendering / E-RFP" class="ellipsis" style="color: #fff;">E-Tendering / E-RFP</span>
										</div>
									</foreignObject>
								</g>
								<g id="shape-11" data-shape="11" data-id="675" class="" data-deg="225" transform="translate(360,154)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M15.81 100.456c-1.216-.885-3.291-2.088-4.976-3.698-2.078-1.986-3.679-4.473-5.755-6.46-5.914-5.66-5.712-8.519 1.158-13.206 9.577-6.534 19.211-12.988 28.706-19.64 24.12-16.893 48.175-33.879 72.258-50.825.998-.702 2-1.403 3.019-2.073 8.961-5.894 14.296-5.356 21.792 2.45 9.567 9.964 16.046 21.9 20.96 34.641 4.991 12.944 9.446 26.096 14.035 39.192 1.726 4.925.885 6.537-4.286 7.072-12.097 1.253-24.231 2.149-36.349 3.207-22.425 1.958-44.843 4.019-67.278 5.854-11.662.953-23.358 1.482-35.033 2.283-2.409.165-4.794.688-8.251 1.203z">
									</path>
									<foreignObject width="125" x="-20" y="-15" transform="translate(30) rotate(160 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="E-Tendering / E-RFP" class="ellipsis" style="color: #fff;">E-Tendering / E-RFP
											</span></div>
									</foreignObject>
								</g>
								<g id="shape-12" data-shape="12" data-id="676" class="" data-deg="247.5" transform="translate(380,265)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M.127.536C7.857.387 14.98.137 22.103.131 40.38.117 58.657.235 76.935.255 98.41.28 119.885.316 141.36.228c9.817-.041 15.31 3.587 16.204 13.502.951 10.549.219 21.257-.045 31.888-.019.765-2.395 2.299-3.386 2.092-37.659-7.861-75.28-15.904-112.916-23.872-9.075-1.921-18.15-3.895-27.295-5.417C7.824 17.405 3.797 14.739 2.591 8.38 2.144 6.023 1.163 3.767.127.536z">
									</path>
									<foreignObject width="125" x="-35" y="35" transform="translate(30) rotate(185 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Supply Chain Management System" class="ellipsis" style="color: #fff;">Supply Chain Management System</span></div>
									</foreignObject>
								</g>
								<g id="shape-13" data-shape="13" data-id="677" class="" data-deg="270" transform="translate(385,295)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M147.672 49.702c-.946 12.843-4.436 23.681-9.157 34.173-2.003 4.452-4.177 8.833-5.999 13.356-1.491 3.703-3.153 4.521-6.775 2.133-29.675-19.562-59.452-38.97-89.197-58.426-9.064-5.929-18.008-12.051-27.225-17.73C2.162 18.798 1.051 11.899.881 4.6.798.995 3.134.117 6.539.993c31.986 8.222 63.994 16.363 95.991 24.543 11.059 2.829 22.122 5.642 33.155 8.571 11.731 3.114 11.614 7.441 11.987 15.595z">
									</path>
									<foreignObject width="125" x="-35" y="11" transform="translate(30) rotate(205 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Allottee's Online Services Management System" class="ellipsis" style="color: #fff;">Allottee's Online Services
												Management System</span></div>
									</foreignObject>
								</g>
								<g id="shape-14" data-shape="14" data-id="678" class="" data-deg="292.5" transform="translate(380,325)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M3.039.348c5.573 5.636 10.757 10.553 15.575 15.806 27.646 30.141 55.192 60.374 82.799 90.549 8.339 9.115 8.382 12.155.072 21.143-1.969 2.128-3.944 4.26-5.771 6.508-2.633 3.237-4.81 2.968-7.179-.37-6.448-9.085-13.011-18.088-19.555-27.104C47.733 77.61 26.499 48.329 5.196 19.1 1.174 13.582-.873 7.954 3.039.348z">
									</path>
									<foreignObject width="125" x="-45" y="-19" transform="translate(30) rotate(230 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Integrated Financial
                                                                                    Accounting Management System (IFMS)" class="ellipsis" style="color: #fff;">Integrated Financial
												Accounting Management System (IFMS)</span>
										</div>
									</foreignObject>
								</g>
								<g id="shape-15" data-shape="15" data-id="679" class="" data-deg="315" transform="translate(370,345)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M5.148.627c2.554 4.819 4.637 8.657 6.637 12.539 20.33 39.465 40.647 78.937 60.965 118.408 3.362 6.532 3.213 10.508-2.7 14.864-7.308 5.383-15.333 9.834-23.259 14.314-3.87 2.186-5.769-.311-6.766-4.025a10143.918 10143.918 0 0 0-14.503-53.42C17.258 73.17 9.015 43.027.597 12.933-.799 7.941 1.671 4.916 5.148.627z">
									</path>
									<foreignObject width="125" x="-62" y="-35" transform="translate(30) rotate(249 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Textiles &amp; Apparel" class="ellipsis" style="color: #fff;">Grievance Management System </span></div>
									</foreignObject>
								</g>
								<g id="shape-16" data-shape="16" data-id="686" class="" data-deg="337.5" transform="translate(335,364)">
									<path fill="#8cbe35" fill-rule="evenodd" d="M22.722.622c.734 9.057 1.512 17.372 2.062 25.701 1.495 22.633 2.908 45.272 4.327 67.909 1.181 18.842 2.436 37.68 3.437 56.531.513 9.654-1.839 12.735-11.291 15.335-4.677 1.286-9.485 2.146-14.272 2.972-6.102 1.053-6.879.271-6.601-6.072.55-12.498 1.148-24.993 1.685-37.492A51216.69 51216.69 0 0 0 5.124 53.28c.456-10.969 1.049-21.938 1.2-32.911.082-5.961 2.606-10.144 7.347-13.35 2.765-1.87 5.455-3.848 9.051-6.397z">
									</path>
									<foreignObject width="125" x="-85" y="-35" transform="translate(30) rotate(270 40 30)" height="50">
										<div xmlns="http://www.w3.org/1999/xhtml"><span title="Tourism &amp; Hospitality" class="ellipsis" style="color: #fff;">Supply Chain Management System</span></div>
									</foreignObject>
								</g>
							</g>
						</svg>
						<div class="outer-circle">
							<div class="inner-circle">
								<div class="rotation-arrows"><span class="upBtn">&nbsp;</span><span class="downBtn">&nbsp;</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container laptop-hide" style="justify-content: space-around;">
					<div class="row col-lg-12 mb-3" style="justify-content: space-evenly;">
						<a href="grievance" class="button-big col-sm-5 col-md-5 mb-1"><span><img src="deprtmnt-icons/grievance-mgmt.png" alt=""></span><span>Grievance
								Management</span></a>
						<a href="land-acquisition" class="button-big col-sm-5 col-md-5 mb-1"><span><img src="deprtmnt-icons/land-acquisition.png" alt=""></span><span>Land
								Acquisition</span></a>
						<a href="e-bg" class="button-big col-sm-5 col-md-5 mb-1"><span><img src="deprtmnt-icons/Ebg.png" alt=""></span><span>E-BG (Bank
								Guarantees)</span></a>
						<a href="integrated-financial" class="button-big col-sm-5 col-md-5 mb-1"><span><img src="deprtmnt-icons/erfp.png" alt=""></span><span>Integrated
								Financial</span></a>
						<a href="supply-chain" class="button-big col-sm-5 col-md-5 mb-1"><span><img src="deprtmnt-icons/supply-chain.png" alt=""></span><span>Supply Chain
								Management</span></a>
						<a href="tax" class="button-big col-sm-5 col-md-5 mb-1"><span><img src="deprtmnt-icons/tax.png" alt=""></span><span>Tax and Legal Notice
								Management</span></a>
						<a href="e-services" class="button-big col-sm-5 col-md-5 mb-1"><span><img src="deprtmnt-icons/e-citizen.png" alt=""></span><span>eCitizen
								payment</span></a>
						<a href="urban-citizen" class="button-big col-sm-5 col-md-5 mb-1"><span><img src="deprtmnt-icons/allotee.png" alt=""></span><span>Allottee's Services
								Management</span></a>
						<a href="property-managment" class="button-big col-sm-5 col-md-5 mb-1"><span><img src="deprtmnt-icons/property-managment.png" alt=""></span><span>Property
								Management</span></a>
						<a href="e-tendering" class="button-big col-sm-5 col-md-5 mb-1"><span><img src="deprtmnt-icons/e-citizen.png" alt=""></span><span>E-Tendering</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- wheel upto here -->
	<div id="legacy" class="posrel-block mt-4" style="position: relative;">
		<div class="section over-hide pb-4 height-video-m" id="footer" style="height: 90vh;">
			<div id="video-wrap" class="parallax-top">
				<video class="video_background" preload="auto" autoplay loop="loop" muted="muted" playsinline style="width: 100%;height: 100%;object-fit: fill;">
					<source src="<?php echo $website_cdn_ath; ?>video/map-land-video.mp4" type="video/mp4">
				</video>
			</div>
			<div class="section-1400 z-bigger">
				<div class="container-fluid">
					<div class="col-12 text-center mb-1">
						<h3 class="title-text-top"><span class="mobile-heading-font font-weight-700">Legacy of
								Bundelkhand: A Treasure
								for Investors!</span>
						</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="posa-popup" style="position: absolute;
                     z-index: 10;
                    left: 64px;
                     bottom: 48px;">
			<a id="popupButton" class="cta">
				<span>Explore</span>
				<svg width="13px" height="10px" viewBox="0 0 13 10">
					<path d="M1,5 L11,5"></path>
					<polyline points="8 1 12 5 8 9"></polyline>
				</svg>
			</a>
			<div id="popupContainer">
				<div id="popupContent" style="width: 576px;
                             display: flex;
                             align-items: center;
                             justify-content: center;border-radius: 8px;overflow: hidden;">
					<div class="close2">
						<span id="closeButton"><i class="fa-solid fa-circle-xmark" style="color: #e66565;"></i></span>

						<div id="popupButtonNew">
							<div id="popupButtonNew">

								<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100.317mm" height="80.916mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 21365.4 15910.38" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
									<defs>
										<font id="FontID0" horiz-adv-x="709" font-variant="normal" style="fill-rule:nonzero" font-style="normal" font-weight="700">
											<font-face font-family="Lato">
												<font-face-src>
													<font-face-name name="Lato Bold" />
												</font-face-src>
											</font-face>
											<missing-glyph>
												<path d="M0 0z" />
											</missing-glyph>
											<glyph unicode="A" horiz-adv-x="709" d="M708.504 0l-103.999 0c-11.6751,0 -21.1642,2.99743 -28.6661,8.8267 -7.50186,5.84582 -12.9999,12.9999 -16.3451,21.6776l-53.9869 147.504 -299.511 0 -53.9869 -147.504c-2.68279,-7.66747 -7.83307,-14.6725 -15.6827,-20.9986 -7.83307,-6.34263 -17.4878,-9.50567 -28.8317,-9.50567l-104.496 0 283.994 722.994 137.501 0 284.011 -722.994zm-467.997 272.501l230.488 0 -88.002 240.507c-3.99106,10.6649 -8.32988,23.317 -13.1655,37.824 -4.81908,14.5069 -9.65472,30.1731 -14.3247,47.164 -4.67003,-16.991 -9.17446,-32.8227 -13.6623,-47.4952 -4.50443,-14.6725 -9.00886,-27.5068 -13.3477,-38.5029l-87.9854 -239.497z" />
											<glyph unicode="B" horiz-adv-x="651" d="M72.9934 0l0 723.002 249.504 0c47.333,0 87.8344,-4.50951 121.336,-13.4949 33.5016,-9.00219 60.9961,-21.8408 82.5004,-38.4991 21.5043,-16.6751 37.1698,-36.8332 47.1647,-60.5082 9.99495,-23.6581 15.0093,-50.3281 15.0093,-79.9933 0,-17.0116 -2.50715,-33.1651 -7.50463,-48.6791 -4.99748,-15.4972 -12.6704,-30.0017 -23.1701,-43.4966 -10.4997,-13.4949 -23.8264,-25.8287 -39.9966,-36.8332 -16.1703,-11.0045 -35.504,-20.3264 -57.8327,-27.9993 99.3269,-22.3288 148.999,-76.0054 148.999,-160.996 0,-30.6747 -5.8388,-58.9938 -17.4996,-85.0076 -11.6776,-25.997 -28.6724,-48.3258 -51.0012,-67.1546 -22.3288,-18.8457 -49.8401,-33.6699 -82.5004,-44.3379 -32.6603,-10.668 -69.9983,-16.002 -111.997,-16.002l-273.01 0zm134.511 316.995l0 -211.997 136.497 0c25.0042,0 46.0037,2.99512 62.8302,9.00219 16.8433,6.00707 30.3382,13.9997 40.5014,23.9946 10.1632,10.0118 17.4996,21.6726 21.9923,34.9992 4.50951,13.3434 6.68013,27.5114 6.68013,42.5038 0,15.6655 -2.50715,29.8334 -7.50463,42.3355 -4.99748,12.5021 -12.8386,23.1701 -23.5066,32.004 -10.668,8.83392 -24.3311,15.4972 -40.9894,20.1582 -16.6751,4.67777 -36.8332,6.99983 -60.5082,6.99983l-135.992 0zm0 93.0002l107.488 0c45.6672,0 80.3466,8.34595 104.005,25.0042 23.6749,16.6751 35.504,43.16 35.504,79.5053 0,37.6577 -10.668,64.496 -32.004,80.4981 -21.336,16.002 -54.6694,23.9946 -100,23.9946l-114.992 0 0 -209.002z" />
											<glyph unicode="C" horiz-adv-x="670" d="M570.003 170.492c7.32511,0 13.671,-2.82459 19.0001,-8.49261l52.9894 -57.5087c-29.3193,-36.3243 -65.3234,-64.1559 -108.163,-83.495 -42.8208,-19.3202 -94.3226,-28.9992 -154.336,-28.9992 -53.6673,0 -101.836,9.17051 -144.657,27.5115 -42.8397,18.3222 -79.5029,43.8188 -109.839,76.49 -30.3361,32.6711 -53.4978,71.6693 -69.6733,116.995 -16.1567,45.3441 -24.3292,94.831 -24.3292,148.498 0,54.3452 9.00104,104.171 27.0031,149.346 18.0021,45.1558 43.3293,84.0034 76.0004,116.656 32.6711,32.6711 71.8388,58.1678 117.334,76.3393 45.4948,18.1715 95.6595,27.1726 150.664,27.1726 53.6673,0 100.668,-8.66208 140.834,-25.8356 40.1657,-17.343 74.4939,-40.1657 103.173,-68.6753l-45.0052 -62.4988c-2.67395,-3.99209 -6.00697,-7.49459 -10.1685,-10.4887 -4.16157,-3.0129 -9.99906,-4.50052 -17.3242,-4.50052 -7.66406,0 -15.4976,2.99407 -23.5006,9.00104 -8.00301,5.98814 -18.1715,12.4847 -30.5056,19.4897 -12.3341,7.00499 -27.8317,13.5016 -46.6623,19.5085 -18.8306,5.98814 -42.8397,9.00104 -71.8388,9.00104 -33.9893,0 -65.1728,-5.83749 -93.6635,-17.682 -28.5096,-11.8256 -53.0082,-28.8297 -73.4959,-50.8238 -20.5065,-21.8247 -36.5126,-48.6583 -47.9992,-80.1619 -11.5055,-31.3341 -17.343,-66.8299 -17.343,-105.998 0,-40.6741 5.83749,-76.8478 17.343,-108.502 11.4867,-31.6731 27.0031,-58.1678 46.6623,-79.8418 19.6592,-21.6552 42.8397,-38.3391 69.5038,-49.8258 26.6642,-11.5055 55.3244,-17.1735 85.9994,-17.1735 18.3222,0 34.9873,0.998023 49.8258,2.99407 14.8385,2.01488 28.5096,5.17842 40.9943,9.50946 12.5035,4.33104 24.348,9.82958 35.5145,16.6651 11.1666,6.83551 22.1636,15.3281 33.1607,25.3272 3.33302,3.0129 6.83551,5.3479 10.5075,7.17447 3.65314,1.82657 7.66406,2.82459 11.9951,2.82459z" />
											<glyph unicode="D" horiz-adv-x="747" d="M714.992 361.501c0,-53.0035 -8.83392,-101.666 -26.4849,-146.004 -17.6678,-44.3379 -42.5038,-82.5004 -74.5078,-114.504 -32.004,-31.9872 -70.5031,-56.8232 -115.497,-74.491 -44.9941,-17.6678 -94.8343,-26.5018 -149.504,-26.5018l-276.005 0 0 723.002 276.005 0c54.6694,0 104.51,-8.83392 149.504,-26.67 44.9941,-17.8361 83.4932,-42.6721 115.497,-74.491 32.004,-31.8358 56.84,-70.0151 74.5078,-114.336 17.651,-44.3379 26.4849,-93.0002 26.4849,-146.004zm-137.489 0c0,39.6601 -5.33401,75.3323 -16.002,106.832 -10.668,31.4992 -25.8287,58.1693 -45.4989,79.9933 -19.6702,21.8408 -43.4966,38.5159 -71.6641,50.1767 -28.1676,11.6608 -60.0034,17.4996 -95.3391,17.4996l-140.501 0 0 -509.002 140.501 0c35.3357,0 67.1715,5.8388 95.3391,17.4996 28.1676,11.6608 51.9939,28.5041 71.6641,50.3281 19.6702,21.8408 34.8309,48.5109 45.4989,80.0101 10.668,31.4992 16.002,67.0032 16.002,106.663z" />
											<glyph unicode="H" horiz-adv-x="755" d="M683.001 0l-135.497 0 0 316.006 -339.008 0 0 -316.006 -135.497 0 0 722.994 135.497 0 0 -310.988 339.008 0 0 310.988 135.497 0 0 -722.994z" />
											<glyph unicode="I" horiz-adv-x="314" d="M224.493 0l-135 0 0 722.994 135 0 0 -722.994z" />
											<glyph unicode="J" horiz-adv-x="436" d="M363.998 257.001c0,-40.6724 -5.00124,-77.3371 -15.0037,-109.994 -9.98592,-32.6737 -24.824,-60.5117 -44.6634,-83.5141 -19.8228,-22.9858 -44.6634,-40.6558 -74.3231,-52.9933 -29.6762,-12.3375 -64.1716,-18.498 -103.503,-18.498 -18.0012,0 -35.6711,1.15923 -53.0099,3.32864 -17.3222,2.16941 -35.4889,5.49805 -54.5003,10.1681l7.00505 80.0033c0.662416,7.33626 3.49425,13.3311 8.32988,17.8356 4.83564,4.50443 11.8407,6.65728 21.1642,6.65728 5.68022,0 13.1655,-1.15923 22.34,-3.49425 9.1579,-2.33502 20.6674,-3.49425 34.6609,-3.49425 19.0113,0 35.8367,2.83183 50.5092,8.32988 14.656,5.49805 26.9935,14.1591 36.8303,26.1654 9.83688,12.0063 17.1731,27.6724 22.1578,46.8328 5.00124,19.1604 7.50186,42.3284 7.50186,69.6696l0 468.991 134.504 0 0 -465.993z" />
											<glyph unicode="K" horiz-adv-x="697" d="M211.995 419.998l31.5036 0c12.673,0 23.1617,1.82657 31.5036,5.32907 8.32313,3.5025 15.4976,9.00104 21.5046,16.6651l199.492 252.5c8.34196,10.677 17.1735,18.1715 26.344,22.3331 9.15168,4.1804 20.6572,6.17644 34.6483,6.17644l116.015 0 -243.499 -300.499c-7.68289,-9.33999 -15.008,-17.1735 -22.013,-23.5006 -6.98616,-6.32709 -14.4996,-11.5055 -22.5026,-15.4976 11.0159,-4.01092 21.015,-9.67894 29.8465,-17.004 8.83156,-7.32511 17.3242,-16.6651 25.6661,-28.0011l250.993 -338.499 -118.991 0c-16.006,0 -27.8317,2.335 -35.6652,6.83551 -7.83354,4.50052 -14.4996,10.9971 -19.8475,19.6592l-204.501 266.999c-6.66604,8.68092 -14.1606,15.008 -22.5026,18.8306 -8.32313,3.84145 -20.1676,5.66802 -35.4957,5.66802l-42.5007 0 0 -317.993 -134.488 0 0 724 134.488 0 0 -304.002z" />
											<glyph unicode="L" horiz-adv-x="516" d="M207.5 110.998l289.507 0 0 -110.998 -424.004 0 0 723.005 134.496 0 0 -612.007z" />
											<glyph unicode="M" horiz-adv-x="929" d="M436.002 299.992c5.66366,-10.6649 10.9961,-21.661 15.8317,-33.1539 4.83564,-11.5095 9.50567,-23.168 14.1591,-34.8431 4.67003,12.0063 9.50567,23.8304 14.5069,35.5055 5.00124,11.6585 10.3337,22.8368 15.9974,33.5017l214.01 400.497c2.66623,5.00124 5.49805,9.00886 8.32988,12.0063 2.83183,2.99743 5.99487,5.16685 9.48911,6.49168 3.51081,1.34139 7.33626,2.16941 11.6751,2.50062 4.33883,0.331208 9.50567,0.496812 15.5005,0.496812l101.499 0 0 -722.994 -118.506 0 0 467.003c0,8.66109 0.331208,18.1668 0.844581,28.5005 0.496812,10.3337 1.15923,20.833 2.15285,31.4979l-218.498 -410.002c-5.00124,-9.34007 -11.4929,-16.4942 -19.4916,-21.661 -7.99868,-5.16685 -17.3387,-7.83307 -28.0036,-7.83307l-18.498 0c-10.6649,0 -20.005,2.66623 -28.0036,7.83307 -7.99868,5.16685 -14.4904,12.3209 -19.4916,21.661l-221.512 411.493c1.34139,-10.9961 2.33502,-21.661 2.83183,-32.1603 0.513373,-10.4993 0.678977,-20.3362 0.678977,-29.3285l0 -467.003 -118.506 0 0 722.994 101.499 0c5.99487,0 11.1617,-0.165604 15.5005,-0.496812 4.33883,-0.331208 8.32988,-1.15923 11.8407,-2.50062 3.49425,-1.32483 6.65728,-3.49425 9.65472,-6.49168 3.01399,-2.99743 5.84582,-7.00505 8.51205,-12.0063l215.997 -401.507z" />
											<glyph unicode="N" horiz-adv-x="755" d="M143.496 722.994c6.01143,0 10.9961,-0.165604 15.0037,-0.662416 4.00762,-0.496812 7.66747,-1.49044 10.8305,-2.99743 3.16304,-1.507 6.17703,-3.65985 9.17446,-6.50824 2.99743,-2.83183 6.32607,-6.65728 10.0025,-11.3273l379.498 -483.498c-1.34139,11.6585 -2.16941,23.168 -2.66623,34.3297 -0.513373,11.1617 -0.844581,21.4954 -0.844581,31.1667l0 439.497 118.506 0 0 -722.994 -69.504 0c-10.6649,0 -19.4916,1.6726 -26.4966,5.00124 -7.00505,3.32864 -13.8279,9.34007 -20.5018,18.0012l-377.991 481.494c0.993624,-10.6649 1.82164,-21.1642 2.31846,-31.6635 0.513373,-10.4993 0.678977,-20.1706 0.678977,-28.8317l0 -444.001 -118.506 0 0 722.994 70.4976 0z" />
											<glyph unicode="O" horiz-adv-x="799" d="M766.5 361.491c0,-52.9894 -8.83156,-101.987 -26.4947,-147.161 -17.6631,-45.1558 -42.5007,-84.3235 -74.5128,-117.334 -31.9932,-32.9912 -70.5018,-58.6574 -115.488,-77.1679 -45.0052,-18.4917 -94.831,-27.8317 -149.496,-27.8317 -54.6841,0 -104.51,9.33999 -149.666,27.8317 -45.1747,18.5105 -83.8339,44.1766 -116.015,77.1679 -32.1627,33.0101 -57.1698,72.1778 -74.8329,117.334 -17.6631,45.1747 -26.4947,94.1719 -26.4947,147.161 0,53.0082 8.83156,102.175 26.4947,147.35 17.6631,45.1558 42.6702,84.154 74.8329,117.164 32.1815,32.9912 70.8408,58.8269 116.015,77.3374 45.1558,18.4917 94.9816,27.6622 149.666,27.6622 54.6653,0 104.491,-9.33999 149.496,-28.0011 44.9863,-18.6611 83.495,-44.3461 115.488,-77.1679 32.0121,-32.8406 56.8496,-71.8388 74.5128,-116.995 17.6631,-45.1747 26.4947,-94.3414 26.4947,-147.35zm-138.01 -0.150645c0,39.4878 -5.15959,75.153 -15.6482,106.487 -10.5075,31.5036 -25.685,58.3373 -45.3441,80.1808 -19.6592,21.9942 -43.4987,38.8287 -71.6693,50.4849 -28.1706,11.675 -59.9944,17.5125 -95.3206,17.5125 -35.3451,0 -67.1688,-5.83749 -95.5089,-17.5125 -28.3401,-11.6562 -52.3303,-28.4907 -72.1589,-50.4849 -19.8475,-21.8435 -35.1756,-48.6771 -45.8337,-80.1808 -10.677,-31.3341 -16.006,-66.9993 -16.006,-106.487 0,-39.6761 5.32907,-75.3413 16.006,-106.675 10.6581,-31.5036 25.9863,-58.1678 45.8337,-79.9925 19.8286,-21.8435 43.8188,-38.5086 72.1589,-50.1648 28.3401,-11.675 60.1638,-17.5125 95.5089,-17.5125 35.3262,0 67.15,5.83749 95.3206,17.5125 28.1706,11.6562 52.0102,28.3213 71.6693,50.1648 19.6592,21.8247 34.8366,48.4888 45.3441,79.9925 10.4887,31.3341 15.6482,66.9993 15.6482,106.675z" />
											<glyph unicode="P" horiz-adv-x="624" d="M211.993 255.006l0 -254.515 -134.496 0 0 723.514 235.509 0c48.3302,0 90.1672,-5.66836 125.494,-17.0051 35.3263,-11.3367 64.4929,-27.166 87.4998,-47.5054 23.0069,-20.3219 39.9944,-44.8204 50.9977,-73.1622 11.0033,-28.3242 16.4961,-59.3335 16.4961,-92.9926 0,-35.1684 -5.8263,-67.1779 -17.4964,-96.5025 -11.6701,-29.1666 -29.1666,-54.1741 -52.4893,-75.3383 -23.3403,-21.0063 -52.5069,-37.3269 -87.4998,-48.9971 -35.0104,-11.6701 -76.0051,-17.4964 -123.002,-17.4964l-101.013 0zm0 104.996l101.013 0c24.6565,0 46.1541,3.15884 64.4929,9.33612 18.3388,6.15973 33.5012,14.9869 45.5048,26.4991 12.0036,11.4947 20.9887,25.4988 26.9905,41.995 6.00179,16.6716 9.00269,34.9929 9.00269,55.5078 0,19.3216 -3.0009,36.818 -9.00269,52.4893 -6.00179,15.6713 -14.9869,29.1666 -26.9905,40.1699 -12.0036,11.0033 -27.166,19.3391 -45.5048,25.1654 -18.3388,5.84385 -39.8364,8.82719 -64.4929,8.82719l-101.013 0 0 -259.99z" />
											<glyph unicode="R" horiz-adv-x="655" d="M211.993 282.997l0 -282.505 -134.496 0 0 723.514 220.504 0c49.3305,0 91.6589,-5.17698 126.827,-15.3379 35.1684,-10.1609 64.0015,-24.3406 86.4995,-42.6618 22.4979,-18.5143 39.0116,-40.3454 49.506,-65.8442 10.4944,-25.6568 15.6713,-53.6651 15.6713,-84.3234 0,-24.4985 -3.50982,-47.5054 -10.6698,-69.1785 -7.16003,-21.6556 -17.4964,-41.3281 -31.0092,-59.0001 -13.4953,-17.8299 -30.1669,-33.3257 -49.9974,-46.663 -19.8305,-13.3373 -42.5039,-23.9896 -67.8272,-31.992 17.0051,-9.66955 31.6586,-23.4982 43.9956,-41.5036l181.001 -267.009 -121.001 0c-11.6701,0 -21.4976,2.33403 -29.658,7.00209 -8.17788,4.66806 -15.18,11.3367 -20.8308,20.006l-152.01 231.508c-5.66836,8.6517 -11.8281,14.829 -18.6722,18.4967 -6.8266,3.66776 -16.9875,5.49287 -30.3248,5.49287l-57.5084 0zm0 97.0114l84.0075 0c25.3409,0 47.5054,3.15884 66.3356,9.49406 18.8302,6.33522 34.326,15.1624 46.5051,26.3236 12.1615,11.1788 21.1642,24.3406 27.166,39.6785 5.98424,15.3204 8.98514,32.1675 8.98514,50.4887 0,36.6776 -11.986,64.8439 -36.1511,84.4989 -24.1827,19.6725 -61.1761,29.5 -110.84,29.5l-86.0081 0 0 -239.984z" />
											<glyph unicode="S" horiz-adv-x="536" d="M460.495 591.008c-3.65985,-7.33626 -7.83307,-12.5031 -12.6687,-15.5005 -4.81908,-3.01399 -10.6649,-4.50443 -17.3222,-4.50443 -6.67384,0 -14.1757,2.66623 -22.5056,7.83307 -8.32988,5.16685 -18.1668,10.8305 -29.4941,17.1566 -11.3439,6.34263 -24.5094,12.1719 -39.6787,17.3387 -15.1528,5.16685 -33.1539,7.66747 -53.8213,7.66747 -18.6636,0 -34.8431,-2.16941 -48.671,-6.65728 -13.8279,-4.50443 -25.503,-10.8471 -34.9921,-18.8457 -9.50567,-7.99868 -16.6763,-17.4878 -21.3464,-28.6661 -4.65347,-11.1617 -6.98849,-23.4992 -6.98849,-36.8303 0,-16.8254 4.81908,-31.0011 14.3247,-42.3284 9.50567,-11.3439 22.0088,-20.9986 37.6749,-28.9973 15.6661,-7.99868 33.5017,-15.1693 53.4901,-21.512 20.005,-6.32607 40.5067,-13.1655 61.3397,-20.3362 20.833,-6.98849 41.1692,-15.3184 61.1576,-24.824 20.005,-9.50567 37.8405,-21.4954 53.5067,-36.0023 15.6661,-14.5069 28.3349,-32.3259 37.8405,-53.1589 9.48911,-20.9986 14.1591,-46.5016 14.1591,-76.5091 0,-32.6571 -5.49805,-63.1614 -16.6598,-91.6618 -11.1783,-28.5005 -27.5068,-53.3411 -49.0022,-74.5053 -21.512,-21.1642 -47.843,-37.824 -78.8441,-49.9959 -31.0011,-12.1719 -66.49,-18.1668 -106.5,-18.1668 -22.9858,0 -45.657,2.33502 -67.997,6.83945 -22.3234,4.48787 -43.6698,10.8305 -64.1716,19.1604 -20.4852,8.32988 -39.6622,18.3324 -57.4977,29.9909 -17.8356,11.6751 -33.8329,24.675 -47.8264,38.9998l38.9998 64.5028c3.65985,4.67003 8.16428,8.51205 13.3311,11.6751 5.16685,3.16304 10.8305,4.83564 17.1731,4.83564 8.32988,0 17.3222,-3.51081 26.9935,-10.3337 9.67128,-6.83945 21.1642,-14.3413 34.3297,-22.6712 13.1655,-8.32988 28.6661,-15.9974 46.5016,-22.8368 17.8356,-6.82289 39.1654,-10.1681 64.1716,-10.1681 38.3373,0 67.997,9.17446 88.9956,27.3412 20.9986,18.1668 31.4979,44.1666 31.4979,78.1651 0,18.9948 -4.65347,34.4953 -14.1591,46.5016 -9.50567,11.9897 -22.1744,22.1578 -37.8405,30.3221 -15.6661,8.18084 -33.5017,15.0037 -53.4901,20.6674 -20.005,5.68022 -40.3411,11.8407 -61.0085,18.5145 -20.6674,6.65728 -41.0036,14.656 -60.992,23.996 -20.005,9.32351 -37.8405,21.4954 -53.5067,36.4991 -15.6661,15.0037 -28.1692,33.8329 -37.6584,56.3385 -9.50567,22.489 -14.3413,50.1615 -14.3413,83.1663 0,26.331 5.33245,51.9997 15.8317,76.9893 10.4993,25.0062 25.8342,47.164 46.0048,66.5066 20.1706,19.326 44.829,34.8265 74.1575,46.5016 29.345,11.6585 62.8467,17.4878 100.505,17.4878 42.6762,0 82.0071,-6.65728 118.009,-20.154 35.9858,-13.3311 66.6556,-32.1769 91.993,-56.3385l-33.0049 -63.4926z" />
											<glyph unicode="T" horiz-adv-x="594" d="M582.506 724l0 -111.006 -217.512 0 0 -612.485 -134.488 0 0 612.485 -218.51 0 0 111.006 570.511 0z" />
											<glyph unicode="U" horiz-adv-x="728" d="M364.003 108.997c25.9902,0 49.3305,4.33463 69.8278,13.0039 20.4973,8.66925 37.8358,20.8308 51.998,36.5021 14.1621,15.6713 25.0075,34.6595 32.5009,56.824 7.51101,22.34 11.1612,47.3475 11.1612,75.0048l0 432.673 134.514 0 0 -433.006c0,-42.9953 -6.84415,-82.6738 -20.6728,-119.158 -13.8287,-36.5021 -33.8347,-68.0027 -59.8249,-94.5019 -26.0078,-26.4991 -57.5084,-47.172 -94.5019,-62.0009 -37.011,-14.829 -78.6726,-22.34 -125.002,-22.34 -46.3296,0 -88.0087,7.51101 -125.002,22.34 -36.9935,14.829 -68.3362,35.5018 -94.1684,62.0009 -25.8323,26.4991 -45.6627,57.9998 -59.4914,94.5019 -13.8462,36.4846 -20.8483,76.1631 -20.8483,119.158l0 433.006 134.514 0 0 -432.164c0,-27.6749 3.8257,-52.6824 11.3192,-75.0048 7.51101,-22.1645 18.1809,-41.3281 32.1675,-57.1749 14.0042,-15.8293 31.3427,-27.9908 51.84,-36.6601 20.4973,-8.66925 43.6621,-13.0039 69.6699,-13.0039z" />
										</font>
										<style type="text/css">
											<![CDATA[
											@font-face {
												font-family: "Lato";
												font-variant: normal;
												font-style: normal;
												font-weight: bold;
												src: url("#FontID0") format(svg)
											}

											.fil0 {
												fill: black
											}

											.fil3 {
												fill: #1A1A1A
											}

											.fil5 {
												fill: #333333
											}

											.fil4 {
												fill: #579476
											}

											.fil8 {
												fill: #5BE388
											}

											.fil1 {
												fill: #66FFCC
											}

											.fil7 {
												fill: #AFD43F
											}

											.fil9 {
												fill: #B2F259
											}

											.fil2 {
												fill: #E3E364
											}

											.fil6 {
												fill: #FF6924
											}

											.fil10 {
												fill: white
											}

											.fnt2 {
												font-weight: bold;
												font-size: 563.59px;
												font-family: 'Lato'
											}

											.fnt3 {
												font-weight: bold;
												font-size: 604.75px;
												font-family: 'Lato'
											}

											.fnt1 {
												font-weight: bold;
												font-size: 630.72px;
												font-family: 'Lato'
											}

											.fnt0 {
												font-weight: bold;
												font-size: 640.86px;
												font-family: 'Lato'
											}

											.fnt4 {
												font-weight: bold;
												font-size: 693.86px;
												font-family: 'Lato'
											}
											]]>
										</style>
									</defs>
									<g id="Layer_x0020_1">
										<metadata id="CorelCorpID_0Corel-Layer" />
										<path class="fil0" d="M21365.4 9016.45l0 -864.48c-81.97,19.86 -205.58,82.64 -289.54,117.45 -167.81,69.61 -130.76,48.09 -286.9,-29.52 -165.38,-82.22 -122.96,-32.95 -182.03,-221.41 -19.53,-62.29 -73.2,-256.35 -102.45,-296.73 -136.34,-3.05 -278.06,29.39 -442.41,17.37 -1083.83,-79.16 -460.18,-396.82 -1053.89,-419.64 -3.08,-55.99 194.37,-390.07 225.89,-486.41 -35.67,-44.47 -190.13,-144.72 -251.13,-186.34 -153.83,-104.95 -90.64,-112.19 -329.95,-109.67 -105.99,1.11 -91.38,-20.64 -147.6,-74.48l-234.11 -207.24c-55.71,-52.87 -51.88,-79.18 -133.15,-106.84 51.81,447.04 -63.48,432.54 -183.25,672.77 -92.38,-3.86 -161.95,-79.44 -261.67,-27.17 -153.5,80.49 -527.36,747.97 -952.16,981.51 -85.67,47.1 -204.3,71.56 -231.38,95.41 44.26,119.56 223.17,457.2 229.94,547.06l-221.29 3.04c-36.92,95.11 -57.84,162.95 -0.31,222.72 33.18,34.46 137.1,132.04 146.19,168.6 -451.02,49.65 -360.69,-39.08 -488.66,187.36 20.48,45.84 109.4,147.56 142.53,182.25 54.6,57.19 169.54,30.63 272.37,28.64 168.62,-3.27 145.7,-0.17 238.45,83 32.32,28.99 137.67,144.73 177.1,163.28 33.14,-67.29 52.43,-496.89 67.15,-611.04 156.65,-15.68 395.07,-36.29 365.12,153.72 -10.23,64.9 -66.8,119.12 -98.81,165.07 -38.83,55.71 -36.55,139.54 -47.58,222.21 -49.28,369.1 12.09,309.12 -140.93,393.82 -253.36,140.21 -81.69,209.06 -37.22,308.9 -79.26,139.57 -165.98,129.11 -244.06,227.38 -78,98.15 -54.13,219.9 62.35,313.75 84.2,67.84 113.25,27.78 326.86,-55.77 355.11,-138.88 325.63,-158.59 435.65,-70.71 89.05,71.11 58.22,128.81 297.48,127.73 99.33,-0.45 162.12,16.05 233.57,-36.04 204.4,-149.03 92.46,-178.13 475.76,42.75 59.29,34.17 269.95,154.7 315.68,161.38 46.22,-73.95 94.9,-273.19 142.73,-317.14l210.29 125.35c45.22,-613.31 401.5,-792.09 379.45,-1515.66 46.54,-33.53 206.84,-97.91 268.08,-105.98l63.23 180.33c90.39,-11.31 222.04,-202.14 313.69,-231.84 87.09,140.08 300.12,373.33 421.67,471.19 96.29,77.52 178.16,143.37 272.57,30.32 112.19,-134.32 52.19,-170.16 22.94,-353.21l253.71 -67.02z" />
										<path class="fil0" d="M13869.34 3795.37c24.76,79.49 115.88,151.47 121.41,227.43 -64.61,42.01 -38.14,-29.76 -111.87,44.53l-251.52 253.87c10.8,54.53 7.91,8.59 32.72,71.41 -101.07,-2.17 -267.69,-24.29 -326.89,32.38 112.11,212.81 606.46,322.73 592.32,661.69 -92.96,56.58 -142.56,36.02 -174.91,149.47 -29.45,103.32 0.3,217.23 -15.69,323.13 -115.67,81.26 -206.88,95.69 -292.17,199.73 -106.97,130.47 -70.43,230.49 -83.12,422.11l-180.45 -0.32c-45,296.55 72.09,392.92 -147.7,594.23 -118.01,108.08 -319.71,189.45 -462.49,288.05 -2.74,26.17 -7.54,71.88 -2.83,97.17 11.21,60.15 41.38,42.71 46.02,80.17 -16.13,85.65 -64.02,167.29 -71.7,243.27 284.17,22.05 373.68,-318.87 411.49,-394.04 116.04,-5.23 233.05,-1.71 349.36,-10.86 132.02,-10.41 187.04,17.19 260.68,83.51 47.4,42.7 137.15,142.23 163.01,201.95 56.63,130.74 -39.75,591.1 201.69,886.5 147.54,180.53 398.23,197.83 476.96,248.18 6.79,110.53 -33.69,288.71 -39.97,415.81 -5.39,109.15 -26.96,88.92 -97.98,131.9 -51.5,31.14 -98.69,68.56 -147.85,87.79 -29.17,207.32 -21.9,224.61 -107.93,396.91 -51.09,102.3 -113.24,242.86 -175.72,340.67l-239.21 -8.96c48.08,105.02 195.89,246.41 358.76,144.12 169.73,-106.62 91.72,-235.15 121.84,-437.28 77.76,-11.25 159.29,3.48 238.07,-7.99 110.56,-16.12 60.22,-74.39 180.68,-11.3 117.34,61.46 203.29,156.91 326.11,64.13l5.39 -180.12c301.97,-57.1 411.64,142.21 687.15,82.66 -1.19,-109.39 -179.6,-311.78 46.8,-422 14.3,20.41 124.99,247.27 209.82,374.57 360.7,541.27 191.57,276.39 785.8,244.41 74.53,-256.22 -133.13,-362.07 -325.99,-600.34 -45.59,-56.31 -101.15,-126.36 -144.83,-173.86l118.09 -212.3 323.1 -25.32c-5.76,-48.65 -111.47,-124.01 -124.68,-160.39 -7.2,-19.81 29.54,-206.12 40.98,-237.12l201.04 -6.56c-37.24,-142.77 -220.03,-439.6 -230.38,-553.75 264,-34.11 457.67,-181.49 613.72,-361.13 50.69,-58.37 100.84,-103.79 154.44,-169.7 102.73,-126.41 326.36,-438.47 448.3,-524.7 111.29,-78.69 160.3,-4.3 266.02,-0.35 41.69,-13.39 286.67,-351.2 130.87,-667.92 19.64,-45.49 72.92,-95.73 105.75,-139.66 145.66,-195 131.91,-65.11 89.85,-342.36 -152.53,5.54 -280.7,254.95 -414.9,129.63 -106.28,-99.23 -128.02,-342.49 -209.66,-415.1l-462.58 -64.04c-21.54,-105.22 2.9,-212.96 -99.24,-241.05 -122.95,-33.81 -215.78,-5.61 -280.47,49.24l-266.13 239.61c-110.66,99.7 -726.63,-47.11 -947.67,-183.66 -94.37,-58.29 -121.36,-77.97 -196.14,-161.38 3.77,-117.91 25.21,-292.17 -96.97,-314.04l-272.56 -38.57c-56.42,-12.61 -41.71,-1.7 -69.15,-44.57 -50.25,-78.52 -107.49,-209.42 -66.37,-310.33 43.12,-105.86 218.19,-64.96 353.21,-75.26 -5.01,-65.24 -39.44,-114.55 -74.15,-151.64 -185.99,-198.76 -650.35,-326.42 -864.16,-241.71 -170.51,67.56 -172.85,80.65 -385.39,79.41z" />
										<path class="fil0" d="M932.43 9225.03c68.92,-22.71 104.12,-94.17 154.51,-134.43 -11.41,-54.4 -7.91,-13.72 -33.03,-71.66l197.14 0.92c8.2,210.24 -65.65,330.74 -239.99,393.85l-134.77 48.53c-27.85,14.92 -12.94,6.59 -26.87,17.08l140.25 254.82c56.78,7.2 12.28,1.57 77.74,-17.49 -15.3,471.61 -1.77,471.41 -423.54,745.63 -131.59,85.55 -207.32,179.54 -301.79,282.09 -156.25,169.67 -178.87,147.37 -342.09,239.99 0.69,225.13 361.47,211.33 361.24,700.62 -0.06,134.79 -23.91,233.54 34.91,328.61 156.88,253.64 219.58,489.45 243.11,804.41 13.92,186.41 14.88,208.22 -142.07,365.18 -42.14,42.14 -41.41,49.99 -48.63,129.83 -31.22,345.54 -59.01,300.27 48.73,429.05 38.59,46.12 44.63,58.48 44.78,141.13l98.41 -25.42c26.33,96.57 130.28,237.27 205.28,288.67 54,37.01 104.57,57.39 151.74,94.34 49.65,38.87 76.58,84.12 119.48,140.02 59.72,77.81 51.23,68.22 24.18,174.51 -68.76,270.25 -78.32,258.88 -6.74,392.39 25.33,47.24 55.38,151.91 77.37,179.46 379.19,-17.59 384.04,-373.26 557.38,-568.44 72.36,-81.5 260.7,-187.96 410.68,-111.76 82.26,41.8 60.17,110 99.62,186.16 18.51,35.72 38.83,49.43 82.82,60.73 51.11,13.14 87.9,2.03 111.65,30.65 23.67,28.52 24.91,244.63 322.79,428.65 45.62,28.19 153.29,65.46 175.32,82.92 32.03,37.12 50.28,206.75 67.48,270.36 155.06,30.72 206.22,90.28 345.34,6.26 51.33,-31.01 234.77,-147.03 285.17,-153.56l206.08 551.28c65.87,-15.47 434.02,-285.43 533.09,-342.58l-2.58 -241.66c302.47,-4.52 213.48,-14.04 426.91,-505.42 55.64,-128.12 140.7,-281.78 259.37,-350.64 64.02,-37.16 78.62,-25.41 120.58,-45.68l19.05 -11.28c2.39,-1.39 6.66,-3.84 9.5,-6.42 -56.41,-24.3 -141.04,-89.07 -196.63,-126.86 -87.15,-59.22 -149.77,-40.99 -261.65,-75.88 -238.66,-74.43 -182.31,-232.28 -187.89,-491.09l251.84 100.57c-4.28,-69.59 -77.8,-193.8 -98.03,-274.88 -45.56,-182.55 41.74,-167.63 59.47,-296.94 -409.2,-163.81 -204.36,-357.71 -227.02,-427.89 -64.38,-85.77 -106.27,-58.17 -211.17,-25.19l-6.39 173.71c-63.13,28.54 -220.09,52.46 -297.55,70.25 -296,68.01 -51.89,246.67 -560.95,23.77 11.29,-53.93 48.02,-93.94 54.51,-164.07 8.67,-93.7 -34.97,-124.78 -21.82,-206.77 29.82,-186.1 199.61,-308.91 209.95,-467.56l21.36 -661c9.19,-182.2 26.32,-242 -94.16,-331.87 -167.63,-125.05 -301.23,-55.81 -508.03,-387.42 -121.59,-194.99 -60.96,-140.72 -218.89,-229.48 -4.95,-115.99 -9.22,-240.95 37.1,-333.02 72.01,-143.15 53.23,-176.56 53.23,-354.62 0,-173.59 13.63,-166.96 -81.99,-273.35l-175.63 -187.69c-79.62,-117.06 65.71,-430.61 -130.96,-595.61 -82.27,-69.03 -128.42,-99.37 -255.88,-49.73 -278.15,108.26 -468.06,454.86 -606.13,483.28 -41.94,-54.26 -243.01,-418.94 -268.29,-484.53l-92.95 20.3 52.05 -196.07 -171.66 -62.06 -2.45 -184.13c-86.45,11.01 -211.85,170.35 -279.85,234.42 -42.25,39.81 -54.09,37.4 -93.37,88.35 -48.59,63.05 -103.98,139.6 -98.18,246.09 3.35,61.54 67.34,214.29 98.4,265.32z" />
										<path class="fil1 clickable-path" data-url="https://banda.nic.in" d="M13794.88 3832.6c24.77,79.49 115.88,151.47 121.42,227.42 -64.61,42.01 -38.14,-29.76 -111.87,44.53l-251.53 253.88c10.8,54.52 7.91,8.59 32.72,71.41 -101.06,-2.17 -267.68,-24.29 -326.88,32.38 112.11,212.8 606.45,322.73 592.32,661.69 -92.96,56.58 -142.56,36.01 -174.91,149.47 -29.45,103.32 0.29,217.23 -15.7,323.13 -115.66,81.26 -206.88,95.67 -292.17,199.73 -106.96,130.46 -70.43,230.49 -83.11,422.11l-180.46 -0.32c-44.99,296.54 72.1,392.92 -147.69,594.23 -118.01,108.08 -319.71,189.45 -462.49,288.04 -2.74,26.18 -7.54,71.89 -2.83,97.17 11.2,60.16 41.37,42.71 46.02,80.18 -16.13,85.65 -64.03,167.29 -71.7,243.27 284.17,22.05 373.68,-318.87 411.48,-394.04 116.05,-5.24 233.05,-1.72 349.37,-10.87 132.01,-10.4 187.03,17.19 260.68,83.52 47.4,42.7 137.15,142.23 163.01,201.95 56.62,130.73 -39.76,591.1 201.68,886.5 147.54,180.53 398.24,197.83 476.96,248.17 6.79,110.53 -33.67,288.72 -39.96,415.82 -5.4,109.15 -26.96,88.92 -97.99,131.9 -51.5,31.14 -98.69,68.56 -147.85,87.79 -29.17,207.32 -21.89,224.61 -107.92,396.91 -51.09,102.29 -113.25,242.85 -175.73,340.67l-239.2 -8.97c48.07,105.04 195.88,246.42 358.75,144.12 169.73,-106.61 91.72,-235.15 121.85,-437.27 77.75,-11.25 159.28,3.48 238.06,-8 110.56,-16.12 60.23,-74.37 180.69,-11.29 117.34,61.45 203.29,156.9 326.11,64.13l5.39 -180.12c301.96,-57.1 411.64,142.21 687.15,82.66 -1.2,-109.39 -179.6,-311.78 46.79,-422 14.31,20.41 124.99,247.27 209.83,374.57 360.7,541.25 191.56,276.38 785.79,244.41 74.53,-256.22 -133.12,-362.08 -325.98,-600.34 -45.59,-56.31 -101.16,-126.36 -144.83,-173.87l118.09 -212.3 323.09 -25.31c-5.75,-48.65 -111.47,-124.02 -124.67,-160.39 -7.21,-19.81 29.52,-206.13 40.98,-237.13l201.04 -6.56c-37.24,-142.77 -220.03,-439.59 -230.38,-553.74 264,-34.11 457.67,-181.5 613.71,-361.14 50.7,-58.37 100.85,-103.78 154.44,-169.7 102.73,-126.41 326.36,-438.47 448.31,-524.7 111.29,-78.68 160.29,-4.29 266.01,-0.35 41.7,-13.39 286.68,-351.2 130.87,-667.91 19.64,-45.49 72.93,-95.74 105.76,-139.66 145.65,-195 131.91,-65.12 89.84,-342.36 -152.52,5.53 -280.69,254.95 -414.9,129.63 -106.27,-99.24 -128.01,-342.5 -209.65,-415.1l-462.59 -64.04c-21.54,-105.22 2.9,-212.96 -99.24,-241.05 -122.94,-33.82 -215.77,-5.62 -280.45,49.23l-266.14 239.62c-110.65,99.7 -726.62,-47.11 -947.67,-183.67 -94.36,-58.28 -121.35,-77.96 -196.13,-161.38 3.77,-117.9 25.21,-292.16 -96.98,-314.03l-272.55 -38.57c-56.43,-12.62 -41.72,-1.71 -69.16,-44.58 -50.24,-78.51 -107.48,-209.41 -66.36,-310.33 43.12,-105.85 218.18,-64.95 353.21,-75.26 -5.01,-65.23 -39.45,-114.54 -74.15,-151.63 -185.99,-198.76 -650.35,-326.42 -864.16,-241.71 -170.52,67.56 -172.85,80.65 -385.41,79.41z" />
										<path class="fil2 clickable-path" data-url="https://chitrakoot.nic.in" d="M21273.18 9073.2l0 -864.48c-81.97,19.87 -205.57,82.64 -289.54,117.46 -167.81,69.6 -130.76,48.09 -286.9,-29.52 -165.38,-82.22 -122.96,-32.95 -182.03,-221.41 -19.53,-62.3 -73.19,-256.36 -102.45,-296.73 -136.33,-3.06 -278.06,29.39 -442.41,17.37 -1083.83,-79.16 -460.18,-396.84 -1053.88,-419.65 -3.09,-55.99 194.36,-390.07 225.88,-486.4 -35.67,-44.47 -190.12,-144.73 -251.13,-186.34 -153.83,-104.96 -90.63,-112.19 -329.95,-109.67 -105.98,1.11 -91.38,-20.64 -147.6,-74.48l-234.11 -207.24c-55.7,-52.87 -51.86,-79.18 -133.15,-106.84 51.81,447.04 -63.48,432.54 -183.24,672.77 -92.4,-3.86 -161.96,-79.44 -261.68,-27.17 -153.49,80.48 -527.36,747.97 -952.16,981.51 -85.66,47.09 -204.3,71.56 -231.38,95.41 44.27,119.55 223.17,457.19 229.95,547.05l-221.3 3.04c-36.92,95.12 -57.84,162.96 -0.31,222.72 33.18,34.47 137.11,132.06 146.19,168.6 -451.01,49.66 -360.69,-39.08 -488.66,187.37 20.49,45.84 109.4,147.56 142.53,182.25 54.6,57.18 169.55,30.63 272.37,28.63 168.62,-3.26 145.7,-0.16 238.45,83.01 32.32,28.99 137.67,144.73 177.1,163.28 33.14,-67.29 52.43,-496.89 67.15,-611.04 156.65,-15.68 395.07,-36.29 365.13,153.72 -10.24,64.9 -66.8,119.11 -98.82,165.07 -38.83,55.7 -36.54,139.54 -47.58,222.21 -49.26,369.09 12.09,309.12 -140.92,393.81 -253.37,140.22 -81.7,209.07 -37.23,308.91 -79.26,139.57 -165.98,129.11 -244.06,227.38 -77.99,98.15 -54.13,219.9 62.35,313.75 84.21,67.84 113.25,27.77 326.86,-55.77 355.11,-138.88 325.64,-158.59 435.65,-70.72 89.05,71.11 58.22,128.82 297.48,127.74 99.33,-0.45 162.13,16.04 233.57,-36.05 204.41,-149.03 92.47,-178.13 475.76,42.76 59.29,34.17 269.96,154.69 315.68,161.38 46.22,-73.95 94.9,-273.19 142.73,-317.15l210.29 125.36c45.22,-613.31 401.5,-792.09 379.45,-1515.66 46.54,-33.53 206.84,-97.92 268.08,-105.98l63.23 180.33c90.39,-11.31 222.04,-202.14 313.69,-231.84 87.09,140.08 300.12,373.33 421.68,471.18 96.28,77.53 178.16,143.38 272.57,30.33 112.19,-134.32 52.19,-170.16 22.93,-353.21l253.71 -67.03z" />
										<path class="fil0" d="M11388.13 2896.15c39.54,9.13 36.89,16.11 76.43,25.26 -15.53,32.05 -24.41,125.42 -36.35,165.95 -62,210.23 -174.81,220.73 -384.08,225.35 0,83.35 13.24,185.32 -55.35,235.51 -42.83,31.32 -103.19,59.42 -150.28,78.3 -376.46,150.91 -262.94,268.75 -609.76,39.64 -461.92,-305.16 -231.39,-88.36 -509.61,-88.36 -44.39,0 -74.32,-88.35 -178.36,-88.35 -126.87,0 -215.27,227.21 -522.34,227.21 11.54,137.51 127.39,-28.03 127.39,353.45 0,37.42 -36.94,113.6 -63.7,113.6 -167.58,0 -450.7,-375.84 -482.41,-36.15 -9.81,105.11 0.02,110.35 -66.63,161.2 -160.75,122.65 -348.25,-44.52 -498.39,61.6 -162.5,114.86 2.72,186.37 2.72,280.42l-39.04 314.91c-8.67,104.93 0.83,208.95 0.83,341.48 -37.17,8.59 -86.96,21.92 -127.4,25.26 10.11,120.4 280.29,412.6 280.29,479.67 0,44.34 -62.97,151.23 -84.75,193.75 -29.34,57.29 -88,130.78 -93.61,197.58 48.59,11.22 73.22,33.78 117.34,47.83 45.72,14.56 80.9,24.75 130.01,35.29l434.96 73.96c87.98,12.55 209.35,1.73 285.61,45.24 29.88,17.03 70.21,62.76 115.01,62.76 154.06,0 179.92,-168.35 351.39,-32.59 38.37,30.41 55.56,44.61 94.51,70.46 68.29,-35.8 114.67,-46.16 114.67,-151.48l0 -391.32 254.79 0c69.49,0 115.63,-114.08 283.73,47.08 87.45,83.81 162.46,174.72 260.42,246.91 68.72,50.63 65.28,72.07 182.04,72.07 10.1,-42.88 50.3,-117.06 73.6,-154.29 31.3,-50.02 67.01,-84.55 117.78,-110.52 30.15,-15.43 47.5,-18 86.48,-27.91 107.66,-27.35 94.38,-96.45 158.55,-183.74 116.92,-159.05 374.62,-352.41 378.97,-546.01 -283.39,0 -221.25,19.88 -471.38,-37.87 -56.21,40.79 -249.94,288.2 -405.55,288.2 -166.49,0 -124.81,-123.97 -218.73,-262.95 -199.39,16.44 -245.06,25.25 -404.59,-154.53 -92.93,-104.71 -167.59,-152.84 -144.21,-312.63 24.98,-170.78 128.63,-165.1 210.19,-272.27 107.85,-141.72 255.07,-169.42 427.78,-169.42 173.63,0 370.58,115.96 447.53,125.63 44.08,5.53 121.6,-12.03 189.49,-12.03 266.51,0 592.06,-41.03 753.95,86.12 189.93,149.16 171.89,399.88 -57.29,528.4 -108.51,60.84 -132.27,109.64 -276.23,142.87l0 25.24c446.68,103.11 407.68,359.58 407.68,732.16 0,89.8 -50.94,124.28 -50.94,227.21 288.99,66.71 69.84,477.21 171.78,599.81 44.69,53.74 320.32,143.71 408.96,162.86 94.34,20.39 88.8,14.13 170.93,7.33l0 -126.22c93.92,-21.69 347.03,-187.58 420.64,-239.64 49.48,-34.98 126.48,-114.03 157.4,-172.25 54.47,-102.57 20.75,-246.6 20.75,-370.76 0,-43.52 9.43,-48.87 12.75,-88.35 79.86,0 113.91,2.25 178.36,-12.63l12.35 -214.98c8.17,-196.22 217.84,-273.28 357.12,-365.69 0,-70.37 13.03,-101.23 12.82,-151.51 -0.3,-70.08 -22.86,-67.47 -4.11,-142.21 23.82,-94.88 95.36,-121.76 169.65,-160.72 -26.72,-318.19 -458.8,-369.03 -598.79,-631.16 38.68,-25.67 28.65,-33.31 79.06,-47.89 36.07,-10.42 71.65,-13.71 112.44,-14.84 142.93,-3.94 172.36,-125.89 303.47,-229.48 69.55,-54.97 79.87,-63.86 129.29,-136.97 -12.3,-52.36 -63.02,-152.6 -112.11,-179.24 -42.13,-22.88 -86.64,-0.56 -137.55,-15.21 -61.77,-17.78 -205.53,-151.74 -265.01,-191.84 -94.19,-63.46 -165.37,-7.6 -270,-35.44 -34.32,-9.13 -59.89,-32.4 -90.32,-49.38 -101.19,-56.49 -223.44,-87.92 -324.42,-132.99 -136.49,-60.92 -236.38,-178.31 -303.92,-304.78 45.07,-51.39 95.09,-89.28 79.97,-166.8 -12.88,-66 -42.54,-148.29 -67.23,-199.28 -47.97,-47.53 -255.96,-12.62 -343.98,-12.62 -155.8,0 -205.86,-43.14 -296.71,-109.95 -150.73,-110.85 -98.23,-101.31 -98.23,-294 0,-173.64 -259.52,-180.94 -303.82,-35.94 -54.5,178.38 -33.42,405.74 -27.84,591.76 1.9,63.62 13.16,63.19 13.16,125.83z" />
										<path class="fil0" d="M11034.8 4156.58c667,0 1207.7,264.85 1207.7,591.58 0,326.73 -540.7,591.58 -1207.7,591.58 -121.19,0 -526.74,507.3 -703.79,470.46 -359.42,-74.8 -705.65,-760.71 -705.65,-1062.04 0,-326.73 742.44,-591.58 1409.44,-591.58z" />
										<path class="fil3" d="M6153.77 70.93l-54.96 108.34c163.67,141.75 148.1,108.59 147.83,248.28 -0.46,239.72 13.14,131.97 137.08,259.61 -29.93,100.57 -340.17,497.36 -429.73,604.81 -78.87,94.66 -104.74,88.94 -268.91,82.37l-5.9 293.22c-51.75,-1.94 -12.68,-14.88 -70.32,-29.72l-419.98 476.5c84.36,201.74 415.13,96.28 391.08,540.34 -82.41,-8.62 -149.67,-60.89 -230.6,-58.44l-132.42 647.88 270.81 -38.91 4.35 142.01c243.16,31.87 420.83,-84.65 528.13,181.33l-142.57 181.63c29.12,42.33 87.68,74.39 137.87,82.71 25.75,-45.86 59.3,-136.25 112.29,-167.8l245.05 514.1c79.82,-4.7 162.29,-68.8 234.56,-13.12 87.16,67.18 19.74,68.86 220.86,70.24 200.46,1.36 403.32,4.9 603.53,2.2l-44.29 231.06c249.62,36.7 223.32,-37.5 438.9,-145.78l42.42 129.27c77.04,-15.11 78.49,-100.33 308.92,-99.15 188.12,0.94 186.86,67.57 322.39,-58.81 19.77,-142 16.35,-344.51 215.3,-265.95 102.58,40.5 211.74,164.52 315.98,170.28 44.81,-58.48 48.05,-190.07 15.41,-270.44 -29.1,-71.69 -149.9,-109.93 -154.85,-193.02 100.09,-58.56 248.33,21.78 427.41,-141.54 260.48,-237.56 334.58,-29.38 363.02,-16.56 123.41,5.26 133.86,-49.32 207.97,-99.53 64.08,22.53 213.21,123.27 278.45,161.73 62.44,36.82 239.5,151.67 292.42,166.31 112.54,-61.57 235.47,-118.13 349.07,-174.55 238.64,-118.56 156.47,-66.37 187.34,-332.82 116.85,-10.2 244.25,23.02 313.55,-48.1 47.74,-49.02 96.09,-175.29 99.83,-266.24 -38.05,-22.3 -28.52,-9.75 -68.77,-20.64l-17.5 -563.28c-228.27,-127.42 -810.45,61.32 -991.97,-209.21 -74.69,-111.28 -23.67,-214.93 -10.24,-335.64 -71.11,-43.97 -394.19,-83.7 -458.63,-104.97 -60.31,-19.89 -27.06,0.37 -46.95,-43.18 -54.17,-118.59 -70.73,-265.04 -291.77,-368.85 -133.46,-62.68 -386.72,-111.7 -461.11,-200.95 -48.61,-58.34 -50.85,-182.64 -31.89,-270.98 17.95,-83.64 85.57,-146.56 72.53,-250.55 -161.98,-23.15 -209.21,41.43 -313.38,-177.81 -54.27,-114.25 -92.63,-259.7 -178,-315.57 -170.91,-111.82 -648.41,71.86 -822.39,140.63 -88.27,34.87 -115.19,-10.33 -181.68,-44.63 -60.78,-31.35 -100.52,-53.4 -169.47,-76.75 -326.66,-110.66 -791.42,114.81 -1089.75,38.74 -78.06,-19.91 -119.27,-58.02 -196.32,-70.12z" />
										<path class="fil4 clickable-path" data-url="https://jalaun.nic.in" d="M6207.26 23.14l-54.97 108.35c163.68,141.75 148.11,108.58 147.84,248.28 -0.47,239.72 13.13,131.97 137.08,259.61 -29.93,100.57 -340.18,497.36 -429.73,604.8 -78.87,94.66 -104.74,88.95 -268.91,82.37l-5.9 293.23c-51.75,-1.94 -12.69,-14.88 -70.32,-29.72l-419.99 476.48c84.36,201.75 415.13,96.29 391.09,540.34 -82.42,-8.61 -149.67,-60.88 -230.61,-58.44l-132.41 647.89 270.81 -38.91 4.35 142.01c243.16,31.87 420.83,-84.66 528.13,181.33l-142.57 181.63c29.11,42.32 87.68,74.39 137.87,82.71 25.74,-45.86 59.3,-136.25 112.29,-167.8l245.04 514.1c79.83,-4.7 162.3,-68.8 234.56,-13.12 87.17,67.18 19.74,68.85 220.87,70.23 200.46,1.37 403.31,4.9 603.52,2.21l-44.29 231.06c249.64,36.7 223.32,-37.51 438.92,-145.78l42.42 129.27c77.03,-15.11 78.48,-100.33 308.92,-99.16 188.11,0.96 186.86,67.58 322.39,-58.8 19.77,-142.01 16.35,-344.51 215.3,-265.95 102.58,40.5 211.74,164.52 315.97,170.28 44.81,-58.48 48.05,-190.07 15.42,-270.45 -29.1,-71.68 -149.91,-109.92 -154.85,-193.01 100.08,-58.56 248.33,21.78 427.4,-141.54 260.48,-237.56 334.59,-29.38 363.03,-16.56 123.41,5.26 133.86,-49.33 207.96,-99.53 64.09,22.53 213.22,123.27 278.46,161.73 62.42,36.81 239.5,151.67 292.42,166.31 112.54,-61.58 235.47,-118.13 349.07,-174.56 238.64,-118.55 156.45,-66.36 187.34,-332.81 116.85,-10.2 244.24,23.02 313.55,-48.1 47.74,-49.02 96.08,-175.29 99.83,-266.24 -38.05,-22.3 -28.52,-9.76 -68.77,-20.64l-17.5 -563.28c-228.27,-127.43 -810.45,61.32 -991.98,-209.21 -74.68,-111.29 -23.66,-214.93 -10.23,-335.64 -71.11,-43.97 -394.2,-83.7 -458.63,-104.97 -60.32,-19.89 -27.06,0.37 -46.96,-43.18 -54.17,-118.59 -70.73,-265.04 -291.77,-368.85 -133.46,-62.68 -386.72,-111.7 -461.1,-200.96 -48.61,-58.34 -50.85,-182.63 -31.89,-270.98 17.95,-83.63 85.57,-146.55 72.53,-250.55 -161.99,-23.14 -209.22,41.44 -313.38,-177.8 -54.28,-114.25 -92.64,-259.71 -178.01,-315.57 -170.91,-111.82 -648.4,71.85 -822.38,140.63 -88.27,34.87 -115.19,-10.33 -181.68,-44.63 -60.78,-31.35 -100.54,-53.4 -169.48,-76.76 -326.66,-110.65 -791.41,114.81 -1089.74,38.75 -78.07,-19.91 -119.27,-58.02 -196.32,-70.13z" />
										<path class="fil5" d="M4598.53 4409.01c-181.37,-24.18 -273.29,-180.47 -385.72,-23.21 -72.62,101.56 -132.24,227.96 -191.92,352.83 -101.7,212.81 -64.22,177.4 48.03,370.74 40.54,69.83 179.65,298.82 197.12,357.77 -4.22,77.65 -245.17,220.84 -312.17,256.25 -187.92,99.35 -403.98,166.17 -607.25,247.99 -58.37,23.51 -161.04,80.22 -197.11,86.05 -55.34,8.95 -215.15,1.28 -281.74,0.82 -172.7,-1.23 -141.19,-11.13 -217.52,85.7 -240.27,23.99 -307.8,-154.7 -449.85,-178.3 -88.62,-14.71 -96.25,91.85 -173.43,127.3 -93.07,42.71 -177.01,-39.48 -223.08,-63.69 -60.99,50.6 -177.39,350.51 -225.92,443.88 -89,171.3 -182.55,251.73 -292.49,382.77 -99.59,118.69 -195.7,248.29 -291.31,383.41 -64.55,91.24 -92.21,122.41 -24.23,242.37 41.99,74.1 107.72,121.36 145.35,191.09 -34.87,179.37 -124.44,83.24 -39.18,312.4 37.94,102 80.62,209.22 120.09,308 63.83,-25.19 102.98,-72.35 157.3,-91.38l2.87 247.29 175.3 54.07 -29.19 142.3c82.5,47.1 111.89,155.13 158.45,234.25 47.3,80.35 89.21,178.47 142.94,255.58 98.29,-25.47 317.19,-343.88 539.27,-443.06 50.24,-22.45 68.61,-25.55 129.21,-39.21 67.1,-15.16 72.01,-11.92 93.8,-76.35 136.43,-403.16 -620.9,-316.93 -838.23,-463.08 6.07,-50.69 35.09,-142.91 62.98,-181.17l221 -2.36c19.95,-24.37 36.67,-58.2 53.61,-84.83 80.95,-4.95 104.78,40.54 204.36,18.67 30.53,-62.83 26.72,-358.49 23.15,-456.71 105.13,14.93 268.94,117.56 365.79,122.41l-38.94 -233.61c28.35,-32.81 82.74,-40.31 123.45,-59.69 213.53,-101.64 392.15,-405.73 564.53,-315.28 56.58,29.68 152.94,142.77 167.09,205.67 -128.2,52.79 -272.23,52.2 -276.05,221.76 33.58,30.9 101.16,52.29 144.59,69.31 128.97,50.55 332.5,153.56 462.75,170.07l-59.06 -446.58c45.03,-18.02 105.14,-23.61 156.91,-29.9 53.34,-6.47 110.48,-4.31 130.7,-48.35 -82.74,-65.84 -283.51,51.91 -347.89,-94 -52.06,-117.95 48.8,-257.41 106.41,-304.09 98.77,-80.04 255.24,-62.62 350.03,4.77 88.83,63.15 107.4,188.07 177.57,268.87 101.45,-22.13 100.25,-75.66 86.26,-172.49 -21.4,-148.11 -136.16,-56.41 196.19,-497.39 32.1,-42.6 78.4,-106.57 145.52,-117.37 74.84,-12.02 184.91,-10.01 231.12,32.04 19.55,17.8 85.13,134.7 93.48,165.09 11.75,42.71 -68.38,113.41 -93.48,156.69l137.18 180.34c-33.33,79.04 -152.43,250.79 -158.19,309.94 121.22,23.45 206.32,41.98 262.78,127.01 56.34,84.87 42.5,233.49 -4.71,317.61 -45.14,80.42 -135.6,123.97 -211.62,178.31 -61.48,43.94 -61.36,31.91 -146.08,9.03 -44.03,-11.9 -103.85,-17.08 -144.85,-45.38 17.76,-43.3 89.95,-126.76 93.79,-175.88 -159.38,-18.43 -302.85,144.55 -359.2,213.21 -93.34,113.75 -191.5,203.65 -302.68,299.99 40.35,138.17 28.59,145.15 32.8,297.58 44.83,20.34 97.99,47.18 167.65,46.25 54.33,-40.04 90.95,-98.23 105.95,-176.56 18.35,-95.73 -34.6,-146.45 -41.92,-232.15 219.03,-181.8 208.47,-178.88 597.66,-156.77 37.62,64.04 115.84,284.28 112.22,363.12 -9.71,212 -168.91,138.47 -317.73,172.26 -42.29,9.6 -87.81,84.58 -115.67,117.44 -75.49,89 -91.25,250.26 -122.16,369.48 -12.54,48.42 -43.22,146.55 -45.96,198.38 39.84,24.15 86.18,36.31 139.1,38.17l180.97 -367.42 369.88 42.45 -49.84 -457.35c393.01,-84.68 569,310.84 570.73,523.86 1.76,219.58 -210.4,158.76 -124.72,373.61 96.45,-14.4 201.97,-303.87 259.51,-373.16 53.74,24.51 168.73,169.64 228.29,224.96 101.32,94.1 20.14,217.18 17.88,372.57 47.56,2.74 95.86,3.42 143.59,2.32 246.31,-5.59 48.7,-154.35 152.52,-266.09 38.17,-41.07 130.27,-61.89 208.64,-58.47 57.31,191.65 -10.32,227.27 135.24,229.66l-44.09 -182.2c50.47,-15.46 329.82,-55.14 382.21,-44.65l5.96 154.6c69.5,-10.67 120.25,-66.5 173.64,-93.25 -5.85,-88.24 -67.05,-257.09 -97.16,-349.33 -72.25,-221.28 -155.48,-508.94 -81.47,-735.71 72.46,-222.05 29.97,-491.24 251.14,-632.94 157.79,-101.1 158.68,-35.68 155.78,-283.48 -1.35,-115.19 12.79,-91.74 64.43,-158.34 91.61,-118.12 229.71,-236.39 301.72,-360.09 -29.43,-34.62 -74.08,-34.21 -113.63,-64.87 110.15,-267.77 259.89,-340.4 155,-495.78 -38.52,-57.09 -277.03,-421.29 -279.46,-454.22 57.32,0.33 125.84,0.72 167.47,-16.23 38.31,-125.96 -11.56,-378.7 30.42,-539.02 30.96,-118.27 6.13,-123.34 -41.08,-217.79 -32.08,-64.17 -45.26,-140.63 -74.68,-207.68 -63.02,12.53 -118.87,73.92 -179.38,104.64 -67.54,34.33 -206.95,14.54 -294.59,13.95 6.99,-75.78 52.57,-168.44 40.58,-231.19 -181.88,-7.77 -382.1,-2.78 -565.77,-2.39 -152.08,0.3 -114.61,2.63 -213.51,-76.24 -65.62,-52.34 -148.43,15.53 -244.51,24.06 -64.36,-154.02 -142.05,-308.78 -216.53,-467.78 -36.37,9.85 -31.3,15.11 -54.96,57.83 -14.92,26.92 -28.92,51.99 -39.95,75.88 -61.28,-12.65 -171.32,-92.64 -225.34,-126.53 12.46,-45.54 116.16,-151.52 153.1,-205.07 -50.58,-221.43 -323.31,-91.28 -509.76,-139.02l-4.26 -125.77c-227.83,12.13 -235.76,37.46 -324.89,114.96 -61.52,53.48 -190.37,108.99 -265.15,163.2 -197.83,143.41 -162.36,415.18 -163.8,705.99z" />
										<path id="popupButton2" style="cursor: pointer;" class="fil6" d="M4722.78 4317.86c-181.38,-24.19 -273.29,-180.47 -385.72,-23.22 -72.62,101.58 -132.24,227.96 -191.92,352.83 -101.7,212.81 -64.22,177.41 48.02,370.74 40.55,69.83 179.66,298.83 197.13,357.77 -4.23,77.65 -245.17,220.84 -312.17,256.26 -187.92,99.35 -403.98,166.15 -607.25,247.99 -58.37,23.51 -161.05,80.22 -197.12,86.04 -55.34,8.96 -215.14,1.29 -281.73,0.82 -172.7,-1.23 -141.19,-11.12 -217.53,85.71 -240.26,23.97 -307.79,-154.71 -449.84,-178.3 -88.62,-14.71 -96.25,91.85 -173.43,127.29 -93.09,42.72 -177.01,-39.47 -223.09,-63.69 -60.99,50.6 -177.39,350.51 -225.9,443.88 -89,171.31 -182.55,251.73 -292.49,382.78 -99.59,118.68 -195.7,248.28 -291.31,383.41 -64.55,91.24 -92.23,122.41 -24.23,242.37 41.98,74.09 107.71,121.35 145.35,191.08 -34.88,179.37 -124.44,83.25 -39.18,312.4 37.94,102 80.62,209.22 120.09,308 63.81,-25.18 102.98,-72.34 157.29,-91.38l2.87 247.29 175.31 54.08 -29.2 142.3c82.5,47.09 111.9,155.13 158.45,234.25 47.31,80.34 89.22,178.45 142.94,255.57 98.3,-25.47 317.2,-343.87 539.27,-443.06 50.25,-22.45 68.62,-25.55 129.21,-39.21 67.1,-15.16 72.01,-11.92 93.81,-76.34 136.43,-403.17 -620.9,-316.94 -838.23,-463.08 6.07,-50.7 35.08,-142.91 62.97,-181.18l221 -2.36c19.95,-24.37 36.68,-58.2 53.61,-84.82 80.97,-4.96 104.79,40.53 204.36,18.66 30.54,-62.83 26.73,-358.49 23.16,-456.71 105.12,14.94 268.94,117.57 365.79,122.41l-38.94 -233.6c28.35,-32.83 82.73,-40.32 123.45,-59.69 213.52,-101.65 392.15,-405.74 564.52,-315.29 56.58,29.68 152.95,142.77 167.1,205.67 -128.2,52.8 -272.23,52.22 -276.05,221.76 33.58,30.92 101.15,52.29 144.59,69.31 128.97,50.56 332.5,153.57 462.75,170.07l-59.06 -446.58c45.02,-18.02 105.14,-23.61 156.9,-29.9 53.35,-6.46 110.49,-4.31 130.71,-48.35 -82.74,-65.84 -283.51,51.91 -347.89,-94 -52.06,-117.94 48.79,-257.41 106.4,-304.09 98.78,-80.03 255.24,-62.62 350.03,4.77 88.84,63.16 107.41,188.08 177.58,268.87 101.44,-22.13 100.25,-75.66 86.25,-172.49 -21.38,-148.1 -136.15,-56.41 196.2,-497.39 32.1,-42.6 78.4,-106.57 145.51,-117.37 74.85,-12.02 184.92,-10.01 231.13,32.05 19.55,17.79 85.13,134.7 93.48,165.08 11.75,42.71 -68.38,113.41 -93.48,156.69l137.18 180.35c-33.33,79.03 -152.43,250.79 -158.19,309.93 121.21,23.45 206.32,41.98 262.77,127.01 56.35,84.87 42.52,233.49 -4.7,317.61 -45.15,80.42 -135.6,123.98 -211.62,178.32 -61.48,43.93 -61.36,31.9 -146.08,9.02 -44.04,-11.89 -103.85,-17.07 -144.85,-45.37 17.76,-43.31 89.94,-126.76 93.78,-175.88 -159.38,-18.43 -302.85,144.54 -359.19,213.2 -93.34,113.75 -191.51,203.66 -302.68,300 40.34,138.16 28.59,145.15 32.8,297.57 44.83,20.36 97.99,47.18 167.65,46.25 54.32,-40.04 90.94,-98.23 105.95,-176.54 18.34,-95.74 -34.61,-146.46 -41.93,-232.15 219.03,-181.81 208.47,-178.88 597.67,-156.78 37.62,64.04 115.84,284.28 112.22,363.12 -9.72,212.01 -168.91,138.47 -317.73,172.26 -42.3,9.6 -87.81,84.59 -115.67,117.44 -75.49,89.01 -91.26,250.26 -122.16,369.49 -12.55,48.41 -43.22,146.54 -45.97,198.36 39.84,24.15 86.19,36.31 139.11,38.17l180.96 -367.41 369.88 42.44 -49.83 -457.35c393.01,-84.68 569,310.84 570.73,523.86 1.76,219.58 -210.4,158.76 -124.72,373.61 96.45,-14.4 201.97,-303.86 259.49,-373.16 53.74,24.51 168.73,169.64 228.3,224.96 101.32,94.1 20.13,217.19 17.88,372.57 47.55,2.74 95.86,3.42 143.59,2.32 246.31,-5.59 48.69,-154.35 152.52,-266.09 38.17,-41.06 130.27,-61.89 208.64,-58.46 57.31,191.64 -10.32,227.26 135.23,229.66l-44.09 -182.21c50.49,-15.45 329.83,-55.14 382.22,-44.65l5.95 154.61c69.51,-10.67 120.26,-66.51 173.64,-93.27 -5.84,-88.24 -67.04,-257.07 -97.15,-349.33 -72.25,-221.28 -155.48,-508.94 -81.47,-735.7 72.46,-222.06 29.97,-491.25 251.14,-632.95 157.79,-101.1 158.68,-35.67 155.76,-283.48 -1.35,-115.19 12.8,-91.73 64.44,-158.34 91.61,-118.12 229.7,-236.39 301.71,-360.08 -29.42,-34.62 -74.07,-34.21 -113.62,-64.88 110.15,-267.77 259.88,-340.39 155,-495.78 -38.52,-57.08 -277.03,-421.29 -279.47,-454.22 57.33,0.34 125.85,0.72 167.48,-16.23 38.31,-125.96 -11.56,-378.69 30.42,-539.02 30.96,-118.27 6.13,-123.34 -41.08,-217.79 -32.09,-64.15 -45.26,-140.62 -74.69,-207.68 -63.01,12.53 -118.86,73.92 -179.37,104.65 -67.55,34.32 -206.95,14.54 -294.59,13.93 6.99,-75.78 52.57,-168.44 40.58,-231.19 -181.88,-7.77 -382.1,-2.77 -565.77,-2.39 -152.09,0.31 -114.61,2.63 -213.51,-76.24 -65.62,-52.34 -148.43,15.53 -244.51,24.06 -64.37,-154.02 -142.05,-308.78 -216.53,-467.78 -36.38,9.86 -31.31,15.11 -54.96,57.83 -14.93,26.92 -28.92,52 -39.95,75.89 -61.29,-12.66 -171.33,-92.65 -225.34,-126.54 12.46,-45.54 116.16,-151.52 153.1,-205.06 -50.59,-221.44 -323.31,-91.29 -509.76,-139.02l-4.27 -125.78c-227.82,12.13 -235.75,37.46 -324.88,114.96 -61.52,53.48 -190.37,109 -265.15,163.2 -197.83,143.42 -162.37,415.18 -163.8,706z" />
										<path class="fil7 clickable-path" data-url="https://hamirpur.nic.in" d="M11466.87 2936.08c39.54,9.12 36.9,16.11 76.44,25.25 -15.53,32.06 -24.41,125.43 -36.36,165.96 -61.99,210.23 -174.8,220.73 -384.07,225.35 0,83.35 13.24,185.32 -55.35,235.5 -42.84,31.33 -103.2,59.43 -150.28,78.31 -376.46,150.9 -262.94,268.75 -609.76,39.64 -461.92,-305.16 -231.4,-88.36 -509.62,-88.36 -44.38,0 -74.31,-88.35 -178.35,-88.35 -126.87,0 -215.27,227.21 -522.35,227.21 11.55,137.51 127.4,-28.03 127.4,353.44 0,37.42 -36.94,113.61 -63.7,113.61 -167.59,0 -450.71,-375.84 -482.41,-36.16 -9.82,105.12 0.01,110.36 -66.63,161.21 -160.75,122.65 -348.25,-44.52 -498.39,61.6 -162.5,114.86 2.72,186.37 2.72,280.41l-39.04 314.91c-8.67,104.94 0.83,208.96 0.83,341.49 -37.17,8.59 -86.96,21.92 -127.4,25.25 10.11,120.41 280.27,412.61 280.27,479.68 0,44.34 -62.96,151.22 -84.74,193.75 -29.34,57.28 -88,130.78 -93.62,197.58 48.6,11.21 73.23,33.78 117.35,47.83 45.71,14.56 80.89,24.75 130.01,35.29l434.96 73.96c87.98,12.55 209.35,1.73 285.61,45.24 29.86,17.03 70.21,62.76 115.01,62.76 154.06,0 179.92,-168.36 351.39,-32.59 38.37,30.4 55.55,44.61 94.51,70.46 68.28,-35.8 114.66,-46.16 114.66,-151.48l0 -391.33 254.8 0c69.49,0 115.63,-114.07 283.73,47.09 87.44,83.8 162.45,174.72 260.42,246.91 68.72,50.63 65.27,72.07 182.04,72.07 10.09,-42.88 50.3,-117.07 73.6,-154.29 31.3,-50.03 67.01,-84.55 117.77,-110.52 30.16,-15.43 47.51,-18 86.49,-27.91 107.66,-27.35 94.38,-96.45 158.55,-183.74 116.92,-159.05 374.62,-352.42 378.97,-546.01 -283.39,0 -221.25,19.87 -471.38,-37.88 -56.21,40.8 -249.94,288.21 -405.55,288.21 -166.5,0 -124.81,-123.97 -218.73,-262.95 -199.39,16.43 -245.06,25.25 -404.6,-154.53 -92.92,-104.71 -167.58,-152.84 -144.2,-312.63 24.98,-170.78 128.63,-165.1 210.19,-272.27 107.85,-141.72 255.07,-169.43 427.78,-169.43 173.62,0 370.58,115.97 447.53,125.65 44.08,5.53 121.6,-12.03 189.49,-12.03 266.51,0 592.06,-41.03 753.95,86.12 189.93,149.16 171.89,399.88 -57.29,528.39 -108.52,60.85 -132.27,109.65 -276.23,142.88l0 25.24c446.68,103.11 407.68,359.58 407.68,732.16 0,89.8 -50.95,124.28 -50.95,227.21 288.99,66.7 69.85,477.21 171.79,599.81 44.69,53.74 320.32,143.71 408.96,162.86 94.34,20.39 88.8,14.13 170.93,7.33l0 -126.22c93.92,-21.69 347.02,-187.59 420.64,-239.64 49.48,-34.98 126.48,-114.05 157.4,-172.25 54.47,-102.57 20.75,-246.6 20.75,-370.76 0,-43.52 9.43,-48.87 12.75,-88.35 79.85,0 113.91,2.25 178.36,-12.63l12.35 -214.98c8.17,-196.22 217.84,-273.28 357.12,-365.69 0,-70.37 13.03,-101.23 12.82,-151.51 -0.31,-70.08 -22.86,-67.47 -4.11,-142.21 23.82,-94.88 95.36,-121.76 169.65,-160.72 -26.72,-318.19 -458.8,-369.03 -598.79,-631.16 38.68,-25.67 28.64,-33.32 79.06,-47.89 36.07,-10.42 71.65,-13.71 112.43,-14.84 142.94,-3.94 172.37,-125.89 303.48,-229.48 69.55,-54.97 79.87,-63.86 129.29,-136.97 -12.31,-52.36 -63.02,-152.6 -112.11,-179.24 -42.13,-22.89 -86.64,-0.57 -137.55,-15.21 -61.77,-17.78 -205.54,-151.75 -265.01,-191.84 -94.19,-63.48 -165.38,-7.61 -270,-35.44 -34.32,-9.13 -59.89,-32.4 -90.32,-49.38 -101.19,-56.49 -223.44,-87.93 -324.42,-132.99 -136.5,-60.93 -236.38,-178.31 -303.92,-304.78 45.07,-51.39 95.09,-89.28 79.97,-166.8 -12.88,-66.01 -42.55,-148.29 -67.23,-199.28 -47.97,-47.53 -255.96,-12.62 -343.99,-12.62 -155.79,0 -205.85,-43.14 -296.7,-109.95 -150.73,-110.85 -98.23,-101.31 -98.23,-294 0,-173.64 -259.53,-180.94 -303.82,-35.94 -54.5,178.37 -33.42,405.74 -27.84,591.76 1.9,63.62 13.15,63.19 13.15,125.83z" />
										<path class="fil7" d="M11113.56 4196.51c667,0 1207.7,264.86 1207.7,591.59 0,326.72 -540.7,591.58 -1207.7,591.58 -121.2,0 -526.74,507.3 -703.79,470.45 -359.42,-74.8 -705.66,-760.7 -705.66,-1062.03 0,-326.73 742.45,-591.59 1409.45,-591.59z" />
										<path class="fil0" d="M9810.68 5986.3c-20.47,88.7 -3.08,276.24 -6.78,378.46 -4.33,119.39 -82.18,198.8 -171.56,219.25 -97.18,-53.63 -140.54,-198.22 -294.67,-115.41 -262.38,140.99 -173.58,31.06 -336.48,-32.31 -53.75,-20.93 -363.73,-31.76 -450.84,-43.45 -132.42,-17.76 -269.32,-96.84 -392.61,-98.64 -66.33,113.38 -255.79,305.19 -340.95,426.16 -49.21,69.89 -22.83,135.54 -32,233.5 -32.71,349.81 -289.72,-4.7 -371.29,665.79 -49.09,403.74 -143.22,272 18.26,885.73 31.24,118.83 77.33,283.94 117.05,400.09 18.38,53.73 183.17,269.32 230.28,305.92 46.52,-21.64 142.58,-115.11 162.3,-166.24 121.2,-0.66 592.05,101.38 670.58,150.12l6.27 184.07 185.5 1.56c38.69,-138.25 86.59,-280.53 156.54,-386.94 43.31,-65.87 193.21,-209.21 312.89,-213.8 57.56,158.1 97.33,223.06 241.14,284.25 265.25,112.86 493.34,16.84 911.21,147.8 585.47,183.5 352.73,148.83 560.3,-38.09 70.82,-63.78 115.27,-54.75 192.62,-96.08 -35.18,-100.55 -89.02,-209.81 -130.38,-314 -106.65,-268.69 -74.76,-234.29 -191.19,-253.78 15.9,-41.42 211.24,-237.88 247.53,-264.45 89.21,1.12 196.06,74.5 276.54,78.12 90.72,4.04 565.95,-388.46 638.74,-449.44 125.96,-105.52 288.95,-234.23 382.1,-343.48 111.73,-131.02 249.88,-246.36 352.88,-381.63 -13.33,-11.84 -5.44,-8.78 -28.69,-19.72 -19.28,-9.06 -14.45,-7.42 -40.97,-12.43 -27.34,-5.16 -59.61,-7.11 -89.47,-13.34 -176.51,-36.79 -277.58,-95.1 -452.46,-175.33 -46.55,-504.95 111.35,-639.64 -201.47,-641.07 26.13,-84.32 91.04,-178.93 105.6,-283.55 4.84,-34.84 4.14,-347.05 -0.92,-381.02 -11.21,-75.5 -90.7,-203.89 -128.63,-248.91 -47.66,-56.57 -147.67,-115.11 -248.1,-124.53 -29.44,36.34 -47.99,96.85 -72.86,142.12 -110.71,201.6 -343.75,428.12 -363.95,497.55 -84.58,290.59 -136.07,59.93 -355.51,305.77 -56.83,63.67 -32.2,81.88 -64.17,151.52 -24.66,53.74 -1.75,39.04 -75.58,39.28 -198.21,0.62 -465.25,-416.07 -545.01,-445.47 -90.02,-33.18 -82.5,36.16 -165.08,44.99 -63.6,6.8 -147.74,-4.71 -216.76,1.08z" />
										<path class="fil8 clickable-path" data-url="https://mahoba.nic.in" d="M9811.65 6069.52c-20.21,83.54 -3.04,260.17 -6.7,356.43 -4.28,112.45 -81.11,187.23 -169.35,206.49 -95.93,-50.51 -138.72,-186.68 -290.87,-108.7 -259.01,132.79 -171.35,29.26 -332.15,-30.43 -53.06,-19.71 -359.05,-29.92 -445.04,-40.92 -130.72,-16.72 -265.86,-91.21 -387.56,-92.89 -65.48,106.79 -252.5,287.44 -336.56,401.36 -48.57,65.82 -22.53,127.65 -31.58,219.92 -32.28,329.45 -285.99,-4.43 -366.5,627.03 -48.47,380.26 -141.38,256.17 18.02,834.18 30.84,111.91 76.33,267.41 115.54,376.81 18.15,50.6 180.81,253.65 227.32,288.11 45.91,-20.38 140.76,-108.4 160.21,-156.56 119.64,-0.62 584.44,95.48 661.95,141.37l6.2 173.36 183.1 1.48c38.21,-130.21 85.48,-264.21 154.53,-364.42 42.75,-62.04 190.72,-197.04 308.85,-201.36 56.82,148.91 96.08,210.08 238.05,267.71 261.83,106.29 486.98,15.87 899.48,139.21 577.93,172.81 348.19,140.16 553.09,-35.87 69.91,-60.08 113.78,-51.57 190.14,-90.5 -34.73,-94.69 -87.86,-197.59 -128.69,-295.73 -105.28,-253.04 -73.8,-220.65 -188.73,-239 15.69,-39.02 208.51,-224.04 244.34,-249.06 88.07,1.05 193.55,70.16 272.98,73.57 89.55,3.81 558.67,-365.85 630.53,-423.28 124.34,-99.38 285.22,-220.59 377.18,-323.49 110.29,-123.4 246.66,-232.03 348.33,-359.41 -13.16,-11.15 -5.38,-8.28 -28.32,-18.57 -19.04,-8.53 -14.27,-6.98 -40.45,-11.71 -26.99,-4.86 -58.84,-6.7 -88.31,-12.57 -174.23,-34.65 -274.01,-89.57 -446.64,-165.14 -45.93,-475.55 109.93,-602.41 -198.87,-603.75 25.79,-79.41 89.86,-168.52 104.24,-267.05 4.78,-32.81 4.09,-326.85 -0.9,-358.84 -11.07,-71.11 -89.54,-192.03 -126.98,-234.44 -47.05,-53.27 -145.76,-108.4 -244.91,-117.27 -29.05,34.22 -47.37,91.21 -71.91,133.84 -109.29,189.87 -339.32,403.21 -359.26,468.6 -83.5,273.67 -134.32,56.44 -350.93,287.97 -56.11,59.96 -31.79,77.11 -63.34,142.7 -24.35,50.61 -1.73,36.77 -74.62,37 -195.66,0.57 -459.26,-391.86 -538,-419.55 -88.86,-31.24 -81.44,34.05 -162.95,42.37 -62.79,6.41 -145.84,-4.44 -213.98,1.02z" />

										<path class="fil9 clickable-path" data-url="https://lalitpur.nic.in/" d="M964.74 9135.48c68.93,-22.71 104.12,-94.17 154.51,-134.44 -11.4,-54.4 -7.91,-13.71 -33.03,-71.66l197.14 0.92c8.2,210.25 -65.64,330.74 -239.99,393.86l-134.77 48.53c-27.85,14.92 -12.94,6.58 -26.86,17.07l140.24 254.82c56.78,7.21 12.28,1.58 77.74,-17.48 -15.3,471.61 -1.77,471.41 -423.54,745.62 -131.59,85.56 -207.32,179.54 -301.78,282.09 -156.26,169.67 -178.88,147.37 -342.09,239.99 0.69,225.13 361.46,211.33 361.23,700.62 -0.06,134.79 -23.9,233.55 34.91,328.62 156.88,253.63 219.58,489.45 243.11,804.41 13.92,186.41 14.88,208.22 -142.07,365.17 -42.14,42.14 -41.4,49.99 -48.62,129.83 -31.23,345.54 -59.02,300.28 48.72,429.05 38.59,46.12 44.63,58.48 44.78,141.14l98.41 -25.43c26.33,96.58 130.28,237.28 205.28,288.68 54,37.01 104.57,57.38 151.74,94.33 49.65,38.89 76.58,84.12 119.48,140.03 59.72,77.81 51.23,68.22 24.18,174.51 -68.75,270.23 -78.31,258.87 -6.74,392.39 25.33,47.23 55.38,151.91 77.38,179.46 379.18,-17.6 384.04,-373.26 557.36,-568.46 72.36,-81.49 260.7,-187.96 410.68,-111.75 82.26,41.8 60.17,109.99 99.62,186.16 18.51,35.71 38.83,49.43 82.82,60.73 51.11,13.13 87.91,2.03 111.66,30.65 23.66,28.52 24.9,244.62 322.78,428.64 45.62,28.2 153.29,65.47 175.32,82.92 32.03,37.13 50.28,206.76 67.48,270.36 155.06,30.72 206.22,90.29 345.34,6.27 51.33,-31.02 234.77,-147.04 285.17,-153.57l206.08 551.28c65.87,-15.47 434.02,-285.42 533.09,-342.58l-2.58 -241.66c302.47,-4.51 213.49,-14.03 426.92,-505.42 55.63,-128.11 140.7,-281.78 259.36,-350.63 64.03,-37.17 78.63,-25.41 120.58,-45.69l19.05 -11.27c2.39,-1.4 6.66,-3.85 9.5,-6.42 -56.41,-24.3 -141.04,-89.08 -196.63,-126.86 -87.15,-59.23 -149.77,-41 -261.65,-75.88 -238.65,-74.44 -182.31,-232.28 -187.89,-491.1l251.84 100.58c-4.28,-69.59 -77.8,-193.81 -98.03,-274.88 -45.56,-182.56 41.74,-167.63 59.47,-296.94 -409.2,-163.82 -204.36,-357.72 -227.01,-427.9 -64.38,-85.76 -106.28,-58.17 -211.18,-25.19l-6.39 173.72c-63.13,28.53 -220.09,52.45 -297.55,70.25 -296,68.01 -51.89,246.66 -560.95,23.76 11.29,-53.92 48.02,-93.93 54.51,-164.07 8.67,-93.69 -34.97,-124.76 -21.82,-206.77 29.82,-186.1 199.61,-308.9 209.95,-467.55l21.36 -661.01c9.19,-182.2 26.33,-241.99 -94.16,-331.87 -167.63,-125.04 -301.23,-55.81 -508.02,-387.42 -121.6,-194.98 -60.96,-140.7 -218.89,-229.48 -4.96,-115.99 -9.23,-240.95 37.09,-333.02 72.01,-143.15 53.24,-176.54 53.24,-354.62 0,-173.58 13.62,-166.95 -82.01,-273.34l-175.63 -187.7c-79.62,-117.06 65.71,-430.61 -130.95,-595.61 -82.28,-69.02 -128.42,-99.36 -255.89,-49.72 -278.15,108.26 -468.06,454.84 -606.13,483.28 -41.94,-54.26 -243.01,-418.95 -268.29,-484.54l-92.94 20.3 52.03 -196.07 -171.66 -62.05 -2.45 -184.14c-86.45,11.01 -211.85,170.35 -279.85,234.42 -42.24,39.81 -54.09,37.41 -93.36,88.36 -48.6,63.04 -104,139.6 -98.19,246.09 3.36,61.53 67.34,214.28 98.4,265.32z" />
										<text x="4912.87" y="5917.94" class="fil0 fnt0">JHANSI</text>
										<text x="14350.44" y="6712.05" class="fil0 fnt1 clickable-path" data-url="https://banda.nic.in">BANDA</text>
										<text x="17091.25" y="8734.98" class="fil0 fnt2 clickable-path" data-url="https://chitrakoot.nic.in">CHITAKOOT</text>
										<text x="739.22" y="12277.57" class="fil0 fnt3 clickable-path" data-url="https://lalitpur.nic.in/">LALITPUR</text>
										<text x="6523.64" y="2288.67" class="fil10 fnt4 clickable-path" data-url="https://jalaun.nic.in">JALAUN</text>
										<text x="8250.07" y="7726.11" class="fil0 fnt0 clickable-path" data-url="https://mahoba.nic.in">MAHOBA </text>
										<text x="9210.93" y="4979.88" class="fil0 fnt0 clickable-path" data-url="https://hamirpur.nic.in">HAMIRPUR</text>
									</g>
								</svg>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="popupContainer2">
		<div id="popupContent2" style="border-radius: 8px;overflow: hidden;">
			<div class="close">
				<span id="closeButton2"><i class="fa-solid fa-circle-xmark" style="color: #e66565;"></i></span>
			</div>
			<div class="main-popup-content">
				<h3>BIDA Landscape</h3>
				<div class="main-popup-content-part">

					<div class="svg-container" style="height: 60%;border-radius:8px;">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="400" height="400" viewBox="0 0 736.333 980.096">
							<g id="Group_107" data-name="Group 107" transform="translate(-958.333 -47.904)">
								<g id="Map_-_Village_color_Names" data-name="Map - Village color &amp; Names" transform="translate(971 13)">
									<image id="KHAJURAHA_BUJURG" data-name="KHAJURAHA BUJURG" width="134" height="204" transform="translate(474 811)" xlink:href="data:image/png;base64,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" />
									<image id="KAJURAHA_KHURD" data-name="KAJURAHA KHURD" width="87" height="107" class="view_map_detail" map_name="'Khajuraha khurd" transform="translate(440 818)" xlink:href="data:image/png;base64,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" />
									<image id="MATHURA_PURA" data-name="MATHURA PURA" width="17" height="29" transform="translate(531 789)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAdCAYAAABMr4eBAAAABHNCSVQICAgIfAhkiAAAAc5JREFUOE+dlM0rBVEYh9182ylJKQs7G1tlZYFSioWNxH8gdor1tbKQhY+lspKSoixELFiIKCklH2XBgku+vz2/aU7NnWbOHPfU0z3N+57nvuedMyc1vT+XxyiHDBRBCt710HWkkFSRPAPrMAmNsOkqUJ4kWrQBd7AKo3AOX64iSWpIvoQfeIVbaIWT/0iUK4F6ofELN1DtP090qZKwxCxaY9KSaPB7Yv49Kl+itqT+mEq0hbhx4Iuu4xJcJN8sPoJOuIgSuUi0Tq/7GDqiRK4SVfMMu9AOb8GKJNFRdznm9+QVQx8shCV1fqmW3nohnSWdnwqoBEm9oUrUsMUYwwfPC5Xnxz/5fYEt6IUHF8kjSWWQH/gTNVlVjcCYkTQx0QcYN9TUoER56uEVqD/b2k4Dk51AyWGZDqLZTjAmudowJMk4kwFLJbaQtpWWpIeJ9xVaRlw1WpKRpJ7JYY6VaNmSJAVM9OpyGbpO+233iU16SrAZdCN6h02/uhZLHEpRI7sg63AaiU5haYJkmXg3PIXzJJnQviyCFWKDoC1EDknSRIZDUX3qs6BjHbvYrDHbUYm6EuZhCvYg686wbVUSfaW5vmLPLUktv2cJTbWG/wC/Cp2EoA44mwAAAABJRU5ErkJggg==" />
									<image id="KICHALWARA_KHURD" data-name="KICHALWARA KHURD" width="57" height="47" transform="translate(473 783)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAAvCAYAAABZl2IDAAAABHNCSVQICAgIfAhkiAAABG1JREFUaEPdmkdoFFEYxxO7YhfsSlTsiIglJrYgHqwRBZWAiCLqQTxYUAnEFnNSD/GQ4MFyEBEV8eBBEQuiiCjYK5Zo1Nh77//f8mYZ10mYyTrr7vvgx87uezvz/vO9+r2XXnpmcVoSWA2VoY6hrj7biE6ikfgp7ogb4o35HqjI6QkWiRiHWrpuLtqKziLLwHfSEE1e7Ks4JzaLQ+Kd+O5XaSJEpqsweKe7GCH6GlGIcXuvoclXVdlfKPGBOCFOGuF4+ZvrTzwP+2VIC1MkAvqLGSJbNBZNBVWwpl8vVJIPz1J18ehLUSYem/u31yc1gOpdKMrDEEm1myiGiVaio6gdpyg/f0c4z3E8yQsoECX/SmSGbjZFDBa9jbD6fkoWcp79un9eUJFUM9oWVaKd6GOuEdnVVJeQyx3o9leVe6hfkb2Mp2hjLQWdBCA23vYVqNQBM1co/xg/ImlfS0U/kQxVMIjOp8o81UtkFyXgudambdHWqKLYjyT3XOwLwJPjvUQuV8Is0cIQ+0fGH8zpxYK82UTnfaQHjvQSuUsJeK8ySzWROV4id0rdtES/8pCexwRhrJfILaa6hvTchNyW2kZzeiXme4ksVcK8FGlzVTUpRDLrKfQSuUkJc1JcpCMekWu8RO5VwqSEVKrwH/Jej1jtJfK4Ephc22BvJSI/VmQ9/XhEsJKwwViOLYsVOVo/0vFk2KDQdDwFbpH0RttFniWdDn6i41nlFknwiPgJ60Fb7C+RzHKKBat5W4yOZ63jSQJNzFknWFRVcRRDSJEjcpC+7BEdbHGh0fHMaZMEf5aIfMFq3ya7JTGRVQht8KjoYVlVxVmEJQcgcpQudgtiorbZTQnKRGSRLhaKVIvf+HFIVCQdDhNyZ9/Bz59TJc91FTQLTzI2sn5kGLHNrklQNiJzdbFNNLNNofRERRIJZzrX00KRl6UpEkGnmm4QswVLLZvsvMRExklWH0MEwwgBZZssKhJRePCgGG6TQmk5JnLdSy328tjzsGFqx1b7bcH2e7FbJF7cIeiIUtXuqeDPxUWxT5wVFW6RtEeWW15BLDZO2Kdn246N1mQaUx+qPKw27ovDggMUXCM4Ym6RzHjY318hOF7iGKH2daJEEOBi8sDm6/8wIuNExVknAhs6DH8cksCDHJzg8w+LDWQ1UOoCMVNwgOG12Cqo21yz/79SEAcKe677Rc9gZY8wrj8aUYRMWV08EZ9Fmfk9Vlv0u1fclVgPG67MgKimuJ+3hzURHFOZK8ZVetfqJdBZ8CIpOCc68NBdwe+EFhHF/uglV3l8PcnPTnPsjRhXp4uNIt7lGR76ZITRSRwwYsr1edqXAh+ZqiOS22aI9WKyCLoZi6c4jkL7oS1dMJ7hEMMpH2UOnKW6ImmP48UikelD6AfjLToKhDCG0RTwHpPoUK26IikUnRQrGJZpBML47jbaEl5jTUc1vCLoSPikOkaPhYWqEA/EeYAQYQMFQ0uO6GYKzKkLOghWAWWC9sVvCRPmfnG/AdAJKoOJZQmUAAAAAElFTkSuQmCC" />
									<image id="KICHALWARA_BUJURG" data-name="KICHALWARA BUJURG" width="69" height="90" transform="translate(381 770)" xlink:href="data:image/png;base64,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" />
									<image id="BAIDORA" width="50" height="121" class="view_map_detail" map_name="Baidora" transform="translate(341 726)" xlink:href="data:image/png;base64,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" />
									<image id="MURARI" width="91" height="137" class="view_map_detail" map_name="Murari" transform="translate(385 692)" xlink:href="data:image/png;base64,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" />
									<path id="GURHA" d="M533,679.243s4.889-44.742,12.711-47.029,30.311,14.7,30.311,14.7L577,657.688l-5.867,12.737,1.956,8.818L569.178,691S547.015,679.569,533,679.243Z" fill="#81d8df" />
									<image id="CHAMARAUA" width="111" height="129" class="view_map_detail" map_name="chamaraua" transform="translate(456 661)" xlink:href="data:image/png;base64,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" />
									<image id="RAMPURA" width="87" height="75" class="view_map_detail" map_name="Rampura" transform="translate(457 604)" xlink:href="data:image/png;base64,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" />
									<image id="DOGRI" width="73" height="126" class="view_map_detail" map_name="Dongri" transform="translate(516 516)" xlink:href="data:image/png;base64,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" />
									<image id="MATH" width="88" height="85" class="view_map_detail" map_name="MATH" transform="translate(438 566)" xlink:href="data:image/png;base64,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" />
									<image id="BARUAPUR" width="99" height="98" class="view_map_detail" map_name="Baruapur" transform="translate(355 635)" xlink:href="data:image/png;base64,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" />
									<image id="BADANPUR" width="86" height="87" class="view_map_detail" map_name="Badanpur" transform="translate(86 686)" xlink:href="data:image/png;base64,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" />
									<image id="BASAI" width="77" height="71" class="view_map_detail" map_name="Basai" transform="translate(131 649)" xlink:href="data:image/png;base64,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" />
									<image id="KHAIRA" width="98" height="66" class="view_map_detail" map_name="Khaira" transform="translate(169 629)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGIAAABCCAYAAACsCQM4AAAABHNCSVQICAgIfAhkiAAABWxJREFUeF7tnVnIVkUYx/1UWrQoqUhRiJLIQKuLJDG9sI2KussoCKNu3NrBKBFRE7xzo6CIiO7aLoo2abmI1EKCViuDCjKX1DDXsnL5/+qMHN6+z3fOOXPOPGdeB/6825x5nmf+s51nnjlv3+L1dw4KlO5ROQuEc4QzO8o8os//CIdz3w/J3g/W61CBPCRe/xD+zD7zG9e617/1/i/hd+GgsE24PZAN0YrpC0TEeFnwVTQr/iNqlfCJsDMj5/uI+hQWHYqINyT5lsLS67+A3kPv2ifMFk4V9gsbhc31i/eXUJUIjDzNX5yZnEezYe0MKxpVIeJxGbFUYIxvY2IOOt2K4mWJ+E4GjBWYQNuamPAZqkykMkR8Ic2ZnNvaE1zFQ8T5Aquv6KkIEbdlQ9GFej0luuZhFLhaxawPU1S1UnyJeF9irq0myuTVN0mrNRY08yGCYegdYYwFhQPrcK/Kez5wmaWK60ZEW5envpXxjDLO8s1cZ74TEbFcgu8X2rwy6lZ3ryiDCfdIf0Rwl3yz0PZVUTcS+N1sj7gxmw98jEghzwoZ8YgFQzp7BPcIl1lQrCEdTA5Ne2V8p/u6ofqIJmatJE+NJj0nmB7xkD4vFEZYUKhhHUwRMUfGTxfOE/CkjhSGN1whscR9IMHXxRKelzvQ8hU/fsrLVlcH5ongbnqeMFrAt3SRhVZTgw44/l4Xot9LdLuzxnZI+SzhHvKbbDu3BpILFelDBAVykzcxm0dSu9GjV7wo3F2o5gJn9iXCiU3VAbhHBp4duG4LFVeUCArfIFwp9BWSZDszRNwhRHOJlyGCKmWT6MGMkDYGD/TXLIin+lq4PEabKUuE05WQlJT2KaJN3FWJoGfgz09piRvFEViViHwvpmunMG+8KTtubXp4CknEdilPVETb0y8yYJPQqOsjJBEQQNDZEiEF98h82bGsqVYVmgj0TmWf+z3ZckObieDG6ENhQgJzxo6mhts6eoRrRETQnVWyRR3SdVbCIQkvvbSkHd6X1UkEESCrvTX5f0ZC6YnWtrAS49wFwWi1hWfWSQRVu0vgBFEKCecg3oSn6zCmbiJekNJ3CSl5bFfKnodDk1E3EU7fqsNUaLurlrdIBSyuWkj++qaIwH3+pZHxPlT9vaWCgh1Xa4oIjH9ZuCahOYPjXz8IF4dgtkki0Jd42uDja4iKKFkG3tq5wkslrz9+WdNEPCHJjwqpHHShItlU4ngxS9yZwpYypDRNBDqmtKTtrPNf9QVxYYVTDCK4U2VcTWlJ6yqerYDXhAcEbkgJY/VKMYhAscnCOi8N252Jw/X5eOJR+sxpXPf4Cw7eM0IMikUEsll19EJi/sBN4yq/0+ZP9cXEmESw9Es1grBoA9sWkwjcHzOKapxq/phEcDrpWSGlKJDS7SQmEU5pVlGXlLYgjQuPWiCCyEHians5mSCCJ589l60sepWMwxZ6BJXfKwdjBmpoh6wQwbM+eEBJKnG0RXv2BitEoHhqnllfMgiUmGeJiNR28XyJwD813xIRKN4rbo9Okh47SYRvu603nykiiBB8VUgpxN+HPh67cYW1HoHivTZXPCWb77NIBHvAT/o0pUTy/Hvo3iIRU6TYR4lUso8ZPyvTBRaJuF6KvetjQSJ5fpQdYy0SMUmKfZxIJXczg3jaq4TPLRJBBDgb70WTO8PnosfxXxGg4P4OgfJ4DwjnGWjr0snlnsblz+vCd5TL9cgqEq3OtYTf0AuYpI8/YdMiEa7C8gbiBjggsBm/VeB/I9h0/1YgVP5twf1NwTi95zFHPD8kT0JRYvvLTyPhFO20ExCAzN1ZZaMziVNUTMrfDKSEVSLYnxgmMJH9FKIGrZdxDF7gNwHD9Q5iAAAAAElFTkSuQmCC" />
									<image id="AMARPUR" width="94" height="148" class="view_map_detail" map_name="Amarpur" transform="translate(268 580)" xlink:href="data:image/png;base64,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" />
									<image id="IMILIYA" width="84" height="93" class="view_map_detail" map_name="Imiliya" transform="translate(235 578)" xlink:href="data:image/png;base64,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" />
									<image id="PARASAI" width="72" height="69" class="view_map_detail" map_name="Parasai" transform="translate(186 559)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABFCAYAAADpc6CZAAAABHNCSVQICAgIfAhkiAAAA0ZJREFUeF7tnLtuFTEQhjkEAUkBKJRIVPSIPEAEJQU9j0AokMIb8ALcGmh4gKSkoEIiQE8iCrpEoqGDKEECcQ3/HGWPzMpejy+zWY/3SFaUXV8//zO+rHcnB892jkX+biHdA4RTCBNHHr9xfR/hMcK9yHKONNkkEtAean0mQ83/Io9HCHcz5CWSRQygXdTknEBtXCoUKIqfZQygA372STEHAWzIgEy61Cnkz74ivEe4loQ+IHEpgGxN6kVhoYDeoaZXAjpAOup3FLAgWUgooL78T2ybqX7HYxNbZRowzC8jg9c5CxfKK6vphSho6Oqx8f6DiydSOkI7IGKzjXApFhIX0A8UcDK2kAGkI/WvI9wMrQsXUInmlWVqUBsggkadTSt0ltlxANGCMuvIECpz4fidbeMA0mJeLs7UvtsIT2PmQdrV450a+BSkXT1d1kvimOsCdB8RVoXtf+jZb3QBqtG8zA57i3+WuwDVbF4Eajq6uQB9w735oetfsH6zod8FiBZ5WbcNBBuTO+v/FrguQLWa10/QpsdYs58N0CvcvZq7WwrIzzqjtgGq1bzYgGozr09Q9wWXwtsK+oyIiwWYQ84qbiKzJS6g2tRD7X2I4Hz03VZQTYBY+9U1A6KTKd5DEyag2kYv1iagCagm85qttXzevkZAa4DCfrrRAPqIRBd9NJXcZ5lW09YGUC3mxRq52muxG7jwXIk6fM0IUs/UUeHwwgv8ve7LWcn9KEB30Hg6SKn5F30sphYf9Au9H3W2gABp3v8JNqm2GREgrSv4L2js+VS/odXEOvd4QqBpBJR0YMpmYtqeoCb7nfZEUcsTVHpp5myI+XDikolpAZTFKdtMTAugFTTOesaHoxRXHE0Kyup7zNW8BgVFLyV86iIF0Vs0c76IA76/gbqJvf1DgErfix4BedQr4pxNH1S6gkScswmodB80AuowselJVMkBpPTtDlH1EPiSN8zE4TSA6AsKTyRlKpR3b4Co/iU+FxsBeZTXK6ASVTQCGhWU5r17V1BpZnYkgNL6tN/RsEhAJmCaX9HvA8IbC/mXuHYZgY4dx7wXUjygFDVy5mVVA6KvzNBnwOiA92mE5uBT85mJrcN7KZ3ASvsPUxwi9gaArIAAAAAASUVORK5CYII=" />
									<g id="BACHHAUNI" class="view_map_detail" map_name="Bachhauni">
										<g id="BACHHAUNI-2" data-name="BACHHAUNI" transform="translate(185 446)">
											<image id="Layer_16" data-name="Layer 16" width="95" height="127" xlink:href="data:image/png;base64,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" />
										</g>
										<path id="Stroke_Effect" data-name="Stroke Effect" d="M185,573V446h95V573Z" fill="none" />
									</g>
									<image id="RAJAPUR" width="120" height="130" class="view_map_detail" map_name="rajapur" transform="translate(265 479)" xlink:href="data:image/png;base64,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" />
									<image id="GAGAUNI" width="65" height="66" class="view_map_detail" map_name="Gagauni" transform="translate(336 601)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEEAAABCCAYAAAAIY7vrAAAABHNCSVQICAgIfAhkiAAABGdJREFUeF7lmz2MDVEUxz0N0axIhI5E4qug89FIFKjoqFD5aFDZROGjIBo6WwgS3wqioaJYa0MEFRWqpSIioRAKX//fM/OyO+bNu3fmzrx7npOcvN335p659z/nnHvOuWdaF4eGpnnQAl27QTxf/F78RvxC/MVDRnSXtjxA2KzZ7xBvzaziu/7fJr4b3eocJ+QCwj7JWiVeKV7RRe79RCteJ2C8dbx/FJf1AuG8ZrnLc6aYBqCgHSaoCISDifp3e/pFC3ymH+HP4lvilzGj0Q2Eq5r09oATxzxOiC8ElBlMVBaEliSfFO8Rzwl2l7+C8BdoBBpyOrDsSuKyIIxJ2nLx3EpSiwfjMzATdhXoWgLQB32iMXw/Wzwj+Vyszy3idC+fqb/nJddhakeqznUyCHckjG0wRgK4vIDmqb4HpCXij2UnnoJwXAKIAQiGLBEmhgZhYsNlJw4I9zR4Y1kBkYx7V+UBAsJDCVgXyWLKTgNt2C/GR3gTIJzSqN1dbM5bYB8HELbjQL0p9QnfNBKva5nwC5i1dzKXgkBuQKjrlVJGiBjm4B2uT94iMQt2CPZgy0TA50XZYInaQJlcweumNV+8WvIxDWfKgoA54CTRCqtE3rPTZ/J5CRQmccVHSGTXeu8S3bJI62ZBxuqcU3QDgVqCZZMgCVsqdqpwFRVVCKeJJK3GD86+oVd57WYChNVtE20gySqkXiAweEJsLbtMF01m2bOA4wKC5SyTeIG4obImEI8DhEXCMbJlwqQFueSiCQxkp2DHsEr4BXKK3Kq3Kwj4BOoOVn0DDw+tWJj3FF1BYCz1PLJNq0TsQFGXtGAK+YDAGSRmYVkbMAeOE0uDMAjaQMElPS8ltG6TjyZw/WExlWnrhGnQXtCuQvmCwJjf1hFI5j+iT4qzpUAgzSbdtk7EDZvKgoBjfCW2mlilDw/fQG5RShMYZ73ewBrwC+PiA2V8AgJo3KCBYxBouCwImMTEICCgNYyUBYH1nxHTz2SdKoHAMT7VG+sHNteraAIaYD2fYA2Xq4IwCIe5l6qCAJI4SMtJ1Y0QIBA40S5jlcZDgGA9cHoUAgSruQSJICfYoyFAILUmxbZGPzXhB+JjIUCweoB7TgDs5cmFAAE5FmsMnUPb/xkEehiIeINpQszdsHm+ipY/ymttCqUJnF5zeGvl4Jaye6fjPhQIAGrhlCptAZ7S7xgSBA5mSKhiptyehZAgsHha+GNOrTmP/Kf1NzQI+AaKLbG1AXK+gPPO7WoLDQLaEGM/Q6eynGerdYBAWk00FsPrAzhCKsrsBJX7E3ydXSz1R6eexjo0IQWs36U3tAAn2D5qK6I6QcAcqEY3/V7VV93zsZhjeKdXguoEAfCbrjX80j2fi9f0evqTf68bBO7F2/VNhNNkspyKtdNjH2oChKaAoLhz1Gfx6bVNgZCd2yF9QQP2LM9J/9D1T8S3xWNi6puVqV8gMPHpYhot14uXideKF+WsiPezWPio+Kz4U+VVZwT8AR2k5sFe0y/SAAAAAElFTkSuQmCC" />
									<image id="BAJNA" width="131" height="151" class="view_map_detail" map_name="Bajna" transform="translate(382 524)" xlink:href="data:image/png;base64,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" />
									<image id="BAMAIR" width="75" height="69" class="view_map_detail" map_name="Bamair" transform="translate(364 479)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABFCAYAAAACRBuaAAAABHNCSVQICAgIfAhkiAAABM5JREFUeF7tnFuITVEYxx25hiSlkEh4Mi+8uBQlyu1BXiYPLkXeKA+iGCUe8ISHKRqTUpo3HlzK8GBCyphyGQ94GGNSRnLPPf6/sddxmjln77XP2WvPuaxV/2ZPZ+21vv073/7W2mt/62TmHOkY4rgMVfvTpJ/S15y+/uj4veO+E20+kwKsy7J4dYjVz/XZTulqolfmoDFXsEbK1v3SBmmiNDwQXpYJxLEpv3XQKn2TOLdXuh/ojoPrLqpJF7AWyZIL0qSiLBp40vcA3uMID02ou8LNJAkLSLuludIsB5YbaB8CeB/1l+NO6XRw7KDb/00mAWu7mjsZ3D5OjQ1pHGhvpNkuDSgFFl60Ulrm0sAYbb9UXQQ4vG6+NFO6Jd2TrkijpZvS5xjtZqvGhbVKZxK4MYRAXO7liwwcExj5S3+HScyViKl3pWfSC9uLsIVFHDomAauSyjsZOyHEYKAdkBg8IksULEY0IOFJAKvWgpddl5i+tBW6yChY3OeV5k2lfqF42QmpqX9DhWCdUkVi0mLJxTSg1AtyfT6xrFE6nttRPljdqsCznC//BoL1BkR/WO1BbKqEkS6tL3OTOjpHZ7mwcL1avOWioGe9y8C6oTPKZXIZZXzanxPw64xnMdox6vlSmEDfrYhnea+yc5MMsF6rblLLKXbdVmatKcAyC26VeQnpWV3nYdnDrgcWLw3G259TszVbgOVn7Hbff4eHZQeKWk/8aGgPq8vHLHtY3d6z7GF1+phlD6vdw7KH1eZh2cO65mHFhOUX/eyAteJZHpYdrIfAeqS61fxO0A5FdK1XHlY0JFOjF1i39R/pQr6EE+gBVovq1HtSkQQeeFiRjLIVLgHrrP7dbH9OzdZsBBZ5DWTv+RJOoAlYJKcd8qQiCTQDi9dgvDv0c61wXgfN63tilkkzikRcoxUachNDeI3PFIKch1pPOSJB96n0Q2JzA1mB+/LlZ5F2RFpkLZdsMkguhHyw8Kx9QQyrhdf6ZC+z8eCTRIKM8agBWcz5YBmY5CWtq3L3YsVll8RmrMgSBguv4gVsNWYBEouYLl2UrNK6IRkGy5DGNbk1qwHaW10Hqeok1gIsVrGBRYPV8IqfXPcGiZGtqGILi8bxMJZyKiWJhABN8CYuAYoNAUXt2TFk48CqNA/LO/wX5VLBSXFhcRqLhWQ1l+u0glhEwv9hiRiVWCkGFp2zv3BHYlYk1xCg1khFx6UwU4qFRZvlNtMnHi0N4lRy+HNaKgUWzWyRzki5m8OdGBrRKB61TerbCeGqlAoLu85L7LIfzIJXjXNtQBKwRslIJnqDFcOYHjBNyG5IcgUtCVjGth4dTHVlaIF28Sj2PK9No98kYW2UwUelERI/fJFGSeX2MxeSJCzTJu8hF0jTU6BV8bBgxJqQ099YCL4IYtWMFL6Uvi5ceBbtAopZNB421tHF8DjD5JP1qFSKK1jG+C6HtyMPxwtToRR04hoWXsUudv7iZUkEfuIUKwh7JFYUUiuuYeVeCEP8khKvjAfjvcEXUGJT8U9PE9ZymccjCQ+6tnHMrD/xC0dA4r1AoisJcZClCcvYNU8HW6UVUv8Rk2c85mnmVmO0Sy2AR4EbDFjGJjwMaJMlHpn4UR1+B7A58B6nD8VRYPJ9/heYDjC/stASLwAAAABJRU5ErkJggg==" />
									<image id="DAGARWAHA" width="121" height="123" class="view_map_detail" map_name="Dagarwaha" transform="translate(332 374)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHkAAAB7CAYAAABQMi9CAAAABHNCSVQICAgIfAhkiAAACexJREFUeF7tnVfIXUUQx01E44Oxtwh2o2JDVEyiYKyI5cGIWBA1YMUSImiCYFBQBI2oKApqBHt9iIK9oaKiYsEO6oMNxVhQI2rs/9/HPeHm5pY9W+7dPd8MDCn37O7s/M/MmZ1tE96bNm2VcUKHq59TW31dXX9+I75zPPR9wjgAeZaAnCee3gHor/r3C+IXxVc2Geymg3yNwDtLjOX2Iiz68xbY85sIdpNBvkiAndTmogfhB9ivio8a9GDi33kh/xb/G6udpoKMi75DvKaHop5RmYM9ysUoAsBPio8W/xCjQupoKsgAfKKnkj5RuRtb7vstzzp8i9HujuLJrQpO05/BMjQR5EekGCLpUEK5e4RWUqM8kf/HXZ6/X/93XNv/EyxCM13rbhrIWC9WHIP+VCULxLeKo7nOPoL1ejmJ/ivi87OzGLcO8LwAA6lpIN+nHh87sNf1HkDJl4r5Vqeig1TxYnGdGOJ9PT9DzFCwLzUNZNxdlfAY1Pe6vxN1A0QKwgXv61FxpyvvWkWTQGbIhHvtNyb20OPyIlj02WIsKCbNVWXwFh6VMr7HbTP060lNAblX0OKht75FUOqWESvlhVwa4cUkGu/ptpsCMlbMdzM1oUiGObEyY6Rbr4gg9CLVwXCrKzUBZNwc3+JUbrqb4mJYNN6HYVqdYKvf+wDIgL0SNQFkLAGLGDaFjqNjjeerfjPM26CJIDNcAmSfoCXGS+GbAj1Vjd+QwPt0ddulW/LXUtSUGGgF1IEF7Sd2jbrJxt0uXj+gzX5Ft9SPfE6WU8kgYw23JFJU3WoZwhCQDVqEAMBk5WInbNrlXcmaSwUZ68WKcyMsiITJeR2ChYyFffrIFOvyF65UkFkIwDctR8JtfyDGjf8oJnrGelO55246WCETViLIAMy4eNTf4hxfsK5uuzSQGQs/LfbJ8+YOSmz5mBcnabO4NJAJtAi4jNw0cJkeW1ASyKNKeripM8+nWLe2aSkgE7wwNEg59MgTpjCpxtKvJYDMemnmW4eZmw5TbT6lGb/PKAHk9yQoS16M6muAOfCZwwB5VTV0rniTloxM1/GGPS9mfXE/QkgsebX6/bMS0gC6njIMkElaMLbtJJIFgPiA+GHx760HmABfKN5OvANCGlxBGpiQGuRLJN7FDiL+rGdeE38nPlBcWT1F/xNPcKjDHumugaQgk7+92jQ/Ug2wrHhSKktmmwf504kj7aI1ngzk/aXbJ8Q25Bn9S5YM5MvVtwtH3z+TQBogup6cwl2zJIbgyWj0GkgG8qfq2zaj759JIA0kyV2TmXpMvJmpOAsNRLdkgH3ZAM4C3EqIr8Aj5jd5WLsYstJi5sKQZFonFsgADE/KvNPjTbxolry2NHev+NDxpsEC+vu6ZJwWw5KvU0XMMhnlpwGmaXeNATITCEZ5aiDKfPIF6lujT7PLEztnqdjVcXaoJf+kSvgmG+WpgeDlP9uqX6ztNcpXA29LtN1DLPlkVXBbvv0zyaSBe8QnhIBsUXXe79E/Eu9M8aIQkJ9VBQfk3c9xLd0y9X4NNBACsi2VzfsdAuTDxM+FgEzQRfBllK8GAPlxX5AtV50vsO2SBW14IwFCIsQobw3cLPHO8LVk5o33zrt/Jp00wAE0s31AZujEmRSW6cr/PRo7VsIHZA4+OTL//pmE0sBD4lk+IP+hgrY4oIx36BWJuU9dkFmox/jYqAwNeIHMSbQMn4zK0ADHTe1S15JZbmvLfMoAGClZAz+1Lsg2dCoHYCT1cteWry4LZK/o2laClAXy9RJ3Th13bfPHZQGMtLUnKCwJUh7I+/BdrmPJtkigPJBZNLCsDshvqMAw7y4sT6X5SVwLZMbGN4ltS2p+QPaS6Ev9sKd4iaslc6Yl9yAalaOBDyUqxvmFK8i2xroccNsl5ZYdZ5CZdWL2yagsDdQCmW/xF2X1z6SVBjYXf+nqrm2Ksbx3hstOdhH/5wqyfZPLApndEwRd3NfhvLje3HU5ILOo/hTx3ZXIrpbMW8FcslHeGuCYxVmdWLmCbJMTeYOLdFw0xoQER0qvQK4g25aYvEF+V+JxDySn/axEriDbPHK+IDNxdIiYYKsruYDMInpANspPA1y6yUaHvuQCsp0oMEiLo/n9LjXLRZ8DyQVkC7oGqnHoD3ysFrd3bdUFZFu856rN4TzHt3dd8VLX5gaBzPcYkG0e2VWj6Z97Sk0QaDnTIJA5ThF3bZSPBo6XKLXm9geBbJvN8wEXSbgwjcvQ/qojVj+QcdUvie2exDoaTfus05CpU4R+INvmtrSA+dROVqv2HEI/kG3fkw8M6cpwGvF64tqJqV4gcx4IIBvlo4F3JMpuPuL0Atmiah9tpi1zi6o/3aeJXiCbq/bRZtoy81W919ni3UC2XHVasHxr5w7M530KdwPZctU+mkxbhnHxOuLffJrpBNkW7PloMX2ZsRMDfJvpBNnulPDVZNpyi1T9ab5NtINsVuyrxfTliKqJrr2oHWR2LXqF6F4tW6E6GiC1zGJ5L6pAtilFL/UNpRAZLjJd3vdvVSBb8mMoeHk18rBKBZ1lWoFsU4pe+h9KoWPUyoMhLVUgs2Oxyas/uGL2FzFbSKrDXzdq+3uIDlOW5bSArcV/hzRSgdzkddUcPUiadnaHopiymyrO+R6NGyTfOSEAUxaQ6SxX/zTleGOslkh0ofjxlvW66Ingc0Mxe3rXar0AzMbxd35DP/xZ/dulzpBnWLDH1tOPQiqpQG5KGhNXDMCcQscFG6mI9VU7ifm8pTy9/yrVH+Wej8pdc7zx+YmFTqV0wH1TjEuel6qRLvWy0xOrZgx7XOt3/s1y2dUC5fhX5TcWfx9Yz1jx9mRIact9OMsZd4xr5kKNnIjEEscr8QKs7iHYZyqzlUe5rkU6c9elzCMvUW+4RGNOLEUkqoeZo4PFjHOni4mUXWjsBnOXB12e6TbVmOPxilgtoDKk4O+45xKJoG4v8TTxDmIsnSW2nUFvcpAJKGgkZVBRF6Cx+43qFirk+YmSczvxvmJ2KDKl+Kj4iFjy91r+wxmaWPSogMYdY7VYLC6Z4Gq80NxWR6+N1eF+S3IZOwP0sAlAGeMuGHbDTW1v0DaZYZ+pWQ2HvFdBNBWokH4NApm6AZpBeepjkLkv4TkxyQyjiBpwAZnmSJYwHUlSPwVhwbhn3LRRZA24gkyzLNUlKxZ7AxzBFdGzWXBkcKvq6oBMmdhjaHLNuOnZifpn1UoDdUGugMaaQ103FswwiRPkjBJqwAdkxCH9SSAWMj05dmdRwr5Z1S0N+IJM8W8DrJlAi4jdvsNDeBVDQGZCnSFPN2sGRI5qZIaIpUXkncliQTzPag2jIWkgBGRE7LU5jm8tyXijDDQQCjJdIAi7UUySnTNGbhUzz2uUiQb+By/1GeF2POpCAAAAAElFTkSuQmCC" />
									<image id="KOT_KHERA" data-name="KOT KHERA" class="view_map_detail" map_name="kot khera" width="97" height="90" transform="translate(495 311)" xlink:href="data:image/png;base64,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" />
									<image id="DHIKOLI" width="98" height="104" class="view_map_detail" map_name="Dhikoli" transform="translate(419 275)" xlink:href="data:image/png;base64,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" />
									<image id="DOMAGOR" width="89" height="87" class="view_map_detail" map_name="Domagor" transform="translate(394 236)" xlink:href="data:image/png;base64,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" />
									<image id="GOBARA" width="37" height="55" class="view_map_detail" map_name="Gobara" transform="translate(394 148)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAA3CAYAAACLgIOTAAAABHNCSVQICAgIfAhkiAAAA3BJREFUaEPNmVuoDlEUx8/nnls5EQ9ISSLKoSRPSiTxhBeelAeeKJfyrvNCkQe5vJwXknhwS6GUQoocFE8uRcmlcORyxOH/+9ozPnNmZu+Z2fPN7Fp9881ee+3fXrP23mtmN27fX9iRUEbo/kPJYckxyUCSou/7jRSoBersgekQuKWSb74B4uylQR1Qg50tjT7peoqkv2ywNKg76nxJBOCo/m+rCmq6On4pacQAnNO99WWCJXnqhDrdktBxn+5vl/SUBRYH1anO3kqGWTrdo/r9ZYDFQR0ynrD1914KrCevbYpZ66NQE00sjXE01Cu9dZLnjvpOalEoZtYRp5b/lC7pcm3GNqnqUaiD0t6RsYO70t8nAc5LiUK9kNUZOS0T9AR/4dIKtUrWrhSweEptNxVoHzZthXqsu/MKGGX74THyOK8VsNMRQLHZ3ipiqKVt4cAPoLpldK8nqKeys1HCcpGrBFC4fHEuC/GNWFCn5bUH1HA1/irh11chvti4cwU+UPPV+JEvmogdFtXM6xdQG9TwTElQZBOk05kKUCx6uzK1clcm2EkMyfGdC1DnpY2b4xI6Z0MWRbyF15wKUKS9iyQ+Az3aObM7mlonAgJVZL9zGrmUmI2jXJWBui7l5a4NcuoFWxAz0bqoAnXBxFTO/jI1Y7Wfa2sB1GUprbYpeqyfKVupmSpQV6W0wmOnNlOs8qQ5qYH+RLVzbJY81pPWrKwb1BcB7ZYkLqg8vnZ56rfxzlDzmxhb7YSC5YckWK+2JnkLqFeqnOoxZmymPkphgiTxRQOod1IYLxkiKXOricL26MbmuBEEnhqpSt6KR9uG6bH+pmyRCDIbWVTDAhTPGaiqyiCPBY9vUlVE6pe9sKtunoLnv1wOT/2p0EtB14Ogqo4pwMhKSWuaGzWeOqlfXh6rLuG3CKDOioYPX1WXMOCBuiiaNVUTqf8wAawTFPHEE+sFiqMOjjzqUJovr+3OEmwDb74fVpElpIE1Z2BdFs8A9LMuJgPFBalLXco9oG6IZlldiMTRV0dPDQBFQk/WWWZh0/8l4fWdr4acsPKfI2BCZ6yEJBOO/jIWTwbJ8S4f4vgu/8yAOA8aKEhnSY5LZhtimwFG+N2MltGRaTBhTks423ljM5BWD1RrPW81nLJ/MG6lDpePM0o/zX8OIks7S/4LYIH4Q+k80I4AAAAASUVORK5CYII=" />
									<image id="SIMRA" width="119" height="166" class="view_map_detail" map_name="Simra" transform="translate(396 76)" xlink:href="data:image/png;base64,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" />
									<image id="PUNAWALI_KALAN" data-name="PUNAWALI KALAN" width="155" height="112" class="view_map_detail" map_name="Punawali Kalan" transform="translate(462 202)" xlink:href="data:image/png;base64,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" />
									<image id="AMBABAI" width="78" height="178" class="view_map_detail" map_name="Ambabai" transform="translate(564 43)" xlink:href="data:image/png;base64,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" />
									<image id="SARMAU" width="108" height="78" class="view_map_detail" map_name="Sarmau" transform="translate(511 146)" xlink:href="data:image/png;base64,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" />
									<image id="KALOTHRA" width="65" height="85" class="view_map_detail" map_name="Kalothara" transform="translate(517 61)" xlink:href="data:image/png;base64,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" />
								</g>
								<g id="Group_43" class="group" data-name="Group 43" transform="translate(1318.867 116.356)">
									<g id="Group_2" data-name="Group 2" transform="translate(0 0)">
										<rect id="Rectangle_1" data-name="Rectangle 1" width="102.763" height="40.371" rx="17" transform="translate(0)" fill="#bb6c13" />
										<path id="Polygon_1" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(92.409 19.678) rotate(30)" fill="#bb6c13" />
									</g>
									<text id="SIMRA-2" data-name="SIMRA" transform="translate(23.489 6.606)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">SIMRA</tspan>
									</text>
								</g>
								<g id="Group_42" class="group" data-name="Group 42" transform="translate(1268.815 160.991)">
									<g id="Group_3" data-name="Group 3" transform="translate(0 0)">
										<rect id="Rectangle_1-2" data-name="Rectangle 1" width="113.774" height="40.371" rx="17" transform="translate(0)" fill="#6d400e" />
										<path id="Polygon_1-2" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(103.419 19.678) rotate(30)" fill="#6d400e" />
									</g>
									<text id="GOBARA-2" data-name="GOBARA" transform="translate(19.351 6.872)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">GOBARA</tspan>
									</text>
								</g>
								<g id="Group_41" class="group" data-name="Group 41" transform="translate(1271.869 231.726)">
									<g id="Group_5" data-name="Group 5" transform="translate(0 -4)">
										<rect id="Rectangle_1-3" data-name="Rectangle 1" width="142" height="40" rx="17" transform="translate(0.131 0.274)" fill="#9885a4" />
										<path id="Polygon_1-3" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(132.046 19.678) rotate(30)" fill="#9885a4" />
									</g>
									<text id="DOMAGOR-2" data-name="DOMAGOR" transform="translate(20.131 3.274)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">DOMAGOR</tspan>
									</text>
								</g>
								<g id="Group_40" class="group" data-name="Group 40" transform="translate(1239.113 396.351)">
									<g id="Group_13" data-name="Group 13" transform="translate(0 0)">
										<rect id="Rectangle_1-4" data-name="Rectangle 1" width="160" height="41" rx="17" transform="translate(0.237 -0.351)" fill="#056041" />
										<path id="Polygon_1-4" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(149.663 19.678) rotate(30)" fill="#056041" />
									</g>
									<text id="DAGARWAHA-2" data-name="DAGARWAHA" transform="translate(23.236 6.649)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">DAGARWAHA</tspan>
									</text>
								</g>
								<g id="Group_25" class="group" data-name="Group 25" transform="translate(1051.662 420.644)">
									<g id="Group_1" data-name="Group 1" transform="translate(0 0)">
										<rect id="Rectangle_1-5" data-name="Rectangle 1" width="142.69" height="40.371" rx="17" fill="#3764be" />
										<path id="Polygon_1-5" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(132.335 19.678) rotate(30)" fill="#3764be" />
									</g>
									<text id="BACHHAUNI-3" data-name="BACHHAUNI" transform="translate(20.417 8.294)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">BACHHAUNI</tspan>
									</text>
								</g>
								<g id="Group_26" class="group" data-name="Group 26" transform="translate(1087.46 541.941)">
									<g id="Group_4" data-name="Group 4" transform="translate(0)">
										<rect id="Rectangle_1-6" data-name="Rectangle 1" width="96.891" height="40.371" rx="17" transform="translate(0 0)" fill="#ff9100" />
										<path id="Polygon_1-6" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(86.537 19.678) rotate(30)" fill="#ff9100" />
									</g>
									<text id="PARASAI-2" data-name="PARASAI" transform="translate(12.478 5.872)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">PARASAI</tspan>
									</text>
								</g>
								<g id="Group_34" class="group" data-name="Group 34" transform="translate(1183 486.047)">
									<g id="Group_21" data-name="Group 21" transform="translate(0 0)">
										<rect id="Rectangle_1-7" data-name="Rectangle 1" width="123.446" height="34.499" rx="17" fill="#5b5959" />
										<path id="Polygon_1-7" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(113.092 13.806) rotate(30)" fill="#5b5959" />
									</g>
									<text id="RAJAPUR-2" data-name="RAJAPUR" transform="translate(21.651 3.76)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">RAJAPUR</tspan>
									</text>
								</g>
								<g id="Group_48" class="group" data-name="Group 48" transform="translate(1295.102 539.584)">
									<g id="Group_23" data-name="Group 23" transform="translate(0 0)">
										<rect id="Rectangle_1-8" data-name="Rectangle 1" width="91.242" height="34.499" rx="17" transform="translate(0)" fill="#9e0202" />
										<path id="Polygon_1-8" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(80.887 13.806) rotate(30)" fill="#9e0202" />
									</g>
									<text id="BAJNA-2" data-name="BAJNA" transform="translate(16.576 3.9)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">BAJNA</tspan>
									</text>
								</g>
								<g id="Group_44" class="group" data-name="Group 44" transform="translate(1545.177 47.904)">
									<g id="Group_8" data-name="Group 8" transform="translate(0 0)">
										<path id="Rectangle_1-9" data-name="Rectangle 1" d="M94.721,0H17A16.986,16.986,0,0,0,0,17v6.371a16.986,16.986,0,0,0,17,17H94.721a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.983)" fill="#9a67eb" />
										<path id="Path_1" data-name="Path 1" d="M10.1,2.606,9.934,25.641,22.634,13.9Z" transform="translate(0 22.945)" fill="#9a67eb" />
									</g>
									<text id="AMBABAI-2" data-name="AMBABAI" transform="translate(28.502 5.942)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">AMBABAI</tspan>
									</text>
								</g>
								<g id="Group_45" class="group" data-name="Group 45" transform="translate(1501.086 151.698)">
									<g id="Group_9" data-name="Group 9" transform="translate(0 0)">
										<path id="Rectangle_1-10" data-name="Rectangle 1" d="M87.52,0H17A16.986,16.986,0,0,0,0,17v6.371a16.986,16.986,0,0,0,17,17H87.52a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.987)" fill="#5cab20" />
										<path id="Polygon_1-9" data-name="Polygon 1" d="M10.171,5.872,9.909,28.908,30.251,17.163Z" transform="translate(0 19.678)" fill="#5cab20" />
									</g>
									<text id="SARMAU-2" data-name="SARMAU" transform="translate(26.686 6.466)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">SARMAU</tspan>
									</text>
								</g>
								<g id="Group_46" class="group" data-name="Group 46" transform="translate(1503.086 230.25)">
									<g id="Group_11" data-name="Group 11" transform="translate(0 0)">
										<path id="Rectangle_1-11" data-name="Rectangle 1" d="M164.593,0H17A16.986,16.986,0,0,0,0,17v6.371a16.986,16.986,0,0,0,17,17H164.593a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.987)" fill="#a1a1a1" />
										<path id="Polygon_1-10" data-name="Polygon 1" d="M10.171,5.872,9.909,28.908,30.251,17.163Z" transform="translate(0 19.678)" fill="#a1a1a1" />
									</g>
									<text id="PUNAWALI_KALAN-2" data-name="PUNAWALI KALAN" transform="translate(26.914 6.75)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">PUNAWALI KALAN</tspan>
									</text>
								</g>
								<g id="Group_47" class="group" data-name="Group 47" transform="translate(1497.948 309.99)">
									<g id="Group_12" data-name="Group 12" transform="translate(0 0)">
										<path id="Rectangle_1-12" data-name="Rectangle 1" d="M112.522,0H17A16.986,16.986,0,0,0,0,17v6.371a16.986,16.986,0,0,0,17,17h95.522a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.987)" fill="#a71cc1" />
										<path id="Polygon_1-11" data-name="Polygon 1" d="M10.171,5.872,9.909,28.908,30.251,17.163Z" transform="translate(0 19.678)" fill="#a71cc1" />
									</g>
									<text id="KOT_KHERA-2" data-name="KOT KHERA" transform="translate(29.052 7.01)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">KOT KHERA</tspan>
									</text>
								</g>
								<g id="Group_35" class="group" data-name="Group 35" transform="translate(1371.603 485.047)">
									<g id="Group_10" data-name="Group 10">
										<path id="Rectangle_1-13" data-name="Rectangle 1" d="M78.321,0H17A16.986,16.986,0,0,0,0,17v3.435a16.986,16.986,0,0,0,17,17H78.321a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.987)" fill="#dbe8e7" />
										<path id="Polygon_1-12" data-name="Polygon 1" d="M10.171,5.872,9.909,28.908,30.251,17.163Z" transform="translate(0 16.742)" fill="#dbe8e7" />
									</g>
									<text id="BAMAIR-2" data-name="BAMAIR" transform="translate(23.778 5.138)" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">BAMAIR</tspan>
									</text>
								</g>
								<g id="Group_85" class="group" data-name="Group 85" transform="translate(1400.27 73.979)">
									<g id="Group_2-2" data-name="Group 2" transform="translate(0 0)">
										<rect id="Rectangle_1-14" data-name="Rectangle 1" width="118.134" height="40.371" rx="17" transform="translate(0)" fill="#eba658" />
										<path id="Polygon_1-13" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(107.779 19.678) rotate(30)" fill="#eba658" />
									</g>
									<text id="KALOTHRA-2" data-name="KALOTHRA" transform="translate(15.636 6.872)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">KALOTHRA</tspan>
									</text>
								</g>
								<g id="Group_86" class="group" data-name="Group 86" transform="translate(1335.978 284.514)">
									<g id="Group_5-2" data-name="Group 5" transform="translate(0 0)">
										<rect id="Rectangle_1-15" data-name="Rectangle 1" width="108.636" height="40.371" rx="17" transform="translate(0)" fill="#00a9af" />
										<path id="Polygon_1-14" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(98.281 19.678) rotate(30)" fill="#00a9af" />
									</g>
									<text id="DHIKOLI-2" data-name="DHIKOLI" transform="translate(19.819 7.606)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">DHIKOLI</tspan>
									</text>
								</g>
								<g id="Group_87" class="group" data-name="Group 87" transform="translate(1323.233 605.531)">
									<g id="Group_10-2" data-name="Group 10" transform="translate(0)">
										<path id="Rectangle_1-16" data-name="Rectangle 1" d="M87.807,0H17A16.986,16.986,0,0,0,0,17v3.435a16.986,16.986,0,0,0,17,17H87.807a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.987)" fill="#dbe8e7" />
										<path id="Polygon_1-15" data-name="Polygon 1" d="M10.171,5.872,9.909,28.908,30.251,17.163Z" transform="translate(0 16.742)" fill="#dbe8e7" />
									</g>
									<text id="GAGAUNI-2" data-name="GAGAUNI" transform="translate(19.279 5.138)" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">GAGAUNI</tspan>
									</text>
								</g>
								<g id="Group_88" class="group" data-name="Group 88" transform="translate(1165.121 600.707)">
									<g id="Group_4-2" data-name="Group 4" transform="translate(0)">
										<rect id="Rectangle_1-17" data-name="Rectangle 1" width="96.891" height="40.371" rx="17" transform="translate(0 0)" fill="#ce2563" />
										<path id="Polygon_1-16" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(86.537 19.678) rotate(30)" fill="#ce2563" />
									</g>
									<text id="IMILIYA-2" data-name="IMILIYA" transform="translate(20.478 7.872)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">IMILIYA</tspan>
									</text>
								</g>
								<g id="Group_89" class="group" data-name="Group 89" transform="translate(1216.354 651.181)">
									<g id="Group_4-3" data-name="Group 4" transform="translate(-16.788)">
										<rect id="Rectangle_1-18" data-name="Rectangle 1" width="113.679" height="40.371" rx="17" transform="translate(0 0)" fill="#fa9bea" />
										<path id="Polygon_1-17" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(103.325 19.678) rotate(30)" fill="#fa9bea" />
									</g>
									<text id="AMARPUR-2" data-name="AMARPUR" transform="translate(-2.522 7.872)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">AMARPUR</tspan>
									</text>
								</g>
								<g id="Group_90" class="group" data-name="Group 90" transform="translate(1062.243 605.531)">
									<g id="Group_4-4" data-name="Group 4" transform="translate(4.757)">
										<rect id="Rectangle_1-19" data-name="Rectangle 1" width="92.134" height="40.371" rx="17" transform="translate(0 0)" fill="#5cab32" />
										<path id="Polygon_1-18" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(81.779 19.678) rotate(30)" fill="#5cab32" />
									</g>
									<text id="KHAIRA-2" data-name="KHAIRA" transform="translate(22.478 7.872)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">KHAIRA</tspan>
									</text>
								</g>
								<g id="Group_91" class="group" data-name="Group 91" transform="translate(1023.399 656.117)">
									<g id="Group_2-3" data-name="Group 2" transform="translate(30.267 0)">
										<rect id="Rectangle_1-20" data-name="Rectangle 1" width="87.866" height="40.371" rx="17" transform="translate(0)" fill="#ff9ba3" />
										<path id="Polygon_1-19" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(77.512 19.678) rotate(30)" fill="#ff9ba3" />
									</g>
									<text id="BASAI-2" data-name="BASAI" transform="translate(52.636 6.872)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">BASAI</tspan>
									</text>
								</g>
								<g id="Group_92" class="group" data-name="Group 92" transform="translate(950 718.708)">
									<g id="Group_1-2" data-name="Group 1" transform="translate(8.333 0)">
										<rect id="Rectangle_1-21" data-name="Rectangle 1" width="134.356" height="40.371" rx="17" fill="#3764be" />
										<path id="Polygon_1-20" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(124.002 19.678) rotate(30)" fill="#3764be" />
									</g>
									<text id="BADANPUR-2" data-name="BADANPUR" transform="translate(30.417 7.294)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">BADANPUR</tspan>
									</text>
								</g>
								<g id="Group_93" class="group" data-name="Group 93" transform="translate(1336.535 663.474)">
									<g id="Group_12-2" data-name="Group 12">
										<path id="Rectangle_1-22" data-name="Rectangle 1" d="M99.332,0H17A16.986,16.986,0,0,0,0,17v6.371a16.986,16.986,0,0,0,17,17H99.332a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.988)" fill="#a71cc1" />
										<path id="Polygon_1-21" data-name="Polygon 1" d="M10.171,5.872,9.909,28.908,30.251,17.163Z" transform="translate(0 19.678)" fill="#a71cc1" />
									</g>
									<text id="BARUAPUR-2" data-name="BARUAPUR" transform="translate(24.052 8.01)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">BARUAPUR</tspan>
									</text>
								</g>
								<g id="Group_94" class="group" data-name="Group 94" transform="translate(1387.413 560.941)">
									<g id="Group_23-2" data-name="Group 23" transform="translate(0 0)">
										<rect id="Rectangle_1-23" data-name="Rectangle 1" width="83.242" height="34.499" rx="17" transform="translate(8)" fill="#00a9af" />
										<path id="Polygon_1-22" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(80.887 13.806) rotate(30)" fill="#00a9af" />
									</g>
									<text id="MATH-2" data-name="MATH" transform="translate(24.576 3.9)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">MATH</tspan>
									</text>
								</g>
								<g id="Group_95" class="group" data-name="Group 95" transform="translate(1512.791 536.648)">
									<g id="Group_10-3" data-name="Group 10" transform="translate(-2.485)">
										<path id="Rectangle_1-24" data-name="Rectangle 1" d="M65.707,0H17A16.986,16.986,0,0,0,0,17v3.435a16.986,16.986,0,0,0,17,17H65.707a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.987)" fill="#9885a4" />
										<path id="Polygon_1-23" data-name="Polygon 1" d="M10.171,5.872,9.909,28.908,30.251,17.163Z" transform="translate(0 16.742)" fill="#9885a4" />
									</g>
									<text id="DOGRI-2" data-name="DOGRI" transform="translate(22.309 5.138)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">DOGRI</tspan>
									</text>
								</g>
								<g id="Group_96" class="group" data-name="Group 96" transform="translate(1458.298 607.605)">
									<g id="Group_10-4" data-name="Group 10" transform="translate(4.71 -4.107)">
										<path id="Rectangle_1-25" data-name="Rectangle 1" d="M98.36,0H17A16.986,16.986,0,0,0,0,17v3.435a16.986,16.986,0,0,0,17,17H98.36a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.987)" fill="#6c400d" />
										<path id="Polygon_1-24" data-name="Polygon 1" d="M10.171,5.872,9.909,28.908,30.251,17.163Z" transform="translate(0 16.742)" fill="#6c400d" />
									</g>
									<text id="RAMPURA-2" data-name="RAMPURA" transform="translate(31.172 2.138)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">RAMPURA</tspan>
									</text>
								</g>
								<g id="Group_97" class="group" data-name="Group 97" transform="translate(1489.157 695.767)">
									<g id="Group_9-2" data-name="Group 9" transform="translate(0)">
										<path id="Rectangle_1-26" data-name="Rectangle 1" d="M115.584,0H17A16.986,16.986,0,0,0,0,17v6.371a16.986,16.986,0,0,0,17,17h98.584a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.987)" fill="#5cab20" />
										<path id="Polygon_1-25" data-name="Polygon 1" d="M10.171,5.872,9.909,28.908,30.251,17.163Z" transform="translate(0 19.678)" fill="#5cab20" />
									</g>
									<text id="CHAMARAUA-2" data-name="CHAMARAUA" transform="translate(23.686 6.466)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">CHAMARAUA</tspan>
									</text>
								</g>
								<g id="Group_98" class="group" data-name="Group 98" transform="translate(1523.356 647.181)">
									<g id="Group_10-5" data-name="Group 10" transform="translate(0 1)">
										<path id="Rectangle_1-27" data-name="Rectangle 1" d="M73.707,0H17A16.986,16.986,0,0,0,0,17v3.435a16.986,16.986,0,0,0,17,17H73.707a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.987)" fill="#dbe8e7" />
										<path id="Polygon_1-26" data-name="Polygon 1" d="M10.171,5.872,9.909,28.908,30.251,17.163Z" transform="translate(0 16.742)" fill="#dbe8e7" />
									</g>
									<text id="GURHA-2" data-name="GURHA" transform="translate(24.279 6.138)" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">GURHA</tspan>
									</text>
								</g>
								<g id="Group_99" class="group" data-name="Group 99" transform="translate(1381.603 712.06)">
									<g id="Group_8-2" data-name="Group 8">
										<path id="Rectangle_1-28" data-name="Rectangle 1" d="M76.8,0H17A16.986,16.986,0,0,0,0,17v6.371a16.986,16.986,0,0,0,17,17H76.8a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.983)" fill="#9a67eb" />
										<path id="Path_1-2" data-name="Path 1" d="M10.1,2.606,9.934,25.641,22.634,13.9Z" transform="translate(0 22.945)" fill="#9a67eb" />
									</g>
									<text id="MURARI-2" data-name="MURARI" transform="translate(22.502 5.942)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">MURARI</tspan>
									</text>
								</g>
								<g id="Group_100" class="group" data-name="Group 100" transform="translate(1195.333 721.29)">
									<g id="Group_23-3" data-name="Group 23" transform="translate(0 0)">
										<rect id="Rectangle_1-29" data-name="Rectangle 1" width="113.308" height="34.499" rx="17" transform="translate(27)" fill="#9e0202" />
										<path id="Polygon_1-27" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(129.953 13.806) rotate(30)" fill="#9e0202" />
									</g>
									<text id="BAIDORA-2" data-name="BAIDORA" transform="translate(46.474 3.9)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">BAIDORA</tspan>
									</text>
								</g>
								<g id="Group_101" class="group" data-name="Group 101" transform="translate(1116.671 813.178)">
									<g id="Group_13-2" data-name="Group 13" transform="translate(0.237 -0.351)">
										<rect id="Rectangle_1-30" data-name="Rectangle 1" width="216.927" height="41" rx="17" transform="translate(40)" fill="#056041" />
										<path id="Polygon_1-28" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(246.353 20.029) rotate(30)" fill="#056041" />
									</g>
									<text id="KICHALWARA_BUJURG-2" data-name="KICHALWARA BUJURG" transform="translate(59.236 6.649)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">KICHALWARA BUJURG</tspan>
									</text>
								</g>
								<g id="Group_103" class="group" data-name="Group 103" transform="translate(1493.238 779.616)">
									<g id="Group_10-6" data-name="Group 10" transform="translate(4.71 -4.107)">
										<path id="Rectangle_1-31" data-name="Rectangle 1" d="M148.731,0H17A16.986,16.986,0,0,0,0,17v3.435a16.986,16.986,0,0,0,17,17H148.731a16.986,16.986,0,0,0,17-17V17a16.986,16.986,0,0,0-17-17Z" transform="translate(9.987)" fill="#6c400d" />
										<path id="Polygon_1-29" data-name="Polygon 1" d="M10.171,5.872,9.909,28.908,30.251,17.163Z" transform="translate(0 16.742)" fill="#6c400d" />
									</g>
									<text id="MATHURA_PURA-2" data-name="MATHURA PURA" transform="translate(32.172 1.138)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">MATHURA PURA</tspan>
									</text>
								</g>
								<g id="Group_104" class="group" data-name="Group 104" transform="translate(1225.579 766.355)">
									<g id="Group_13-3" data-name="Group 13" transform="translate(50.421 -0.351)">
										<rect id="Rectangle_1-32" data-name="Rectangle 1" width="200.62" height="41" rx="17" fill="#a1a1a1" />
										<path id="Polygon_1-30" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(190.046 20.029) rotate(30)" fill="#a1a1a1" />
									</g>
									<text id="KICHALWARA_KHURD-2" data-name="KICHALWARA KHURD" transform="translate(66.236 6.649)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">KICHALWARA KHURD</tspan>
									</text>
								</g>
								<g id="Group_105" class="group" data-name="Group 105" transform="translate(1202.979 867.401)">
									<g id="Group_13-4" data-name="Group 13" transform="translate(50.421 -0.351)">
										<rect id="Rectangle_1-33" data-name="Rectangle 1" width="180.62" height="41" rx="17" transform="translate(20)" fill="#9a67eb" />
										<path id="Polygon_1-31" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(190.046 20.029) rotate(30)" fill="#9a67eb" />
									</g>
									<text id="KAJURAHA_KHURD-2" data-name="KAJURAHA KHURD" transform="translate(85.236 6.649)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">KAJURAHA KHURD</tspan>
									</text>
								</g>
								<g id="Group_106" class="group" data-name="Group 106" transform="translate(1224.68 931.761)">
									<g id="Group_13-5" data-name="Group 13" transform="translate(96.986 -0.351)">
										<rect id="Rectangle_1-34" data-name="Rectangle 1" width="191.921" height="41" rx="17" fill="#a71cc1" />
										<path id="Polygon_1-32" data-name="Polygon 1" d="M11.744,0,23.489,19.819H0Z" transform="translate(181.347 20.029) rotate(30)" fill="#a71cc1" />
									</g>
									<text id="KAJURAHA_BUJURG" data-name="KAJURAHA BUJURG" transform="translate(115.236 6.649)" fill="#fff" font-size="18" font-family="SegoeUI, Segoe UI">
										<tspan x="0" y="19">KAJURAHA BUJURG</tspan>
									</text>
								</g>
							</g>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="popupContainer3">
		<div id="popupContent3">
			<div class="close">
				<span id="closeButton3"><i class="fa-solid fa-circle-xmark" style="color: #e66565;"></i></span>
			</div>
			<div class="popup-content d-flex">

				<div class="popup-image">
					<iframe src="" style="border:0;width:100%;height:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="popup-text p-4">
					<h3 class="dev_title"></h3>
					<p class="dev_desc" style="color:#000;"></p>
					<div class="popup-bottom-text" style="width: 300px;">
						<div class="small-popup-box d-flex text-center align-items-center" style="justify-content: space-between;">
							<h4 class="mb-0" style="font-size: 16px;">Gram Panchayat:</h4>
							<p class="mb-0 dev_gp" style="color:#000;"></p>
						</div>
						<div class="small-popup-box d-flex text-center align-items-center" style="justify-content: space-between;">
							<h4 class="mb-0" style="font-size: 16px;">District:</h4>
							<p class="mb-0 dev_disc" style="color:#000;"></p>
						</div>
						<div class="small-popup-box d-flex text-center align-items-center" style="justify-content: space-between;">
							<h4 class="mb-0" style="font-size: 16px;">Area:</h4>
							<p class="mb-0 dev_area" style="color:#000;"></p>
						</div>
						<div class="small-popup-box d-flex text-center align-items-center" style="justify-content: space-between;">
							<h4 class="mb-0" style="font-size: 16px;">Total population:</h4>
							<p class="mb-0 dev_popu" style="color:#000;"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section over-hide bg-white padding-top-80 mt-4 mb-4 height-video-sector-m" id="page-scroll" style="height: 90vh;display: flex;align-items: flex-end;">
		<div class="parallax-hero-1200">
			<div class="poster_background"></div>
			<div id="video-wrap" class="parallax-top">
				<video class="video_background" preload="auto" autoplay loop="loop" muted="muted" playsinline style="width: 100%;object-fit: fill;">
					<source src="<?php echo $website_cdn_ath; ?>video/sectors.mp4" type="video/mp4">
				</video>
			</div>
		</div>
		<div class="background-dark-blue-over-darker-2"></div>
		<div class="section-1400 z-bigger">
			<div class="container-fluid">
				<div class="col-12 text-center mb-1">
					<h3 class="heading-font mb-2" style="color: #fff;">
						Sectors to Invest in BIDA
					</h3>
				</div>
				<div class="row sticky-wrapper" id="accordionExample">
					<div class="col-lg-12">
						<div class="section border-4" id="sticker-careers">
							<div class="row justify-content-center mb-2 g-15">
								<p class="mb-1">
									<a href="foodpro" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/swm.svg" alt="">
										Agro & Food Processing
									</a>
								</p>
								<p class="mb-1">
									<a href="aviation" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/tourism.svg" alt="">
										Aviation

									</a>
								</p>
								<p class="mb-1">
									<a href="defence" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/defencepolicy.svg" alt="">
										Defence

									</a>
								</p>

								<p class="mb-1">
									<a href="electric" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/electricvehiclepolicy.svg" alt="">
										EV Manufacturing


									</a>
								</p>
								<p class="mb-1">
									<a href="hcare" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/pharma.svg" alt="">
										Pharma

									</a>
								</p>
								<p class="mb-1">
									<a href="ites" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/it.svg" alt="">
										IT & ITes

									</a>
								</p>
								<p class="mb-1">
									<a href="logistics" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/logistics.svg" alt="">
										Logistics

									</a>
								</p>
								<p class="mb-1">
									<a href="renewenergy" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/it.svg" alt="">
										Renewable Energy

									</a>
								</p>
								<p class="mb-1">
									<a href="semiconductor" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/electronicsmftg.svg" alt="">
										Electronics and Semiconductors

									</a>
								</p>
								<p class="mb-1">
									<a href="textiles" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/textile.svg" alt="">
										Textile

									</a>
								</p>

								<p class="mb-1">
									<a href="fortunes" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/swm.svg" alt="">
										FDI, Fortune 500
									</a>
								</p>
								<p class="mb-1">
									<a href="datacenter" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/datacenter.svg" alt="">
										Data center
									</a>
								</p>

								<p class="mb-1">
									<a href="sports" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/start-up.svg" alt="">
										Sports
									</a>
								</p>

								<p class="mb-1">
									<a href="tourism" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/start-up.svg" alt="">
										Tourism
									</a>
								</p>

								<p class="mb-1">
									<a href="township" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/start-up.svg" alt="">
										Township
									</a>
								</p>

								<p class="mb-1">
									<a href="msme" class="btn-ani3 window_slide size-14" style="color: #fff;">
										<img src="<?php echo $website_cdn_ath; ?>sector-icon/start-up.svg" alt="">
										MSME
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<div class="position-relative">
		<div class="section over-hide bg-white padding-top-80 mt-4 mb-4 height-video-sector-m" id="page-scroll" style="height: 90vh;display: flex;align-items: flex-end;">
			<div class="parallax-hero-1200">
				<div class="poster_background"></div>
				<div id="video-wrap" class="parallax-top">
					<video class="video_background" preload="auto" autoplay loop="loop" muted="muted" playsinline style="width: 100%;object-fit: fill;">
						<source src="<?php echo $website_cdn_ath; ?>video/department-video.mp4" type="video/mp4">
					</video>
				</div>
			</div>
			<div class="background-dark-blue-over-darker-2"></div>
			<div class="department-btn">
				<a href="whos-who" class="cta margin0">
					<span>Whos who</span>
					<svg width="13px" height="10px" viewBox="0 0 13 10">
						<path d="M1,5 L11,5"></path>
						<polyline points="8 1 12 5 8 9"></polyline>
					</svg>
				</a>
				<a href="organo_gram" class="cta margin0">
					<span>Organogram</span>
					<svg width="13px" height="10px" viewBox="0 0 13 10">
						<path d="M1,5 L11,5"></path>
						<polyline points="8 1 12 5 8 9"></polyline>
					</svg>
				</a>
			</div>
			<div class="section-1400 z-bigger">
				<div class="container-fluid">
					<div class="col-12 text-center mb-1">
						<h3 class="heading-font mb-2" style="color: #fff;">
							BIDA Departments
						</h3>
					</div>
					<div class="row sticky-wrapper" id="accordionExample">
						<div class="col-lg-12">
							<div class="section border-4" id="sticker-careers">
								<div class="row justify-content-center mb-2 g-15">

									<p class="mb-1">
										<a href="department#civil" class="btn-ani3 window_slide size-14" style="color: #fff;">
											<img src="<?php echo $website_cdn_ath; ?>sector-icon/textile.svg" alt="">
											CIVIL
										</a>
									</p>
									<p class="mb-1">
										<a href="department#plan" class="btn-ani3 window_slide size-14" style="color: #fff;">
											<img src="<?php echo $website_cdn_ath; ?>sector-icon/swm.svg" alt="">
											Planning
										</a>
									</p>
									<p class="mb-1">
										<a href="department#admin" class="btn-ani3 window_slide size-14" style="color: #fff;">
											<img src="<?php echo $website_cdn_ath; ?>sector-icon/solar.svg" alt="">
											Administration
										</a>
									</p>
									<p class="mb-1">
										<a href="department#fin" class="btn-ani3 window_slide size-14" style="color: #fff;">
											<img src="<?php echo $website_cdn_ath; ?>sector-icon/poultry.svg" alt="">
											Finanace
										</a>
									</p>
									<p class="mb-1">
										<a href="department#land" class="btn-ani3 window_slide size-14" style="color: #fff;">
											<img src="<?php echo $website_cdn_ath; ?>sector-icon/pharma.svg" alt="">
											Land Records
										</a>
									</p>
									<p class="mb-1">
										<a href="department#it" class="btn-ani3 window_slide size-14" style="color: #fff;">
											<img src="<?php echo $website_cdn_ath; ?>sector-icon/logistics.svg" alt="">
											IT
										</a>
									</p>
									<p class="mb-1">
										<a href="department#ph" class="btn-ani3 window_slide size-14" style="color: #fff;">
											<img src="<?php echo $website_cdn_ath; ?>sector-icon/it.svg" alt="">
											Public Health
										</a>
									</p>
									<p class="mb-1">
										<a href="department#legal" class="btn-ani3 window_slide size-14" style="color: #fff;">
											<img src="<?php echo $website_cdn_ath; ?>sector-icon/it.svg" alt="">
											Legal
										</a>
									</p>

									<p class="mb-1">
										<a href="department#ind" class="btn-ani3 window_slide size-14" style="color: #fff;">
											<img src="<?php echo $website_cdn_ath; ?>sector-icon/logistics.svg" alt="">
											Industry Department
										</a>
									</p>
									<p class="mb-1">
										<a href="department#ele" class="btn-ani3 window_slide size-14" style="color: #fff;">
											<img src="<?php echo $website_cdn_ath; ?>sector-icon/start-up.svg" alt="">
											Electrical Engineering

										</a>
									</p>
									<p class="mb-1">
										<a href="department#mec" class="btn-ani3 window_slide size-14" style="color: #fff;">
											<img src="<?php echo $website_cdn_ath; ?>sector-icon/msme.svg" alt="">
											Mechanical
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section over-hide mb-4 mt-4">
		<div class="section">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12" style="padding: 0;">
						<div class="section border-4 over-hide padding-top-bottom-120">
							<div class="parallax-hero-1200">
								<div class="poster_background"></div>
								<div id="video-wrap" class="parallax-top">
									<video class="video_background" preload="auto" autoplay loop="loop" muted="muted" playsinline>
										<source src="<?php echo $website_cdn_ath; ?>video/watermarked_preview.mp4" type="video/mp4">
									</video>
								</div>
								<div class="background-dark-over-hotel"></div>
							</div>
							<div class="section z-bigger px-3">
								<div class="row justify-content-center">
									<div class="col-12 text-center">
										<h4 class="mb-4 color-white">
											"उत्कृष्ट विकास"
										</h4>
										<h4 class="mb-4 color-white">
											"Happy and Healthy Investment Destination"
										</h4>
										<h4 class="mb-4 color-white">
											Looking forward to hearing from you
										</h4>
									</div>
									<div class="col-12 text-center mt-4">
										<a href="contact" class="btn btn-primary-gradient animsition-link"><i class="uil uil-arrow-circle-right size-22 mr-2"></i>Contact
											us
											now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="col-12">
		<img src="https://bida-website.b-cdn.net/img/Leadership-Team-Banner.svg" alt="" style="width: 100%;">
	</div>
	<div class="section over-hide">
		<div class="section-1400">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 text-center mb-5">
						<h2 class="mb-0">
							<span class="mobile-heading-font font-weight-700 title-text-top" style="color: #000;">What's
								Happening In BIDA</span>
						</h2>
					</div>

					<a href="news">
						<div class="col-sm-6 col-lg-3 mt-4 mt-sm-0">
							<div class="portfolio-wrap-columns img-wrap text-center">
								<div class="section border-4 over-hide">
									<img loading="lazy" src="img/news-facbook.png" alt="">
									<div class="wrap-mask-black"></div>
								</div>
								<h5 class="mt-3 mb-1"><a href="news" class="link-heading animsition-link">BIDA
										In News</a></h5>
							</div>
						</div>
					</a>
					<a href="index#legacy">
						<div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
							<div class="portfolio-wrap-columns img-wrap text-center">
								<div class="section border-4 over-hide">
									<img loading="lazy" src="img/explore-bida.png" alt="">
									<div class="wrap-mask-black"></div>
								</div>
								<h5 class="mt-3 mb-1"><a href="index#legacy" class="link-heading animsition-link">Explore Bundelkhand</a></h5>
							</div>
						</div>
					</a>
					<a href="tender">
						<div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
							<div class="portfolio-wrap-columns img-wrap text-center">
								<div class="section border-4 over-hide">
									<img loading="lazy" src="img/news-tender.png" alt="">
									<div class="wrap-mask-black"></div>
								</div>
								<h5 class="mt-3 mb-1"><a href="tender" class="link-heading animsition-link">Tenders</a>
								</h5>
							</div>
						</div>
					</a>
					<a href="rti">
						<div class="col-sm-6 col-lg-3">
							<div class="portfolio-wrap-columns img-wrap text-center">
								<div class="section border-4 over-hide">
									<img loading="lazy" src="img/righttoinformation.png" alt="">
									<div class="wrap-mask-black"></div>
								</div>
								<h5 class="mt-3 mb-1"><a href="news" class="link-heading animsition-link">Right to
										Informtion</a></h5>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<?php include "includes/important-slider.php"; ?>

	<div class="section over-hide padding-top-80 bg-ticker">
		<div class="section-1400 padding-bottom-80">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-3 text-center">
						<div class="h3 mb-1"><span class=""><?php echo $total_visitors; ?></span>+</div>
						<p class="lead mb-0" style="color:#000;">
							Total Visitors
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section divider"></div>
	</div>

	<?php include "includes/footer.php"; ?>

	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
	<p id="speed"></p>
	</div>


	<script src="<?php echo $website_cdn_ath;
					?>js/script.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/popper.min.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/plugins.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/custom.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo $website_cdn_ath; ?>js/jquery.themepunch.revolution.min.js"></script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
	<script src="<?php echo $website_cdn_ath; ?>js/extensions/revolution.extension.all.min.js"></script>
	<script src="https://brainbehind.co/chat/2410587936"></script>
	<script>
		function adjustMarqueePosition() {
			const newMarq = document.querySelector('.new_marq');
			let topValue;

			if (window.innerWidth <= 768) {
				topValue = '76px';
			} else {
				topValue = '108px';
			}

			if (window.scrollY > 30) {
				newMarq.style.top = '90px';
			} else {
				newMarq.style.top = topValue;
			}
		}

		window.addEventListener('scroll', adjustMarqueePosition);

		window.addEventListener('resize', adjustMarqueePosition);

		window.addEventListener('load', adjustMarqueePosition);
	</script>

	<script>
		const popupButton = document.getElementById("popupButton");
		const popupContainer = document.getElementById("popupContainer");
		const closeButton = document.getElementById("closeButton");
		popupButton.addEventListener("click", function() {
			popupContainer.style.display = "flex"
		});
		closeButton.addEventListener("click", function() {
			popupContainer.style.display = "none"
		});
		document.addEventListener("click", function(event) {
			if (event.target === popupContainer) {
				popupContainer.style.display = "none"
			}
		});
	</script>
	<script>
		var tpj = jQuery;
		var revapi14;
		$(document).ready(function() {
			if ($("#rev_slider_14_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_14_1")
			} else {
				revapi14 = tpj("#rev_slider_14_1").show().revolution({
					sliderType: "hero",
					jsFileLocation: "js/",
					sliderLayout: "fullscreen",
					dottedOverlay: "none",
					delay: 9000,
					navigation: {},
					responsiveLevels: [1400, 1024, 778, 480],
					visibilityLevels: [1400, 1024, 778, 480],
					gridwidth: [1400, 1024, 778, 480],
					gridheight: [1080, 768, 960, 720],
					lazyType: "none",
					shadow: 0,
					spinner: "off",
					autoHeight: "off",
					fullScreenAutoWidth: "off",
					fullScreenAlignForce: "off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: !1,
					fallbacks: {
						simplifyAll: "off",
						disableFocusListener: !1,
					}
				})
			}
			$(".btn-user-profile").on("click", function() {
				$('.dsp').css('display', 'block')
			});
			$(document).ready(function() {
				$('.btn-accordion').click(function() {
					$('.collapse').not($(this).data('target')).collapse('hide')
				})
			})
		});
	</script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			function toggleGroupVisibility(imageId, groupId) {
				const image = document.getElementById(imageId);
				const group = document.getElementById(groupId);

				if (image && group) {
					image.addEventListener('mouseenter', () => {
						group.style.visibility = 'visible';
					});

					image.addEventListener('mouseleave', () => {
						group.style.visibility = 'hidden';
					});
				} else {
					console.warn(`Element with ID '${imageId}' or '${groupId}' not found.`);
				}
			}

			toggleGroupVisibility('SIMRA', 'Group_43');
			toggleGroupVisibility('BADANPUR', 'Group_92');
			toggleGroupVisibility('KAJURAHA_KHURD', 'Group_105');
			toggleGroupVisibility('MATHURA_PURA', 'Group_103');
			toggleGroupVisibility('KICHALWARA_KHURD', 'Group_104');
			toggleGroupVisibility('KICHALWARA_BUJURG', 'Group_101');
			toggleGroupVisibility('BAIDORA', 'Group_100');
			toggleGroupVisibility('MURARI', 'Group_99');
			toggleGroupVisibility('GURHA', 'Group_98');
			toggleGroupVisibility('KAJURAHA_BUJURG', 'Group_106');
			toggleGroupVisibility('RAMPURA', 'Group_96');
			toggleGroupVisibility('BADANPUR', 'Group_92'); // Duplicate entry, ensure this is intentional
		});
	</script>

	<script>
		const image = document.getElementById("BASAI");
		const group = document.getElementById("Group_91");
		image.addEventListener("mouseover", function() {
			group.style.visibility = "visible"
		});
		image.addEventListener("mouseout", function() {
			group.style.visibility = "hidden"
		});
	</script>
	<script>
		const bamairImage = document.getElementById("BAMAIR");
		const group35 = document.getElementById("Group_35");
		bamairImage.addEventListener("mouseover", function() {
			group35.style.visibility = "visible"
		});
		bamairImage.addEventListener("mouseout", function() {
			group35.style.visibility = "hidden"
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("BACHHAUNI");
			const group = document.getElementById("Group_25");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("KHAIRA");
			const group = document.getElementById("Group_90");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("PARASAI");
			const group = document.getElementById("Group_26");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("KALOTHRA");
			const group = document.getElementById("Group_85");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("RAJAPUR");
			const group = document.getElementById("Group_34");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("DAGARWAHA");
			const group = document.getElementById("Group_40");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("GOBARA");
			const group = document.getElementById("Group_42");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("DOMAGOR");
			const group = document.getElementById("Group_41");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("DAGARWAHA");
			const group = document.getElementById("Group_40");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("BAJNA");
			const group = document.getElementById("Group_48");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("AMBABAI");
			const group = document.getElementById("Group_44");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("SARMAU");
			const group = document.getElementById("Group_45");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("SARMAU");
			const group = document.getElementById("Group_45");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			function addVisibilityToggle(imageId, groupId) {
				const image = document.getElementById(imageId);
				const group = document.getElementById(groupId);
				if (image && group) {
					image.addEventListener("mouseover", function() {
						group.style.visibility = "visible";
					});
					image.addEventListener("mouseout", function() {
						group.style.visibility = "hidden";
					});
				} else {
					console.warn(`Element with id ${imageId} or ${groupId} not found.`);
				}
			}

			addVisibilityToggle("PUNAWALI_KALAN-2", "Group_46");
			addVisibilityToggle("KOT_KHERA-2", "Group_47");
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("DOGRI");
			const group = document.getElementById("Group_95");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("PUNAWALI_KALAN");
			const group = document.getElementById("Group_46");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("DHIKOLI");
			const group = document.getElementById("Group_86");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("KOT_KHERA");
			const group = document.getElementById("Group_47");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("KHAJURAHA_BUJURG");
			const group = document.getElementById("Group_106");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("CHAMARAUA");
			const group = document.getElementById("Group_97");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("MATH");
			const group = document.getElementById("Group_94");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("GAGAUNI");
			const group = document.getElementById("Group_87");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("AMARPUR");
			const group = document.getElementById("Group_89");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("IMILIYA");
			const group = document.getElementById("Group_88");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const image = document.getElementById("BARUAPUR");
			const group = document.getElementById("Group_93");
			image.addEventListener("mouseover", function() {
				group.style.visibility = "visible"
			});
			image.addEventListener("mouseout", function() {
				group.style.visibility = "hidden"
			})
		});
	</script>
	<script>
		const clickablePaths = document.querySelectorAll('.clickable-path');
		clickablePaths.forEach(path => {
			path.addEventListener('click', function() {
				const url = this.getAttribute('data-url');
				window.open(url, '_blank')
			})
		});
		let isReading = !1;
		let audio;

		function toggleSpeech() {
			if (isReading) {
				stopSpeech();
				document.getElementById("read-text-button").innerHTML = '<img src="img/play.svg" width:20px;>Read Text'
				document.getElementById("popupread").style = "background:green"
			} else {
				startSpeech();
				document.getElementById("read-text-button").innerHTML = '<img src="img/stop.svg" width:20px>Stop'
				document.getElementById("popupread").style = "background:red"
			}
			isReading = !isReading
		}

		function startSpeech() {
			var text = document.getElementById("text-to-read").innerText;
			let languageCode = detectLanguage(text);
			let voiceName = getVoiceName(languageCode);
			const apiKey = 'AIzaSyDP-yAaUIRSG3cpep-JpJ4vvLG_JPd2AI4';
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
			fetch(url, otherparam).then(response => response.json()).then(data => {
				const audioContent = atob(data.audioContent);
				audio = new Audio();
				audio.src = 'data:audio/mp3;base64,' + data.audioContent;
				audio.play()
			}).catch(error => {
				console.error('Error:', error)
			})
		}

		function stopSpeech() {
			if (audio) {
				audio.pause();
				audio.currentTime = 0
			}
		}

		function detectLanguage(text) {
			if (/[\u0600-\u06FF\u0660-\u0669]/.test(text)) {
				return 'ar-XA'
			} else if (/[a-zA-Z]/.test(text)) {
				return 'en-US'
			} else {
				return 'en-US'
			}
		}

		function getVoiceName(languageCode) {
			if (languageCode === 'en-US') {
				return 'en-US-Studio-O'
			} else if (languageCode === 'ar-XA') {
				return 'ar-XA-Standard-A'
			} else {
				return 'en-US-Studio-O'
			}
		}
	</script>
	<script>
		let isReading2 = false;
		let audio2;

		function toggleSpeechForInvesting(className, readTextBtn) {
			if (isReading2) {
				console.log("Stopping speech");
				stopSpeechInvesting();
				document.getElementById(readTextBtn).innerHTML = '<img src="img/play.svg" alt="">Read Text';
				document.querySelectorAll(".read-text-button-container").forEach(el => el.style.background = "green");
			} else {
				console.log("Starting speech");
				startSpeechInvesting(className);
				document.getElementById(readTextBtn).innerHTML = '<img src="img/stop.svg" alt="">Stop';
				document.querySelectorAll(".read-text-button-container").forEach(el => el.style.background = "red");
			}
			isReading2 = !isReading2;
		}


		function startSpeechInvesting(className) {
			console.log("Starting audio...");
			var text = document.querySelector('.' + className.replace(/ /g, '.')).innerText;
			let languageCode = detectLanguage(text);
			let voiceName = getVoiceName(languageCode);
			const apiKey = 'AIzaSyDP-yAaUIRSG3cpep-JpJ4vvLG_JPd2AI4';
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
			fetch(url, otherparam).then(response => response.json()).then(data => {
				const audioContent = atob(data.audioContent);
				audio2 = new Audio();
				audio2.src = 'data:audio/mp3;base64,' + data.audioContent;
				audio2.play();
				console.log("Audio started")
			}).catch(error => {
				console.error('Error:', error)
			})
		}

		function stopSpeechInvesting() {
			console.log("Stopping audio...");
			if (audio2) {
				audio2.pause();
				audio2.currentTime = 0;
				console.log("Audio stopped")
			}
		}

		function detectLanguage(text) {
			if (/[\u0600-\u06FF\u0660-\u0669]/.test(text)) {
				return 'ar-XA'
			} else if (/[a-zA-Z]/.test(text)) {
				return 'en-US'
			} else {
				return 'en-US'
			}
		}

		function getVoiceName(languageCode) {
			if (languageCode === 'en-US') {
				return 'en-US-Studio-O'
			} else if (languageCode === 'ar-XA') {
				return 'ar-XA-Standard-A'
			} else {
				return 'en-US-Studio-O'
			}
		}
	</script>
	<script>
		const popupButton6 = document.getElementById("popupButton6");
		const popupContainer6 = document.getElementById("popupContainer6");
		const closeButton6 = document.getElementById("closeButton6");
		popupButton6.addEventListener("click", function() {
			popupContainer6.style.display = "flex"
		});
		closeButton6.addEventListener("click", function() {
			popupContainer6.style.display = "none"
		});
		document.addEventListener("click", function(event) {
			if (event.target === popupContainer6) {
				popupContainer6.style.display = "none"
			}
		});
	</script>
</body>
<script>
	window.addEventListener('load', videoScroll);
	window.addEventListener('scroll', videoScroll);

	function videoScroll() {
		if (document.querySelectorAll('video[autoplay]').length > 0) {
			var windowHeight = window.innerHeight,
				videoEl = document.querySelectorAll('video[autoplay]');
			for (var i = 0; i < videoEl.length; i++) {
				var thisVideoEl = videoEl[i],
					videoHeight = thisVideoEl.clientHeight,
					videoClientRect = thisVideoEl.getBoundingClientRect().top;
				if (videoClientRect <= ((windowHeight) - (videoHeight * .5)) && videoClientRect >= (0 - (videoHeight * .5))) {
					thisVideoEl.play()
				} else {
					thisVideoEl.pause()
				}
			}
		}
	}
</script>
<script>
	let currentSlide = 0;
	const slides = document.querySelectorAll('.slide');
	const totalSlides = slides.length;
	let slideInterval;
	const showSlide = (n) => {
		slides[currentSlide].classList.remove('active');
		currentSlide = (n + totalSlides) % totalSlides;
		slides[currentSlide].classList.add('active')
	}
	const nextSlide = () => showSlide(currentSlide + 1);
	const prevSlide = () => showSlide(currentSlide - 1);
	const startSlideShow = () => slideInterval = setInterval(nextSlide, 60000);
	const stopSlideShow = () => clearInterval(slideInterval);
	document.getElementById('prevBtn').addEventListener('click', prevSlide);
	document.getElementById('nextBtn').addEventListener('click', nextSlide);
	document.querySelector('.slider-container').addEventListener('mouseenter', stopSlideShow);
	document.querySelector('.slider-container').addEventListener('mouseleave', startSlideShow);
	showSlide(currentSlide);
	startSlideShow();
	$('#nextBtn').click(function() {
		stopSpeechInvesting()
	});
	let slideIndex = 0;
	let slideIntervals;
	showSlides();

	function showSlides() {
		let i;
		let slides = document.getElementsByClassName("slider-div-m");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none"
		}
		slideIndex++;
		if (slideIndex > slides.length) {
			slideIndex = 1
		}
		slides[slideIndex - 1].style.display = "block";
		slideIntervals = setTimeout(showSlides, 10000)
	}

	function plusSlides(n) {
		showSlides(slideIndex += n);
		clearInterval(slideIntervals)
	}

	function plusSlide(n) {
		showSlides(slideIndex -= n);
		clearInterval(slideIntervals)
	}
</script>

</html>