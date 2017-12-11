$(document).ready(function() {

    $(window).resize(function(){
        var h = $(window).height();
        $('.height').css({'min-height':h});
    });
    $(window).trigger('resize');


    var solt = $('.solt');
    var products = $('.productsInCart');


    $.ajax({
       url: '/api/cart',
        type: 'GET',
        success: function (data) {
            if (data.totalQty > 0) {
                solt.text(data.totalQty);
            }
        },
        error: function () {
            console.log('error');
        }
    });


    $('.zakazat').click(function(e) {
        e.preventDefault(e);
        $.ajax({
            url: '/api/add-to-cart/' + this.id,
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


    $('#modalupproduct').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);
        $.ajax({
            url: '/edit/product/' + button.data('id'),
            type: 'GET',
            success: function (data) {
                modal.find('#p-id').val(data.product.id)
                modal.find('#p-name').val(data.product.name)
                modal.find('#p-cost').val(data.product.cost)
                modal.find('#p-desc').val(data.product.desc)
                modal.find('#p-type').val(data.product.type_id)
                modal.find('#p-size').val(data.product.size_id)
                // modal.find('#p-vid').val(data.product.vid_id);
                modal.find('#p-img').val(data.product.image_path)
                console.log(data.product.status)
                if (data.product.status == 1) {
                    modal.find('#p-status').attr('checked', true);
                }
                else {
                    modal.find('#p-status').attr('checked', false);
                }
                if (data.product.slide_status == 1) {
                    modal.find('#p-slide').attr('checked', true);
                }
                else {
                    modal.find('#p-slide').attr('checked', false);
                }

            }
        });
    });

    $('#modalupdeliv').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);
        $.ajax({
            url: '/edit/delivery/' + button.data('id'),
            type: 'GET',
            success: function (data) {
                modal.find('#d-id').val(data.delivery.id)
                 modal.find('#d-name').val(data.delivery.name)
                 modal.find('#d-cost').val(data.delivery.cost)
            }
        });
    });

    $('#modalupsize').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);
        $.ajax({
            url: '/edit/size/' + button.data('id'),
            type: 'GET',
            success: function (data) {
                modal.find('#s-id').val(data.size.id)
                modal.find('#s-name').val(data.size.name)
            }
        });
    });

    $('#modaluptype').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);
        $.ajax({
            url: '/edit/type/' + button.data('id'),
            type: 'GET',
            success: function (data) {
                modal.find('#t-id').val(data.type.id);
                modal.find('#t-name').val(data.type.name);
            }
        });
    });

    $('#modalupvip').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);
        $.ajax({
            url: '/edit/vip/' + button.data('id'),
            type: 'GET',
            success: function (data) {
                modal.find('#v-id').val(data.vip.id);
                modal.find('#v-name').val(data.vip.name);
                modal.find('#v-phone').val(data.vip.phone_number);
                modal.find('#v-address').val(data.vip.address);
                modal.find('#v-discount').val(data.vip.discount);
            }
        });
    });

    $('#modalupvid').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);
        $.ajax({
            url: '/edit/vid/' + button.data('id'),
            type: 'GET',
            success: function (data) {
                modal.find('#vid-id').val(data.vid.id);
                modal.find('#vid-name').val(data.vid.name);
            }
        });
    });

    $('#modalupintervals').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);
        $.ajax({
            url: '/edit/time/' + button.data('id'),
            type: 'GET',
            success: function (data) {
                modal.find('#tid').val(data.time.id);
                console.log(data.time.id);
                modal.find('#interval').val(data.time.interval);
            }
        });
    });



});

