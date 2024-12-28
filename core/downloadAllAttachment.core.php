<?php

$resource_id = base64_decode($_GET["id"]);
$type = base64_decode($_GET['type']);

if ($type == 'tender_attachment') {
    $dir = dirname(dirname(__FILE__)) . '/' . $tender_file . '/';
    $filename = "tender_attachment_" . time() . ".zip";
    $sql = "SELECT T1.Attachment
            FROM bida_tender_attachments T1
            WHERE T1.TenderID = ?
            ";
    $sql_attachement = $db->prepare($sql);
    $sql_attachement->bindParam(1, $resource_id);
    $sql_attachement->execute();
    $sql_attachement->setFetchMode(PDO::FETCH_ASSOC);
    $pdf = array();
    while ($row = $sql_attachement->fetch()) {
        $attachment_array = array();
        $attachment_array = json_decode($row['Attachment'], true);
        foreach ($attachment_array as $atkey => $atval) {
            $pdf[] = $atval;
        }
    }
} else if ($type == 'notice_attachment') {
    $dir = dirname(dirname(__FILE__)) . '/' . $notice_file . '/';
    $filename = "notice_attachment_" . time() . ".zip";
    $sql = "SELECT T1.Attachment
            FROM bida_notice_attachments T1
            WHERE T1.NoticeID = ?
            ";
    $sql_attachement = $db->prepare($sql);
    $sql_attachement->bindParam(1, $resource_id);
    $sql_attachement->execute();
    $sql_attachement->setFetchMode(PDO::FETCH_ASSOC);
    $pdf = array();
    while ($row = $sql_attachement->fetch()) {
        $attachment_array = array();
        $attachment_array = json_decode($row['Attachment'], true);
        foreach ($attachment_array as $atkey => $atval) {
            $pdf[] = $atval;
        }
    }
}