$(document).ready(function() {




    var div = document.getElementById("div1");
    $( "a.onetwo" ).bind( "click", function(event) {



        var image = $(this).parent().parent().find('img');
        var cart = $('.korzina');

        var imageFly = image.clone()
            .offset(
                {
                    top: image.offset().top,
                    left: image.offset().left
                }
            )
            .css(
                {
                    'opacity': '0.7',
                    'position': 'absolute',
                    'height': image.height(),
                    'width': image.width(),
                    'z-index': '9999'
                }
            )
            .appendTo(
                $('body')
            )
            .animate(
                {
                    'top': cart.offset().top - 10,
                    'left': cart.offset().left - 10,
                    'width': 55,
                    'height': 55
                },
                1100);

        imageFly.animate(
            {
                'width': 0,
                'height': 0
            },
            function () {
                $(this).detach()
            }
        );



    });



});