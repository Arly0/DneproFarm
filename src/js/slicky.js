$(document).ready(function(){
    if($('div').is('.slick-slider')){
        $('.slick-slider').slick({
            slidesToShow: 1, //сколько слайдов показывать в карусели
            slidesToScroll: 1, // сколько слайдов прокручивать за раз
            dots: true,
            infinite: false,
            arrows: false,
            swipe: false,
            asNavFor: '.common-slick',
        });

        $('.slick_company').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            swipe: true,
            infinite: true,
            asNavFor: '.common-slick',
            responsive: [
                {
                breakpoint: 500,
                settings: {
                    slidesToShow: 2,                  
                }
                }
            ]
        });

        $('.slick-company-desc').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            swipe: false,
            infinite: true,
            asNavFor: '.common-slick',
        });
    }
});