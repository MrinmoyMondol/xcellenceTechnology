@extends('master')

@section('title')
   Xcellence Technology || Admin Support
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Admin Support</h2>
                        <ul>
                            <li><a href="{{route('welcomePage')}}">Home</a></li>
                            <li>Admin Support</li>
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
                        <h4 class="text-center">awasome feature</h4>
                        <p class="text-center">Using many font styles canslow down your webpage, so only select the font styles that you</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-graduation-cap fa-2x"></i></div>
                        <h4 class="text-center">perfect design</h4>
                        <p class="text-center">Using many font styles canslow down your webpage, so only select the font styles that you</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-puzzle-piece fa-2x"></i></div>
                        <h4 class="text-center">easy to customise</h4>
                        <p class="text-center">Using many font styles canslow down your webpage, so only select the font styles that you</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-bars fa-2x"></i></div>
                        <h4 class="text-center">fully responsive</h4>
                        <p class="text-center">Using many font styles canslow down your webpage, so only select the font styles that you</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-object-ungroup fa-2x"></i></div>
                        <h4 class="text-center">multiple headers</h4>
                        <p class="text-center">Using many font styles canslow down your webpage, so only select the font styles that you</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-font fa-2x"></i></div>
                        <h4 class="text-center">google fonts</h4>
                        <p class="text-center">Using many font styles canslow down your webpage, so only select the font styles that you</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-paint-brush fa-2x"></i></div>
                        <h4 class="text-center">flat design</h4>
                        <p class="text-center">Using many font styles canslow down your webpage, so only select the font styles that you</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-file-text-o fa-2x"></i></div>
                        <h4 class="text-center">well documented</h4>
                        <p class="text-center">Using many font styles canslow down your webpage, so only select the font styles that you</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
