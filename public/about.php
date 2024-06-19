<?php
/* @var mysqli $conn */
include('../app/db/db-conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/about.css">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>Document</title>
</head>

<body>
<header>
    <?php include('core/header.php');?>
</header>

<main>
    <div id="bigContainer">
        <?php include
        "./placeholderArray.php";


        foreach ($diensten as $dienstBox) {
            ?>
            <div class="dienstBox">
                <div class="textBox">
                    <h2><?= $dienstBox["dienst"]; ?></h2> </br>
                    <p><?= $dienstBox["tekst"]; ?></p> </br>
                    <div class="buttonBox">
                        <button class="dienstButton">Meer info</button>
                    </div>
                </div>
                <div class="imageContainer" style='background-image: url("http://localhost<?= $dienstBox["img"] ?>");'>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</main>

<header>
    <?php include('core/footer.php');?>
</header>

</body>

</html>