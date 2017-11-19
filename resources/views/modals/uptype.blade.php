<!-- Modal -->
<div class="modal fade modaluptype" id="modaluptype" tabindex="-1" role="dialog" aria-labelledby="modaluptype" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Тип</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/update/type/{{ $type->id }}"  method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row pt-3">
                        <div class="col-12">
                            <label for="t-name"></label>
                            <input type="text" name="name" class="form-control" id="t-name" value="{{ $type->name }}">
                        </div>
                    </div>
                    <p class="nurlan"></p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-outline-success">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>