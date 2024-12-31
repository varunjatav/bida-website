<?php

error_reporting(0);
$db_hostname = "localhost";
$db_database = "webadmin_live_2024";
$db_username = "root";
$db_password = "";
define("DOCUMENT_MAX_SIZE", "2000");

/* * ************ path for site photos ************* */
// excel export path
$media_export = "media/excel";

// tender_file path
$tender_file = 'media/tender_file';

// notice_file path
$notice_file = 'media/notice_file';

$url_head = 'http://';

$main_path = 'localhost/bida-website';

$main_website_admin_path = $url_head . 'localhost/bida-website-admin';

$website_admin_project_name = 'bida-website-admin';

//main website path
$website_main_path =  $url_head . $main_path;

// tender_file path
$website_tender_file_path = '../' . $website_admin_project_name . '/' . 'media/tender_file';

// notice_file path
$website_notice_file_path = '../' . $website_admin_project_name . '/' . 'media/notice_file';

$cookie_domain = '';

// login attempts
$login_attempts = 3;

// block time for login
$block_time = 5;

// attempts to black list ip
$lockout_attempts = 3;

//prefix for user unique id
$prefix_user_id = 'P';

// This is TimeOut period in minutes
$TimeOutMinutes = 1440;

// TimeOut in Seconds
$TimeOutSeconds = $TimeOutMinutes * 60;

// cookie time to live
$cookie_ttl = 86400;

// max life span of session cookie
$session_cookie_lifespan = 86400;

// max life span of garbage collection
$garbage_max_lifespan = 86400;

// No of rows that should be backup before permanent delete(msg)
$msg_rows_count = 10000;

// cipher variables
$ciphering = "AES-128-CTR";
$cipher_options = 0;
$encryption_iv = '53414e544f53484b';
$encryption_key = "qJB0tInSUaJNHtxOGs0H3efyCp";

// cookie name
$cookie_name = "bida-website-admin";

// landing page
$landing_page = 'dashboard';

$bida_admin_email = 'arshad.khan@innobles.com';

// maigun config keys
$mailgun_key = '8ae3df5084c820de2346d66053f26c14-7ca144d2-be724ebc';
$mailgun_api_url = 'https://api.mailgun.net';
$mail_from_alias = 'bida-website';
$mail_from = 'nasir.khan@innobles.com';
$mail_domain = "www.innobles.com";
// set timeout for downloading attachments
$download_file_timeout = 2;

$website_cdn_ath = "https://bida-cdn-dev.b-cdn.net/";

