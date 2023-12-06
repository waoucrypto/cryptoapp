<?php
require '../vendor/autoload.php'; // Inclut la bibliothèque MongoDB
use MongoDB\Client as MongoDBClient;

$mongoDbClient = null;

try {
    $mongoDbClient = new MongoDBClient("mongodb+srv://notrecomcrypto:0UrnJAOGwRmwt2GG@cluster0.padc8yf.mongodb.net/?retryWrites=true&w=majority&ssl=true");
    echo "Connecté à MongoDB";
} catch (Exception $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit; // Arrête l'exécution si la connexion échoue
}

// Retourne l'objet client pour être utilisé dans d'autres scripts
return $mongoDbClient;
?>
