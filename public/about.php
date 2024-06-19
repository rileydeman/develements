<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About | siteName</title>

    <link rel="icon" href="">

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="/public/assets/css/fonts.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/about.css">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="/public/assets/js/app.js"></script>
</head>

<body>

    <header>
        <!--    Getting the header document-->
        <?php include "core/header.php" ?>
    </header>

    <main>
        <div id="bigContainer">
            <?php include "./placeholderArray.php";
            

            foreach ($diensten as $dienstBox) {
                ?>
                <div class="dienstBox">
                    <div class="textBox">
                        <h2><?= $dienstBox["dienst"]; ?></h2> </br>
                        <p><?= $dienstBox["tekst"]; ?></p> </br>
                        <div class="buttonBox">
                            <button class="dienstButton">Meer info</button>
                        </div>
                    </div>
                    <div class="imageContainer" style='background-image: url("http://localhost<?= $dienstBox["img"] ?>");'>
                    </div>
                    <div class="iconBox" style='background-image: url("http://localhost<?= $dienstBox["icon"] ?>");'>
                    </div>
                </div>
                <?php
            }
            ?>

            <div id="bigContainer2">
                <div id="contactContainer">
                    <div id="hendrik">
                        <div id="hendrikImage" style='background-image: url("./public/assets/img/hendrik.jpg");'>
                        </div>
                        <p id="hendrikSpeech">"We streven ernaar om constant in contact te staan met onze klanten totdat
                            de
                            klus geklaard is. Als u vragen of speciale verzoeken heeft, stuur ons dan een bericht. Voor
                            een
                            vrijblijvende offerte kunt u contact met ons opnemen wanneer het u uitkomt. Wij zijn u graag
                            van
                            dienst!" - Hendrik Hogendijk</p>
                    </div>
                    <hr class="divider">
                </div>
                <div id="contactContainer2">

                </div>
            </div>
        </div>
    </main>

    <footer>
        <!--    Getting the footer document-->
        <?php include "core/footer.php" ?>
    </footer>

</body>

</html>