<?php
// api/getData.php
require_once('../init.php');

$url = 'https://open-api.dextools.io/free/v2/blockchain?order=asc&sort=name';
$response = callExternalAPI($url);

header('Content-Type: application/json');
echo json_encode($response);
