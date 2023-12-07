<?php
// Assurez-vous que cette ligne se trouve au début de votre script pour démarrer la session
session_start();

// Imaginons que ceci est le point d'entrée après la validation de la signature
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération du contenu brut de la requête POST
    $content = file_get_contents('php://input');
    $decoded = json_decode($content, true);

    // Si json_decode() retourne NULL, cela pourrait être dû à une erreur de décodage
    if ($decoded === null && json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("Erreur de décodage JSON: " . json_last_error_msg());
    }

    $address = $decoded['address']; // Adresse fournie par le client
    $signature = $decoded['signature']; // Signature fournie par le client

    // Valider la signature ici...

    // Après la validation, vous pouvez stocker les données dans la session
    session_regenerate_id();
    $_SESSION['user_address'] = $address;

    // Préparation de la réponse
    $response = [
        'success' => true,
        // Autres éléments de réponse si nécessaire
    ];

    // Envoi de la réponse au client
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
