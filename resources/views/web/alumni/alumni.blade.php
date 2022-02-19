@extends('layouts.web')

@section('custom_css')
@endsection

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-3">
        <div class="container">
            <div class="page-title-content">
                <h2>Our Alumnis</h2>

                <ul>
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li class="active">Our Alumnis</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Team Area -->
    <section class="team-area-three ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Our Alumnis</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            </div>

            <div class="row justify-content-md-center">
                @foreach($alumni_data as $alumni)
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-member">
{{--                        <img  src="{{asset('assets/img/team/team-1.jpg')}}" alt="Image">--}}
                        <img height="450" width="416" src="{{ $alumni->user->photo_url != null ? url('storage'.$alumni->user->photo_url):'/assets/img/null/avatar.jpg'}}" alt="Image">

                        <div class="team-content">
                            <div class="team-social">
                                <a href="#" class="control">
                                    <i class="ri-share-fill"></i>
                                </a>

                                <ul>
                                    <li>
                                        <a href="{{$alumni->facebook_id}}" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a href="https://www.instagram.com/" target="_blank">--}}
{{--                                            <i class="ri-instagram-line"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                    <li>
                                        <a href="{{$alumni->linkedin_id}}" target="_blank">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a href="https://twitter.com/" target="_blank">--}}
{{--                                            <i class="ri-twitter-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>

                            <div class="team-name">
                                <h3>{{$alumni->name}}</h3>
                                <span>{{$alumni->designation}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



{{--                <div class="col-12">--}}
{{--                    <div class="pagination-area">--}}
{{--                        <span class="page-numbers current" aria-current="page">1</span>--}}
{{--                        <a href="#" class="page-numbers">2</a>--}}
{{--                        <a href="#" class="page-numbers">3</a>--}}

{{--                        <a href="#" class="next page-numbers">--}}
{{--                            <i class="ri-arrow-right-line"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- End Team Area -->
@endsection

@section('custom_js')
@endsection
