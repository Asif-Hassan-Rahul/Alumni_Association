@extends('layouts.web')

@section('custom_css')
    <style>
        .card{
            transition: box-shadow .3s;
        }
        .card:hover{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
    </style>
@endsection

@section('content')


    <!-- Start Page Title Area -->
    <div class="page-title-area bg-3">
        <div class="container">
            <div class="page-title-content">
                <h2>Gallery</h2>

                <ul>
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <div class="container py-5">
        <div class="row py-5">
            @if($albums!=null)
                @foreach($albums as $album)
                    <a href="{{route('single_gallery_front',['id'=>$album->id])}}">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @foreach($album_thumbnails as $album_thumbnail)
                                    @if($album_thumbnail->imageable_id == $album->id)
                                        <img src="{{url('storage/'.$album_thumbnail->image_url)}}" class="img-fluid"
                                             alt="Album thumbnail">
                                    @endif
                                @endforeach
                                <div class="card-body">
                                    <h5 class="card-title">{{$album->album_name}}</h5>
                                    {{--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                    {{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
@endsection


@section('custom_js')
@endsection
