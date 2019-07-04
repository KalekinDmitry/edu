<div class="form-group">
    <div class="form-group">
        <label for="">Заголовок</label>
        <input type="text" class="form-control" name="title" placeholder="Заголовок новости" maxlength="25"
               value="{{$course->title ?? ""}}" required>
    </div>
    <div class="form-group">
        <label for="">Slug (Создаётся автоматически)</label>
        <input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация"
               value="{{$course->slug ?? ""}}" readonly="">
    </div>
    <div class="form-group">
        <label for="">Краткое описание</label>
        <textarea class="form-control" id="description_short" maxlength="300"
                  name="description_short">{{$course->description_short ?? ""}}</textarea>
    </div>
    <div class="form-group">
        <label for="">Полное описание</label>
        <textarea class="form-control" id="description" name="description">{{$course->description ?? ""}}</textarea>
    </div>
    <div class="form-group">
        <label for="">Ключевые слова</label>
        <input type="text" class="form-control" name="tags" placeholder="Ключевые слова, через запятую"
               value="{{$course->tags ?? ""}}">
    </div>
    <div class="form-group">
        <label for="">Ссылка на видео</label>
        <textarea class="form-control" id="video" maxlength="300"
                  name="video">{{$course->video ?? ""}}</textarea>
    </div>
</div>