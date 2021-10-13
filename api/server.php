<?php 
    // Raccolgo i datati da inviare
    require __DIR__ . '/../data/database.php';

    // Setto la risposta con protocollo JSON
    header('Contebt-Type:application/jsno');

    // Invio la risposta
    echo json_encode($db);
?>