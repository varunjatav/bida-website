<?php

function insert_into_queue($db, $params) {

    // check receiver count
    if (count_($params['app_receiver'])) {
        $origin = $params['origin'];
        $priority = $params['priority'];
        $link_page = $params['link_page'];
        $medium = array_intersect($params['user_medium'], $params['source_medium']);
        $medium_reff_arr = array();
        foreach ($medium as $mkey => $mval) {
            if ($mval == 'app') {
                $medium_reff_arr[] = '1';
            }
            if ($mval == 'text') {
                $medium_reff_arr[] = '2';
            }
            if ($mval == 'email') {
                $medium_reff_arr[] = '3';
            }
            if ($mval == 'whatsapp') {
                $medium_reff_arr[] = '4';
            }
            if ($mval == 'web') {
                $medium_reff_arr[] = '5';
            }
        }
        $common_medium_str = implode(',', $medium_reff_arr);

        //make array for queue table
        foreach ($params['app_receiver'] as $aKey => $aValue) {

            $ivr_call = $params['ivr_call'][$aKey];
            $text_msg = $params['message_text'][$aKey];
            $email_msg = $params['message_email'][$aKey];
            $whatsapp_msg = $params['message_whatsapp'][$aKey];
            $web_msg = $params['message_web'][$aKey];
            $sender = $params['app_sender'][$aKey];
            $msgs = $params['app_message'][$aKey];
            $fcm = $params['app_fcm'][$aKey];
            $app_target_user = $params['app_target_user'][$aKey];
            $os_type = $params['os_type'][$aKey] == '' ? 0 : $params['os_type'][$aKey];
            $mobile = $params['mobile'][$aKey];
            $email = $params['email'][$aKey];
            $attachments = json_encode($params['attachments'][$aKey]);

            if ($params['message_data'][$aKey] || $email_msg[$aKey] || $web_msg[$aKey] || $whatsapp_msg[$aKey] || $text_msg[$aKey] || $ivr_call[$aKey]) {
                $encode_notify_data = json_encode($params['message_data'][$aKey]);
                $msg_content = $params['message_data'][$aKey];
                $app_value[] = array('CreateTime' => time(), 'SenderID' => $sender, 'ReceiverID' => $aValue, 'FcmToken' => $fcm, 'Message' => $msgs, 'MessageData' => $encode_notify_data, 'MessageText' => $text_msg, 'MessageEmail' => $email_msg, 'MessageWhatsapp' => $whatsapp_msg, 'MessageWeb' => $web_msg, 'Attachment' => $attachments, 'Origin' => $origin, 'SentTo' => $app_target_user, 'OsType' => $os_type, 'Mobile' => $mobile, 'Email' => $email, 'Priority' => $priority, 'LinkPage' => $link_page, 'Medium' => $common_medium_str, 'VoiceClip' => $ivr_call);
            }
        }

        //queue operation for email notifiacation
        if (in_array('email', $params['user_medium']) && in_array('email', $params['source_medium']) && count_($params['email'])) {

            // statement to insert in queue
            $queue_query = "INSERT INTO fa_email_queue (ReceiverID, Email, CreateTime, Message, MessageData, Attachment, SenderID, Priority, Origin) VALUES "; //Prequery
            $queue_qPart = array_fill(0, count_(array_filter($params['email'])), "(?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $queue_query .= implode(",", $queue_qPart);

            $queue_stmt = $db->prepare($queue_query);
            $queue_i = 1;

            foreach ($app_value as $queue_itemKey => $queue_item) { //bind the values one by one
                if ($queue_item['Email']) {
                    $queue_stmt->bindParam($queue_i++, __fi($queue_item['ReceiverID']));
                    $queue_stmt->bindParam($queue_i++, __fi($queue_item['Email']));
                    $queue_stmt->bindParam($queue_i++, __fi($queue_item['CreateTime']));
                    $queue_stmt->bindParam($queue_i++, __fi($queue_item['Message']));
                    $queue_stmt->bindParam($queue_i++, __fi($queue_item['MessageEmail']));
                    $queue_stmt->bindParam($queue_i++, __fi($queue_item['Attachment']));
                    $queue_stmt->bindParam($queue_i++, __fi($queue_item['SenderID']));
                    $queue_stmt->bindParam($queue_i++, __fi($queue_item['Priority']));
                    $queue_stmt->bindParam($queue_i++, __fi($queue_item['Origin']));
                }
            }
            $queue_stmt->execute();
        }

        //queue operation for web notifiacation
        if (in_array('web', $params['user_medium']) && in_array('web', $params['source_medium'])) {

            // statement to insert in queue
            $queue_query = "INSERT INTO fa_web_queue (ReceiverID, CreateTime, Message, MessageData, SenderID, LinkPage, Priority, Origin, SentTo) VALUES "; //Prequery
            $queue_qPart = array_fill(0, count($app_value), "(?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $queue_query .= implode(",", $queue_qPart);

            $queue_stmt = $db->prepare($queue_query);
            $queue_i = 1;

            foreach ($app_value as $queue_itemKey => $queue_item) { //bind the values one by one
                $queue_stmt->bindParam($queue_i++, __fi($queue_item['ReceiverID']));
                $queue_stmt->bindParam($queue_i++, __fi($queue_item['CreateTime']));
                $queue_stmt->bindParam($queue_i++, __fi($queue_item['Message']));
                $queue_stmt->bindParam($queue_i++, __fi($queue_item['MessageWeb']));
                $queue_stmt->bindParam($queue_i++, __fi($queue_item['SenderID']));
                $queue_stmt->bindParam($queue_i++, __fi($queue_item['LinkPage']));
                $queue_stmt->bindParam($queue_i++, __fi($queue_item['Priority']));
                $queue_stmt->bindParam($queue_i++, __fi($queue_item['Origin']));
                $queue_stmt->bindParam($queue_i++, __fi($queue_item['SentTo']));
            }
            $queue_stmt->execute();
        }
    }
}
