/*
詳しい解説
https://webdesignday.jp/inspiration/technique/jquery-js/3847/
 */
jQuery(function ($) {
  $('.js-news').slick({
    slidesToShow: 1,
    autoplay:true,
    autoplaySpeed:5000,
    dots:false,
    arrows:true,

  });
});
