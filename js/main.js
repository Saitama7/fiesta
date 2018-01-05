$(document).ready(function() {

    $(window).resize(function () {
        var h = $(window).height();
        $('.height').css({'min-height': h});
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

    $.ajax({
       url: '/order',
        type: 'GET',
        success: function (data) {
            
        }
    });




$('button#validatevipbutton').click(function (e) {
    e.preventDefault(e);

    $.ajax({
        url: '/validatevip',
        type: 'GET',
        data: {
            'id': $('#v-id').val(),
            'name': $('input[name=name]').val()
        },
        dataType: 'json',
        success: function (data) {
            console.log(data.flag);
            if (data.flag === true){
                $('.totalPrice').empty();
                $('.totalPrice').text(data.totalPrice);
                $('.vip-find').empty();
                $('.vip-find').append(
                    '<div class="modal-body">'+
                    data.vip.name + ', Мы вас нашли!' +
                    '</div>'+
                    '<div class="modal-footer">'+
                    '<a href="/order" class="btn btn-outline-success">Оформить заказ</a>'+
                    '</div>'
                )
            }else {
                $('.vip-find').empty();
                $('.vip-find').append(
                    'Попробуйте еще раз('
                )
            }

        },
        error: function () {
            console.log('ERROR!');
            $('.vip-find').empty();
            $('.vip-find').append(
                'Попробуйте еще раз('
            )
        }
    });
});

    $('.zakazat').click(function (e) {
        e.preventDefault(e);
        $.ajax({
            url: '/api/add-to-cart/' + this.id,
            type: "GET",
            success: function (data) {
                solt.removeClass('d-none');
                console.log('Добавлено в корзину');
                solt.empty();
                solt.text(data.totalQty);
                var count = 1;
                $('.totalPrice').text(data.totalPrice);
            },
            error: function () {

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
                modal.find('#p-id').val(data.product.id);
                modal.find('#p-name').val(data.product.name);
                modal.find('#p-cost').val(data.product.cost);
                modal.find('#p-desc').val(data.product.desc);
                modal.find('#p-type').val(data.product.type_id);
                modal.find('#p-size').val(data.product.size_id);
                 modal.find('#p-vid').val(data.product.vid_id);
                modal.find('#p-img').val(data.product.image_path);
                console.log(data.product.status);
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
                modal.find('#d-id').val(data.delivery.id);
                modal.find('#d-name').val(data.delivery.name);
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
                modal.find('#s-id').val(data.size.id);
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
    
    $('#modalmore').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);
        $.ajax({
            url: '/more/products/' + button.data('id'),
            type: 'GET',
            success: function (data) {
                $('.tbody').empty();
                for(var product of data.products){
                    $('.tbody').append(
                        '<tr>'+
                            '<td class="align-middle justify-content-center">' + product.id + '</td>'+
                            '<td><img class="w-50 align-middle justify-content-center" src="/uploads/products/' + product.image_path + '" alt=""></td>'+
                            '<td class="align-middle justify-content-center">' + product.name + '</td>'+
                            '<td class="align-middle justify-content-center">' + product.cost +  'сом' + '</td>'+
                            '<td class="align-middle justify-content-center">' + product.pivot.count_product + '</td>'+
                        '</tr>'
                    )
                }
            }
        });
    });

    $(".del").click(function () {
        $.ajax({
            url: '/itogo',
            type: 'GET',
            success: function (data) {
                var ito = data.totalPrice;
                if (document.getElementById("ciity").checked === true){
                    if (data.totalPrice === ito){
                        data.totalPrice += 150;
                        $('.totalPrice').empty();
                        $('.totalPrice').text(data.totalPrice);
                        $('input[name=totalPrice]').val(data.totalPrice);
                        console.log(data.totalPrice);
                    }else {
                        data.totalPrice -= 300;
                        data.totalPrice += 150;
                        $('.totalPrice').empty();
                        $('.totalPrice').text(data.totalPrice);
                        $('input[name=totalPrice]').val(data.totalPrice);
                        console.log(data.totalPrice);
                    }
                }
                if (document.getElementById("notcity").checked === true){
                    if (data.totalPrice === ito){
                        data.totalPrice += 300;
                        $('.totalPrice').empty();
                        $('.totalPrice').text(data.totalPrice);
                        $('input[name=totalPrice]').val(data.totalPrice);
                        console.log(data.totalPrice);
                    }else {
                        data.totalPrice -= 150;
                        data.totalPrice += 300;
                        $('.totalPrice').empty();
                        $('.totalPrice').text(data.totalPrice);
                        $('input[name=totalPrice]').val(data.totalPrice);
                        console.log(data.totalPrice);
                    }

                }
            }
        });
    });

});






