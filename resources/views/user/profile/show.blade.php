<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <div class="well profile">
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-8">
                        <h2>{{ $user->name }}</h2>
                        <p><strong>About: </strong> Web Designer / UI. </p>
                        <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
                        <p><strong>Skills: </strong>
                            <span class="tags">html5</span>
                            <span class="tags">css3</span>
                            <span class="tags">jquery</span>
                            <span class="tags">bootstrap3</span>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-4 text-center">
                        <figure>
                            <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
                            <figcaption class="ratings">
                                <p>Ratings
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-star-o"></span>
                                    </a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 divider text-center">
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong> 20,7K </strong></h2>
                        <p><small>Followers</small></p>
                        <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                    </div>
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>245</strong></h2>
                        <p><small>Following</small></p>
                        <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                    </div>
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>43</strong></h2>
                        <p><small>Snippets</small></p>
                        <div class="btn-group dropup btn-block">
                            <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu text-left" role="menu">
                                <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>
                                <li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<title>HMQ-Education</title>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<meta name="description" content="Academica Learning Page Template">--}}
    {{--<meta name="keywords" content="academica, unica, creative, html">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
    {{--<!-- Favicon -->--}}
    {{--<link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon"/>--}}

    {{--<!-- Google Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800"--}}
          {{--rel="stylesheet">--}}

    {{--<!-- Stylesheets -->--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">--}}

    {{--<!--[if lt IE 9]>--}}
    {{--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    {{--<![endif]-->--}}

    {{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    {{--<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>--}}
    {{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
    {{--<!------ Include the above in your HEAD tag ---------->--}}

    {{--<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">--}}

{{--</head>--}}
{{--<body>--}}

{{--<!-- Page Preloder -->--}}
{{--<div id="preloder">--}}
    {{--<div class="loader"></div>--}}
{{--</div>--}}

{{--<!-- Header section -->--}}
{{--<header class="header-section">--}}
    {{--<div class="header-warp">--}}
        {{--<div class="container">--}}
            {{--<a href="{{ route('home') }}" class="site-logo">--}}
                {{--<img src="{{ asset('images/logo2.png') }}" alt="">--}}
                {{--<span style="color: #fff;">HMQ-Education</span >--}}
            {{--</a>--}}

            {{--<div class="user-panel">--}}
                {{--@guest--}}
                    {{--<a href="{{ route('login') }}">Login</a>--}}
                    {{--<span>/</span>--}}
                    {{--<a href="{{ route('register') }}">Register</a>--}}
                {{--@else--}}
                    {{--<a href="#">{{ Auth::user()->name }}</a>--}}
                    {{--<span>/</span>--}}
                    {{--<a href="{{ route('logout') }}">Logout</a>--}}
                {{--@endguest--}}
            {{--</div>--}}
            {{--<div class="nav-switch">--}}
                {{--<i class="fa fa-bars"></i>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</header>--}}
{{--<!-- Header section end -->--}}

{{--<!-- Create section -->--}}
{{--<section class="create-section set-bg" data-setbg="{{ asset('images/bg.jpg') }}">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">--}}
                {{--<div class="well profile">--}}
                    {{--<div class="col-sm-12">--}}
                        {{--<div class="col-xs-12 col-sm-8">--}}
                            {{--<h2>Nicole Pearson</h2>--}}
                            {{--<p><strong>About: </strong> Web Designer / UI. </p>--}}
                            {{--<p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>--}}
                            {{--<p><strong>Skills: </strong>--}}
                                {{--<span class="tags">html5</span>--}}
                                {{--<span class="tags">css3</span>--}}
                                {{--<span class="tags">jquery</span>--}}
                                {{--<span class="tags">bootstrap3</span>--}}
                            {{--</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4 text-center">--}}
                            {{--<figure>--}}
                                {{--<img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">--}}
                                {{--<figcaption class="ratings">--}}
                                    {{--<p>Ratings--}}
                                        {{--<a href="#">--}}
                                            {{--<span class="fa fa-star"></span>--}}
                                        {{--</a>--}}
                                        {{--<a href="#">--}}
                                            {{--<span class="fa fa-star"></span>--}}
                                        {{--</a>--}}
                                        {{--<a href="#">--}}
                                            {{--<span class="fa fa-star"></span>--}}
                                        {{--</a>--}}
                                        {{--<a href="#">--}}
                                            {{--<span class="fa fa-star"></span>--}}
                                        {{--</a>--}}
                                        {{--<a href="#">--}}
                                            {{--<span class="fa fa-star-o"></span>--}}
                                        {{--</a>--}}
                                    {{--</p>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-12 divider text-center">--}}
                        {{--<div class="col-xs-12 col-sm-4 emphasis">--}}
                            {{--<h2><strong> 20,7K </strong></h2>--}}
                            {{--<p><small>Followers</small></p>--}}
                            {{--<button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4 emphasis">--}}
                            {{--<h2><strong>245</strong></h2>--}}
                            {{--<p><small>Following</small></p>--}}
                            {{--<button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4 emphasis">--}}
                            {{--<h2><strong>43</strong></h2>--}}
                            {{--<p><small>Snippets</small></p>--}}
                            {{--<div class="btn-group dropup btn-block">--}}
                                {{--<button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>--}}
                                {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
                                    {{--<span class="caret"></span>--}}
                                    {{--<span class="sr-only">Toggle Dropdown</span>--}}
                                {{--</button>--}}
                                {{--<ul class="dropdown-menu text-left" role="menu">--}}
                                    {{--<li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>--}}
                                    {{--<li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>--}}
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>--}}
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<!-- Create section end -->--}}

{{--<!-- Footer section -->--}}
{{--<footer class="footer-section spad pb-0">--}}
    {{--<div class="container">--}}
        {{--<div class="footer-bottom">--}}

            {{--<div class="social">--}}
                {{--<a href=""><i class="fa fa-pinterest"></i></a>--}}
                {{--<a href=""><i class="fa fa-facebook"></i></a>--}}
                {{--<a href=""><i class="fa fa-twitter"></i></a>--}}
                {{--<a href=""><i class="fa fa-dribbble"></i></a>--}}
                {{--<a href=""><i class="fa fa-behance"></i></a>--}}
                {{--<a href=""><i class="fa fa-linkedin"></i></a>--}}
            {{--</div>--}}
            {{--<ul class="footer-menu">--}}
                {{--<li><a href="#courses">Courses</a></li>--}}
                {{--<li><a href="#about">About us</a></li>--}}
                {{--<li><a href="#newslatter">News</a></li>--}}
                {{--<li><a href="#contact">Contact us</a></li>--}}
            {{--</ul>--}}
            {{--<div class="footer-logo">--}}
                {{--<a href="https://hmq-edu.com">--}}
                    {{--<img src="{{ asset('images/logo2.png') }}" alt="">--}}
                {{--</a>--}}
                {{--<!-- span style="color: #fff;">HMQ-Education</span -->--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row">--}}
            {{--<div class="col-12">--}}
                {{--<p class="text-white  text-center">--}}
                    {{--<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
                    {{--Copyright &copy;<script>document.write(new Date().getFullYear());</script>--}}
                    {{--All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by--}}
                    {{--<a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
                    {{--<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}


{{--</footer>--}}
{{--<!-- Footer section end -->--}}


{{--<!--====== Javascripts & Jquery ======-->--}}
{{--<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/owl.carousel.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/circle-progress.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/main.js') }}"></script>--}}


{{--</body>--}}
{{--</html>--}}