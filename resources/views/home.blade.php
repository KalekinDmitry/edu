@extends('layouts.app')

@section('content')

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
                        <h5>By 3toria Arabina, <span>Professional teacher & coach</span></h5>
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
                            <div class="price">FREE</div>
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
                <h5>Курсы отсутствуют</h5>
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
                <p>New Students</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="{{ asset('images/icons/2.png') }}" alt="">
                </figure>
                <h2>?</h2>
                <p>Grad Students</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="{{ asset('images/icons/3.png') }}" alt="">
                </figure>
                <h2>?</h2>
                <p>Qualified Teachers</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="{{ asset('images/icons/4.png') }}" alt="">
                </figure>
                <h2>{{ $count = DB::table('courses')->count()}}</h2>
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
<section id="newslatter" class="newslatter-section set-bg" data-setbg="{{ asset('images/newslatter-bg.jpg') }}">
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

@endsection


