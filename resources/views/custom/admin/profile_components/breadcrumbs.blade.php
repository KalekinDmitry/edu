<section class="breadcrumb-section">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i>Profile</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{ route('home') }}">Home</a></li>
                <li><i class="fa fa-user-md"></i>Profile - {{ $user->name }}</li>
            </ol>
        </div>
    </div>
</section>