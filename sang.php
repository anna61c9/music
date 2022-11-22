<?php
require "settings/init.php";

$musik = $db->sql("SELECT * FROM musik WHERE musikId=6");
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Music</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/ys9ivv1x233eg2mrq0d4prcpenkssm67kjeagomz2eix9ubu/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container-fluid">
        <a class="navbar-brand ms-2" href="index.php"><img src="images/logo.png" alt="Home"></a>
        <div class="order-lg-start d-flex">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

                <span class="container" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav container-fluid d-flex justify-content-between">
                <div class="container-fluid d-flex align-self-center align-items-baseline">
                    <a class="nav-link active p-2" style="color:rgba(100,150,230,0.85);" aria-current="page" href="...">Artists</a>
                    <a class="nav-link p-2" style="color:rgba(100,150,230,0.85);" href="...">Behind the music</a>
                </div>
                <a class="nav-link order-lg-start justify-content-lg-end p-3"
                   href="..."><img src="images/Instagram.png" alt="social"></a>

                <a class="nav-link order-lg-start justify-content-lg-end p-3"
                   href="..."><img src="images/Twitter.png" alt="social"></a>
            </div>
        </div>
    </div>
</nav>

<br><br>


<div class="container beskrivelse justify-content-center">

    <?php
    foreach ($musik

    as $musikken) {
    ?>

    <div class="container d-flex">
        <div class="row">
            <div class="col-lg-6 ">
                <img src="images/ace%20of%20spades.jpg" class="card-img-top" style="max-width: 30rem;" alt="cover">
            </div>

            <div class="col-lg-4">
                <a href="sang.php"><h5 class="card-title"
                                       style="color:rgba(100,150,230,0.85);"><?php echo $musikken->musikTitel; ?></h5>
                </a>
                <p class="card-text" style="color: #7f8793">     <?php
                    echo $musikken->musikKunstner
                    ?>
                    <br>
                    <?php
                    echo $musikken->musikAlbum
                    ?></p>
                <br>
                <?php
                echo $musikken->musikTid
                ?>
                <br><br>

                <?php
                echo $musikken->musikGenre
                ?>
                <?php
                echo $musikken->musikBeskrivelse
                ?>
                <br><br>

                <?php
                echo $musikken->musikRating
                ?>

                <br><br>
                <?php
                echo $musikken->musikDato
                ?>
            </div>
        </div>
    </div>
</div>
<?php
}
?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>
</body>
</html>
