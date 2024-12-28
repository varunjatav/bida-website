<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <title>Contact</title>

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
        jQuery(function(a) {
            a("body").css("display", "block")
        });
    </script>
    <style>

        select.frm-error,
        input.frm-error,
        .str-txarea.frm-error {
            border-bottom: 2px solid #d20000 !important;
        }

        .frm-er-msg {
            font-size: 12px;
            color: #d20000;
            font-weight: 400;
        }

        input.frm-focus {
            border-bottom: 2px solid #9E4784 !important;
        }

        select.frm-error,
        input.frm-error,
        .str-txarea.frm-error {
            border-bottom: 2px solid #d20000 !important;
        }

        select.gen-frm-error,
        input.gen-frm-error,
        .str-txarea.gen-frm-error {
            border-bottom: 2px solid #d20000 !important;
        }
    </style>
</head>

<body>

    <div class="animsition">
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
                <div class="container-fluid padding-top-bottom-80">
                    <div class="row">
                        <div class="col-12 col-lg">
                            <h2 style="color: #fff;" class="display-8 mb-3">
                                Contact Us
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section over-hide padding-top-bottom-120 z-bigger bg-tri-form">
            <div class="section">
                <div class="section-1400">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 container-xxl">
                                <form id="frm" autocomplete="off">
                                    <div class="row px-1">
                                        <div class="clearfix w-100"></div>
                                        <div class="col-md-6 mt-3 px-2">
                                            <div class="form-group frm-focus dev_req_msg">
                                                <input type="text" name="contactname" class="form-style big form-style-with-icon section-shadow-blue fldrequired alphabet" placeholder="Full Name" id="contactname" maxlength="55" autocomplete="off">
                                                <i class="input-icon big uil uil-user"></i>
                                                <div class="frm-er-msg"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3 px-2">
                                            <div class="form-group frm-focus dev_req_msg">
                                                <input type="email" name="contactemail" class="form-style big form-style-with-icon section-shadow-blue fldrequired" placeholder="Your Email" id="contactemail" maxlength="100" autocomplete="off">
                                                <i class="input-icon big uil uil-at"></i>
                                                <div class="frm-er-msg"></div>
                                            </div>
                                        </div>
                                        <div class="dev_req_msg mt-4 ml-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio_option" id="inlineRadio1" checked class="msg_type" value="Invester">
                                                <label class="form-check-label" for="inlineRadio1" style="color:#000">Invester</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio_option" id="inlineRadio3" class="msg_type" value="Non- Invester">
                                                <label class="form-check-label" for="inlineRadio3" style="color:#000">Non- Invester</label>
                                            </div>
                                            <div class="frm-er-msg"></div>
                                        </div>
                                        <div class="clearfix w-100"></div>
                                        <div class="col-12 mt-3 px-2">
                                            <div class="form-group frm-focus dev_req_msg">
                                                <textarea name="contactmessage" class="form-style big form-style-with-icon form-textarea section-shadow-blue fldrequired" placeholder="Message" id="contactmessage" autocomplete="off" rows="5"></textarea>
                                                <i class="input-icon big uil uil-comment-alt-lines"></i>
                                                <div class="frm-er-msg"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center text-xl-left pt-4 px-2">
                                            <p id="contact-message-feedback"></p>
                                            <div class="act_btn_ovrly"></div>
                                            <button id="send_message" class="btn send-contact-message" style="background: #31a267;color:#fff;border-radius:8px;height:40px;padding:0 20px">Submit</button>
                                        </div>
                                    </div>
                                    <div class="frm_hidden_data"></div>
                                </form>
                                <div id="notify"></div>
                            </div>
                            <div class="col-md-8 col-lg-7 col-xl-6 mt-5 mt-xl-0">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <div class="section over-hide border-4 text-center bg-white px-3 px-lg-4 py-5 landing-shadow-4">
                                            <h5 class="mb-4">Contact Us</h5>
                                            <a href="#" class="link size-18 mb-1" data-hover="+91 7839027168">+91
                                                7839027168</a>
                                            <div class="clearfix w-100"></div>
                                            <a href="#" class="link size-18 mb-1" data-hover="+91 6388337013">+91
                                                6388337013</a>
                                            <div class="clearfix w-100"></div>
                                            <a href="#" class="link size-18 link-primary" data-hover="bida-office@eoffice.uplc.in">bida-office@eoffice.uplc.in</a>
                                            <div class="clearfix w-100"></div>
                                            <a href="#" class="link size-18 link-primary mb-4" data-hover="bidajhs1234@gmail.com">bidajhs1234@gmail.com</a>
                                            <div class="clearfix w-100"></div>
                                            <div class="bida-address">
                                                <p>ब्लॉक-ए, किसान बाजार, तालपुरा, झाँसी, उत्तर प्रदेश 284001    Block_A,  Kisan Bazar, Talpura, Jhansi, Uttar Pradesh 284001</p>
                                            </div>
                                            <!-- <a href="#" class="link link-gray-primary link-normal mx-2"><i class="uil uil-twitter size-22"></i></a>
                                            <a href="#" class="link link-gray-primary link-normal mx-2"><i class="uil uil-facebook-messenger size-22"></i></a>
                                            <a href="#" class="link link-gray-primary link-normal mx-2"><i class="uil uil-slack size-22"></i></a>
                                            <a href="#" class="link link-gray-primary link-normal mx-2"><i class="uil uil-linkedin size-22"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bida-map">
            <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14410.330968506978!2d78.566769!3d25.4522099!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397777005ca1e0cd%3A0x8a428d2cf1a418d3!2sBida%20office!5e0!3m2!1sen!2sin!4v1718342336909!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
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
    <script src="js/custom.js"></script>.
    <script src="scripts/jquery-ui.js"></script>
    <script src="scripts/buttons.js"></script>
    <script src="scripts/common.js"></script>
    <script src="scripts/query.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGqP1FC96FWZ7oHfJgwMmcL8a6H9sUtgc"></script>
    <script src="js/maps-parameters.js"></script>
</body>

</html>