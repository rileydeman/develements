<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME | CMS Hendrik</title>

    <link rel="icon" href="">

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="/admin/assets/css/fonts.css">
    <link rel="stylesheet" href="/admin/assets/css/style.css">
    <link rel="stylesheet" href="/admin/assets/css/header.css">
    <link rel="stylesheet" href="/admin/assets/css/menu.css">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="/admin/assets/js/app.js"></script>
</head>

<body>

    <header>
        <!--    Getting the header document-->
        <?php include "core/header.php" ?>
    </header>

    <aside>
        <?php include "core/menu.php" ?>
    </aside>

    <main>
        <div id="content">
            <p>Main</p>
        </div>


        <footer>
            <!--    Getting the footer document-->
            <?php include "core/footer.php" ?>
        </footer>
    </main>

</body>

</html>