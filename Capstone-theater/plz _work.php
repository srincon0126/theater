<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/plz.css">
    <title>Document</title>
</head>

<body>
    <h1>
        hello
    </h1>



    <?php
    $seat = 0;

    for ($row = 1; $row <= 6; $row++) {
    ?>
        <div class="row_seat">
            <div>
                <?php
                for ($colume = 1; $colume <= 10; $colume++) {
                    $seat++;
                ?>
                    <label class="seat-container">
                        <input checked type="checkbox" name="seat[]" value="<?= $seat ?>" class="seat">
                        <span class="checkmark"></span>

                    </label>
            </div>
        </div>
    <?php
                }
    ?>

<?php
    }


?>
</body>

</html>