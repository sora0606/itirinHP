$(function () {
    $(window).on('scroll', function () {

        var scrollTop = $(window).scrollTop();
        var bgPosition = scrollTop / 10;

        if (bgPosition) {
            $('.img-area').css('background-position', 'center top -' + bgPosition + 'px');
        }
    });
});