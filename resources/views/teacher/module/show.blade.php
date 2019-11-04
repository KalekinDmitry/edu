<?php use App\Models\Module;

/** @var Module $module */ ?>


@extends('teacher.layouts.app')

@section('content')

    <section class="lesson-section set-bg fixed" data-setbg="{{config('static.static')}}/img/bg.jpg">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="hero-text text-white">
                    <h2>{{ $module->name }}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-9" style="color:white">

                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            @foreach($module->lessons() as $lesson)
                                <div class="row justify-content-left" style="background-color:lightgrey">
                                    <div class="col-md-12" style="color:green">
                                        <strong>{{ $lesson->title }}</strong>
                                        <br>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection
