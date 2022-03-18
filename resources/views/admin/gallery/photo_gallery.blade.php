@extends('layouts.dashboard_layout')
@section('custom_style')
    <link href="{{asset('/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('/filepond/css/filepond.css')}}" rel="stylesheet">
    <link href="{{asset('/filepond/css/image-preview.css')}}" rel="stylesheet">
    <style>
        tr td:last-child {
            width: 13%;
            white-space: nowrap;
            text-align:center;
        }
        th {text-align:center}

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

        .img-fluid {
            /*width: 111.5%;*/
            height: 200px;
            margin-bottom: 26px;
            /*margin-left: -20px;*/
            /*margin-top: -36px;*/
        }

        /* the background color of the filepond drop area */
        .filepond--panel-root {
            background-color: #17a2b8!important
        }

        /* underline color for "Browse" button */
        .filepond--label-action {
            text-decoration-color: #ffffff!important;
        }

        /* the text color of the drop label*/
        .filepond--drop-label {
            color: #ffffff!important;
        }

        /* use a hand cursor intead of arrow for the action buttons */
        .filepond--file-action-button {
            cursor: pointer;
        }
        .filepond--item-panel {
            border-radius: 0.5em;

        }
        .filepond--item {
            width: calc(50% - 0.5em);
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
                                <h1 class="h2 mb-0 text-gray-800 text-info font-weight-bold">Photo Gallery Managements</h1>
{{--                                <a href="#" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm"><i class="fa fa-user-secret"></i>--}}
{{--                                    Create New Role--}}
{{--                                </a>--}}
                                <button type="button" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#create_album_modal"><i class="fa fa-user-secret"></i> Create New Album</button>
                            </div>
                        </div>
                        <!-- title -->
                    </div>
                </div>
            </div>
        {{----------------------------------Table Starts-------------------------------------------}}

        <!-- column -->

            @foreach($albums as $album)
            <div class="col-sm-3 mt-4 text-center">
                <div class="card py-3" id="album_card">
                    <div class="card-body" >
                        @foreach($album_thumbnails as $album_thumbnail)
                            @if($album_thumbnail->imageable_id == $album->id)
                                <img src="{{url('storage/'.$album_thumbnail->image_url)}}" class="img-fluid" alt="Album thumbnail">
                            @endif
                        @endforeach
                        <a href="{{route('gallery_show',['id'=>$album->id])}}"><h3>Album Name: {{$album->album_name}}</h3></a>
                        <div class="card-text">
                            <p>
                                <strong>
                                Published Date: {{(new DateTime($album->created_at))->format("d / M / Y")}}
                                </strong>
                            </p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-sm btn-warning btn-rounded text-white mr-1" data-toggle="modal" data-target="#edit_album_modal" data-album_id="{{$album->id}}" data-album_name="{{$album->album_name}}" data-published_at="{{(new DateTime($album->published_at))->format("Y-m-d")}}">Edit</button>
                            <a  data-toggle="modal" data-target="#delete_album_modal" data-album_id="{{$album->id}}" class="btn btn-sm btn-danger btn-rounded text-white mr-1" href="#">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{$albums->links("pagination::bootstrap-4")}}
        </div>
    </div>


    <!------------------------------------ Create Modal Starts ------------------------------->
    <div class="modal fade" id="create_album_modal" tabindex="-1" role="dialog" aria-labelledby="create_album_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLongTitle">Add a new Album</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('create_photo_album')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="album_name">Album Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="album_name" name="album_name" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Thumbnail<span class="text-danger">*</span></label>
                            <input type="file" id="filepond" name="file">
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
    <div class="modal fade" id="edit_album_modal" tabindex="-1" role="dialog" aria-labelledby="edit_album_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLongTitle">Add a new Album</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('edit_photo_album')}}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" class="form-control" id="album_id" name="album_id" required>

                        <div class="form-group">
                            <label for="album_name">Album Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="album_name" name="album_name" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Thumbnail<span class="text-danger">*</span></label>
                            <input type="file" id="filepond_edit" name="file">
                            <h4><span class="badge badge-warning">Do not upload if you want the thumbnail to be unchanged</span></h4>
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
    <div class="modal fade" id="delete_album_modal" tabindex="-1" role="dialog" aria-labelledby="edit_album_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLongTitle">Are you sure you want to delete?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="delete_modal">
                    <form method="post" action="{{route('delete_photo_album')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="album_id" name="album_id" required>
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
        $('#edit_album_modal').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var album_id = button.data('album_id')
            var album_name = button.data('album_name')
            var published_at = button.data('published_at')
            var modal = $(this)
            modal.find('.modal-body #album_id').val(album_id) //#video_id_e modal id
            modal.find('.modal-body #album_name').val(album_name)
            modal.find('.modal-body #published_at').val(published_at)
        })
    </script>

    <script>
        $('#delete_album_modal').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var album_id = button.data('album_id')
            var modal = $(this)
            modal.find('.modal-body #album_id').val(album_id) //#video_id_e modal id
        })
    </script>

    <script src="{{asset('/filepond/js/filepond.js')}}"></script>
    <script src="{{asset('/filepond/js/image-crop.js')}}"></script>
    <script src="{{asset('/filepond/js/image-preview.js')}}"></script>
    <script src="{{asset('/filepond/js/image-resize.js')}}"></script>
    <script src="{{asset('/filepond/js/image-transform.js')}}"></script>
    <script src="{{asset('/filepond/js/validate-size.js')}}"></script>
    <script src="{{asset('/filepond/js/validate-size.js')}}"></script>
    <script src="{{asset('/filepond/js/validate-type.js')}}"></script>

    <script>
        //initializing plugin
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginImageResize,
            FilePondPluginImageTransform,
            FilePondPluginFileValidateType,
            FilePondPluginFileValidateSize,
        );


        const inputElement = document.querySelector('input[id="filepond"]');
        const pond = FilePond.create(inputElement, {
            imageResizeTargetHeight: 800,
            // imageResizeTargetWidth: 1170,
            imageResizeMode: 'cover',
            allowMultiple: 'false',
            maxFileSize: '5MB',
            labelMaxFileSizeExceeded: 'File is too large',
            acceptedFileTypes: ['image/*'],
            credits: 'false',
            // maxFiles: 10,
            imagePreviewMaxHeight: 256,

        });

        const inputElement2 = document.querySelector('input[id="filepond_edit"]');
        const pond2 = FilePond.create(inputElement2, {
            imageResizeTargetHeight: 800,
            // imageResizeTargetWidth: 1170,
            imageResizeMode: 'cover',
            allowMultiple: 'false',
            maxFileSize: '5MB',
            labelMaxFileSizeExceeded: 'File is too large',
            acceptedFileTypes: ['image/*'],
            credits: 'false',
            // maxFiles: 10,
            imagePreviewMaxHeight: 256,

        });


        FilePond.setOptions({
            server: {
                url: '/filepond/api',
                process: '/process',
                revert: '/process',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            }
        });
    </script>
@endsection
