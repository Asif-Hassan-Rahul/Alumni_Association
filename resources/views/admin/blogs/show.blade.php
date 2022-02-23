@extends('layouts.dashboard_layout')
@section('custom_style')
    @include('include.data_table.data_table_css')
@endsection

@section('content')
    <div class="container-fluid px-lg-4">
        <div class="row">
            <div class="col-md-12 mt-lg-4 mt-4">
                <!-- Page Heading -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between  align-items-center">
                            <div>
                                <h5 class="font-weight-bold text-cyan">{{$blog->author_name}}</h5>
                                <small>{{ $blog->published_date }}</small>
                            </div>
                            <div>
                                <a href="{{route('blogs.index')}}" class="btn btn-sm btn-success">
                                    Return back
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body d-flex justify-content-center ">
                        <div class="col-md-8">
                            <img
                                src="{{ $blog->full_image != null ? asset('storage/'.$blog->full_image)  : asset('assets/img/null/blog_image.jpg') }}" class="card-img-top"
                                alt=" {{$blog->title}}">
                        </div>
                    </div>
                </div>
            </div>
        {{----------------------------------Table Starts-------------------------------------------}}

        <!-- column -->
            <div class="col-md-12 mt-4">
                <div class="card py-3">
                    <h1 class="text-center text-fuchsia">{{$blog->title}}</h1>
                    <div class="card-body">
                        {!! html_entity_decode($blog->detail) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>





    {{--------------------------Delete Warning Modal------------------------------}}
    <div class="modal fade" id="delete_warning_modal" tabindex="-1" role="dialog"
         aria-labelledby="delete_warning_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <form action="" method="POST" id="delete_warning_form">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" id="blog_id_d" value="">
                        <div class="text-center my-3">
                            <img src="{{asset('assets/img/null/warning.png')}}" alt=""
                                 style="height: 100px; width: 100px">
                        </div>
                        <div class="text-center display-5 font-weight-bold">
                            Are You Sure ?
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra_js')

@endsection
