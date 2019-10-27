@extends('layouts.app')

@section('content')
    <div class="row ml-0">
        <div class="card col-md-5 py-0 px-0" style="border-radius:0; height:100vh">
            <div class="row" style="height:56px">

                <p class="text-dark font-weight-bold pl-5 pt-3">
                        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
                            <img class="mr-2 pb-1" style="opacity: 0.7" src="{{ asset('assets/icons/icon_menu.svg') }}" width="16px">
                            Сообщения
                        </button>
                </p>
            </div>

            <input class="form-control form-control-lg" style="height: 64px; font-size:15px; border-radius:0; border-left: 0; border-right:0; background-color:#FBFBFB"type="text" placeholder="Поиск">

            <div class="py-4 px-3   pb-0 mb-0" style="background-color: #FBFBFB ">
                <div class="media d-flex align-items-center">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="40" class="mr-3 rounded-circle ">
                    <div class="media-body p-0 m-0">
                        <p class="m-0 p-0 font-weight-bold text-dark" style="font-size:16px; line-height: 24px">Jason Doe</p>
                        <p class="font-weight-light text-muted m-0 p-0" style="font-size:16px; line-height: 16px">Вы: Да, я видел. Мне кажется наличие трансф...</p>
                    </div>
                </div>
            </div>

            <hr class="p-0 m-0">
            <div class="py-4 px-3   pb-0 mb-0" >
                <div class="media d-flex align-items-center">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="40" class="mr-3 rounded-circle ">
                    <div class="media-body p-0 m-0">
                        <p class="m-0 p-0 font-weight-bold text-dark" style="font-size:16px; line-height: 24px">Jason Doe</p>
                        <p class="font-weight-light text-dark m-0 p-0" style="font-size:16px; line-height: 16px">Вы: Да, я видел. Мне кажется...</p>
                        </div>
                </div>
            </div>
            <hr class="p-0 m-0">
            <div class="py-4 px-3   pb-0 mb-0" >
                <div class="media d-flex align-items-center">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="40" class="mr-3 rounded-circle ">
                    <div class="media-body p-0 m-0">
                        <p class="m-0 p-0 font-weight-bold text-dark" style="font-size:16px; line-height: 24px">Jason Doe</p>
                        <p class="font-weight-light m-0 p-0" style="font-size:16px; line-height: 16px">Вы: Да, я видел. Мне кажется наличие трансф...</p>
                        </div>
                </div>
            </div>
        </div>


        <div  class="card col-md-7 py-0 px-0" style="border-radius:0; background-color: #FBFBFB ">
            <div class="row" style="background-color: white; padding:16px; margin: 0; box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.12)">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="24" height="24" class="mr-3 rounded-circle ">
                    <p class="m-0 p-0 font-weight-bold text-dark" style="font-size:16px; line-height: 20px">Jason Doe</p>
            </div>

            <div class="m-0 p-0" style="height: 100%">
                <div class="row mt-4 ml-4 mr-5">
                     @foreach($invites as $invite)
                        <div class="card col-md-9 mb-3" style="padding: 0; border:0; border-radius:4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
                            <div class="card-header d-flex text-white pb-1 pt-2"
                                    style="background: #185dd0; background: -webkit-gradient(linear, left top, right top, from(#185dd0), to(#7076fc)); background: linear-gradient(to right, #185dd0 0%, #7076fc 100%);">
                                {{-- <p class="mb-0 pb-0 font-weight-bold">{{ $invite->message_title }}</p> --}}
                                <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="32" class="mr-3 rounded-circle ">
                                <p class="m-0 p-0 mt-2 font-weight-bold text-white" style="font-size:16px; line-height: 20px">{{$invite->message_title}}</p>
                            </div>
                            <div class="card-body">
                                <p class="text-dark" >{{$invite->message_text}}</p>
                                <div class="d-flex flex-wrap">
                                    <form action="{{ route('classroom.update', [$invite->classroom_id]) }}"
                                            method="post"
                                            enctype="multipart/form-data" style="margin-right: 5px;">
                                        <input type="hidden" name="_method" value="put">
                                        <input type="hidden" name="newIncludedUsers[]" value="{{ Auth::user()->id }}">
                                        {{ csrf_field() }}
                                        <button class="btn btn-primary" type="submit"
                                                value="update">@lang('content.flw')
                                            <i class="fa fa-angle-right"></i></button>
                                    </form>
                                    <form onsubmit="if(confirm('Realy delete?')){return true}else{return false}"
                                            action="{{ route('classroomInvite.destroy', ['classroom' => $invite->classroom_id, 'user' => $invite->user_id, 'invite' => $invite->id]) }}"
                                            method="post">
                                        <input type="hidden" name="_method" value="delete">
                                        {{ csrf_field() }}
                                        <button type="submit"
                                                class="btn btn-danger col-md-12">@lang('content.del')</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <br>
                        @endforeach
                </div>



                <div class="row justify-content-end mt-4 ml-4 mr-5">
                    <p class="font-weight-bold m-0 p-0 mb-2 col-md-12" style="font-size:13px; line-height: 16px; text-align:end; opacity:0.75">15 cсентября 2019 20:19</p>
                    <div class="card col-md-9" style="padding: 16px; border: 0; border-radius:4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
                        <div class="media d-flex align-items-center">
                            <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="32" class="mr-3 rounded-circle ">
                            <div class="media-body p-0 m-0">
                                <p class="m-0 p-0 font-weight-bold text-dark" style="font-size:16px; line-height: 24px">Jason Doe</p>
                                <p class="font-weight-light m-0 p-0" style="font-size:16px; line-height: 16px">Благодарю</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-bottom mt-4 ml-4 mr-5 mb-3">
                    <div class="card col-md-12" style="padding: 12px; border-radius:4px;">

                            <textarea class="form-control mb-1" id="exampleFormControlTextarea1" placeholder="Ваше сообщение" rows="10" style="border:0; height:128px; resize:none"></textarea>
                            <div class="d-flex">
                                <button class="btn btn-primary ml-1">Отправить</button>
                                <label class="text ml-2" for="my-file-selector">
                                    <input id="my-file-selector" type="file" class="d-none">
                                    <img class="ml-1" style="opacity:0.5" src="{{ asset('assets/icons/icon_clip.svg') }}"  width="11px">
                                </label>
                            </div>

                    </div>
            </div>

        </div>
    </div>
@endsection
