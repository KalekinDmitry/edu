@extends('layouts.app')

@section('content')
    <!-- Login section -->
    <section class="hero-section set-bg" style="height: 800px;" data-setbg="{{config('static.static')}}/img/bg.jpg">
        <div class="container" style="padding-top: 300px;">
            <div class="row justify-content-center">
                <div class="col-xs-6 col-sm-8 col-md-8 col-lg-7 col-xl-6 card" style="border-color: darkblue;">
                    <div class="text-white card-header"
                         style="border-color: darkblue; background: #185dd0; background: -webkit-gradient(linear, left top, right top, from(#185dd0), to(#7076fc)); background: linear-gradient(to right, #185dd0 0%, #7076fc 100%);">
                        <h2 style="text-align: center;">@lang('content.laa')</h2>
                    </div>
                    <form method="POST" action="{{ route('admin.loginRequest') }}" style="padding-top: 25px;"
                          class="contact-form card-body">
                        @csrf
                        <div class="row text-center">
                            <div class="col-md-6 offset-md-3">
                                <input style="text-align: center;" class="@error('email') is-invalid @enderror text"
                                       id="email"
                                       type="email"
                                       name="email" placeholder="@lang('content.entemail')" value="{{ old('email') }}"
                                       required
                                       autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                                <span class="focus-input100"></span>
                            </div>

                            <div class="col-md-6 offset-md-3">
                                <input style="text-align: center;" id="password" type="password"
                                       class="@error('password') is-invalid @enderror input100"
                                       name="password"
                                       placeholder="@lang('content.entpsw')" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                                <span class="focus-input100"></span>
                            </div>

                            <hr>

                            <div class="col-md-6 offset-md-3">
                                <label class="form-check-label" for="remember">
                                    @lang('content.remme')
                                </label>
                                <input class="input form-check-input"
                                       style="height: 15px; width: 15px; margin-left: 30px;" type="checkbox"
                                       name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <hr style="border-color: darkblue;">
                            </div>

                            <div class="col-md-6 offset-md-3 justify-content-centeru">
                                <button type="submit" style="margin-bottom: 10px;" class="site-btn">
                                    @lang('content.ent')
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