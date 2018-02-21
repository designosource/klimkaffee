$(document).ready(function () {
    $('li.menu-item-has-children > a:first-child').click(function(e){e.preventDefault();});
    $("nav.main.mobile").hide();
    $("nav.main.mobile li.menu-item-has-children ul").hide();

    $(".hamburger").on("click", function () {
        $(this).toggleClass("open");
        $("nav.main.mobile").slideToggle("slow");
    });

    $("nav.main.mobile li.menu-item-has-children").on("click", function () {
        $(this).find("a").toggleClass("open");
        $(this).find("ul").slideToggle("slow");
    });
});