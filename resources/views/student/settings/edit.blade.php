@extends('layouts.app')

@section('content')
    <section class="content-section set-bg fixed"
             data-setbg="{{config('static.static')}}/img/bg.jpg">
        <div class="container" style="padding-top: 200px;min-height: 100vh;">
            <div class="row">
                <section class="wrapper">
                    @include('student.settings.settings_components.owninformation')
                    @include('student.settings.settings_components.addpanel')
                </section>
            </div>
        </div>
    </section>
@endsection
