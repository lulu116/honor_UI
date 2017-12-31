$(document).ready(function() {
    //首先将.bottomnav隐藏
    $(".bottomnav").hide();
    //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
    $(function() {
        $(window).scroll(function() {
            // console.log($(window).scrollTop());
            if ($(window).scrollTop() > 0) {
                $(".bottomnav").fadeIn(1000);
            } else {
                $(".bottomnav").fadeOut(1000);
            }
        });
        //当点击跳转链接后，回到页面顶部位置
        $(".bottomnav").click(function() {
            $('body,html').animate({
                    scrollTop: 0
                },
                1000);
            return false;
        });
    });
});
