@extends('layouts.web')

@section('custom_css')

@endsection

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-20">
        <div class="container">
            <div class="page-title-content">
                <h2>Event details</h2>

                <ul>
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li class="active">Event details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Event Details Area -->
    <section class="event-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-default-content mr-15">
                        <span class="top-title">Conference</span>
                        <h2>Working Group formed for BUETEN</h2>

                        <ul class="date-time">
                            <li>
                                <i class="ri-calendar-2-line"></i>
                                11, March 2022
                            </li>
                            <li>
                                <i class="ri-time-line"></i>
                                Saturday 3:00PM - 5:00PM
                            </li>
{{--                            <li>--}}
{{--                                <i class="ri-map-pin-2-line"></i>--}}
{{--                                London, UK--}}
{{--                            </li>--}}
                        </ul>

                        <div class="gap-20"></div>

                        <img src="{{asset('assets/img/event/event-details.jpg')}}" alt="Image">

                        <div class="gap-20"></div>

{{--                        <h3>Event Description</h3>--}}
                        <p>A working group having businessmen, job holders and experts has been created.They meet Saturday in every week to co-operate the developmental activities of the group. There are several sub-groups with relevant people that have been created to expedite activities.</p>

                        <p>A “Monthly Adda” discussion session is arranged each month among the members of the entrepreneur network. Members share their opinions, ideas, problems, opportunities etc among the members. Therefore, potential members get a clear view of their intended activities.</p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="event-sidebar ml-15">
                        <div class="event-single-sidebar">
                            <h3>Events description - 2022</h3>

                            <ul>
                                <li>
                                    Start
                                    <span>11, March 2022</span>
                                </li>
                                <li>
                                    End
                                    <span>11, March 2022</span>
                                </li>
                                <li>
                                    Event Category
                                    <span>Meet and Greet</span>
                                </li>
                                <li>
                                    Location
                                    <span>Bangladesh</span>
                                </li>
{{--                                <li>--}}
{{--                                    Total slot--}}
{{--                                    <span>N/A</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    Booked Slot--}}
{{--                                    <span>N/A</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    Website--}}
{{--                                    <a href="index.html">www.unco.com</a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Event Details Area -->
@endsection

@section('custom_js')

@endsection
