$(document).ready(function() {

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

});