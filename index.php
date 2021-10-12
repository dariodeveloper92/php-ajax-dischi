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
    include __DIR__ . '/database.php';
        
        foreach($db as $key => $poster) {
            echo '<img>' . 'poster: ' . $poster['poster'] . ':'  . '</h5>';
            echo '<h2>' . 'title: ' . $poster['title'] . ':'  . '</h2>';
            echo '<h4>' . 'author: ' . $poster['author'] . ':'  . '</h4>';
            echo '<h5>' . 'year: ' . $poster['year'] . ':'  . '</h5>';
        }
            

?>

<body>

    

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
                        <img src="https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" alt="img">
                        <h2> New Jersey </h2>
                        <h4> Bon Jovi </h4>
                        <h5> 1988 </h5>
                    </div>
                    <div class="cardDisc">
                        <?php 
                            include __DIR__ . '/database.php';
                                foreach($db as $key => $poster) {
                                    echo '<img>' . $poster['poster'] ;
                                    echo '<h2>' . 'title: ' . $poster['title'] . ':'  . '</h2>';
                                    echo '<h4>' . 'author: ' . $poster['author'] . ':'  . '</h4>';
                                    echo '<h5>' . 'year: ' . $poster['year'] . ':'  . '</h5>';
                                }
                            ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>