$(function(){
    $(".nav_hide").click(function() {
        if($(".menu-main-nav-container").is(":hidden")){
            $(".menu-main-nav-container").slideDown();
        }else{
            $(".menu-main-nav-container").slideUp();
        }
    });
    $(window).resize(function(){
        if(window.innerWidth > 768){
            $(".menu-main-nav-container").show();
        }else{

            $(".menu-main-nav-container").hide();
        }
    });
});