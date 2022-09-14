<?php
    include __DIR__ . '/../database.php';

    foreach($database as $album) {
        echo '<ul>';
        echo '<li>' . $album['title'] . ' - ' . $album['author'] . ' - ' . $album['year'] . ' - ' . $album['poster'] . ' - ' . $album['genre'];
        echo '</ul>';
    }
?>