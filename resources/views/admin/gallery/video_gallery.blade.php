@extends('layouts.dashboard_layout')
@section('custom_style')
    <link href="{{asset('/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <style>
        tr td:last-child {
            width: 13%;
            white-space: nowrap;
            text-align:center;
        }
        th {text-align:center}
        .card-title{
            align-items: center;
            justify-content: center;
        }
        #album_card{
            background-color: #17a2b8!important

        }
        h3{
            color: white;
        }
        .card-text p{
            color: white;
        }
        #delete_modal {
            position: relative;
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem;
            margin: auto;
        }
        .card-footer {
            padding: .75rem 1.25rem;
            background-color: white;
            border-top: 0 solid rgba(0,0,0,.125);
        }

        .videoWrapper {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 */
            padding-top: 25px;
            height: 0;
        }

        .videoWrapper iframe {
            position: absolute;
            top: -36px;
            left: -19px;
            width: 111%;
            height: 100%;
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
                                <h1 class="h2 mb-0 text-gray-800 text-info font-weight-bold">Video Gallery Managements</h1>
                                {{--                                <a href="#" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm"><i class="fa fa-user-secret"></i>--}}
                                {{--                                    Create New Role--}}
                                {{--                                </a>--}}
                                <button type="button" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#create_video_modal"><i class="fa fa-user-secret"></i> Create New Video</button>
                            </div>
                        </div>
                        <!-- title -->
                    </div>
                </div>
            </div>
        {{----------------------------------Table Starts-------------------------------------------}}

        <!-- column -->

{{--            <div class="col-md-12 mt-4">--}}
{{--                <div class="card py-3">--}}
{{--                    <div class="row">--}}
{{--                        @foreach($videos as $video)--}}
{{--                            <div class="card text-center" style="width: 18rem;">--}}
{{--                                --}}{{--                        <img class="card-img-top" src="..." alt="Card image cap">--}}
{{--                                <iframe src="{{$video->video_link}}" title="description"></iframe>--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title">{{$video->video_title}}</h5>--}}
{{--                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            @foreach($videos as $video)

                <?php
                $video_url = $video->video_link;
                $converted_url = str_replace("watch?v=","embed/", $video_url);
                ?>

                <div class="col-sm-3 mt-4 text-center">
                    <div class="card py-3" id="album_card">
                        <div class="card-body" >
                            <div class="videoWrapper">
                                <iframe class="embed-responsive-item" src="{{$converted_url}}" title="description" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
                            </div>
                            <h3>Title: <strong>{{$video->video_title}}</strong></h3>
                            <div class="card-text">
                                <p><strong>
                                        Published Date: {{(new DateTime($video->created_at))->format("d / M / Y")}}
                                    </strong>
                                </p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-sm btn-warning btn-rounded text-white mr-1" data-toggle="modal" data-target="#edit_video_modal" data-video_id="{{$video->id}}" data-video_title="{{$video->video_title}}" data-video_link="{{$video->video_link}}" data-published_at="{{(new DateTime($video->published_at))->format("Y-m-d")}}">Edit</button>
                                <a  data-toggle="modal" data-target="#delete_video_modal" data-video_id="{{$video->id}}" class="btn btn-sm btn-danger btn-rounded text-white mr-1" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center">
            {{$videos->links("pagination::bootstrap-4")}}
        </div>
    </div>


    <!------------------------------------ Create Modal Starts ------------------------------->
    <div class="modal fade" id="create_video_modal" tabindex="-1" role="dialog" aria-labelledby="create_video_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLongTitle">Add a new Album</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('create_video_link')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="video_title">Video Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="video_title" name="video_title" required>
                        </div>

                        <div class="form-group">
                            <label for="video_link">Video Link<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="video_link" name="video_link" required>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="published_at">Publish Date<span class="text-danger">*</span></label>--}}
{{--                            <input type="date" class="form-control" id="published_at" name="published_at" required>--}}
{{--                        </div>--}}


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------------ Edit Modal Starts ------------------------------->
    <div class="modal fade" id="edit_video_modal" tabindex="-1" role="dialog" aria-labelledby="create_video_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLongTitle">Edit a video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('edit_video_link')}}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" class="form-control" id="video_id" name="video_id" required>

                        <div class="form-group">
                            <label for="video_title">Album Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="video_title" name="video_title" required>
                        </div>

                        <div class="form-group">
                            <label for="video_link">Video Link<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="video_link" name="video_link" required>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="published_at">Publish Date<span class="text-danger">*</span></label>--}}
{{--                            <input type="date" class="form-control" id="published_at" name="published_at" required>--}}
{{--                        </div>--}}


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------------ Delete Modal Starts ------------------------------->
    <div class="modal fade" id="delete_video_modal" tabindex="-1" role="dialog" aria-labelledby="edit_album_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLongTitle">Are you sure you want to delete?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="delete_modal">
                    <form method="post" action="{{route('delete_video_link')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="video_id" name="video_id" required>
                        <div class="form-group" >
                            <img src="{{ asset('assets/img/warning.png') }}"  width="200" height="200">
                        </div>
                        <div class="form-group">
                            <p>Are you Sure you want to delete?</p>
                            <p> This process cannot be undone.</p>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra_js')
    <script src="{{asset('/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>

    <script>
        $('#edit_video_modal').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var video_id = button.data('video_id')
            var video_title = button.data('video_title')
            var video_link = button.data('video_link')
            var published_at = button.data('published_at')
            var modal = $(this)
            modal.find('.modal-body #video_id').val(video_id)
            modal.find('.modal-body #video_title').val(video_title)
            modal.find('.modal-body #video_link').val(video_link)
            modal.find('.modal-body #published_at').val(published_at)
        })
    </script>

    <script>
        $('#delete_video_modal').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var video_id = button.data('video_id')
            var modal = $(this)
            modal.find('.modal-body #video_id').val(video_id)
        })
    </script>
@endsection
