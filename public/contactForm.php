<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | siteName</title>
    <link rel="icon" href="">

    <!-- Linking of the CSS files -->
    <link rel="stylesheet" href="/public/assets/css/fonts.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/header.css">
    <link rel="stylesheet" href="/public/assets/css/footer.css">
    <link rel="stylesheet" href="/public/assets/css/contact.css">

    <!-- Linking of the JavaScript files, defer = reading/link the file at last -->
    <script defer src="/public/assets/js/app.js"></script>
    <script defer src="/public/assets/js/contactForm.js"></script>
</head>
<body>
    <header>
        <?php include "core/header.php"; ?>
    </header>

    <main>
        <div id="formHeader">
            <h1>Contactformulier</h1>
        </div>
        <form id="contactForm" action="process_contact.php" method="POST">
            <label for="name">Naam:</label><br>
            <input type="text" id="name" name="name" autofocus required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Bericht:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>

            <input type="submit" value="Versturen">
        </form>
    </main>

    <footer>
        <?php include "core/footer.php"; ?>
    </footer>
</body>
</html>
