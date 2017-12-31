$(function() {
    $(".contain2").hide();
    $('.extral_login').click(function(e) {
        $(this).addClass("current");
        $(".user").removeClass("current");
        $(".contain").hide();
        $(".contain2").show();
        e.preventDefault();
    });
    $('.user').click(function(e) {
        $(this).addClass("current");
        $(".extral_login").removeClass("current");
        $(".contain").show();
        $(".contain2").hide();
    });
    $(".ewm").mouseenter(function(e) {
        e.preventDefault();
        $(this).parent().animate({ marginLeft: "-80px" });
        $("#mdiv").fadeIn();
    });
    $(".ewm").mouseleave(function(e) {
        e.preventDefault();
        $(this).parent().animate({ marginLeft: "" });
        $("#mdiv").fadeOut();

    });

})
