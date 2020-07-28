/*
詳しい解説
https://webdesignday.jp/inspiration/technique/jquery-js/3847/
 */
jQuery(function ($) {
  $('.js-news').slick({
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 990,
        settings: {
          dots: true,
          arrows: false,
        }
      }
    ]
  });

  $('.js-front__shop').slick({
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: false,
    arrows: true,
    adaptiveHeight: false,
    fade: true,
    appendArrows: '.js-front__shop-arrow',
    prevArrow: '<button type=”button” class="prev">←</button>',
    nextArrow: '<button type=”button” class="next">→</button>',
    responsive: [
      {
        breakpoint: 990,
        settings: {
          prevArrow: '<button type=”button” class="prev">←PREV</button>',
          nextArrow: '<button type=”button” class="next">NEXT→</button>',
        }
      }
    ]
  });

  $('.js-catalog').slick({
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: false,
    arrows: true,
    adaptiveHeight: false,
    fade: true,
    appendArrows: '.js-catalog__arrow',
    prevArrow: '<button type=”button” class="prev">←</button>',
    nextArrow: '<button type=”button” class="next">→</button>',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          prevArrow: '<button type=”button” class="prev">←PREV</button>',
          nextArrow: '<button type=”button” class="next">NEXT→</button>',
        }
      }
    ]
  });

  $('.js-staff-hair').slick({
    slidesToShow: 5,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: false,
    arrows: true,
    adaptiveHeight: false,
    prevArrow: '<button type=”button” class="prev"></button>',
    nextArrow: '<button type=”button” class="next"></button>',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 4,
          prevArrow: '<button type=”button” class="prev"></button>',
          nextArrow: '<button type=”button” class="next"></button>',
        }
      },
      {
        breakpoint: 1439,
        settings: {
          slidesToShow: 5,
        }
      }
    ]
  });


});

