@extends('master')

@section('title')
   Xcellence Technology || Digital Marketing
@endsection

@section('mainContent')


    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Digital Marketing</h2>
                        <ul>
                            <li><a href="{{route('welcomePage')}}">Home</a></li>
                            <li>Digital Marketing</li>
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
                                        <img src="{{ asset('frontEnd/img/services_img/fbIcon.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Facebook</h4>
                                    <p class="text-center">
                                        Facebook is one of the leading social media platforms. It is a large pool of untapped resource for your business. Capitalizing on that,
                                        especially for startup social media marketing, is vital toward helping your company’s branding and popularity.
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <div class="service_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/youtubeIcon.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">YouTube </h4>
                                    <p class="text-center">
                                        Being the largest video platform used to date, one cannot deny the advantages YouTube can bring to one’s business.
                                        Our creative videography and animation team can help you showcase your company.
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <div class="service_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/instagramIcon.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Instagram</h4>
                                    <p class="text-center">
                                        Instagram is a powerful visual platform for startup social media marketing,
                                        which is used by millions. Orbit utilizes this media to generate greater brand awareness as
                                        well as establish product authenticity with visual and trendy content.

                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <div class="service_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/linkedInIcon.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">LinkedIn</h4>
                                    <p class="text-center">
                                        Being the top social media platform for B2b relations, social media marketing plan for startups is crucial.
                                        We help you create connections and networks with others in the corporate world gaining valuable industry insight.
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
                        <h4 class="text-center">Expert Team</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-puzzle-piece fa-2x"></i></div>
                        <h4 class="text-center">Social Media Expert</h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-bars fa-2x"></i></div>
                        <h4 class="text-center"> Good Communication Skill </h4>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="section-11-box">
                        <div class="section-11-box-icon-background"><i class="fa fa-object-ungroup fa-2x"></i></div>
                        <h4 class="text-center"> 24/7 Support </h4>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
