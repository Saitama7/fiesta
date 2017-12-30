<!-- Modal -->
<div class="modal fade" id="validatevip" tabindex="-1" role="dialog" aria-labelledby="validatevip" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">У вас есть VIP - карта?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <form action="/check/vip" method="POST" enctype="multipart/form-data">
                        <div class="row pt-3">
                            <div class="col-12 mb-5">
                                <input type="text" id="v-id" name="id" class="form-control" placeholder="VIP код">
                            </div>
                            <div class="col mb-5">
                                <input type="text" name="name" class="form-control" placeholder="Ваше имя или номер телефона" size="25">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" id="validatevipbutton" data-toggle="modal" data-target="#result">Проверить</button>
                            <a href="/order" class="btn btn-outline-success">Нет VIP-карты</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@include('modals.result')