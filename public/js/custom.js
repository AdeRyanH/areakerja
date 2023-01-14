$(function () {
    $('.multiple-items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:"<a type='button' class='slick-prev prev' aria-hidden='true'></a>",
        nextArrow:"<a type='button' class='slick-next next' aria-hidden='true'></a>",
        autoplay: true,
        autoplaySpeed: 3000,

    responsive: [
        {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 3,
              arrows: false,
              // prevArrow:"<a type='button' class='slick-prev prev' aria-hidden='true'></a>",
              // nextArrow:"<a type='button' class='slick-next next' aria-hidden='true'></a>",
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              arrows: false
            }
        }
   ]
    });
});


$(function () {
  $('.multiple-items2').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      infinite: false,
      // rtl: true,
      responsive: [
          {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2.3,
                slidesToScroll: 3,
                infinite: false
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2.2,
                arrows: false,
                // prevArrow:"<a type='button' class='slick-prev prev' aria-hidden='true'></a>",
                // nextArrow:"<a type='button' class='slick-next next' aria-hidden='true'></a>",
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1.8,
                slidesToScroll: 2,
                arrows: false
              }
          }
 ]
  });
});
// if ($(window).width() < 1070) {
//     var slick = document.getElementById("slick");
//     slick.style.marginTop='50%';
// }
$(function () {
  $('.multiple-items3').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      infinite: false,
      // rtl: true,
      responsive: [
          {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2.3,
                slidesToScroll: 3,
                infinite: false
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2.2,
                arrows: false,
                // prevArrow:"<a type='button' class='slick-prev prev' aria-hidden='true'></a>",
                // nextArrow:"<a type='button' class='slick-next next' aria-hidden='true'></a>",
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 2,
                arrows: false
              }
          }
 ]
  });
});