$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 100,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
});