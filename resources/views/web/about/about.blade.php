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
                            BUET is the most renowned Engineering University in Bangladesh. Graduates from this university perform their jobs in different reputed organizations in home and abroad. They also have plausible reputations in higher study and research in reputed universities throughout the world.
                            <br>

                            This is essential to mention that, graduates from this institution continue their higher study and career in different faculties rather than their undergrad subjects. This is not a rare case nowadays. Therefore, many buet graduates are found continuing their career in Human Resource, Finance, Administration of different multinational organizations with great dignity, confidence and success.

                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-xl-12 mt-3">
                    <p style="text-align: justify">
                        <h3 class="fw-bold">Why does this matter?</h3>
                        From previous discussion, it is unambiguous that BUET graduates have tremendous potential and they are object oriented. Whatever the topic they deal with, they can perform very well. However, it is a fact that, number of BUET graduates in entrepreneurship is not satisfactory compared to their potential. So, nurturing and guidance is essential to flourish their latency.
                        <br>

                        <h3 class="fw-bold mt-1">Where is the correlation with this group?</h3>
                        Members of this group will be assisted in diverse ways. A proverb goes that diamond cuts diamond. A BUET graduate will understand the exact requirement of another in the best way. They know the mentality of a BUETian.
                        <br>

                        Firstly, many BUET graduates have good technical knowledge of some specific field. He will share his knowledge with the potential person.
                        Secondly, many might have assets from ancestors, from jobs or in any other ways. They may have the intention to invest but have no proper guidance and knowledge. So, they can easily seek assistance from this group members from different tracks.
                        Thirdly, the incumbent may understand the sources of grants, investments from this group.
                        Fourth, anybody may want a partnership with similar-minded people and this group will be a good option for him to find an exact match.There are endless ways to assist each other through this network.
                    </p>
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
                            Connecting BUETian Entrepreneurs for better collaboration to produce greater positive impact.

                            Mission of this group is to create more entrepreneurs from BUET graduates. They will add value to the national economy.
                            This will be a common guiding and supporting platform for BUET graduates. They will have the option for switching business in diversified sectors.

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

                            This group is a convenient platform for cooperation between entrepreneurs  having different interests. This group shall be an all in all supporting center for a newcomer in business by eliminating all types of shortcomings faced by him.

                            To achieve this, BUET graduates are able to get technical support, share knowledge, seek grants and investment, understand market Opportunities, help others and anything else according to contemporary demand and availability.

                            There will not be any bindings in doing business.

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
                        <p>Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie lacinia eget consectetur posuere blandit.</p>

{{--                        <a href="campus-experience.html" class="default-btn">--}}
{{--                            Find out more--}}
{{--                            <i class="ri-arrow-right-line"></i>--}}
{{--                        </a>--}}
                    </div>

                    <div class="single-campus-experience">
{{--                        <span>Admission information</span>--}}

                        <h3>Working Group</h3>
                        <p>Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie lacinia eget consectetur posuere blandit.</p>

{{--                        <a href="campus-experience.html" class="default-btn">--}}
{{--                            Find out more--}}
{{--                            <i class="ri-arrow-right-line"></i>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Campus Experience Area -->
@endsection

@section('custom_js')

@endsection
