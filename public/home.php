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

    <script defer src="/public/assets/js/app.js"></script>
    <script defer src="/public/assets/js/slideshow.js"></script>
</head>
<body>

<header>
<!--    Getting the header document-->
    <?php include('public/core/header.php');?>
</header>

<main>
<section id="home">
    <div class="container">
        <div class="item item-1">
            <h1>Wij maken uw droomtuin realiteit.</h1><br>
            <h3>Een tuin is meer dan een vlakte gras. Een tuin is een plek waar u tot rust komt, waar onschatbare tijd wordt doorgebracht. Ik wil u het beste bieden zodat u de luxe kan ervaren dat u verdient.</h3>
        </div>
        <div class="item item-2 slideshow">
            <img src="public/assets/img/zwembad_modern.jpg" alt="Description of image">
            <img src="public/assets/img/nieuwtuin2.jpg" alt="Description of image">
            <img src="public/assets/img/nieuwtuin3.jpg" alt="Description of image">
        </div>
    </div>
</section>

<section id="short-info">
    <div class="short-info-container">
    <div class="short-info-container">
        <div class="icon-label">
            <img src="lawn-mower.png" alt="Renovatie">
            <p>Renovatie</p>
        </div>
        <div class="icon-label">
            <img src="pruning-shears.png" alt="Tuin Onderhoud">
            <p>Tuin Onderhoud</p>
        </div>
        <div class="icon-label">
            <img src="shovel.png" alt="Tuinaanleg">
            <p>Tuinaanleg</p>
        </div>
        <div class="icon-label">
            <img src="design-tools.png" alt="Tuinontwerp">
            <p>Tuinontwerp</p>
        </div>
    </div>
    </div>
</section>

<section id="over-mij">
    
</section>

<section class="testimonials">
    <div class="container2">
        <div class="section-main">
            <h2 class="title">wat onze clienten zeggen</h2>
        </div>
        <div class="testimonials-content">
            <div class="testimonials-slider.js">
                
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
