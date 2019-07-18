@extends('layouts.app')

@section('content')
<!-- Create section -->
<section class="create-section">
    <div class="container">
        <br><br><br><br><br><br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="border-dark card text-dark bg-white">
                    <div class="card-header">
                        @auth('web')
                        User profile editing
                        @endauth
                        @auth('teacher')
                        Teacher profile editing
                        @endauth
                        @auth('admin')
                        Admin profile editing
                        @endauth
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
@endsection
<!-- Create section end -->
<br>
<!-- Footer section -->
@section('scripts')
<script>$("select[name='sex']").val({{$user->sex}}).change();</script>
@endsection
