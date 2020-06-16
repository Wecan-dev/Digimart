

$(document).ready(function(){
  // $(".box-slide").slick({
  //   dots: true,
  //   arrows: true,
  //   adaptiveHeight: true,
  //   fade: true,
  //   mobileFirst: true,
  //   cssEase: 'linear',
  //   lazyLoad: 'ondemand',
  //   adaptiveHeight: true,
  //   adaptiveWidth: true,
  //   arrows: true,
  //   centerMode: true,
  //   autoplay: false,
  //   infinite: true,
  //   speed: 300,
  //   fade: true,
  //   cssEase: 'linear',
  //   centerPadding:false,
  // });
  
  $('.slider-nav').slick({
   slidesToShow: 4,
   slidesToScroll: 1,
   dots: true,
   responsive: [
   {
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      infinite: true,

    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,

    asNavFor: '.slider-nav2',
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        arrows: true,
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,


      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });
  $('.slider-nav2').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    verticalSwiping: true,
    vertical: true,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        vertical: false,

        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        vertical: false,

      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        vertical: false,

      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });

  $('.main-category__slick--mostrar').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: true,
    responsive: [
    {
     breakpoint: 1024,
     settings: {
       slidesToShow: 3,
       slidesToScroll: 3,
       infinite: true,
       dots: true
     }
   },
   {
     breakpoint: 600,
     settings: {
       slidesToShow: 2,
       slidesToScroll: 2,
     }
   },
   {
     breakpoint: 480,
     settings: {
       slidesToShow: 1,
       slidesToScroll: 1,
     }
   }
   
     ]
   });
  $('.box-slide').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   dots: true,
   responsive: [
   {
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: true
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
    }
  }
  
    ]
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

$('.btn-drop').click(function(){
  $('.dropdown-item__desktop').removeClass('visibleDesktop')
  $(this).siblings('.dropdown-item__desktop').addClass('visibleDesktop')
  $('.dropdown-item__mobile').removeClass('visibleMobile')
  $(this).siblings('.dropdown-item__mobile').addClass('visibleMobile')
})
