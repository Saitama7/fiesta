var h = $(window).width();
console.log(h);
var count = 1;
if (h < 1024 && h > 780){
    count = 3;
}
if (h <= 780 && h >= 500) {
    count = 3;
}
if (h < 500) {
    count = 2;
}
if (h >= 1024) {
    count = 4;
}

$('.autoplay').slick({
    slidesToShow: count,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    infinite: false,
});

$('.slaider').slick({
    slidesToShow: count,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 2500,
    prevArrow: $('.preve'),
    nextArrow: $('.nexte'),
    infinite: false,
});


