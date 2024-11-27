

$('.menuOpen').click(function(){
  $('.mobileMenuItems').show()
})



    $('.closeBtn').click(function(){
        $('.mobileMenuItems').hide()
    })

$('.lowerMobileMenu').click(function(){

  $('.secondMobileMenu').toggle()
})


// mobileMenu


$('.secondMenuListItem').click(function(){
  $(this).children('.mobileDropdown').show()
})

$('.mobileClose').click(function(){
  $(this).parent('.mobileDropdown').hide()
})




$('.treatmentSlider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: true,
    dots:true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          initialSlide: 1,
          dots:false,
        }
      }
  ]
  });
$('.reviewSlider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    dots:true,
    speed: 500,
    infinite: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          initialSlide: 1
        }
      }
  ]
  });