<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uitleg Diensten pagina</title>

    <link rel="icon" href="">

    <!-- Linking of the CSS files -->
    <link rel="stylesheet" href="/public/assets/css/fonts.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/header.css">
    <link rel="stylesheet" href="/public/assets/css/footer.css">
    <link rel="stylesheet" href="/public/assets/css/slideshow.css">

    <script defer src="/public/assets/js/app.js"></script>
    <script defer src="/public/assets/js/slideshow2.js"></script>
</head>

<!-- Feedback van Rick

- Maak er echt een slider van (dus niet alleen dat ie van plaatje naar plaatje wisselt)
- Zorg ervoor dat ook als je op een van de pijltjes klikt er een animatie komt waar de image weg slide en een nieuwe tevoorschijn komt.
- Verander de set pixels naar procenten of vw (viewwidth) of vh (viewheight), want op mijn laptop ziet het er allemaal niet heel goed uitgelijnd uit

-En misschien ook cool als je onderin een soort van preview maakt met 3 plaatjes, de middelste is het plaatje wat al groot in beeld staat, degene
 daarlinks is degene die daarvoor was gedisplayed en degene daarrechts is de eerstvolgende die gedisplayd kan worden

 Voor de rest ziet het er allemaal best prima uit :)
-->


<body>

    <header>
        <?php include "core/header.php"; ?>
    </header>

    <main>
        <div class="slideshow-container">
            <div class="slide"><img src="/public/assets/img/tuin1.jpg" alt="Slide 1"></div>
            <div class="slide"><img src="/public/assets/img/tuin2.jpg" alt="Slide 2"></div>
            <div class="slide"><img src="/public/assets/img/tuin3.jpg" alt="Slide 3"></div>
        </div>
        <div class="navigation">
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
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
