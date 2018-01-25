$(document).ready(function () {
    $("nav.main.mobile").hide();
    $("nav.main.mobile li.menu-item-has-children ul").hide();

    $(".hamburger").on("click", function () {
        $(this).toggleClass("open");
        $("nav.main.mobile").slideToggle("slow");
    });

    $("nav.main.mobile li.menu-item-has-children").on("click", function () {
        $(this).children("a").toggleClass("open");
        $(this).children("ul").slideToggle("slow");
    });
});