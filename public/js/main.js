$(document).ready(function() {

    $(window).resize(function(){
        var h = $(window).height();
        $('.height').css({'min-height':h});
    });
    $(window).trigger('resize');

    $('.zakazat').click(function(e) {
        e.preventDefault(e);
        $.ajax({
            url: '/add-to-cart/' + this.id,
            type: "GET",
            success: function(data) {
                console.log('Добавлено в корзину');
                $('.solt').empty();
                $('.solt').text(data.totalQty);
                var count = 1;
                // var id = data.product.item.id;
                // var Id = $('.productId');

                $('.productsInCart').empty();
                console.log(data.products);

                for (var product of data.products) {
                    console.log(product)
                    $('.productsInCart').append(
                        '<div class="dropdown-item">' +
                            '<div class="row text-white">' +
                                '<div class="col-2 count">' + count++ + '</div>' +
                                '<div class="col-6 xname">' + product.qty + ' x ' + product.name + '</div>' +
                                '<div class="col-4 cost">' + product.price + '</div>' +
                            '</div>' +
                        '</div>'
                    );
                }

                // for (var Id of Id) {
                //     console.log(Id.innerText);
                //     if (id == Id.innerText) {
                //         $('.qty').text(data.product.qty);
                //     }
                //     else {
                //         $('.productsInCart').append(
                //             '<div class="dropdown-item">' +
                //             '<div class="row text-white">' +
                //             '<div class="col-2 count">' + (+count + +1) + '</div>' +
                //             '<div class="col-6 xname">' + data.product.qty + ' x ' + data.product.item.name + '</div>' +
                //             '<div class="col-4 cost">' + data.product.price + '</div>' +
                //             '</div>' +
                //             '</div>'
                //         );
                //     }
                // }


                $('.totalPrice').text(data.totalPrice);
            },
            error: function() {

            }
        });
    });



    $('#modalProduct').modal('show');
    $('#modalProduct').on('show.bs.modal', function (e) {
        alert('sdsfdf');
    });

});

