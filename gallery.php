<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gallery</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animsition.min.css" />
    <link rel="stylesheet" href="css/unicons.css" />
    <link rel="stylesheet" href="css/lighbox.min.css" />
    <link rel="stylesheet" href="css/tooltip.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="mediaassets/css/bootstrap.css">
    <link rel="stylesheet" href="mediaassets/css/fontawesome.css">
    <link rel="stylesheet" href="mediaassets/css/animate.css">
    <link rel="stylesheet" href="mediaassets/css/style.css">
    <link rel="stylesheet" href="mediaassets/css/media-queries.css">

</head>
<style>
    .white {
        background-color: #fff !important;
        color: #000 !important;
    }

    .white a {
        color: #000 !important;
    }

    main {
        /* padding-block: 0px; */
        margin-top: 0px;
    }

    .link-primary {
        color: #8cbe35;
    }

    .gallery-container {

        margin-bottom: 30px;
    }

    .gallery-box span {
        color: #000 !important;
    }
</style>

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
    <?php include "includes/header.php"; ?>

    <div class="section over-hide padding-top-120 padding-top-mob-nav section-background-contact">
        <div class="top-header-parallax-section parallax-hero-1200">
            <!-- <div class="section over-hide border-4">
                        <div id="cd-google-map">
                            <iframe
                                src="https://www.google.com/maps/d/embed?mid=14TPUpTMaZIlELdD-xTyJJbWCNptveVY&ehbc=2E312F"
                                width="100%" style="height: 420px;"></iframe>
                        </div>
                    </div>
                    <div class="background-dark-over-hotel"></div> -->
        </div>
        <div class="section-1400 z-bigger">
            <div class="container-fluid padding-top-bottom-80" style="text-align: left;">
                <div class="row">
                    <div class="col-12 col-lg">
                        <p style="color: #fff;" class="display-8 mb-3">
                            Gallery
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main id="main" class="bg-tri-form">
        <!-- Gallery -->
        <div class="gallery-container">
            <div class="container">

                <div class="row">
                    <div class="col">
                        <!-- First row of images -->
                        <div class="row">
                            <div class="col-md-4 gallery-box wow fadeInDown">
                                <div data-toggle="modal" data-target="#myModal">
                                    <img src="img/starupimagetwo-final.png" alt="Image 1" data-target="#myCarousel" data-slide-to="0">
                                    <span>Board Meeting</span>
                                </div>
                            </div>
                            <div class="col-md-4 gallery-box wow fadeInUp">
                                <div data-toggle="modal" data-target="#myModal">
                                    <img src="img/athlete.jpg" alt="Video 1" data-target="#myCarousel" data-slide-to="1">
                                    <span>Sports Event</span>
                                </div>
                            </div>

                            <div class="col-md-4 gallery-box wow fadeInDown">
                                <div data-toggle="modal" data-target="#myModal">
                                    <img src="img/starupimagefour-final.png" alt="Image 1" data-target="#myCarousel" data-slide-to="2">
                                    <span>Board Meeting</span>
                                </div>
                            </div>
                            <div class="col-md-4 gallery-box wow fadeInUp">
                                <div data-toggle="modal" data-target="#myModal">
                                    <img src="img/starupimagethree-final.png" alt="Video 1" data-target="#myCarousel" data-slide-to="3">
                                    <span>Board Meeting</span>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

        <!-- Lightbox (made with Bootstrap modal and carousel) -->
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- Carousel -->
                        <div id="myCarousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>

                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/starupimagetwo-final.png" class="d-block w-100" alt="Image 1">
                                    <span>Board Meeting</span>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/athlete.jpg" class="d-block w-100" alt="Image 2">
                                    <span>Sports Event</span>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/starupimagefour-final.png" class="d-block w-100" alt="Image 3">
                                    <span>Boards Meeting</span>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/starupimagethree-final.png" class="d-block w-100" alt="Image 4">
                                    <span>Boards Meeting</span>
                                </div>
                            </div>


                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

    </main>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>

    <script src="mediaassets/js/jquery-3.5.1.min.js"></script>
    <script src="mediaassets/js/bootstrap.js"></script>
    <script src="mediaassets/js/scripts.js"></script>
    <script src="mediaassets/js"></script>
    <script src="mediaassets/js/scripts.js"></script>
    <script src="mediaassets/js/scripts.js"></script>





</body>

</html>