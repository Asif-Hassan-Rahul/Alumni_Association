<header class="header-area">
    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="header-left-content">
{{--                        <li>--}}
{{--                            <a href="tel:+880">--}}
{{--                                <i class="ri-phone-fill"></i>--}}
{{--                                +880 1700000000--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="mailto:info@bueten.org">--}}
{{--                                <i class="fa-solid fa-envelope"></i>--}}
{{--                                info@bueten.org--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="header-right-content">
{{--                        <div class="languages-switcher">--}}
{{--                            <i class="ri-global-line"></i>--}}
{{--                            <select>--}}
{{--                                <option value="1">English</option>--}}
{{--                                <option value="2">العربيّة</option>--}}
{{--                                <option value="3">Deutsch</option>--}}
{{--                                <option value="4">Português</option>--}}
{{--                                <option value="5">简体中文</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}

{{--                        <div class="my-account">--}}
{{--                            <a href="my-account.html">--}}
{{--                                <i class="ri-user-fill"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}

                        <div class="cart-icon" style="top:unset;">
                            <a href="mailto:info.bueten@gmail.com" class="text-white">
                                <i class="fa-solid fa-envelope"></i>
                                info.bueten@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Top Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="/">
                            <img height="140" src="{{asset('assets/img/final-logo.png')}}" alt="logo">
                        </a>
                    </div>

                    <div class="others-options-for-mobile-devices">
                        <ul>
                            <li>
                                <a href="application.html" class="default-btn">
                                    Application Form
                                </a>
                            </li>
                            <li>
                                <button type="button" class="search-btn" data-bs-toggle="modal" data-bs-target="#exampleModalsrc">
                                    <i class="ri-search-line"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img  src="{{asset('assets/img/final-logo.png')}}" alt="logo" style=" width: 280px!important;">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item {{ request()->is('/') ? 'active' : ''}}" >
                                <a href="/" class="nav-link">
                                    Home
                                </a>

{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="index.html" class="nav-link active">Home one</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="index-2.html" class="nav-link">Home two</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="index-3.html" class="nav-link">Home three</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
                            </li>

                            <li class="nav-item {{ request()->is('about') ? 'active' : ''}}">
                                <a href="{{route('about')}}" class="nav-link">
                                    About
                                </a>
                            </li>

{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    Success Stories--}}
{{--                                </a>--}}
{{--                            </li>--}}

                            <li class="nav-item" {{ request()->is('blogs_front') ? 'active' : ''}}>
                                <a href="{{route('blogs_front')}}" class="nav-link">
                                    Blog
                                </a>
                            </li>

                            <li class="nav-item {{ request()->is('events') ? 'active' : ''}}">
                                <a href="{{route('events')}}" class="nav-link">
                                    News & Events
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('gallery_front')}}" class="nav-link">
                                   Gallery
                                </a>
                            </li>

                            <li class="nav-item {{ request()->is('alumni') ? 'active' : ''}}">
                                <a href="{{route('alumni')}}" class="nav-link">
                                    Members
                                </a>
                            </li>

                            <li class="nav-item {{ request()->is('contact') ? 'active' : ''}}">
                                <a href="{{route('contact')}}" class="nav-link">Contact</a>
                            </li>

                            <li id="auth">
                                @if(\Illuminate\Support\Facades\Auth::user())
                                    <a href="{{route('dashboard')}}" class="nav-link">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{route('login')}}" class="nav-link">
                                        Login
                                    </a>

                                    <a href="{{route('register')}}" class="nav-link">
                                        Register
                                    </a>
                                @endif
                            </li>


                            {{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    Courses--}}
{{--                                    <i class="ri-arrow-down-s-line"></i>--}}
{{--                                </a>--}}

{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="courses.html" class="nav-link">Courses</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="tuition-fees.html" class="nav-link">Tuition fees</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="courses-details.html" class="nav-link">Courses details</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    Pages--}}
{{--                                    <i class="ri-arrow-down-s-line"></i>--}}
{{--                                </a>--}}

{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="about.html" class="nav-link">About</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="application.html" class="nav-link">Application form</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="our-professors.html" class="nav-link">Our professors</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#" class="nav-link">--}}
{{--                                            Campus--}}
{{--                                            <i class="ri-arrow-down-s-line"></i>--}}
{{--                                        </a>--}}

{{--                                        <ul class="dropdown-menu">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="campus-information.html" class="nav-link">Campus information</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="campus-experience.html" class="nav-link">Campus experience</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="alumni.html" class="nav-link">Alumni</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="study-online.html" class="nav-link">Study online</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="admissions.html" class="nav-link">Admissions</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="faq.html" class="nav-link">FAQ</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="gallery.html" class="nav-link">Gallery</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#" class="nav-link">--}}
{{--                                            User--}}
{{--                                            <i class="ri-arrow-down-s-line"></i>--}}
{{--                                        </a>--}}

{{--                                        <ul class="dropdown-menu">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="my-account.html" class="nav-link">My account</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="log-in.html" class="nav-link">Log in</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="register.html" class="nav-link">Register</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="privacy-policy.html" class="nav-link">Privacy policy</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="terms-conditions.html" class="nav-link">Terms & conditions</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="coming-soon.html" class="nav-link">Coming soon</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="404.html" class="nav-link">404 Page</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    Events--}}
{{--                                    <i class="ri-arrow-down-s-line"></i>--}}
{{--                                </a>--}}

{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="events.html" class="nav-link">Events</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="event-details.html" class="nav-link">Event details</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    Shop--}}
{{--                                    <i class="ri-arrow-down-s-line"></i>--}}
{{--                                </a>--}}

{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="products.html" class="nav-link">Products</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="cart.html" class="nav-link">Cart</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="wishlist.html" class="nav-link">Wishlist</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="checkout.html" class="nav-link">Checkout</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="product-details.html" class="nav-link">Product details</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}



                        </ul>

                        <div class="others-options">
                            <ul>
                                <li>
                                    @if(\Illuminate\Support\Facades\Auth::user())
                                        <a href="{{route('dashboard')}}" class="default-btn">
                                            Dashboard
                                        </a>
                                    @else
                                        <a href="{{route('login')}}" class="default-btn">
                                            Login
                                        </a>

                                        <a href="{{route('register')}}" class="default-btn">
                                            Register
                                        </a>
                                    @endif
                                </li>
{{--                                <li>--}}
{{--                                    <button type="button" class="search-btn" data-bs-toggle="modal" data-bs-target="#exampleModalsrc">--}}
{{--                                        <i class="ri-search-line"></i>--}}
{{--                                    </button>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>

<!-- Search Modal -->
<div class="modal fade search-modal-area" id="exampleModalsrc">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" data-bs-dismiss="modal" class="closer-btn">
                <i class="ri-close-line"></i>
            </button>

            <div class="modal-body">
                <form class="search-box">
                    <div class="search-input">
                        <input type="text" name="Search" placeholder="Search for..." class="form-control">

                        <button type="submit" class="search-btn">
                            <i class="ri-search-line"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal -->
