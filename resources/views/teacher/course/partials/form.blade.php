
    {{ csrf_field() }}

    {{-- Form include --}}
    <div class="form-group">
        <label for="title">@lang('content.headline')</label>
        <input type="text" class="form-control" name="title" maxlength="35"
               placeholder="Введите название курса"
               value="{{$course->title ?? ""}}" required>
    </div>
    <div class="form-group">
        <label for="slug">@lang('content.slug')</label>
        <input class="form-control" type="text" name="slug"
               value="{{$course->slug ?? ""}}" readonly="">
    </div>
    <div class="form-group">
        <label for="description_short">@lang('content.shortdescription')</label>
        <textarea class="form-control" id="description_short" maxlength="300"
                  style="height:128px; resize: none"
                  placeholder="До 320 символов"
                  name="description_short" required>{{$course->description_short ?? ""}}</textarea>
    </div>
    <div class="form-group">
        <label for="description">@lang('content.fulldescription')</label>
        <textarea class="form-control" id="description" name="description"
                  placeholder="До 1280 символов"
                  style="height:128px; resize: none"
                  required>{{$course->description ?? ""}}</textarea>
    </div>
    <div class="form-group">
        <label for="tags">@lang('content.tagsns')</label>
        <input type="text" class="form-control" name="tags"
               placeholder="До 10 тегов"
               value="{{$course->tags ?? ""}}">
    </div>
    <div class="form-group">
        <label for="video">@lang('content.linktovideo')</label>
        <input type="text" class="form-control" id="video" maxlength="300"
               placeholder="Вставьте ссылка на видео youtube"
               name="video" value="{{$course->video ?? ""}}">
    </div>
    <div class="form-group">
        <label for="cost">@lang('content.setcrsprice')</label>
        <input class="form-control" type="number" id="cost" max="100"
               placeholder="Введите стоимость курса"
               name="cost" min="0" required value="{{$course->cost ?? ""}}">
    </div>

    <div class="form-group">
        <label>Изображение курса</label>
        <input type="text" class="form-control font-weight-bold text-dark"
               placeholder="Ссылка на изображение курса">
    </div>
    <div class="card p-3 my-3" style="border-style: dashed">
        <div class="row justify-content-center pt-3">
            <img class="mr-2" style="opacity: 0.3" src="{{ asset('assets/icons/icon_downloadcloud.svg') }}"
                 width="22px">
            <p class="text-muted col-md-12 text-center">Загрузите изображения курса</p>
        </div>
    </div>
    <div class="form-group" style="margin-left:0;">
        <label for="">@lang('content.chcovifch')</label><br>

        <input type="file" name="image">
    </div>


    <div class="row justify-content-left mx-0">
        <button class="btn btn-primary mr-1" type="submit">@lang('content.apply')</button>
        <a class="btn btn-light"
           href="{{ route('teacher.dashboard') }}">@lang('content.cancel')</a>
    </div>
</form>