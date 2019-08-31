@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
    <section class="profile-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg">
        <div class="container">
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <div id="main">
                <div class="row" id="real-estates-detail">
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <header class="panel-title">
                                    <div class="text-center">
                                        <strong>@lang('content.ruser')</strong>
                                    </div>
                                </header>
                            </div>
                            <div class="panel-body">
                                <div class="text-center" id="author">
                                    @if($teacher->avatar)
                                        <img src="{{ asset($teacher->avatar )}}" alt="">
                                    @else
                                        <img src="{{config('static.static')}}/img/no-photo.jpg" alt="">
                                    @endif
                                    <h3>@if($teacher->name != NULL)
                                            {{ $teacher->name }}
                                        @else
                                            <strong>@lang('content.infonotspec')</strong>
                                        @endif</h3>
                                    <small class="label label-warning">
                                        @if($teacher->signature != NULL)
                                            {{ $teacher->signature }}
                                        @else
                                            <strong>@lang('content.infonotspec')</strong>
                                        @endif
                                    </small>
                                    {{--<h3>@if($user->name != NULL)--}}
                                    {{--{{ $user->name }}--}}
                                    {{--@else--}}
                                    {{--<strong>@lang('content.infonotspec')</strong>--}}
                                    {{--@endif</h3>--}}
                                    {{--<small class="label label-warning">--}}
                                    {{--@if($user->signature != NULL)--}}
                                    {{--{{ $user->signature }}--}}
                                    {{--@else--}}
                                    {{--<strong>@lang('content.infonotspec')</strong>--}}
                                    {{--@endif--}}
                                    {{--</small>--}}
                                    {{--<br>--}}
                                    {{--<p></p>--}}
                                    {{--<p class="sosmed-author">--}}
                                    {{--<a href="#"><i class="fa fa-facebook" title="Facebook"></i></a>--}}
                                    {{--<a href="#"><i class="fa fa-twitter" title="Twitter"></i></a>--}}
                                    {{--<a href="#"><i class="fa fa-google-plus" title="Google Plus"></i></a>--}}
                                    {{--<a href="#"><i class="fa fa-linkedin" title="Linkedin"></i></a>--}}
                                    {{--</p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-xs-12">
                        <div class="panel">
                            <div class="panel-body">
                                <ul id="myTab" class="nav nav-pills">
                                    <li class="active"><a href="#detail"
                                                          data-toggle="tab">@lang('content.about user')</a></li>
                                    {{--<li class=""><a href="#contact" data-toggle="tab">@lang('content.sendmsg')</a></li>--}}
                                    @auth('web')
                                        <li class=""><a
                                                    href="{{route('user_profile_settings', Auth::user()->id)}}">@lang('content.edusprof')</a>
                                    @endauth
                                    @auth('teacher')
                                        <li class=""><a
                                                    href="{{route('teacher_profile_settings', Auth::user()->id)}}">@lang('content.edtchprof')</a>
                                    @endauth
                                    @auth('admin')
                                        <li class=""><a
                                                    href="{{route('admin_settings')}}">@lang('content.edadmprof')</a>
                                            @endauth
                                        </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <hr>
                                    <div class="tab-pane fade active in" id="detail">
                                        <h4>@lang('content.profdate'):</h4>
                                        <table class="table table-th-block">
                                            <tbody>
                                            <tr>
                                                <td class="active">@lang('content.regd'):</td>
                                                <td>@if($teacher->created_at != NULL)
                                                        {{ $teacher->created_at }}
                                                    @else
                                                        <strong>@lang('content.infonotspec')</strong>
                                                    @endif</td>
                                            </tr>
                                            <tr>
                                                <td class="active">@lang('content.birthday'):</td>
                                                <td>@if($teacher->dob != NULL)
                                                        {{ $teacher->dob }}
                                                    @else
                                                        <strong>@lang('content.infonotspec')</strong>
                                                    @endif</td>
                                            </tr>
                                            <tr>
                                                <td class="active">@lang('content.sex'):</td>
                                                <td>@if($teacher->sex == 0 || $teacher->sex == NULL)
                                                        <strong>@lang('content.infonotspec')</strong>
                                                    @else
                                                        {{ $teacher->sex }}
                                                    @endif</td>
                                            </tr>
                                            <tr>
                                                <td class="active">@lang('content.phonenum'):</td>
                                                <td>@if($teacher->phone != NULL)
                                                        {{ $teacher->phone }}
                                                    @else
                                                        <strong>@lang('content.infonotspec')</strong>
                                                    @endif</td>
                                            </tr>
                                            <tr>
                                                <td class="active">@lang('content.skills'):</td>
                                                <td>@if($teacher->skills != NULL)
                                                        @foreach(explode(',',$teacher->skills) as $skill)
                                                            <small class="label label-warning">{{ $skill }}</small>
                                                        @endforeach
                                                    @else
                                                        <strong>@lang('content.infonotspec')</strong>
                                                    @endif</td>
                                            </tr>
                                            <tr>
                                                <td class="active">@lang('content.hobbies'):</td>
                                                <td>@if($teacher->hobbies != NULL)
                                                        {{ $teacher->hobbies }}
                                                    @else
                                                        <strong>@lang('content.infonotspec')</strong>
                                                    @endif</td>
                                            </tr>
                                            <tr>
                                                <td class="active">@lang('content.status'):</td>
                                                <td>@if($teacher->status != NULL)
                                                        {{ $teacher->status }}
                                                    @else
                                                        <strong>@lang('content.infonotspec')</strong>
                                                    @endif</td>
                                            </tr>
                                            <tr>
                                                <td class="active">@lang('content.userrating'):</td>
                                                <td><i class="fa fa-star" style="color:red"></i> <i class="fa fa-star"
                                                                                                    style="color:red"></i>
                                                    <i class="fa fa-star" style="color:red"></i> <i class="fa fa-star"
                                                                                                    style="color:red"></i>
                                                    4/5
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    {{--<div class="tab-pane fade" id="contact">--}}
                                    {{--<p></p>--}}
                                    {{--<form role="form">--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label>@lang('content.yname')</label>--}}
                                    {{--<input type="text" class="form-control rounded"--}}
                                    {{--placeholder="@lang('content.entynm')">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label>@lang('content.yphn')</label>--}}
                                    {{--<input type="text" class="form-control rounded"--}}
                                    {{--placeholder="(+7)(095)123456">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label>@lang('content.emaddr')</label>--}}
                                    {{--<input type="email" class="form-control rounded" placeholder="@lang('content.yem')">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                    {{--<input type="checkbox"> @lang('content.agreement')--}}
                                    {{--</label>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label>@lang('content.msgtxt')</label>--}}
                                    {{--<textarea class="form-control rounded" style="height: 100px;"></textarea>--}}
                                    {{--<p class="help-block">@lang('content.txtwillbesent')</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<button type="submit" class="btn btn-success" data-original-title=""--}}
                                    {{--title="">@lang('content.send')--}}
                                    {{--</button>--}}
                                    {{--</div>--}}
                                    {{--</form>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>
@endsection

@section('scripts')
    <script src="http://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
    <script src="http://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>
@endsection



