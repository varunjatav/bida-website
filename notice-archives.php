<?php
date_default_timezone_set('Asia/Kolkata');
include_once 'config.php';
include_once 'dbcon/db_connect.php';
include_once 'functions/common.function.php';
include_once 'core/noticeArchiveList.core.php';
?>
<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <title>Archives</title>
    <link rel="icon" type="img/x-icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/animsition.min.css" />
    <link rel="stylesheet" href="css/unicons.css" />
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/lighbox.min.css" />
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/tooltip.min.css" />
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/style.css" />

    <style>
        .white {
            background-color: #fff !important;
            color: #000 !important;
        }

        .white a {
            color: #000 !important;
        }

        .dsp {
            display: none;
        }

        .landing-shadow-4 {
            box-shadow: 0px 20px 50px -5px rgba(149, 164, 175, 0.4);
            /* overflow: auto;
			max-height: 315px; */
        }

        .sector-a2 {
            color: #fff;
        }

        .ko-btn-down {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .ko-btn-down a {
            background-color: #00000085;
            color: #fff;
            font-size: 18px;
            padding: 6px;
            border-radius: 8px;
        }

        .tender-container {
            color: #000;
            background-color: #fff;
            padding: 2%;
            margin: 2%;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-radius: 10px;
        }

        .tender-card {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-radius: 10px;

            margin-bottom: 20px;
        }

        .tenders {
            display: flex;
            gap: 5%;
            margin-bottom: 15px;
            align-items: center;
        }

        hr {
            margin: 0;
            margin-bottom: 10px;
        }

        .bold {
            font-weight: 600;
        }

        .active-tender {
            border-bottom: 2px solid orangered;
        }

        .tender1 {}

        .tender2 {}

        .tender-head {
            display: flex;
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            line-height: 40px;
            border-radius: 10px 10px 0px 0px;
            border: 1px solid #ddd;
            /* margin: 1% 1% 0% 1%; */
        }

        .tender-count {
            width: 5%;
            background-color: #31A267;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px 0px 0px 0px;
        }

        .tender-title {
            width: 70%;
            text-align: center;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-right: 1px solid #ddd;
        }

        .tender-info {
            width: 25%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 1%;
        }

        .tender-time {
            display: flex;
            border: 1px solid #ddd;
            /* margin: 0% 1% 1% 1%; */
        }

        .tt1 {
            width: 25%;
            color: #009933;
            background-color: #F7FFFA;
            border-right: 1px solid #ddd;
            display: flex;
            align-items: center;
            padding: 0 10px;
        }

        .tt2 {
            width: 25%;
            color: #336699;
            background-color: #EEF8FF;
            border-right: 1px solid #ddd;
            display: flex;
            align-items: center;
            padding: 0 10px;
        }

        .tt3 {
            width: 25%;
            color: #336699;
            background-color: #D7F5F5;
            border-right: 1px solid #ddd;
            display: flex;
            align-items: center;
            padding: 0 10px;
        }

        .tt4 {
            width: 25%;
            color: #990099;
            background-color: #FBF2FF;
            display: flex;
            align-items: center;
            padding: 0 10px;
        }

        .tender-details {
            /* margin: 1%; */
            padding: 1%;
        }

        .tender-links-div {
            /* margin: 1%; */
            padding: 1%;
        }

        ul li::marker {
            color: #31A267 !important;
        }

        .tenders a {
            color: #000;
        }

        .tenders {
            position: sticky;
            top: 75px;
            left: 0;
            z-index: 1;
            background-color: #fff;
            padding: 10px;
        }

        .flex-div {
            display: flex;
            text-align: center;
            align-items: center;
        }

        @media (max-device-width: 350px) and (min-device-width: 315px) {
            .tender-links-div {
                font-size: 16px;
            }
        }



        @media (max-device-width: 800px) and (min-device-width: 315px) {
            .tender-head {
                line-height: 20px;
                flex-direction: column;
            }

            .tender-count {
                width: 100%;
                border-radius: 10px 10px 0px 0px;
            }

            .tender-title {
                width: 100%;
                text-align: justify;
                border-bottom: 1.5px solid #ddd;
                font-size: 14px;
            }

            .tender-info {
                width: 100%;
                padding: 0 5px;
                text-align: justify;
                font-size: 14px;
            }

            .tender-time {
                display: flex;
                flex-direction: column;
                font-size: 14px;
            }

            .tt1 {
                width: 100%;
                padding: 15px;
                display: flex;
                justify-content: center;
            }

            .tt2 {
                width: 100%;
                padding: 15px;
                display: flex;
                justify-content: center;
            }

            .tt3 {
                width: 100%;
                padding: 15px;
                display: flex;
                justify-content: center;
            }

            .tt4 {
                width: 100%;
                padding: 15px;
                display: flex;
                justify-content: center;
            }

            .tender-details {
                text-align: justify;
            }

            .tender-details {
                width: 98%;
            }

            .flex-div {
                flex-direction: column;
                font-size: 14px;
            }

            .tender-links-div {
                font-size: 14px;
            }
            .padding-top-mob-nav{
                padding-top: 20px;
            }   
        }

        .flex-div {
            display: flex;
            text-align: center;
            align-items: center;
        }

        @media (max-device-width: 800px) and (min-device-width: 600px) {
            .tender-links-div {
                font-size: 16px;
            }

            .tender-title {
                font-size: 16px;
            }

            .tender-info {
                font-size: 16px;
            }

            .tender-time {
                font-size: 16px;
            }

            .flex-div {
                font-size: 16px;
            }
            .padding-top-mob-nav{
                padding-top: 20px;
            }   
        }
    </style>


</head>

<body>

    <div class="animsition">

        <!-- Navigation
		================================================== -->

        <?php include "includes/header.php"; ?>


        <div class="section over-hide padding-top-120 padding-top-mob-nav">
            <div class="top-header-parallax-section corporate-hero-back-img-1 section-background-chemical parallax-hero-1200">
            </div>
            <div class="poster_background"></div>
            <div id="video-wrap" class="parallax-top">
                <video class="video_background" preload="auto" autoplay loop="loop" muted="muted" style="width: 100%;
						height: 100%;
						object-fit: fill;">
                    <source src="<?php echo $website_cdn_ath; ?>video/sectors.mp4" type="video/mp4">
                </video>
            </div>
            <!-- <div class="background-dark-over-hotel"></div> -->

            <div class="background-dark-over-hotel"></div>
            <div class="section-1400 z-bigger">
                <div class="container-fluid padding-top-bottom-80">
                    <div class="row">
                        <div class="col-lg">
                            <h2 class="display-8 mb-3 color-white">
                                Notice
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quote section
		================================================== -->

        <div class="tender-container">
            <div class="tenders">
                <div class="tender1"><a href="notice.php" class="bold">Latest Notice</a></div>
                <div class="tender2 active-tender"><a href="notice-archives.php">Archives</a></div>
            </div>
            <hr>
            <div class="tender-card">

                <div class="tender-head">
                    <div class="tender-count">01</div>
                    <div class="tender-title">RFQ for Procurement of Laptops for Invest India Employees</div>
                    <div class="tender-info"><span>Notice Reference No. :</span><span>IND/INV/21-22/IT-0002</span></div>
                </div>

                <div class="tender-time">
                    <div class="tt1" style="height:40px;">Release Date : 26 jan 2024</div>
                </div>

                <div class="tender-details">This RFQ has been canceled. Please refer the new notice (Reference number IND/INV/21-22/IT-0002)</div>
                <hr>

                <div class="tender-links-div">
                    <div class="links">Links :</div>
                    <div class="link1">
                        <ul>
                            <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">RFQ Document </a>&nbsp;</span></li>
                            <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Corrigendum</a>&nbsp;</span></li>
                            <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Corrigendum 2</a>&nbsp;</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tender-card">

                <div class="tender-head">
                    <div class="tender-count">02</div>
                    <div class="tender-title">RFQ for Procurement of Laptops for Invest India Employees</div>
                    <div class="tender-info"><span>Notice Referance No. :</span><span>IND/INV/21-22/IT-0002</span></div>
                </div>

                <div class="tender-time">
                    <div class="tt1" style="height:40px;">Release Date : 26 jan 2024</div>
                </div>

                <div class="tender-details">This RFQ has been canceled. Please refer the new notice (Reference number IND/INV/21-22/IT-0002)</div>
                <hr>

                <div class="tender-links-div">
                    <div class="links">Links :</div>
                    <div class="link1">
                        <ul>
                            <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">RFQ Document </a>&nbsp;</span></li>
                            <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Corrigendum</a>&nbsp;</span></li>
                            <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Corrigendum 2</a>&nbsp;</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tender-card">

                <div class="tender-head">
                    <div class="tender-count">03</div>
                    <div class="tender-title">Appointment of Consultancy Organization for "Preparation of draft Town Planning(TP) Scheme for BIDA"</div>
                    <div class="tender-info"><span>Notice Referance No. :</span><span>BIDA/PA&E/CS/2024/01</span></div>
                </div>

                <div class="tender-time">
                    <div class="tt1" style="height:40px;">Release Date : 13 Feb 2024</div>
                </div>

                <div class="tender-details">This RFP document is neither an agreement nor an offer by the Bundelkhand Industrial Development
                    Authority (BIDA) to the prospective Applicants or any other person. The purpose of this RFP is to provide
                    information to the interested parties that may be useful to them in the formulation of their proposal pursuant
                    to this RFP. </div>
                <hr>

                <div class="tender-links-div">
                    <div class="links">Links :</div>
                    <div class="link1">
                        <ul>
                            <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Request for Proposal</a>&nbsp;</span><span style="color:#6a6c71">(12/02/2024)</span></li>
                            <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Request for Proposal</a>&nbsp;</span><span style="color:#6a6c71">(12/02/2024)</span></li>
                            <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Request for Proposal</a>&nbsp;</span><span style="color:#6a6c71">(12/02/2024)</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php $i = 1;
            $file_name_array = array();
            $tender_name_array = array();
            $date_array = array();
            while ($row = $sql->fetch()) {

                $first_upload_file_array = array();
                $file_name_array = explode('@@', $row['Attachment']);
                $notice_name_array = explode('@@', $row['FileName']);
                $date_array = explode('@@', $row['Dated']);
            ?>
                <div class="tender-card">
                    <div class="tender-head">
                        <div class="tender-count"><?php echo $i++; ?></div>
                        <div class="tender-title"><?php echo $row['NoticeTitle'] ? $row['NoticeTitle'] : '--'; ?></div>
                        <div class="tender-info"><span>Notice Referance No. :</span><span><?php echo $row['NoticeRefrenceNo'] ? $row['NoticeRefrenceNo'] : '--'; ?></span></div>
                    </div>

                    <div class="tender-time">
                        <div class="tt1" style="height:40px;">Release Date : <?php echo $row['ReleaseDate'] == '0' ? '--' : date('d/m/Y', $row['ReleaseDate']); ?></div>
                    </div>

                    <div class="tender-details"> <?php echo $row['NoticeDescription'] == '' ? '--' : $row['NoticeDescription']; ?></div>
                    <hr>
                    <?php if (count_($notice_name_array) > 0) { ?>
                        <div class="tender-links-div">
                            <div class="links">Links :</div>
                            <div class="link1">
                                <ul>
                                    <?php
                                    $notice_file_name = array();
                                    $notice_doc = array();
                                    foreach ($notice_name_array as $nkey => $nval) {

                                        $notice_file_name = json_decode($nval, true);
                                        $notice_doc = json_decode($file_name_array[$nkey], true);

                                        foreach ($notice_file_name as $noticekey => $noticeval) {
                                    ?>
                                            <li><span><a href="download?type=<?php echo encryptIt('notice_cor'); ?>&file=<?php echo encryptIt($notice_doc[$noticekey]); ?>" style="color:#31A267"><?php echo $noticeval ? $noticeval : '--'; ?></a>&nbsp;</span><span style="color:#6a6c71">(<?php echo $date_array[$nkey] == 0 ? '--' : date('d/m/Y', $date_array[$nkey]); ?>)</span></li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>






        <!-- section
		================================================== -->

        <!-- <div class="section over-hide padding-top-bottom-120">
			<div class="section-1400">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 col-lg-3" data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s">
							<div class="section border-4 services-wrap-3 px-4 py-5">
								<p class="mb-2"><i class="uil uil-package size-50"></i></p>
								<h6 class="mb-4">
									Branding
								</h6>
								<p class="mb-0">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
								</p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 mt-4 mt-sm-0"
							data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s">
							<div class="section border-4 services-wrap-3 px-4 py-5">
								<p class="mb-2"><i class="uil uil-ruler-combined size-50"></i></p>
								<h6 class="mb-4">
									UI/UX Design
								</h6>
								<p class="mb-0">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
								</p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 mt-4 mt-lg-0"
							data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s">
							<div class="section border-4 services-wrap-3 px-4 py-5">
								<p class="mb-2"><i class="uil uil-bolt size-50"></i></p>
								<h6 class="mb-4">
									Animation
								</h6>
								<p class="mb-0">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
								</p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 mt-4 mt-lg-0"
							data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s">
							<div class="section border-4 services-wrap-3 px-4 py-5">
								<p class="mb-2"><i class="uil uil-image-check size-50"></i></p>
								<h6 class="mb-4">
									Photography
								</h6>
								<p class="mb-0">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

        <!-- Logo section
		================================================== -->




        <!-- Portfolio section
		================================================== -->

        <!-- Footer
		================================================== -->

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
