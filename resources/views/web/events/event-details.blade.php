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
                        <h2>Universities admission conference 2021</h2>

                        <ul class="date-time">
                            <li>
                                <i class="ri-calendar-2-line"></i>
                                01, May 2021
                            </li>
                            <li>
                                <i class="ri-time-line"></i>
                                Friday 3:00PM - 5:00PM
                            </li>
                            <li>
                                <i class="ri-map-pin-2-line"></i>
                                London, UK
                            </li>
                        </ul>

                        <div class="gap-20"></div>

                        <img src="{{asset('assets/img/event-details-img.jpg')}}" alt="Image">

                        <div class="gap-20"></div>

                        <h3>Event Description</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has svived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus commodo viverra maec enas ccumsan lacus vel facilisis.Curabitur aliquet quam id dui posuere blandit.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accu msan id imperdiet et, porttitor at sem.</p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="event-sidebar ml-15">
                        <div class="event-single-sidebar">
                            <h3>Events description - 2021</h3>

                            <ul>
                                <li>
                                    Start
                                    <span>1st May 2021</span>
                                </li>
                                <li>
                                    End
                                    <span>1st May 2021</span>
                                </li>
                                <li>
                                    Event Category
                                    <span>Conference</span>
                                </li>
                                <li>
                                    Location
                                    <span>London</span>
                                </li>
                                <li>
                                    Total slot
                                    <span>100</span>
                                </li>
                                <li>
                                    Booked Slot
                                    <span>0</span>
                                </li>
                                <li>
                                    Website
                                    <a href="index.html">www.unco.com</a>
                                </li>
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
