<?php
include_once 'config.php';
include_once 'dbcon/db_connect.php';
include_once 'functions/common.function.php';
include_once 'core/raiseQuery.core.php';
?>
<!DOCTYPE html>

<html class="no-js" lang="en">

    <head>

        <meta charset="utf-8">
        <title>Query</title>

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
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script src="scripts/jquery.min.js"></script>
        <script>
            document.write('<style type="text/css">body{display:none}</style>');
            jQuery(function (a) {
                a("body").css("display", "block")
            });
        </script>
        <style>
            .white {
                background-color: #fff !important;
                color: #000 !important;
            }

            .white a {
                color: #000 !important;
            }
            .bg-tri {
                background-image: url('./img/tricolorbackdropblur.png');
                background-repeat: no-repeat;
                background-size: cover;
            }

            .send-btn{
                border-radius: 8px;
                background: #31a267;
                color: #fff !important;
                padding: 6px 14px;
                border: none;
            }
            .frm-er-msg{
                font-size: 12px;
                color: #d20000;
                font-weight: 400;
            }
            input.frm-focus{
                border-bottom: 2px solid #9E4784 !important;
            }
            textarea.frm-error,select.frm-error, input.frm-error, .str-txarea.frm-error{
                border-bottom: 2px solid #d20000 !important;
            }
            select.gen-frm-error, input.gen-frm-error, .str-txarea.gen-frm-error{
                border-bottom: 2px solid #d20000 !important;
            }
        </style>
    </head>

    <body>

        <div class="animsition">

            <!-- Navigation
            ================================================== -->

            <?php include "includes/header.php"; ?>

            <div class="section over-hide padding-top-120 padding-top-mob-nav">
                <div class="top-header-parallax-section parallax-hero-1200">
                    <div class="section over-hide border-4">
                        <div id="cd-google-map">
                            <iframe
                                src="https://www.google.com/maps/d/embed?mid=14TPUpTMaZIlELdD-xTyJJbWCNptveVY&ehbc=2E312F"
                                width="100%" style="height: 420px;">

                            </iframe>
                        </div>
                    </div>
                    <div class="background-dark-over-hotel"></div>
                </div>
                <div class="section-1400 z-bigger">
                    <div class="container-fluid padding-top-bottom-80">
                        <div class="row">
                            <div class="col-12 col-lg">
                                <h2 style="color: #fff;" class="display-8 mb-3">
                                    Query
                                </h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section over-hide z-bigger section-background-24 bg-tri">
                <div class="section">
                    <div class="section-1400">
                        <div class="container-fluid">
                            <div class="feed-img">
                                <div class="container-form">
                                    <div class="content container-xxl">
                                        <div class="left-side">
                                            <div class="address details">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <div class="topic color-black">Address</div>
                                                <div class="text-one color-black">Block A, First Floor, Kisan Bazaar,
                                                    Talpuraa, Jhansi</div>
                                            </div>
                                            <div class="phone details">
                                                <i class="fas fa-phone-alt"></i>
                                                <div class="topic color-black">Phone</div>
                                                <div class="text-one color-black">+91 6388337013</div>
                                                <div class="text-two color-black">+91 7839027168</div>
                                            </div>
                                            <div class="email details">
                                                <i class="fas fa-envelope"></i>
                                                <div class="topic color-black">Email</div>
                                                <div class="text-one color-black">bida-office@eoffice.uplc.in</div>
                                            </div>
                                        </div>
                                        <div class="right-side">
                                            <div class="topic-text">Send us a message</div>
                                            <p style="color: #000;">If you have any work from me or any types of quries
                                                related to my tutorial, you can send me
                                                message from here. It's my pleasure to help you.</p>
                                            <form id="frm" autocomplete="off">
                                                <div class="frm-focus dev_req_msg input-box">
                                                    <input type="text" name="user_name" value="" maxlength="100" class="fldrequired alphabet" placeholder="Enter your name">
                                                    <div class="frm-er-msg"></div>
                                                </div>
                                                <div class="frm-focus dev_req_msg input-box" style="margin-bottom: 20px;margin-top:20px;">
                                                    <input type="text" name="user_email" value="" maxlength="50" class="fldrequired" placeholder="Enter your email">
                                                    <div class="frm-er-msg"></div>
                                                </div>
                                                <div style="display: flex;gap: 17px;">
                                                    <div class="frm-focus dev_req_msg">
                                                        <select name="sector_name" class="" style="background: #F0F1F8;height: 50px;
                                                                width: 100%;margin: 18px 0;border: none;border-radius: 8px;padding: 10px;">
                                                            <option hidden value="">Sector</option>
                                                            <?php foreach ($SectorInfo as $key => $val) { ?>
                                                                <option value="<?php echo $val['ID']; ?>"><?php echo $val['Sector']; ?></option><?php } ?>
                                                        </select>
                                                        <div class="frm-er-msg"></div>
                                                    </div>
                                                    
                                                    <div class="input-box">
                                                        <input type="text" class="integer" value="" maxlength="10" name="user_mobile" placeholder="Mobile Number">
                                                    </div>
                                                </div>
                                                <div class="input-box">
                                                    <input type="text" name="org_name" value="" maxlength="200" placeholder="Organization Name">
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="radio_option" checked class="msg_type" id="inlineRadio1" value="1">
                                                    <label class="form-check-label" for="inlineRadio1" style="color:#000">Any specific policy suggestions</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="radio_option" class="msg_type" id="inlineRadio2" value="2">
                                                    <label class="form-check-label" for="inlineRadio2" style="color:#000">Expectations from BIDA</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="radio_option" class="msg_type" id="inlineRadio3" value="3">
                                                    <label class="form-check-label" for="inlineRadio3" style="color:#000">General Message</label>
                                                </div>
                                                <div class="input-box message-box frm-focus dev_req_msg">
                                                    <textarea name="user_message" class="fldrequired" placeholder="Enter your message"></textarea>
                                                    <div class="frm-er-msg"></div>
                                                </div>
                                                <div class="button">
                                                    <div class="act_btn_ovrly"></div>
                                                    <button style="cursor:pointer;" class="send-btn" id="send_query">Submit</button>
                                                </div>
                                                <div class="frm_hidden_data"></div>
                                            </form>
                                            <div id="notify"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer
            ================================================== -->
            <?php include "includes/footer.php"; ?>
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
        <script src="scripts/jquery-ui.js"></script>
        <script src="scripts/buttons.js"></script>
        <script src="scripts/common.js"></script>
        <script src="scripts/query.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGqP1FC96FWZ7oHfJgwMmcL8a6H9sUtgc"></script>
        <script src="js/maps-parameters.js"></script>
    </body>
</html>