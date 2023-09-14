@extends('master')

@section('title')
   Xcellence Technology || Ecommerce Solution
@endsection

@section('mainContent')


    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Ecommerce Solution</h2>
                        <ul>
                            <li><a href="{{route('welcomePage')}}">Home</a></li>
                            <li>Ecommerce Solution</li>
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
                                        <img src="{{ asset('frontEnd/img/services_img/b2b.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Business to Business</h4>
                                    <p class="text-center">
                                       Virtual Sheba provided their services to any organization or company.
                                        We are always ready to work with any association.
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <div class="service_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/b2c.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Business to Consumer </h4>
                                    <p class="text-center">
                                        Virtual Sheba provided their services to any organization or company or individual owner.
                                        We are work according to your planing.
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <div class="service_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/c2c.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Consumer to Consumer</h4>
                                    <p class="text-center">
                                        Virtual Sheba provided their services to any  individual owner or person.
                                        We are work according to your planing which is mostly suitable for your companies growth.
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
                        <h4 class="text-center">Perfect Planning</h4>
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
                        <h4 class="text-center">Good Team Work</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-user-friends fa-2x"></i></div>
                        <h4 class="text-center">Expert Team</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-object-ungroup fa-2x"></i></div>
                        <h4 class="text-center"> Product Management </h4>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-solid fa-headset fa-2x"></i></div>
                        <h4 class="text-center">24/7  Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
