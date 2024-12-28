<?php include "config.php"; ?>
<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <title>About BIDA</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />
    <link rel="icon" type="img/x-icon" href="img/favicon.png">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        .annualreport {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-image: url(./img/headerbannerforannualreport.png);
        }
    </style>


</head>

<body>

    <div class="animsition">

        <!-- Navigation
		================================================== -->

        <?php include "includes/header.php"; ?>

        <div class="section over-hide padding-top-120 padding-top-mob-nav">
            <div class="top-header-parallax-section corporate-hero-back-img-1 annualreport parallax-hero-1200">
            </div>
            <div class="background-dark-over-hotel"></div>
            <div class="section-1400 z-bigger">
                <div class="container-fluid padding-top-bottom-60">
                    <div class="row">
                        <div class="col-lg">
                            <h2 class="display-8 mb-3 color-white">
                                Annual Reports
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
                <div class="container-fluid mt-2">
                    <div class="row">
                        <div class="col-md-3 col-12 mb-3">
                            <img class="img-fluid" src="img/sidebanner.png" alt="image">
                        </div>
                        <div class="col-md-9 col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead style="background-color: #99cc33;">
                                        <tr>
                                            <th scope="col">Sr No.</th>
                                            <th scope="col">Policy Name</th>
                                            <th scope="col">View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Industrial Development Act</td>
                                            <td><a href="img/industrialareadevelopmentact.pdf" target="_blank">Download</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Urban and Town Planning Act</td>
                                            <td><a href="img/athe_uttar_pradesh_urban_planning_and_development_act.pdf" target="_blank">Download</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Urban Planning guidelines 2 volume</td>
                                            <td><a href="img/urdpfiguidelinescompiled.pdf" target="_blank">Download</a></td>
                                        </tr>
                                    </tbody>
                                </table>
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




</body>

</html>