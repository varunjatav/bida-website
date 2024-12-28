<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <title>Films</title>

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
        .sec-img {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-image: url('./img/filmimagemain.png');
            height: 600px;
            position: relative;
        }

        .sec-oview {
            bottom: 20%;
        }
    </style>
</head>

<body>
    <div class="animsition">
        <?php include "includes/header.php"; ?>
        <div class="main-cntr">
            <div class="band-head">
                <div class="sec-head"> Uttar Pradesh Film Sector Policy Overview</div>
                <div class="blank"></div>
            </div>
            <div class="sec-img">
                <div class="sec-oview">
                    <div class="oview-title">Sector Overview :</div>
                    <p style="font-size: 18px;"> The Uttar Pradesh Film Sector Policy is designed to position the state as a premier destination for the film industry, leveraging its robust infrastructure, abundant labour, and rich heritage. With generous financial incentives and a variety of attractive locations, Uttar Pradesh offers an unparalleled filming experience.</p>
                </div>
            </div>

            <div class="bblank">
                <ol>
                <li><a style="cursor: pointer;" id="show_overview">Overview</a></li>
                    <li><a style="cursor: pointer;" id="show_objective">Objectives</a></li>
                    <li><a style="cursor: pointer;" id="show_eligibilty">Enablers</a></li>
                    <li><a style="cursor: pointer;" id="show_insent">Fiscal Incentives</a></li>
                </ol>
            </div>

            <div class="secs" id="overview">
                <div class="sect-1">
                    <div class="sec-name">Sector Overview</div>
                    <div class="sec-count">1</div>
                </div>

                <div class="sect-txt-div">
                    <div class="sec-txt" style="color:#000 !important;font-size:18px;padding:0 2%">
                        <div class="sec-points">
                            <ul>
                                <li><b>60% of national box office collections </b> come from Uttar Pradesh, NCR, and Mumbai.</li>
                                <li>Uttar Pradesh was awarded the <b> Most Film Friendly State Award</b> in the National Film Festival in both 2015 and 2016.</li>
                                <li>The state is set to host the <b> biggest film city in the country.</b></li>
                                <li>With <b>more than 500 multiplexes and single screens,</b> Uttar Pradesh is a major hub for cinema.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sect-img"><img loading="lazy" src="img/imageone.png" alt=""></div>
                </div>
            </div>

            <div class="secs" id="objective">
                <div class="sect-1">
                    <div class="sec-name">Objectives</div>
                    <div class="sec-count">2</div>
                </div>

                <div class="sect-txt-div">
                    <div class="sec-txt">
                        <div class="sec-points">
                            <ul>
                                <li>Establish Bundelkhand, Uttar Pradesh, as the preferred destination for the film industry.</li>
                                <li>Showcase the heritage, culture, and tourist destinations of the state to attract more tourists.</li>
                                <li>Attract more investment into the state.</li>
                                <li>Create more employment opportunities in the state.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sect-img"><img loading="lazy" src="img/filmimagetwo.png" alt=""></div>
                </div>
            </div>


            <div class="secs" id="eligibilty">
                <div class="sect-1">
                    <div class="sec-name">Enablers</div>
                    <div class="sec-count">3</div>
                </div>

                <div class="sect-txt-div">
                    <div class="sec-txt" style="color:#000 !important;font-size:20px;padding: 0 2%">
                        <div class="sec-points"><span class="bold">Abundance of labour </span>&nbsp;<span> at competitive costs.</span></div>
                        <div class="sec-points"><span class="bold">Excellent connectivity infrastructure </span>including :</div>
                        <div class="sec-points">
                            <ul style="padding-left: 17px;">
                                <li>10,000 miles of railway network.</li>
                                <li>1,120 miles of 8-lane expressways.</li>
                                <li>2 international airports.</li>
                                <li>5 domestic airports.</li>
                            </ul>
                        </div>
                        <div class="sec-points"><span class="bold"> Fiscal Incentives</span>&nbsp;<span>for film production and shooting.</span></div>
                        <div class="sec-points">A <b> variety of attractive destinations</b>such as religious sites, heritage locations, wildlife sanctuaries, and national parks.</div>
                    </div>
                    <div class="sect-img"><img loading="lazy" src="img/filmimagethree.png" alt=""></div>
                </div>
            </div>



            <div class="secs" id="insent">
                <div class="sect-1">
                    <div class="sec-name">Investment and Fiscal Incentives</div>
                    <div class="sec-count">4</div>
                </div>

                <div class="sect-txt-div">
                    <div class="sec-txt" style="padding: 0 2%;">
                        <div class="sec-points" style="margin-bottom:10px;font-size:18px;">

                        <p class="bold">SGST Reimbursement :</p>
                            <ul style="padding-left: 17px;">
                                <li>100% SGST reimbursement for multiplex and cinema hall owners.</li>
                            </ul>
                        </div>
                        <div class="sec-points" style="margin-bottom:10px;font-size:18px;">
                        <p class="bold">Subsidies for Films :</p>
                            <ul style="padding-left: 17px;">
                                <li>Up to ₹1 crore for films with at least 50% of shooting days in Uttar Pradesh.</li>
                                <li> Up to ₹2 crores for films with at least two-thirds of shooting days in Uttar Pradesh.</li>

                            </ul>
                        </div>

                        <div class="sec-points" style="margin-bottom:10px;font-size:18px;">
                        <p class="bold">Additional Subsidies for Artists :</p>
                            <ul style="padding-left: 17px;">
                                <li> Up to ₹25 lakh for films featuring at least 5 artists from Uttar Pradesh.</li>
                                <li>Up to ₹50 lakh for films where all artists hail from Uttar Pradesh.</li>

                            </ul>
                        </div>



                    </div>
                    <div class="sect-img"><img loading="lazy" src="img/filmimagefour.png" alt=""></div>
                </div>
            </div>

        </div>

        <?php include "includes/footer.php"; ?>
        <div class="btns">
            <div class="rq-btn"><a href="query">Raise Query</a></div>
            <div class="dp-btn"><a href="img/film.pdf" target="_blank">Download Policy</a></div>y
        </div>
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
    <script src="js/sector.js"></script>
</body>

</html>