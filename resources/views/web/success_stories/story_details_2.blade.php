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
                            <img src="{{asset('assets\img\success-stories\shahed hasan.jpg')}}" alt="Image">
                        </div>

                        <div class="blog-top-content">
                            <div class="blog-content">


                                <h3>Shahed Hassan Bappu (ME 94)</h3>
                                <p>Managing Director of <a class="text-danger" target="_blank" href="https://artisan-craft.com">ARTiSAN CRAFT (BD) LTD</a>, which is the first
                                    <a class="text-danger" target="_blank" href="https://en.wikipedia.org/wiki/Cooling_tower">Cooling Tower</a> manufacturer of Bangladesh. Small to very big cooling towers are in their production line. Different types of Ventilation Fan and Chillers are also in their production line. They maintain composite materials section, thermoforming section, casting, Metal Fabrication and machine shop for their production line. More than 1000 industries small to big has been served for their cooling purpose.</p>
                                <p>Mr. Shahed, started his Career as a Product Support Sales Engineer at GETCO (now Bangla CAT) and joined in BOC Bangladesh Ltd (now Linde Bangladesh) as a Customer Relation Officer. After doing 4 years career in MNCs, he started his own business based on mechanical manufacturing. Started manufacturing from own garage, now the company is leading in process cooling field of Bangladesh. The company is top rated in SME foundation. Artisan is now handling 40% market share of process water cooling sector.</p>

                                <p>The main theme of the company to develop import substitute product, means value added product, based on indigenous R&amp;D. The company has a bench mark in establishing academia- industry relationship.</p>

                                <p>As a successful entrepreneur his interests now evolve to social businesses. He is now working to establish Amra Anibo Ranga Provat (AARP) a non-profit foundation that aims to establish business involving community people. BORGA is the outcome venture of AARP, which is working on mechanization of paddy production by &quot;Mechanical Yard&quot; concept. His other notable initiatives are FORDO (e-commerce platform for perishable item distribution) and Golden Umbrella (caregiving services).</p>

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
