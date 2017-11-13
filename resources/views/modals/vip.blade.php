<!-- Modal -->
<div class="modal fade" id="modalvip" tabindex="-1" role="dialog" aria-labelledby="modalvip" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Новый VIP - клиент</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/store/vip" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row pt-3">
                        <div class="col">
                            <input type="text" name="name" class="form-control" placeholder="ФИО" size="25">
                        </div>
                        <div class="col">
                            <input type="text" name="phone_number" class="form-control" placeholder="Номер телефона" size="25">
                        </div>
                        <div class="col">
                            <input type="text" name="address" class="form-control" placeholder="Адрес" size="25">
                        </div>
                        <div class="col">
                            <input type="text" name="discount" class="form-control" placeholder="Скидка(%)" size="25">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-outline-success">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>