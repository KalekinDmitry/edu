@extends('layouts.app')

@section('content')
    <!-- Login section -->
    <section class="hero-section set-bg" style="height: 800px;" data-setbg="{{config('static.static')}}/img/bg.jpg">
        <div class="container" style="padding-top: 300px;">
            <div class="row justify-content-center">
                <div class="col-xs-6 col-sm-8 col-md-8 col-lg-7 col-xl-6 card" style="border-color: darkblue;">
                    <div class="text-white card-header"
                         style="border-color: darkblue; background: #185dd0; background: -webkit-gradient(linear, left top, right top, from(#185dd0), to(#7076fc)); background: linear-gradient(to right, #185dd0 0%, #7076fc 100%);">
                        <h2 style="text-align: center;">@lang('content.regbtn')</h2>
                    </div>
                    <form method="POST" action="{{ route('user.registerRequest') }}" style="padding-top: 25px;"
                          class="contact-form card-body">
                        @csrf
                        <div class="row text-center">
                            <div class="col-md-6 offset-md-3">
                                <input style="text-align: center;" class="@error('name') is-invalid @enderror"
                                       id="name"
                                       type="text"
                                       name="name"
                                       placeholder="@lang('content.enm')"
                                       value="{{ old('name') }}"
                                       required
                                       minlength=2
                                       maxlength=20>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 offset-md-3">
                                <input style="text-align: center;" class="@error('email') is-invalid @enderror"
                                       id="email"
                                       type="email"
                                       name="email" placeholder="@lang('content.entemail')" value="{{ old('email') }}"
                                       required
                                       minlength=5>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 offset-md-3">
                                <input style="text-align: center;" class="@error('password') is-invalid @enderror"
                                       id="password"
                                       type="password"
                                       name="password"
                                       placeholder="@lang('content.entpsw')"
                                       required
                                       autocomplete="new-password"
                                       minlength=6>
                                @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-md-6 offset-md-3">
                                <input style="text-align: center;" class="form-control"
                                       id="password-confirm"
                                       type="password"
                                       name="password_confirmation"
                                       placeholder="Confirm the password"
                                       required autocomplete="new-password"
                                       minlength=6>
                                <hr style="border-color: darkblue;">
                            </div>
                            <div class="col-md-6 offset-md-3 justify-content-centeru">
                                <button type="submit" style="margin-bottom: 10px;" class="site-btn">
                                    @lang('content.reg')
                                </button>
                                <a class="site-btn-danger" href="{{ route('home') }}">@lang('content.bckhome')</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Login section end -->
@endsection

