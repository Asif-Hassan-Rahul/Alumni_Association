@extends('layouts.web')

@section('custom_css')

    <style>
        .gradient-custom {
            /* fallback for old browsers */
            /*background: #f6d365;*/

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }

        .preloader{
            visibility: hidden;
        }

        .card{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
    </style>
@endsection

@section('content')

    <section class="my-5">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-10 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
{{--                                {{dd($alumni_data->user->photo_url)}}--}}
                                <img src="{{ $alumni_photo != null ? url('storage'.$alumni_photo):'/assets/img/null/avatar.jpg'}}" alt="Avatar" class="img-fluid my-3" style="width: 209px; border-radius: 200px"/>
                                <h5>{{$alumni_data->name}}</h5>
                                <p class="text-black">{{$alumni_data->designation}}</p>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Buet ID</h6>
                                            <p class="text-muted">{{$alumni_data->buet_id}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Batch</h6>
                                            <p class="text-muted">{{$alumni_data->batch}}</p>
                                        </div>
                                    </div>

                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Area of Interest</h6>
                                            <p class="text-muted">{{$alumni_data->area_of_interest}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Area of Expertise</h6>
                                            <p class="text-muted">{{$alumni_data->area_of_expertise}}</p>
                                        </div>
                                    </div>

                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>City</h6>
                                            <p class="text-muted">{{$alumni_data->city}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Country</h6>
                                            <p class="text-muted">{{$alumni_data->country}}</p>
                                        </div>
                                    </div>
                                    <h6>Social Links</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="d-flex justify-content-start">
                                        <a href="{{$alumni_data->facebook_id}}"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                        <a href="{{$alumni_data->linkedin_id}}"><i class="fab fa-linkedin fa-lg me-3"></i></a>
{{--                                        <a href="#"><i class="fab fa-instagram fa-lg"></i></a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')

    <!-- Jquery Min JS -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>

    <script>
        // Preloader
        $(window).on('load', function() {
            $('.preloader').addClass('preloader-deactivate');
        })
    </script>
@endsection
