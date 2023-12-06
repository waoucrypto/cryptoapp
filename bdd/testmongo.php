<?php
require '../../vendor/autoload.php'; // Inclut la bibliothèque MongoDB
use MongoDB\Client as MongoDBClient;

try {
    $mongoDbClient = new MongoDBClient("mongodb+srv://notrecomcrypto:0UrnJAOGwRmwt2GG@cluster0.padc8yf.mongodb.net/?retryWrites=true&w=majority&ssl=true");

    echo "Connecté à MongoDB";
    $collection = $mongoDbClient->cryptos->liste;
    $document = $collection->find(['address' => '0x2d839ffdb921c5081c67fac7244154e2ba94c764']);

    foreach($document as $doc){
        echo $doc['address'];
    }


} catch (Exception $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>