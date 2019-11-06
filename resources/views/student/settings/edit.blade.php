@extends('student.layouts.app')

@section('title')
    Профиль
@endsection

@section('content')


        <div class="container-fluid">
            <div class="card mr-6" style="padding: 0; border:0; border-radius:4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
                <div class="card-header d-flex text-dark pb-1 pt-2" style="background-color:white">
                    <p class="text-dark font-weight-bold pl-3 pt-3" style="font-size:16px; line-height: 20px">Персональная информация</p>
                </div>
                <div class="card-body">
                    <div class="row ml-0">

                        <form class="form-horizontal card-body"
{{--                              action="{{route('student.settings_save', $user)}}"--}}
                                action="#"
{{--                              method="post"--}}
                              enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="put">
                            {{ csrf_field() }}
                            <div class="container col-md-6 m-0">
                                <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px">Имя</p>
                                <input type="name" name="name" class="form-control font-weight-bold text-dark"
                                       value="{{$user->name ?? ""}}"
                                       style="font-size:13px; line-height: 16px" placeholder="Jason">

                                <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Фамилия</p>
                                <input type="name" class="form-control font-weight-bold " style="font-size:13px; line-height: 16px" placeholder="Doe">

                                <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Пол</p>
                                <input type="name" class="form-control font-weight-bold " style="font-size:13px; line-height: 16px" placeholder="Мужской">

                                <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Ваша временная зона (таймзона)</p>
                                <input type="name" class="form-control font-weight-bold " style="font-size:13px; line-height: 16px" placeholder="Европа/Москва">

                                <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Email</p>
                                <input type="name" name="email" class="form-control font-weight-bold "
                                       value="{{$user->email ?? ""}}"
                                       style="font-size:13px; line-height: 16px" placeholder="user@mail.com">
                            </div>
                            <div class="row justify-content-start m-3">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>


                        <div class="container col-md-6 m-0" style="text-align: right">
                            <div class="row justify-content-end m-0 p-0">
                                <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="160" height="160" class="mr-3 rounded-circle ">
                            </div>
                            <div class="row justify-content-end mr-0">
                                <div class="card mt-3" style="width: 192px; text-align: left; border: 0">
                                    <ul class="list-group list-group-flush py-0 px-0" style="box-shadow: 0px 4px 24px rgba(0,0,0,0.12)">
                                        <li class="list-group-item text-dark" style="font-size: 12px; border: 0">Загрузить изображение</li>
                                        <li class="list-group-item text-dark"style="font-size: 12px; border: 0">Фотография из Facebook</li>
                                        <li class="list-group-item text-dark"style="font-size: 12px; border: 0">Gravatar</li>
                                        <li class="list-group-item text-dark"style="font-size: 12px; border: 0">Удалить изображение</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card mr-6 mb-3" style="margin-top: 24px; padding: 0; border:0; border-radius:4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
                <div class="card-header d-flex text-dark pb-1 pt-2" style="background-color:white">
                    <p class="text-dark font-weight-bold pl-3 pt-3" style="font-size:16px; line-height: 20px">Опасная зона</p>
                </div>
                <div class="card-body">
                    <div class="row ml-0">
                        <div class="container col-md-4 m-0">
                            <button class="btn btn-light" style="border-color:red; color:red">Удалить аккаунт из системы</button>
                        </div>

                        <div class="container col-md-6 m-0">
                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; opacity: 0.75">При удаление аккаунта пропадет весь ваш прогресс и активность,
                                а также вы потеряете доступ к системе</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
