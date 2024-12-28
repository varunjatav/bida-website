<?php
include_once 'config.php';
include_once 'dbcon/db_connect.php';
include_once 'functions/common.function.php';
include_once 'core/countryDeskQuery.core.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script src="scripts/jquery.min.js"></script>
        <!-- <script>
            document.write('<style type="text/css">body{display:none}</style>');
            jQuery(function (a) {
                a("body").css("display", "block")
            });
        </script> -->
        <style>
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
            input.frm-focus,textarea.frm-focus{
                border-bottom: 2px solid #9E4784 !important;
            }
            textarea.frm-error,select.frm-error, input.frm-error, .str-txarea.frm-error{
                border-bottom: 2px solid #d20000 !important;
            }
            select.cnt-div,select.gen-frm-error, input.gen-frm-error, .str-txarea.gen-frm-error{
                border-bottom: 2px solid #d20000 !important;
            }
        </style>
    </head>

    <body>
        <div class="feed-img">
            <div class="container-form bg-tri-form">
                <div class="content container-xxl">
                    <div class="left-side">
                        <div class="address details">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="topic color-black">Address</div>
                            <div class="text-one color-black">Block A, First Floor, Kisan Bazaar, Talpuraa, Jhansi</div>
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
                        <p style="color: #000;">If you have any work from me or any types of quries related to my
                            tutorial, you can send me
                            message from here. It's my pleasure to help you.</p>
                        <form id="frm" autocomplete="off">
                            <div class="input-box frm-focus dev_req_msg">
                                <input type="text" class="fldrequired alphabet" maxlength="100" name="user_name" placeholder="Enter your name">
                                <div class="frm-er-msg"></div>
                            </div>
                            <div class="input-box frm-focus dev_req_msg" style="margin-bottom: 12px;margin-top:20px;">
                                <input type="text" class="fldrequired" maxlength="50" name="user_email" placeholder="Enter your email">
                                <div class="frm-er-msg"></div>
                            </div>
                            <div style="display: flex;gap: 17px;" class="">
                                <div class="frm-focus dev_req_msg cnt-div" style="width: 100%;">
                                    <select class="" name="country" style="background: #F0F1F8;height: 50px;
                                            margin: 12px 0;border: none;border-radius: 8px;padding: 10px;width: 100%;">
                                        <option hidden value="">Country</option>
                                        <?php foreach ($CountryInfo as $key => $val) { ?>
                                            <option value="<?php echo $val['ID']; ?>"><?php echo $val['Country']; ?></option><?php } ?>
                                    </select>
                                    <div class="frm-er-msg"></div>
                                </div>  
                                <div style="width: 100%;" class="frm-focus dev_req_msg">
                                    <select name="sector_name" style="background: #F0F1F8;height: 50px;
                                            width: 100%;margin: 12px 0;border: none;border-radius: 8px;padding: 10px;">
                                        <option hidden value="">Sector</option>
                                        <?php foreach ($SectorInfo as $key => $val) { ?>
                                            <option value="<?php echo $val['ID']; ?>"><?php echo $val['Sector']; ?></option><?php } ?>
                                    </select>
                                    <div class="frm-er-msg"></div>
                                </div>  
                                <div class="input-box">
                                    <input type="text" class="integer" maxlength="10" name="user_mobile" placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="input-box">
                                <input type="text" name="org_name" maxlength="200" placeholder="Organization Name">
                            </div>
                            <div class="dev_req_msg">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="radio_option" id="inlineRadio1" checked class="msg_type" value="1">
                                    <label class="form-check-label" for="inlineRadio1" style="color:#000">Any specific policy suggestions</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="radio_option" id="inlineRadio2" class="msg_type" value="2">
                                    <label class="form-check-label" for="inlineRadio2" style="color:#000">Expectations from BIDA</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="radio_option" id="inlineRadio3" class="msg_type" value="3">
                                    <label class="form-check-label" for="inlineRadio3" style="color:#000">General Message</label>
                                </div>
                                <div class="frm-er-msg"></div>
                            </div>

                            <div class="input-box message-box frm-focus dev_req_msg brd">
                                <textarea class="fldrequired" name="user_message" placeholder="Enter your message"></textarea>
                                <div class="frm-er-msg" style="margin-top: -7px;"></div>
                            </div>

                            <div class="button">
                                <div class="act_btn_ovrly"></div>
                                <button style="cursor:pointer;" id="send_country_desk_query" class="send-btn">Submit</button>
                            </div>
                            <div class="frm_hidden_data"></div>
                        </form>
                        <div id="notify"></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="scripts/jquery-ui.js"></script>
        <script src="scripts/buttons.js"></script>
        <script src="scripts/common.js"></script>
        <script src="scripts/query.js"></script>
    </body>
</html>