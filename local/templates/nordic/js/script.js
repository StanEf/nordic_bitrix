$(document).ready(function() {

    var margin_left = $(".main-inside").css("margin-left");
    console.log(margin_left);
    if(margin_left != 0) {
        $("#logo").css("margin-left", margin_left);
    }
    $(window).resize(function(){
        var margin_left = $(".main-inside").css("margin-left");
        console.log(margin_left);
        $("#logo").css("margin-left", margin_left);
    });

    if(location.href.indexOf("ru/index.php") != -1){
        $(".footer").css("height", getFooterHeight());

    }
    function getFooterHeight(){
        var header_and_main_limited_height = $(".header-and-main-limited").css("height");
        console.log("header_and_main_limited_height " + header_and_main_limited_height);
        $(".header-and-main-limited").css("margin-bottom", "-5px");
        $(".header-and-main").css("min-height", 0);
        $(".header-and-main").css("height", header_and_main_limited_height);

        var body_height = $("body").css("height");
        body_height = window.screen.height;
        console.log("body_height " + body_height);
        var footer_height = parseInt(body_height) - parseInt(header_and_main_limited_height)+ "px";
        console.log("footer_height " + footer_height);
        return footer_height;
    }

});