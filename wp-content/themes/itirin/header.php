<style>
.header {
    position: relative;
    width: 100%;
    height: 100vh;
}

#nav {
    position: fixed;
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
    padding: 50px;
    opacity: 0;
    z-index: 30;
    color: #000;
    transition: all .8s;
    pointer-events: none;
}

#nav .nav-area {
    position: relative;
    transform: translate(80%, 40%);
    display: flex;
    flex-direction: row-reverse;
}

#nav .nav-area li {
    position: relative;
    height: fit-content;
}

#nav .nav-area .nav-content {
    font-size: 3rem;
    letter-spacing: 1.5rem;
    writing-mode: vertical-rl;
}

#nav .nav-area .line {
    position: absolute;
    top: -5px;
    display: inline-block;
    width: 1px;
    height: 0px;
    background-color: #000;
    transition: all .5s;
    pointer-events: none;
}

#nav .nav-area li:hover>.line {
    height: 100%;
}

#nav .nav-area li:nth-of-type(n+2) {
    margin-right: 50px;
}

.contact {
    position: absolute;
    top: 20%;
    left: 30px;
    transform: translateY(50%);
}

.contact .contact-title {
    padding: 0 10px;
    padding-top: 30px;
    border-top: 1px solid #000;
    font-size: 3rem;
}

.contact .tell {
    padding: 0 10px;
    padding: 30px 0;
    border-bottom: 1px solid #000;
    font-size: 3rem;
    font-weight: inherit;
}

.btn-list {
    position: relative;
    top: 200px;
}

.btn-list svg {
    width: 30px;
}

.btn-list a:nth-of-type(n+2) {
    margin-left: 20px;
}

.toggle_btn {
    display: none;
    position: fixed;
    top: 25px;
    left: 45px;
    width: 30px;
    height: 30px;
    cursor: pointer;
    z-index: 40;
}

.toggle_btn span {
    display: block;
    position: absolute;
    left: 0;
    width: 30px;
    height: 2px;
    background-color: #333;
    border-radius: 4px;
    transition: all .5s;
}

.toggle_btn span:nth-child(1) {
    top: 4px;
}

.toggle_btn span:nth-child(2) {
    top: 14px;
}

.toggle_btn span:nth-child(3) {
    bottom: 4px;
}

.mask {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: #FFF9EA;
    z-index: 20;
    opacity: 0;
    pointer-events: none;
    transition: all .8s;
}

.open .toggle_btn span:nth-child(1) {
    -webkit-transform: translateY(10px) rotate(-315deg);
    -moz-transform: translateY(10px) rotate(-315deg);
    transform: translateY(10px) rotate(-315deg);
}

.open .toggle_btn span:nth-child(2) {
    opacity: 0;
}

.open .toggle_btn span:nth-child(3) {
    -webkit-transform: translateY(-10px) rotate(315deg);
    -moz-transform: translateY(-10px) rotate(315deg);
    transform: translateY(-10px) rotate(315deg);
}

.open .mask {
    opacity: 1;
    pointer-events: all;
}

.open #nav {
    opacity: 1;
    pointer-events: all;
}

.page-logo {
    display: none;
    position: fixed;
    top: 10px;
    right: 50px;
    width: 100px;
    z-index: 40;
}
@media screen and (max-width:950px) {

    #nav {
        display: block;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        padding: 0;
    }

    #nav .nav-area {
        width: 100%;
        margin-left: 50px;
        transform: translate(0, 0);
        flex-direction: column;
        text-align: left;
    }

    #nav .nav-area li .line{
        display: none;
    }

    #nav .nav-area .nav-content {
        font-size: 4rem;
        writing-mode: inherit;
        font-weight: inherit;
    }

    #nav .nav-area li:nth-of-type(n+2) {
        margin-right: 50px;
    }

    .contact {
        margin-top: 80px;
        position: unset;
        transform: translateY(0);
    }

    .contact .contact-title {
        padding: 0 10px;
        padding-top: 30px;
        border-top: 1px solid #000;
        font-size: 4rem;
    }

    .contact .tell {
        display: block;
        padding: 0 10px;
        padding: 30px 0;
        border-bottom: 1px solid #000;
        font-size: 4rem;
        font-weight: inherit;
    }

    .btn-list {
        position: relative;
        top: 30px;
    }

    .btn-list svg {
        width: 30px;
    }

    .btn-list a:nth-of-type(n+2) {
        margin-left: 20px;
    }

    .toggle_btn {
        display: none;
        position: fixed;
        top: 30px;
        left: 10px;
        width: 30px;
        height: 30px;
        cursor: pointer;
        z-index: 40;
    }

    .toggle_btn span {
        display: block;
        position: absolute;
        left: 0;
        width: 30px;
        height: 2px;
        background-color: #333;
        border-radius: 4px;
        transition: all .5s;
    }

    .toggle_btn span:nth-child(1) {
        top: 4px;
    }

    .toggle_btn span:nth-child(2) {
        top: 14px;
    }

    .toggle_btn span:nth-child(3) {
        bottom: 4px;
    }

    .mask {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: #FFF9EA;
        z-index: 20;
        opacity: 0;
        pointer-events: none;
        transition: all .8s;
    }

    .page-logo {
        right: 10px;
        width: 70px;
    }

}
</style>
<header class="page-header">
        <nav id="nav">
            <ul class="nav-area">
                <li>
                    <span class="line"></span>
                    <a href="<?php echo get_template_directory_uri(); ?>/food">
                        <h1 class="nav-content">お品書き</h1>
                    </a>
                </li>
                <li>
                    <span class="line"></span>
                    <a href="<?php echo get_template_directory_uri(); ?>/seat">
                        <h1 class="nav-content">お席について</h1>
                    </a>
                </li>
                <li>
                    <span class="line"></span>
                    <a href="<?php echo get_template_directory_uri(); ?>/access">
                        <h1 class="nav-content">ご案内</h1>
                    </a>
                </li>
                <li>
                    <span class="line"></span>
                    <a href="<?php echo get_template_directory_uri(); ?>/coupon">
                        <h1 class="nav-content">クーポン</h1>
                    </a>
                </li>
                <li>
                    <span class="line"></span>
                    <a href="<?php echo get_template_directory_uri(); ?>/takeout">
                        <h1 class="nav-content">お持ち帰り</h1>
                    </a>
                </li>
                <li>
                    <span class="line"></span>
                    <a href="https://www.hotpepper.jp/strJ001018195/yoyaku/hpds/?ROUTE_KBN=20&dspn=RXn-QNvrX5Gn1c3JcdoroyCaugBGWs-JRf5uclvXKImnCkr0OJOtmZxLwkmmW2LlxSYJiJutD4idLABW_xkUfQ">
                        <h1 class="nav-content">ご予約はこちら</h1>
                    </a>
                </li>
            </ul>
            <div class="contact">
                <h1 class="contact-title">予約・お問い合わせ</h1>
                <h1 href="tel:+81-90-3881-5422" class="tell">082-247-3697</h1>
                <div class="btn-list">
                    <a href="https://www.facebook.com/%E4%B8%A6%E6%9C%A8%E3%81%AE%E9%9A%A0%E3%82%8C%E5%AE%B6-%E3%81%84%E3%81%A1%E3%82%8A%E3%82%93-437451596296224/">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <path style="fill:#000;" d="M448,0H64C28.704,0,0,28.704,0,64v384c0,35.296,28.704,64,64,64h384c35.296,0,64-28.704,64-64V64
                        C512,28.704,483.296,0,448,0z" />
                            <path style="fill:#FFF9EA;" d="M432,256h-80v-64c0-17.664,14.336-16,32-16h32V96h-64l0,0c-53.024,0-96,42.976-96,96v64h-64v80h64
                        v176h96V336h48L432,256z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=https://ichirinnamiki.owst.jp/">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <path style="fill:#000;" d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                            c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                            c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                            c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                            c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                            c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                            C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                            C480.224,136.96,497.728,118.496,512,97.248z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/ich_irin/?hl=ja">
                        <svg height="511pt" viewBox="0 0 511 511.9" width="511pt" xmlns="http://www.w3.org/2000/svg">
                            <path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"/>
                            <path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"/><path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"/>
                        </svg>
                    </a>
                    <a href="mailto:?body=%E2%96%A0%E3%81%8A%E5%BA%97%E3%81%AE%E8%A9%B3%E7%B4%B0%E6%83%85%E5%A0%B1%0Ahttps%3A%2F%2Fichirinnamiki.owst.jp%2F%0A%0A%E2%96%BD%E4%BD%8F%E6%89%80%E3%83%BB%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%0A%E4%BD%8F%E6%89%80%EF%BC%9A%E5%BA%83%E5%B3%B6%E7%9C%8C%E5%BA%83%E5%B3%B6%E5%B8%82%E4%B8%AD%E5%8C%BA%E4%B8%89%E5%B7%9D%E7%94%BA10-12%20ST%E3%83%93%E3%83%AB%EF%BC%92F%0A%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%EF%BC%9A%E5%BA%83%E9%9B%BB%E6%9C%AC%E7%B7%9A%E5%85%AB%E4%B8%81%E5%A0%80%E9%A7%85%E4%B8%8B%E8%BB%8A%E3%80%81%E5%BE%92%E6%AD%A95%E5%88%86%E3%80%82%E3%83%91%E3%83%AB%E3%82%B3%E3%81%8B%E3%82%89%E5%BE%92%E6%AD%A9%EF%BC%93%E5%88%86%E2%99%AA%E4%B8%A6%E6%9C%A8%E9%80%9A%E3%82%8A%E5%85%A5%E5%8F%A3%2C%2C%E3%82%AC%E3%82%BD%E3%83%AA%E3%83%B3%E3%82%B9%E3%82%BF%E3%83%B3%E3%83%89%E3%81%99%E3%81%90%E3%81%9D%E3%81%B0082-247-3697%0A%E9%9B%BB%E8%A9%B1%E7%95%AA%E5%8F%B7%EF%BC%9A082-247-3697%0A&subject=%E3%81%84%E3%81%A1%E3%82%8A%E3%82%93">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve" fill='#000'>
                            <path d="M467,76H45C20.137,76,0,96.262,0,121v270c0,24.885,20.285,45,45,45h422c24.655,0,45-20.03,45-45V121
                            C512,96.306,491.943,76,467,76z M460.698,106c-9.194,9.145-167.415,166.533-172.878,171.967c-8.5,8.5-19.8,13.18-31.82,13.18
                            s-23.32-4.681-31.848-13.208C220.478,274.284,64.003,118.634,51.302,106H460.698z M30,384.894V127.125L159.638,256.08L30,384.894z
                            M51.321,406l129.587-128.763l22.059,21.943c14.166,14.166,33,21.967,53.033,21.967c20.033,0,38.867-7.801,53.005-21.939
                            l22.087-21.971L460.679,406H51.321z M482,384.894L352.362,256.08L482,127.125V384.894z" />
                        </svg>
                    </a>

                </div>
            </div>
        </nav>

        <div class="toggle_btn">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="mask"></div>

        <div class="main-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class='page-logo'>
            </a>
        </div>
    </header>
