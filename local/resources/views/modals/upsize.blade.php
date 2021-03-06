<!-- Modal -->
<div class="modal fade" id="modalupsize" tabindex="-1" role="dialog" aria-labelledby="modalupsize" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Размер</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/update/size" method="POST"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row pt-3">
                        <div class="col mb-5">
                            <input type="hidden" id="s-id" name="id" value="{{ $size->id }}">
                            <label for="s-name">Размер</label>
                            <input type="text" name="name" id="s-name" value="{{ $size->name }}" class="form-control">
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