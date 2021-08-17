<!DOCTYPE html>
<html lang="jp">

<head>
    <?php include("head.php"); ?>
    <title>いちりん｜クーポン</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/coupon.css">
    <link href = "// db.onlinewebfonts.com/c/005369b1bccd49c6f752348e3261eec3？family = Savoye + LET" rel = "stylesheet" type = "text / css" />

    <script src="<?php echo get_template_directory_uri(); ?>/js/coupon.js"></script>
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
        <h1 class="page-title">クーポン</h1>
    </div>

    <div id='luxy'>
        <main id="main">
            <div class="coupon">
                <div class="coupon-content">
                    <div class="img-area img-1"></div>
                    <div class="text">
                        <h1 class="coupon-title">地酒を含む気になる日本酒いっぱいプレゼント</h1>
                        <div class="list">
                            <dl>
                                <dt>提示条件</dt>
                                <dd>入店時</dd>
                            </dl>
                            <dl>
                                <dt>利用条件</dt>
                                <dd>
                                    他券併用不可／1組1回1枚／1名様～／ご飲食の方<br>
                                    /コース利用不可
                                </dd>
                            </dl>
                        </div>
                        <span class="line-2">
                            <span class="line-1">
                                <a href="https://ichirinnamiki.owst.jp/coupons/9130222">View more</a>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="coupon-content">
                    <div class="img-area img-2"></div>
                    <div class="text">
                        <h1 class="coupon-title">【峠下牛の炙り寿司】ご試食クーポン</h1>
                        <div class="list">
                            <dl>
                                <dt>提示条件</dt>
                                <dd>着席時</dd>
                            </dl>
                            <dl>
                                <dt>利用条件</dt>
                                <dd>
                                    他券・サービス併用不可・1組1回1枚<br>
                                    ・コース利用不可・1名様～
                                </dd>
                            </dl>
                        </div>
                        <span class="line-2">
                            <span class="line-1">
                                <a href="https://ichirinnamiki.owst.jp/coupons/40193064">View more</a>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="coupon-content">
                    <div class="img-area img-3"></div>
                    <div class="text">
                        <h1 class="coupon-title">江田島産ブランド牡蠣「冬咲」<br>【牡蠣の大吟醸蒸し】</h1>
                        <div class="list">
                            <dl>
                                <dt>提示条件</dt>
                                <dd>注文時</dd>
                            </dl>
                            <dl>
                                <dt>利用条件</dt>
                                <dd>
                                    他券・サービス併用不可/1組1回/1枚2名様以上/<br>
                                    ご飲食の方/1名様～/コース利用不可
                                </dd>
                            </dl>
                        </div>
                        <span class="line-2">
                            <span class="line-1">
                                <a href="https://ichirinnamiki.owst.jp/coupons/9130223">View more</a>
                            </span>
                        </span>
                    </div>
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