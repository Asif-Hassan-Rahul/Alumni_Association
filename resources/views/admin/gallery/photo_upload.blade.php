@extends('layouts.dashboard_layout')
@section('custom_style')
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
            /*background-color: lightgrey!important*/

        }
        h3{
            color: white;
        }
        .card-text p{
            color: white;
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

        @media (min-width: 30em) {
            .filepond--item {
                width: calc(50% - 0.5em);
            }
        }

        @media (min-width: 50em) {
            .filepond--item {
                width: calc(33.33% - 0.5em);
            }
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
{{--                                <a href="{{route('gallery_upload',['id'=>$album->id])}}"><button type="button" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm" data-toggle="modal"><i class="fa fa-user-secret"></i> Upload Photos</button></a>--}}
                            </div>
                        </div>
                        <!-- title -->
                    </div>
                </div>
            </div>
        {{----------------------------------Table Starts-------------------------------------------}}

        <!-- column -->


            <div class="col-md-12 mt-4 text-center">
                <div class="card py-3" id="album_card">
                    <form method="post" action="{{route('photo_upload')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="album_id" name="album_id" value="{{$album->id}}" required>
                        <input type="hidden" class="form-control" id="album_name" name="album_name" value="{{$album->album_name}}" required>
                        <input type="file" id="filepond" name="file[]">

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!------------------------------------ Create Modal Starts ------------------------------->

@endsection

@section('extra_js')

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
            allowMultiple: 'true',
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
