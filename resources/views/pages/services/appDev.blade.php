@extends('master')

@section('title')
    Xcellence Technology || Mobile App development
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Mobile App Development</h2>
                        <ul>
                            <li><a href="{{route('welcomePage')}}">Home</a></li>
                            <li>Mobile App Development</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start Services Details Area -->
    <section class="services-details-area">
        <div class="container">
            <div class="services-details-overview">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-md-12">
                        <div class="services-step-wrapper">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="service_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/apple.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">IOS</h4>
                                    <p class="text-center">
                                        Under Front End Development facility,
                                        we possess expertise in developing an interactive website with smooth navigation,
                                        complex HTML5 animations, and cross-device cross-browser functionality.
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <div class="service_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/ionic.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Ionic </h4>
                                    <p class="text-center">
                                        Besides offering low-cost WordPress website, our programmers are capable of Custom Plug-In Development,
                                        WordPress Template Design, WordPress Migration, WordPress Theme Development, Installation & Configuration, etc.
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <div class="service_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/android.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Android Development</h4>
                                    <p class="text-center">
                                        Having years of experience with WooCommerce, we have the ability to offer custom solution that
                                        makes your ecommerce storefront stand out from your competitors
                                    </p>
                                </div>





                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Services Details Area -->



    <section id="section11" class="section-11 section-margine">

        <div class="container">
            <div class="services-step-title">
                <h2>Why Choose Us</h2>
            </div>
            <div class="row">

                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-star fa-2x"></i></div>
                        <h4 class="text-center">Awasome feature</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-graduation-cap fa-2x"></i></div>
                        <h4 class="text-center">Perfect Design</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-puzzle-piece fa-2x"></i></div>
                        <h4 class="text-center">Easy to Customise</h4>
                    </div>
                </div>


                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-font fa-2x"></i></div>
                        <h4 class="text-center">Google Fonts</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-paint-brush fa-2x"></i></div>
                        <h4 class="text-center">Flat Design</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-file fa-2x"></i></div>
                        <h4 class="text-center">Well Documented</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
