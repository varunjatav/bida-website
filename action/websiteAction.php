<?php

include_once '../config.php';
include_once '../includes/get_time_zone.php';
include_once '../dbcon/db_connect.php';
include_once '../functions/common.function.php';
include_once "../vendor/autoload.php";

use Mailgun\Mailgun;
use Spatie\Dns\Dns;

$mgClient = Mailgun::create($mailgun_key, $mailgun_api_url);

if (isset($_POST['action']) && $_POST['action'] == 'send_query') {

    try {
        // Begin Transaction
        $db->beginTransaction();

        // check user input for valid data
        foreach ($_POST as $postValue) {
            check_user_input($postValue);
        }

         $timestamp = time();
        if ($_POST['sector_name'] == '') {
            $db_respose_data = json_encode(array('status' => '-1', 'message' => 'Please select sector name.'));
            print_r($db_respose_data);
            exit();
        }
        $timestamp = time();
        $user_name = $_POST['user_name'] ? __fi(validateMaxLen(validateAlphabet($_POST['user_name'], 'User Name'), 100, 'User Name')) : '';
        $sectorid = $_POST['sector_name'] ? __fi(validateInteger(validateMaxLen($_POST['sector_name'], 11, 'Sector Name'), 'Sector Name')) : 0;
        $user_email = $_POST['user_email'] ? __fi(validateMaxLen(validateEmail($_POST['user_email']), 50, 'User Email')) : '';
        $user_mobile = $_POST['user_mobile'] ? __fi(validateInteger(validateMaxLen(validateMobile($_POST['user_mobile']), 10, 'User Mobile'), 'User Mobile')) : '';
        $org_name = $_POST['org_name'] ? __fi(validateMaxLen($_POST['org_name'], 200, 'Organization Name')) : '';
        $user_message = $_POST['user_message'] ? __fi($_POST['user_message']) : "";
        $message_type = $_POST['radio_option'] ? __fi(validateMaxLen($_POST['radio_option'], 2, 'Message Type')) : 0;

        $insrt = $db->prepare("INSERT INTO  bida_raise_queries (Name, Mobile, SectorID, Email, OrganizationName, MessageType,  Message, DateCreated) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $insrt->bindParam(1, $user_name);
        $insrt->bindParam(2, $user_mobile);
        $insrt->bindParam(3, $sectorid);
        $insrt->bindParam(4, $user_email);
        $insrt->bindParam(5, $org_name);
        $insrt->bindParam(6, $message_type);
        $insrt->bindParam(7, $user_message);
        $insrt->bindParam(8, $timestamp);
        $insrt->execute();

        // Make the changes to the database permanent
        commit($db, 'Send message successfully.');
    } catch (\Exception $e) {
        if ($db->inTransaction()) {
            $db->rollback();
        }

        // return response
        $log_error_msg = '==> [' . date('d-m-Y h:i A', time()) . '] [Error Code: ' . $e->getCode() . '] [Path: ' . $e->getFile() . '] [Line: ' . $e->getLine() . '] [Message: ' . $e->getMessage() . '] [Input: ' . json_encode($_POST) . ']';
        rollback($db, $e->getCode(), $log_error_msg);
    }
} else if (isset($_POST['action']) && $_POST['action'] == 'send_country_desk_query') {

    try {
        // Begin Transaction
        $db->beginTransaction();

        // check user input for valid data
        foreach ($_POST as $postValue) {
            check_user_input($postValue);
        }
        

        $timestamp = time();
        if ($_POST['country'] == '') {
            $db_respose_data = json_encode(array('status' => '-1', 'message' => 'Please select country name.'));
            print_r($db_respose_data);
            exit();
        } 
        if ($_POST['sector_name'] == '') {
            $db_respose_data = json_encode(array('status' => '-1', 'message' => 'Please select sector name.'));
            print_r($db_respose_data);
            exit();
        }
        $user_name = $_POST['user_name'] ? __fi(validateMaxLen(validateAlphabet($_POST['user_name'],'User Name'), 100, 'User Name')) : '';
        $Countryid = $_POST['country'] ? __fi(validateInteger(validateMaxLen($_POST['country'],11, 'Country Name'), 'Country Name')) : 0;
        $sectorid = $_POST['sector_name'] ? __fi(validateInteger(validateMaxLen($_POST['sector_name'],11, 'Sector Name'), 'Sector Name')) : 0;
        $user_email = $_POST['user_email'] ? __fi(validateMaxLen(validateEmail($_POST['user_email']), 50, 'User Email')) : '';
        $user_mobile = $_POST['user_mobile'] ? __fi(validateInteger(validateMaxLen(validateMobile($_POST['user_mobile']), 10, 'User Mobile'), 'User Mobile')) : '';
        $org_name = $_POST['org_name'] ? __fi(validateMaxLen($_POST['org_name'], 200, 'Organization Name')) : '';
        $user_message = $_POST['user_message'] ? __fi($_POST['user_message']) : '';
        $message_type = $_POST['radio_option'] ? __fi(validateMaxLen($_POST['radio_option'], 2, 'Message Type')) : 0;

        $insrt = $db->prepare("INSERT INTO  bida_country_desks_queries(Name, Mobile, CountryID, SectorID, Email, OrganizationName, MessageType, Message, DateCreated) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $insrt->bindParam(1, $user_name);
        $insrt->bindParam(2, $user_mobile);
        $insrt->bindParam(3, $Countryid);
        $insrt->bindParam(4, $sectorid);
        $insrt->bindParam(5, $user_email);
        $insrt->bindParam(6, $org_name);
        $insrt->bindParam(7, $message_type);
        $insrt->bindParam(8, $user_message);
        $insrt->bindParam(9, $timestamp);
        $insrt->execute();

        // Make the changes to the database permanent
        commit($db, 'Send message successfully.');
    } catch (\Exception $e) {
        if ($db->inTransaction()) {
            $db->rollback();
        }

        // return response
        $log_error_msg = '==> [' . date('d-m-Y h:i A', time()) . '] [Error Code: ' . $e->getCode() . '] [Path: ' . $e->getFile() . '] [Line: ' . $e->getLine() . '] [Message: ' . $e->getMessage() . '] [Input: ' . json_encode($_POST) . ']';
        rollback($db, $e->getCode(), $log_error_msg);
    }
} else if (isset($_POST['action']) && $_POST['action'] == 'send_message') {

    try {
        // Begin Transaction
        $db->beginTransaction();

        // check user input for valid data
        foreach ($_POST as $postValue) {
            check_user_input($postValue);
        }

        $timestamp = time();
        $user_id = $_SESSION['UserID'];
        $user_Name = __fi(validateMaxLen(validateAlphabet($_POST['contactname'], 'Name'), 100, 'Name'));
        $user_email = __fi(validateMaxLen(validateEmail($_POST['contactemail']), 50, 'Email Id'));
        $user_message = __fi($_POST['contactmessage']);
        $message_type = $_POST['radio_option'] ? __fi(validateMaxLen($_POST['radio_option'], 30, 'Message Type')) : 'Other';

        // make template for send email

        $tmplt = '';
        $tmplt .= '<!doctype html>
                <html>
                <head>
                <meta charset="UTF-8">
                <title>Bida Website</title>
                </head>
                <body>
                    <div style="background: #f9f9f9; font-family: helvetica,arial,sans-serif;color: #333;">
                        <div style="width: 600px; margin: 0px auto; min-height: 400px; padding: 50px 0;">
                            <div style="width: width: 100%;text-align: center;">
                                <a>
                                <img src="' . $main_path . '/img/logo.png" width="150" alt="">
                                </a>
                            </div>
                            <div style="min-height: 400px; padding: 20px; width: 560px; background: #fff; margin: 20px 0; border-radius: 12px; font-size: 14px;border: 1px solid #f4f4f4;">
                                <div style=" text-align: center; color: #666; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 1px solid #ddd; font-size: 18px; font-weight: 600;">
                               Welcome to Bida website
                                </div>
                                <div style="line-height: 22px;">
                                Dear Sir/Mam,
                                <br><br>
                                You have one new query from the BIDA Website.
                                <br><br>
                                Query From: ' . $user_Name . '
                                <br>
                                User Email: ' . $user_email . '
                                <br>
                                Query for: ' . $message_type . '
                                <br>
                                Message: ' . $user_message . '
                                <br>
                                <div style="font-size: 13px; font-style: italic; line-height: 24px; margin-top: 40px; color: #666; font-family: helvetica,arial,sans-serif;"">
                                    Thanks & Regards: <br> ' . $user_Name . '
                                </div>
                            </div>
                            <div style="color: #666; font-size: 12px; text-align: center; line-height: 22px;"><br>
                                © Copyright BIDA<br>All Rights Reserved</a>
                            </div>
                      </div>
                    </div>
                </body>
                </html>';
        $params = array(
            'from' => $mail_from_alias . ' <' . $user_email . '>',
            'to' => trim($bida_admin_email),
            'subject' => 'Contact Query from BIDA website',
            'html' => $tmplt
        );
        # Make the call to the client.
        $result = $mgClient->messages()->send($mail_domain, $params);

        // Make the changes to the database permanent
        commit($db, 'Send message successfully.');
    } catch (\Exception $e) {
        if ($db->inTransaction()) {
            $db->rollback();
        }

        // return response
        $log_error_msg = '==> [' . date('d-m-Y h:i A', time()) . '] [Error Code: ' . $e->getCode() . '] [Path: ' . $e->getFile() . '] [Line: ' . $e->getLine() . '] [Message: ' . $e->getMessage() . '] [Input: ' . json_encode($_POST) . ']';
        rollback($db, $e->getCode(), $log_error_msg);
    }
}
