<!-- Modal -->
<div class="modal fade" id="modalupdeliv" tabindex="-1" role="dialog" aria-labelledby="modalupdeliv" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Курьер</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/update/delivery" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row pt-3">
                        <div class="col">
                            <label for="d-name">Курьер</label>
                            <input type="text" name="name" class="form-control" id="d-name" value="{{ $delivery->name }}">
                        </div>
                        <div class="col">
                            <label for="d-cost"></label>
                            <input type="text" name="cost" class="form-control" id="d-cost" value="{{ $delivery->cost }}">
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