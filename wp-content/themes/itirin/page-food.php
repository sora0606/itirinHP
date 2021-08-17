<!DOCTYPE html>
<html lang="jp">

<head>
    <?php include("head.php"); ?>
    <title>いちりん｜お品書き</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/food.css">
    <link href = "// db.onlinewebfonts.com/c/005369b1bccd49c6f752348e3261eec3？family = Savoye + LET" rel = "stylesheet" type = "text / css" />

    <script src="<?php echo get_template_directory_uri(); ?>/js/food.js"></script>
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
        <h1 class="page-title">お品書き</h1>
    </div>


    <div id="luxy">
        <main id="main">
                <div class="recommendation">
                    <div class="rec-title-block">
                        <h1 class="rec-title">当店のおすすめ</h1>
                    </div>
                    <div class="rec-foods">
                        <div class="food food-1">
                            <div class="food-img">
                                <div class="bg">
                                    <div class="here">
                                        <p>here</p>
                                    </div>
                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/rec-food-1.png" alt=""
                                    class='food-img-content'>
                                <h1 class="food-title">お造り盛り合わせ</h1>
                                <div class="text">
                                    <p class="food-text">瀬戸内海に浮かぶ豊島近海で
                                        <p class="food-text">水揚げされた口溶けの良い</p>
                                        <p class="food-text">新鮮な魚を余すことなく</p>
                                        <p class="food-text">ご提供いたします。</p>
                                </div>
                            </div>
                        </div>
                        <div class="food food-2">
                            <div class="food-img">
                            <div class="bg">
                                <div class="here">
                                    <p>here</p>
                                </div>
                            </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/rec-food-2.png" alt=""
                                    class='food-img-content'>
                                <h1 class="food-title">水晶焼き</h1>
                                <div class="text">
                                    <p class="food-text">水晶で焼くことで</p>
                                    <p class="food-text">アクが出ることがなく</p>
                                    <p class="food-text">遠赤外線で食材の旨味を</p>
                                    <p class="food-text">引き出しております。</p>
                                </div>
                            </div>
                        </div>
                        <div class="food food-3">
                            <div class="food-img">
                            <div class="bg">
                                <div class="here">
                                    <p>here</p>
                                </div>
                            </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/rec-food-3.png" alt=""
                                    class=' food-img-content'>
                                <h1 class="food-title">地穴子のしゃぶしゃぶ</h1>
                                <div class="text">
                                    <p class="food-text">秘伝の出汁にくぐらせた</p>
                                    <p class="food-text"> 新鮮な天然穴子などは</p>
                                    <p class="food-text">身が引き締まっており</p>
                                    <p class="food-text">食せば旨味が染み出す、</p>
                                    <p class='food-text'>絶品の一品でございます。</p>
                                </div>
                            </div>
                        </div>
                        <div class="gradient"></div>
                    </div>
                </div>

                <div class="course-meal">
                    <div class="content-header">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/course-main.png" alt="" class="header-img">
                        <h1 class="content-title">コース料理</h1>
                    </div>
                    <div class="course-foods">

                        <div class="course-food">

                            <div class="course-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/course-img-1.png" alt="" class="img-course">
                                <h1 class="course-title">今月のコース</h1>
                                <h1 class="price">5,500円(税込)</h1>
                            </div>

                            <div class="course-text course-text-1">

                                <div class="course-text-main">
                                    <p class="main-text">旬の食材を使用した</p>
                                    <p class="main-text">飲み放題付きの</p>
                                    <p class="main-text">コース料理をご堪能ください。</p>
                                </div>

                                <div class="note">
                                    <p class="note-text">※苦手な食材等々ございましたら、</p>
                                    <p class="note-text">お申し付けください。</p>
                                </div>
                            </div>

                        </div>

                        <span class="line-1">
                            <span class="line-2">
                                <a href='https://www.hotpepper.jp/strJ001018195/course_cnod05/hpds/?ROUTE_KBN=20&dspn=RXn-QNvrX5Gn1c3JcdoroyCaugBGWs-JRf5uclvXKIkXRYPjiF6pgb5y6VcakTCxxSYJiJutD4idLABW_xkUfQ' class="btn-more">View more</a>
                            </span>
                        </span>

                        <div class="course-food">

                            <div class="course-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/course-img-2.png" alt="" class="img-course">
                                <h1 class="course-title title-2">料理のみのコース</h1>
                                <h1 class="price">4,400円(税込)</h1>
                            </div>

                            <div class="course-text course-text-1">

                                <div class="course-text-main">
                                    <p class="main-text">四季折々を感じる</p>
                                    <p class="main-text">お料理のみの</p>
                                    <p class="main-text">コース料理をご堪能ください。</p>
                                </div>

                                <div class="note">
                                    <p class="note-text">※お飲み物は別料金でございます。</p>
                                </div>
                            </div>

                        </div>

                        <span class="line-1">
                            <span class="line-2">
                                <a href='https://www.hotpepper.jp/strJ001018195/course_cnod26/hpds/?ROUTE_KBN=20&dspn=RXn-QNvrX5Gn1c3JcdoroyCaugBGWs-JRf5uclvXKImsKmg3w_pfSKgb-zFQQcWzxSYJiJutD4idLABW_xkUfQ' class="btn-more">View more</a>
                            </span>
                        </span>

                        <div class="course-food">

                            <div class="course-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/course-img-3.png" alt="" class="img-course">
                                <h1 class="course-title title-2">料理のみのコース</h1>
                                <h1 class="price">6,600円(税込)</h1>
                            </div>

                            <div class="course-text">

                                <div class="course-text-main">
                                    <p class="main-text">当店人気の</p>
                                    <p class="main-text">お料理を</p>
                                    <p class="main-text">是非ご堪能ください。</p>
                                </div>

                                <div class="note">
                                    <p class="note-text">※お飲み物は別料金でございます。</p>
                                </div>
                            </div>

                        </div>

                        <span class="line-1">
                            <span class="line-2">
                                <a href='https://www.hotpepper.jp/strJ001018195/course_cnod27/hpds/?ROUTE_KBN=20&dspn=RXn-QNvrX5Gn1c3JcdoroyCaugBGWs-JRf5uclvXKIl8nmy5j5E16Gbuqp3nYn5mxSYJiJutD4idLABW_xkUfQ' class="btn-more">View more</a>
                            </span>
                        </span>

                        <div class="course-food">

                            <div class="course-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/course-img-4.png" alt="" class="img-course">
                                <h1 class="course-title title-2">豪華食材のコース</h1>
                                <h1 class="price">7,700円(税込)</h1>
                            </div>

                            <div class="course-text">

                                <div class="course-text-main">
                                    <p class="main-text">厳選された豪華食材を</p>
                                    <p class="main-text">こだわりのお酒と共に</p>
                                    <p class="main-text">是非ご堪能ください。</p>
                                </div>

                                <div class="note">
                                    <p class="note-text">※＋５００円で飲み放題のお時間を</p>
                                    <p class="note-text">１２０分にもできます。</p>
                                </div>
                            </div>

                        </div>

                        <span class="line-1">
                            <span class="line-2">
                                <a href='https://www.hotpepper.jp/strJ001018195/course_cnod02/hpds/?ROUTE_KBN=20&dspn=RXn-QNvrX5Gn1c3JcdoroyCaugBGWs-JRf5uclvXKImaPS7Lfv07Qg9vY0-JOjUgxSYJiJutD4idLABW_xkUfQ' class="btn-more">View more</a>
                            </span>
                        </span>

                    </div>
                </div>

                <div class="food-pr">
                    <div class="content-header header-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/food-pr-main.png" alt="" class="header-img">
                        <h1 class="content-title">料理紹介</h1>
                    </div>

                    <div class="slide-food">
                        <div class="slideloop">
                            <ul class="slide slide-1">
                                <li>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-1.png' alt=''>
                                    <h2 class="food-pr-title">地穴子のお造り</h2>
                                    <p class="food-price">980円(税込)〜</p>
                                </li>
                                <li>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-2.png' alt=''>
                                    <h2 class="food-pr-title">炊き立て釜飯</h2>
                                    <p class="food-price">1,180円(税込)〜</p>
                                </li>
                                <li>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-3.png' alt=''>
                                    <h2 class="food-pr-title">和風グラタン</h2>
                                    <p class="food-price">680円(税込)</p>
                                </li>
                                <li>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-4.png' alt=''>
                                    <h2 class="food-pr-title">ブランド牡蠣「冬咲」</h2>
                                    <p class="food-price">780円〜980円(税込)</p>
                                </li>
                                <li>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-5.png' alt=''>
                                    <h2 class="food-pr-title">瀬戸もみじ豚の炙り焼き</h2>
                                    <p class="food-price">880円(税込)</p>
                                </li>
                            </ul>
                            <ul class="slide slide-2">
                                <li>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-1.png' alt=''>
                                    <h2 class="food-pr-title">地穴子のお造り</h2>
                                    <p class="food-price">980円(税込)〜</p>
                                </li>
                                <li>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-2.png' alt=''>
                                    <h2 class="food-pr-title">炊き立て釜飯</h2>
                                    <p class="food-price">1,180円(税込)〜</p>
                                </li>
                                <li>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-3.png' alt=''>
                                    <h2 class="food-pr-title">和風グラタン</h2>
                                    <p class="food-price">680円(税込)</p>
                                </li>
                                <li>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-4.png' alt=''>
                                    <h2 class="food-pr-title">ブランド牡蠣「冬咲」</h2>
                                    <p class="food-price">780円〜980円(税込)</p>
                                </li>
                                <li>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-5.png' alt=''>
                                    <h2 class="food-pr-title">瀬戸もみじ豚の炙り焼き</h2>
                                    <p class="food-price">880円(税込)</p>
                                </li>
                            </ul>
                        </div>
                        <div class="slideloop-2">
                            <ul class="slide-reverse slide-3">
                                <li>
                                    <p class="food-price">780円(税込)</p>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-6.png' alt=''>
                                    <h2 class="food-pr-title">天ぷら盛り合わせ</h2>
                                </li>
                                <li>
                                    <p class="food-price">580円(税込)</p>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-7.png' alt=''>
                                    <h2 class="food-pr-title">里芋まんじゅう</h2>
                                </li>
                                <li>
                                    <p class="food-price">780円(税込)</p>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-8.png' alt=''>
                                    <h2 class="food-pr-title">旬魚のお料理</h2>
                                </li>
                                <li>
                                    <p class="food-price">980円(税込)</p>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-9.png' alt=''>
                                    <h2 class="food-pr-title">カワハギの薄造り</h2>
                                </li>
                                <li>
                                    <p class="food-price">858円(税込)</p>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-10.png' alt=''>
                                    <h2 class="food-pr-title">高宮鳥の唐揚げ</h2>
                                </li>
                            </ul>
                            <ul class="slide-reverse slide-4">
                                <li>
                                    <p class="food-price">780円(税込)</p>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-6.png' alt=''>
                                    <h2 class="food-pr-title">天ぷら盛り合わせ</h2>
                                </li>
                                <li>
                                    <p class="food-price">580円(税込)</p>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-7.png' alt=''>
                                    <h2 class="food-pr-title">里芋まんじゅう</h2>
                                </li>
                                <li>
                                    <p class="food-price">780円(税込)</p>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-8.png' alt=''>
                                    <h2 class="food-pr-title">旬魚のお料理</h2>
                                </li>
                                <li>
                                    <p class="food-price">980円(税込)</p>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-9.png' alt=''>
                                    <h2 class="food-pr-title">カワハギの薄造り</h2>
                                </li>
                                <li>
                                    <p class="food-price">858円(税込)</p>
                                    <img src='<?php echo get_template_directory_uri(); ?>/img/food-pr-10.png' alt=''>
                                    <h2 class="food-pr-title">高宮鳥の唐揚げ</h2>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="drink">
                    <div class="content-header">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/drink.png" alt="" class="header-img">
                        <h1 class="content-title">お飲み物</h1>
                    </div>

                    <div class="drink-pr">
                        <h1 class="drink-title">ビール</h1>
                        <div class="drink-meal">
                            <dl>
                                <dt>生ビール【キリン一番搾り樽詰め生】</dt>
                                <dd>・・・500円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>キリンクラシックラガー</dt>
                                <dd>・・・600円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>ハートランドビール</dt>
                                <dd>・・・600円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>キリンフリー</dt>
                                <dd>・・・500円（税込）</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="drink-pr">
                        <h1 class="drink-title">サワー</h1>
                        <div class="drink-meal">
                            <dl>
                                <dt>レモン生搾りサワー</dt>
                                <dd>・・・550円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>カルピスサワー</dt>
                                <dd>・・・450円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>ライムサワー</dt>
                                <dd>・・・450円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>ぶどうサワー</dt>
                                <dd>・・・450円（税込）</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="drink-pr">
                        <h1 class="drink-title">ハイボール・ウイスキー</h1>
                        <div class="drink-meal">
                            <dl>
                                <dt>ハイボール</dt>
                                <dd>・・・500円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>コークハイ</dt>
                                <dd>・・・500円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>ジンジャーハイ</dt>
                                <dd>・・・500円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>トニックハイ</dt>
                                <dd>・・・500円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>ウーロンハイ</dt>
                                <dd>・・・450円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>ジョニーウォーカーレッド<br>(ロック・水割り・ストレート)</dt>
                                <dd>・・・550円（税込）</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="drink-pr">
                        <h1 class="drink-title">ワイン</h1>
                        <div class="drink-meal">
                            <dl>
                                <dt>[赤・白]　グラスワイン</dt>
                                <dd>・・・500円（税込）</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="drink-pr">
                        <h1 class="drink-title">果実酒(ロック・水割り・ソーダ)</h1>
                        <div class="drink-meal">
                            <dl>
                                <dt>濃厚梅酒</dt>
                                <dd>・・・500円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>錫杖の梅酒</dt>
                                <dd>・・・500円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>あらごし桃酒</dt>
                                <dd>・・・600円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>奥武蔵すてきなみかん酒</dt>
                                <dd>・・・600円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>子宝山形りんご酒</dt>
                                <dd>・・・600円（税込）</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="drink-pr">
                        <h1 class="drink-title">厳選広島の地酒</h1>
                        <div class="drink-meal">
                            <dl>
                                <dt>誠鏡　純米辛口番外品　【竹原】</dt>
                                <dd>・・・550円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>亀齢　辛口純米八拾　【西条】</dt>
                                <dd>・・・550円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>雨後の月　辛口純米　【呉】</dt>
                                <dd>・・・550円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>神雷　特別純米八反錦　【神石】</dt>
                                <dd>・・・550円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>賀茂鶴　一滴入魂　純米吟醸　【西条】</dt>
                                <dd>・・・600円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>美穂　純米吟醸　【安芸津】</dt>
                                <dd>・・・600円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>瑞冠　純米　【白島】</dt>
                                <dd>・・・550円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>竹鶴　純米　【竹原】</dt>
                                <dd>・・・550円（税込）</dd>
                            </dl>
                            <dl>
                                <dt>宝剣　超辛口吟醸　【呉】</dt>
                                <dd>・・・550円（税込）</dd>
                            </dl>
                        </div>
                    </div>

                </div>
                <div class="note-footer">
                    <p class="note-footer-text">※その他にも数多くのお飲み物を揃えております。</p>
                    <p class="note-footer-text">※メニューは予告なく変更になる場合がございます。</p>
                </div>
            </main>
            <?php get_footer(); ?>
        </div>
    <script>
        luxy.init({});
    </script>
</body>

</html>