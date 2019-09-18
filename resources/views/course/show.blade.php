@extends('layouts.app')

@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{config('static.static')}}/img/page-top-bg.jpg">
        <div class="container text-white">
            <h3>@lang('content.ourcour')</h3>
        </div>
    </section>
    <!--  Page top end -->

    <!-- Courses section  -->
    <section class="courses-section spad">
        <div class="container">
            <div class="row">
                <div class="col col-3">
                    <form onsubmit="if(confirm('@lang('content.cnfrmdel')?')){return true}else{return false}"
                          action="{{route('course.destroy', $course)}}" method="post">
                        <input type="hidden" name="_method" value="Delete">
                        {{ csrf_field() }}
                        <a class="btn btn-default col-md-12" href="{{route('course.edit', $course->id)}}"><i
                                    class="fa fa-edit">@lang('content.edit')</i></a>
                        <a class="site-btn-info-sm col-md-6"
                           href="{{ route('lesson.create', $course->id) }}">@lang('content.addnewlesson')</a>
                        <button type="submit" class="site-btn-danger-sm col-md-5">@lang('content.del')</button>
                    </form>
                    <br>
                    <div>
                        <h3 style="padding-bottom:40px; padding-top: 45px;">@lang('content.tableofcontent')</h3>
                    </div>
                    <h5 style="font-size: 18px; padding-bottom:10px;">📂 1. @lang('content.4rev')</h5>
                    <div class="list-group">
                        @foreach($lessons as $lesson)
                            <a href="{{ route('lesson.show', ['course'=>$course->id, 'lesson'=>$lesson->id]) }}"
                               style="font-size: 14px;"
                               class="list-group-item list-group-item-action ">📄{{ $lesson->title }}</a>
                        @endforeach
                    </div>
                    <br>
                    <h5 style="font-size: 18px; padding-bottom:10px;">📂 2. @lang('content.4rev')</h5>
                    <div class="list-group">
                        <a href="#" style="font-size: 14px;" class="list-group-item list-group-item-action active">📄
                            @lang('content.intro')</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 1</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 2</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 3</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 4</a>
                    </div>
                    <h5 style="font-size: 18px; padding-bottom:10px; padding-top: 20px;">📂
                        3. @lang('content.business')</h5>
                    <div class="list-group">
                        <a href="#" style="font-size: 14px;"
                           class="list-group-item list-group-item-action">📄 @lang('content.missioninlife')</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 1</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 2</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 3</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 4</a>
                    </div>
                    <h5 style="font-size: 18px; padding-bottom:10px; padding-top: 20px;">📂
                        4. @lang('content.persdev')</h5>

                    <div class="list-group">
                        <a href="#" style="font-size: 14px;"
                           class="list-group-item list-group-item-action">📄 @lang('content.energy')</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 1</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 2</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 3</a>
                        <a style="font-size: 14px; color: gray;"
                           class="list-group-item list-group-item-action disabled">🔒
                            TODO: 4</a>
                    </div>
                </div>
                <div class="col col-9">
                    <div class="row courses-page">
                        <!-- course -->
                        <div class="col-lg-12">
                            <div class="course-item featured">

                                <div class="course-content">
                                    <div class="cc-text">
                                        <h5>{{ $course->title }}</h5>
                                        <h5>{{ $course->description_short }}</h5>
                                        <p>{{ $course->description }}</p>
                                        <p>[@lang('content.vidfe')]</p>
                                        <div style="text-align: center;">
                                            <iframe width="100%" height="435"
                                                    src="https://www.youtube.com/embed/cNZf6nBDE-s" frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                        </div>
                                        <div>
                                            <p>
                                                @if($course->tags != NULL)
                                                    <b>Tags:</b>
                                                    @foreach(explode(',',$course->tags) as $tag)
                                                        <a href="#">#{{ $tag }}</a>
                                                    @endforeach
                                                @else
                                                    @lang('content.notags')
                                                @endif
                                            </p>
                                        </div>
                                        <span><i class="flaticon-student-2"></i>20</span>
                                        <span><i class="flaticon-placeholder"></i>3</span>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star i-fade"></i>
                                        </div>
                                        <div class="seller-info">
                                            <div class="seller-pic set-bg" data-setbg="">[@lang('content.profav')]</div>
                                            <h6><a style="color: #fff"
                                                   href="{{ route('users_profile', $course->teacher->id) }}">@lang('content.by') {{$course->teacher->name}}</a>,
                                                <span>[@lang('content.wi')]</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses section end -->
@endsection
