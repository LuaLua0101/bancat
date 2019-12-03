$(document).ready(function () {
    $('.homepage-sliders').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        numbers: false
    });
    $('.clients-sliders').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        numbers: false
    });
    $(".chatbox-btn").slick({
        slidesToShow: 1,
        slidesToShow: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        responsive: [
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 2,
                arrows: false,
                swipe: true
              }
            }
          ]
    });
    $(".product-item-slides").not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
    });
    $(".related-products-sliders").slick({
        slidesToShow: 1,
        dots: true,
        arrows: false,
        adaptiveHeight: true
    });
    // Scroll top
    $(window).on('scroll', function () {
        //Scroll top Hide Show
        if ($(window).scrollTop() >= 400) {
            $('#goTop').addClass('visible');
            $('#goTop').removeClass('hidden');
        } else {
            $('#goTop').addClass('hidden');
            $('#goTop').removeClass('visible');

        }
    }); // End Scroll Function

    $("#goTop").on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1500);
    });
      // Slider synching
      $('.slider-for').not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav'
    });
      $('.slider-nav').not('.slick-initialized').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        arrows: false,
        dots: true,
        centerMode: true,
        focusOnSelect: true
      });
    // Slider relate products
    $(".related-products-slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        numbers: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
                arrows: false
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
                swipe: true
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                swipe: true
              }
            }
          ]
    })
    $('.kv-fa').rating({
        filledStar: '<i class="fa fa-star"></i>',
        emptyStar: '<i class="fa fa-star-o"></i>',
        showCaption: false
    });
    $('.clear-rating.clear-rating-active > i').removeClass("glyphicon glyphicon-minus-sign");
    $('.clear-rating.clear-rating-active > i').addClass("fa fa-minus");
});