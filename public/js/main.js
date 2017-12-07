$(document).ready(function() {

    $(window).resize(function(){
        var h = $(window).height();
        $('.height').css({'min-height':h});
    });
    $(window).trigger('resize');


    var solt = $('.solt');
    var products = $('.productsInCart');



    $('.zakazat').click(function(e) {
        e.preventDefault(e);
        $.ajax({
            url: '/add-to-cart/' + this.id,
            type: "GET",
            success: function(data) {
                solt.removeClass('d-none');
                console.log('Добавлено в корзину');
                solt.empty();
                solt.text(data.totalQty);
                var count = 1;


                // var id = data.product.item.id;
                // var Id = $('.productId');

                // products.empty();
                // products.append()
                //     var i = 1;
                //
                // for(var product of data.products)
                //     {
                //     '<div class = "dropdown-item" >' +
                //     '<div class = "row text-white" >' +
                //     '<div class = "col-2 count" >' + (i++) +
                //     '</div >' +
                //         '<div class = "col-6" >' +
                //             '<span class = "productId d-none" >' + product.item.id +
                //             '</span >' +
                //         console.log(product.item.id);
                //             '<span class = "qty" >' + product.qty +
                //             '</span >' + x +
                //             '<span class = "xname" >' + product.item.name +
                //             '</span>' +
                //         '</div >' +
                //         '<div class = "col-4 cost" >' + product.price + сом +
                //         '</div>' +
                //         '</div>' +
                //         '</div>' +
                //         if ($i > 7) {
                //         '<div class = "dropdown-item" >' +
                //             '<div class = "row justify-content-center" >' +
                //                 '<div class = "col-auto text-light font-weight-bold" >' +
                //                 '</div >' +
                //             '</div>' +
                //             '</div>'
                //             break;
                //         }
                //     }
                //
                // console.log(data.products);

                // for (var product of data.products) {
                //     console.log(product)
                //     $('.productsInCart').append(
                //         '<div class="dropdown-item">' +
                //             '<div class="row text-white">' +
                //                 '<div class="col-2 count">' + count++ + '</div>' +
                //                 '<div class="col-6 xname">' + product.qty + ' x ' + product.name + '</div>' +
                //                 '<div class="col-4 cost">' + product.price + '</div>' +
                //             '</div>' +
                //         '</div>'
                //     );
                // }

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



    $('#modalProduct').on('show.bs.modal', function (event) {
        alert('jhgjh');
    });

    $('#modalupproduct').on('show.bs.modal', function (event) {
        alert('Тупое гавно!' +
            'Которое не запускается' +
            'Сука!!!' +
            'Долбоебизм' +
            '!!!!' +
            '')
    })

});

