$(document).ready(function(){
  $(".single-item").slick({
    dots: true,
    arrows: true,
    adaptiveHeight: true,
    fade: true,
    mobileFirst: true,
    cssEase: 'linear',
    lazyLoad: 'ondemand',
    adaptiveHeight: true,
    adaptiveWidth: true,
    arrows: true,
    centerMode: true,
    autoplay: false,
    infinite: true,
    speed: 300,
    fade: true,
    cssEase: 'linear',
    centerPadding:false,
  });
  
 $('.slider-nav').slick({
   slidesToShow: 4,
   slidesToScroll: 1,
   dots: true,
 });

  
  $('.color-choose input').on('click', function() {
      var ravi_color = $(this).attr('data-image');

      $('.current').removeClass('current');
      $('.left_img .img[data-image = ' + ravi_color + '], .left_img .img-big[data-image = ' + ravi_color + ']').addClass('current');
    $(this).addClass('current');
  });

  $("#opciones").on( "click", function() {
      
      $('.marcas').show(); //muestro mediante clase
     });
    $("#opcionea").on( "click", function() {
     
      $('.marcas').hide(); //muestro mediante clase
    });
});