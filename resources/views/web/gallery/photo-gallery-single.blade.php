@extends('layouts.web')

@section('custom_css')
    <link href="{{asset('assets/css/simple-lightbox.min.css')}}" rel="stylesheet" />
    <style>
        .card{
            transition: box-shadow .3s;
        }
        .card:hover{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .preloader{
            visibility: hidden;
        }
    </style>
@endsection

@section('content')


    <!-- Start Page Title Area -->
    <div class="page-title-area bg-3">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$album->album_name}}</h2>

                <ul>
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li><a href="{{route('gallery_front')}}">Gallery</a></li>
                    <li class="active">{{$album->album_name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <div class="container py-5">
{{--        <div class="row py-5">--}}
{{--            @if($albums!=null)--}}
{{--                @foreach($albums as $album)--}}
{{--                    <a href="{{route('single_gallery_front',['id'=>$album->id])}}">--}}
{{--                        <div class="col-md-4">--}}
{{--                            <div class="card" style="width: 18rem;">--}}
{{--                                @foreach($album_thumbnails as $album_thumbnail)--}}
{{--                                    @if($album_thumbnail->imageable_id == $album->id)--}}
{{--                                        <img src="{{url('storage/'.$album_thumbnail->image_url)}}" class="img-fluid"--}}
{{--                                             alt="Album thumbnail">--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title">{{$album->album_name}}</h5>--}}
{{--                                    --}}{{--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                                    --}}{{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--        </div>--}}

        <div class="container-fluid px-lg-4" style="width: 80%; margin-top: 50px; margin-bottom: 50px">
            {{--        <div class="container">--}}
            {{--            <div class="row">--}}
            {{--                <div class="col-sm-12 d-flex justify-content-center">--}}
            {{--                    <h4>{{ $album->album_name }}</h4>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--        </div>--}}
            <div class="row album">
                @if(count($images->where("imageable_id", $album->id))==0)
                    <div class="col-sm-12" >
                        <div class="d-flex justify-content-center">
                            <span class="badge badge-success" >Ops! There are no photos in this Album</span>
                        </div>
                        {{--                    <div class="d-flex justify-content-center">--}}
                        {{--                        <a href="{{route('frontend_gallery')}}" class="btn btn-outline-success btn-lg" style="margin-top: 30px; font-size: 25px">Go Back</a>--}}
                        {{--                    </div>--}}

                    </div>
                @endif
                @foreach($images as $image)
                    <div class="col-md-4 mt-4 text-center">
                        <div class="card" id="album_card">
                            <div class="card-body" >
                                <a id="img" href="{{url('storage/'.$image->image_url)}}">
                                    <img src="{{url('storage/'.$image->image_url)}}" class="img-fluid" id="image" alt="sdsd">
                                </a>
                            </div>
                            <div class="card-text">
                                {{--                            <a  data-toggle="modal" data-target="#delete_photo_modal" data-photo_id="{{$image->id}}" data-album_id="{{$album->id}}" class="btn btn-sm btn-danger btn-rounded text-white mr-1" href="#">Delete</a>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 20px; ">
                {{$images->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
@endsection


@section('custom_js')


    <!-- As A Vanilla JavaScript Plugin -->
    <script src="{{asset('assets/js/simple-lightbox.min.js')}}"></script>
    <!-- For legacy browsers -->
    <script src="{{asset('assets/js/simple-lightbox.legacy.min.js')}}"></script>
    <!-- As A jQuery Plugin -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/simple-lightbox.jquery.min.js')}}"></script>

    <script>
        var gallery = $('.card-body a').simpleLightbox({
            sourceAttr:'href',
            overlay:true,
            spinner:true,
            nav:true,
            animationSlide:true,
            animationSpeed: 250,
            preloading:true,
        });

    </script>
@endsection
