@extends('app')

@section('layouts')
    <!-- Login section end -->
    <div class=" row justify-content-center col-md-12" style="height:100vh; background-color:#fbfbfb">
        <div class="card"
             style="width:400px; height:520px; margin-top:7.5%; box-shadow: 0px 2px 4px rgba(0,0,0,0.1); border: 0">
            <div class="card-header text-dark font-weight-bold" style="background-color:white; font-size:16px">
                Войдите в ваш аккаунт
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('student.loginRequest') }}" class="contact-form m-0 p-0">
                    @csrf
                    <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">
                        Email</p>
                    <input type="text" name="email" required class="form-control font-weight-bold "
                           style="font-size:13px; line-height: 16px" placeholder="Введите email">

                    <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">
                        Пароль</p>
                    <input type="password" name="password" required class="form-control font-weight-bold "
                           style="font-size:13px; line-height: 16px" placeholder="Введите пароль">

                    <button type="submit" class="btn btn-primary col-md-12 mt-3" style="font-size:14px; height:40px">
                        Вход
                    </button>
                </form>

                <div class="row justify-content-center mt-4">
                    <p class="text-grey text-center font-weight-bold col-md-7" style="font-size:13px">Вход через
                        социальные сети</p>
                </div>


                <div class="row justify-content-center">
                    <button class="btn btn-primary" style="font-size:13px; width:170px; background-color:#3c5a9a">
                        <div class="row justify-content-center">
                            <img src="{{ asset('assets/icons/icon_facebook.svg') }}" width="16px">

                            Фейсбук
                        </div>
                    </button>

                    <div style="width:12px"></div>

                    <button class="btn btn-primary " style="font-size:13px; width:170px; background-color:#4c77a6">
                        <div class="row justify-content-center">
                            <img src="{{ asset('assets/icons/icon_VK.svg') }}" width="16px">

                            Вконтакте
                        </div>
                    </button>
                </div>
            </div>

            <div class="card-footer text-dark" style="font-size:13px; height:128px">
                <a href="{{ route('student.showRegisterForm') }}" class="btn btn-light text-dark col-md-12 my-2"
                   style="font-size:14px; padding-top:9px; height:40px">
                    Зарегистрироваться
                </a>
                <div class="row justify-content-center">
                    Что за курс? больше информации по
                    <a href="#" class="mx-1">линке</a>
                </div>
            </div>
        </div>
    </div>

@endsection
