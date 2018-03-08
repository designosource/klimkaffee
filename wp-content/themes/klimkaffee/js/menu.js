$(document).ready(function () {
    checkScreen();

    $(window).resize(function(){
        checkScreen();
    });

    function checkScreen(){
        if($(window).width() < 1024){
            $('div.head').css('display', 'block');
            $('nav.main').addClass('mobile');
            $('a.custom-logo-link').show();
            $("nav.main.mobile").hide();
            $("nav.main.mobile li.menu-item-has-children ul").hide();
            $("nav.main.mobile li.menu-item-has-children > a").on('click', function(e){
                e.preventDefault();
            })
        }
        if ($(window).width() >= 1024){
            $('div.head').css('display', 'none');
            $('a.custom-logo-link').hide();
            $('nav.main').removeClass('mobile').show();
        }
    }

    $("nav.main.mobile").hide();
    $("nav.main.mobile li.menu-item-has-children ul").hide();

    $(".hamburger").on("click", function () {
        $(this).toggleClass("open");
        $("nav.main.mobile").slideToggle();
    });

    $("nav.main.mobile li.menu-item-has-children").on("click", function () {
        $("nav.main.mobile li.menu-item-has-children").not(this).find("ul").slideUp();
        $("nav.main.mobile li.menu-item-has-children").not(this).find("a").removeClass("open");
        $(this).find("a").toggleClass("open");
        $(this).find("ul").slideToggle();
    });

    $('.go-up').on("click", function(){
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    })
});