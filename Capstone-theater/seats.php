<?php
include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/theater.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title></title>
</head>

<body id="seating_chart">

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

                    <a class="nav-link" href="otherActives.php">Other Actives</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- /Navbar -->
    <?php

    // fetching movie name and time
    $my_sql = 'SELECT *  FROM movies WHERE movieid=' . (int) $_REQUEST['movieid'];
    $result = $db->query($my_sql);
    $movie = $result->fetch(PDO::FETCH_ASSOC);


    $showtime = $_REQUEST['showtime'];

    // selecting none reserve seat
    $sql = 'SELECT * FROM seat WHERE movieid=' . (int) $_REQUEST['movieid'] . " AND theaterid=" . $_REQUEST['theaterid'] . " AND  showtime='" . $_REQUEST['showtime'] . "'";
    echo $sql;
    $result = $db->query($sql);
    $reserve = $result->fetchAll(PDO::FETCH_ASSOC);
    $taken = [];
    foreach ($reserve as $row) {
        $taken[$row['seatid']] = true;
    }
    ?>

    <main>
        <div class="container my-5">
            <a href="tickets.php" class="backToMoive">
                <h1> <?= $movie['title'] ?> </h1>
            </a>
            <p>
                <?= $showtime?>
            </p>
        </div>
        <ul class="showcase">
            <li>
                <div class="seat"></div>
                <small>Available</small>
            </li>
            <li>
                <div class="seat selected"></div>
                <small>selected</small>
            </li>
            <li>
                <div class="seat sold"></div>
                <small>sold</small>
            </li>
        </ul>
        <form action="thankyou.php">
            <input type="hidden" name="movieid" value="<?= $_REQUEST['movieid'] ?>">
            <input type="hidden" name="theaterid" value="<?= $_REQUEST['theaterid'] ?>">
            <input type="hidden" name="showtime" value="<?= $_REQUEST['showtime'] ?>">

            <aside>
                <div class="seat_container">
                    <div class="screen"></div>
                </div>
                <div>
                    <?php
                    $seat = 0;

                    for ($row = 1; $row <= 6; $row++) {
                    ?>
                        <div class="row_seat">

                            <?php
                            for ($colume = 1; $colume <= 10; $colume++) {
                                $seat++;
                            ?>
                                <label class="seat-container">
                                    <input <?php if (array_key_exists($seat,$taken)){ ?>disabled <?php } ?> type="checkbox" name="seat[]" value="<?= $seat ?>" class="seat">
                                    <span class="checkmark"></span>

                                </label>
                            <?php
                            }
                            ?>
                        </div>
                </div>
            <?php
                    }


            ?>

            <button class="seatbtn" type="submit"> click here </button>

            </aside>
        </form>

    </main>













    <script src="javascript/theaters.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>