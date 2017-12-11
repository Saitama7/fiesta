<!-- Modal -->
<div class="modal fade" id="validatevip" tabindex="-1" role="dialog" aria-labelledby="validatevip" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Новый вид букета</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row pt-3">
                        <div class="col mb-5">
                            <input type="text" name="name" class="form-control" placeholder="Ваше имя" size="25">
                        </div>
                        <div class="col mb-5">
                            <input type="text" name="phone_number" id="phone" class="form-control" placeholder="Номер телефона" size="25">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Проверить</button>
                        <a href="/order" class="btn btn-outline-success">Нет VIP-карты</a>
                    </div>
                </div>
        </div>
    </div>
</div>