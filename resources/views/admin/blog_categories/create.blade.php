@extends('layouts.dashboard_layout')
@section('custom_style')
    @include('include.data_table.data_table_css')
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
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
                                    Create New Blog Category
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
                    <form action="{{route('blog_categories.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Category Title <span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Category Title" required>
                            </div>

                            <div class="form-group">
                                <label for="detail">Category Detail</label>
                                <textarea id="detail" name="detail" class="form-control" rows="3" placeholder="Enter Category Details"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Category Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="full_image">Choose image ...... </label>
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
    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
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
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
