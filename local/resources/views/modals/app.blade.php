<!-- Modal -->
<div class="modal fade" id="modalapp" tabindex="-1" role="dialog" aria-labelledby="modalapp" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Новый тип</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/update/app" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row pt-3">
                        <div class="col mb-5 row">
                            <input type="hidden" id="p-id" name="id" value="{{ $app->id }}">
                            <div class="col-4"><label for="#logo">Логотип</label></div>
                            <div class="col-8"><input type="file" name="logo_path" id="logo" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col mb-5 row">
                            <div class="col-4"><label for="#banner">Баннер</label></div>
                            <div class="col-8"><input type="file" name="img_path" id="banner" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col mb-5 row">
                            <div class="col-4"><label for="#facebook">Facebook</label></div>
                            <div class="col-8"><input type="text" name="facebook" id="facebook" value="{{ $app->facebook }}" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col mb-5 row">
                            <div class="col-4"><label for="#instagram">Instagram</label></div>
                            <div class="col-8"><input type="text" name="instagram" id="instagram" value="{{ $app->instagram }}" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col mb-5 row">
                            <div class="col-4"><label for="#twitter">Twitter</label></div>
                            <div class="col-8"><input type="text" name="twitter" value="{{ $app->twitter }}" id="twitter" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col mb-5 row">
                            <div class="col-4"><label for="#odnoklassniki">Odnoklassniki</label></div>
                            <div class="col-8"><input type="text" name="odnoklassniki" value="{{ $app->odnoklassniki }}" id="odnoklassniki" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col mb-5 row">
                            <div class="col-4"><label for="#tel">Телефон</label></div>
                            <div class="col-8"><input type="text" name="tel" value="{{ $app->tel }}" id="tel" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col mb-5 row">
                            <div class="col-4"><label for="#whatsapp">Whatsapp</label></div>
                            <div class="col-8"><input type="text" name="whatsapp" value="{{ $app->whatsapp }}" id="whatsapp" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col mb-5 row">
                            <div class="col-4"><label for="#telegram">Telegram</label></div>
                            <div class="col-8"><input type="text" name="telegram" id="telegram" value="{{ $app->telegram }}" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col mb-5 row">
                            <div class="col-4"><label for="#viber">Viber</label></div>
                            <div class="col-8"><input type="text" name="viber" id="viber" value="{{ $app->viber }}" class="form-control"></div>
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