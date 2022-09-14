$(function() {

    var owl = $("#owl-demo");

    owl.owlCarousel({

        items:4,
        // center: true,
        navigation : false,
        dots: false,
        nav : false,
        loop: true,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        responsive:{

            0:{
                items:1,
            },
            768:{
                items:2,
            }
            // ,
            // 992:{
            //     items:2,
            // }
        }
    });
});



