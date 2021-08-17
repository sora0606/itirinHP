$(function () {
    $(window).on('scroll', function () {

        var scrollTop = $(window).scrollTop();
        var bgPosition = scrollTop / 10;

        if (bgPosition) {
            $('.seat-img').css('background-position', 'center top -' + bgPosition + 'px');
        }
    });
});