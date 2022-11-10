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


<div class="container beskrivelse justify-content-center">

    <div class="row">
        <div class="card col-12 col-md-6 col-lg-5 p-2 m-3">
            <img src="images/ace%20of%20spades.jpg" class="card-img-top" style="width: 500vh" alt="cover">
        </div>

        <div class="card col-12 col-md-6 col-lg-5 p-2 m-3">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text" style="color: #7f8793">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Fusce quis lectus quis sem lacinia nonummy. Proin mollis lorem non dolor.
                    In hac habitasse platea dictumst. Nulla ultrices odio.
                    Donec augue. Phasellus dui. Maecenas facilisis nisl vitae nibh.
                    Proin vel seo est vitae eros pretium dignissim.
                    Aliquam aliquam sodales orci. Suspendisse potenti.
                   </p> <br>

                <p class="card-text" style="color: #7f8793"> Nunc adipiscing euismod arcu. Quisque facilisis mattis lacus.
                    Fusce bibendum, velit in venenatis viverra, tellus ligula dignissim felis,
                    quis euismod mauris tellus ut urna. Proin scelerisque.
                    Nulla in mi. Integer ac leo. Nunc urna ligula, gravida a,
                    pretium vitae, bibendum nec, ante. Aliquam ullamcorper
                    iaculis lectus. Sed vel dui. Etiam lacinia risus vitae lacus.
                    Aliquam elementum imperdiet turpis.</p>

                <br>
                <a href="#"><img src="images/download.png" alt="social"></a>
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
