<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title> PHP Dischi </title>
</head>

<body>

    <?php 
    /* import database */
    include __DIR__ . '/database.php';

    //ciclo for
    for($i = 0; $i < count($db); $i++ ) {
        echo '<li>' . $db[$i]['poster'] . '</li>' . '<br/>';
    }
    ?>
    
    
    <header>
        <div id="container-header">
            <div class="logoSpotify">
                <a href="#">
                <img src="./img/spotify-logo.svg" alt="Spotify logo">
                </a>
            </div>
        </div>
    </header>
    <main>
        <section id="container-main">
            <div class="box-dischi">
                <div class="disc">
                    <div class="cardDisc">
                        <!-- <img src="" alt=""> -->
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>