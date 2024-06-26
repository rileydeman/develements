<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uitleg Diensten pagina</title>
    <link rel="icon" href="">

    <link rel="stylesheet" href="/public/assets/css/fonts.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/header.css">
    <link rel="stylesheet" href="/public/assets/css/footer.css">
    <link rel="stylesheet" href="/public/assets/css/slideshow.css">
    <script defer src="/public/assets/js/app.js"></script>
    <script defer src="/public/assets/js/slideshow2.js"></script>
</head>

<body>
    <header>
        <?php include "core/header.php"; ?>
    </header>
    <?php include "./placeholderArray.php";
    $id = $_GET["id"];
    $length = count($diensten);

    foreach ($diensten as $dienst) {
        if ($dienst["id"] == $id) {
            ?>

            <main>
                <div class="slideshow-container">
                    <div class="slides">
                        <div class="slide"><img src="<?= $dienst["cycleImage1"]; ?>" alt="Slide 1"></div>
                        <div class="slide"><img src="<?= $dienst["cycleImage2"]; ?>" alt="Slide 2"></div>
                        <div class="slide"><img src="<?= $dienst["cycleImage3"]; ?>" alt="Slide 3"></div>
                    </div>
                </div>
                <div class="navigation">
                    <button class="prev">&#10094;</button>
                    <button class="next">&#10095;</button>
                </div>
                <div class="thumbnails">
                    <div class="thumbnail" data-index="0" id="leftThumb">
                        <img src="<?= $dienst["cycleImage1"]; ?>" alt="Thumb 1" id="thumbnail1">
                    </div>
                    <div class="thumbnail" data-index="1" id="mainThumb">
                        <img src="<?= $dienst["cycleImage2"]; ?>" alt="Thumb 2" id="thumbnail2">
                    </div>
                    <div class="thumbnail" data-index="2" id="rightThumb">
                        <img src="<?= $dienst["cycleImage3"]; ?>" alt="Thumb 3" id="thumbnail3">
                    </div>
                </div>
                <?php
        }
    }
    ?>
    </main>

    <footer>
        <?php include "core/footer.php"; ?>
    </footer>
</body>

</html>