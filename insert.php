<?php
require "settings/init.php";

if (!empty($_POST["data"])){
    $data = $_POST["data"];

    $sql = "INSERT INTO musik (musikTitel, musikKunstner, musikAlbum, musikTid) VALUES(:musikTitel, :musikKunstner, :musikAlbum, :musikTid)";
$bind = [":musikTitel" => $data["musikTitel"], ":musikKunstner" => $data["musikKunstner"], ":musikAlbum" => $data["musikAlbum"], ":musikTid" => $data["musikTid"]];

    $db->sql($sql, $bind,false);

    echo "Produktet er nu sat ind . <a href='insert.php'>Indsæt flere produkter</a>";
    exit;
}
?>


<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>indsæt til database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/ys9ivv1x233eg2mrq0d4prcpenkssm67kjeagomz2eix9ubu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>

<form method="post" action="insert.php" enctype="multipart/form-data">
    <div class="row">

        <div class="col-12">
            <label class="form-label" for="musikBilled">Produkt billed</label>
            <input type="file" class="form-control" id="musikBilled" name="musikBilled">
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="musikTitel">Musik Titel</label>
                <input class="form-control" type="text" name="data[musikTitel]" id="musikTitel" placeholder="" value="">
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="musikKunstner">Musik Kunstner</label>
                <input class="form-control" type="text" step="0.1" name="data[musikKunstner]" id="musikKunstner" placeholder="" value="">
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="musikAlbum">Musik Album</label>
                <input class="form-control" type="text" step="0.1" name="data[musikAlbum]" id="musikAlbum" placeholder="" value="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="musikTid">Musik Tid</label>
                <input class="form-control" type="number" step="0.01" name="data[musikTid]" id="musikTid" placeholder="" value="">
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="musikRating">Musik rating</label>
                <input class="form-control" type="number" step="0.01" step="0.01" name="data[musikRating]" id="musikRating" placeholder="" value="">
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="musikTid">Musik Genre</label>
                <input class="form-control" type="text" name="data[musikGenre]" id="musikGenre" placeholder="" value="">
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="musikBeskrivelse">Musik Beskrivelse</label>
                <textarea class="form-control" type="text" name="data[musikBeskrivelse]" id="musikBeskrivelse" placeholder="" value=""></textarea>
            </div>
        </div>

        <div class="col-12 col-md-6 offset-md-6">
<button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret produkt</button>
        </div>
    </div>
</form>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ]
    });
</script>

</body>
</html>