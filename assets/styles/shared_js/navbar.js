// 
    /*------------------------Navbar----------------------------------*/

    var header_height = $('header').height() + 100;

    function navbarFixed(){

        window.addEventListener('scroll', function () {
            
            if (window.pageYOffset >= header_height) {
                            $(".my_header").addClass("sticky_nav");
                            $(".nav-link").addClass("links_color");
                            $(".user_connect").addClass("links_color");
                        } else {
                            $(".my_header").removeClass("sticky_nav");
                            $(".nav-link").removeClass("links_color");
                            $(".user_connect").removeClass("links_color");
                        }
          });
    };
    navbarFixed();

// A utiliser si la modal ne s'affiche pas correctement
    jQuery(function () {$("#login_modal").appendTo("body");});
    jQuery(function () {$("#register_modal").appendTo("body");});

