

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
  $(this).parent().css("display","none")
})




$('.treatmentSlider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    dots:true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
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
    arrows:false,
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


  // counter

  function counter1() {
    let i = 0
    const interval = setInterval(function () {
        i += 500
        $(".patients").text(i)
        if (i >= 5000) {
            clearInterval(interval)
        }
    }, 50)
}
  function counter2() {
    let i = 0
    const interval = setInterval(function () {
        i += 1
        $(".years").text(i)
        if (i >= 15) {
            clearInterval(interval)
        }
    }, 50)
}
  function counter2() {
    let i = 0
    const interval = setInterval(function () {
        i += 1
        $(".years").text(i)
        if (i >= 15) {
            clearInterval(interval)
        }
    }, 50)
}
  function counter3() {
    let i = 0
    const interval = setInterval(function () {
        i += 1
        $(".surgeries").text(i)
        if (i >= 36) {
            clearInterval(interval)
        }
    }, 50)
}
  function counter4() {
    let i = 0
    const interval = setInterval(function () {
        i += 1
        $(".staff").text(i)
        if (i >= 23) {
            clearInterval(interval)
        }
    }, 50)
}

$(document).scroll(function(){
  const scrollvalue  = window.scrollY
  if(scrollvalue>75){
      counter1()
      counter2()
      counter3()
      counter4()
  }
})

      $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
          type: 'image',
          gallery: {
              enabled: true, // Enable gallery mode
              navigateByImgClick: true, // Navigate by clicking on the image
              preload: [0, 1], // Preload previous and next images
          },
          image: {
              titleSrc: 'alt', // Use the "alt" attribute as the title
          },
          zoom: {
              enabled: true, // Enable zoom effect
              duration: 300, // Animation duration
          },
      });
      });