@extends('layouts.web')

@section('custom_css')

    <style>
        @media only screen and (min-width: 1200px)  {
            .campus-content {
                background-color: var(--main-color);
                padding: 163px 49px;
                padding-left: 26px;
                position: relative;
            }

            .campus-content2 {
                background-color: var(--main-color);
                padding: 123px 49px;
                padding-left: 26px;
                position: relative;
                margin-right: -24px;
            }

            .campus-img img{
                width: 735px;
                height: 552px;
                object-fit: cover;
            }
        }
    </style>

@endsection

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>About</h2>

                <ul>
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Stat About Area -->
    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="about-img-two mr-15">
                        <img src="{{asset('assets/img/banner/buet_auditorium.jpg')}}" alt="Image">

                        <div class="about-shape">
                            <img src="{{asset('assets/img/about-shape.png')}}" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-content ml-15">
{{--                        <span>About our Bueten</span>--}}
                        <h2>About Bueten</h2>

                        <p style="text-align: justify">
                            BUET is the most renowned Engineering University in Bangladesh. Graduates from this university are highly positioned in home and abroad. They are successful in their respective careers as engineering professionals, academic researchers, consultants, managers as well as entrepreneurs.
                            <br>

                            Entrepreneurial activity is the backbone of the economy, and leads to economic growth, creates job opportunities, and raises stability and creativity. While entrepreneurship has always been important, the ratio of BUET graduates being entrepreneurs is low in number.
                            <br>

                            An entrepreneur is a person who accepts a large risk in order to use his/her creative initiative to start a company. He / she often faces many challenges that can easily be overcome by support from fellow people. Thus we believe networking among BUETian Entrepreneurs would create a platform where entrepreneurs will get help from each other. It will also encourage other BUET graduates to establish their own companies and thus make a greater impact in the sustainable development of Bangladesh.
                            <br>


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

{{--    <!-- Start Counter Area -->--}}
{{--    <section class="counter-area bg-color-f8fafb pt-100 pb-70">--}}
{{--        <div class="container">--}}
{{--            <div class="counter-bg">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="single-counter bg-style">--}}
{{--                            <i class="flaticon-graduated"></i>--}}

{{--                            <h2>--}}
{{--                                <span class="odometer" data-count="4517">00</span>--}}
{{--                            </h2>--}}
{{--                            <h4>Students</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="single-counter bg-style">--}}
{{--                            <i class="flaticon-teacher"></i>--}}

{{--                            <div class="count-title">--}}
{{--                                <h2>--}}
{{--                                    <span class="odometer" data-count="640">00</span>--}}
{{--                                </h2>--}}
{{--                                <h4>Teachers</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="single-counter bg-style">--}}
{{--                            <i class="flaticon-book-1"></i>--}}

{{--                            <div class="count-title">--}}
{{--                                <h2>--}}
{{--                                    <span class="odometer" data-count="54">00</span>--}}
{{--                                </h2>--}}
{{--                                <h4>Subjects</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="single-counter bg-style">--}}
{{--                            <i class="flaticon-graduation-cap"></i>--}}

{{--                            <div class="count-title">--}}
{{--                                <h2>--}}
{{--                                    <span class="odometer" data-count="269">00</span>--}}
{{--                                </h2>--}}
{{--                                <h4>Degrees</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="shape counter-shape-1">--}}
{{--                    <img src="{{asset('assets/img/counter-shape-1.png')}}" alt="Image">--}}
{{--                </div>--}}
{{--                <div class="shape counter-shape-2">--}}
{{--                    <img src="{{asset('assets/img/counter-shape-2.png')}}" alt="Image">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Counter Area -->--}}

    <!-- Start Our Campus Information Area -->
    <section class="our-campus-information-area my-5">
        <div class="container" style="background-color: #92210f">
            <div class="row align-items-center">
                <div class="col-xl-7 p-0">
                    <div class="campus-img">
                        <img src="{{asset('assets/img/banner/buet_mosque.jpg')}}" alt="Image">
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="campus-content py-0 px-5">
{{--                        <span>Our campus information</span>--}}
                        <h2>Our Vision</h2>
                        <p>
                            Connecting BUETian Entrepreneurs for their success and making a greater impact for the Bangladesh economy.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Campus Information Area -->


    <!-- Start Our Campus Information Area -->
    <section class="our-campus-information-area my-5">
        <div class="container" style="background-color: #92210f">
            <div class="row align-items-center">

                <div class="col-xl-5">
                    <div class="campus-content campus-content2 py-0 px-5" style="overflow: hidden">
                        {{--                        <span>Our campus information</span>--}}
                        <h2>Our Mission</h2>
                        <p>
                            The mission is to build a platform for cooperation among BUETian entrepreneurs, promote entrepreneurial mindset among BUETians and to support startups by the BUETians.

                        </p>
                    </div>
                </div>

                <div class="col-xl-7" style="padding-left: 2.2rem; padding-right: 0">

                        <img src="{{asset('assets/img/banner/buet_auditorium_2.jpg')}}" alt="Image" style="object-fit: cover">

                </div>
            </div>
        </div>
    </section>
    <!-- End Our Campus Information Area -->



    <!-- Start Campus Experience Area -->
    <section class="campus-experience-area-style pb-100">
        <div class="container">
            <div class="campus-experience-bg ptb-100">
                <div class="campus-experience-slider owl-carousel owl-theme">
                    <div class="single-campus-experience">
{{--                        <span>Admission information</span>--}}

                        <h3>Working Group</h3>
                        <p>To materialize the goals of BUETEN a seventeen member Working Group has been formed. The group meets regularly, once in a week, to oversee the day to day activities, to take new initiatives and to execute the initiatives for their success.Those who are interested to join please email to info@bueten.org.</p>

{{--                        <a href="campus-experience.html" class="default-btn">--}}
{{--                            Find out more--}}
{{--                            <i class="ri-arrow-right-line"></i>--}}
{{--                        </a>--}}
                    </div>

{{--                    <div class="single-campus-experience">--}}
{{--                        <span>Admission information</span>--}}

{{--                        <h3>Working Group</h3>--}}
{{--                        <p>Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie lacinia eget consectetur posuere blandit.</p>--}}

{{--                        <a href="campus-experience.html" class="default-btn">--}}
{{--                            Find out more--}}
{{--                            <i class="ri-arrow-right-line"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- End Campus Experience Area -->
@endsection

@section('custom_js')

@endsection
