/*var options = {
 offset: 50
 }

 var header = new Headhesive('.header', options);*/
$('.autoplay').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    infinite: false,
});

$('.slaider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
    prevArrow: $('.preve'),
    nextArrow: $('.nexte'),
    infinite: false,

});


$('#modalProduct').on('show.bs.modal', function (event) {
    alert('dsafasdf');
})
// $(".owl-carousel").owlCarousel();

