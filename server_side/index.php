<?php
    // richiamo il file php del database
    include __DIR__ . '/../database.php';

    // con un ciclo stampo i dati in pagina
    foreach($database as $album) {
        echo '<ul>';
        echo '<li>' . $album['title'] . ' - ' . $album['author'] . ' - ' . $album['year'] . ' - ' . $album['poster'] . ' - ' . $album['genre'];
        echo '</ul>';
    }
?>