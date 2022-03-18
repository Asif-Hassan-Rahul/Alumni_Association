@extends('layouts.dashboard_layout')
@section('custom_style')
    <link href="{{asset('/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <style type="text/css">
        tr td:last-child {
            width: 13%;
            white-space: nowrap;
            text-align:center;
        }
        th {text-align:center}

        #album_card{
            background-color: #F4F6F9!important;
            border: none;
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

        img {
            vertical-align: middle;
            border-style: none;
            width: 347px;
            height: 223px;
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
                                <h1 class="h2 mb-0 text-gray-800 text-info font-weight-bold">{{$album->album_name}}</h1>
                                {{--                                <a href="#" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm"><i class="fa fa-user-secret"></i>--}}
                                {{--                                    Create New Role--}}
                                {{--                                </a>--}}
                                <a href="{{route('gallery_upload',['id'=>$album->id])}}"><button type="button" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm" data-toggle="modal"><i class="fa fa-user-secret"></i> Upload Photos</button></a>
                            </div>
                        </div>
                        <!-- title -->
                    </div>
                </div>
            </div>
        {{----------------------------------Table Starts-------------------------------------------}}

        <!-- column -->

            @foreach($images as $image)
                <div class="col-sm-3 mt-4 text-center">
                    <div class="card py-3" id="album_card">
                        <div class="card-body" >
                            <img src="{{url('storage/'.$image->image_url)}}" alt="sdsd">
                        </div>
                        <div class="card-text">
                            <a  data-toggle="modal" data-target="#delete_photo_modal" data-photo_id="{{$image->id}}" data-album_id="{{$album->id}}" class="btn btn-sm btn-danger btn-rounded text-white mr-1" href="#">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center">
            {{$images->links("pagination::bootstrap-4")}}
        </div>
    </div>


    <!------------------------------------ Delete Modal Starts ------------------------------->
    <div class="modal fade" id="delete_photo_modal" tabindex="-1" role="dialog" aria-labelledby="edit_album_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLongTitle">Are you sure you want to delete?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="delete_modal">
                    <form method="post" action="{{route('delete_photo')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="photo_id" name="photo_id" required>
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
        $('#delete_photo_modal').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var photo_id = button.data('photo_id')
            var album_id = button.data('album_id')
            var modal = $(this)
            modal.find('.modal-body #photo_id').val(photo_id) //#video_id_e modal id
            modal.find('.modal-body #album_id').val(album_id) //#video_id_e modal id
        })
    </script>
@endsection
