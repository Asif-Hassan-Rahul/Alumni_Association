@extends('layouts.dashboard_layout')

@section('custom_style')
    <style type="text/css">
        body {
            margin-top: 20px;
            color: #1a202c;
            /* text-align: left; */
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid px-lg-4">
        <div class="col-md-12 mt-lg-4 mt-4">
            <!-- Page Heading -->
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h2 mb-0 text-gray-800 text-info font-weight-bold">Alumni Profile</h1>
                            @can('alumni-can')
                                <a href="{{route('manage_alumni.edit', $alumni_data->id)}}" class="d-none d-sm-inline-block btn-sm btn-warning shadow-sm"><i class="fas fa-edit"></i>
                                    Edit Information
                                </a>
                            @endcan
                        </div>
                    </div>
                    <!-- title -->
                </div>
            </div>
        </div>

        <div class="main-body">

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{$user_data->photo_url != null ? url('storage/'.$user_data->photo_url) : asset('/assets/img/null/avatar.jpg')}}" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{$alumni_data->name}}</h4>
                                    <h4>BUET ID: {{$alumni_data->buet_id}}</h4>
                                    <h4 class="text-secondary mb-2"><span class="badge bg-success">BUET Alumni</span></h4>
                                    <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-outline-primary">Message</button> -->
                                    <!-- <a class="btn btn-outline-primary" href="mailto:your@email.com">Message</a> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fas fa-phone pr-2"></i>Phone Primary</h6>
                                <span class="text-secondary">{{$user_data->phone}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fas fa-phone pr-2"></i>Phone Secondary</h6>
                                <span class="text-secondary">{{$alumni_data->phone2}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="far fa-envelope pr-2"></i>Email</h6>
                                <span class="text-secondary">{{$user_data->email}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fas fa-user-tie pr-2"></i>Profession</h6>
                                <span class="text-secondary">
                                @php
                                    if ($alumni_data->profession_type == 'Both'){
                                        echo "Both Job & Business";
                                    }else{
                                        echo $alumni_data->profession_type;
                                    }
                                @endphp
                            </span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fas fa-user-tie pr-2"></i>Designation</h6>
                                <span class="text-secondary">{{$alumni_data->designation}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="far fa-building pr-2"></i>Company Name</h6>
                                <span class="text-secondary">{{$alumni_data->working_company_name}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fab fa-facebook-f pr-2 text-info"></i>Facebook</h6>
                                <a href="{{$alumni_data->facebook_id}}" target="_blank">Profile Link</a>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fab fa-linkedin-in pr-2 text-info"></i>LinkedIn</h6>
                                <a href="{{$alumni_data->linkedin_id}}" target="_blank">Profile Link</a>
                            </li>

                            <!-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                  <span class="text-secondary">bootdey</span>
                </li> -->

                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <!-- <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Fahad Rahman Amik
                                </div>
                            </div>
                            <hr> -->
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    <h6 class="mb-0">Start Class</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9 text-secondary">--}}
{{--                                    {{$alumni_data->start_class}}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    <h6 class="mb-0">End Class</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9 text-secondary">--}}
{{--                                    {{$alumni_data->end_class}}--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Batch</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$alumni_data->batch}}
                                </div>
                            </div>
                            <hr>
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    <h6 class="mb-0">SSC Passing Year</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9 text-secondary">--}}
{{--                                    {{$alumni_data->ssc_passing_year}}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    <h6 class="mb-0">HSC Passing Year</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9 text-secondary">--}}
{{--                                    {{$alumni_data->hsc_passing_year}}--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Personal Information</i></h6><hr>

                                    <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>Date of Birth</small>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <small>
                                                <strong>
                                                    @php
                                                        $s = $alumni_data->dob;
                                                        $date = strtotime($s);
                                                        echo date('d/M/Y', $date);
                                                    @endphp
                                                </strong>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>Gender</small>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <small> <strong>{{$alumni_data->gender}}</strong> </small>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>Blood Group</small>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <small> <strong>{{$alumni_data->blood_group}}</strong> </small>
                                        </div>
                                    </div>


                                    <!-- <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>Profession</small>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <small>Software Engineer</small>
                                        </div>
                                    </div> -->

                                    <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>Area</small>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <small>{{$alumni_data->area}}</small>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>City</small>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <small>{{$alumni_data->city}}</small>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>Country</small>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <small>{{$alumni_data->country}}</small>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>Parmanent Address</small>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <small>{{$alumni_data->permanent_address}}</small>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>Reference</small>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <small>{{$alumni_data->batch_mate_reference}}</small>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Marital Information</i></h6><hr>
                                    <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>Marital status</small>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <small>{{$alumni_data->marital_status}}</small>
                                        </div>
                                    </div>


                                    <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>Spouse Name</small>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <small>
                                                @if($alumni_data->spouse_name == null)
                                                    N/A
                                                @else
                                                    {{$alumni_data->spouse_name}}
                                                @endif
                                            </small>
                                        </div>
                                    </div>


                                    <div class="row pb-3">
                                        <div class="col-sm-3">
                                            <small>Number of Child</small>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <small>
                                                {{$alumni_data->number_of_child}}
                                            </small>
                                        </div>
                                    </div>

                                    <div class="row pb-3">
                                        <div class="col-sm-6">
                                            <small>Profession & Professional Address</small>
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <small>
                                                @if($alumni_data->professional_address)
                                                    {{$alumni_data->spouse_professional_address}}
                                                @else
                                                    N/A
                                                @endif
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('extra_js')
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

    {{--<script>--}}
    {{--    $(window).on('load', function () {--}}
    {{--        var date = "{{(new DateTime($alumni_data->dob))->format("Y-m-d")}}";--}}
    {{--        document.getElementById("dob").innerHTML = date;--}}
    {{--        // console.log(date);--}}
    {{--    });--}}
    {{--</script>--}}


    <script src="{{asset('js/dashboard/dashboard-1.js')}}"></script>
@endsection
