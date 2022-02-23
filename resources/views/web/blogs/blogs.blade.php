@extends('layouts.web')

@section('custom_css')
    <style>

        .single-blog{
            overflow: hidden;
        }

        .single-blog img {
            width: 100%;
            transition: 0.2s all ease-in-out;
        }

        .single-blog:hover img{
            transform: scale(1.1);
        }
    </style>
@endsection


@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area bg-22">
        <div class="container">
            <div class="page-title-content">
                <h2>Blog</h2>

                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-post-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-md-center">
                        @forelse ($blogs as $blog)
                        <div class="col-lg-4 col-md-4">
                            <div class="single-blog">
                                <a href="{{route('single_blog',['blog_id' => $blog->id])}}" class="blog-img">
                                    <img src="{{ asset('storage/'.$blog->thumbnail_image)}}" alt="Image">
                                    <span>{{$blog->blog_category->title}}</span>
                                </a>

                                <div class="blog-content">
                                    <ul>
                                        <li>
                                            <i class="ri-calendar-line"></i>
                                            <span>{{$blog->published_date}}</span>
                                        </li>
                                    </ul>

                                    <h3>
                                        <a href="{{route('single_blog',['blog_id' => $blog->id])}}">
                                            {{$blog->blog_category->title}}
                                        </a>
                                    </h3>

{{--                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nemo unde,--}}
{{--                                        porro cum asperiores illum quia voluptatum? Vero corporis aspernatur, saepe--}}
{{--                                        iusto tempora maiores qui optio eveniet soluta ipsa inventore! ipsum dolor sit--}}
{{--                                        amet consectetur adipisicing elit. Inventore nemo unde asperiores illum quia--}}
{{--                                        voluptatum asperiores illum quia</p>--}}
                                </div>
                            </div>
                        </div>

                        @empty
                        @endforelse



{{--                        <div class="col-12">--}}
{{--                            <div class="pagination-area">--}}
{{--                                <a href="#" class="prev page-numbers">--}}
{{--                                    <i class="ri-arrow-left-line"></i>--}}
{{--                                </a>--}}
{{--                                <span class="page-numbers current" aria-current="page">1</span>--}}
{{--                                <a href="#" class="page-numbers">2</a>--}}
{{--                                <a href="#" class="page-numbers">3</a>--}}

{{--                                <a href="#" class="next page-numbers">--}}
{{--                                    <i class="ri-arrow-right-line"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection

@section('custom_js')
@endsection
