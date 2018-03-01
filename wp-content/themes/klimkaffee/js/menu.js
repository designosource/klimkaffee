$(document).ready(function () {
    $('li.menu-item-has-children > a:first-child').click(function(e){e.preventDefault();});
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
});