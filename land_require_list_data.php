<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo 'Curl error: ' . curl_error($ch);
    exit;
}

// Close cURL
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);
// Check if the data is valid
if (is_array($data)) {
    $area_to_acquired = round($data['tobe_aquire_land'] * 2.471);
    $total_area_tobe_acquired = round($data['total_land'] * 2.471);
} else {
    echo "Failed to retrieve data.";
}