@extends('layouts.app')

@section('content')

<section class="lesson-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="hero-text text-white">
                <h3>Edit task block {{ $taskBlock->position}}</h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="card col-md-10" style="padding:0">
            <div class="card-body">
                <div class="list-group col-md-3">
                    <a style="border-width: 1px;font-size: 16px; padding-left:4px;"
                        href="{{ route('simpleQuestion.create', $taskBlock->id) }}"
                        class="list-group-item list-group-item-action col-md-12 flaticon-question ">
                        ✚ simple question
                    </a>
                    <a style="border-width: 1px;font-size: 16px; padding-left:4px;"
                        href="{{ route('testQuestion.create', $taskBlock->id) }}"
                        class="list-group-item list-group-item-action col-md-12 flaticon-test-1">
                        ✚ test question
                    </a>
                    <a style="border-width: 1px;font-size: 16px; padding-left:4px;"
                        href="#"
                        class="list-group-item list-group-item-action col-md-12 flaticon-code">
                        ✚ code task (to do)
                    </a>
                    <a style="border-width: 1px;font-size: 16px; padding-left:4px;"
                        href="#"
                        class="list-group-item list-group-item-action col-md-12 flaticon-calculator">
                        ✚ math task (to do)
                    </a>
                    <a style="border-width: 1px;font-size: 16px; padding-left:4px;"
                        href="#"
                        class="list-group-item list-group-item-action col-md-12 flaticon-questions">
                        ✚ compliance task (to do)
                    </a>
                    <a style="border-width: 1px;font-size: 16px; padding-left:4px;"
                        href="#"
                        class="list-group-item list-group-item-action col-md-12 flaticon-questions">
                        ✚ abstract task (to do)
                    </a>
                    <a style="border-width: 1px;font-size: 16px; padding-left:4px;"
                        href="#"
                        class="list-group-item list-group-item-action col-md-12 flaticon-questions">
                        ✚ another task type (to do)
                    </a>
                </div>




                <div class="list-group col-md-4">
                    @foreach($simpleQuestions as $simpleQuestion)
                        <div class="d-flex">
                            <a style="font-size: 14px;border-width: 1px"
                               href="{{ route('simpleQuestion.show', ['taskBlock' => $taskBlock->id, 'simpleQuestion' => $simpleQuestion]) }}"
                               class="list-group-item list-group-item-action col-md-6">Simple Queston</a>
                            <a class="site-btn-hollow col-md-3"
                               href="{{route('simpleQuestion.edit', [$taskBlock->id, $simpleQuestion->id])}}"><i class="fa fa-edit"></i></a>
                            <form class="col-md-3 p-0"
                                  onsubmit="if(confirm('Delete step?')){return true}else{return false}"
                                  action="{{route('simpleQuestion.destroy', ['taskBlock' => $taskBlock, 'simpleQuestion' => $simpleQuestion])}}"
                                  method="post">
                                <input type="hidden" name="_method" value="Delete">
                                {{ csrf_field() }}
                                <button type="submit" class="site-btn-danger w-100">X</button>
                            </form>
                        </div>
                    @endforeach

                    @foreach($testQuestions as $testQuestion)
                        <div class="d-flex">
                            <a style="font-size: 14px;border-width: 1px"
                                href="{{ route('testQuestion.show', ['taskBlock' => $taskBlock->id, 'testQuestion' => $testQuestion]) }}"
                                class="list-group-item list-group-item-action col-md-6">Test Queston</a>
                            <a class="site-btn-hollow col-md-3"
                                href="{{route('testQuestion.edit', [$taskBlock->id, $testQuestion->id])}}"><i class="fa fa-edit"></i></a>
                            <form class="col-md-3 p-0"
                                    onsubmit="if(confirm('Delete step?')){return true}else{return false}"
                                    action="{{route('testQuestion.destroy', ['taskBlock' => $taskBlock, 'testQuestion' => $testQuestion])}}"
                                    method="post">
                                <input type="hidden" name="_method" value="Delete">
                                {{ csrf_field() }}
                                <button type="submit" class="site-btn-danger w-100">X</button>
                            </form>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-5" >
                <h3 style="color: rgb(100,150,200)">Add some questions to this task. Students will get a random one each time they try to pass it.
                    It's not recomended to place different types of questions in one task block to awoid dificulty differences.
                    But if you realy need to, you can just ignore it</h3>
                </div>


            </div>
        </div>
    </div>
    <br>
</section>



@endsection
