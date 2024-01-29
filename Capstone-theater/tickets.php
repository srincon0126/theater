<?php  include 'connect.php';



$sql ='SELECT * FROM movies WHERE movieid='.(int) $_REQUEST['movieid'] ;
$result= $db->query($sql);
$movie = $result->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/theater.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title><?= $movie['title'] ?></title>
</head>

<body id="ba">
 
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand order-1 mr-0 display-4 href=" #">Sal's theater</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a id="home" class="nav-link active" aria-current="page" href="sals_theater.php #home ">Home</a>
          <a class="nav-link" href="sals_theater.php #See A Movie">See A Movie</a>

          <a class="nav-link" href="otherActives.php">Other Actives</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->
  


  <!-- main -->
  <main>
    <div class="container mt-5 mb-3  pt-4 text-center" id="box">
      <h1 class="h1"><?=$movie['title'] ?></h1>
    </div>
    <div class="container text-center">
      <div class="row mt-3 pt-3" id="BlackAdam">
        <div class="col">
          <img src="images/<?= $movie['img'] ?>" alt="<?= $movie['title'] ?>" class="movieHero">
        </div>
        <div class="col ">
          <p>
            <strong> Description</strong>
          </p>
          <p>
          <?= $movie['description']?>
          </p>
          <p>
            <strong> Rating: </strong> <?= $movie['rating']?>
          <p>
            <strong> Cast: </strong>
            <?= $movie['cast']?>
          </p>
          <p>
            <strong> Duration </strong> <?= $movie['duration']?> Min
          </p>
        </div>
      </div>
    </div>
  <aside>
    <h2 class="container text-center mt-5 jus">
      SHOW TIMES
    </h2>
    <div class="contanier d-flex justify-content-around my-5">

      <?php 
      $sql = 'SELECT *, DATE_FORMAT(showtime, "%l:%i%p") AS showtime_formatted FROM showtimes WHERE movieid='.(int) $_REQUEST['movieid'];
      $result= $db->query($sql);
    
while($showtime = $result->fetch(PDO::FETCH_ASSOC)) {
  ?>
  <a class="btn btn-info" href="seats.php?movieid=<?=$showtime['movieid'] ?>&theaterid=<?= $showtime['theaterid'] ?>&showtime=<?= $showtime['showtime'] ?>" role="button"> <?= $showtime['showtime_formatted'] ?> </a>





<?php
}
      ?>
      <!-- <a class="btn btn-info" href="BAseating/seatingChartBA2pm.html" role="button"> 2:00PM </a>
      <a class="btn btn-info" href="BAseating/scBA340pm.php" role="button"> 3:40PM </a>
      <a class="btn btn-info" href="BAseating/seating515.html" role="button"> 5:15PM </a>
      <a class="btn btn-info" href="BAseating/seating630.html" role="button"> 6:30PM </a>
      <a class="btn btn-info" href="BAseating/seating900.html" role="button"> 9:00PM </a>
      <a class="btn btn-info" href="BAseating/seating1015.html" role="button"> 10:15PM </a> -->

    </div>
  </aside>
    

  </main>
  <!-- /main -->










  <script src="javascript/theaters.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</body>

</html>