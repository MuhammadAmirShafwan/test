<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A simple template to mobile landing page">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Alexandre Sanlim">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>App Name</title>

    <!--add animation: gradient 60s ease infinite; to animation gradient, custom gradient here: https://cssgradient.io/-->
    <style>
        body {
            background: rgb(255, 64, 129);
            background: linear-gradient(150deg, rgba(255, 64, 129, 1) 0%, rgba(63, 81, 181, 1) 21%, rgba(48, 63, 159, 1) 52%);
            background-size: 400% 400%;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body class="bg-light">

    <main class="container">
        <div class="d-flex p-3 text-white my-3 rounded">
            <div class="row">

                <!-- SET YOUR LOGO HERE -->
                <figure class="figure col-lg-3"><img src="img/logo.jpg" class="figure-img img-fluid rounded"></figure>

                <div class="col-lg-9">

                    <h1>SIBEKA</h1>
                    <p class="lead">Mussum Ipsum, cacilds vidis litro abertis. Si u mundo tá muito paradis? Toma um mé
                        que o mundo vai girarzis! Admodum accumsan disputationi eu sit. Vide electram sadipscing et per.
                        Interagi no mé, cursus quis, vehicula ac nisi. Aenean aliquam molestie leo, vitae iaculis nisl.
                    </p>
                    {{-- <p><img src="src/img/badges/ios.svg" width="35%"><img
                            src="https://cdn.rawgit.com/steverichey/google-play-badge-svg/master/img/en_get.svg"
                            width="43%"></p> --}}

                </div>
            </div>

        </div>

        <div id="myCarousel" class="carousel slide my-3 rounded" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#000" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h2>Benefit 1</h2>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#000" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h2>Benefit 2</h2>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#000" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h2>Benefit 3</h2>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="my-3 p-3 rounded">
            <h1 class="pb-2 mb-0 text-white">Screenshots</h1>

            <!-- SET YOUR SCREENSHOTS HERE -->
            <div class="row align-items-center">
                <figure class="figure col-lg-3"><img
                        src="https://via.placeholder.com/1242x2208.png/000000/FFFFFF/?text=SCREENSHOT%201"
                        class="figure-img img-fluid rounded"></figure>
                <figure class="figure col-lg-3"><img
                        src="https://via.placeholder.com/1242x2208.png/000000/FFFFFF/?text=SCREENSHOT%202"
                        class="figure-img img-fluid rounded"></figure>
                <figure class="figure col-lg-3"><img
                        src="https://via.placeholder.com/1242x2208.png/000000/FFFFFF/?text=SCREENSHOT%203"
                        class="figure-img img-fluid rounded"></figure>
                <figure class="figure col-lg-3"><img
                        src="https://via.placeholder.com/1242x2208.png/000000/FFFFFF/?text=SCREENSHOT%204"
                        class="figure-img img-fluid rounded"></figure>
            </div>

        </div>

    </main>

    <footer class="text-muted py-5" style="background-color: black;">
        <div class="container text-white">

            <p>Created with love from Brazil by <a href="https://github.com/alexandresanlim">Alexandre Sanlim</a> fork
                on <a href="https://github.com/alexandresanlim/MobileApp.SimpleLandingPage.Template">Github</a>.</p>
        </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
    -->



</body>

</html>
