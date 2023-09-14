@extends('master')

@section('title')
   Xcellence Technology || Web development
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Web Development</h2>
                        <ul>
                            <li><a href="{{route('welcomePage')}}">Home</a></li>
                            <li> Web Development </li>
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

                                <div class="col-md-3">
                                    <div class="webService_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/frontEndDevIcon.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Front End Development</h4>
                                    <p class="text-center">
                                        Under Front End Development facility,
                                        we possess expertise in developing an interactive website with smooth navigation,
                                        complex HTML5 animations, and cross-device cross-browser functionality.
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <div class="webService_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/wordpressIcon.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">WordPress</h4>
                                    <p class="text-center">
                                        Besides offering low-cost WordPress website, our programmers are capable of Custom Plug-In Development,
                                        WordPress Template Design, WordPress Migration, WordPress Theme Development, Installation & Configuration, etc.
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <div class="webService_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/wooCommercesIcon.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">WooCommerces</h4>
                                    <p class="text-center">
                                        Having years of experience with WooCommerce, we have the ability to offer custom solution that
                                        makes your ecommerce storefront stand out from your competitors
                                    </p>
                                </div>

                                 <div class="col-md-3">
                                    <div class="webService_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/EcommerceIcon.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Ecommerce Development</h4>
                                    <p class="text-center">
                                        Tired of looking for the most qualified team to build your ecommerce website with perfection?
                                        Let us help you with feature-packed and high-performance ecommerce website development.
                                    </p>
                                </div>



                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                    <div class="webService_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/PHPIcon.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Custom PHP Development</h4>
                                    <p class="text-center">
                                        Rather than going with frameworks, if you want to build a customized website developed using PHP, then we are the company for you.
                                        We can help you with absolute dedication and excellence to give your business a large boost
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <div class="webService_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/psdToHtml5Icon.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">PSD to HTML</h4>
                                    <p class="text-center">
                                        Virtual Sheba transforms your Photoshop designs into pixel-perfect masterpiece,
                                        manually coded, W3C validated, cross-browser compatible HTML/XHTML/CSS markup using CSS2.1 or CSS3.
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <div class="webService_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/WebAppIcon.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Web Application Development</h4>
                                    <p class="text-center">
                                        Besides website, we provide responsive and cross-platform PHP web application that can enhance the exposure
                                        of your business to your audience.
                                    </p>
                                </div>

                                 <div class="col-md-3">
                                    <div class="webService_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/Laravel.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Laravel</h4>
                                    <p class="text-center">
                                        Laravel is the popular framework between the PHP framework. We can developed your belonging any website
                                        with laravel and fully secured your privacy.
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


    <section id="section11" class="section-11 section-margine mt-50">

        <div class="container">
            <div class="services-step-title">
                <h2>Why Choose Us</h2>
            </div>
            <div class="row">

                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-star fa-2x"></i></div>
                        <h4 class="text-center">awasome feature</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-graduation-cap fa-2x"></i></div>
                        <h4 class="text-center">perfect design</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-puzzle-piece fa-2x"></i></div>
                        <h4 class="text-center">easy to customise</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-bars fa-2x"></i></div>
                        <h4 class="text-center">fully responsive</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-object-ungroup fa-2x"></i></div>
                        <h4 class="text-center">multiple headers</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-font fa-2x"></i></div>
                        <h4 class="text-center">google fonts</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-paint-brush fa-2x"></i></div>
                        <h4 class="text-center">flat design</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-file fa-2x"></i></div>
                        <h4 class="text-center">well documented</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
