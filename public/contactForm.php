<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</head>

<body>

    <header>
        <?php include "core/header.php"; ?>
    </header>

    <main>
        <div id="formHeader">
            <h1>Contact Us</h1>
        </div>
        <form action="process_contact.php" method="POST">
            <label for="name">Naam:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Telefoonnummer:</label><br>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="message">Bericht:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>

            <small>Ik wil:</small><br><br><br>
            <input type="radio" id="opt1" name="choice" value="opt1">
            <label for="opt1">kennismaken</label><br>
            <input type="radio" id="opt2" name="choice" value="opt2">
            <label for="opt2">offerte aanvragen</label><br>
            <input type="radio" id="opt3" name="choice" value="opt3">
            <label for="opt3">overig</label><br><br>

            <input type="submit" value="Versturen">
        </form>
    </main>

    <footer>
        <!-- Getting the footer document -->
        <?php include "core/footer.php"; ?>
    </footer>

</body>

</html>
