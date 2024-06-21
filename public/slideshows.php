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
    <link rel="stylesheet" href="/public/assets/css/slideshow.css">

    <!-- Linking of the JavaScript files, defer = reading/link the file at last -->
    <script defer src="/public/assets/js/app.js"></script>
</head>

<body>

    <header>
        <?php include "core/header.php"; ?>
    </header>

    <main>
        <?php include "./placeholderArray.php";
        $id = $_GET["id"];
        $length = count($diensten);

        foreach($diensten as $dienst) {
            if ($dienst["id"] == $id) {
                print_r($dienst["tekst"]);
            }
        }

        ?>
    </main>

    <footer>
        <!-- Getting the footer document -->
        <?php include "core/footer.php"; ?>
    </footer>

</body>

</html>