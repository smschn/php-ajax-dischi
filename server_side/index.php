<?php
    // richiamo il file php del database contente gli album che userò nell'html sottostante
    include __DIR__ . '/../database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Index.php: php, ajax, dischi</title>
</head>
<body>

    <header>
        <img src="../img/spotify_logo.png" alt="Logo">
    </header>

    <main>
        <div class="container">
            <?php
                foreach($database as $album) {
                    echo '<div class="card">';
                    echo "<img src='" . $album['poster'] . "'" . "alt='" . $album['title'] . "'" . '/>';
                    echo "<h3>" . $album['title'] . "</h3>";
                    echo "<h4>" . $album['author'] . "</h4>";
                    echo "<h5>" . $album['year'] . "</h5>";
                    echo "<p>" . $album['genre'] . "</p>";
                    echo '</div>';
                }
            ?>
        </div>
    </main>

</body>
</html>