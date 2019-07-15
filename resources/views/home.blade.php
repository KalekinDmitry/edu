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
<a style="color:#fff">@lang('content.chlang'):</a>
<a href="{{ route('setLocale', ['ru']) }}">Русский/</a>
<a  href="{{ route('setLocale', ['en']) }}">English/</a>
<a  href="{{ route('setLocale', ['fr']) }}">Francais</a>
    <div class="header-warp">
        <div class="container">
            <a href="{{ route('home') }}" class="site-logo">
                <img src="{{ asset('images/logo2.png') }}" alt="">
                {{--<span style="color: #fff;">HMQ-Education</span >--}}
            </a>

            <div class="user-panel">
            
                @guest
                    <a href="{{ route('login') }}">@lang('content.loginbtn')</a>
                    <span>/</span>
                    <a href="{{ route('register') }}">@lang('content.regbtn')</a>
                @else
                    <a href="{{ route('course.create') }}">@lang('content.create course')</a>
                    <span>/</span>
                    <a href="{{ route('users_profile', Auth::user()->id) }}">{{ Auth::user()->name }}</a>
                    <span>/</span>
                    <a href="{{ route('logout') }}">@lang('content.logoutbtn')</a>
                @endguest
            </div>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <ul class="main-menu">
                <!-- li><a href="index.html">Home</a></li -->
                <li><a href="#courses">@lang('content.courses')</a></li>
                <li><a href="#about">@lang('content.about us')</a></li>
                <li><a href="#newslatter">@lang('content.news')</a></li>
                <li><a href="#contact">@lang('content.contact us')</a></li>
            </ul>
        </div>
    </div>
</header>
<!-- Header section end -->


<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="{{ asset('images/bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-text text-white">
                    <h2>Special HMQ- @lang('content.edcourse') </h2>
                    <p>@lang('content.presentation')</p>
                    <div class="hero-author">
                        <div class="hero-author-pic set-bg" data-setbg="{{ asset('images/hero-author.jpg') }}"></div>
                        <h5>By 3toria Arabina, <span>@lang('content.prtc')</span></h5>
                        <!-- a href="#" class="site-btn">See Details <i class="fa fa-angle-right"></i></a -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Services section -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-apple"></i>
                </div>
                <div class="si-content">
                    <h5>@lang('content.communication')</h5>
                    <p>@lang('content.comdescribe').</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-mortarboard"></i>
                </div>
                <div class="si-content">
                    <h5>@lang('content.shedule')</h5>
                    <p>@lang('content.shdescribe').</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-idea"></i>
                </div>
                <div class="si-content">
                    <h5>@lang('content.flexible')</h5>
                    <p>@lang('content.fldescribe').</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-medal"></i>
                </div>
                <div class="si-content">
                    <h5>@lang('content.upgrade')</h5>
                    <p>@lang('content.upgdescribe'). </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-question"></i>
                </div>
                <div class="si-content">
                    <h5>@lang('content.prompts')</h5>
                    <p>@lang('content.prdescribe').</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-learning"></i>
                </div>
                <div class="si-content">
                    <h5>@lang('content.prof')</h5>
                    <p>@lang('content.profdescribe').</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services section end -->

<!-- Courses section  -->
<section class="courses-section">
    <div class="container">
        <div class="sec-title text-center">
            <span>@lang('content.otb')</span>
            <a id="courses"></a>
            <h2>@lang('content.courses')</h2>
            <p>@lang('content.txtunderotb').</p>
            <h5>@lang('content.hm')</h5>
            <p>@lang('content.txtunderhm'). </p>
        </div>
        <div class="course-slider owl-carousel"> <!--   -->
            <!-- course -->


            @forelse($courses as $course)
                <div class="course-item">
                    <figure class="course-preview">
                        @if($course->image)
                            <img src="{{ asset($course->image )}}" alt="">
                        @else
                            <img src="{{asset('images/no-photo.jpg')}}" alt="">
                        @endif
                        @if( $course->cost > 0)
                            <div class="price">${{ $course->cost }}</div>
                        @else
                            <div class="price">@lang('content.free')</div>
                        @endif
                        {{--                        <div class="price">${{ $course->cost }}</div>--}}
                    </figure>
                    <div class="course-content">
                        <div class="cc-text">
                            <h5><a href="{{route('course.show', $course->id)}}">{{ $course->title }}</a></h5>
                            <p>{{ $course->description_short }}</p>
                            <span><i class="flaticon-student-2"></i>20</span>
                            <span><i class="flaticon-placeholder"></i>3</span>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star i-fade"></i>
                            </div>
                        </div>
                        <div class="seller-info">
                            <div class="seller-pic set-bg" data-setbg="">[Profile avatar]</div>
                            <h6><a style="color: #fff"
                                   href="{{ route('users_profile', $course->user->id) }}">By {{$course->user->name}}</a>,
                                <span>[who is]</span></h6>
                        </div>
                    </div>
                </div>
            @empty
                <h5>@lang('content.nocourses')</h5>
            @endforelse


        </div>
    </div>
</section>
<!-- Courses section end -->


<!-- Fact section -->
<section class="fact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="{{ asset('images/icons/1.png') }}" alt="">
                </figure>
                <h2>{{ $count = DB::table('users')->count()}}</h2>
                <p>@lang('content.newstudents')</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="{{ asset('images/icons/2.png') }}" alt="">
                </figure>
                <h2>?</h2>
                <p>@lang('content.gradstudents')</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="{{ asset('images/icons/3.png') }}" alt="">
                </figure>
                <h2>?</h2>
                <p>@lang('content.qualteachers')</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="{{ asset('images/icons/4.png') }}" alt="">
                </figure>
                <h2>{{ $count = DB::table('courses')->count()}}</h2>
                <p>@lang('content.amazingcourses')</p>
            </div>
        </div>
    </div>
</section>
<!-- Fact section end -->

<!-- About section -->
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 about-text">
                <a id="about"></a>
                <h3>@lang('content.wiia')?</h3>
                <p>@lang('content.greeting')! </p>
                <p>@lang('content.wiiaparagraph1')!</p>
                <p>@lang('content.wiiaparagraph2').</p>
                <p>@lang('content.wiiaparagraph3').</p>
                <p>@lang('content.wiiaparagraph4').</p>
                <p>@lang('content.wiiaparagraph5').</p>
                <p><b>@lang('content.join us')!</b></p>

            </div>
            <div class="col-lg-5">
                <figure class="pt-lg-0 pt-5">
                    <img src="{{ asset('images/about.jpg') }}" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- About section end -->


<!-- Newslatter section -->
<section id="newslatter" class="newslatter-section set-bg" data-setbg="{{ asset('images/newslatter-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sec-title text-white sec-style-2">
                    <span>@lang('content.newsletter')</span>
                    <h2>@lang('content.stay updated')</h2>
                </div>
            </div>

            <div class="col-lg-9 nl-form-warp">
                <form class="newslatter-form">
                    <input type="text" placeholder="@lang('content.your') E-mail">
                    <button class="site-btn">@lang('content.subscribe') <i class="fa fa-angle-right"></i></button>
                </form>
                <p>@lang('content.sbstxt').</p>
            </div>
        </div>
    </div>
</section>
<!-- Newslatter section end -->

<!-- Contact section -->
<section id="contact" class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 contact-text">
                <h3>@lang('content.stay in touch')</h3>
                <p></p>
                <ul class="contact-info">
                    <li><a href="mailto:hmq.edu@gmail.com">hmq.edu@gmail.com</a></li>
                    <li><a href="mailto:victoria.arabina@gmail.com">victoria.arabina@gmail.com</a></li>
                    <li><a href="mailto:julia.kryuchkina@gmail.com">julia.kryuchkina@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-lg-8">
                <form class="contact-form">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" placeholder="@lang('content.yname')">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="@lang('content.your') E-mail">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="@lang('content.subj')">
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="@lang('content.message')"></textarea>
                            <button class="site-btn">@lang('content.send') <i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact section end -->


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
            <ul class="footer-menu">
                <li><a href="#courses">@lang('content.courses')</a></li>
                <li><a href="#about">@lang('content.about us')</a></li>
                <li><a href="#newslatter">@lang('content.news')</a></li>
                <li><a href="#contact">@lang('content.contact us')</a></li>
            </ul>
            <div class="footer-logo">
                <a href="{{ route('home') }}">
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