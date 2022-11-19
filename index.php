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

<div class="container">

    <div class="musik">
        <div class="filter p-5">
            <div class="row">
                <div class="col-md-4">
                    <input type="search" class="form-control nameSearch" placeholder="søg">
                </div>
            </div>
        </div>

        <div class="items">

        </div>
    </div>
</div>

<br><br>

<?php
foreach ($musik as $musikken) {
    ?>

    <div class="container">
        <div class="row">
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
    </div>
    <?php
}
?>


<div class="container-fluid bg-minfarve">
    <div class="container details pt-3">
        <div class="row justify-content-center mt-3">
            <div class="track-art col-lg-3 col-12"></div>

            <div class="track-name col-12 d-lg-none d-flex justify-content-center">Track Name</div>
            <div class="track-artist col-12 d-lg-none d-flex justify-content-center">Track Artist</div>

            <div class="buttons align-items-center col-lg-6 d-flex justify-content-center">
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
            <div class="col-lg-3"></div>
        </div>

        <div class="row">
            <div class="track-name col-lg-12 d-none d-lg-block">Track Name</div>
            <div class="track-artist col-lg-3 d-none d-lg-block">Track Artist</div>

            <div class="slider_container col-lg-6">
                <div class="current-time d-none d-mb-block d-lg-block">00:00</div>
                <input type="range" min="1" max="100"
                       value="0" class="seek_slider" onchange="seekTo()">
                <div class="total-duration d-none d-mb-block d-lg-block">00:00</div>
            </div>

            <div class="slider_container col-lg-6 d-flex d-block d-lg-none">
                <div class="row justify-content-center">
                    <div class="current-time col-6">00:00</div>
                    <div class="total-duration col-6">00:00</div>
                </div>
            </div>

            <div class="slider_container col-3 d-none d-dm-block d-lg-block">
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

<script type="module">
    import Musik from "./js/musik.js";

    const musik = new Musik();
    musik.init();
</script>

<script>
    let now_playing = document.querySelector(".now-playing");
    let track_art = document.querySelector(".track-art");
    let track_name = document.querySelector(".track-name");
    let track_artist = document.querySelector(".track-artist");

    let playpause_btn = document.querySelector(".playpause-track");
    let next_btn = document.querySelector(".next-track");
    let prev_btn = document.querySelector(".prev-track");

    let seek_slider = document.querySelector(".seek_slider");
    let volume_slider = document.querySelector(".volume_slider");
    let curr_time = document.querySelector(".current-time");
    let total_duration = document.querySelector(".total-duration");

    let track_index = 0;
    let isPlaying = false;
    let updateTimer;

    // Create new audio element
    let curr_track = document.createElement('audio');

    // Define the tracks that have to be played
    let track_list = [
        {
            name: "Night Owl",
            artist: "Broke For Free",
            image: "https://images.pexels.com/photos/2264753/pexels-photo-2264753.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=250&w=250",
            path: "https://files.freemusicarchive.org/storage-freemusicarchive-org/music/WFMU/Broke_For_Free/Directionless_EP/Broke_For_Free_-_01_-_Night_Owl.mp3"
        },
        {
            name: "Enthusiast",
            artist: "Tours",
            image: "https://images.pexels.com/photos/3100835/pexels-photo-3100835.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=250&w=250",
            path: "https://files.freemusicarchive.org/storage-freemusicarchive-org/music/no_curator/Tours/Enthusiast/Tours_-_01_-_Enthusiast.mp3"
        },
        {
            name: "Shipping Lanes",
            artist: "Chad Crouch",
            image: "https://images.pexels.com/photos/1717969/pexels-photo-1717969.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=250&w=250",
            path: "https://files.freemusicarchive.org/storage-freemusicarchive-org/music/ccCommunity/Chad_Crouch/Arps/Chad_Crouch_-_Shipping_Lanes.mp3",
        },
    ];


    function loadTrack(track_index) {
        clearInterval(updateTimer);
        resetValues();
        curr_track.src = track_list[track_index].path;
        curr_track.load();

        track_art.style.backgroundImage = "url(" + track_list[track_index].image + ")";
        track_name.textContent = track_list[track_index].name;
        track_artist.textContent = track_list[track_index].artist;
        now_playing.textContent = "PLAYING " + (track_index + 1) + " OF " + track_list.length;

        updateTimer = setInterval(seekUpdate, 1000);
        curr_track.addEventListener("ended", nextTrack);
        random_bg_color();
    }

    function resetValues() {
        curr_time.textContent = "00:00";
        total_duration.textContent = "00:00";
        seek_slider.value = 0;
    }

    // Load the first track in the tracklist
    loadTrack(track_index);

    function playpauseTrack() {
        if (!isPlaying) playTrack();
        else pauseTrack();
    }

    function playTrack() {
        curr_track.play();
        isPlaying = true;
        playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-5x"></i>';
    }

    function pauseTrack() {
        curr_track.pause();
        isPlaying = false;
        playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
    }

    function nextTrack() {
        if (track_index < track_list.length - 1)
            track_index += 1;
        else track_index = 0;
        loadTrack(track_index);
        playTrack();
    }

    function prevTrack() {
        if (track_index > 0)
            track_index -= 1;
        else track_index = track_list.length;
        loadTrack(track_index);
        playTrack();
    }

    function seekTo() {
        let seekto = curr_track.duration * (seek_slider.value / 100);
        curr_track.currentTime = seekto;
    }

    function setVolume() {
        curr_track.volume = volume_slider.value / 100;
    }

    function seekUpdate() {
        let seekPosition = 0;

        if (!isNaN(curr_track.duration)) {
            seekPosition = curr_track.currentTime * (100 / curr_track.duration);

            seek_slider.value = seekPosition;

            let currentMinutes = Math.floor(curr_track.currentTime / 60);
            let currentSeconds = Math.floor(curr_track.currentTime - currentMinutes * 60);
            let durationMinutes = Math.floor(curr_track.duration / 60);
            let durationSeconds = Math.floor(curr_track.duration - durationMinutes * 60);

            if (currentSeconds < 10) { currentSeconds = "0" + currentSeconds; }
            if (durationSeconds < 10) { durationSeconds = "0" + durationSeconds; }
            if (currentMinutes < 10) { currentMinutes = "0" + currentMinutes; }
            if (durationMinutes < 10) { durationMinutes = "0" + durationMinutes; }

            curr_time.textContent = currentMinutes + ":" + currentSeconds;
            total_duration.textContent = durationMinutes + ":" + durationSeconds;
        }
    }

</script>

</body>
</html>