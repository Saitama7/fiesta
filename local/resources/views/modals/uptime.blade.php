<!-- Modal -->
<div class="modal fade" id="modalupintervals" tabindex="-1" role="dialog" aria-labelledby="modalupintervals" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Размер</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/update/time" method="POST"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row pt-3">
                        <div class="col mb-5">
                            <input type="hidden" id="tid" name="id" value="{{ $time->id }}">
                            <label for="interval">Диапазон</label>
                            <input type="text" name="interval" id="interval" value="{{ $time->interval }}" class="form-control">
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