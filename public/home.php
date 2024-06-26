<?php
include ('app/db/db-conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hendrik Hogendijk</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/public/assets/css/fonts.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/header.css">
    <link rel="stylesheet" href="/public/assets/css/footer.css">
    <link rel="stylesheet" href="/public/assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script defer src="/public/assets/js/app.js"></script>
    <script defer src="/public/assets/js/slideshow.js"></script>
</head>
<body>
    <header>
        <?php include('public/core/header.php'); ?>
    </header>

    <main>
        <section id="home">
            <div class="container">
                <div class="item item-1">
                    <h1>Wij maken uw droomtuin realiteit.</h1><br>
                    <h3>Een tuin is meer dan een vlakte gras. Een tuin is een plek waar u tot rust komt, waar onschatbare tijd wordt doorgebracht. Ik wil u het beste bieden zodat u de luxe kan ervaren dat u verdient.</h3>
                </div>
                <div class="item item-2">
                    <div class="swiper-container slideshow">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="public/assets/img/zwembad_modern.jpg" alt="Description of image"></div>
                            <div class="swiper-slide"><img src="public/assets/img/nieuwtuin2.jpg" alt="Description of image"></div>
                            <div class="swiper-slide"><img src="public/assets/img/nieuwtuin3.jpg" alt="Description of image"></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="short-info">
            <div class="short-info-container">
                <div class="icon-label">
                    <img src="lawn-mower.png" alt="Renovatie">
                    <p>Renovatie</p>
                </div>
                <div class="icon-label">
                    <img src="pruning-shears.png" alt="Tuin Onderhoud">
                    <p>Tuin Onderhoud</p>
                </div>
                <div class="icon-label">
                    <img src="shovel.png" alt="Tuinaanleg">
                    <p>Tuinaanleg</p>
                </div>
                <div class="icon-label">
                    <img src="design-tools.png" alt="Tuinontwerp">
                    <p>Tuinontwerp</p>
                </div>
            </div>
        </section>

        <section id="over-mij">
            <div id="text-div">
                <h1 id="about-text">Waarom kiezen voor mij?</h1> <br>
                <p>De tuin is een belangrijke plek van de woning, waar je het liefst zoveel mogelijk tijd in doorbrengt. Bij Hendrik Hogendijk Hoveniers vinden wij het daarom belangrijk dat iedereen zich thuis voelt in zijn of haar tuin. Ik maak de tuin onderdeel van jouw ‘thuis’, door hem volledig op jouw wensen af te stemmen.</p> <br>
                <p>Met behulp van mooie, natuurlijke en duurzame producten en materialen creëer ik een tuin, die garant staat voor een jarenlang plezierig buitenleven. Van een knusse veranda en een mooie vijver, tot een gezellig terras en een kleurrijke bloemenborder: ik stop al mijn energie erin.</p>
            </div>
            <div id="image-div" style='background-image: url("./public/assets/img/hendrik.jpg");'></div>
        </section>

        <section id="recensies">
    <div class="testimonial-header">
        <h2>Testimonials</h2>
    </div>
    <div class="swiper-container testimonials-slider">
        <div class="swiper-wrapper">
            <?php
            $testimonials = [
                [
                    "name" => "Jayden",
                    "comment" => "This is the first testimonial",
                ],
                [
                    "name" => "Rick",
                    "comment" => "This is the second testimonial",
                ],
                [
                    "name" => "Riley",
                    "comment" => "This is the third testimonial",
                ],
                [
                    "name" => "Alex",
                    "comment" => "This is the fourth",
                ],
                [
                    "name" => "Taylor",
                    "comment" => "This is the fifth",
                ]
            ];

            foreach ($testimonials as $testimonial) {
                ?>
                <div class="swiper-slide">
                    <div class="testimonial">
                        <p><?= $testimonial["comment"]; ?></p>
                        <h3>- <?= $testimonial["name"]; ?></h3>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

    </main>

    <footer>
        <?php include('public/core/footer.php'); ?>
    </footer>
</body>
</html>
