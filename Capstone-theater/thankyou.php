<?php

include 'connect.php';


// var_dump($_REQUEST['seat']);
$movieid = $_REQUEST['movieid'];
$theaterid = $_REQUEST['theaterid'];
$showtime = $_REQUEST['showtime'];

if (!is_array($_REQUEST['seat'])) {
    header('Location: sals_theater.php');
    exit;
}
for ($i = 0; $i < sizeof($_REQUEST['seat']); $i++) {
    $seat = $_REQUEST['seat'][$i];
    $sql = "INSERT into seat (movieid,theaterid,showtime,seatid) VALUES ($movieid,$theaterid,'$showtime',$seat) ";
    // echo $sql;
    $db->query($sql);
}
$sql = 'SELECT * FROM movies WHERE movieid=' . $movieid;
$result = $db->query($sql);
$movie = $result->fetch(PDO::FETCH_ASSOC);

?>

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

<body>
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



    <div class="thankYouText">

            <h3>
                <?= $movie['title'] ?>
            </h3>
            <h3>
                <?= $showtime ?>
            </h3>
            <h3>
                Select Seat: <?= $seat?>
            </h3>

    </div>

    <div class="payment">
        <form action="">
            <div class="payment-row">
                <div class="title">
                    <h3 class="inform">
                        billing addresss
                    </h3>
                    <div class="inputbox">
                        <span>Full Name:</span>
                        <input type="text" placeholder="John Doe">
                    </div>
                    <div class="inputbox">
                        <span>Email:</span>
                        <input type="email" placeholder="example@example.com">
                    </div>
                    <div class="inputbox">
                        <span>Address:</span>
                        <input type="text" placeholder="Street locality">
                    </div>
                    <div class="inputbox">
                        <span>City</span>
                        <input type="text" placeholder="City">
                    </div>


                    <div class="flex">
                        <div class="inputbox">
                            <span>State</span>
                            <input type="text" placeholder="State">
                        </div>
                        <div class="inputbox">
                            <span>Zip code</span>
                            <input type="text" placeholder="123-456">
                        </div>
                    </div>
                </div>

                <div class="title">
                    <h3 class="inform">
                        Payment info
                    </h3>
                    <div class="inputbox">
                        <span> Cards accepted: </span>
                        <img src="images/Credit-Card-Logos.jpg" alt="Credit-Card-">
                    </div>
                    <div class="inputbox">
                        <span>Name on Card:</span>
                        <input type="text" placeholder="Mr. John Doe">
                    </div>
                    <div class="inputbox">
                        <span>Card Number</span>
                        <input type="text" placeholder="1111-2222-3333-4444">
                    </div>

                    <div class="inputbox">
                        <span>Exp Month</span>
                        <input type="text" placeholder="January">
                    </div>

                    <div class="flex">
                        <div class="inputbox">
                            <span>Exp Year</span>
                            <input type="text" placeholder="2023">
                        </div>
                        <div class="inputbox">
                            <span>CVV</span>
                            <input type="text" placeholder="123">
                        </div>
                    </div>
                </div>
            </div>
            <button class="submit-btnn"> Proceed to checkout</button>


        </form>


    </div>

    <!-- <br>
        <fieldset>
            <legend>
                <h2>
                    payment info
                </h2>
            </legend>
            <input type="text" placeholder="card number">
            <input type="text" placeholder="expiration date">
            <input type="text" placeholder="cvv/cvc">
            <br>
            <input type="text" placeholder="cardholder name">
            <br>
            <input type="text" placeholder="country">
            <input type="text" placeholder="street">
            <br>
            <input type="text" placeholder="street2">
            <input type="text" placeholder="zip code/postal code">
            <br>
            <input type="text" placeholder="city">
            <input type="text" placeholder="state/province">

 add an onEventLister
            to dispaly thank you after submit -->





    <script src="javascript/theaters.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>