$(document).ready(function() {

    $(window).resize(function(){
        var h = $(window).height();
        $('.height').css({'min-height':h});
    });
    $(window).trigger('resize');

    $('.zakazat').click(function(e) {
        e.preventDefault(e);
        alert(this.id);
        $.ajax({
            url: '/add-to-cart/' + this.id,
            type: "GET",
            success: function(data) {
                console.log('Добавлено в корзину');
            },
            error: function() {

            }
        });
    });




    $('.modal.fade').on('show.bs.modal', function(event){
        alert('sfasdfsdf');
    });

    $('#modalproduct').on('show.bs.modal', function(event){
        alert('sfasdfsdf');
    });
})

