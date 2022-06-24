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
                            <img src="{{asset('assets\img\success-stories\Md. Shamsul Alam.jpeg')}}" alt="Image">
                        </div>

                        <div class="blog-top-content">
                            <div class="blog-content">


                                <h3>Md. Shamsul Alam (NAME 95)</h3>
                                <p>Md. Shamsul Alam is a successful entrepreneur who has significant contribution in the
                                    marine sector of Bangladesh. Md. Alam completed his B.Sc. Eng. degree in Naval
                                    architecture and Marine Engineering from the Bangladesh University of Engineering
                                    and Technology (BUET) in 2002. He started his business in Fishery sector after his
                                    graduation and set up fish processing industry. In 2007 He established a design and
                                    consultancy company marine house ltd. This is now country’s leading and biggest
                                    design company in marine sector of Bangladesh. He is also
                                    partner/director/proprietor of following company.</p>
                                <ul>
                                    <li>Marine house shipbuilding</li>
                                    <li>Marinehouse Dredging and engineering ltd.(MDEL)</li>
                                    <li>Shah river dredging Ltd.(SRDL)</li>
                                    <li>Tiger tours ltd.</li>
                                    <li>Tiger Eco tourism</li>
                                </ul>

                                <p>Md. Shamul Islam is the current General Secretary of the Ship design firm association
                                    of Bangladesh. He was also General Secretary of Association Naval architect and
                                    Marine engineers, Bangladesh for 6 years. His office address is 16th floor, City
                                    heart building, naya palton, Dhaka.</p>


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
