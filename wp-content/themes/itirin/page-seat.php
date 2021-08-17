<!DOCTYPE html>
<html lang="jp">

<head>
    <?php include("head.php"); ?>
    <title>いちりん｜お席について</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/seat.css">

    <script src="<?php echo get_template_directory_uri(); ?>/js/seat.js"></script>
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
        <h1 class="page-title">お席について</h1>
    </div>

    <div id='luxy'>
    <main id="main">
        <div class="seats">
            <div class="seat-content seat-1">
                <div class="seat-img-header">
                    <div class="seat-img seat-img-1"></div>
                    <h1 class="seat-title">テーブル</h1>
                </div>
                <div class="seat-text-area">
                    <div class="seat-sub-title">
                        <h2 class="sub-title">テーブル　4名様 × 4</h2>
                    </div>
                    <div class="explanation">
                        <div class="seat-text">
                            <p class="text">広島の夜景を見ることができる</p>
                            <p class="text">ロマンチックな空間で</p>
                            <p class="text">お食事をお楽しみください。</p>
                        </div>
                        <div class="seat-note">
                            <p class="note">※テーブルを繋げれば１２名〜１６名様</p>
                            <p class="note">の団体様でも対応可能です。</p>
                            <p class="note">お気軽にご相談ください。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seat-content seat-2">
                <div class="seat-img-header">
                <div class="seat-img seat-img-2"></div>
                    <h1 class="seat-title">VIPルーム</h1>
                </div>
                <div class="seat-text-area">
                    <div class="seat-sub-title">
                        <h2 class="sub-title">VIPルーム　4名様 × 1</h2>
                    </div>
                    <div class="explanation">
                        <div class="seat-text">
                            <p class="text">完全個室の</p>
                            <p class="text">あなただけの空間を</p>
                            <p class="text">ご用意させていただいております。</p>
                        </div>
                        <div class="seat-note">
                            <p class="note">※大変人気のお席となっておりますので、</p>
                            <p class="note">ご予約はお早めに。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seat-content seat-3">
                <div class="seat-img-header">
                <div class="seat-img seat-img-3"></div>
                    <h1 class="seat-title">カウンター</h1>
                </div>
                <div class="seat-text-area">
                    <div class="seat-sub-title">
                        <h2 class="sub-title">カウンター　2〜3名様 × 2</h2>
                    </div>
                    <div class="explanation">
                        <div class="seat-text">
                            <p class="text">お客様の間近で</p>
                            <p class="text">料理人の技・パフォーマンスを</p>
                            <p class="text">是非、ご堪能ください。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seat-content seat-4">
                <div class="seat-img-header">
                <div class="seat-img seat-img-4"></div>
                    <h1 class="seat-title">掘りごたつ個室</h1>
                </div>
                <div class="seat-text-area">
                    <div class="seat-sub-title">
                        <h2 class="sub-title">掘りごたつ個室　2〜6名様 × 8</h2>
                        <h2 class="sub-title">　10〜16名様 × 4</h2>
                    </div>
                    <div class="explanation">
                        <div class="seat-text">
                            <p class="text">心安らぐ話の空間で</p>
                            <p class="text">料理人が振るうお料理を</p>
                            <p class="text">お楽しみください。</p>
                        </div>
                        <div class="seat-note">
                            <p class="note">※どのような人数、シチュエーションにも</p>
                            <p class="note">最大４５名様対応可能ですので</p>
                            <p class="note">お気軽にご相談ください。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seat-content seat-5">
                <div class="seat-img-header">
                <div class="seat-img seat-img-5"></div>
                    <h1 class="seat-title">貸切</h1>
                </div>
                <div class="seat-text-area">
                    <div class="seat-sub-title">
                        <h2 class="sub-title">貸切　45名様〜</h2>
                    </div>
                    <div class="explanation">
                        <div class="seat-text">
                            <p class="text">特別な商談や宴席を</p>
                            <p class="text">いちりんでお過ごしください。</p>
                        </div>
                        <div class="seat-note">
                            <p class="note">※どのような人数、シチュエーションにも</p>
                            <p class="note">対応可能ですので</p>
                            <p class="note">お気軽にご相談ください。</p>
                        </div>
                    </div>
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