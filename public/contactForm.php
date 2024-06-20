<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./public/assets/css/contact.css">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <link rel="stylesheet" href="./public/assets/css/fonts.css">
</head>
<body>

<header>
        <!--    Getting the header document-->
        <?php include "core/header.php" ?>
    </header>
   

    <main>
    <header id="formHeader">
        <h1>Contact Us</h1>
    </header>
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
        <!--    Getting the footer document-->
        <?php include "core/footer.php" ?>
    </footer>

</body>
</html>