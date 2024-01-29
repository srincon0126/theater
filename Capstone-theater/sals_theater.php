<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/theater.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>sals_theather</title>
</head>

<body id="sals_theather">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand order-1 mr-0 display-4 href="#>Sal's theater</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a id="home" class="nav-link active" aria-current="page" href="#home">Home</a>
          <a class="nav-link" href="#See A Movie">See A Movie</a>

          <a class="nav-link" href="otherActives.php">Other Actives</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->

  <!-- main movie list  -->

  <main id="#See A Movie">
    <div class="container mt-5">
      <div class="row ">

<?php  include 'connect.php';
$sql ='SELECT * FROM movies';
$result= $db->query($sql);

while($movie = $result->fetch(PDO::FETCH_ASSOC)) {
  ?>
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/<?= $movie['img'] ?>" class="rounded " alt="<?= $movie['title']  ?>">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4"><?= $movie['title']  ?></h1>
                  <p class="card-text">
                    <strong> Rating: </strong><?= $movie['rating']  ?>
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    <?= $movie['cast']  ?>
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> <?= $movie['duration'] ?> min 
                  </p>
                  <a class="btn btn-primary me-4" href="<?= $movie['trailer'] ?>" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="tickets.php?movieid=<?=$movie['movieid'] ?>" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>


  <?php 
}

?>


<!--
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/610VhIS8xfL._AC_SY879_.jpg" class="rounded" atl="elf">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4">Elf</h1>
                  <p class="card-text">
                    <strong> Rating: </strong> PG
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    Zooey Deschanel, James Caan, Will Ferrell, Peter Dinklage, Mary Steenburgen
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> 97 Min
                  </p>
                  <a class="btn btn-primary me-4" href="https://youtu.be/14o38xfHlXc" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="elf.html" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ">
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/violent_Night.jpg" class="rounded" alt="violent_Night">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4">Violent Night</h1>
                  <p class="card-text">
                    <strong> Rating: </strong> R
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    Cam Gigandet, John Leguizamo, Beverly D'Angelo, David Harbour, Alexis Louder, Alex Hassell, Edi
                    Patterson
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> 112 Min
                  </p>
                  <a class="btn btn-primary me-4" href="https://youtu.be/a53e4HHnx_s" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="violentNight.html" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/topgun.jpg" class="rounded" alt="top gun">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4">Top Gun: Maverick</h1>
                  <p class="card-text">
                    <strong> Rating: </strong> PG13
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    Tom Cruise, Miles Teller, Ed Harris, Val Kilmer, Jennifer Connelly, Jon Hamm, Lewis Pullman, Glen
                    Powell, Charles Parnell, Danny Ramirez, Bashir Salahuddin, Monica Barbaro, Greg Tarzan Davis, Jay
                    Ellis
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> 131 Min
                  </p>
                  <a class="btn btn-primary me-4" href="https://youtu.be/g4U4BQW9OEk" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="topgun.html" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ">
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/the menu.png" class="rounded" alt=" the menu">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4">The Menu</h1>
                  <p class="card-text">
                    <strong> Rating: </strong> R
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    John Leguizamo, Janet McTeer, Ralph Fiennes, Nicholas Hoult, Anya Taylor-Joy, Reed Birney, Judith
                    Light, Hong Chau, Paul Adelstein, Aimee Carrero, Mark St. Cyr, Rob Yang, Arturo Castro
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> 107 Min
                  </p>
                  <a class="btn btn-primary me-4" href="https://youtu.be/Kx55Rkynhtk" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="theMenu.html" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/Babylon.webp" class="rounded" alt="Babylon">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4">Babylon</h1>
                  <p class="card-text">
                    <strong> Rating: </strong> R
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    Lukas Haas, Olivia Wilde, Brad Pitt, Max Minghella, Tobey Maguire, Margot Robbie, Katherine
                    Waterston, Rory Scovel, Jean Smart, Jovan Adepo, Samara Weaving, P.J. Byrne, Ethan Suplee, Eric
                    Roberts, Olivia Hamilton, Phoebe Tonkin, Li Jun Li, Diego Calva, Flea.
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> 189 Min
                  </p>
                  <a class="btn btn-primary me-4" href="https://youtu.be/i5pxUQecM3Y" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="babylon.html" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ">
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/puss-in-boots-the-last-wish_ry520xvc_480x.progressive.webp" class="rounded"
                  alt=" puss in boots">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4">Puss in Boots: The Last Wish</h1>
                  <p class="card-text">
                    <strong> Rating: </strong> PG
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    Antonio Banderas, Salma Hayek, Ray Winstone, Florence Pugh, Olivia Colman, Da'Vine Joy Randolph,
                    Samson Kayo, John Mulaney, Anthony Mendez, Harvey Guillén, Wagner Moura
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> 103 Min
                  </p>
                  <a class="btn btn-primary me-4" href="https://youtu.be/xgZLXyqbYOc" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="pussInBoots.html" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/megan.jpg" class="rounded" alt="megan">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4">Megan</h1>
                  <p class="card-text">
                    <strong> Rating: </strong> PG13
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    Allison Williams, Brian Jordan Alvarez, Jen Van Epps, Lori Dungey, Stephane Garneau-Monten, Violet
                    McGraw, Ronny Chieng
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> 102 Min
                  </p>
                  <a class="btn btn-primary me-4" href="https://youtu.be/BRb4U99OU80" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="megan.html" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ">
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/devotion.jpg" class="rounded" alt="devotion">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4">Devotion</h1>
                  <p class="card-text">
                    <strong> Rating: </strong> PG13
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    Jonathan Majors, Glen Powell, Thomas Sadoski, Joe Jonas, Spencer Neville
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> 139 Min
                  </p>
                  <a class="btn btn-primary me-4" href="https://youtu.be/nIvBBd8pU1s" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="devotion.html" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/IJWD.jpg" class="rounded" alt="I JUST WANNA DANCE">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4">I Wanna Dance With Somebody</h1>
                  <p class="card-text">
                    <strong> Rating: </strong> TBC
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    Stanley Tucci, Ashton Sanders, Nafessa Williams, Clarke Peters, Tamara Tunie, Naomi Ackie
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> 120 Min
                  </p>
                  <a class="btn btn-primary me-4" href="https://youtu.be/WcBKfSOKYdc" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="iWannaDanceWith.html" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ">
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/Black_Panther_Wakanda_Forever.webp" class="rounded" alt="Wakanda">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4">Black Panther: Wakanda Forever</h1>
                  <p class="card-text">
                    <strong> Rating: </strong> PG13
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    Martin Freeman, Lupita Nyong'o, Danai Gurira, Winston Duke, Letitia Wright, Tenoch Huerta, Michaela
                    Coel, Mabel Cadena, Dominique Thorne, Alex Livanalli
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> 161 Min
                  </p>
                  <a class="btn btn-primary me-4" href="https://youtu.be/_Z3QKkl1WyM" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="blackPanther.html" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-3" style="max-width: 720px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/avatar.jpg" class="rounded" alt="avatar 2">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1 class="card-title display-4">Avatar: The Way of Water</h1>
                  <p class="card-text">
                    <strong> Rating: </strong> UR
                  </p>
                  <p class="card-text">
                    <strong> Cast: </strong>
                    Zoe Saldana, Sam Worthington, Kate Winslet, David Thewlis, Giovanni Ribisi, Sigourney Weaver,
                    Stephen Lang, Edie Falco, Oona Chaplin, Joel David Moore, Cliff Curtis
                  </p>
                  <p class="card-text">
                    <strong> Duration </strong> 190 Min
                  </p>
                  <a class="btn btn-primary me-4" href="https://youtu.be/o5F8MOz_IDw" role="button" target=blank>
                    Trailer </a>
                  <a class="btn btn-primary" href="avatar.html" role="button"> Buy Ticket </a>
                </div>
              </div>
            </div>
          </div>
        </div>
-->
      </div>
    </div>

  </main>


















<script src="java/theaters.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>