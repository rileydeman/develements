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
    <link rel="stylesheet" href="<?= BASEURL_CMS ?>assets/css/services.css">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="<?= BASEURL_CMS ?>assets/js/app.js"></script>
    <script defer src="<?= BASEURL_CMS ?>assets/js/header.js"></script>
    <title>Gegevens Beheer</title>
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

<h2>Gegevens Beheer</h2> <br><br><br>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Aangemaakte Datum</th>
            <th>Laatst Bewerkt</th>
            <th>Acties</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include './core/placeholderArray.php'; // Zorg ervoor dat de diensten database hier geinclude wordt en verander de variables op basis daarvan

        foreach($diensten as $dienstBox) { ?> 
            <tr>
            <td><?=$dienstBox['id']?></td>
            <td><?=$dienstBox['dienst']?></td>
            <td><?=$dienstBox['tekst']?></td>
            <td><?=$dienstBox['aangemaakt']?></td>
            <td><?=$dienstBox['laatst_bewerkt']?></td>
            <td>
                <a href='./core/bewerken.php?id=<?=$dienstBox['id']?>'>Bewerken</a> | 
                <a href='./core/verwijderen.php?id=<?=$dienstBox['id']?>' onclick='return confirm(\"Weet je zeker dat je dit wilt verwijderen?\")'>Verwijderen</a>
            </td>
          </tr>
          <?php
        }
        ?>
    </tbody>
</table>

        </div>


        <footer>
            <!--    Getting the footer document-->
            <?php include_once("core/footer.php") ?>
        </footer>
    </main>

</body>

</html>