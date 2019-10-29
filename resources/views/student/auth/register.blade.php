@extends('layouts.app')

@section('content')
    <!-- Login section -->
            {{-- <div class="row justify-content-center">
                <div class="col-xs-10 col-sm-8 col-md-8 col-lg-7 col-xl-6 card"
                     style="border: 0; padding-top:7.5%; color: gray;">
                    <div class="text-white card-header"
                         style="background: #185dd0; background: -webkit-gradient(linear, left top, right top, from(#185dd0), to(#7076fc)); background: linear-gradient(to right, #185dd0 0%, #7076fc 100%);">
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
                                <input style="text-align: center;"
                                       id="password-confirm"
                                       type="password"
                                       name="password_confirmation"
                                       placeholder="Confirm the password"
                                       required autocomplete="new-password"
                                       minlength=6>
                                <hr style="border-color: white;">
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
            </div> --}}


            <div class=" row justify-content-center col-md-12" style="height:100vh; background-color:#fbfbfb">
                <div class="card" style="width:400px; height:670px; margin-top:7.5%; box-shadow: 0px 2px 4px rgba(0,0,0,0.1); border: 0">
                    <div class="card-header text-dark font-weight-bold" style="background-color:white; font-size:16px">
                        Зарегистрировать аккаунт
                    </div>

                    <div class="card-body" style="padding-top:0px">
                        <form method="POST" action="{{ route('user.registerRequest') }}"  class="contact-form m-0 p-0">
                            @csrf
                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px" >Ваше имя</p>
                            <input type="text" name="name" required class="form-control font-weight-bold " style="font-size:13px; line-height: 16px" placeholder="Введите имя">

                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px" >Email</p>
                            <input type="text" name="email" required class="form-control font-weight-bold " style="font-size:13px; line-height: 16px" placeholder="Введите email">

                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Пароль</p>
                            <input type="password" name="password" required class="form-control font-weight-bold " style="font-size:13px; line-height: 16px" placeholder="Введите пароль">

                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Подтвердите пароль</p>
                            <input type="password" name="password_confirmation" required class="form-control font-weight-bold " style="font-size:13px; line-height: 16px" placeholder="Введите пароль еще раз">

                            <button type="submit" class="btn btn-primary col-md-12 mt-3" style="font-size:14px; height:40px">Зарегистрироваться</button>
                        </form>


                        <div class="row justify-content-center mt-4">
                            <p class="text-grey text-center font-weight-bold col-md-9 mx-0" style="font-size:13px">Регистрация через социальные сети</p>
                        </div>


                        <div class="row justify-content-center" >
                            <button class="btn btn-primary" style="font-size:13px; width:110px; background-color:#3c5a9a">
                                <div class="row justify-content-center">
                                    <img src="{{ asset('assets/icons/icon_facebook.svg') }}" width="16px">
                                    <i class="fa fa-th-large mr-2 text-primary fa-fw"></i>
                                    Фейсбук
                                </div>
                            </button>

                            <div  style="width:12px"></div>

                            <button class="btn btn-primary " style="font-size:13px; width:110px; background-color:#2aa3ef">
                                <div class="row justify-content-center">
                                    <img src="{{ asset('assets/icons/icon_twitter.svg') }}" width="16px">
                                    <i class="fa fa-th-large mr-2 text-primary fa-fw"></i>
                                    Твиттер
                                </div>
                            </button>

                            <div  style="width:12px"></div>

                            <button class="btn btn-primary " style="font-size:13px; width:110px; background-color:#4c77a6">
                                <div class="row justify-content-center">
                                    <img src="{{ asset('assets/icons/icon_VK.svg') }}" width="16px">
                                    <i class="fa fa-th-large mr-2 text-primary fa-fw"></i>
                                    Вконтакте
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="card-footer text-dark" style="font-size:13px; height:128px">
                        <a href="{{ route('user.showLoginForm') }}" class="btn btn-light text-dark col-md-12 my-2" style="font-size:14px; height:40px; padding-top:9px">
                            Вход
                        </a>
                        <div class="row justify-content-center">
                            Что за курс? больше информации по
                            <a href="#" class="mx-1">линке</a>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Login section end -->
@endsection
