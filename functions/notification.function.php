<?php

//notification static images
function notificationImages($notify_type, $action_type) {
    $image = '';
    return $image;
}

// multiple dymanic and static images for notifications
function multipleNotificationAttachments($notify_type, $action_type, $userid, $attachment) {
    return $attachment;
}

// function foe default notification send medium
function sourceMedium($origin) {

    if ($origin == 'DecSecStatus') {
        $source = array('email');
    } elseif ($origin == 'RaiseQuery') {
        $source = array('email', 'web');
    } elseif ($origin == 'HospitalEditDetail') {
        $source = array('email');
    } elseif ($origin == 'HospitalRaiseQuery') {
        $source = array('email', 'web');
    } else {
        $source = array('email', 'web');
    }
    return $source;
}

//payload function for application notifiaction
function notificationPayload($payload) {

    $payload_image = '';

    if (in_array('app', $payload['medium']) || in_array('whatsapp', $payload['medium']) || in_array('email', $payload['medium'])) {

        $payload_image = notificationImages($payload['medium'], $payload['origin']);
    }

    if ($payload['OsType'] == '1') {

        $notify_data_array = array(
            'title' => $payload['title'],
            'message' => $payload['message'],
            'attachment' => $payload_image,
            'type' => $payload['type']
        );
    } else if ($payload['OsType'] == '2') {

        $notify_data_array = array(
            'title' => $payload['title'],
            'message' => $payload['message'],
            'attachment' => $payload_image,
            'sound' => 'default',
            'badge' => '1',
            'type' => $payload['type']
        );
    }

    return removeEmptyValues($notify_data_array);
}

//dynamic parameters for queue in form of array
function queueParam($param) {

    $params = array(
        'db' => $param['db'],
        'source_medium' => $param['source_medium'],
        'user_medium' => $param['user_medium'],
        'origin' => $param['origin'],
        'message_data' => $param['message_data'],
        'message_text' => $param['message_text'],
        'message_email' => $param['message_email'],
        'message_whatsapp' => $param['message_whatsapp'],
        'ivr_call' => $param['ivr_call'],
        'message_web' => $param['message_web'],
        'attachments' => $param['attachments'],
        'app_sender' => $param['app_sender'],
        'app_receiver' => array_filter($param['app_receiver']),
        'app_message' => $param['app_message'],
        'app_target_user' => $param['app_target_user'],
        'app_fcm' => array_filter($param['app_fcm']),
        'os_type' => array_filter($param['os_type']),
        'mobile' => array_filter($param['mobile']),
        'email' => array_filter($param['email']),
        'priority' => $param['priority'],
        'link_page' => $param['link_page']
    );

    return removeEmptyValues($params);
}

//customise notifiaction messages according to requirement
function queueMessages($row_value, $origin) {
    //Feedback URL
    $feedback_url = 'https://bit.ly/3cChpyg';
    $app_msg_array = array();
    $app_target_array = array();
    $text_msg = array();
    $app_msgs = array();
    $email_msg = array();
    $whatsapp_msg = array();
    $web_msg = array();
    $ivr_call_array = array();

    foreach ($row_value as $key => $row) {

        if ($origin == 'DecSecStatus') {
            $app_msg_array[] = $row['Title'];
            $app_target_array[] = '';
            $text_msg[] = "";
            $app_msgs[] = "";
            $email_msg[] = "Dear Team, Your Hospital Empanelment is " . $row['StatutsUpdate'] . " of SHA-Punjab.";
            $whatsapp_msg[] = "";
            $web_msg[] = "Dear Team, Your Hospital Empanelment is " . $row['StatutsUpdate'] . " of SHA-Punjab.";
            $notification_title = $row['Title'];
            $link_page = '';
        } elseif ($origin == 'RaiseQuery') {
            $app_msg_array[] = $row['Title'];
            $app_target_array[] = '';
            $text_msg[] = "";
            $app_msgs[] = "";
            $email_msg[] = "You have one new query received from. " . $row['StatutsUpdate'] . "<br>" . "Login to SHA Portal to view.";
            $whatsapp_msg[] = "";
            $web_msg[] = "You have one new query received from. " . $row['StatutsUpdate'] . "<br>" . "Login to SHA Portal to view.";
            $notification_title = $row['Title'];
            $link_page = $row['LinkPage'];
        } elseif ($origin == 'HospitalEditDetail') {
            $app_msg_array[] = $row['Title'];
            $app_target_array[] = '';
            $text_msg[] = "";
            $app_msgs[] = "";
            $email_msg[] = "Hospital has modified the profile information." . "<br>" . "Login to SHA Portal to view.";
            $whatsapp_msg[] = "";
            $web_msg[] = "Hospital has modified the profile information." . "<br>" . "Login to SHA Portal to view.";
            $notification_title = $row['Title'];
            $link_page = '';
        } elseif ($origin == 'HospitalRaiseQuery') {
            $app_msg_array[] = $row['Title'];
            $app_target_array[] = '';
            $text_msg[] = "";
            $app_msgs[] = "";
            $email_msg[] = "You have one new query received from. " . $row['HospitalName'] . "<br>" . "Login to SHA Portal to view.";
            $whatsapp_msg[] = "";
            $web_msg[] = "You have one new query received from. " . $row['HospitalName'] . "<br>" . "Login to SHA Portal to view.";
            $notification_title = $row['Title'];
            $link_page = $row['LinkPage'];
        }
    }

    $notificationMessage = array('app_msg_array' => $app_msg_array, 'app_target_array' => $app_target_array, 'text_msg' => $text_msg, 'app_msgs' => $app_msgs, 'email_msg' => $email_msg, 'whatsapp_msg' => $whatsapp_msg, 'web_msg' => $web_msg, 'notification_title' => $notification_title, 'link_page' => $link_page, 'ivr_call' => $ivr_call_array);

    return removeEmptyValues($notificationMessage);
}

//notification data function and queue management
function queueData($db, $row_value, $origin, $type, $priority) {

    $app_sender_array = array();
    $app_receiver_array = array();
    $app_receiver_fcm_array = array();
    $ostype_data_array = array();
    $mobile_data_array = array();
    $notification_type_array = array();
    $email_data_array = array();
    $attachments_array = array();

    //calling dynamicaly notifiacation messsages
    $notificationMessage = queueMessages($row_value, $origin);

    //predefined source for user
    $source = sourceMedium($origin);

    foreach ($row_value as $key => $row) {

        $app_sender_array[] = $row['SenderID'];
        $app_receiver_array[] = $row['ReceiverID'];
        $mobile_data_array[] = $row['Mobile'];
        $email_data_array[] = $row['Email'];
        $notification_type[] = $row['Medium'];
        $attachments_array[] = $row['Attachment'];
        $notification_type_array = explode(',', $row['Medium']);

        $app_msgs = $notificationMessage['app_msgs'][$key];
        $notification_title = $notificationMessage['notification_title'];
        $link_page = $notificationMessage['link_page'];

        if (in_array('app', $notification_type_array) && $row['FcmToken'] && $row['OsType']) {

            $app_receiver_fcm_array[] = $row['FcmToken'];
            $ostype_data_array[] = $row['OsType'];

            //payload array for notifications
            $payload_array = array(
                'medium' => $notification_type_array,
                'OsType' => $row['OsType'],
                'title' => $notification_title,
                'message' => $app_msgs,
                'origin' => $origin,
                'type' => $type
            );

            //payload data for notification
            $payload_data[] = notificationPayload($payload_array);
        }
    }

    //storing messages
    $app_msg_array = $notificationMessage['app_msg_array'];
    $app_target_array = $notificationMessage['app_target_array'];
    $text_msg = $notificationMessage['text_msg'];
    $email_msg = $notificationMessage['email_msg'];
    $whatsapp_msg = $notificationMessage['whatsapp_msg'];
    $web_msg = $notificationMessage['web_msg'];
    $ivr_call = $notificationMessage['ivr_call'];

    //multiple Attachments
    $attachments = multipleNotificationAttachments($notification_type_array, $origin, $app_receiver_array, $attachments_array);

    //parameter data value array for queue param
    $param_data_array = array(
        'db' => $db,
        'source_medium' => $source,
        'user_medium' => $notification_type_array,
        'origin' => $origin,
        'message_data' => $payload_data,
        'message_text' => $text_msg,
        'message_email' => $email_msg,
        'message_whatsapp' => $whatsapp_msg,
        'message_web' => $web_msg,
        'ivr_call' => $ivr_call,
        'attachments' => $attachments,
        'app_sender' => $app_sender_array,
        'app_receiver' => $app_receiver_array,
        'app_message' => $app_msg_array,
        'app_target_user' => $app_target_array,
        'app_fcm' => $app_receiver_fcm_array,
        'os_type' => $ostype_data_array,
        'mobile' => $mobile_data_array,
        'email' => $email_data_array,
        'priority' => $priority,
        'link_page' => $link_page
    );

    //call for queue parameters
    $queue_params = queueParam($param_data_array);

    return removeEmptyValues($queue_params);
}
