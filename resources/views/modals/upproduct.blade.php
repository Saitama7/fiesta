<!-- Modal -->
<div class="modal fade" id="modalupproduct" tabindex="-1" role="dialog" aria-labelledby="modalupproduct" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Новый товар</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/update/product/{{ $product->id }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row pt-3">
                        <div class="col-6 mb-3">
                            <label for="p-name" class="pull-left">Наименование</label>
                            <input type="text" name="name" class="form-control pull" id="p-name" value="{{ $product->name }}" size="25">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="p-cost">Цена</label>
                            <input type="text" name="cost" class="form-control" id="p-cost" value="{{ $product->cost }}" size="10">
                        </div>
                        <div class="col-12 mb-4">
                            <label for="p-desc">Описание</label>
                            <textarea type="text" name="desc" class="form-control" id="p-desc" value="{{ $product->desc }}" rows="5"></textarea>
                        </div>
                        <div class="col-6 mb-4">
                            <label for="p-type">Тип</label>
                            <select class="form-control form-control" name="type_id" value="{{ $product->type_id }}" id="p-type">
                                @foreach($types as $type)
                                    <option>{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 mb-4">
                            <label for="p-size">Размер</label>
                            <select class="form-control form-control" name="size_id" value="{{ $product->size_id }}" id="p-size">
                                @foreach($sizes as $size)
                                    <option>{{ $size->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="p-img">Изображение</label>
                            <input type="file" name="image_path" class="form-control-file" value="{{ $product->image_path }}" id="p-img">
                        </div>
                        <div class="col-12">
                            <label for="p-status">
                                <input type="checkbox" name="status" class="form-check-input form-control" value="{{ $product->status }}" id="p-status">
                                Отображать
                            </label>
                        </div>
                        <div class="col-12">
                            <label for="p-slide">
                                <input type="checkbox" name="slide_status" class="form-check-input form-control" value="{{ $product->slide_status }}" id="p-slide">
                                Показать на слайде
                            </label>
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