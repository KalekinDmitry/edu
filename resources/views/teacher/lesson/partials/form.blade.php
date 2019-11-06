<form style="padding: 0" class="contact-form col-md-7"
      action="{{ route('teacher.lesson.update', [$lesson->id]) }}" method="POST"
      enctype="multipart/form-data">
    <input type="hidden" name="_method" value="put">
    @csrf
    <input type="hidden" name="slug" value="{{ $lesson->slug ?? ""}}">
    <input type="hidden" name="module_id" value="{{ $lesson->module_id }}">


    <div class="form-group">
        <label for="title">Название</label>
        <input class="form-control" type="text" maxlength="64" name="title" placeholder="@lang('content.ltitle')"
               value="{{ $lesson->title ?? "" }}" required>
    </div>

    <div class="form-group">
        <label for="title">Отрывок из урока</label>
        <input class="form-control" type="text" maxlength="256" name="excerpt"
               placeholder="@lang('content.excerpt')" value="{{ $lesson->excerpt ?? "" }}"
               required>
    </div>

    <div class="form-group">
        <label for="is_published">@lang('content.pl')</label>
        <input name="is_published" type="hidden" value="0">
        <input class="" style="padding: 0" type="checkbox" name="is_published"
               id="publish" value="1"
               @if($lesson->is_published)
               checked="checked"
                @endif>
    </div>


    <button class="btn btn-success" type="submit" value="update" style="width: 10rem">
        @lang('content.update')
    </button>
</form>