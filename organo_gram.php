<?php include "config.php"; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>

        <meta charset="utf-8">
        <title>BIDA</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="theme-color" content="#212121" />
        <meta name="msapplication-navbutton-color" content="#212121" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />
        <link rel="icon" type="img/x-icon" href="img/favicon.png">
        <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/animsition.min.css" />
        <link rel="stylesheet" href="css/unicons.css" />
        <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/lighbox.min.css" />
        <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/tooltip.min.css" />
        <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/swiper.min.css" />
        <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/layers.css" />
        <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/navigation.css" />
        <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/settings.css" />
        <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/style.css" />
        <link rel="stylesheet" href="<?php echo $website_cdn_ath; ?>css/wheel.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'>
        <link rel="stylesheet" href="css/org.css">
        <style>
            .org-wrap a:hover{
                color:#000;
            }
            #popup {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                justify-content: center;
                align-items: center;
                z-index: 99991;
            }
            .view_detail, .viewb3, .view_village {
                cursor: pointer;
            }
            .close_popup {
                cursor: pointer;
            }

            .cssanimation {
                animation-duration: 1s;
                animation-fill-mode: both;
                display: inline-block;
            }

            .zoomInLeft {
                animation-name: zoomInLeft
            }

            @keyframes zoomInLeft {
                from {
                    transform: scale(2) translateX(40%);
                    opacity: 0;
                }
            }
            .open_popup {
                animation: .6s open_popup;
            }

            @keyframes open_popup {
                0% {
                    transform: scale(.1);
                }
                100% {
                    transform: none;
                }
            }
            .white {
			background-color: #fff !important;
			color: #000 !important;
		}

		.white a {
			color: #000 !important;
		}
        .lakpal-bg{
            color:#fff !important;
            background: #fc7500;}
            
        .vlgtags a:hover{
            background-color: #000;
            color: #fff !important;
        }
        </style>
    </head>

    <body>
        <div class="animsition">
            <?php include "includes/header.php"; ?>

            <div class="org-wrap" style="padding-top:100px;">

                <div class="org-lvl wfull">
                    <div class="orgboxh1 orgbox"><a href='' class="bg-org white-txt">CEO<br>(Shri Amrit Tripathi)</a></div>
                    <div style="position: absolute;
                         display: flex;
                         justify-content: space-between;
                         top: 190px;
                         width: 48.6%;">
                        <div class="line2"></div>
                        <div class="line2"></div>
                    </div>
                </div>


                <div class="org-lvl">
                    <div class="org-lvl whalf">

                        <div class="org-lvl wfull">
                            <div class="orgboxh2 orgbox"><a class="bg-org white-txt">ACEO-1<br>Shri. Praveen Verma</a></div>
                            <div style="position: absolute;
                                 display: flex;
                                 justify-content: space-between;
                                 top: 283px;
                                 width: 31.5%;">
                                <div class="line2"></div>
                                <div class="line2"></div>
                                <div class="line2"></div>
                            </div>
                        </div>

                        <div class="org-lvl wfull">
                            <div class="orgbox2">
                                <a id="b3_1" class="bg-org viewb3 white-txt">OSD (Ram Kumar Shukla) 9721111105</a>
                            </div>
                            <div class="orgboxh4 orgbox5 posrel">
                                <a id="b3_2" class="bg-org viewb3 white-txt">OSD (Gulab Singh) 7754910859
                                    <div class="posabsolut osdblw">
                                        <div class="osdwn bg-org">NGT</div>
                                        <div class="osdwn bg-org">Enc, Resettlement& Rehabilitation, Farmer Population Dept</div>
                                        <div class="osdwn bg-org">Institution development, Commercial Dept. Residential Property, Technical & Audit</div>
                                    </div>
                                </a>
                            </div>
                            <div class="orgbox2"><a id="b3_3" class="bg-org viewb3 white-txt">OSD (Saumy Mishra) 7991987328</a></div>
                        </div>
                    </div>

                    <div class="org-lvl whalf">

                        <div class="org-lvl wfull">
                            <div class="orgboxh3 orgbox"><a class="bg-org white-txt">ACEO-2<br>Shri. Praveen Verma</a></div>
                            <div style="position: absolute;
                                 display: flex;
                                 justify-content: space-between;
                                 top: 282px;
                                 width: 20.5%;">
                                <div class="line2"></div>
                                <div class="line2"></div>
                            </div>
                        </div>

                        <div class="org-lvl wfull">
                            <div class="orgbox2"><a id="b3_4" class="bg-org viewb3 white-txt">OSD (P.L. Maurya) 9410638478</a></div>
                            <div class="orgbox2 posrel"><a id="b3_5" class="bg-org viewb3 white-txt">OSD (Lal Krishna) 9450759809
                                    <div class="posabsolut osdblw" style="bottom: -47px;width: 190%;">
                                        <div class="osdwn bg-org">Board Meeting, JDA, Staff Qtr.</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="position: relative;">
                    <hr style="position: absolute;
                        width: 92.1%;
                        top: -7px;
                        left: 4%;
                        color:black;
                        background:#000;">
                    <div class="org-lvl3">
                        <div class="orgbox3 blockb3 block_1 block_5">
                            <div><a id="1" class="bg-grn-9 view_detail">GM Admin</a></div>
                            <div><a id="14" class="bg-grn-8 view_detail">DGM</a></div>
                            <div><a id="27" class="bg-grn-7 view_detail">AGM</a></div>
                            <div><a id="40" class="bg-grn-6 view_detail">Manager</a></div>
                            <div><a id="52" class="bg-grn-5 view_detail">Astt. Manager</a></div>
                            <div><a id="64" class="bg-grn-4 view_detail">Ministrial Cadre</a></div>
                            <div><a id="75" class="bg-grn-3 view_detail">Grp 4</a></div>
                        </div>

                        <div class="orgbox3 blockb3 block_3">
                            <div><a id="2" class="bg-grn-9 view_detail">GM Planning</a></div>
                            <div><a id="15" class="bg-grn-8 view_detail">DGM</a></div>
                            <div><a id="28" class="bg-grn-7 view_detail">Sr. Mgr</a></div>
                            <div><a id="41" class="bg-grn-6 view_detail">Manager</a></div>
                            <div><a id="53" class="bg-grn-5 view_detail">Astt. Manager</a></div>
                            <div><a id="65" class="bg-grn-4 view_detail">Sr Drftman</a></div>
                            <div><a id="76" class="bg-grn-3 view_detail">Draftman</a></div>
                            <div><a id="83" class="bg-grn-2 view_detail">Ministrial Cadre</a></div>
                            <div><a id="90" class="bg-grn-1 view_detail">Grp 4</a></div>
                        </div>

                        <div class="orgbox3 blockb3 block_3">
                            <div><a id="3" class="bg-grn-9 view_detail">CGM Civil</a></div>
                            <div><a id="16" class="bg-grn-8 view_detail">Chief Engg M&P</a></div>
                            <div><a id="29" class="bg-grn-7 view_detail">GM</a></div>
                            <div><a id="42" class="bg-grn-6 view_detail">DGM</a></div>
                            <div><a id="54" class="bg-grn-5 view_detail">Sr Mgr</a></div>
                            <div><a id="66" class="bg-grn-4 view_detail">Manager</a></div>
                            <div><a id="77" class="bg-grn-3 view_detail">Ast Manager</a></div>
                            <div><a id="84" class="bg-grn-2 view_detail">Ministrial Cadre</a></div>
                            <div><a id="91" class="bg-grn-1 view_detail">Grp 4</a></div>
                        </div>

                        <div class="orgbox3 blockb3 block_1">
                            <div><a id="4" class="bg-grn-9 view_detail">GM (E & M)</a></div>
                            <div><a id="17" class="bg-grn-8 view_detail">DGM</a></div>
                            <div><a id="30" class="bg-grn-7 view_detail">Sr Mgr.</a></div>
                            <div><a id="43" class="bg-grn-6 view_detail">Manager</a></div>
                            <div><a id="55" class="bg-grn-5 view_detail">Ast Mgr</a></div>
                            <div><a id="67" class="bg-grn-4 view_detail">Ministrial Cadre</a></div>
                            <div><a id="78" class="bg-grn-3 view_detail">Project Engg (Chemical)</a></div>
                            <div><a id="85" class="bg-grn-2 view_detail">Grp 4</a></div>
                        </div>

                        <div class="orgbox3 blockb3 block_2 block_4">
                            <div><a id="5" class="bg-grn-9 view_detail">Chief Finanacial Officer</a></div>
                            <div><a id="18" class="bg-grn-8 view_detail">Sr AO</a></div>
                            <div><a id="31" class="bg-grn-7 view_detail">AO</a></div>
                            <div><a id="44" class="bg-grn-6 view_detail">AAO</a></div>
                            <div><a id="56" class="bg-grn-5 view_detail">Acct</a></div>
                            <div><a id="68" class="bg-grn-4 view_detail">Ast Acct</a></div>
                            <div><a id="79" class="bg-grn-3 view_detail">Ministrial Cadre</a></div>
                            <div><a id="86" class="bg-grn-2 view_detail">Grp 4</a></div>
                        </div>

                        <div class="orgbox3 blockb3 block_1 block_2">
                            <div><a id="6" class="bg-grn-9 view_detail">Director (Land Acq) <br>Mr. Lal Krishna</a></div>
                            <div><a id="19" class="bg-grn-8 view_detail">Tehsildar</a></div>
                            <div><a id="32" class="bg-grn-7 view_detail">Naib Teh</a></div>
                            <div><a id="45" class="bg-grn-6 view_detail">Sup. Kanungo</a></div>
                            <div><a style="cursor: pointer;" id="view_lekhpal" class="lakpal-bg">Lekhpal (33)</a></div>
                            <div><a id="57" class="bg-grn-4 view_detail">Ministrial Cadre</a></div>
                            <div><a id="69" class="bg-grn-3 view_detail">Grp 4</a></div>
                        </div>

                        <div class="orgbox3 blockb3 block_3">
                            <div><a id="7" class="bg-grn-9 view_detail">AGM System</a></div>
                            <div><a id="20" class="bg-grn-8 view_detail">Manager</a></div>
                            <div><a id="33" class="bg-grn-7 view_detail">Sr. Prog</a></div>
                            <div><a id="46" class="bg-grn-6 view_detail">Programmer</a></div>
                            <div><a id="58" class="bg-grn-5 view_detail">Data Entry Op</a></div>
                            <div><a id="70" class="bg-grn-4 view_detail">Computer Op</a></div>
                            <div><a id="80" class="bg-grn-3 view_detail">Ministrial Cadre</a></div>
                            <div><a id="87" class="bg-grn-2 view_detail">Grp 4</a></div>
                        </div>

                        <div class="orgbox3 blockb3 block_3">
                            <div><a id="8" class="bg-grn-9 view_detail">Director Horticulture</a></div>
                            <div><a id="21" class="bg-grn-8 view_detail">DD Hort.</a></div>
                            <div><a id="34" class="bg-grn-7 view_detail">Ast. Dir</a></div>
                            <div><a id="47" class="bg-grn-6 view_detail">Inspector</a></div>
                            <div><a id="59" class="bg-grn-5 view_detail">Ministrial Cadre</a></div>
                            <div><a id="71" class="bg-grn-4 view_detail">Grp 4</a></div>
                        </div>

                        <div class="orgbox3 blockb3 block_4">
                            <div><a id="9" class="bg-grn-9 view_detail">Chief Legal & Compliance Officer</a></div>
                            <div><a id="22" class="bg-grn-8 view_detail">Legal Advisor</a></div>
                            <div><a id="35" class="bg-grn-7 view_detail">Ast Law Officer</a></div>
                            <div><a id="48" class="bg-grn-6 view_detail">Ministrial Cadre</a></div>
                            <div><a id="60" class="bg-grn-5 view_detail">Grp 4</a></div>
                        </div>

                        <div class="orgbox3 blockb3 block_4">
                            <div><a id="10" class="bg-grn-9 view_detail">GM Industrial Area</a></div>
                            <div><a id="23" class="bg-grn-8 view_detail">DGM</a></div>
                            <div><a id="36" class="bg-grn-7 view_detail">AGM</a></div>
                            <div><a id="49" class="bg-grn-6 view_detail">Manager</a></div>
                            <div><a id="61" class="bg-grn-5 view_detail">Ministrial Cadre</a></div>
                            <div><a id="72" class="bg-grn-4 view_detail">Grp 4</a></div>
                        </div>

                        <div class="orgbox3 blockb3 block_1 block_2">
                            <div><a id="11" class="bg-grn-9 view_detail">GM Public Health</a></div>
                            <div><a id="24" class="bg-grn-8 view_detail">Sr Proj. Mgr</a></div>
                            <div><a id="37" class="bg-grn-7 view_detail">Project Engg</a></div>
                            <div><a id="50" class="bg-grn-6 view_detail">AE</a></div>
                            <div><a id="62" class="bg-grn-5 view_detail">JE</a></div>
                            <div><a id="73" class="bg-grn-4 view_detail">Sanitary Insp</a></div>
                            <div><a id="81" class="bg-grn-3 view_detail">Ministrial Cadre</a></div>
                            <div><a id="88" class="bg-grn-2 view_detail">Grp 4</a></div>
                        </div>

                        <div class="orgbox3 blockb3 blockb3">
                            <div><a id="12" class="bg-grn-9 view_detail">Police Inspector</a></div>
                            <div><a id="25" class="bg-grn-8 view_detail">Head Constable</a></div>
                            <div><a id="38" class="bg-grn-7 view_detail">Constable</a></div>
                        </div>

                        <div class="orgbox3 blockb3 block_4">
                            <div><a id="13" class="bg-grn-9 view_detail">Store Purch Officer</a></div>
                            <div><a id="26" class="bg-grn-8 view_detail">Ast S&P</a></div>
                            <div><a id="39" class="bg-grn-7 view_detail">Assistant</a></div>
                            <div><a id="51" class="bg-grn-6 view_detail">Jun. Assistant</a></div>
                            <div><a id="63" class="bg-grn-5 view_detail">Sr. Store Keeper</a></div>
                            <div><a id="74" class="bg-grn-4 view_detail">Store Keeper</a></div>
                            <div><a id="82" class="bg-grn-3 view_detail">Ast Store Keeper</a></div>
                            <div><a id="89" class="bg-grn-2 view_detail">Ministrial Cadre</a></div>
                            <div><a id="91" class="bg-grn-1 view_detail">Grp 4</a></div>
                        </div>
                    </div>
                </div>
                <div class="bottom-btn">
                    <a>Retd. (33)</a>
                    <a>Outsourcing (53)</a>
                </div>

            </div>
            <?php include "includes/footer.php"; ?>
        </div>
        <div id="popup"></div>
        <div id="blocklist"></div>
    </body>
    <script src="<?php echo $website_cdn_ath; ?>js/jquery.min.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/popper.min.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/plugins.js"></script>
    <script src="<?php echo $website_cdn_ath; ?>js/custom.js"></script>
    <script>
        $("body").on("click", ".view_detail", function () {
            var curr = $(this);
            var id = curr.attr("id");
            var dataString = "id=" + id;
            $.ajax({
                url: "ajax/user_details.php",
                type: "POST",
                data: dataString,
                cache: false,
                success: function (data) {
                    $("#popup").html(data).css("display", "flex");
                }
            });
        });

        $("body").on("click", ".close_popup", function () {
            $("#popup").html('').css("display", "none");
        });

        $("body").on("click", ".viewb3", function () {
            var curr = $(this);
            var id = curr.attr("id").replace('b3_', '');
            $('.blockb3').hide();
            $('.block_' + id).find('div').hide();
            $('.block_' + id).fadeIn(function () {
                var delay = 200;
                $(this).find('div').each(function (index) {
                    if (index !== undefined) {
                        var curr = $(this);
                        setTimeout(function () {
                            curr.fadeIn("slow");
                        }, delay);
                        delay += 500;
                    }
                });
            });
        });

        $("body").on("click", "#view_lekhpal", function () {
            var dataString = "";
            $.ajax({
                url: "ajax/lekhpalPopup.php",
                type: "POST",
                data: dataString,
                cache: false,
                success: function (data) {
                    $("#popup").html(data).css("display", "flex");
                    var dataString = "id=1";
                    $.ajax({
                        url: "ajax/village_details.php",
                        type: "POST",
                        data: dataString,
                        cache: false,
                        success: function (data) {
                            $('.view_village:first').addClass('active');
                            $("#village_details").html(data);
                        }
                    });
                }
            });
        });

        $("body").on("click", ".view_village", function () {
            var curr = $(this);
            var id = curr.attr("id");
            var dataString = "id=" + id;
            $.ajax({
                url: "ajax/village_details.php",
                type: "POST",
                data: dataString,
                cache: false,
                success: function (data) {
                    $('.view_village').removeClass('active');
                    curr.addClass('active');
                    $("#village_details").html(data);
                }
            });
        });
    </script>
</html>