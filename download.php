<?php

include_once 'config.php';
include_once 'functions/common.function.php';
$file = decryptIt(myUrlEncode($_GET["file"]));
$type = decryptIt(myUrlEncode($_GET['type']));

if ($type == 'notice_cor') {
    $file_path = $website_notice_file_path . '/' . $file;
} else if ($type == 'tender_cor') {
    $file_path = $website_tender_file_path . '/' . $file;
}
$context = stream_context_create(
        array(
            'wrapper' =>
            array(
                'method' => "GET",
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ),
                'http' => array(
                    'timeout' => $download_file_timeout,
                    'ignore_errors' => true,
                )
            )
        )
);
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($file_path));
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
readfile($file_path, false, $context);
exit;
