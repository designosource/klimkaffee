$(document).ready(function(){
    $('.slick-container').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 4000,
        dots: true,
        arrows: false
    });
    
    $('.photo-navigation-year').click(function(){
        $('.photo-albums-per-year').slideToggle();
        $('.photo-navigation-year').toggleClass('reverse-arrow');
        /*if( $(this).hasClass('reverse-arrow') ){
        } else {
            $(this).siblings('.photo-albums-per-year').slideToggle();
            $(this).toggleClass('reverse-arrow');
        }*/
    });
    
    
});