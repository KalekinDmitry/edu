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
                                @lang('content.usprofediting')
                            @endauth
                            @auth('teacher')
                                @lang('content.tchprofediting')
                            @endauth
                            @auth('admin')
                                @lang('content.admprofediting')
                            @endauth
                        </div>
                        <form class="form-horizontal card-body" action="{{route('my_settings_save', $user)}}"
                              method="post"
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
                                    <label for="image"
                                           class="col-md-4 col-form-label text-md-left">@lang('content.chprofimg')</label><br>
                                    <div class="col-md-12 text-md-left">
                                        <input id="image" type="file" name="image">
                                    </div>
                                </div>
                                <hr class="border-dark">
                                <div class="form-group row">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-left">@lang('content.nm')</label>
                                    <div class="col-md-12 text-md-left">
                                        <input id="name" name="name" type="text" class="form-control"
                                               value="{{$user->name ?? ""}}" minlength="2" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sex"
                                           class="col-md-4 col-form-label text-md-left">@lang('content.chgender')</label>
                                    <div class="col-md-12 text-md-left">
                                        <select id="sex" name="sex" class="form-control">
                                            <option value="0" selected="">@lang('content.notselected')</option>
                                            <option value="1">@lang('content.male')</option>
                                            <option value="2">@lang('content.fem')</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-left">@lang('content.eml')</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="email" name="email" type="email" class="form-control"
                                           value="{{$user->email ?? ""}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone"
                                       class="col-md-4 col-form-label text-md-left">@lang('content.phonenum')</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="phone" name="phone" type="number" class="form-control"
                                           value="{{$user->phone ?? ""}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dob"
                                       class="col-md-4 col-form-label text-md-left">@lang('content.dobth')</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="dob" name="dob" type="date" class="form-control"
                                           value="{{$user->dob ?? ""}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="skills"
                                       class="col-md-4 col-form-label text-md-left">@lang('content.skills')</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="skills" name="skills" type="text" class="form-control"
                                           value="{{$user->skills ?? ""}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hobbies"
                                       class="col-md-4 col-form-label text-md-left">@lang('content.hobbies')</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="hobbies" name="hobbies" type="text" class="form-control"
                                           value="{{$user->hobbies ?? ""}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="signature"
                                       class="col-md-4 col-form-label text-md-left">@lang('content.signature')</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="signature" name="signature" type="text" class="form-control"
                                           value="{{$user->signature ?? ""}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status"
                                       class="col-md-4 col-form-label text-md-left">@lang('content.status')</label>
                                <div class="col-md-12 text-md-left">
                                    <input id="status" name="status" type="text" class="form-control"
                                           value="{{$user->status ?? ""}}">
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
