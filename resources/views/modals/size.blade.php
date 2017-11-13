<!-- Modal -->
<div class="modal fade" id="modalsize" tabindex="-1" role="dialog" aria-labelledby="modalsize" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Новый размер</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/store/size" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row pt-3">
                        <div class="col">
                            <input type="text" name="name" class="form-control" placeholder="Наименование" size="25">
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