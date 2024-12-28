<?php

include_once "../config.php";
include_once "../dbcon/db_connect.php";
include_once "../functions/common.function.php";
date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['action']) && $_POST['action'] == 'submit_query') {

    try {
        // Begin Transaction
        $db->beginTransaction();

        // check user input for valid data
        foreach ($_POST as $postValue) {
            check_user_input($postValue);
        }

        $timestamp = time();
        $first_name = __fi(validateMaxLen(validateAlphabet($_POST['first_name'], 'First Name'), 100, 'Department Name'));
        $last_name = __fi(validateMaxLen(validateAlphabet($_POST['last_name'], 'Last Name'), 100, 'Last Name'));
        $sub_dep_name = __fi(validateMaxLen($_POST['sub_dep_name'], 'Sub Department Name'), 100, 'Sub Department Name');
        $email = __fi(validateMaxLen(validateEmail($_POST['email'], 'Email Id'), 45, 'Email Id'));
        $message = __fi($_POST['message']);
        $department_id = __fi(validateInteger($_POST['department_id'], 'Department Id'));
        $sub_depId = __fi(validateInteger($_POST['sub_depId'], 'Sub Department Id'));
        //insert new scheme
        $insrt = $db->prepare("INSERT INTO bida_department_query (DepartmentID, SubDivisionID, FirstName, LastName, Email, SubDepartmentName, Message, CreateDate) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
        $insrt->bindParam(1, $department_id);
        $insrt->bindParam(2, $sub_depId);
        $insrt->bindParam(3, $first_name);
        $insrt->bindParam(4, $last_name);
        $insrt->bindParam(5, $email);
        $insrt->bindParam(6, $sub_dep_name);
        $insrt->bindParam(7, $message);
        $insrt->bindParam(8, $timestamp);
        $insrt->execute();

        // Make the changes to the database permanent
        commit($db, 'Query submited successfully.');
    } catch (\Exception $e) {
        if ($db->inTransaction()) {
            $db->rollback();
        }

        // return response
        $log_error_msg = '==> [' . date('d-m-Y h:i A', time()) . '] [Error Code: ' . $e->getCode() . '] [Path: ' . $e->getFile() . '] [Line: ' . $e->getLine() . '] [Message: ' . $e->getMessage() . '] [Input: ' . json_encode($_POST) . ']';
        rollback($db, $e->getCode(), $log_error_msg);
    }
}