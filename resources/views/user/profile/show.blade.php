@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<section class="profile-section">
    <div class="container">
        <br><br><br><br><br><br><br><br>
        <div id="main">
            <div class="row" id="real-estates-detail">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <header class="panel-title">
                                <div class="text-center">
                                    <strong>Regular User</strong>
                                </div>
                            </header>
                        </div>
                        <div class="panel-body">
                            <div class="text-center" id="author">
                                @if($user->avatar)
                                    <img src="{{ asset($user->avatar )}}" alt="">
                                @else
                                    <img src="{{asset('images/no-photo.jpg')}}" alt="">
                                @endif
                                <h3>@if($user->name != NULL)
                                        {{ $user->name }}
                                    @else
                                        <strong>Information not specified</strong>
                                    @endif</h3>
                                <small class="label label-warning">
                                    @if($user->signature != NULL)
                                        {{ $user->signature }}
                                    @else
                                        <strong>Information not specified</strong>
                                    @endif
                                </small>
                                <br>
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
                                <li class="active"><a href="#detail" data-toggle="tab">About user</a></li>
                                <li class=""><a href="#contact" data-toggle="tab">Send message (not working yet)</a></li>
                                @auth('web')
                                    <li class=""><a href="{{route('my_settings')}}">Edit user profile</a>
                                @endauth
                                @auth('teacher')
                                    <li class=""><a href="{{route('teacher_settings')}}">Edit teacher profile</a>
                                @endauth
                                @auth('admin')
                                    <li class=""><a href="{{route('admin_settings')}}">Edit admin profile</a>
                                @endauth
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <hr>
                                <div class="tab-pane fade active in" id="detail">
                                    <h4>Profile date:</h4>
                                    <table class="table table-th-block">
                                        <tbody>
                                        <tr>
                                            <td class="active">Registered:</td>
                                            <td>@if($user->created_at != NULL)
                                                    {{ $user->created_at }}
                                                @else
                                                    <strong>Information not specified</strong>
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <td class="active">Date of Birth (YMD):</td>
                                            <td>@if($user->dob != NULL)
                                                    {{ $user->dob }}
                                                @else
                                                    <strong>Information not specified</strong>
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <td class="active">Sex:</td>
                                            <td>@if($user->sex == 0 || $user->sex == NULL)
                                                    <strong>Information not specified</strong>
                                                @else
                                                    {{ $user->sex }}
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <td class="active">Phone Number:</td>
                                            <td>@if($user->phone != NULL)
                                                    {{ $user->phone }}
                                                @else
                                                    <strong>Information not specified</strong>
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <td class="active">Skills:</td>
                                            <td>@if($user->skills != NULL)
                                                    @foreach(explode(',',$user->skills) as $skill)
                                                        <small class="label label-warning">{{ $skill }}</small>
                                                    @endforeach
                                                @else
                                                    <strong>Information not specified</strong>
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <td class="active">Hobbies:</td>
                                            <td>@if($user->hobbies != NULL)
                                                    {{ $user->hobbies }}
                                                @else
                                                    <strong>Information not specified</strong>
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <td class="active">Status:</td>
                                            <td>@if($user->status != NULL)
                                                    {{ $user->status }}
                                                @else
                                                    <strong>Information not specified</strong>
                                                @endif</td>
                                        </tr>
                                        {{--<tr>--}}
                                        {{--<td class="active">Рейтинг пользователя:</td>--}}
                                        {{--<td><i class="fa fa-star" style="color:red"></i> <i class="fa fa-star"--}}
                                        {{--style="color:red"></i>--}}
                                        {{--<i class="fa fa-star" style="color:red"></i> <i class="fa fa-star"--}}
                                        {{--style="color:red"></i>--}}
                                        {{--4/5--}}
                                        {{--</td>--}}
                                        {{--</tr>--}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="contact">
                                    <p></p>
                                    {{--<form role="form">--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label>Ваше имя</label>--}}
                                    {{--<input type="text" class="form-control rounded"--}}
                                    {{--placeholder="Укажите Ваше Имя">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label>Ваш телефон</label>--}}
                                    {{--<input type="text" class="form-control rounded"--}}
                                    {{--placeholder="(+7)(095)123456">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label>E-mail адрес</label>--}}
                                    {{--<input type="email" class="form-control rounded" placeholder="Ваш Е-майл">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                    {{--<input type="checkbox"> Согласен с условиями--}}
                                    {{--</label>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label>Текст Вашего сообщения</label>--}}
                                    {{--<textarea class="form-control rounded" style="height: 100px;"></textarea>--}}
                                    {{--<p class="help-block">Текст сообщения будет отправлен пользователю</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<button type="submit" class="btn btn-success" data-original-title=""--}}
                                    {{--title="">Отправить--}}
                                    {{--</button>--}}
                                    {{--</div>--}}
                                    {{--</form>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

@section('scripts')

<script src="http://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="http://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>

@endsection



