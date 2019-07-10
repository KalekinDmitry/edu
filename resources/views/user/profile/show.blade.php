<!DOCTYPE html>
<html lang="en">
<head>
    <title>HMQ-Education</title>
    <meta charset="UTF-8">
    <meta name="description" content="Academica Learning Page Template">
    <meta name="keywords" content="academica, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800"
          rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css"/>
    <script src="http://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
    <script src="http://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-warp">
        <div class="container">
            <a href="{{ route('home') }}" class="site-logo">
                <img src="{{ asset('images/logo2.png') }}" alt="">
                {{--<span style="color: #fff;">HMQ-Education</span >--}}
            </a>

            <div class="user-panel">
                @guest
                    <a href="{{ route('login') }}">Login</a>
                    <span>/</span>
                    <a href="{{ route('register') }}">Register</a>
                @else
                    <a href="{{ route('course.create') }}">Create course</a>
                    <span>/</span>
                    <a href="{{ route('users_profile', Auth::user()->id) }}">{{ Auth::user()->name }}</a>
                    <span>/</span>
                    <a href="{{ route('logout') }}">Logout</a>
                @endguest
            </div>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            {{--<ul class="main-menu">--}}
            {{--<!-- li><a href="index.html">Home</a></li -->--}}
            {{--<li><a href="#courses">Courses</a></li>--}}
            {{--<li><a href="#about">About us</a></li>--}}
            {{--<li><a href="#newslatter">News</a></li>--}}
            {{--<li><a href="#contact">Contact us</a></li>--}}
            {{--</ul>--}}
        </div>
    </div>
</header>
<!-- Header section end -->


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
                                <li class=""><a href="#contact" data-toggle="tab">Send message (not working yet)</a>
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
                                            <td>@if($user->sex != NULL)
                                                    {{ $user->sex }}
                                                @else
                                                    <strong>Information not specified</strong>
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

<footer class="footer-section spad pb-0">
    <div class="container">
        <div class="footer-bottom">

            <div class="social">
                <a href=""><i class="fa fa-pinterest"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-dribbble"></i></a>
                <a href=""><i class="fa fa-behance"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
            <div class="footer-logo">
                <a href="https://hmq-edu.com">
                    <img src="{{ asset('images/logo2.png') }}" alt="">
                </a>
                <!-- span style="color: #fff;">HMQ-Education</span -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="text-white  text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>

        </div>
    </div>


</footer>
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/circle-progress.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


</body>
</html>