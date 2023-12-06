
<?php
   // PHP version 7.4 used here
    try {
        // connect to OVHcloud Public Cloud Databases for MongoDB (cluster in version 4.4, MongoDB PHP Extension in 1.8.1)
        $m = new MongoDB\Driver\Manager('mongodb+srv://notrecomcrypto:0UrnJAOGwRmwt2GG@cluster0.padc8yf.mongodb.net/?retryWrites=true&w=majority');
        echo "Connection to database successfully klm";
        // display the content of the driver, for diagnosis purpose
        var_dump($m);
    }
    catch (Throwable $e) {
        // catch throwables when the connection is not a success
        echo "Captured Throwable for connection : " . $e->getMessage() . PHP_EOL;
    }
?> <?php
    try {
        // Bulk write inserts
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert(['mydata' => 'alice']);
        $bulk->insert(['mydata' => 'bob']);
        $bulk->insert(['mydata' => 'bastien']);
        $m->executeBulkWrite('cryptos.liste', $bulk);

        $filter = ['mydata' => 'bob'];
        $options = [];

        // Query to find inserts in a specific collection
        $query = new MongoDB\Driver\Query($filter, $options);
        $cursor = $m->executeQuery('cryptos.liste', $query);

        foreach ($cursor as $document) {
            var_dump($document);
        }
    }
    catch (Throwable $e) {
        echo "Captured Throwable: for insert : " . $e->getMessage() . PHP_EOL;
    }
?>