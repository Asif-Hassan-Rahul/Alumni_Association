@extends('layouts.dashboard_layout')
@section('custom_style')
    @include('include.data_table.data_table_css')
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <style>
        .thumb-image {
            height: 40px;
            width: 60px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid px-lg-4">
        <div class="row">


            <div class="col-md-12 mt-lg-4 mt-4">
                <!-- Page Heading -->
                <div class="card">
                    <div class="card-body">
                        <!-- title -->
                        <div class="col-md-12 mt-lg-4 mt-4">
                            <div class="d-flex justify-content-center">
                                <h3 class="font-weight-bold text-fuchsia">
                                    Create New Blog
                                </h3>
                            </div>
                        </div>
                        <!-- title -->
                    </div>
                </div>
            </div>


            <div class="col-md-12 mt-lg-4 mt-4">
                <!-- Page Heading -->
                <div class="card">
                    <form action="{{route('blogs.update', ['blog' => $blog->id])}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="blog_id" value="{{$blog->id}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Blog Title <span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}" placeholder="Enter Blog Title" required>
                            </div>

                            <div class="form-group">
                                <label for="author_name">Author Name <span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control" id="author_name" value="{{$blog->author_name}}" name="author_name" placeholder="Enter Author Name" required>
                            </div>

                            <div class="form-group">
                                <label for="category_id">Select Category <span class="text-danger font-weight-bold">*</span></label>
                                <select id="category_id" name="category_id" class="form-control" required>
                                    @forelse($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @empty
                                        <option>Please Create Category First</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <textarea id="tags" name="tags" class="form-control" rows="3" placeholder="Comma Separated. Example: Mobile, Laptop....."> {{$blog->tags}} </textarea>
                            </div>
                            <div class="form-group">
                                <label for="summernote">Blog Details <span class="text-danger font-weight-bold">*</span></label>
                                <textarea id="summernote" name="detail" required>
                                    {!! html_entity_decode($blog->detail) !!}
                                 </textarea>
                            </div>
                            <div class="form-group">
                                <label for="published_date">Published Date <span class="text-danger font-weight-bold">*</span></label>
                                <input type="date" class="form-control" id="published_date" value="{{$blog->published_date}}" name="published_date" required>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail_image">Thumbnail Image
                                    <span class="text-danger font-weight-bold">*</span>
                                    <span class="font-weight-bold text-warning"> Dont Upload anything if you want this file to be unchanged</span>
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="thumbnail_image" name="thumbnail_image">
                                        <label class="custom-file-label" for="full_image">Choose thumbnail image
                                            ...... </label>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="full_image">Blog Image
                                    <span class="font-weight-bold text-warning"> Dont Upload anything if you want this file to be unchanged</span>
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">

                                        {{$blog->full_image}}
                                        {{--                                    <input type="hidden" class="custom-file-input" value="{{$blog->full_image}}" id="full_image" name="full_image">--}}
                                        <input type="file" class="custom-file-input" id="full_image" name="full_image">
                                        <label class="custom-file-label" for="full_image">Choose full image
                                            .... </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





@endsection

@section('extra_js')

    <script>
        $(window).on('load', function() {
            document.getElementById("category_id").value = {
            {
                $blog - > id
            }
        }
        })
    </script>



    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
    <!-- bs-custom-file-input -->
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
