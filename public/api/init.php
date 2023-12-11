
<?php 
// functions.php
require_once(__DIR__ . '/../../config.php');

function callExternalAPI($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'X-BLOBR-KEY: ' . BLOBR_KEY
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $response = curl_exec($ch);
    if(curl_errno($ch)){
        return 'Erreur cURL: ' . curl_error($ch);
    }
    curl_close($ch);
    return $response;
}

