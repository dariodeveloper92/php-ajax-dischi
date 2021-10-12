<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title> PHP Dischi </title>
</head>

<?php 
    /* import database */
    include __DIR__ . '/database.php';
    
?>

<body>
    <!-- header -->
    <header>
        <div id="container-header">
            <div class="logoSpotify">
                <a href="#">
                <img src="./img/spotify-logo.svg" alt="Spotify logo">
                </a>
            </div>
        </div>
    </header>
    <!-- main -->
    <main>
        <section id="container-main">
            <div class="dischi">
                <?php 
                    /*importo i dischi dal database */ 
                    foreach($db as $key => $disc) {
                        echo"<div class='dischi'>";
                            echo '<img src=' . $disc['poster'] .'>' ;
                            echo '<h2>' . 'title: ' . $disc['title'] . ':'  . '</h2>';
                            echo '<h4>' . 'author: ' . $disc['author'] . ':'  . '</h4>';
                            echo '<h5>' . 'year: ' . $disc['year'] . ':'  . '</h5>';
                        echo "</div>";
                    }
                ?>
            </div>
        </section>
        
    </main>
</body>
</html>


    
