<?php include "config.php"; ?>
<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Department</title>
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
    <link rel="stylesheet" href="css/depatrtment.css" />
    <script src="scripts/jquery.min.js"></script>
    <script>
        document.write('<style type="text/css">body{display:none}</style>');
        jQuery(function(a) {
            a("body").css("display", "block");
        });
    </script>
</head>

<body>
    <div class="animsition dev_wrap">
        <?php include "includes/header.php"; ?>
        <form id="frm" autocomplete="off">
            <div class="main- ">
                <div class="dpt- ">
                    <div class="imgc1">
                        <div class="image-div1">
                            <div class="image-icon"><img src="img/profile.png" alt=""></div>
                            <div class="image-content">
                                <span class="bold">CEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="lineusingborder"></div>
                    <div class="image-div1" style="margin:0 auto;">
                        <div class="image-icon"><img src="img/profile.png" alt=""></div>
                        <div class="image-content">
                            <span class="bold">ACEO</span>
                        </div>
                    </div>
                    <div class="lineusingborder"></div>
                    <div class="image-div1" style="margin:0 auto;">
                        <div class="image-icon"><img src="img/profile.png" alt=""></div>
                        <div class="image-content">
                            <span class="bold">Dy CEO</span>
                        </div>
                    </div>
                    <div class="lineusingborder"></div>
                    <hr class="hr1">
                    <div style="display:flex">
                        <div class="lineusingborder1"></div>
                        <div class="lineusingborder2"></div>
                        <!-- <div class="lineusingborder3"></div> -->
                    </div>
                    <div class="imgc2" style="margin-left:25.5%;">
                        <div class="image-div1">
                            <div class="image-icon"><img src="img/profile.png" alt=""></div>
                            <div class="image-content">
                                <span class="bold">OSD</span>
                            </div>
                        </div>
                        <div class="image-div1">
                            <div class="image-icon"><img src="img/profile.png" alt=""></div>
                            <div class="image-content">
                                <span class="bold">GM</span>
                            </div>
                        </div>
                    </div>
                    <div class="lineusingborder"></div>
                    <hr class="hr2">
                    <div style="display:flex">
                        <div class="lineusingborder4"></div>
                        <div class="lineusingborder5"></div>
                        <div class="lineusingborder6"></div>
                        <div class="lineusingborder7"></div>
                        <div class="lineusingborder8"></div>
                        <div class="lineusingborder9"></div>
                        <div class="lineusingborder10"></div>
                        <div class="lineusingborder11"></div>
                        <div class="lineusingborder12"></div>
                        <div class="lineusingborder13"></div>
                        <div class="lineusingborder14"></div>
                    </div>
                    <div class="departs">
                        <div class="sq-div-dep sec2" datatarget="conts_1" id="civil" departmentID="1">
                            <div class="dpt-icon"><img loading="lazy" src="img/Civilorange.png" alt="" style="width:30px"></div>
                            <span>Civil</span>
                        </div>

                        <div class="sq-div-dep sec2" datatarget="conts_2" id="plan" departmentID="2">
                            <div class="dpt-icon"><img loading="lazy" src="img/planning.svg" alt=""></div>
                            <span>Planning</span>
                        </div>

                        <div class="sq-div-dep sec2" datatarget="conts_3" id="admin" departmentID="3">
                            <div class="dpt-icon"><img loading="lazy" src="img/admin.svg" alt=""></div>
                            <span>Administration</span>
                        </div>

                        <div class="sq-div-dep sec2" datatarget="conts_4" id="fin" departmentID="4">
                            <div class="dpt-icon"><img loading="lazy" src="img/finance.svg" alt=""></div>
                            <span>Finance</span>
                        </div>

                        <div class="sq-div-dep sec2" datatarget="conts_5" id="land" departmentID="5">
                            <div class="dpt-icon"><img loading="lazy" src="img/land.svg" alt=""></div>
                            <span>Land <br>Records</span>
                        </div>

                        <div class="sq-div-dep  sec2" datatarget="conts_6" id="it" departmentID="6">
                            <div class="dpt-icon"><img loading="lazy" src="img/system.svg" alt=""></div>
                            <span>IT</span>
                        </div>

                        <div class="sq-div-dep sec2" datatarget="conts_7" id="ph" departmentID="7">
                            <div class="dpt-icon"><img loading="lazy" src="img/horticulture.svg" alt=""></div>
                            <span> Public Health </span>
                        </div>

                        <div class="sq-div-dep sec2" datatarget="conts_8" id="legal" departmentID="8">
                            <div class="dpt-icon"><img loading="lazy" src="img/law.svg" alt=""></div>
                            <span>Legal</span>
                        </div>

                        <div class="sq-div-dep sec2" datatarget="conts_9" id="ind" departmentID="9">
                            <div class="dpt-icon"><img loading="lazy" src="img/industry.svg" alt=""></div>
                            <span>Industry Department</span>
                        </div>

                        <div class="sq-div-dep sec2" datatarget="conts_10" id="mec" departmentID="10">
                            <div class="dpt-icon"><img loading="lazy" src="img/Mechanical Eng. Orange.png" alt=""></div>
                            <span>Mechanical</span>
                        </div>

                        <div class="sq-div-dep sec2" datatarget="conts_11" id="ele" departmentID="11">
                            <div class="dpt-icon"><img loading="lazy" src="img/Elec Eng Orange.png" alt=""></div>
                            <span>Electrical Engineering</span>
                        </div>
                    </div>

                    <div class="m_class" id="conts_1" style="display:none;">
                        <div>
                            <div class="lineusingborder17"></div>
                        </div>
                        <hr class="hr3">
                        <div style="display: flex">
                            <div class="lineusingborder18"></div>
                            <div class="lineusingborder19"></div>
                            <div class="lineusingborder20"></div>
                            <div class="lineusingborder21"></div>
                            <div class="lineusingborder22"></div>
                            <div class="lineusingborder23"></div>
                        </div>
                        <div class="sub-dpt-div  2">
                            <div class="sq-div sec1 object object1" data-target="cont_1" sub_departmentID="1">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/civilwhite.svg" alt=""></div>
                                <span>Civil Works</span>
                            </div>

                            <div class="sq-div sec1 object object2" data-target="cont_2" sub_departmentID="2">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Institutial Development.png" alt=""></div>
                                <span>Builder Department</span>
                            </div>

                            <div class="sq-div sec1 object object3" data-target="cont_3" sub_departmentID="3">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Institutial Development.png" alt=""></div>
                                <span>Building Sale</span>
                            </div>

                            <div class="sq-div sec1 object object4" data-target="cont_4" sub_departmentID="4">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Institutial Development.png" alt=""></div>
                                <span>Housing Plot</span>
                            </div>

                            <div class="sq-div sec1 object object5" data-target="cont_5" sub_departmentID="5">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Institutial Development.png" alt=""></div>
                                <span>Built Up Housing</span>
                            </div>

                            <div class="sq-div sec1 object object6" data-target="cont_6" sub_departmentID="6">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Waste Managment.png" alt=""></div>
                                <span>Water and Waste Management </span>
                            </div>
                        </div>
                    </div>

                    <div class="m_class" id="conts_2" style="display:none;">
                        <div>
                            <div class="lineusingborder30"></div>
                        </div>
                        <hr class="hr4">
                        <div style="display:flex">
                            <div class="lineusingborder24"></div>
                            <div class="lineusingborder25"></div>
                            <div class="lineusingborder26"></div>
                            <div class="lineusingborder27"></div>
                            <div class="lineusingborder28"></div>
                            <div class="lineusingborder29"></div>
                        </div>
                        <div class="sub-dpt-div  2">
                            <div class="sq-div sec1 object object1" data-target="cont_7" sub_departmentID="7">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Sports.png" alt=""></div>
                                <span>Sports Department</span>
                            </div>

                            <div class="sq-div sec1 object object2" data-target="cont_8" sub_departmentID="8">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Road transporation.png" alt=""></div>
                                <span>Road Transport Department</span>
                            </div>

                            <div class="sq-div sec1 object object3" data-target="cont_9" sub_departmentID="9">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Institutial Development.png" alt=""></div>
                                <span>Group Housing and Corporate Society</span>
                            </div>

                            <div class="sq-div sec1 object object4" data-target="cont_10" sub_departmentID="10">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Rural Development.png" alt=""></div>
                                <span>Rural Development</span>
                            </div>

                            <div class="sq-div sec1 object object5" data-target="cont_11" sub_departmentID="11">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Parking.png" alt=""></div>
                                <span>Parking Solutions</span>
                            </div>
                        </div>
                    </div>

                    <div class="m_class" id="conts_3" style="display:none;">
                        <div>
                            <div class="lineusingborder41"></div>
                        </div>
                        <hr class="hr5">
                        <div style="display:flex">
                            <div class="lineusingborder31"></div>
                            <div class="lineusingborder32"></div>
                            <div class="lineusingborder33"></div>
                            <div class="lineusingborder34"></div>
                            <div class="lineusingborder35"></div>
                            <div class="lineusingborder36"></div>
                            <div class="lineusingborder37"></div>
                            <div class="lineusingborder38"></div>
                            <div class="lineusingborder39"></div>
                        </div>
                        <div class="sub-dpt-div  2">
                            <div class="sq-div sec1 object object1" data-target="cont_12" sub_departmentID="12">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Society Cultural.png" alt=""></div>
                                <span>Cultural</span>
                            </div>

                            <div class="sq-div sec1 object object2" data-target="cont_13" sub_departmentID="13">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/legislative committee.png" alt=""></div>
                                <span>Matters and Legislative Committee </span>
                            </div>

                            <div class="sq-div sec1 object object3" data-target="cont_14" sub_departmentID="14">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Boardmeeting.png" alt=""></div>
                                <span>Board meeting related work</span>
                            </div>

                            <div class="sq-div sec1 object object4" data-target="cont_15" sub_departmentID="15">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Muncipal Corporation.png" alt=""></div>
                                <span>Municipal Corporation </span>
                            </div>

                            <div class="sq-div sec1 object object5" data-target="cont_16" sub_departmentID="16">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/legislative committee.png" alt=""></div>
                                <span>Chief Minister's message and Announcement</span>
                            </div>

                            <div class="sq-div sec1 object object6" data-target="cont_17" sub_departmentID="17">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Institutial Development.png" alt=""></div>
                                <span>Staff Quarters</span>
                            </div>

                            <div class="sq-div sec1 object object7" data-target="cont_18" sub_departmentID="18">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Security White.png" alt=""></div>
                                <span>Security</span>
                            </div>

                            <div class="sq-div sec1 object object8" data-target="cont_19" sub_departmentID="19">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/RTI.png" alt=""></div>
                                <span>RTI</span>
                            </div>

                            <div class="sq-div sec1  object object9" data-target="cont_20" sub_departmentID="20">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Industrial Development.png" alt=""></div>
                                <span>Records Maintenance </span>
                            </div>
                        </div>
                    </div>

                    <div class="m_class" id="conts_4" style="display:none;">
                        <div>
                            <div class="lineusingborder42"></div>
                        </div>
                        <hr class="hr6">
                        <div style="display:flex">
                            <div class="lineusingborder43"></div>
                            <div class="lineusingborder44"></div>
                            <div class="lineusingborder45"></div>
                            <div class="lineusingborder46"></div>
                        </div>
                        <div class="sub-dpt-div  2">
                            <div class="sq-div sec1 object object1" data-target="cont_21" sub_departmentID="21">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Institutial Development.png" alt=""></div>
                                <span>Institutional Department</span>
                            </div>

                            <div class="sq-div sec1 object object2" data-target="cont_22" sub_departmentID="22">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Commercial Department.png" alt=""></div>
                                <span>Commercial Department </span>
                            </div>

                            <div class="sq-div sec1 object object3" data-target="cont_23" sub_departmentID="23">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Inmovable Property.png" alt=""></div>
                                <span>Immovable Property Department</span>
                            </div>

                            <div class="sq-div sec1 object object4" data-target="cont_24" sub_departmentID="24">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Technology.png" alt=""></div>
                                <span>Technology and Audit </span>
                            </div>
                        </div>
                    </div>

                    <div class="m_class" id="conts_5" style="display:none;">
                        <div>
                            <div class="lineusingborder47"></div>
                        </div>
                        <hr class="hr60">
                        <div style="display:flex">
                            <div class="lineusingborder43"></div>
                            <div class="lineusingborder44"></div>
                            <div class="lineusingborder45"></div>
                            <div class="lineusingborder46"></div>
                        </div>
                        <div class="sub-dpt-div  2">
                            <div class="sq-div sec1 object object1" data-target="cont_25" sub_departmentID="25">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Inmovable Property.png" alt=""></div>
                                <span>Farmer Population Department</span>
                            </div>

                            <div class="sq-div sec1 object object2" data-target="cont_26" sub_departmentID="26">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Security White.png" alt=""></div>
                                <span>Prevention of Encroachment </span>
                            </div>

                            <div class="sq-div sec1 object object3" data-target="cont_27" sub_departmentID="27">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/legislative committee.png" alt=""></div>
                                <span>Settlement and Rehabilitation</span>
                            </div>

                            <div class="sq-div sec1 object object4" data-target="cont_28" sub_departmentID="28">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Disater Managment.png" alt=""></div>
                                <span>Disaster management </span>
                            </div>
                        </div>
                    </div>

                    <div class="m_class" id="conts_6" style="display:none;">
                        <div>
                            <div class="lineusingborder48"></div>
                        </div>
                        <hr class="hr7">
                        <div style="display:flex">
                            <div class="lineusingborder49"></div>
                            <div class="lineusingborder50"></div>
                        </div>
                        <div class="sub-dpt-div  2">
                            <div class="sq-div sec1 object object1" data-target="cont_29" sub_departmentID="29">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/IT Department.png" alt=""></div>
                                <span>IT Department </span>
                            </div>

                            <div class="sq-div sec1 object object2" data-target="cont_30" sub_departmentID="30">
                                <div class="sub-dpt-icon"><im loading="lazy"g src="img/Web Development.png" alt=""></div>
                                <span>Web Design </span>
                            </div>
                        </div>
                    </div>

                    <div class="m_class" id="conts_7" style="display:none;">
                        <div>
                            <div class="lineusingborder51"></div>
                        </div>
                        <hr class="hr8">
                        <div style="display:flex">
                            <div class="lineusingborder52"></div>
                            <div class="lineusingborder53"></div>
                            <div class="lineusingborder54"></div>
                            <div class="lineusingborder55"></div>
                        </div>
                        <div class="sub-dpt-div  2">
                            <div class="sq-div sec1 object object1" data-target="cont_31" sub_departmentID="31">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Health Care.png" alt=""></div>
                                <span>Public Health Department </span>
                            </div>

                            <div class="sq-div sec1 object object2" data-target="cont_32" sub_departmentID="32">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Health Care.png" alt=""></div>
                                <span>Health and Body Services </span>
                            </div>

                            <div class="sq-div sec1 object object3" data-target="cont_33" sub_departmentID="33">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Waste Managment.png" alt=""></div>
                                <span>Waste Management </span>
                            </div>

                            <div class="sq-div sec1 object object4" data-target="cont_34" sub_departmentID="34">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/NGT.png" alt=""></div>
                                <span>NGT Department </span>
                            </div>
                        </div>
                    </div>

                    <div class="m_class" id="conts_8" style="display:none;">
                        <div style="margin-left:20.8%">
                            <div class="lineusingborder51"></div>
                        </div>
                        <hr class="hr80">
                        <div style="display:flex">
                            <div class="lineusingborder520"></div>
                            <div class="lineusingborder53"></div>
                            <div class="lineusingborder54"></div>
                            <div class="lineusingborder55"></div>
                            <div class="lineusingborder400"></div>
                            <div class="lineusingborder401"></div>
                            <div class="lineusingborder402"></div>
                        </div>
                        <div class="sub-dpt-div">
                            <div class="sq-div sec1 object object1" data-target="cont_35" sub_departmentID="35">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Legal Department.png" alt=""></div>
                                <span>Legal Advisory </span>
                            </div>

                            <div class="sq-div sec1 object object2" data-target="cont_36" sub_departmentID="36">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/legislative committee.png" alt=""></div>
                                <span>Compliance Oversight</span>
                            </div>

                            <div class="sq-div sec1 object object3" data-target="cont_37" sub_departmentID="37">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Legal Department.png" alt=""></div>
                                <span>Contract Management </span>
                            </div>

                            <div class="sq-div sec1 object object4" data-target="cont_38" sub_departmentID="38">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/legislative committee.png" alt=""></div>
                                <span>Dispute Resolution </span>
                            </div>

                            <div class="sq-div sec1 object object5" data-target="cont_39" sub_departmentID="39">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/legislative committee.png" alt=""></div>
                                <span>Policy Development</span>
                            </div>

                            <div class="sq-div sec1 object object6" data-target="cont_40" sub_departmentID="40">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Legal Department.png" alt=""></div>
                                <span>Stakeholder Engagement</span>
                            </div>

                            <div class="sq-div sec1 object object7" data-target="cont_41" sub_departmentID="41">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/legislative committee.png" alt=""></div>
                                <span>Legal Documentation </span>
                            </div>
                        </div>
                    </div>

                    <div class="m_class" id="conts_9" style="display:none;">
                        <div>
                            <div class="lineusingborder56"></div>
                        </div>
                        <hr class="hr9">
                        <div style="display:flex">
                            <div class="lineusingborder52"></div>
                            <div class="lineusingborder53"></div>
                            <div class="lineusingborder54"></div>
                            <div class="lineusingborder55"></div>
                        </div>
                        <div class="sub-dpt-div">
                            <div class="sq-div sec1 object object1" data-target="cont_42" sub_departmentID="42">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Outdoor.png" alt=""></div>
                                <span>Marketing </span>
                            </div>
                            <div class="sq-div sec1 object object2" data-target="cont_43" sub_departmentID="43">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/iconc.png" alt=""></div>
                                <span>Media / Social media </span>
                            </div>

                            <div class="sq-div sec1 object object3" data-target="cont_44" sub_departmentID="44">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Outdoor.png" alt=""></div>
                                <span>Advertising /Outdoor </span>
                            </div>

                            <div class="sq-div sec1 object object4" data-target="cont_45" sub_departmentID="45">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Tax.png" alt=""></div>
                                <span>Infrastructure and Commerce Tax </span>
                            </div>
                        </div>
                    </div>

                    <div class="m_class" id="conts_10" style="display:none;">
                        <div>
                            <div class="lineusingborder57"></div>
                        </div>
                        <hr class="hr10">
                        <div style="display:flex">
                            <div class="lineusingborder58"></div>
                            <div class="lineusingborder53"></div>
                        </div>
                        <div class="sub-dpt-div">
                            <div class="sq-div sec1 object object1" data-target="cont_46" sub_departmentID="46">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Institutial Development.png" alt=""></div>
                                <span>Assets Department </span>
                            </div>

                            <div class="sq-div sec1 object object2" data-target="cont_47" sub_departmentID="47">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Mobile Tower.png" alt=""></div>
                                <span>Mobile Tower and GBM Department </span>
                            </div>
                        </div>
                    </div>

                    <div class="m_class" id="conts_11" style="display:none;">
                        <div>
                            <div class="lineusingborder570"></div>
                        </div>
                        <hr class="hr_1">
                        <div style="display:flex">
                            <div class="lineusingborder1_e"></div>
                            <div class="lineusingborder2_e"></div>
                            <div class="lineusingborder3_e"></div>
                            <div class="lineusingborder4_e"></div>
                            <div class="lineusingborder5_e"></div>
                        </div>
                        <div class="sub-dpt-div">
                            <div class="sq-div sec1 object object1" data-target="cont_48" sub_departmentID="48">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/legislative committee.png" alt=""></div>
                                <span>Ensure Uninterrupted Power Supply </span>
                            </div>

                            <div class="sq-div sec1 object object2" data-target="cont_49" sub_departmentID="49">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Mobile Tower.png" alt=""></div>
                                <span>Development of a Self-Reliant Smart City </span>
                            </div>

                            <div class="sq-div sec1 object object3" data-target="cont_50" sub_departmentID="50">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Institutial Development.png" alt=""></div>
                                <span>Infrastructure Maintenance and Upgrade </span>
                            </div>

                            <div class="sq-div sec1 object object4" data-target="cont_51" sub_departmentID="51">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Mobile Tower.png" alt=""></div>
                                <span>Emergency Response and Resolution </span>
                            </div>

                            <div class="sq-div sec1 object object5" data-target="cont_52" sub_departmentID="52">
                                <div class="sub-dpt-icon"><img loading="lazy" src="img/Mobile Tower.png" alt=""></div>
                                <span>Sustainable Energy Promotion </span>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_1" style="display: none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Civil Works:</h5>
                                <div style="font-size:14px">The Civil Work Department within the Bundelkhand Investment Development Authority (BIDA) is a pivotal division focused on the development and management of various infrastructure projects crucial for facilitating investment in the country. The department plays a diverse role, encapsulating responsibilities that range from construction to ensuring sustainable urban development practices.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message active-main" id="cont_2" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Builder Department:</h5>
                                <div style="font-size:14px">Tasked with coordinating with builders and contractors, this segment ensures that all construction activities meet the required standards and regulations, fostering a reliable development environment.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_3" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Building Sale:</h5>
                                <div style="font-size:14px"> A significant function involves the sale of buildings which are developed as part of investment projects, ensuring that investors have access to the necessary facilities and infrastructure.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_4" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Housing Plot: </h5>
                                <div style="font-size:14px">The department also manages the allocation and sale of housing plots, contributing to the development of residential areas to support the workforce involved in various investment projects.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_5" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Built-Up Housing: </h5>
                                <div style="font-size:14px"> Beyond plot allocation, there is a focus on developing built-up housing solutions to meet the demand for residential spaces, particularly for those involved in investment-related activities.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_6" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Water and Waste Management: </h5>
                                <div style="font-size:14px">A critical aspect of their operation includes water and waste management, ensuring sustainable practices are integrated into new and existing projects to promote environmental stewardship.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_7" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Sports Department: </h5>
                                <div style="font-size:14px"> Collaborates on establishing sports facilities and infrastructure, ensuring the development of stadiums and training centers.</div>
                            </div>
                        </div>
                    </div>

                    <div class="  main_class content-message" id="cont_8" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Road Transport Department:</h5>
                                <div style="font-size:14px"> Teams up to design and execute comprehensive road networks and transportation initiatives that facilitate efficient citizen mobility.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_9" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Group Housing and Corporate Society:</h5>
                                <div style="font-size:14px">Works in conjunction to strategize the development of residential and commercial zones, adhering to urban planning and zoning guidelines.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_10" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Rural Development: </h5>
                                <div style="font-size:14px">Joins forces to enhance rural infrastructure and community projects, with a focus on elevating living standards in rural districts.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_11" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Parking Solutions: </h5>
                                <div style="font-size:14px"> Cooperates in devising strategies for effective and sustainable parking systems, aiming to alleviate congestion and encourage public transportation use.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_12" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Cultural:</h5>
                                <h6>Key Functions and Responsibilities:</h6>
                                <div style="font-size:14px">
                                    <ul>
                                        <li>Preserving Cultural Heritage</li>
                                        <li>Promoting Local Arts and Crafts</li>
                                        <li>Organizing Cultural Events</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_13" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Matters and Legislative Committee:</h5>
                                <h6>Key Functions and Responsibilities:</h6>
                                <div style="font-size:14px">
                                    <ul>
                                        <li>Enforcing Compliance with Industrial and Environmental Laws</li>
                                        <li>Regulatory Oversight</li>
                                        <li>Legal Enforcement</li>
                                        <li>Environmental Impact Assessments</li>
                                        <li>Permitting and Licensing</li>
                                        <li>Public Consultation and Awareness</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_14" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Board Meetings Related Work:</h5>
                                <h6>Key Functions and Responsibilities:</h6>
                                <div style="font-size:14px">
                                    <ul>
                                        <li>Conducting Board Meetings</li>
                                        <li>Review of Project Progress</li>
                                        <li>Policy Decisions</li>
                                        <li>Resource Allocation</li>
                                        <li>Compliance and Regulatory Oversight</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_15" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5> Municipal Corporation :</h5>
                                <h6>Key Functions and Responsibilities:</h6>
                                <div style="font-size:14px">
                                    <ul>
                                        <li>Civic Infrastructure Management</li>
                                        <li>Services Provisioning</li>
                                        <li>Industrial Development Facilitation</li>
                                        <li>Urban Planning and Development</li>
                                        <li>Public Engagement and Governance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_16" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>CM's Message and Announcement:</h5>
                                <h6>Key Functions and Responsibilities:</h6>
                                <div style="font-size:14px">
                                    <ul>
                                        <li>Conveying Chief Minister's Messages and Announcements</li>
                                        <li>Coordinating with Media and Communication Channels</li>
                                        <li>Managing and Updating Official Platforms</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_17" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Staff Quarters :</h5>
                                <h6>Key Functions and Responsibilities:</h6>
                                <div style="font-size:14px">
                                    <ul>
                                        <li>Allocation of Staff Quarters</li>
                                        <li>Maintenance and Repair</li>
                                        <li>Periodic Inspections</li>
                                        <li>Policy Development and Implementation</li>
                                        <li>Engagement with External Vendors</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_18" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5> Security Department :</h5>
                                <h6>Key Functions and Responsibilities:</h6>
                                <div style="font-size:14px">
                                    <ul>
                                        <li>Security Systems and Protocols Implementation</li>
                                        <li>Regular Security Risk Assessments</li>
                                        <li>Information Security Management</li>
                                        <li>Security Awareness Training</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_19" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>RTI Department :</h5>
                                <h6>Key Functions and Responsibilities:</h6>
                                <div style="font-size:14px">
                                    <ul>
                                        <li>Facilitating the implementation of the Right to Information (RTI) Act in the region.</li>
                                        <li>Receiving, processing, and responding to RTI requests from citizens, ensuring transparency and accountability in governance.</li>
                                        <li>Conducting awareness programs and training sessions to educate the public and government officials on the use and benefits of RTI.</li>
                                        <li>Monitoring and evaluating the compliance of various government departments and public authorities with the RTI Act.</li>
                                        <li>Advising and assisting public authorities in the proper maintenance of their records to facilitate RTI requests.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_20" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Records Maintenance :</h5>
                                <h6>Key Functions and Responsibilities:</h6>
                                <div style="font-size:14px">
                                    <ul>
                                        <li>Records Maintenance.</li>
                                        <li>Data Integrity and Security.</li>
                                        <li>Status Reporting.</li>
                                        <li>Historical Analysis and Insight Generation.</li>
                                        <li>Compliance and Auditing.</li>
                                        <li>Stakeholder Communication</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_21" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Institutional Department:</h5>
                                <div style="font-size:14px"> This division shoulders the responsibility of managing BIDA's financial essentials, focusing on budgeting, financial planning, and maintaining the accounts related to the institutional expenses. Their efforts ensure that BIDA has a solid financial foundation and strategy to support its operations and growth.</div>

                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_22" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Commercial Department: </h5>
                                <div style="font-size:14px">Specializing in the financial mechanisms behind BIDA's commercial initiatives, this department plays a pivotal role in analyzing investments, overseeing profit and loss management, and producing financial reports for commercial projects. Their work ensures that BIDA’s ventures are financially viable and sustainable.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_23" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Immovable Property Department:</h5>
                                <div style="font-size:14px">Focused on the fiscal elements of BIDA’s immovable assets, this department is tasked with activities such as property valuation, rent collection, and allocating budgets for maintenance and improvements. Their efficient management of these assets contributes to BIDA's financial health and asset longevity.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_24" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Technology and Audit: </h5>
                                <div style="font-size:14px"> Standing at the intersection of finance and technology, this division ensures that financial operations are bolstered by cutting-edge technology for greater accuracy, efficiency, and compliance. They are also responsible for conducting thorough internal audits to guarantee that all financial processes adhere to the relevant regulatory standards and organizational policies.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_25" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Farmer Population Department:</h5>
                                <div style="font-size:14px"> This subdivision plays a critical role in cataloguing and assisting the farmer population. It ensures that agricultural land use is optimised and supports the livelihoods of the local farming communities.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_26" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Prevention of Encroachment:</h5>
                                <div style="font-size:14px">Dedicated to safeguarding land from unauthorized use and encroachment, this subdivision works tirelessly to protect BIDA’s land assets. This is crucial for maintaining the integrity of investment zones and ensuring that they remain conducive to business and investment activities.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_27" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Settlement and Rehabilitation:</h5>
                                <div style="font-size:14px">Focusing on the humane and fair settlement of individuals affected by land acquisition processes, this subdivision ensures that resettlement and rehabilitation are conducted ethically. It emphasizes the well-being and compensation of affected communities, thereby fostering goodwill and social responsibility.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_28" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Disaster Management:</h5>
                                <div style="font-size:14px">Recognizing the importance of resilience in the face of natural disasters, this subdivision develops and implements strategies for disaster management pertaining to land resources. It is instrumental in minimizing potential impacts on land integrity and availability, ensuring continuity in BIDA’s operations and the safety of the communities involved.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_29" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>IT Department:</h5>
                                <div style="font-size:14px">Overseeing IT projects from conception to implementation, ensuring they are completed on time, within budget, and meet organisational needs.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_30" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Web Design: </h5>
                                <div style="font-size:14px"> Designing and developing user-friendly websites that effectively communicate the Authority's objectives, services, and opportunities. This involves ensuring websites are accessible, responsive, and updated with the latest information and technologies.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_31" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5> Public Health Department</h5>
                                <div style="font-size:14px">The Public Health Department within the Bundelkhand Industrial Development Authority plays a crucial role in safeguarding and promoting the health and wellbeing of the community it serves. This department is broadly categorised into three key subdivisions, each focusing on specific aspects of public health management.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_32" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Health and Body Services:</h5>
                                <div style="font-size:14px">This subdivision is dedicated to providing a range of health services aimed at enhancing the physical well being of the populace. It encompasses health education, preventive care, and the provision of medical services to address various health concerns and promote a healthier lifestyle among the community members.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_33" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Waste Management: </h5>
                                <div style="font-size:14px">The Waste Management subdivision plays a vital role in ensuring environmental health through efficient waste disposal and recycling processes. It focuses on the collection, treatment, and proper disposal of waste materials, thereby minimizing pollution and mitigating health risks associated with improper waste management.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_34" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>NGT Department: </h5>
                                <div style="font-size:14px">The NGT (National Green Tribunal) Department is responsible for enforcing compliance with environmental standards and regulations. It works to protect the environment and public health from industrial and other forms of pollution. This involves monitoring industrial activities, conducting environmental impact assessments, and implementing measures to prevent environmental degradation.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_35" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Legal Advisory:</h5>
                                <div style="font-size:14px"> Provide expert legal advice to the department on a wide range of matters related to industrial development, including land acquisition, project financing, environmental regulations, and labor laws.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_36" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Compliance Oversight:</h5>
                                <div style="font-size:14px"> Ensure that all department activities are in compliance with applicable laws, regulations, and policies. Keep abreast of any changes in legislation that may affect the department's operations and advise on necessary adjustments to practices.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_37" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Contract Management:</h5>
                                <div style="font-size:14px"> Draft, review, and negotiate contracts and agreements with developers, contractors, and other third parties to ensure they are legally sound and align with department objectives.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_38" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Dispute Resolution:</h5>
                                <div style="font-size:14px">Represent the department in legal disputes, meditations, and negotiations. Work closely with external legal counsel on litigation matters, providing all necessary information and assistance to defend the department's interests.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_39" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Policy Development:</h5>
                                <div style="font-size:14px"> Assist in the development and implementation of policies and procedures that mitigate legal risks, improve compliance, and support operational efficiency.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_40" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Stakeholder Engagement :</h5>
                                <div style="font-size:14px"> Liaise with government agencies, industry partners, and community groups on legal issues pertaining to industrial development projects. Ensure transparent and effective communication to build trust and compliance.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_41" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Legal Documentation:</h5>
                                <div style="font-size:14px">Maintain comprehensive records of all legal documents, contracts, and correspondence. Ensure secure storage and easy accessibility of these documents for reference and audit purposes.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_42" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Marketing:</h5>
                                <div style="font-size:14px">The Marketing sub-department is at the heart of BIDA’s strategic efforts to promote Bundelkhand as a prime destination for investment. It is tasked with creating and implementing strategies to attract local and international investors by highlighting opportunities within the country’s burgeoning markets. This includes market research, trend analysis, developing promotional materials, and organizing events that showcase potential sectors for investment.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_43" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Media/Social Media:</h5>
                                <div style="font-size:14px">In an age where information is power, the Media/Social Media sub-department ensures that BIDA maintains a strong and positive presence across various media platforms. This team is responsible for crafting and disseminating news about BIDA’s initiatives, events, and achievements. It also engages with the public and stakeholders through social media channels, providing updates, and fostering a community around investment opportunities in Bundelkhand.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_44" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Advertising/Outdoor:</h5>
                                <div style="font-size:14px">With a focus on visibility and brand recall, the Advertising/Outdoor sub-department develops and manages advertising campaigns to further elevate the profile of Bundelkhand as a key investment hub. This includes outdoor advertising, digital marketing campaigns, sponsorships, and collaborations with industry partners, all aimed at capturing the attention of potential investors and directing them towards the opportunities that await in Bundelkhand.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_45" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Infrastructure and Commerce Tax:</h5>
                                <div style="font-size:14px">The Infrastructure and Commerce Tax sub-department tackles the foundational elements that are crucial for the smooth operation and expansion of businesses within the country. This includes the development and maintenance of essential infrastructure, such as highways, ports, and special economic zones, tailored to meet the needs of industries and commerce. Additionally, it oversees commerce tax-related matters, providing clarity and assistance to businesses in navigating the tax implications of their investments and operations.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_46" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Assets Department Management: </h5>
                                <div style="font-size:14px">You'll be responsible for overseeing the maintenance, development, and effective utilization of all mechanical assets within the authority. This includes ensuring all mechanical infrastructures are up to the highest standards and functioning efficiently.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_47" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Mobile Tower Oversight: </h5>
                                <div style="font-size:14px"> A crucial part of your role involves the management of mobile tower installations, maintenance, and regulatory compliance. You will coordinate with telecommunications partners and other stakeholders to ensure seamless operations and the expansion of mobile network infrastructure across Bundelkhand.</div>
                                <h5>GBM Department Coordination: </h5>
                                <div style="font-size:14px">Collaborating closely with the GBM (Ground-Based Mast) Department, your expertise will guide the design, installation, and maintenance of GBM structures. Your role is crucial in ensuring these structures meet the technical specifications and safety standards required for optimal functionality.

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_48" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Ensure Uninterrupted Power Supply:</h5>
                                <div style="font-size:14px">The department's primary responsibility is to guarantee a consistent and reliable electricity supply to the entire Bundelkhand Industrial region. This is crucial for the smooth operation of industries and for attracting further investment to the area.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_49" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Development of a Self-Reliant Smart City:</h5>
                                <div style="font-size:14px"> BIDA is committed to the vision of transforming the Bundelkhand region into a self-reliant Smart City. The Electricity Department is at the forefront of this initiative, implementing cutting-edge technology and sustainable practices to modernize the power infrastructure and promote energy efficiency.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_50" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Infrastructure Maintenance and Upgrade:</h5>
                                <div style="font-size:14px">Regular maintenance and timely upgrades of the electrical infrastructure are essential duties. This ensures the power network remains robust and capable of meeting the growing demands of the industrial region.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_51" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Emergency Response and Resolution:</h5>
                                <div style="font-size:14px">The department is also tasked with establishing a responsive and efficient emergency service to quickly address and resolve any power outages or electrical issues, minimizing disruption to businesses and residents.</div>
                            </div>
                        </div>
                    </div>

                    <div class="main_class content-message" id="cont_52" style="display:none;">
                        <div class="dpt-abt">
                            <div class="dpt-text">
                                <h5>Sustainable Energy Promotion: </h5>
                                <div style="font-size:14px"> Part of BIDA's long-term strategy involves the promotion of sustainable and renewable energy sources. The Electricity Department plays a key role in researching, advocating, and integrating green energy solutions within the region's power grid.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dpt-frm" style="float: right; display: none;" id="query_form">
                    <h5>Query/Feedback Form</h5>
                    <div class="dpt-inputs mb-5">
                        <div class="dev_req_msg left">
                            <input type="text" class="fldrequired alphabet" name="first_name" placeholder="First Name" maxlength="100" autocomplete="off" id="first_name">
                            <div class="frm-er-msg"></div>
                        </div>
                        <div class="dev_req_msg left">
                            <input type="text" class="fldrequired alphabet" name="last_name" placeholder="Last Name" maxlength="100" autocomplete="off" id="last_name">
                            <div class="frm-er-msg"></div>
                        </div>
                        <div class="dev_req_msg left">
                            <input type="text" class="fldrequired" name="sub_dep_name" placeholder="Sub Department Name" id="sub_depart" maxlength="100" autocomplete="off" style="font-weight: 600" readonly>
                            <div class="frm-er-msg"></div>
                        </div>
                        <div class="dev_req_msg left">
                            <input type="text" class="fldrequired" name="email" placeholder="Email Id" maxlength="45" autocomplete="off" id="email">
                            <div class="frm-er-msg"></div>
                        </div>
                        <div class="dev_req_msg" style="float:left; width:100%; margin-bottom: 15px">
                            <textarea name="message" class="fldrequired" placeholder="Submit your request" id="message"></textarea>
                            <div class="frm-er-msg"></div>
                        </div>
                        <div class="clr"></div>
                        <div class="submit-btn right">
                            <div class="act_btn_ovrly"></div>
                            <a style="cursor:pointer" class="submit_query">Submit</a>
                        </div>
                    </div>
                    <div id="notify"></div>
                </div>
                <div class="clr"></div>

                <div style="width:100%;margin-bottom:20px;padding:2%">
                    <div class="mt-4 mt-lg-0">

                        <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 0 notice_class" id="notice_conts_1" style="background-color: #00000085; display:none">

                            <div class="accordion accordion-shadow-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Notice
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="mb-1">
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dwn-btn"><a href="notice.php">Visit</a></div>
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
                                            Tender
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dwn-btn"><a href="tender.php">Visit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Policy
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
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
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Office Orders
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Office work Order</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Delegation of financial powers</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">BIDA Adhisuchna</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Lekhpal gata avantan</a></span></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 0 notice_class" id="notice_conts_2" style="background-color: #00000085; display:none">

                            <div class="accordion accordion-shadow-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Notice
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="mb-1">
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dwn-btn"><a href="notice.php">Visit</a></div>
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
                                            Tender
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dwn-btn"><a href="tender.php">Visit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Policy
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
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
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Office Orders
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Office work Order</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Delegation of financial powers</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">BIDA Adhisuchna</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Lekhpal gata avantan</a></span></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 0 notice_class" id="notice_conts_3" style="background-color: #00000085; display:none">

                            <div class="accordion accordion-shadow-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Notice
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="mb-1">
                                                            <ul>
                                                                <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                            Consultancy Organization</a></span></li>
                                                                <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                            Consultancy Organization</a></span></li>
                                                                <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                            Consultancy Organization</a></span></li>
                                                                <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                            Consultancy Organization</a></span></li>
                                                                <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                            Consultancy Organization</a></span></li>
                                                            </ul>

                                                        </div>
                                                        <div class="dwn-btn"><a href="notice.php">Visit</a></div>
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
                                            Tender
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dwn-btn"><a href="tender.php">Visit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Policy
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
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
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Office Orders
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 02 April
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/lekhpalgataavantan.pdf" target="_blank" style="color:#31A267">Title : Latest work division 46 Lekhpal Gata Avantan (Circular No. : BIDA-BHUL/2/2024-BHUL-BIDA)</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 19 March
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/gataavnatan.pdf" target="_blank" style="color:#31A267">Title : All Gata Avantan (Document Name: Lekhpal -Deepak Singh)</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 28 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/officeworkorderadministration.pdf" target="_blank" style="color:#31A267">Title : Office Work Orders (Circular No.: BIDA-ADMN0OTHR/1/2024-ADMN-BIDA)</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 0 notice_class" id="notice_conts_4" style="background-color: #00000085; display:none">

                            <div class="accordion accordion-shadow-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Notice
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="mb-1">
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 09 Jan
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/financialpower.pdf" target="_blank" style="color:#31A267">Title : Delegation of financial powers (Circular No.: 106/CEO/BIDA/2023-24)</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                        <div class="dwn-btn"><a href="notice.php">Visit</a></div>
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
                                            Tender
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dwn-btn"><a href="tender.php">Visit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Policy
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
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
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Office Orders
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Office work Order</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Delegation of financial powers</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">BIDA Adhisuchna</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Lekhpal gata avantan</a></span></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 0 notice_class" id="notice_conts_5" style="background-color: #00000085; display:none">

                            <div class="accordion accordion-shadow-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Notice
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="mb-1">
                                                            <div>
                                                                <!-- <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                    2024</div> -->
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267"></a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                        <div class="dwn-btn"><a href="notice.php">Visit</a></div>
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
                                            Tender
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dwn-btn"><a href="tender.php">Visit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Policy
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
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
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Office Orders
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Office work Order</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Delegation of financial powers</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">BIDA Adhisuchna</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Lekhpal gata avantan</a></span></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 0 notice_class" id="notice_conts_6" style="background-color: #00000085; display:none">

                            <div class="accordion accordion-shadow-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Notice
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="mb-1">
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dwn-btn"><a href="notice.php">Visit</a></div>
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
                                            Tender
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dwn-btn"><a href="tender.php">Visit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Policy
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
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
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Office Orders
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Office work Order</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Delegation of financial powers</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">BIDA Adhisuchna</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Lekhpal gata avantan</a></span></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 0 notice_class" id="notice_conts_7" style="background-color: #00000085; display:none">

                            <div class="accordion accordion-shadow-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Notice
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="mb-1">
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dwn-btn"><a href="notice.php">Visit</a></div>
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
                                            Tender
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dwn-btn"><a href="tender.php">Visit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Policy
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
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
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Office Orders
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Office work Order</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Delegation of financial powers</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">BIDA Adhisuchna</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Lekhpal gata avantan</a></span></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 0 notice_class" id="notice_conts_8" style="background-color: #00000085; display:none">

                            <div class="accordion accordion-shadow-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Notice
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="mb-1">
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dwn-btn"><a href="notice.php">Visit</a></div>
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
                                            Tender
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dwn-btn"><a href="tender.php">Visit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Policy
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
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
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Office Orders
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Office work Order</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Delegation of financial powers</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">BIDA Adhisuchna</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Lekhpal gata avantan</a></span></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 0 notice_class" id="notice_conts_9" style="background-color: #00000085; display:none">

                            <div class="accordion accordion-shadow-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Notice
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="mb-1">
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dwn-btn"><a href="notice.php">Visit</a></div>
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
                                            Tender
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dwn-btn"><a href="tender.php">Visit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Policy
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
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
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Office Orders
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Office work Order</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Delegation of financial powers</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">BIDA Adhisuchna</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Lekhpal gata avantan</a></span></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 0 notice_class" id="notice_conts_10" style="background-color: #00000085; display:none">

                            <div class="accordion accordion-shadow-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Notice
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="mb-1">
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dwn-btn"><a href="notice.php">Visit</a></div>
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
                                            Tender
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dwn-btn"><a href="tender.php">Visit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Policy
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
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
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Office Orders
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Office work Order</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Delegation of financial powers</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">BIDA Adhisuchna</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Lekhpal gata avantan</a></span></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section border-4 landing-shadow-4 p-3 p-xl-4 sector-a2 0 notice_class" id="notice_conts_11" style="background-color: #00000085; display:none">

                            <div class="accordion accordion-shadow-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Notice
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <div class="mb-1">
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dwn-btn"><a href="notice.php">Visit</a></div>
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
                                            Tender
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dwn-btn"><a href="tender.php">Visit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <div class="faq btn-accordion collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Policy
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
                                                                    <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                Consultancy Organization</a></span></li>
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
                                            <i class="uil uil-info-circle size-20 mr-2 pr-1"></i>Office Orders
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body faq-scroll">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div>
                                                            <div class="tt1" style="height:40px;">Release Date : 13 Feb
                                                                2024</div>
                                                            <div>
                                                                <ul>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Office work Order</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Delegation of financial powers</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">BIDA Adhisuchna</a></span></li>
                                                                    <li><span><a href="#" target="_blank" style="color:#31A267">Lekhpal gata avantan</a></span></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- <div>
                                                                <div class="tt1" style="height:40px;">Release Date : 12 Feb
                                                                    2024</div>
                                                                <div>
                                                                    <ul>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                        <li><span><a href="img/notice.pdf" target="_blank" style="color:#31A267">Appointment of
                                                                                    Consultancy Organization</a></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="department_id" id="department_id" autocomplete="off">
                        <input type="hidden" name="sub_depId" id="sub_depId" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="frm_hidden_data"></div>
        </form>
    </div>
    <?php include "includes/footer.php"; ?>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
    <script src="scripts/jquery-ui.js"></script>
    <script src="scripts/buttons.js"></script>
    <script src="scripts/common.js"></script>
    <script src="scripts/department.js"></script>
</body>

</html>