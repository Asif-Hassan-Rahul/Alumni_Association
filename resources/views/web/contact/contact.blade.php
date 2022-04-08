@extends('layouts.web')

@section('custom_css')
@endsection

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-26">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact</h2>

                <ul>
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>

                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row d-flex align-items-center" style="background-color: var(--optional-color)">
                <div class="col-lg-7">
                    <div class="map-area">
                        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Ishraak%20solutions%20Ltd.&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="margin-left: -3em;"></iframe>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="contact-info">
                        <h2>Get in touch</h2>

                        <ul class="address">
                            <li class="location">
                                <i class="ri-map-pin-2-fill"></i>
                                <span>Address</span>
                                House 76 (Level 1)
                                Road 4, Block B
                                Niketan, Gulshan 1
                                Dhaka 1212
                            </li>
                            <li>
                                <i class="ri-mail-line"></i>
                                <span>Email</span>
                                <a href="mailto:info@bueten.org">info@bueten.org</a>
                            </li>
{{--                            <li>--}}
{{--                                <i class="ri-phone-fill"></i>--}}
{{--                                <span>Phone</span>--}}
{{--                                <a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>--}}
{{--                            </li>--}}
                        </ul>

                        <h3>Follow Us</h3>

                        <ul class="social-link">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-linkedin-box-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
{{--    <section class="contact-area pb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <h2>Send us a quick message</h2>--}}
{{--            </div>--}}

{{--            <form id="contactForm">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 col-sm-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Name</label>--}}
{{--                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">--}}
{{--                            <div class="help-block with-errors"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 col-sm-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Email</label>--}}
{{--                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">--}}
{{--                            <div class="help-block with-errors"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 col-sm-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Phone</label>--}}
{{--                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">--}}
{{--                            <div class="help-block with-errors"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 col-sm-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Subject</label>--}}
{{--                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">--}}
{{--                            <div class="help-block with-errors"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-12">--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Message</label>--}}
{{--                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message"></textarea>--}}
{{--                            <div class="help-block with-errors"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-12 col-md-12">--}}
{{--                        <div class="form-group checkboxs">--}}
{{--                            <input type="checkbox" id="chb2">--}}
{{--                            <p>--}}
{{--                                Accept <a href="terms-conditions.html">Terms &amp; Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-12 col-md-12">--}}
{{--                        <button type="submit" class="default-btn">--}}
{{--                            <span>Send message</span>--}}
{{--                        </button>--}}
{{--                        <div id="msgSubmit" class="h3 text-center hidden"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Contact Area -->
@endsection

@section('custom_js')
@endsection
