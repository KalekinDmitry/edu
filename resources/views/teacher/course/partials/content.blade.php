<div class="d-flex form-group">
    <form class="d-flex"  action="{{route("teacher.module.store")}}" method="post">
        @csrf
        <input type="hidden" name="course_id" value="{{$course->id}}">
        <input class="form-control mr-2" type="text" name="name" placeholder="Название модуля">
        <button class="btn btn-success">
            Добавить
        </button>
    </form>
</div>

@foreach($course->modules() as $module)
    <form onsubmit="if(confirm('Delete module?')){return true}else{return false}"
          action="{{route('teacher.module.destroy', [$course, $module])}}"
          method="post" class="form-group">
        <input type="hidden" name="_method" value="Delete">
        {{ csrf_field() }}
        <div class="d-flex">
            <h5 class="d-flex align-items-center">{{$module->position}}. {{$module->name}}</h5>
            <a class="btn btn-primary icon-32 ml-auto" href="{{route('teacher.module.edit', [$module->id])}}">
                <i class="fa fa-edit"></i>
            </a>
            <button class="btn btn-danger icon-32 ml-2" type="submit">
                <i class="far fa-trash-alt"></i>
            </button>
        </div>
    </form>
    @foreach($module->lessons() as $lesson)
        <div class="d-flex justify-content-around align-items-center form-group">
            <a href="{{ route('teacher.lesson.show', ['course'=>$course->id, 'lesson'=>$lesson->id]) }}"
               class="">{{ $lesson->title }}
            </a>
            <a class="btn btn-primary icon-24 ml-auto"
               href="{{route('teacher.lesson.edit', [$module->id, $lesson->id])}}"><i class="fa fa-edit"></i>
            </a>
            <form style="padding: 0"
                  onsubmit="if(confirm('Delete module?')){return true}else{return false}"
                  action="{{route('teacher.lesson.destroy', [$module, $lesson])}}"
                  method="post">
                <input type="hidden" name="_method" value="Delete">
                {{ csrf_field() }}
                <button class="btn btn-danger icon-24 ml-2" type="submit">
                    <i class="far fa-trash-alt"></i>
                </button>
            </form>
        </div>
    @endforeach
    <div class="form-group">

    </div>
@endforeach

