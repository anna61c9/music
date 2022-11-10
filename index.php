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

    <script src="https://cdn.tiny.cloud/1/ys9ivv1x233eg2mrq0d4prcpenkssm67kjeagomz2eix9ubu/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>

<body>

<?php

foreach ($musik as $musikken){
    ?>

   <?php
}
?>

<?php

foreach ($musik as $musikken){
    ?>

    <div class="card col-12 col-md-6 col-lg-5 p-2 m-3 shadow">
    <div class="row">
        <div class="col-4">
            <?php
            echo "<img src='images/".$musikken->musikBilled. "' class='card-img-top' alt='cover'>"
            ?>
        </div>
        <div class="col-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $musikken->musikTitel; ?></h5>
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
  <?php
}
?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>