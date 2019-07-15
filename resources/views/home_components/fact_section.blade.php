<section class="fact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="https://static.hmq-edu.com/img/icons/1.png" alt="">
                </figure>
                <h2>{{ $count = DB::table('users')->count()}}</h2>
                <p>New Students</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="https://static.hmq-edu.com/img/icons/2.png" alt="">
                </figure>
                <h2>?</h2>
                <p>Grad Students</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="https://static.hmq-edu.com/img/icons/3.png" alt="">
                </figure>
                <h2>?</h2>
                <p>Qualified Teachers</p>
            </div>
            <div class="col-lg-3 col-sm-6 fact-item">
                <figure>
                    <img src="https://static.hmq-edu.com/img/icons/4.png" alt="">
                </figure>
                <h2>{{ $count = DB::table('courses')->count()}}</h2>
                <p>Amazing Courses</p>
            </div>
        </div>
    </div>
</section>