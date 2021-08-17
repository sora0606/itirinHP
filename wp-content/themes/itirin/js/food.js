$(function () {
    $(window).scroll(function(){
        // fadeinクラスに対して順に処理を行う
        $('.header-img').each(function(){
            // スクロールした距離
            let scroll = $(window).scrollTop();
             // fadeinクラスの要素までの距離
            let target = $(this).offset().top;
            // 画面の高さ
            let windowHeight = $(window).height();
            // fadeinクラスの要素が画面下にきてから200px通過したタイミングで要素を表示
            if(scroll > target - windowHeight +200){
                $(this).css('opacity' , '1');
                $(this).css('transform' , 'translateX(0)');
            }
        });
        $('.img-course').each(function(){
            // スクロールした距離
            let scroll = $(window).scrollTop();
             // fadeinクラスの要素までの距離
            let target = $(this).offset().top;
            // 画面の高さ
            let windowHeight = $(window).height();
            // fadeinクラスの要素が画面下にきてから200px通過したタイミングで要素を表示
            if(scroll > target - windowHeight +200){
                $(this).css('opacity' , '1');
                $(this).css('transform' , 'translateX(0)');
            }
        });

        $('.course-text').each(function(){
            // スクロールした距離
            let scroll = $(window).scrollTop();
             // fadeinクラスの要素までの距離
            let target = $(this).offset().top;
            // 画面の高さ
            let windowHeight = $(window).height();
            // fadeinクラスの要素が画面下にきてから200px通過したタイミングで要素を表示
            if(scroll > target - windowHeight +200){
                $(this).css('opacity' , '1');
            }
        });

        $('.drink-title').each(function(){
            // スクロールした距離
            let scroll = $(window).scrollTop();
             // fadeinクラスの要素までの距離
            let target = $(this).offset().top;
            // 画面の高さ
            let windowHeight = $(window).height();
            // fadeinクラスの要素が画面下にきてから200px通過したタイミングで要素を表示
            if(scroll > target - windowHeight +200){
                $(this).css('opacity' , '1');
                $(this).css('transform' , 'translateY(0)');
            }
        });
    });
});