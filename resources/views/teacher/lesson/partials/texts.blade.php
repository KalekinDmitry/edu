<form class="d-flex flex-column form-group" action="{{ route('teacher.text.store', $lesson->id) }}" method="POST"
      enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">
    <input type="hidden" name="position" value="0">

    <div class="form-group">
        <label for="content">Контент</label>
        <textarea class="form-control" style="min-height: 250px" id="content" name="content" rows="3"
                  required>"@lang('content.pct')"</textarea>
    </div>

    <button class="btn btn-success" style="width: 10rem" type="submit" value="create">
        @lang('content.create')
    </button>
</form>

<div class="form-group pt-3">
    <span class="text-muted">Добавлено:</span>
</div>
@foreach($lesson->texts() as $block)

    <div class="d-flex justify-content-around align-items-center form-group">
        <a href="{{ route('teacher.text.show', [$block->id]) }}" class="">
            {{ \Illuminate\Support\Str::limit($block->content,40) }}
        </a>
        <a class="btn btn-primary icon-24 ml-auto"
           href="{{route('teacher.text.edit', [$block->id])}}"><i class="fa fa-edit"></i>
        </a>
        <form style="padding: 0"
              onsubmit="if(confirm('Delete module?')){return true}else{return false}"
              action="{{route('teacher.text.destroy', [$block->id])}}"
              method="post">
            <input type="hidden" name="_method" value="Delete">
            {{ csrf_field() }}
            <button class="btn btn-danger icon-24 ml-2" type="submit">
                <i class="far fa-trash-alt"></i>
            </button>
        </form>
    </div>
@endforeach