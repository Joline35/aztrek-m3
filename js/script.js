$(document).ready(function () {
  // Menu Responsive
  $('.burger').sidr({
    source: ".nav-nav",
    displace: false,
  });

  $('body').click(function () {
    $.sidr('close', 'sidr');
  });



  // Album photo

  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 1,
        nav: false
      },
      1000: {
        items: 1.3,
        nav: true,
      }
    }
  })
});