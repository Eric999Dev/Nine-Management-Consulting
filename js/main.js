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

    // $('#staff').mouseenter(function(){
    //     $('.profil img').hide();
    //     $('.descriptif-profil').show();
    // });

    // $('#staff').mouseleave(function (){
    //     $('.profil img').show();
    //     $('.descriptif-profil').hide();
    // });

    $('.item').click(function(){

        // if (!$(this).hasClass('or')) {
        //     $(this).removeClass('or');
        //     $(this).next().hide();
        //     
        // }
        if($(this).hasClass('or')){
            $(this).removeClass('or');
            $(this).next().hide();
            var notCurrent = !$(this);
            console.log(notCurrent);
            $(notCurrent).addClass('or');
            $(notCurrent).next().show();
        }else{
            $(this).addClass('or');
            $(this).next().show();
        }
   

});

   });