$(document).ready(function () {
    $("nav.main").hide();
    $("nav.main li.menu-item-has-children ul").hide();

    $(".hamburger").on("click", function () {
        $(this).toggleClass("open");
        $("nav.main").slideToggle("slow");

        $("nav.main li.menu-item-has-children").on("click", function () {
            $(this).children("ul").slideToggle("slow");
        });
    });
});