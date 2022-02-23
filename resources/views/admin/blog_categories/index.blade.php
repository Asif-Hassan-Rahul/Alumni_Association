@extends('layouts.dashboard_layout')
@section('custom_style')
    @include('include.data_table.data_table_css')


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
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h2 mb-0 text-gray-800 text-info font-weight-bold">Blog Categories</h1>
                                <a href="{{route('blog_categories.create')}}"
                                   class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm"><i
                                        class="fa fa-list"></i>
                                    Create New Category
                                </a>
                            </div>
                        </div>
                        <!-- title -->
                    </div>
                </div>
            </div>
        {{----------------------------------Table Starts-------------------------------------------}}

        <!-- column -->
            <div class="col-md-12 mt-4">
                <div class="card py-3">
                    <div class="card-body">
                        <table id="data_table_1" class="table table-bordered table-striped">
                            {{--                        <table class="table table-striped zero-configuration">--}}
                            <thead>
                            <tr class="text-white font-weight-bold"
                                style="background: linear-gradient(to right, #ec2F4B, #009FFF);">
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Thumbnail</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($blog_categories as $blog_category)
                                <tr>
                                    <td>{{ $loop -> index + 1}}</td>
                                    <td>{{ $blog_category->title }}</td>
                                    <td>{{ $blog_category->detail }}</td>
                                    <td>
                                        @if($blog_category->image)
                                            <img class="thumb-image" src="{{asset('storage/'.$blog_category->image)}}" alt=""
                                                 style="">
                                        @else
                                            <img class="thumb-image"
                                                 src="{{asset('assets/img/null/blog_thumbnail.jpg')}}" alt="" style="">
                                        @endif
                                    </td>
                                    <td class="d-flex flex-row text-center align-middle">
                                        {{--                                        <a class="btn btn-sm btn-success mx-1"--}}
                                        {{--                                           href="{{ route('blogs.show',$blog->id) }}" data-toggle="tooltip"--}}
                                        {{--                                           data-placement="top" title="View"><i class="fa fa-eye"></i>--}}
                                        {{--                                        </a>--}}
                                        <a class="btn btn-sm btn-warning mx-1"
                                           href="{{ route('blog_categories.edit',$blog_category->id) }}" data-toggle="tooltip"
                                           data-placement="top" title="Edit"><i class="fa fa-edit"></i>
                                        </a>
                                        <span data-toggle="tooltip" data-placement="top" title="Delete">
                                            <button
                                                class="btn btn-sm btn-danger  mx-1" type="button" data-toggle="modal"
                                                data-target="#delete_warning_modal" data-blog_category_id="{{$blog_category->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
                        <input type="hidden" name="id" id="blog_category_id_d" value="">
                        <div class="text-center my-3">
                            <img src="{{asset('assets/img/null/warning.png')}}" alt="" style="height: 100px; width: 100px">
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

    {{--------------Delete User Script----------------}}
    <script>
        $('#delete_warning_modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var blog_category_id = button.data('blog_category_id')
            console.log(blog_category_id);
            var modal = $(this)
            $('#delete_warning_form').attr('action', '/blog_categories/' + blog_category_id);
        })
    </script>


    <script>
        $(function () {
            $("#data_table_1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#data_table_1_wrapper .col-md-6:eq(0)');
        });
    </script>

    @include('include.data_table.data_table_js')

@endsection



<!-- DataTables  & Plugins -->
@section('data_table_js')
@endsection
