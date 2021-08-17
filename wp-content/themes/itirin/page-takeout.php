<!DOCTYPE html>
<html lang="jp">

<head>
    <?php include("head.php"); ?>
    <title>いちりん｜お持ち帰り</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/takeout.css">
    <link href = "// db.onlinewebfonts.com/c/005369b1bccd49c6f752348e3261eec3？family = Savoye + LET" rel = "stylesheet" type = "text / css" />

    <script src="<?php echo get_template_directory_uri(); ?>/js/takeout.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/all.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/luxy.js"></script>

</head>

<body>

    <div class="page-anime"></div>
    <div class="page-anime-2"></div>
    <div class="page-anime-3"></div>

    <?php get_header(); ?>
    <div class="page-title-area">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon.png" alt="" class='icon'>
        <h1 class="page-title">お持ち帰り</h1>
    </div>

    <div id="luxy">
        <main id="main">
            <div class="takeout">
                <div class="recommendation-take">
                    <h1 class="food-title">豊島直送 地穴子の白焼き</h1>
                    <h1 class="rec-title">当店のおすすめ</h1>
                    <div class="img-food-area">
                        <div class="img-area img-1"></div>
                    </div>
                    <div class="text">
                        <div class="food-text-area">
                            <p class="food-text">約300グラムの穴子を一本丸々使用してます。</p>
                            <p class="food-text">旨味、鮮度を損なわないよう真空パックしております。</p>
                            <p class="food-text">トースターまたは、オーブン(200度)で10分から15分焼いて</p>
                            <p class="food-text">おり、食べ応えのある白焼きに仕上げております。</p>
                        </div>
                        <div class="price-note">
                            <p class="price">3,000円（税込）</p>
                            <p class="note">2〜3人前です。</p>
                        </div>
                    </div>
                </div>
                <div class="box-food">
                    <div class="box-food-1">
                        <h1 class="food-title">垰下牛炙りコーネ弁当</h1>
                        <div class="img-food-area img-rever">
                            <div class="img-area img-2"></div>
                        </div>
                        <h1 class="box-price">1,300円（税込）</h1>
                    </div>
                    <div class="box-food-2">
                        <h1 class="food-title">うなぎ弁当</h1>
                        <div class="img-food-area">
                            <div class="img-area img-3"></div>
                        </div>
                        <h1 class="box-price">1,300円（税込）</h1>
                    </div>
                    <div class="box-food-1">
                        <h1 class="food-title">もみじ豚カツ巻き寿司</h1>
                        <div class="img-food-area">
                            <div class="img-area img-4"></div>
                        </div>
                        <h1 class="box-price">1,000円（税込）</h1>
                    </div>
                </div>
                <div class="takeout-contact">
                    <h1 class="contact-title">ご予約・お問い合わせ</h1>
                    <h1 class="contact-tell">082-247-3697</h1>
                    <p class="contact-note">※日曜日は定休日となっておりますのであらかじめご了承ください。</p>
                </div>
            </div>
        </main>

        <?php get_footer(); ?>

    </div>

    <script>
        luxy.init({});
    </script>

</body>
</html>