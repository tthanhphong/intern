$(document).ready(function() {
    $(".image-slider").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 2,
        prevArrow: `<i class="bi bi-arrow-left-circle" style="font-size: 2rem; color: #FF6363;"></i`,
        nextArrow: `<i class="bi bi-arrow-right-circle" style="font-size: 2rem; color: #FF6363;"></i>`,

        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});