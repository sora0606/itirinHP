$(window).on('load', function () {
    $("#splash").delay(2500).fadeOut('slow');
    $("#splash_logo").delay(2000).fadeOut('slow');

    if (window.matchMedia('(max-width:950px)').matches) {
        setTimeout(function () {
            $('.bg').css('width', '100%');
        }, 3000);

        setTimeout(function () {
            $('.bg').css('transform-origin', '100% 0');
        }, 3200);

        setTimeout(function () {
            $('.logo').fadeIn(1000);
        }, 3700);

        setTimeout(function () {
            $('.img').css('width', '100%');
        }, 3700);

        setTimeout(function () {
            $('.bg').css('transform', 'rotateY(-90deg)');
        }, 4000);


    } else if (window.matchMedia('(min-width:950px)').matches) {

        setTimeout(function () {
            $('.bg').css('width', '100%');
        }, 3000);

        setTimeout(function () {
            $('.img-area').css('width', '70%');
        }, 3200);

        setTimeout(function () {
            $('.bg').css('width', '30%');
        }, 3700);

        setTimeout(function () {
            $('.logo').fadeIn(1000);
            $('.link-btn').css('opacity', '1');
        }, 3700);

        setTimeout(function () {
            $('.img').css('width', '70%');
        }, 4000);

        setTimeout(function () {
            $('.img-area').css('transform', 'rotateY(-90deg)');
        }, 4500);

    }

});

$(function () {

    $('body').on('scroll', function () {

        var scrollTop = $('body').scrollTop();
        var bgPosition = scrollTop / 10;

        if (bgPosition) {
            $('.main-img').css('background-position', 'center top -' + bgPosition + 'px');
        }
    });

    $('body').on('scroll', function () {
        var scrollTop = $(window).scrollTop();
        var windowHeight = $(window).height();

            if (window.matchMedia('(max-width:950px)').matches) {

                $('.content-title').each(function () {
                    let target = $(this).offset().top;

                    if (scrollTop > target - windowHeight + 100) {
                        $(this).css('opacity', '1');
                        $(this).css('transform', 'translateY(0)');
                    }
                });

                $('.food-img').each(function () {
                    let target = $(this).offset().top;

                    if (scrollTop > target - windowHeight + 100) {
                        $(this).css('opacity', '1');
                    }
                });

                $('.title').each(function () {
                    let target = $(this).offset().top;

                    if (scrollTop > target - windowHeight + 100) {
                        $(this).css('text-shadow', 'none');
                        $(this).css('color', '#000');
                    }
                });

                $('.text').each(function () {
                    let target = $(this).offset().top;

                    if (scrollTop > target - windowHeight + 100) {
                        $(this).css('text-shadow', 'none');
                        $(this).css('color', '#000');
                    }
                });

                $('.bg-1').each(function () {
                    let target = $(this).offset().top;

                    if (scrollTop > target - windowHeight + 400) {
                        $(this).css('transform', 'rotateY(-0deg)');
                    }
                });

            } else if (window.matchMedia('(min-width:950px)').matches) {

                $('.content-title').each(function () {
                    let target = $(this).offset().top;

                    if (scrollTop > target - windowHeight + 200) {
                        $(this).css('opacity', '1');
                        $(this).css('transform', 'translateY(0)');
                    }
                });

                $('.food-img').each(function () {
                    let target = $(this).offset().top;

                    if (scrollTop > target - windowHeight + 300) {
                        $(this).css('opacity', '1');
                    }
                });

                $('.title').each(function () {
                    let target = $(this).offset().top;

                    if (scrollTop > target - windowHeight + 300) {
                        $(this).css('text-shadow', 'none');
                        $(this).css('color', '#fff');
                    }
                });

                $('.text').each(function () {
                    let target = $(this).offset().top;

                    if (scrollTop > target - windowHeight + 300) {
                        $(this).css('text-shadow', 'none');
                        $(this).css('color', '#fff');
                    }
                });

                $('.bg-1').each(function () {
                    let target = $(this).offset().top;

                    if (scrollTop > target - windowHeight + 400) {
                        $(this).css('transform', 'rotateY(-0deg)');
                    }
                });
            }
    });

    $('.img img:nth-child(n+4)').hide();
    setInterval(function () {
        $(".img img:first-child").fadeOut(2000);
        $(".img img:nth-child(2)").fadeIn(2000);
        $(".img img:first-child").appendTo(".img");
    }, 4000);

    /*=================================================
        ハンバーガーメニュー
    ===================================================*/
    $('.toggle_btn').on('click', function () {
        // #headerにopenクラスがあるか
        if (!$('.header').hasClass('open')) {
            // クラスを追加
            $('.header').addClass('open');
        } else {
            // クラスを削除
            $('.header').removeClass('open');
        }
    });


});