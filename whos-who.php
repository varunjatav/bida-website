<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Who's Who</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />
    <link rel="icon" type="img/x-icon" href="img/favicon.png">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/swiper.min.css">
    <!-- Other CSS files -->
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/animsition.min.css">
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/unicons.css">
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/tooltip.min.css">
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/layers.css">
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/navigation.css">
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/settings.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        .team-wrap-2 img {
            height: 300px !important;
        }

        .mail {
            color: #000 !important;
        }
        .team-wrap-2 img {
            object-fit: contain;
        }

        @media (max-device-width: 800px) and (min-device-width: 315px) {
            .padding-top-mob-nav {
                padding-top: 120px;
            }
        }
    </style>
</head>

<body>
    <div class="animsition">
        <?php include "includes/header.php"; ?>

        <div class="section over-hide padding-top-120 padding-top-mob-nav">
            <div class="top-header-parallax-section corporate-hero-back-img-1 section-background-about parallax-hero-1200"></div>
            <div class="background-dark-over-hotel"></div>
            <div class="section-1400 z-bigger">
                <div class="container-fluid padding-top-bottom-60">
                    <div class="row">
                        <div class="col-lg">
                            <h2 class="display-8 mb-3 color-white">Who's Who</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section over-hide padding-top-80">
            <div class="section-1400">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-lg-6 col-xl-5 text-center">
                            <p class="lead mb-3 text-uppercase font-weight-700">
                                <span class="title-text-top">our team</span>
                            </p>
                            <h3 class="mb-4">Trusted support team.</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center position-relative">
                        <div class="col-12" data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s">
                            <div class="section swiper-team-2 padding-bottom-80">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/amrit.jpg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">IAS, CEO BIDA</p>
                                            <h6 class="mb-1">Shri Amrit Tripathi</h6>
                                            <!-- <a href="#" class="link link-primary size-18 mx-1" data-hover="In">In</a> 
                                            <a href="#" class="link link-primary size-18 mx-1" data-hover="Tw">Tw</a>
                                            <a href="#" class="link link-primary size-18 mx-1" data-hover="Dr">Dr</a> -->
                                            <div class="mail">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/dummyimage.jpg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">ACEO</p>
                                            <h6 class="mb-1">Praveen Verma</h6>
                                            <div class="mail">aceo.bida@eoffice.uplc.in</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/ram-kumar-shukla.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">OSD</p>
                                            <h6 class="mb-1">Ram Kumar Shukla</h6>
                                            <div class="mail">ramkumarshukla02@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/osdgulab.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">OSD</p>
                                            <h6 class="mb-1">Gulab Singh</h6>
                                            <div class="mail">gulab.3156@up.gov.in</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/saumya.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">OSD</p>
                                            <h6 class="mb-1">Saumya Mishra</h6>
                                            <div class="mail"> soumya.3394@up.gov.in</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/osdplmaurya.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">OSD</p>
                                            <h6 class="mb-1">P.L.Maurya</h6>
                                            <div class="mail"> Plmaurya1973@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/osdlal.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">OSD</p>
                                            <h6 class="mb-1">Lal Krishna</h6>
                                            <div class="mail"> osdbida1@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/alokteh.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Tehsildar</p>
                                            <h6 class="mb-1">Alok Katiyar</h6>
                                            <div class="mail"> alokcool4@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/ajitnaibnew.jpg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Naib Tehsildar</p>
                                            <h6 class="mb-1">Ajit Yadav</h6>
                                            <div class="mail">ajeet.yadav1234@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/shravannaibteh.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Naib Tehsildar</p>
                                            <h6 class="mb-1">Sharvan Kumar </h6>
                                            <div class="mail"> sharvankumarmbd0@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/risanjay.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">RI</p>
                                            <h6 class="mb-1">Sanjay kumar</h6>
                                            <div class="mail"> sanjaykumarbadal345@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/rirajesh.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">RI</p>
                                            <h6 class="mb-1">Rajesh Prasad Pandey</h6>
                                            <div class="mail"> panderajesh710@gmail.com</div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/rijagdish.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">RI</p>
                                            <h6 class="mb-1">Jagdish Chandra</h6>
                                            <div class="mail">jagdishchnadrachoudhary69@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/rideendayal.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">RI</p>
                                            <h6 class="mb-1">Deendayal Mishra</h6>
                                            <div class="mail">deendayalmishra40@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/rimahendra.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">RI</p>
                                            <h6 class="mb-1">Mahendra Singh</h6>
                                            <div class="mail">mahendralekhpal1965@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/rirajendra.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">RI</p>
                                            <h6 class="mb-1">Rajendra Kumar Doorbar</h6>
                                            <div class="mail"> rajendra8may1966@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/lekhkamlesh.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Lekhpal</p>
                                            <h6 class="mb-1">Kamlesh Namdev </h6>
                                            <div class="mail">kamleshnamdev00@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/lekhramji.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Lekhpal</p>
                                            <h6 class="mb-1">Ramji Yadav </h6>
                                            <div class="mail">ramjitiger1@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/lekhrajkumar.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Lekhpal</p>
                                            <h6 class="mb-1">Rajkumar </h6>
                                            <div class="mail">bidalekhpalrajkumar@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/lekhsatya.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Lekhpal</p>
                                            <h6 class="mb-1">Satya Prakash Pathak </h6>
                                            <div class="mail">satyaprakashpathak7205@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/lekhsachin.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Lekhpal</p>
                                            <h6 class="mb-1">Sachin </h6>
                                            <div class="mail">lekhpalsachin@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/lekhkapil.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Lekhpal</p>
                                            <h6 class="mb-1">Kapil Tiwari </h6>
                                            <div class="mail">kapil.talbehat@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/lekhdeepak.jpg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Lekhpal</p>
                                            <h6 class="mb-1">Deepak Singh </h6>
                                            <div class="mail">deepaksakin@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/lekhvineet.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Lekhpal</p>
                                            <h6 class="mb-1">Vineet Kumar Pandey </h6>
                                            <div class="mail"> bida_vineet@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/lekhsachinkhare.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Lekhpal</p>
                                            <h6 class="mb-1">Sachin Khare </h6>
                                            <div class="mail">sachinkhare12391@gmail.com</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-wrap-2 pb-4 img-wrap bg-light-2 text-center">
                                            <img src="img/lekhpush.jpeg" alt="">
                                            <p class="mb-1 mt-4 size-14 color-secondary">Lekhpal</p>
                                            <h6 class="mb-1">Pushpendra Kumar Sharma </h6>
                                            <div class="mail">pushpendra.orai1510@gmail.com</div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Add Navigation -->
                                <div class="position-absolute" style="top: 0; right: 0;">
                                    <div class="swiper-button-next" style="font-size: 30px;"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                    <div class="swiper-button-prev" style="font-size: 30px;"><i class="fa-solid fa-arrow-left"></i></div>
                                </div>
                                <!-- <div class="swiper-pagination"></div> -->
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

    <!-- Other JS files -->
    <script src="<?php echo $website_cdn_ath; ?>js/jquery.min.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/script.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/popper.min.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/plugins.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/custom.js"></script>

</body>

</html>