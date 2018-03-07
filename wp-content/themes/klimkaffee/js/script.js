$(document).ready(function(){
    $('.slick-container').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        dots: true,
        arrows: false
    });
    
    $('.photo-navigation-year').click(function(){
        $(this).siblings('.photo-albums-per-year').slideToggle();
        $(this).toggleClass('reverse-arrow');
    });
    
    
});