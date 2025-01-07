<?php
date_default_timezone_set('Asia/Kolkata');
include_once 'config.php';
include_once 'dbcon/db_connect.php';
include_once 'functions/common.function.php';
include_once 'core/tenderList.core.php';



?>
<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <title>Tender</title>
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

        /* new css */
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
            background-color: #FF8317;
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
            color: red !important;
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
                /* padding: 0 5px; */
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

            .padding-top-mob-nav {
                padding-top: 100px;
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

            .padding-top-mob-nav {
                padding-top: 100px;
            }
        }
    </style>


</head>

<body>

    <div class="animsition">

        <?php include "includes/header.php"; ?>


        <div class="section over-hide padding-top-120 padding-top-mob-nav">
            <div class="top-header-parallax-section corporate-hero-back-img-1 section-background-tender parallax-hero-1200">
            </div>
            <div class="section-1400 z-bigger">
                <div class="container-fluid padding-top-bottom-60">
                    <div class="row">
                        <div class="col-lg">
                            <h2 class="display-8 mb-3 color-white">
                                Tenders
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
                <div class="tender1 active-tender"><a href="tender.php" class="bold">Latest Tenders</a></div>
                <div class="tender2"><a href="archives.php">Archives</a></div>
            </div>
            <hr>
            <!-- <div class="tender-card">

                <div class="tender-head">
                    <div class="tender-count">01</div>
                    <div class="tender-title">Hiring a Consultant
                        for Preparation of Vision Document and
                        Master Plan 2045 for Bundelkhand
                        Industrial Development Authority BIDA</div>
                    <div class="tender-info"><span>Tender Referance No. :</span><span>B2024_BUIDA_890788_1</span></div>
                </div>

                <div class="tender-time">
                    <div class="tt1">Release Date : 5 JAN 2024</div>
                    <div class="tt2" style="text-align:center;">Pre-bid meeting : 24 Feb 2024 <br>12:30 Hrs</div>
                    <div class="tt3">Bid Submission :</div>
                    <div class="tt4">Bid Closing :</div>
                    <div class="tt3"><a href="img/NIT.pdf" target="_blank">Download Tender</a></div>
                </div>

                <div class="flex-div">
                    <div class="tender-details">Hiring a Consultant for Preparation of Vision Document and Master Plan 2045 for Bundelkhand Industrial Development Authority BIDA.</div>
                    <div style="width: 18%;"><a href="img/NIT.pdf"><img src="img/pdf-icon.png" alt="pdf" style="width: 60px;"></a></div>
                </div>
                <hr>

                <div class="tender-links-div">
                    <div class="links">Latest Corrigendum List :</div>
                    <div class="link1">
                        <ol>
                            <li><span><a href="img/Corrigendum.pdf" style="color:#FF0000">Corrigendum 1</a>&nbsp;</span><span style="color:#6a6c71">(9/02/2024)</span></li>
                            <li><span><a href="img/Corrigendum-2.pdf" style="color:#FF0000">Corrigendum 2</a>&nbsp;</span><span style="color:#6a6c71">(19/02/2024)</span></li>
                            <li><span><a href="img/recived-rfp.pdf" style="color:#FF0000">Revised RFP</a>&nbsp;</span><span style="color:#6a6c71">(28/02/2024)</span></li>
                            <li><span><a href="img/date-extend.pdf" style="color:#FF0000">date extension (revised RFP)</a>&nbsp;</span><span style="color:#6a6c71">(28/02/2024)</span></li>
                            <li><span><a href="img/date-extend.pdf" style="color:#FF0000">Response to querries</a>&nbsp;</span><span style="color:#6a6c71">(28/02/2024)</span></li>
                        </ol>
                    </div>
                </div>
            </div> -->

            <?php
            $i = 1;
            $file_name_array = array();
            $tender_name_array = array();
            $date_array = array();

            while ($row = $sql->fetch()) {              
                $first_upload_file_array = array();
                $file_name_array = explode('@@', $row['Attachment']);
                $tender_name_array = explode('@@', $row['FileName']);
                $date_array = explode('@@', $row['Dated']);
                $first_upload_file_array = json_decode($file_name_array[0], true);
                $first_upload_file = $first_upload_file_array[0];
              
            ?>
                <div class="tender-card">

                    <div class="tender-head">
                        <div class="tender-count"><?php echo $i++; ?></div>
                        <div class="tender-title"><?php echo $row['TenderTitle'] ? $row['TenderTitle'] : '--'; ?></div>
                        <div class="tender-info"><span>Tender Reference No. :</span><span><?php echo $row['TenderRefrenceNo'] ? $row['TenderRefrenceNo'] : '--'; ?></span></div>
                    </div>

                    <div class="tender-time">
                        <div class="tt1"><?php echo $row['ReleaseDateTitle'] ? $row['ReleaseDateTitle']." :" : 'Release Date :'?>   <?php echo $row['ReleaseDate'] > 0 ? date('d/m/Y', $row['ReleaseDate']) : '--'; ?></div>
                        <div class="tt2" style="text-align:center;"> <?php echo $row['PreBidMeetingTitle'] ? $row['PreBidMeetingTitle']." :" : 'Pre-Bid meeting :'?>  <?php echo $row['PreBidMeeting'] > 0 ? date('d/m/Y', $row['PreBidMeeting']) : '--'; ?><br><?php echo $row['PreBidMeeting'] > 0 ? date('H:i', $row['PreBidMeeting']) : '--'; ?> Hrs</div>
                        <div class="tt3"><?php echo $row['PreBidSubmissionHead'] ? $row['PreBidSubmissionHead']." :" : 'Bid Submission Deadline :'?> <?php echo $row['BidSubmission'] == 0 ? '--' : date('d/m/Y', $row['BidSubmission']); ?></div>
                        <!-- <div class="tt4">Financial Bid Opening : <?php //echo $row['FinancialBidOpening'] == 0 ? '--' : date('d/m/Y', $row['FinancialBidOpening']); ?></div> -->
                      <!--  <div class="tt4">Bid Closing : <?php //echo $row['TechnicalPresentation'] == 0 ? '--' : date('d/m/Y', $row['TechnicalPresentation']); ?></div> -->
                        <div class="tt3"><a href="download?type=<?php echo encryptIt('tender_cor'); ?>&file=<?php echo encryptIt($first_upload_file); ?>" target="_blank">Download Tender</a></div>
                    </div>

                    <div class="flex-div">
                        <div class="tender-details"><?php echo $row['TenderDescription'] ? $row['TenderDescription'] : '--'; ?></div>
                        <div style="width: 28%;"><a href="download?type=<?php echo encryptIt('tender_cor'); ?>&file=<?php echo encryptIt($first_upload_file); ?>"><img src="img/pdf-icon.png" alt="pdf" style="width: 60px;"></a></div>
                    </div>
                    <hr>
                    <?php if (count_($tender_name_array) > 0) { ?>
                        <div class="tender-links-div">
                            <div class="links">Latest Corrigendum List :</div>
                            <div class="link1">
                                <ol>
                                    <?php
                                    $tender_file_name = array();
                                    $tender_doc = array();
                                    foreach ($tender_name_array as $tkey => $tval) {
                                        
                                      
                                        // if ($tkey == 0) {
                                        //     continue;
                                        // }

                                        $tender_file_name = json_decode($tval, true);
                                        $tender_doc = json_decode($file_name_array[$tkey], true);

                                        foreach ($tender_file_name as $tenderkey => $tenderval) {
                                            
                                    ?>
                                            <li><span><a href="download?type=<?php echo encryptIt('tender_cor'); ?>&file=<?php echo encryptIt($tender_doc[$tenderkey]); ?>" style="color:#FF0000"><?php echo $tenderval ? $tenderval : '--'; ?></a>&nbsp;</span>
                                            <!-- <span style="color:#6a6c71">(<?php //echo $date_array[$tkey] == 0 ? '--' : date('d/m/Y', $date_array[$tkey]); ?>)</span> -->
                                        </li>
                                    <?php }
                                    }
                                    ?>
                                </ol>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php //$i++;
            } ?>
        </div>
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