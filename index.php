<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import css -->
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP-VueJs Dischi</title>
</head>
<?php 
    /* import database */
    include __DIR__ . '/data/database.php';
?>
<body>
    <div id="root" class="container">
        <!-- header -->
        <header>
            <div id="container-header">
                <div class="logoSpotify">
                    <a href="#">
                        <img src="./img/spotify-logo.svg" alt="Spotify logo">
                    </a>
                    <a class="label_search" href="#">
                        <div class="search">
                            <label for="type"> </label>
                            <select name="type" id="type" >
                                <option value=""> Scegli il tuo genere</option>
                                <option> pop </option>
                                <option> jazz </option>
                                <option> metal </option>
                            </select>
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <!-- main -->
        <main>
            <section id="container-main">
                <div v-for="(album, index) in albumList" :key="index" class="dischi">
                    <img class="img-dischi" :src="album.poster" :alt="album.poster">
                    <h2> {{ album.title }} </h2>
                    <h4> {{ album.author }} </h4>
                    <h5> {{ album.year }} </h5>
                </div>
            </section>
        </main>
    </div>

    <!-- import vue js -->
    <script src="http://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- import cdnjs  axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- import js -->
    <script src="js/main.js"></script>
</body>
</html>