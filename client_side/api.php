<?php
    // recupero dati da database.php;
    include __DIR__ . '/../database.php';

    // creo array vuoto dove inserire gli album filtrati
    $albumsFilteredWithGet = [];

    // filtro gli album in base al genere ricevuto come parametro GET
    if (isset($_GET['genre']) && $_GET['genre'] != '') {
        foreach($database as $album) {
            if ($album['genre'] == $_GET['genre']) {
                $albumsFilteredWithGet[] = $album;
            }
        }
    } else {
        $albumsFilteredWithGet = $database;
    }

    // specifico che i dati in uscita devono essere letti come json;
    header('Content-Type: application/json');

    // preparo invio dati in formato json;
    echo json_encode($albumsFilteredWithGet);
?>