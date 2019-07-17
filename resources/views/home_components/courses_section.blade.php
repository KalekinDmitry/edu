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


            @foreach($courses as $course)
                <div class="course-item">
                    <figure class="course-preview">
                        @if($course->image)
                            <img src="{{ asset($course->image )}}" alt="">
                        @else
                            <img src="{{config('static.static')}}/img/no-photo.jpg" alt="">
                        @endif
                        @if( $course->cost > 0)
                            <div class="price">${{ $course->cost }}</div>
                        @else
                            <div class="price">FREE</div>
                        @endif
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
            @endforeach
        </div>
    </div>
</section>
