<?php   
    /* @var mysqli $conn */
    include('app/db/db-conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME | siteName</title>

    <link rel="icon" href="">

<!--    Linking of the css files-->
    <link rel="stylesheet" href="/public/assets/css/fonts.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/header.css">
    <link rel="stylesheet" href="/public/assets/css/footer.css">
    <link rel="stylesheet" href="/public/assets/css/home.css">

<!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="/public/assets/js/app.js"></script>
</head>
<body>

<header>
<!--    Getting the header document-->
    <?php include('public/core/header.php');?>
</header>

<main>
<section id="home">
            <h2>Home</h2>
            <h1>Auto - Image Slider HTML and CSS</h1>
            <div class="slider-frame">
                <div class="slide-images">
                        <div class="img-container">
                            <img src="public/assets/img/Tuin1.webp">
                        </div>
                        <div class="img-container">
                            <img src="public/assets/img/Tuin2.jpeg">
                        </div>
                        <div class="img-container">
                            <img src="public/assets/img/Tuin3.jpeg">
                        </div>
                </div>
            </div>
        </section>

            <div class="about-section">
        <h1>About Me</h1>
        <p>Wat tekst over mij en wat ik doe.</p>
        <p>Dit is hoppelijk resposive</p>
        </div>

        <div class="row">
        <div class="column">
            <div class="card">
            <img src="/w3images/team1.jpg" alt="Hendrick.BV" style="width:100%">
            <div class="container">
                <h2>Hendrik Van Dijk</h2>
                <p class="title">Founder</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>HendrikVanDijk@example.com</p>
                <p><button class="button">Contact</button></p>
            </div>
            </div>
        </div>
        </section>
</main>

<footer>
<!--    Getting the footer document-->
    <?php include('public/core/footer.php'); ?>
</footer>

</body>
</html>