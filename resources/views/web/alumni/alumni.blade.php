@extends('layouts.web')

@section('custom_css')

    <style>

        /*########## PAGINATION ##########*/

        .page-item{
            margin: 0px 5px;
        }
        .page-item .page-link{
            /*border-radius: 20px;*/
            z-index: 3;
            color: #878787;
            background-color: transparent;
            border-color: #878787;
        }
        .page-item.active .page-link{
            /*border-radius: 20px;*/
            z-index: 3;
            color: #878787;
            background-color: transparent;
            border-color: #878787;
        }
    </style>

@endsection

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-3">
        <div class="container">
            <div class="page-title-content">
                <h2>Our Alumnis</h2>

                <ul>
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li class="active">Our Alumnis</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Team Area -->
    <section class="team-area-three ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Our Alumnis</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

            </div>
            <div class="input-group mb-3">
                <div class="form-outline">
                    <input name="search" placeholder="Search"  type="search" id="search" class="form-control" />
{{--                    <label class="form-label" for="form1">Search</label>--}}
                </div>
            </div>

            <div class="row" id="alumni_data">
                @include('web.alumni.alumni-data')


{{--                <div >--}}
{{--                    <p id="tbody"></p>--}}
{{--                </div>--}}



{{--                <div class="col-12">--}}
{{--                    <div class="pagination-area">--}}
{{--                        <span class="page-numbers current" aria-current="page">1</span>--}}
{{--                        <a href="#" class="page-numbers">2</a>--}}
{{--                        <a href="#" class="page-numbers">3</a>--}}

{{--                        <a href="#" class="next page-numbers">--}}
{{--                            <i class="ri-arrow-right-line"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="d-flex justify-content-center">
                {{$alumni_data->links()}}
            </div>
        </div>
    </section>
    <!-- End Team Area -->
@endsection

@section('custom_js')

{{--    <script>--}}
{{--        $(document).on('submit', 'form#search', function (e) {--}}

{{--            var search = $(this).find('input[name=search]').val();--}}

{{--            $.ajax({--}}
{{--                type: 'GET',--}}
{{--                dataType: 'html',--}}
{{--                url: '/search',--}}
{{--                data: {--}}
{{--                    search: search--}}
{{--                },--}}
{{--                success: function (data) {--}}
{{--                    // Do some nice animation to show results--}}
{{--                    $('#searchdata').html(data);--}}
{{--                }--}}
{{--            });--}}

{{--            e.preventDefault();--}}
{{--        });--}}
{{--    </script>--}}

<script>
    $(document).ready(function(){

        fetch_customer_data();

        function fetch_customer_data(query = '')
        {
            $.ajax({
                url:"{{ route('live_search.action') }}",
                method:'GET',
                data:{query:query},
                // dataType:'json',
                success:function(data)
                {
                    if (data != ''){
                        $('#alumni_data').html(data);
                    }
                    // var response = JSON.parse(data.table_data);
                    console.log( data);

                    // $('#total_records').text(data.total_data);
                }
            })
        }

        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            console.log(query);
            fetch_customer_data(query);
        });
    });
</script>
@endsection
