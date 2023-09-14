@extends('master')

@section('title')
    Xcellence Technology || Virtual Assistant
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Virtual Assistant</h2>
                        <ul>
                            <li><a href="{{route('welcomePage')}}">Home</a></li>
                            <li>Virtual Assistant</li>
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
                                    <div class="vService_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/document.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Document Production </h4>
                                    <p class="text-center">
                                        The world needs to keep turning. There are contracts to send out, legal agreements to share and quotes to produce.
                                        If you’re struggling for time or simply too busy, then instead of turning to a temporary staff member ,
                                        Virtual Sheba can produce any documents you require including powerpoints, manuals and letters,
                                        using your branding and can deliver them to the required recipient.
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <div class="vService_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/search.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Web Research & Scrap</h4>
                                    <p class="text-center">
                                        Internet research is the practice of using Internet information, especially free information on the World Wide Web,
                                        or Internet-based resources in research.
                                        Internet research has had a profound impact on the way ideas are formed and knowledge is created.
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <div class="vService_logo">
                                        <img src="{{ asset('frontEnd/img/services_img/smm.png') }}" alt="" height="75" width="75">
                                    </div>

                                    <h4 class="text-center">Social Media Management</h4>
                                    <p class="text-center">
                                        Social media management is the process of managing your online presence on social media platforms.
                                        Virtual Sheba do it with the expert team.
                                    </p>
                                </div>






                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="vService_logo">
                                            <img src="{{ asset('frontEnd/img/services_img/writing.png') }}" alt="" height="75" width="75">
                                        </div>

                                        <h4 class="text-center">Content Writing</h4>
                                        <p class="text-center">
                                            Content writing is the process of planning, writing and editing web content,
                                            typically for digital marketing purposes. It can include writing blog posts and articles, as well as content for specific platforms,
                                            such as tweetstorms on Twitter or text posts on Reddit.
                                        </p>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="vService_logo">
                                            <img src="{{ asset('frontEnd/img/services_img/business.png') }}" alt="" height="75" width="75">
                                        </div>

                                        <h4 class="text-center">Business Continuity</h4>
                                        <p class="text-center">
                                            Virtual Sheba, have provided our expertise to hundreds of organisations when it
                                            comes to remote working and business continuity.
                                        </p>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="vService_logo">
                                            <img src="{{ asset('frontEnd/img/services_img/data.png') }}" class="rounded" alt="" height="75" width="75">
                                        </div>

                                        <h4 class="text-center">Data Entry</h4>
                                        <p class="text-center">
                                            Whether you're a business owner or an employee for a growing business, you've probably felt the pain of data entry.
                                            Virtual Sheba  crave a data entry or data analysis task.
                                        </p>
                                    </div>

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
                        <div class="section-11-box-icon-background"><i class="fa fa-solid fa-headset fa-2x"></i></div>
                        <h4 class="text-center">24/7  Support</h4>
                    </div>
                </div>





            </div>
        </div>
    </section>

@endsection
