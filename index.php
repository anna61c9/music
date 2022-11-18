<?php
require "settings/init.php";

$musik = $db->sql("SELECT * FROM musik");
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="https://cdn.tiny.cloud/1/ys9ivv1x233eg2mrq0d4prcpenkssm67kjeagomz2eix9ubu/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container-fluid">
        <a class="navbar-brand ms-2" href="index.html"><img src="images/logo.png" alt="Home"></a>
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
                    <a class="nav-link active p-2" style="color: rgba(0,0,255,0.85)" aria-current="page" href="...">Artists</a>
                    <a class="nav-link p-2" style="color:rgba(0, 0, 255,0.85);" href="...">Behind the music</a>
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

<div class="container-fluid justify-content-center col-9">
    <div class="row">
        <div class="col-8">
            <h1 style="color: #62388e">Liste</h1>
        </div>
        <div class="col-3 m-3 justify-content-end">
            <select class="form-select bg-minfarve border-minfarve" style="color:#ced4da"
                    aria-label="Default select example">
                <option selected style="color:#ced4da">Top 10</option>
                <option value="1" style="color:#ced4da">Genre</option>
                <option value="2" style="color:#ced4da">Alphabetic</option>
            </select>
        </div>
    </div>
</div>

<?php
foreach ($musik as $musikken) {
    ?>

    <div class="container">
        <div class="card col-12 col-md-6 col-lg-5 p-2 m-3 shadow">
            <div class="row">
                <div class="col-4">
                    <?php
                    echo "<img src='images/" . $musikken->musikBilled . "' class='card-img-top' alt='cover'>"
                    ?>
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <a href="sang.php"><h5 class="card-title"><?php echo $musikken->musikTitel; ?></h5></a>
                        <p class="card-text" style="color: #7f8793">     <?php
                            echo $musikken->musikKunstner
                            ?>
                            <br>
                            <?php
                            echo $musikken->musikAlbum
                            ?></p>
                        <?php
                        echo $musikken->musikTid
                        ?>
                        <?php
                        echo $musikken->musikDato
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

<div class="container-fluid bg-minfarve">
    <div class="details">
        <div class="row justify-content-center">
            <div class="track-art col-3"></div>

            <div class="buttons align-items-center col-6">
                <div class="prev-track" onclick="prevTrack()">
                    <i class="fa fa-step-backward fa-2x"></i>
                </div>
                <div class="playpause-track" onclick="playpauseTrack()">
                    <i class="fa fa-play-circle fa-5x"></i>
                </div>
                <div class="next-track" onclick="nextTrack()">
                    <i class="fa fa-step-forward fa-2x"></i>
                </div>
            </div>
            <div class="col-3 bg-success"></div>
        </div>

        <div class="row">
            <div class="track-name col-12">Track Name</div>
            <div class="track-artist col-3">Track Artist</div>

            <div class="slider_container col-6">
                <div class="current-time">00:00</div>
                <input type="range" min="1" max="100"
                       value="0" class="seek_slider" onchange="seekTo()">
                <div class="total-duration">00:00</div>
            </div>

            <div class="slider_container-v col-3">
                <i class="fa fa-volume-down"></i>
                <input type="range" min="1" max="100"
                       value="99" class="volume_slider" onchange="setVolume()">
                <i class="fa fa-volume-up"></i>
            </div>
        </div>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>
</body>
</html>