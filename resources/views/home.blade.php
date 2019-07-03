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
                <img src="{{ asset('images/logo.png') }}" alt="">
                {{--<span style="color: #fff;">HMQ-Education</span >--}}
            </a>

            <div class="user-panel">
                @guest
                    <a href="{{ route('login') }}">Login</a>
                    <span>/</span>
                    <a href="{{ route('register') }}">Register</a>
                @else
                    <a href="#">{{ Auth::user()->name }}</a>
                    <span>/</span>
                    <a href="{{ route('logout') }}">Logout</a>
                @endguest
            </div>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <ul class="main-menu">
                <!-- li><a href="index.html">Home</a></li -->
                <li><a href="#courses">Courses</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#newslatter">News</a></li>
                <li><a href="#contact">Contact us</a></li>
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
                    <h2>Special HMQ-Education Course</h2>
                    <p>We are pleased to present for you a new educational course that will allow you to improve your
                        social communication skills and increase your professional level.</p>
                    <div class="hero-author">
                        <div class="hero-author-pic set-bg" data-setbg="{{ asset('images/hero-author.jpg') }}"></div>
                        <h5>By Victoria Arabina, <span>Professional teacher & coach</span></h5>
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
                    <h5>Communication</h5>
                    <p>Chat with the teacher directly</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-mortarboard"></i>
                </div>
                <div class="si-content">
                    <h5>Shedule</h5>
                    <p>Get knowledge at your convenience</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-idea"></i>
                </div>
                <div class="si-content">
                    <h5>Flexible</h5>
                    <p>Share your ideas and ask questions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-medal"></i>
                </div>
                <div class="si-content">
                    <h5>Upgrade</h5>
                    <p>Go to the next steps when it will be convenient. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-question"></i>
                </div>
                <div class="si-content">
                    <h5>Promts</h5>
                    <p>Follow the prompts.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-learning"></i>
                </div>
                <div class="si-content">
                    <h5>Professionality</h5>
                    <p>Become a professional with our help.</p>
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
            <span>Only  the best</span>
            <a id="courses"></a>
            <h2>Courses</h2>
            <p>You can use our trial period and make your own decision whether you want to know more or not.</p>
            <h5>How much</h5>
            <p>First week is free of any charge, since 2nd week courses will be deeper and more professional. So, it
                will cost minimum amount of 20 cents per week. </p>
        </div>
        <div class="course-slider owl-carousel"> <!--   -->
            <!-- course -->
            <div class="course-item">
                <figure class="course-preview">
                    <img src="{{ asset('images/courses/1.jpg') }}" alt="">
                    <div class="price">$2</div>
                </figure>
                <div class="course-content">
                    <div class="cc-text">
                        <h5><a href="https://hmq-edu.com/en-course-1-industrial-revolution.html">INDUSTRIAL REVOLUTION
                                4.0</a></h5>
                        <p>Introduction to the course</p>
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
                        <div class="seller-pic set-bg" data-setbg="{{ asset('images/courses/sellers/1.jpg') }}"></div>
                        <h6>By Victoria Arabina, <span>Teacher & Coach</span></h6>
                    </div>
                </div>
            </div>
            <div class="course-item">
                <figure class="course-preview">
                    <img src="{{ asset('images/courses/2.jpg') }}" alt="">
                    <div class="price">$0</div>
                </figure>
                <div class="course-content">
                    <div class="cc-text">
                        <h5><a href="https://hmq-edu.com/en-course-2-business.html">BUSINESS</a></h5>
                        <p>How to find your mission in life</p>
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
                        <div class="seller-pic set-bg" data-setbg="{{ asset('images/courses/sellers/1.jpg') }}"></div>
                        <h6>By Victoria Arabina, <span>Teacher & Coach</span></h6>
                    </div>
                </div>
            </div>
            <div class="course-item">
                <figure class="course-preview">
                    <img src="{{ asset('images/courses/3.jpg') }}" alt="">
                    <div class="price">$5</div>
                </figure>
                <div class="course-content">
                    <div class="cc-text">
                        <h5><a href="https://hmq-edu.com/en-course-3-personal-development.html">PERSONAL DEVELOPMENT</a>
                        </h5>
                        <p>Energy. Introduction</p>
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
                        <div class="seller-pic set-bg" data-setbg="{{ asset('images/courses/sellers/1.jpg') }}"></div>
                        <h6>By Victoria Arabina, <span>Teacher & Coach</span></h6>
                    </div>
                </div>
            </div>
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
                <h2>250</h2>
                <p>New Students</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="{{ asset('images/icons/2.png') }}" alt="">
                </figure>
                <h2>1k</h2>
                <p>Grad Students</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="{{ asset('images/icons/3.png') }}" alt="">
                </figure>
                <h2>12</h2>
                <p>Qualified Teachers</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="{{ asset('images/icons/4.png') }}" alt="">
                </figure>
                <h2>4</h2>
                <p>Amazing Courses</p>
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
                <h3>What is it about?</h3>
                <p>Hello, dear friend! </p>
                <p>We introduce you to a new product developed by team of creators and professionals especially for you.
                    It's your time of success, knowledge, new projects, travels, meetings, abundance, time of your
                    life!</p>
                <p>We begin this educational program, because we believe that the main source of development of our
                    planet is in your luck and your possibilities of success. We have created a program for ourselves
                    and for you, for our common family of people of the New World.</p>
                <p>We have prepared a course to develop contemporary skill as well as your ability to learn
                    continuously. The format of this educational course is created as the most optimal to allow you to
                    use it in any moment.</p>
                <p>Every week we will add lectures in audio format on the most interesting topics of modern society. So
                    far we have identified 4 main categories: technology and business; self-development and emotional
                    intelligence; marketing and promotion; culture and art.</p>
                <p>Starting 3rd week we will add video lectures on key subjects by top managers from world most famous
                    corporations and gurus in their categories.</p>
                <p><b>Join us!</b></p>

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
<section id ="newslatter" class="newslatter-section set-bg" data-setbg="{{ asset('images/newslatter-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sec-title text-white sec-style-2">
                    <span>Newsletter</span>
                    <h2>Stay updated</h2>
                </div>
            </div>

            <div class="col-lg-9 nl-form-warp">
                <form class="newslatter-form">
                    <input type="text" placeholder="Your E-mail">
                    <button class="site-btn">Subscribe <i class="fa fa-angle-right"></i></button>
                </form>
                <p>Subscribe to our newsletter to be always up to date.</p>
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
                <h3>Stay in touch</h3>
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
                            <input type="text" placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Your E-mail">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Subject">
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="Message"></textarea>
                            <button class="site-btn">Send <i class="fa fa-angle-right"></i></button>
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
                <li><a href="#courses">Courses</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#newslatter">News</a></li>
                <li><a href="#contact">Contact us</a></li>
            </ul>
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