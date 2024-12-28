<?php include "config.php"; ?>
<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <title>news</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />
    <link rel="icon" type="img/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/animsition.min.css" />
    <link rel="stylesheet" href="css/unicons.css" />
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/lighbox.min.css" />
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/tooltip.min.css" />
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/wheel.css" />

    <style>
        .white {
			background-color: #fff !important;
			color: #000 !important;
		}

		.white a {
			color: #000 !important;
		}
        .cards-container {
    justify-content: space-between;
    flex-wrap: wrap;
    row-gap: 20px;
    align-items: start;
}

.card {
    width: 360px;
    min-height: 400px;
    box-shadow: 0 0 4px #d4ecff;
    border-radius: 4px;
    cursor: pointer;
    background-color: #fff;
    overflow: hidden;
    transition: all 0.3s ease;
}

.card:hover {
    box-shadow: 1px 1px 8px #d4ecff;
    background-color: #f9fdff;
    transform: translateY(-2px);
}

.card-header img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}
img#news-img{width:100%; height: auto;}

.card-content {
    padding: 12px;
}

.news-source {
    margin-block: 12px;
}
#news-title{
    font-size: 20px;
}
main {
    padding-block: 20px;
    margin-top: 0px !important;
}
@media (max-device-width: 800px) and (min-device-width: 315px) {
			.padding-top-mob-nav{
                padding-top: 100px;
            }
			
        }
    </style>


</head>

<body>

<script src="js/script.js"></script>


<div class="animsition">

    <?php include "includes/header.php"; ?>

    <div class="section over-hide padding-top-120 padding-top-mob-nav">
        <div
            class="top-header-parallax-section corporate-hero-back-img-2 section-background-news parallax-hero-1200">
        </div>
        <div class="background-dark-over-hotel"></div>
        <div class="section-1400 z-bigger">
            <div class="container-fluid padding-top-bottom-60">
                <div class="row">
                    <div class="col-lg">
                        <h2 class="display-8 mb-3 color-white">
                            BIDA News
                        </h2>
                    </div>
                        <a href="media" class="cta">
					<span>Bida Advertisement</span>
					<svg width="13px" height="10px" viewBox="0 0 13 10">
						<path d="M1,5 L11,5"></path>
						<polyline points="8 1 12 5 8 9"></polyline>
					</svg>
				</a>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="cards-container container flex" id="cards-container">

        </div>
    </main>

    <template id="template-news-card">
        <div class="card">
            <div class="card-header">
                <img src="https://via.placeholder.com/400x200" alt="news-image" id="news-img" style="width:100%">
            </div>
            <div class="card-content">
                <h3 id="news-title">This is the Title</h3>
                <h6 class="news-source" id="news-source">End Gadget 26/08/2023</h6>
                <p class="news-desc" id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Recusandae saepe quis voluptatum quisquam vitae doloremque facilis molestias quae ratione
                    cumque!</p>
            </div>
        </div>
    </template>


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