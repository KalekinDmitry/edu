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
                    <a href="{{ route('users_profile', Auth::user()->id) }}">{{ Auth::user()->name }}</a>
                    <span>/</span>
                    <a href="{{ route('logout') }}">Logout</a>
                @endguest
            </div>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>

        </div>
    </div>
</header>
<!-- Header section end -->


<!-- Create section -->
<section class="create-section">
    <div class="container">
        <br><br><br><br><br><br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="border-dark card text-dark bg-white">
                    <div class="card-header">
                        Profile editing
                    </div>
                    <form class="form-horizontal card-body" action="{{route('my_settings_save', $user)}}" method="post"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="form-group row justify-content-center">
                                <label for=""></label>
                                @if($user->avatar)
                                    <img src="{{ asset($user->avatar )}}" alt="">
                                @else
                                    <img src="{{asset('images/no-photo.jpg')}}" alt="">
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-left">Choose your profile
                                    images</label><br>
                                <div class="col-md-12 text-md-left">
                                    <input id="image" type="file" name="image">
                                </div>
                            </div>
                            <hr class="border-dark">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-left">Name</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="name" name="name" type="text" class="form-control"
                                           value="{{$user->name ?? ""}}" minlength="2" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sex" class="col-md-4 col-form-label text-md-left">Choose gender</label>
                                <div class="col-md-12 text-md-left">
                                    <select id="sex" name="sex" class="form-control">
                                        <option value="0" selected="">Not selected</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-left">Email</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="email" name="email" type="email" class="form-control"
                                           value="{{$user->email ?? ""}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-left">Phone number</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="phone" name="phone" type="number" class="form-control"
                                           value="{{$user->phone ?? ""}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-left">Date of Birth</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="dob" name="dob" type="date" class="form-control"
                                           value="{{$user->dob ?? ""}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="skills" class="col-md-4 col-form-label text-md-left">Skills (Сomma separated)</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="skills" name="skills" type="text" class="form-control"
                                           value="{{$user->skills ?? ""}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hobbies" class="col-md-4 col-form-label text-md-left">Hobbies</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="hobbies" name="hobbies" type="text" class="form-control"
                                           value="{{$user->hobbies ?? ""}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="signature" class="col-md-4 col-form-label text-md-left">Signature</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="signature" name="signature" type="text" class="form-control"
                                           value="{{$user->signature ?? ""}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-md-4 col-form-label text-md-left">Status</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="status" name="status" type="text" class="form-control"
                                           value="{{$user->status ?? ""}}">
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-dark" type="submit" value="Save">
                    </form>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Create section end -->
<br>
<!-- Footer section -->
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
<script>
    $("select[name='sex']").val({{$user->sex}}).change();
</script>
</body>
</html>