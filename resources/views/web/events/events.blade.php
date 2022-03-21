@extends('layouts.web')

@section('custom_css')

@endsection

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-5">
        <div class="container">
            <div class="page-title-content">
                <h2>Events</h2>

                <ul>
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li class="active">Events</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Events Area -->
    <section class="events-area events-area-style-two ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="events-timer mr-15">
                        <div class="event-img">
                            <img src="{{asset('assets/img/event-img.jpg')}}" alt="Image">
                        </div>

                        <span>Next Event</span>

                        <div id="timer">
                            <div id="days"></div>
                            <div id="hours"></div>
                            <div id="minutes"></div>
                            <div id="seconds"></div>
                        </div>

{{--                        <a href="#" class="default-btn">--}}
{{--                            Book now--}}
{{--                            <i class="ri-arrow-right-line"></i>--}}
{{--                        </a>--}}
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="events-content ml-15">
                        <span>Events</span>
                        <h2>Upcoming events</h2>

                        <ul class="events-list">
                            <li>
                                <div class="events-date">
                                    <span class="mb-2">11 March</span>
                                    <span>2022</span>
                                </div>

                                <span>Conference</span>
                                <h3>
                                    <a href="{{route('event_details')}}">
                                        Working Group formed for BUETEN
                                    </a>
                                </h3>
                                <p id="event_details">A working group having businessmen, job holders and experts has been created.They meet Saturday in every week to co-operate the developmental activities of the group. There are several sub-groups with relevant people that have been created to expedite activities</p>

                                <a href="{{route('event_details')}}" class="read-more">
                                    Find out more
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </li>

{{--                            <li>--}}
{{--                                <div class="events-date">--}}
{{--                                    <span class="mb-2">02 May</span>--}}
{{--                                    <span>2021</span>--}}
{{--                                </div>--}}

{{--                                <span>Conference</span>--}}
{{--                                <h3>--}}
{{--                                    <a href="{{route('event_details')}}">--}}
{{--                                        History and culture open day conference 2021--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}

{{--                                <a href="{{route('event_details')}}" class="read-more">--}}
{{--                                    Find out more--}}
{{--                                    <i class="ri-arrow-right-line"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="events-date">--}}
{{--                                    <span class="mb-2">03 May</span>--}}
{{--                                    <span>2021</span>--}}
{{--                                </div>--}}

{{--                                <span>Conference</span>--}}
{{--                                <h3>--}}
{{--                                    <a href="{{route('event_details')}}">--}}
{{--                                        Undergraduate & Postgraduate Open Days 2021--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}

{{--                                <a href="{{route('event_details')}}" class="read-more">--}}
{{--                                    Find out more--}}
{{--                                    <i class="ri-arrow-right-line"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="events-date">--}}
{{--                                    <span class="mb-2">07 Jun</span>--}}
{{--                                    <span>2021</span>--}}
{{--                                </div>--}}

{{--                                <span>Conference</span>--}}
{{--                                <h3>--}}
{{--                                    <a href="{{route('event_details')}}">--}}
{{--                                        Graduation ceremonies conference 2021--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}

{{--                                <a href="{{route('event_details')}}" class="read-more">--}}
{{--                                    Find out more--}}
{{--                                    <i class="ri-arrow-right-line"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="events-date">--}}
{{--                                    <span class="mb-2">15 Jun</span>--}}
{{--                                    <span>2021</span>--}}
{{--                                </div>--}}

{{--                                <span>Conference</span>--}}
{{--                                <h3>--}}
{{--                                    <a href="{{route('event_details')}}">--}}
{{--                                        Innovation awards 2021--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}

{{--                                <a href="{{route('event_details')}}" class="read-more">--}}
{{--                                    Find out more--}}
{{--                                    <i class="ri-arrow-right-line"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <div class="events-date">--}}
{{--                                    <span class="mb-2">25 Jun</span>--}}
{{--                                    <span>2021</span>--}}
{{--                                </div>--}}

{{--                                <span>Conference</span>--}}
{{--                                <h3>--}}
{{--                                    <a href="{{route('event_details')}}">--}}
{{--                                        Marketing and communication awards 2021--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}

{{--                                <a href="{{route('event_details')}}" class="read-more">--}}
{{--                                    Find out more--}}
{{--                                    <i class="ri-arrow-right-line"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <div class="pagination-area">--}}
{{--                                <span class="page-numbers current" aria-current="page">1</span>--}}
{{--                                <a href="#" class="page-numbers">2</a>--}}
{{--                                <a href="#" class="page-numbers">3</a>--}}

{{--                                <a href="#" class="next page-numbers">--}}
{{--                                    <i class="ri-arrow-right-line"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events Area -->


    <div id="news">
        <!-- Start News Area -->
        @include('web.news.news')
    <!-- End News Area -->
    </div>
@endsection

@section('custom_js')
    <script>
        // Count Time JS
        function makeTimer() {
            var endTime = new Date("november  30, 2023 17:00:00 PDT");
            var endTime = (Date.parse(endTime)) / 1000;
            var now = new Date();
            var now = (Date.parse(now) / 1000);
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }
            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");
        }
        setInterval(function() { makeTimer(); }, 300);
    </script>

    <script>
        $(document).ready(function () {
            $('#event_details').each(function () {
                var iTotalWords = $(this).text();
                var result = iTotalWords.substr(0, 100) + "...";
                $(this).html(result); });
        })
    </script>
@endsection
