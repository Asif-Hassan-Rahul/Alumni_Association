@extends('layouts.web')

@section('content')

    <!-- Start Banner Area -->
    @include('web.home-page.banner')
    <!-- End Banner Area -->

    <!-- Stat About Area -->
    @include('web.home-page.about')
    <!-- End About Area -->

    <!-- Start Study Area -->
    @include('web.home-page.study')
    <!-- End Study Area -->

    <!-- Start Our Campus Information Area -->
    @include('web.home-page.our-campus')
    <!-- End Our Campus Information Area -->

    <!-- Start Simple Steps Area -->
    @include('web.home-page.simple-steps')
    <!-- End Simple Steps Area -->

    <!-- Start Events Area -->
    @include('web.home-page.events')
    <!-- End Events Area -->

    <!-- Stat Admission Area -->
    @include('web.home-page.admission')
    <!-- End Admission Area -->

    <!-- Start Find A Courses Area -->
    @include('web.home-page.find-course')
    <!-- End Find A Courses Area -->

    <!-- Start Campus Experience Area -->
    @include('web.home-page.campus-experience')
    <!-- End Campus Experience Area -->

    <!-- Start Blog Area -->
    @include('web.home-page.blog')
    <!-- End Blog Area -->

@endsection
