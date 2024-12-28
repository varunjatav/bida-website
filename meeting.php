<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <title>Schedule a Meeting</title>

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





        /* Meeting css */

        .left-div {
            border-right: 2px solid #000;
            padding-right: 20px;
            width: 70%;
        }

        .left-div span {
            display: block;
            color: #000;
        }

        .left-subdiv {
            margin-top: 20px;

        }

        .heading {
            color: #000;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .steps-div {
            width: 100%;
            margin-bottom: 20px;
        }

        hr {
            border: 2px solid #000;
        }

        .right-heading {
            color: #000;
        }

        .register-btn {
            background-color: #fff;
            border: 2px solid orangered;
        }

        .register-btn a:hover{
            background-color: orangered;
            color: #fff;
        }
        .create-btn {
            background-color: #fff;
            border: 2px solid orangered;
        }
        .create-btn a:hover{
            background-color: orangered;
            color: #fff;
        }

        .buttons a {
            display: block;
            padding: 5px 10px;
            color: #000;
        }

        .meeting-main-div {
            display: flex;
            width: 100%
        }

        @media (max-width: 500px) and (min-width: 315px) {
            .meeting-main-div {
                flex-direction: column;
                gap: 15px;
            }

            .left-div {
                width: 100%;
                border-right: none;
                border-bottom: 2px solid #000;
                padding-right: 0;
            }
            .steps-div{
                width: 100%;
                text-align: justify;
            }
            .buttons{
                margin-bottom: 25px;
            }
        }
        @media (max-width: 850px) and (min-width: 501px) {
            .steps-div{
                width: 100%;
                text-align: justify;
            }
            .padding-top-bottom-80{

            }
        }
    </style>
</head>

<body>

    <div class="animsition">
        <?php include "includes/header.php"; ?>

        <div class="section over-hide padding-top-mob-nav section-background-meeting">
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
                        <div class="col-12 col-lg" style="bottom:-65px">
                            <h2 style="color: #fff;" class="display-8 mb-3">
                                Schedule a Meeting
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section over-hide z-bigger bg-meeting" style="padding-top: 30px;">
            <div class="section">
                <div class="section-1400">
                    <div class="container-fluid" style="padding: 3%;">
                        <h4>Schedule a Meeting</h4>

                        <hr>
                        <div class="meeting-main-div">
                            <div class="left-div">
                                <span>Appointment Request Platform</span>
                                <span>For Investors, Govt. Agencies & Citizens.</span>
                                <span>Welcome to your ultimate tool for streamlined and efficient meeting management. Our Meeting Scheduling</span>
                                <span>Module is designed to save you me and ensure that all your meetings are organized seamlessly.</span>

                                <div class="left-subdiv">
                                    <div class="heading">Step-by-Step Guide on How to Use the Module to Schedule a Meeting</div>
                                    <div style="display: flex;width:100%;flex-wrap:wrap;gap:5%;">


                                        <div class="steps-div"><span><b>Step 1 :</b>Access the Module Log in to your account or create your accounts and navigate to the meeting scheduling section. Click on "Schedule a Meeting" to get started</span></div>
                                        <div class="steps-div"><span><b>Step 2 :</b>Access the Module Log in to your account or create your accounts and navigate to the meeting scheduling section. Click on "Schedule a Meeting" to get started</span></div>
                                        <div class="steps-div"><span><b>Step 3 :</b>Access the Module Log in to your account or create your accounts and navigate to the meeting scheduling section. Click on "Schedule a Meeting" to get started</span></div>
                                        <div class="steps-div"> <span><b>Step 4 :</b>Access the Module Log in to your account or create your accounts and navigate to the meeting scheduling section. Click on "Schedule a Meeting" to get started</span></div>
                                        <div class="steps-div"><span><b>Step 5 :</b>Access the Module Log in to your account or create your accounts and navigate to the meeting scheduling section. Click on "Schedule a Meeting" to get started</span></div>
                                        <div class="steps-div"><span><b>Brief Guide on How to Reschedule or Cancel a Meeting</b>Reschedule a Meeting</span></div>
                                        <div class="steps-div"><span><b>Cancel a Meeting</b>Go to the meeting details page. <br>Click on "Cancel Meeting". <br>Confirm the cancellation. <br>All attendees will receive a cancellation notice.</span></div>



                                    </div>
                                </div>

                                <div class="buttons" style="display: flex;justify-content:center;align-items:center;gap:3%">
                                    <div class="register-btn"><a href="https://bida.co.in/appointment/">Registered Users</a></div>
                                    <div class="create-btn"><a href="https://bida.co.in/appointment/signup">Create an Account</a></div>
                                </div>


                            </div>

                            <div class="meeting-div" style="padding-left: 2%;color:#000">
                                <div class="right-heading" style="margin-bottom: 15px;">MEET US</div>
                                <div style="margin-bottom: 15px;"><img src="img/locationico.png" alt="" style="margin-right: 10px;"><span>BIDA Corporate Office Kisan Bazar, Talpura,Jhansi, U.P. 284002</span></div>
                                <div style="margin-bottom: 15px;"><img src="img/telephoneicon.png" alt="" style="margin-right: 10px;"><span>Contact Us : <br>+91 7839027168 <br>+91 6388337013</span></div>
                                <div style="margin-bottom: 15px;"><img src="img/emailicon.png" alt="" style="margin-right: 10px;"><span>bida-office@eoffice.uplc.in <br><span style="margin-left:25px">bidajhs1234@gmail.com</span></span></div>
                                <div> <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14410.330968506978!2d78.566769!3d25.4522099!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397777005ca1e0cd%3A0x8a428d2cf1a418d3!2sBida%20office!5e0!3m2!1sen!2sin!4v1718342336909!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
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