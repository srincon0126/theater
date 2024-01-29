<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/theater.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>

<body class="information">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand order-1 mr-0 display-4 href=" #">Sal's theater</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a id="home" class="nav-link active" aria-current="page" href="sals_theater.php #home ">Home</a>
                    <a class="nav-link" href="sals_theater.php #See A Movie">See A Movie</a>

                    <a class="nav-link" href="#Other Actives">Other Actives</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="container" id="carousel">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/arcarde2.jpg" class="d-block w-100" alt="arcade2">
                </div>
                <div class="carousel-item">
                    <img src="images/acrade3.jpg" class="d-block w-100" alt="arcade3">
                </div>
                <div class="carousel-item">
                    <img src="images/arcade4.jpg" class="d-block w-100" alt="arcade4">
                </div>
                <div class="carousel-item">
                    <img src="images/arcade6.jpg" class="d-block w-100" alt="arcade6">
                </div>
                <div class="carousel-item">
                    <img src="images/arcade5.jpg" class="d-block w-100" alt="arcade5">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
        <button onclick="thankYouKim()"> CLICK ME </button>
    </main>




    <!-- <div class="gallery">
        <div class="gallery-container">
            <img class="gallery-item gallery-item-1" src="images/arcarde2.jpg" alt="arcade1" data-index="1">
            <img class="gallery-item gallery-item-2" src="images/acrade3.jpg" alt="arcade2" data-index="2">
            <img class="gallery-item gallery-item-3" src="images/arcade4.jpg" alt="arcade3" data-index="3">
            <img class="gallery-item gallery-item-4" src="images/arcade6.jpg" alt="arcade4" data-index="4">

            <img class="gallery-item gallery-item-5" src="images/arcade5.jpg" alt="arcade1" data-index="5">
        </div>
    </div>
    <div class="gallery-controls"></div> -->









    <script src="javascript/theaters.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>