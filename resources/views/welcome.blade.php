@extends('layouts.web')

@section('custom_css')

@endsection

@section('content')

    <!-- Start Banner Area -->
    @include('web.home.banner')
    <!-- End Banner Area -->

    <!-- Stat About Area -->
    @include('web.home.about')
    <!-- End About Area -->

    <!-- Start Study Area -->
    @include('web.home.study')
    <!-- End Study Area -->

    <!-- Start Our Campus Information Area -->
    @include('web.home.our-campus')
    <!-- End Our Campus Information Area -->

    <!-- Start Simple Steps Area -->
    @include('web.home.simple-steps')
    <!-- End Simple Steps Area -->

    <!-- Start Events Area -->
    @include('web.home.events')
    <!-- End Events Area -->

    <!-- Stat Admission Area -->
    @include('web.home.admission')
    <!-- End Admission Area -->

    <!-- Start Find A Courses Area -->
    @include('web.home.find-course')
    <!-- End Find A Courses Area -->

    <!-- Start Campus Experience Area -->
    @include('web.home.campus-experience')
    <!-- End Campus Experience Area -->

    <!-- Start Blog Area -->
    @include('web.home.blog')
    <!-- End Blog Area -->

@endsection

@section('custom_js')

@endsection
