$(document).ready(function () {
    $("nav.main").hide();

    $(".hamburger").on("click", function () {
        $(this).toggleClass("open");
        $("nav.main").slideToggle("slow");
    });
});