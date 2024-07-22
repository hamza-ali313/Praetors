

$(document).ready(function () {
  // Initialize Slick Carousel for main slider
  $('.portfolio-slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.portfolio-slider-nav' // Corrected the class name here
  });

  // Initialize Slick Carousel for navigation slider
  $('.portfolio-slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.portfolio-slider-for', // Corrected the class name here
    dots: true,
    focusOnSelect: true
  });
});
AOS.init({
  once: true
})
// // portfolio slider start
// $(document).ready(function () {
//   // Initialize Slick Carousel for main slider
//   $('.portfolio-slider-for').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: false,
//     fade: true,
//     asNavFor: '.slider-nav'
//   });

//   // Initialize Slick Carousel for navigation slider
//   $('.portfolio-slider-nav').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     asNavFor: '.slider-for',
//     dots: true,
//     focusOnSelect: true
//   });
// });



// portfolio slider end

// brands slider start
$(document).ready(function () {
  $('.brands-slider').slick({
    dots: false,
    prevArrow: false,
    nextArrow: false,
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    slidesToShow: 7,
    slidesToScroll: 1,
    infinite: true,
    swipeToSlide: true,
    centerMode: true,
    focusOnSelect: true,
    responsive: [
      { breakpoint: 1000, settings: { slidesToShow: 3 } },
      { breakpoint: 480, settings: { slidesToShow: 1 } }
    ]
  });
});

// brands slider end
// awards-slider start
$(document).ready(function () {
  $('.awards-slider').slick({
    dots: false,
    prevArrow: false,
    nextArrow: false,
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    swipeToSlide: true,
    centerMode: true,
    focusOnSelect: true,
    responsive: [
      { breakpoint: 1000, settings: { slidesToShow: 3 } },
      { breakpoint: 480, settings: { slidesToShow: 1 } }
    ]
  });
});

// awards-slider end

// brands slider start
$(document).ready(function () {
  $('.clients-slider').slick({
    dots: false,
    prevArrow: false,
    nextArrow: false,
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    slidesToShow: 6,
    slidesToScroll: 1,
    infinite: true,
    swipeToSlide: true,
    centerMode: true,
    focusOnSelect: true,
    responsive: [
      { breakpoint: 1000, settings: { slidesToShow: 3 } },
      { breakpoint: 480, settings: { slidesToShow: 1 } }
    ]
  });
});

// brands slider end

// counter js start **********************************************************************
jQuery(document).ready(function ($) {
  function startCounter() {
    var hT = $('.counter-sec').offset().top,
      hH = $('.counter-sec').outerHeight(),
      wH = $(window).height();
    if ($(window).scrollTop() > hT + hH - wH) {
      $(window).off("scroll", startCounter);
      $('.count').each(function () {
        var $this = $(this);
        var target = $this.find('span').data('target');
        $({ Counter: 0 }).animate({ Counter: target }, {
          duration: 2000,
          easing: 'swing',
          step: function (now) {
            $this.find('span').text(Math.ceil(now));
          }
        });
      });
    }
  }
  $(window).scroll(startCounter);
  startCounter();
});


// counter js end**********************************************************************



// Testimonial slider start
$(document).ready(function () {
  // Initialize Slick Carousel for main slider
  $('.testi-slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    asNavFor: '.testi-slider-nav',
    responsive: [
      { breakpoint: 1000, settings: { arrows: false } },
      { breakpoint: 480, settings: { arrows: false } }
    ]
  });

  // Initialize Slick Carousel for navigation slider
  $('.testi-slider-nav').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    asNavFor: '.testi-slider-for',
    dots: false,
    arrows: false,

  });
});


// Testimonial slider end

// typing effect start *********************************************************


// function typeEffect(element, speed) {
//   var text = element.innerHTML;
//   element.innerHTML = "";

//   var i = 0;
//   var timer = setInterval(function () {
//     if (i < text.length) {
//       element.append(text.charAt(i));
//       i++;
//     } else {
//       clearInterval(timer);
//     }
//   }, speed);
// }

// var speed = 75;
// var h2 = document.querySelector('.banner_content_left h2');
// var p = document.querySelector('.banner_content_left p');
// // var delay = h1.innerHTML.length * speed + speed;

// typeEffect(h2, speed);
// typeEffect(p, 30);

// setTimeout(function () {
//   p.style.display = "inline-block";
//   typeEffect(p, speed);
// }, delay);

// typing effect end *********************************************************

$(document).ready(function () {
  $('#NewClient').owlCarousel({
    loop: true,
    margin: 20,
    center: true,
    smartSpeed: 1000,
    autoplay: 5000,
    nav: false,
    dots: false,
    loop: true,
    responsive: {
      0: { items: 1 },
      600: { items: 2 },
      1000: { items: 4 }
    }
  });
  $('.global_disclamer h2').on('click', function () {

    $(this).toggleClass('active');

    $('.global_disclamer p:last-child').slideToggle();

  });
});