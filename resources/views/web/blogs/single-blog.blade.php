@extends('layouts.web')

@section('custom_css')

    <style>
        .preloader{
            visibility: hidden;
        }
    </style>
@endsection

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>Blog details</h2>

                <ul>
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li class="active">Blog details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-content mr-15">
                        <div class="blog-top-content">
                            <div class="blog-content">
                                <h3>{{$blog->title}}</h3>
                                <ul class="admin">
                                    <li>
                                        <i class="ri-calendar-2-line"></i>
                                        {{$blog->published_date}}
                                    </li>
                                </ul>

                                @if($blog->full_image != null)
                                    <div class="blog-details-img">
                                        <img src="{{ asset('storage/'.$blog->full_image)}}" alt="Image">
                                    </div>
                                @endif



                                <p class="mt--40 p-0 "> {!! html_entity_decode($blog->detail) !!} </p>


                                <div class="gap-mb-20"></div>
                            </div>
                        </div>




                        <div class="tags">
                            <ul class="tag-link">
                                <li class="title">
                                    <i class="ri-price-tag-line"></i>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        {{$blog->tags}}
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="go-back">
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-center align-items-center">
                                    <a class="default-btn" href="{{route('blogs_front')}}"><i class="fa-solid fa-arrow-left-long"></i> Go Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection

@section('custom_js')

    <!-- Jquery Min JS -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>

    <script>
        // Preloader
        $(window).on('load', function() {
            $('.preloader').addClass('preloader-deactivate');
        })
    </script>
@endsection
