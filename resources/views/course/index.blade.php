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
            <a href="https://hmq-edu.com" class="site-logo">
                <img src="{{ asset('images/logo.png') }}" alt="">
                <!-- span style="color: #fff;">HMQ-Education</span -->
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

                <!-- li><a href="#courses">Courses</a></li -->
                <!-- li><a href="#about">About us</a></li -->
                <!-- li><a href="blog.html">News</a></li -->
                <!-- li><a href="contact.html">Contact us</a></li -->
            </ul>
        </div>
    </div>
</header>
<!-- Header section end -->


<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
    <div class="container text-white">
        <h3>Our Courses</h3>
    </div>
</section>
<!--  Page top end -->


<!-- Search section -->
<!-- section class="multi-search-section">
    <div class="msf-warp">
        <div class="container">
            <h5>Search your Course</h5>
            <form class="multi-search-form">
                <input type="text" placeholder="Course">
                <input type="text" placeholder="Level">
                <input type="text" placeholder="Date">
                <input type="text" placeholder="Teacher">
                <input type="text" placeholder="Price">
                <button class="site-btn">Search <i class="fa fa-angle-right"></i></button>
            </form>
        </div>
    </div>
</section -->
<!-- Search section end -->


<!-- Courses section  -->
<section class="courses-section spad">
    <div class="container">

        <div class="row">
            <div class="col col-3">
                <div>
                    <h3 style="padding-bottom:40px; padding-top: 45px;">Table of contents</h3>
                </div>

                <h5 style="font-size: 18px; padding-bottom:10px;">📂 1. The fourth industrial revolution</h5>

                <div class="list-group">
                    <a href="#" style="font-size: 14px;" class="list-group-item list-group-item-action active">📄
                        Introduction</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 1</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 2</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 3</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 4</a>
                </div>

                <h5 style="font-size: 18px; padding-bottom:10px; padding-top: 20px;">📂 2. Business</h5>

                <div class="list-group">
                    <a href="#" style="font-size: 14px;" class="list-group-item list-group-item-action">📄 How to find
                        your mission in life</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 1</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 2</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 3</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 4</a>
                </div>

                <h5 style="font-size: 18px; padding-bottom:10px; padding-top: 20px;">📂 3. Personal development</h5>

                <div class="list-group">
                    <a href="#" style="font-size: 14px;" class="list-group-item list-group-item-action">📄 Energy</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 1</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 2</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 3</a>
                    <a style="font-size: 14px; color: gray;" class="list-group-item list-group-item-action disabled">🔒
                        TODO: 4</a>
                </div>
            </div>


            <div class="col col-9">
                <!-- ---------------------------------------------------------------------------------- -->


                <!-- div class="sec-title text-center">
                    <span>Only  the best</span>
                    <h2>How to find your mission in life</h2>
                </div -->
                <div class="row courses-page">
                    <!-- course -->
                    <div class="col-lg-12">
                        <div class="course-item featured">
                            <!-- div class="course-preview set-bg" data-setbg="img/courses/7.jpg">
                                <div class="price">$25</div>
                                <div class="featur-badges">Featured</div>
                            </div -->
                            <div class="course-content">
                                <div class="cc-text">
                                    <h5>1.THE FOURTH INDUSTRIAL REVOLUTION</h5>
                                    <h5>Introduction</h5>

                                    <p>
                                        We start our course with the most fascinating topic of the world - Transformers!
                                        Just kidding 🤣 Industry 4.0 and everything related to databases, robots,
                                        algorithms etc. etc. You are not a programmer? Too complicated?
                                        Don’t worry as we found a format for everyone! Starting this introduction
                                        course, covering levels from basic to advanced, we’ll present you with all
                                        necessary information about today's world.
                                        In this course you will discover what industry 4.0 is, its history as well as
                                        main directions of today's technological development.
                                        In this course you will discover what industry 4.0 is, its history as well as
                                        main directions of today's technological development.
                                    </p>

                                    <div style="text-align: center;">
                                        <iframe width="100%" height="435"
                                                src="https://www.youtube.com/embed/KtOT_CXHea8" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    </div>
                                    <div>
                                        <p>
                                            <b>Tags:</b>
                                            <a href="#">#seaofopportunities</a>
                                            <a href="#">#industry4.0</a>
                                            <a href="#">#robotsarehelpersnotkillers</a>
                                            <a href="#">#intelligenceartifficielle</a>
                                            <a href="#">#forbetterplanet</a>
                                            <a href="#">#educationforall</a>
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
                                </div>
                                <div class="seller-info">
                                    <div class="seller-pic set-bg" data-setbg="img/courses/sellers/1.jpg"></div>
                                    <h6>By Victoria Arabina, <span>Teacher & Coach</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <figure class="course-preview">
                                <img src="img/courses/1.jpg" alt="">
                                <div class="price">$25</div>
                            </figure>
                            <div class="course-content">
                                <div class="cc-text">
                                    <h5>Italian for Begginers & Advanced Course</h5>
                                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
                                    <div class="seller-pic set-bg" data-setbg="img/courses/sellers/1.jpg"></div>
                                    <h6>By Sebastian Smith, <span>Italian Teacher</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <figure class="course-preview">
                                <img src="img/courses/2.jpg" alt="">
                                <div class="price">$25</div>
                            </figure>
                            <div class="course-content">
                                <div class="cc-text">
                                    <h5>English Literature Advanced Course</h5>
                                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
                                    <div class="seller-pic set-bg" data-setbg="img/courses/sellers/2.jpg"></div>
                                    <h6>By Maria Williams, <span>English Teacher</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <figure class="course-preview">
                                <img src="img/courses/3.jpg" alt="">
                                <div class="price">$25</div>
                            </figure>
                            <div class="course-content">
                                <div class="cc-text">
                                    <h5>Portrait Photography Course for Begginers</h5>
                                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
                                    <div class="seller-pic set-bg" data-setbg="img/courses/sellers/3.jpg"></div>
                                    <h6>By Jack Smith, <span>Photographer</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <figure class="course-preview">
                                <img src="img/courses/4.jpg" alt="">
                                <div class="price">$25</div>
                            </figure>
                            <div class="course-content">
                                <div class="cc-text">
                                    <h5>Italian for Begginers & Advanced Course</h5>
                                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
                                    <div class="seller-pic set-bg" data-setbg="img/courses/sellers/1.jpg"></div>
                                    <h6>By Sebastian Smith, <span>Italian Teacher</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <figure class="course-preview">
                                <img src="img/courses/5.jpg" alt="">
                                <div class="price">$25</div>
                            </figure>
                            <div class="course-content">
                                <div class="cc-text">
                                    <h5>English Literature Advanced Course</h5>
                                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
                                    <div class="seller-pic set-bg" data-setbg="img/courses/sellers/2.jpg"></div>
                                    <h6>By Maria Williams, <span>English Teacher</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="course-item">
                            <figure class="course-preview">
                                <img src="img/courses/6.jpg" alt="">
                                <div class="price">$25</div>
                            </figure>
                            <div class="course-content">
                                <div class="cc-text">
                                    <h5>Portrait Photography Course for Begginers</h5>
                                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
                                    <div class="seller-pic set-bg" data-setbg="img/courses/sellers/3.jpg"></div>
                                    <h6>By Jack Smith, <span>Photographer</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="course-item featured-2">
                            <div class="row">
                                <div class="col-lg-4 p-0">
                                    <div class="course-preview set-bg" data-setbg="img/courses/8.jpg">
                                        <div class="price">$25</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 p-0">
                                    <div class="course-content">
                                        <div class="cc-text">
                                            <h5>HTML5  for Begginers & Advanced Course</h5>
                                            <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, </p>
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
                                            <div class="seller-pic set-bg" data-setbg="img/courses/sellers/3.jpg"></div>
                                            <h6>By Jack Smith, <span>Photographer</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div -->
                </div>
                <!-- div class="text-center pt-2" -->
                <!-- button class="site-btn">Load More <i class="fa fa-angle-right"></i></button -->

                <!-- /div -->
                <!-- ---------------------------------------------------------------------------------- -->
            </div>
        </div>


    </div>
</section>
<!-- Courses section end -->


<!-- Footer section -->
<footer class="footer-section spad pb-0">
    <div class="container">
        <!-- div class="text-center">
            <a href="#" class="site-btn">Enroll Now <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="row text-white spad">
            <div class="col-lg-3 col-sm-6 footer-widget">
                <h4>Engeneering</h4>
                <ul>
                    <li><a href="#">Applied Studies</a></li>
                    <li><a href="#">Computer Engeneering</a></li>
                    <li><a href="#">Software Engeneering</a></li>
                    <li><a href="#">Informational Engeneering</a></li>
                    <li><a href="#">System Engeneering</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 footer-widget">
                <h4>Business School</h4>
                <ul>
                    <li><a href="#">Applied Studies</a></li>
                    <li><a href="#">Computer Engeneering</a></li>
                    <li><a href="#">Software Engeneering</a></li>
                    <li><a href="#">Informational Engeneering</a></li>
                    <li><a href="#">System Engeneering</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 footer-widget">
                <h4>Art & Design</h4>
                <ul>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Motion Graphics & 3D</a></li>
                    <li><a href="#">Classichal Painting</a></li>
                    <li><a href="#">Sculpture</a></li>
                    <li><a href="#">Fashion Design</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 footer-widget">
                <h4>Higher Education</h4>
                <ul>
                    <li><a href="#">Applied Studies</a></li>
                    <li><a href="#">Computer Engeneering</a></li>
                    <li><a href="#">Software Engeneering</a></li>
                    <li><a href="#">Informational Engeneering</a></li>
                    <li><a href="#">System Engeneering</a></li>
                </ul>
            </div>
        </div -->
        <div class="footer-bottom">

            <div class="social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
            <ul class="footer-menu">
                <li><a href="https://hmq-edu.com/#about">About us</a></li>
                <li><a href="https://hmq-edu.com/#courses">Courses</a></li>
                <!-- li><a href="#">Contact us</a></li -->
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