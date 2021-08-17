<style>
.footer {
    position: relative;
    top: 40vh;
    background: #000;
    color: #fff;
    padding: 15px;
}

.footer-nav {
    height: 60vh;
    background-color: #000;
}

.footer-nav .nav-area {
    position: absolute;
    top: 100px;
    left: 15%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: row-reverse;
}

.footer-nav .nav-content {
    font-size: 2.5rem;
    color: #fff;
    writing-mode: vertical-rl;
    font-weight: initial;
    line-height: 2;

}

.footer-nav img.logo-brack {
    position: absolute;
    right: 50px;
    width: 100px;
    margin-top: 50px;
}

.footer-text {
    font-size: 1.2rem;
}

@media screen and (max-width:950px) {

    .footer{
        top: 20vh;
    }

    .footer-nav {
        height: 50vh;
    }

    .footer-nav .nav-area {
        top: 80px;
        left: 25%;
        flex-direction: column;
    }

    .footer-nav .nav-content {
        font-size: 3.5rem;
        writing-mode: unset;
    }

    .footer-nav img.logo-brack {
        right: 30px;
        width: 70px;
        margin-top: 30px;
    }

}

</style>
<footer class="footer">
<div class="footer-nav">
    <div class="nav">
        <ul class="nav-area">
            <li><a href="<?php echo get_template_directory_uri(); ?>/food"><h1 class="nav-content">お品書き</h1></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/seat"><h1 class="nav-content">お席について</h1></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/access"><h1 class="nav-content">ご案内</h1></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/coupon"><h1 class="nav-content">クーポン</h1></a></li>
            <li><a href="<?php echo get_template_directory_uri(); ?>/takeout"><h1 class="nav-content">お持ち帰り</h1></a></li>
            <li><a href="https://www.hotpepper.jp/strJ001018195/yoyaku/hpds/?ROUTE_KBN=20&dspn=RXn-QNvrX5Gn1c3JcdoroyCaugBGWs-JRf5uclvXKImnCkr0OJOtmZxLwkmmW2LlxSYJiJutD4idLABW_xkUfQ"><h1 class="nav-content">ご予約はこちら</h1></a></li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-black.jpeg" alt="" class="logo-brack"></a>
    </div>
</div>
<p class="footer-text">&copy;2021 いちりん</p>
</footer>
<?php wp_footer(); ?>