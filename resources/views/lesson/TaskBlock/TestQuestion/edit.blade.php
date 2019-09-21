@extends('layouts.app')

@section('content')

<section class="lesson-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="hero-text text-white">
                <h3>Edit test question of task block {{$taskBlock->position + 1}}</h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="card col-md-10" style="padding:0">
            <div class="card-body">
                <form class="contact-form" action="{{ route('testQuestion.update', [$taskBlock->id, $testQuestion->id]) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put">
                    {{csrf_field()}}
                    <input type="hidden" name="task_block_id" value="{{ $taskBlock->id }}">
                    <input type="hidden" name="image_link" value="#">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <input  type="text" maxlength="1024" name="text" value="{{$testQuestion->text}}"  required>
                            <div class="row col-md-6">
                                <input class="col-md-4" type="number" name="correct_count" value="{{$testQuestion->correct_count}}" required>
                                <label for="correct_count" ><h3>how many correct variants student will get in ansvers list?</h3></label>
                            </div>
                            <div class="row col-md-6">
                                <input class="col-md-4" type="number" name="wrong_count" value="{{$testQuestion->wrong_count}}" required>
                                <label for="wrong_count" ><h3>how many wrong variants student will get in ansvers list?</h3></label>
                            </div>

                        </div>
                        <div class="col-md-7" >
                            <button class = "site-btn col-md-4" type="submit" value="create">Update<i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </form>4
            </div>
        </div>
    </div>


    <br>
</section>


@endsection
