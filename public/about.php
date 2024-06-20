<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                            <button class="dienstButton">Mijn projecten</button>
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
                    <div style="padding:10px;">
                        <h1>Openingstijden: </h1><br>
                        <p><strong>Maandag-Vrijdag:</strong> 07:00-17:00</p><br>
                        <p><strong>Zaterdag:</strong> op afspraak</p><br>
                        <p><strong>Zondag:</strong> gesloten</p><br>
                    </div>
                    <div id="contactButtonBox">
                        <button class="contactButton" onclick="window.location.href = './contact';">Neem contact
                            op!</button>
                    </div>
                </div>
                <div id="contactContainer2">
                    <div id="extraContainer2">
                        <small>telefoonnummer: </small>
                        <h1>+06 123456789</h1><br>
                        <hr class="divider">
                        <div id="imageDiv">
                            <a target="_blank"
                                href="https://www.google.com/maps/place/Hoefstraat+42,+4265+HV+Genderen/@51.734793,5.0837797,17.91z/data=!4m6!3m5!1s0x47c692058071c215:0x37e244aea3c8904b!8m2!3d51.7347078!4d5.0836166!16s%2Fg%2F11c5lstlvl?entry=ttu">
                                <div id="mapsImage" style='background-image: url("./public/assets/img/maps.png");'>
                                </div>
                            </a>
                        </div>
                        <div class="contact-info">
                            <small>Hendrik Hogendijk Hoveniers</small><br>
                            <small>Hoefstraat 42</small><br>
                            <small>7143HH Huis ter Heide</small><br>
                            <small>hendrikhogendijkhoveniers@gmail.com</small><br>
                        </div>
                        <hr class="divider">
                        <div id="logoBox" style='background-image: url("./public/assets/img/logo_name.png");'>
                        </div>
                    </div>
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