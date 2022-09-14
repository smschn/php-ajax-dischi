<?php
    // recupero dati da database.php;
    include __DIR__ . '/../database.php';

    // specifico che i dati in uscita devono essere letti come json;
    header('Content-Type: application/json');

    // preparo invio dati in formato json;
    echo json_encode($database);
?>