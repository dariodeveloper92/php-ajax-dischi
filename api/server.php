<?php 
    // Raccolgo i datati da inviare
    require __DIR__ . '/../data/database.php';

    // Setto la risposta con protocollo JSON
    header('Content-Type: application/json');

    // Invio la risposta
    echo json_encode($db);
    // var_dump($db);
?>