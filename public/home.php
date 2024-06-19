<?php   
    /* @var mysqli $conn */
    include('app/db/db-conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>public/assets/css/home.css">
    <title>Document</title>
</head>
<body>

<header>
<!--    Getting the header document-->
    <?php include('public/core/header.php');?>
</header>

<main>
    <p>Main</p>
</main>

<footer>
<!--    Getting the footer document-->
    <?php include('public/core/footer.php'); ?>
</footer>

</body>
</html>