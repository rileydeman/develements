<?php
/* @var mysqli $conn */
include_once("../app/db/db-conn.php");
?>

<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diensten | CMS Hendrik</title>

    <link rel="icon" href="">

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/fonts.css">
    <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/menu.css">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="<?= BASEURL_CMS ?>assets/js/app.js"></script>
    <script defer src="<?= BASEURL_CMS ?>assets/js/header.js"></script>
</head>

<body>

<header>
    <!--    Getting the header document-->
    <?php include_once("core/header.php"); ?>
</header>

<aside>
    <?php include_once("core/menu.php") ?>
</aside>

<main>
    <div id="content">
        <h1>Diensten</h1>
        <p>Op deze pagina kunt u al uw Diensten beheren, denk daarbij aan toevoegen, bijwerken en updaten.</p>
    </div>


    <footer>
        <!--    Getting the footer document-->
        <?php include_once("core/footer.php") ?>
    </footer>
</main>

</body>

</html>