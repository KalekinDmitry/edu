@extends('guest.layouts.app')

@section('content')


    <!-- Hero section -->
    @include('guest.landing.hero_section')
    <!-- Hero section end -->

    <!-- Services section -->
    @include('guest.landing.services_section')
    <!-- Services section end -->

    <!-- Courses section  -->
    @include('guest.landing.courses_section')
    <!-- Courses section end -->

    <!-- Fact section -->
    @include('guest.landing.fact_section')
    <!-- Fact section end -->

    <!-- About section -->
    @include('guest.landing.about_section')
    <!-- About section end -->

    <!-- Newslatter section -->
    @include('guest.landing.newslatter_section')
    <!-- Newslatter section end -->

    <!-- Contact section -->
    @include('guest.landing.contact_section')
    <!-- Contact section end -->

@endsection