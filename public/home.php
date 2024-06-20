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
<body>
    <div class="container">
        <div class="item item-1">
            <p>Your text goes here</p>
        </div>
        <div class="item item-2">
            <img src="public/assets/img/zwembad_modern.jpg" alt="Description of image">
        </div>
    </div>
</body>
</html>


</section>
</main>

<footer>
<!--    Getting the footer document-->
    <?php include('public/core/footer.php'); ?>
</footer>

</body>
</html>