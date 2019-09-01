jQuery(document).ready(function () {
    
    jQuery('.slider').slick({
       autoplay: true,
           autoplaySpeed: 2000,
           slidesToShow: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 912,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 650,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });

    if($(window).width() > 1024){
        $('.slider').slick('unslick');
    }

    /* Code de gestion des onglets  */
    /* On surveille les clics sur les liens du menu de navigation */

    jQuery('#tab-nav a').click(function (e) {
        /* Code a executer en cas de clic sur un des liens */
        e.preventDefault();
        var tab = jQuery(this).data('tab');

        /* On supprime la class tab-nav-active de tous les onglets*/
        jQuery('#tab-nav a').removeClass('tab-nav-active');

        /* On supprime la class tab-active de tous les contenus */
        jQuery('.tab').removeClass('tab-active');



        /* On ajoute la classe tab-active à l'onglet qui doit être visible */
        jQuery('#' + tab).addClass('tab-active');
        /* On ajoute la classe tab-nav-active à l'onglet activé */
        jQuery(this).addClass('tab-nav-active');
    });



    var btn = $('#button');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

   });