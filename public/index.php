<?php
require '../bdd/connexion.php'; // Inclut le fichier de connexion
use MongoDB\Client as MongoDBClient;

// Vérifie si $mongoDbClient est défini et est un objet de la classe MongoDBClient
if ($mongoDbClient instanceof MongoDBClient) {
    $collection = $mongoDbClient->cryptos->liste;
    $document = $collection->find(['address' => '0x2d839ffdb921c5081c67fac7244154e2ba94c764']);

    foreach ($document as $doc) {
        echo $doc['address'];
    }
} else {
    echo "La connexion à la base de données a échoué.";
}
?>
