<!-- Modal -->
<div class="modal fade" id="modalupproduct" tabindex="-1" role="dialog" aria-labelledby="modalupproduct" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Товар</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/update/product" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row pt-3">
                        <div class="col-6 mb-3">
                            <input type="hidden" id="p-id" name="id" value="{{ $product->id }}">
                            <label for="p-name" class="pull-left">Наименование</label>

                            <input type="text" name="name" value="{{ $product->name }}" class="form-control pull" id="p-name" value="" size="25">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="p-cost">Цена</label>
                            <input type="text" name="cost" value="{{ $product->cost }}" class="form-control" id="p-cost" size="10">
                        </div>
                        <div class="col-12 mb-4">
                            <label for="p-desc">Описание</label>
                            <textarea type="text" name="desc" value="{{ $product->desc }}" class="form-control" id="p-desc" rows="5"></textarea>
                        </div>
                        <div class="col-4 mb-4">
                            <label for="p-type">Тип</label>
                            <select class="form-control form-control"  name="type_id"  id="p-type">
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4 mb-4">
                            <label for="p-size">Категория</label>
                            <select class="form-control form-control" name="size_id"  id="p-size">
                                @foreach($sizes as $size)
                                    <option value="{{ $size->id }}">{{ $size->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4 mb-4">
                            <label for="p-vid">Популярный</label>
                            <select class="form-control form-control" name="vid_id"  id="p-vid">
                                @foreach($vids as $vid)
                                    <option value="{{ $vid->id }}">{{ $vid->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="p-img">Изображение</label>
                            <input type="file" name="image_path" class="form-control-file" >
                        </div>
                        <div class="col-12">
                                <label for="p-status" class="p-status">
                                    <input type="checkbox" name="status" class="form-check-input form-control"  id="p-status">
                                    Отображать
                                </label>
                        </div>
                        <div class="col-12">
                            <label for="p-slide">
                                <input type="checkbox" class="form-check-input form-control" id="p-slide" name="slide_status">
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