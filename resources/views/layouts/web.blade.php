<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/unco/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Feb 2022 16:10:58 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- Remixicon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <!-- Odometer Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!-- Date Picker Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/date-picker.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <!-- Title -->
    <title>BUET ENTREPRENEURS NETWORK</title>

{{--    Custom CSS field--}}
    @yield('custom_css')
</head>

<body>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="pl-flip-1 pl-flip-2"></div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Header Area -->
@include('include.web.header')
<!-- End Header Area -->

@yield('content')

<!-- Start Footer Area -->
@include('include.web.footer')
<!-- End Footer Area -->



<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->

<!-- Jquery Min JS -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Meanmenu Min JS -->
<script src="{{asset('assets/js/meanmenu.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Wow Min JS -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Appear Min JS -->
<script src="{{asset('assets/js/appear.min.js')}}"></script>
<!-- Odometer Min JS -->
<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<!-- Jarallax Min JS -->
<script src="{{asset('assets/js/jarallax.min.js')}}"></script>
<!-- Bootstrap Datepicker Min JS -->
<script src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Magnific Popup Min JS -->
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{asset('assets/js/ajaxchimp.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');
    });
</script>

{{--Custom JS field--}}
@yield('custom_js')
</body>

<!-- Mirrored from templates.envytheme.com/unco/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Feb 2022 16:11:17 GMT -->
</html>
