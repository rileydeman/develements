<div id="logo">
    <a href="/admin">
        <img src="<?= BASEURL_CMS ?>assets/img/logo_full.png" alt="">
    </a>

    <img id="exitIcon" src="<?= BASEURL_CMS ?>assets/img/icons/cross.png" alt="">
</div>

<nav>
    <?php
    $nav = BASEURL_CMS . "assets/json/nav.json";
    $nav = file_get_contents($nav);
    $nav = json_decode($nav, true);

    foreach ($nav as $item) { ?>
        <a href="<?= BASEURL_CMS . $item["url"] ?>">
            <div class="navItem">
                <p><?= $item["name"] ?></p>
            </div>
        </a>

    <?php } ?>
</nav>

<div id="bottom">
    <a class="btn-primary">
        <img src="<?= BASEURL_CMS ?>assets/img/icons/exit.png" alt="">
        <p>Uitloggen</p>
    </a>
</div>