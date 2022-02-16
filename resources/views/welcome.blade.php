@extends('layouts.web')

@section('custom_css')
    <style>
        .single-simple-steps:hover{
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }


    </style>
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
