/*var options = {
  offset: 50
}

var header = new Headhesive('.header', options);*/
                    $('.autoplay').slick({
                      slidesToShow: 4,
                      slidesToScroll: 1,
                      autoplay: false,
                      autoplaySpeed: 2000,
                      prevArrow: $('.prev'),
                      nextArrow: $('.next'),
                    });
                    
                    $('.slaider').slick({
                      slidesToShow: 4,
                      slidesToScroll: 1,
                      autoplay: true,
                      autoplaySpeed: 2500,
                      prevArrow: $('.preve'),
                      nextArrow: $('.nexte'),
                    });
