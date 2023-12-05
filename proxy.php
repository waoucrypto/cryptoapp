<?php
// proxy.php

// Adresse du service externe que vous voulez interroger
$targetUrl = 'https://t.me/s/' . $_GET['channel'];

// Utiliser cURL pour faire la requête
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $targetUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Exécuter la requête cURL
$response = curl_exec($ch);
$curl_error = curl_error($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Fermer la session cURL
curl_close($ch);

// Vérifier si la requête a réussi
if($http_code === 200) {
    echo $response;
} else {
    // Gérer l'erreur ou la renvoyer
    echo "Erreur lors de la récupération des données : " . $curl_error;
}
?>
