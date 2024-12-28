<?php include "config.php"; ?>
<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <title>Objective</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="theme-color" content="#212121" />
  <meta name="msapplication-navbutton-color" content="#212121" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />
  <link rel="stylesheet" href="css/obj-slider.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="icon" type="img/x-icon" href="img/favicon.png">
  <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/animsition.min.css" />
  <link rel="stylesheet" href="css/unicons.css" />
  <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/lighbox.min.css" />
  <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/tooltip.min.css" />
  <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/swiper.min.css" />
  <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/style.css" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'>

  <style>
    .white {
      background-color: #fff !important;
      color: #000 !important;
    }

    .white a {
      color: #000 !important;
    }
    .animated-list li{
      color: #000;
    }

    .animated-list li{
      color: #000;
    }

    .glyphicon-chevron-left:before {
      content: "\e079";
      display: none;
    }

    .glyphicon-chevron-right:before {
      content: "\e080";
      display: none;
    }

    /* .landing-shadow-4 {
      box-shadow: 0px 20px 50px -5px rgba(149, 164, 175, 0.4);
      overflow: auto;
			max-height: 315px;
    } */

    .btn-user-profile:hover {
      background-color: rgb(177, 175, 175);
      color: #fff;
    }

    .carousel-inner .item img {
      width: 100%;
      height: 500px;
      /* Set the height of the carousel slide */
      object-fit: cover;
      /* Maintain aspect ratio and cover the entire slide */
    }

    .carousel-caption {
      padding-bottom: 150px;
      text-align: left !important;
    }

    .carousel-caption h2 {
      font-size: 22px;
      /* text-transform: uppercase; */
      color: green;
    }

    .carousel-caption p {
      font-size: 16px;
      /* text-transform: uppercase; */
      color: #000;
    }

    .carousel-control.right {
      background-image: none;
    }

    .carousel-control.left {
      background-image: none;
    }

    .carousel-caption1 {
      padding-bottom: 85px !important;
    }

    .carousel-caption2 {
      padding-bottom: 180px !important;
    }

    .carousel-caption3 {
      padding-bottom: 200px !important;
    }

    @media (max-width: 398px) and (min-width: 320px) {
      .carousel-caption p {
        line-height: 15px;
      }
    }

    @media (max-width: 425px) and (min-width: 320px) {
      .padding-top-mob-nav {
        padding-top: 135px;
      }

      .carousel-caption h2 {
        font-size: 13px;
        line-height: 18px;
      }

      .carousel-caption p {
        font-size: 11px;
      }

      .carousel-caption1 {
        padding-bottom: 0px !important;
      }

      .carousel-caption {
        padding-bottom: 54px;
      }

      .carousel-caption2 {
        padding-bottom: 66px !important;
      }

      .carousel-caption3 {
        padding-bottom: 131px !important;
      }
    }

    @media (max-width: 768px) and (min-width: 425px) {
      .carousel-caption p {
        font-size: 11px;
      }

      .carousel-caption1 {
        padding-bottom: 0px !important;
      }

      .carousel-caption {
        padding-bottom: 44px;
      }

      .carousel-caption2 {
        padding-bottom: 66px !important;
      }

      .carousel-caption3 {
        padding-bottom: 131px !important;
      }

      .carousel-caption h2 {
        font-size: 17px;
      }
    }

    @media (max-width: 768px) and (min-width: 487px) {
      .carousel-caption1 {
        padding-bottom: 100px !important;
      }

      .carousel-caption {
        padding-bottom: 109px;
      }

      .carousel-caption2 {
        padding-bottom: 100px !important;
      }

      .carousel-caption3 {
        padding-bottom: 159px !important;
      }
    }
    .bg-tri {
			background-image: url('img/tricolorbackdropblur.png');
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-position: top;
		}
  </style>
</head>

<body>
  <div class="animsition">
    <?php include "includes/header.php"; ?>

    <div class="section over-hide padding-top-120 padding-top-mob-nav">
      <div class="top-header-parallax-section corporate-hero-back-img-2 section-background-about parallax-hero-1200"></div>
      <div class="background-dark-over-hotel"></div>
      <div class="section-1400 z-bigger">
        <div class="container-fluid padding-top-bottom-60">
          <div class="row">
            <div class="col-lg">
              <h2 class="display-8 mb-3 color-white">Objectives</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section over-hide bg-tri">
      <div class="section-1400">
        <div class="container-fluid">
          <div style="width:100%;padding:2%">
            <div class="mt-4 mt-lg-0">
              <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 " style="background-color: #00000085;">
                <div class="accordion accordion-shadow-2" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Attaining Sustainability and Holistic Development:
                      </div>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body faq-scroll">
                        <div class="row">
                          <div class="col-12">
                            <div class="mb-1">
                              <div>
                                <ul class="animated-list">
                                  <li class="animated zoomIn" style="animation-delay: .2s">BIDA envisions a self-sustaining, socially vibrant region that harmoniously integrates business, trade, industry, housing, traditions, culture, and tourism.</li>
                                  <li class="animated bounceInLeft" style="animation-delay: .3s;">The focus is on ecologically responsible planning, emphasizing the preservation and restoration of natural habitats and cultural centers, to create a viable and pleasant environment.</li>
                                  <li class="animated bounceInLeft" style="animation-delay: .4s;">Overarching aspiration to develop a Green Industrial City based on the live, work, and play concept, serving as an industrial hub while integrating sustainable practices, cultural preservation, and innovation.</li>
                                  <li class="animated bounceInLeft" style="animation-delay: .5s;">The focus is on ecologically responsible planning, emphasizing the preservation and restoration of natural habitats and cultural centers, to create a viable and pleasant environment.</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <div class="card-header" id="headingTwo">
                      <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>
                        Regional Connectivity and Smart Transportation:
                      </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body faq-scroll">
                        <div class="row">
                          <div class="col-12">
                            <div class="mb-1">
                              <div>
                                <ul class="animated-list">
                                  <li class="animated zoomIn" style="animation-delay: .2s">We prioritize robust regional connectivity through well-designed transportation infrastructure.</li>
                                  <li class="animated zoomIn" style="animation-delay: .3s">To enhance enclave accessibility through efficient road networks, robust connectivity to airports and railway stations, and seamless intra-city transportation. By integrating AIbased solutions and smart traffic systems, BIDA seeks to provide a futuristic, efficient mobility experience, reducing congestion and optimizing travel times for residents and visitors alike .</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <div class="card-header" id="headingThree">
                      <div class="faq btn-accordion collapsed text-break" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>
                        Regional Connectivity and Smart Transportation:Achieving Global Standards and developing Social Tourism Infrastructure:
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body faq-scroll">
                          <div class="row">
                            <div class="col-12">
                              <div class="mb-1">
                                <div>
                                  <ul class="animated-list">
                                    <li class="animated zoomIn" style="animation-delay: .2s">Cultivate a tourism sector that not only preserves but celebrates heritage, resonating with cultural vibrancy.</li>
                                    <li class="animated zoomIn" style="animation-delay: .3s">BIDA envisions to be an industrial township with a harmonious blend of cultural events, art, music, cuisines, and festivals, enhancing the overall tourist experience.</li>
                                    <li class="animated zoomIn" style="animation-delay: .3s">
                                      Establishing of high-quality lighthouse schools, multispecialty hospitals, and world-class recreational facilities.</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <div class="card-header" id="headingFour">
                      <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>
                        Achieving social, and environmental vibrancy:
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body faq-scroll">
                          <div class="row">
                            <div class="col-12">
                              <div class="mb-1">
                                <div>
                                  <ul class="animated-list">
                                    <li class="animated zoomIn" style="animation-delay: .2s">Keeping centrality of Bundelkhand, envisioning a dynamic and inclusive society through the promotion of cultural events, art, music, cuisines, and festivals.</li>
                                    <li class="animated zoomIn" style="animation-delay: .3s">commitment to green spaces, unrestricted river flows, and sustainable practices to ensure a healthy environment for present and future generations achieving environmental stewardship fostering cutting-edge industries powered by renewable energy sources.</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <div class="card-header" id="headingFive">
                      <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>
                        Developing Islands of excellence & connecting with growth corridors:
                      </div>
                      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body faq-scroll">
                          <div class="row">
                            <div class="col-12">
                              <div class="mb-1">
                                <div>
                                  <ul class="animated-list">
                                    <li class="animated zoomIn" style="animation-delay: .2s">Identifying the clusters, developing and connecting them with industrial growth corridors.</li>
                                    <li class="animated zoomIn" style="animation-delay: .3s">Focus on attracting investments in pivotal sectors such as Medical & Pharma, logistics, Agro-based Industries, warehousing, Information Technology (IT), Artificial Intelligence (AI), Research and Development (R&D), semiconductors, solar parks, and other diverse sectors to drive economic growth.</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
            <!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="item">
                <img src="img/tricolorbackdropblur.png" alt="..." width="100%" />
                <div class="carousel-caption">
                  <h2 class="animated zoomIn" style="animation-delay: 1s">
                    Developing Islands of excellence & connecting with growth
                    corridors:
                  </h2>
                  <p class="animated bounceInLeft" style="animation-delay: 2.5s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>Identifying the clusters, developing and
                    connecting them with industrial growth
                    corridors.
                    </span>
                  </p>
                  <p class="animated bounceInLeft" style="animation-delay: 2.5s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>Focus on attracting investments in pivotal
                      sectors such as Medical & Pharma, logistics,
                      Agro-based Industries, warehousing,
                      Information Technology (IT), Artificial
                      Intelligence (AI), Research and Development
                      (R&D), semiconductors, solar parks, and other
                      diverse sectors to drive economic growth.
                    </span>
                  </p>
                </div>
              </div>
              <div class="item active">
                <img src="img/tricolorbackdropblur.png" alt="..." />
                <div class="carousel-caption carousel-caption1">
                  <h2 class="animated zoomIn" style="animation-delay: 1s">
                    Attaining Sustainability and Holistic Development:
                  </h2>
                  <p class="animated bounceInLeft" style="animation-delay: 1.5s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>BIDA envisions a self-sustaining, socially
                      vibrant region that harmoniously integrates
                      business, trade, industry, housing, traditions,
                      culture, and tourism.
                    </span>
                  </p>
                  <p class="animated bounceInLeft" style="animation-delay: 2s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>The focus is on ecologically responsible
                      planning, emphasizing the preservation and
                      restoration of natural habitats and cultural
                      centers, to create a viable and pleasant
                      environment.</span>
                  </p>
                  <p class="animated bounceInLeft" style="animation-delay: 2.5s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>Overarching aspiration to develop a Green
                      Industrial City based on the live, work, and
                      play concept, serving as an industrial hub
                      while integrating sustainable practices,
                      cultural preservation, and innovation.</span>
                  </p>
                  <p class="animated bounceInLeft" style="animation-delay: 3s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>The vision extends beyond economic growth,
                      aiming to ensure a thriving community where
                      prosperity coexists with environmental
                      consciousness and cultural vibrancy.</span>
                  </p>
                </div>
              </div>
              <div class="item">
                <img src="img/tricolorbackdropblur.png" alt="..." />
                <div class="carousel-caption">
                  <h2 class="animated zoomIn" style="animation-delay: 1s">
                    Regional Connectivity and Smart Transportation:
                  </h2>
                  <p class="animated bounceInLeft" style="animation-delay: 2s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>We prioritize robust regional connectivity through
                      well-designed transportation infrastructure.</span>
                  </p>
                  <p class="animated bounceInLeft" style="animation-delay: 2.5s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>To enhance enclave accessibility through
                      efficient road networks, robust connectivity to
                      airports and railway stations, and seamless
                      intra-city transportation. By integrating AIbased solutions and smart traffic systems,
                      BIDA seeks to provide a futuristic, efficient
                      mobility experience, reducing congestion and
                      optimizing travel times for residents and
                      visitors alike .</span>
                  </p>
                </div>
              </div>
              <div class="item">
                <img src="img/tricolorbackdropblur.png" alt="..." />
                <div class="carousel-caption carousel-caption2">
                  <h2 class="animated zoomIn" style="animation-delay: 1s">
                    Achieving Global Standards and developing Social Tourism
                    Infrastructure:
                  </h2>
                  <p class="animated bounceInLeft" style="animation-delay: 3s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>Cultivate a tourism sector that not only
                      preserves but celebrates heritage, resonating
                      with cultural vibrancy.
                    </span>
                  </p>
                  <p class="animated bounceInLeft" style="animation-delay: 3s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>BIDA envisions to be an industrial township with a
                      harmonious blend of cultural events, art, music,
                      cuisines, and festivals, enhancing the overall tourist
                      experience.</span>
                  </p>
                  <p class="animated bounceInLeft" style="animation-delay: 3s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>Establishing of high-quality lighthouse schools,
                      multispecialty hospitals, and world-class recreational
                      facilities.</span>
                  </p>
                </div>
              </div>
              <div class="item">
                <img src="img/tricolorbackdropblur.png" alt="..." />
                <div class="carousel-caption carousel-caption3">
                  <h2 class="animated zoomIn" style="animation-delay: 1s">
                    Achieving social, and environmental vibrancy:
                  </h2>
                  <p class="animated bounceInLeft" style="animation-delay: 3s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>Keeping centrality of Bundelkhand,
                      envisioning a dynamic and inclusive society
                      through the promotion of cultural events,
                      art, music, cuisines, and festivals. </span>
                  </p>
                  <p class="animated bounceInLeft" style="animation-delay: 3s; display: flex">
                    <i class="uil uil-arrow-right size-22 ml-2" style="color: #fc7500; margin-top: -8px"></i><span>commitment to green spaces, unrestricted river
                      flows, and sustainable practices to ensure a
                      healthy environment for present and future
                      generations achieving environmental
                      stewardship fostering cutting-edge industries
                      powered by renewable energy sources.</span>
                  </p>
                </div>
              </div>
            </div>

            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color: #000"><i class="fa-solid fa-arrow-left"></i></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color: #000"><i class="fa-solid fa-arrow-right"></i></span>
              <span class="sr-only">Next</span>
            </a>
          </div> -->
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

    <script src="js/slider-jquery.js"></script>
    <script src="js/slider.js"></script>

    <script src="<?php echo $website_cdn_ath; ?>js/jquery.min.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/script.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/popper.min.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/plugins.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/custom.js"></script>
</body>

</html>