@extends('layouts.web')

@section('custom_css')

@endsection

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>Story details</h2>

                <ul>
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li class="active">Story details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content mr-15">
                        <div class="blog-details-img d-flex justify-content-center">
                            <img src="{{asset('assets\img\success-stories\Serajul_Mawla.jpeg')}}" alt="Image">
                        </div>

                        <div class="blog-top-content">
                            <div class="blog-content">


                                <h3>Md. Serajul Islam Mawla (ME 95)</h3>
                                <p>Md. Serajul Islam Mawla is a successful entrepreneur who has established a significant footprint
                                    in the energy sector of Bangladesh. Md. Serajul completed his B.Sc. Eng. degree in Mechanical
                                    Engineering from the Bangladesh University of Engineering and Technology (BUET) in 2002.
                                    He started his business in CNG sector and then focused on setting up LPG gas stations for
                                    clients. He has set up more than 400 LPG Gas stations for his clients in different parts of
                                    Bangladesh. He also owns more than 40 LPG stations all over Bangladesh. Currently he is
                                    working on establishing tank manufacturing plant at BSCIC, Barishal.</p>

                                <p>Md. Serajul Islam is the current Founding President of the LPG Autogas Owners’ Association.
                                    This is the largest LPG Autogas Owners’ Association in Bangladesh where more than 600
                                    active members are participating. As the president his aim is to bring more innovation and
                                    opportunities for the wellbeing of association members.</p>

                                <p>His own office address is 2/2 Pallabi. Now he is expanding his businesses in different sectors.
                                    Currently he is working on Ago based projects. Already he has established four companies to
                                    pursue different business goals. The companies are:</p>

                                <ul>
                                    <li>SME Service Ltd.</li>
                                    <li>Saad Motors Ltd.</li>
                                    <li>SMT Energy Ltd.</li>
                                    <li>SMT Green Agro Ltd.</li>
                                </ul>

                                <p>
                                    Md. Serajul hopes to build a better future in the field of Energy by producing electric vehicles
                                    (three-wheelers), setting up charging stations and relevant other industries.
                                </p>

                                <div class="gap-mb-20"></div>
                            </div>
                        </div>

                    </div>
                </div>

                @include('web.success_stories.latest_stories')
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->

@endsection


@section('custom_js')
@endsection
