$(function () {
    /*=================================================
        ハンバーガーメニュー
    ===================================================*/
    $('.toggle_btn').on('click', function () {
        // #headerにopenクラスがあるか
        if (!$('.page-header').hasClass('open')) {
            // クラスを追加
            $('.page-header').addClass('open');
        } else {
            // クラスを削除
            $('.page-header').removeClass('open');
        }
    });

    $('a:not([href^="#"]):not([target])').on('click', function(e){
        e.preventDefault();
        url = $(this).attr('href');
        if(url === "http://localhost/wp_itirin_test/") {
            $('.page-anime-3').css('background', '#848484');
            $('.page-anime-2').css('background', '#000');
            $('.page-anime').css('background', '#000');
            $('.page-anime-3').css('transform', 'rotate(0deg)');
            $('.page-anime-2').css('transform', 'rotate(0deg)');
            $('.page-anime').css('transform', 'rotate(0deg)');
            setTimeout(function () {
                window.location = url;
            }, 1500);
        }else if (url !== '') {
            $('.page-anime-3').css('transform', 'rotate(0deg)');
            $('.page-anime-2').css('transform', 'rotate(0deg)');
            $('.page-anime').css('transform', 'rotate(0deg)');
            setTimeout(function () {
                window.location = url;
            }, 1500);
        }
        return false;
    });

});

$(window).on('load', function () {

    setTimeout(function () {
        $('.page-title-area').css('opacity' , '1');
}, 500);

    setTimeout(function () {
        $('.page-title').css('opacity' , '1');
}, 1000);

    setTimeout(function () {
        $('.page-logo').fadeIn(1500);
}, 1500);

    setTimeout(function () {
        $('.toggle_btn').fadeIn(1500);
}, 1500);

});
