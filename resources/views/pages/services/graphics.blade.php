@extends('master')

@section('title')
    Xcellence Technology || Graphics Design
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Graphics Design</h2>
                        <ul>
                            <li><a href="{{route('welcomePage')}}">Home</a></li>
                            <li> Graphics design </li>
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
                                        <img src="{{ asset('frontEnd/img/services_img/psd.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Adobe Photoshop</h4>
                                    <p class="text-center">
                                        For the graphics design service photoshop is the best solution. Virtual Sheba provides  the best
                                        and perfect design.
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <div class="service_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/ai.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Adobe Illustrator </h4>
                                    <p class="text-center">
                                        Virtual Sheba provides you the best vector design using adobe illustrator. We are ready
                                        to provide you the best design.
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
                        <h4 class="text-center">Awesome Feature</h4>
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
