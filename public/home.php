<?php
include('app/db/db-conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME | Hendrik Hogendijk</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/public/assets/css/fonts.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/header.css">
    <link rel="stylesheet" href="/public/assets/css/footer.css">
    <link rel="stylesheet" href="/public/assets/css/home.css">
    <link rel="stylesheet" href="/public/assets/css/home-slideshow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script defer src="/public/assets/js/app.js"></script>
    <script defer src="/public/assets/js/slideshow.js"></script>

    <script>
        const BASEURL = "<?= BASEURL ?>";
    </script>
    <script defer src="/public/assets/js/home-slideshow.js"></script>
</head>

<body>
    <header>
        <?php include('public/core/header.php'); ?>
    </header>

    <main>
        <section id="homeHead">
            <div id="left">
                <div id="content">
                    <h1>Ik maak uw droomtuin realiteit.</h1><br>
                    <h3>Een tuin is meer dan een vlakte gras. Een tuin is een plek waar u tot rust komt, waar onschatbare tijd wordt doorgebracht. Ik wil u het beste bieden zodat u de luxe kan ervaren dat u verdient</h3>
                </div>
            </div>
            <div id="right">
                <div id="homeSlideShow"></div>
            </div>
        </section>

        <section id="short-info">
            <div class="short-info-container">
                <div class="short-info-container">
                    <div class="icon-label">
                        <img src="public/assets/img/tuinontwerp_icon.png" alt="Renovatie">
                        <p>Renovatie</p>
                    </div>
                    <div class="icon-label">
                        <img src="public/assets/img/tuinonderhoud_icon.png" alt="Tuin Onderhoud">
                        <p>Tuin Onderhoud</p>
                    </div>
                    <div class="icon-label">
                        <img src="public/assets/img/tuinaanleg_icon.png" alt="Tuinaanleg">
                        <p>Tuinaanleg</p>
                    </div>
                    <div class="icon-label">
                        <img src="public/assets/img/tuinontwerp_icon.png" alt="Tuinontwerp">
                        <p>Tuinontwerp</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="galerij">
            <div id="galrij-container">

            </div>
        </section>

        <section id="over-mij">
            <div id="text-div">
                <h1 id="about-text">Waarom kiezen voor mij?</h1> <br>
                <p>De tuin is een belangrijke plek van de woning, waar je het liefst zoveel mogelijk tijd in doorbrengt.
                    Bij Hendrik Hogendijk Hoveniers vinden wij het daarom belangrijk dat iedereen zich thuis voelt in
                    zijn of haar tuin. Ik maak de tuin onderdeel van jouw ‘thuis’, door hem volledig op jouw wensen af
                    te stemmen.</p> <br>
                <p>Met behulp van mooie, natuurlijke en duurzame producten en materialen creëer ik een tuin, die garant
                    staat voor een jarenlang plezierig buitenleven. Van een knusse veranda en een mooie vijver, tot een
                    gezellig terras en een kleurrijke bloemenborder: ik stop al mijn energie erin.</p>
            </div>
            <div id="image-div" style='background-image: url("<?= BASEURL ?>public/assets/img/hendrik.jpg");'></div>
        </section>

        <section id="recensies">
            <h2>- Recensies -</h2>
            <div class="reviews-container">

                <div class="slideshow-container">
                    <?php
                    $reviews = [
                        [
                            'name' => 'Gerda',
                            'rating' => 5,
                            'comment' => 'Ik geniet van mijn nieuwe zwemvijver, helemaal prachtig.',
                            'date' => '2023-06-01'
                        ],
                        [
                            'name' => 'Jan',
                            'rating' => 4,
                            'comment' => 'Mijn tuin is prachtig aangemaakt, bedankt Hendrik!.',
                            'date' => '2023-05-22'
                        ],
                        [
                            'name' => 'Sam',
                            'rating' => 3,
                            'comment' => 'Geweldige skills!.',
                            'date' => '2023-04-15'
                        ]
                    ];

                    foreach ($reviews as $index => $review) { ?>
                        <div class='review slide' id='slide-<?= $index ?>'>
                            <div class='review-content'>
                                <h2><?= $review['name'] ?></h2>
                                <div class='rating'>
                                </div>
                                <p class='comment'><?= $review['comment'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <?php include('public/core/footer.php'); ?>
    </footer>
</body>

</html>