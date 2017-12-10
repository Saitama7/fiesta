<!-- Modal -->
<div class="modal fade" id="modalupvip" tabindex="-1" role="dialog" aria-labelledby="modalupvip" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">VIP - клиент</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/update/vip" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row pt-3">
                        <div class="col-12 mb-4">
                            <input type="hidden" id="v-id" name="id" value="{{ $vip->id }}">
                            <label for="v-name">ФИО</label>
                            <input type="text" name="name" value="{{ $vip->name }}" class="form-control" id="v-name">
                        </div>
                        <div class="col-12 mb-4">
                            <label for="v-phone">Номер телефона</label>
                            <input type="text" name="phone_number" value="{{ $vip->phone_number }}" class="form-control" id="v-phone">
                        </div>
                        <div class="col-12 mb-4">
                            <label for="v-address">Адрес местожительства</label>
                            <input type="text" name="address" value="{{ $vip->address }}" class="form-control" id="v-address">
                        </div>
                        <div class="col-12 mb-4">
                            <label for="v-disc">Скидка (%)</label>
                            <input type="text" name="discount" value="{{ $vip->discount }}" class="form-control" id="v-disc">
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