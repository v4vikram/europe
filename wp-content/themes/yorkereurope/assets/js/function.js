// header
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

         //>=, not <=
        if (scroll >= 100) {
            $(".header").addClass("sticky");
        }else{
            $(".header").removeClass("sticky");
        }
    });

	$(function(){
				$('.header').find('.dropsub-menu').append("<span class='down_arrow'><i class='fa-regular fa-angle-down'></i>		</span>")
     })

    // mobile header
$(function(){
  $('.toggler').click(function(){
    $('header nav').addClass('active');
    $('.black_wall').addClass('active');
  })
  $('nav .close').click(function(){
    $('header nav').removeClass('active');
    $('.black_wall').removeClass('active');
  })

 $(document).on("click","nav ul li .down_arrow",function() {
      $(this).prev().slideToggle();
  });

  $(document).on("click","nav ul li .arrow",function() {
      $(this).prev().slideToggle();
  });
})
/////////////////// SLIDER JS /////////////////
  $('.banner-slider').slick({
    dots: true,
    arrows:false,
    autoplay: true,
    infinite: true,
    speed: 1200,
    slidesToShow: 1,
    slidesToScroll: 1,
  })

/////////////////// tour JS /////////////////
$('.tour-slider').slick({
  dots: false,
  arrows: true,
  autoplay: true,
  infinite: true,
  focusOnSelect: true,
  lazyLoad: 'progressive',
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [{
                breakpoint: 990,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              },
              {
                
              }]
})    

/////////////////// review /////////////////
$('.review-slider').slick({
  dots: true,
  arrows:false,
  infinite: true,
  speed: 1200,
  slidesToShow: 1,
  focusOnSelect: true,
  centerMode: true,
  centerPadding: '320px',
  responsive: [
    {
      breakpoint: 990,
      settings: {
        slidesToShow: 1,
        centerPadding: '30px'
      }
    }
  ]
});

/////////////////// partner /////////////////
$('.partner-slider').slick({
  dots: true,
  arrows: false,
  autoplay: true,
  infinite: true,
  focusOnSelect: true,
  lazyLoad: 'progressive',
  speed: 500,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [{
                breakpoint: 990,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
                }
              },
              {
                
              }]
}) 

///////////// form pop js /////////////
$(function(){
  $('.ser_open').click(function(){
    $('.ser_form_bg').addClass('active');
  })
  $('.close_pop').click(function(){
    $('.ser_form_bg').removeClass('active');
  })
})


/////////////////// gallery JS /////////////////
$('.gallery-slider').slick({
  dots: false,
  arrows: true,
  autoplay: true,
  infinite: true,
  focusOnSelect: true,
  lazyLoad: 'progressive',
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [{
                breakpoint: 990,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              },
              {
                
              }]
}) 


 

