@extends('master')

@section('title')
   Xcellence Technology || About  Us
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="{{ route('welcomePage') }}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start About Section -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="about-content">
                        <div class="about-content-text">
                            <h6>About Our Company</h6>
                            <h2>Xcellence Technology</h2>

                            <p>
                               Xcellence Technology is the partner of choice for many of the world’s leading enterprises, SMEs, 
                               and technology challengers. We help businesses elevate their value through Virtual Assistants, custom website development,
                               Software Quality Assurance, Project Management, and consultancy services. We can help to maintain and modernize 
                               your IT infrastructure and solve various infrastructure-specific issues a business may face.

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Counter Section -->
{{--    <div class="services-step-wrapper">--}}
{{--        <div class="services-step-image">--}}
{{--            <img src="{{asset('frontEnd/img/services-details/services-5.jpg')}}" alt="image">--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- End Counter Section -->

    <!-- Start Team Section -->
    <!--<section class="team-area section-padding">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12">-->
    <!--                <div class="section-title">-->
    <!--                    <h2>Our Management Team</h2>-->
    <!--                </div>-->
    <!--            </div>-->


    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="single-team-box">-->
    <!--                    <div class="team-image">-->
    <!--                        <img src="{{asset('frontEnd/img/team/nissan.jpg')}}" alt="team" />-->
    <!--                        <div class="team-social-icon">-->
    <!--                            <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>-->
    <!--                            <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>-->
    <!--                            <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="team-info">-->
    <!--                        <h3>Md Nimul Islam</h3>-->
    <!--                        <span>Founder, CEO</span>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="single-team-box">-->
    <!--                    <div class="team-image">-->
    <!--                        <img src="{{asset('frontEnd/img/team/MM.jpg')}}" alt="team" />-->
    <!--                        <div class="team-social-icon">-->
    <!--                            <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>-->
    <!--                            <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>-->
    <!--                            <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="team-info">-->
    <!--                        <h3>Mrinmoy Mondol</h3>-->
    <!--                        <span>IT Manager</span>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="single-team-box">-->
    <!--                    <div class="team-image">-->
    <!--                        <img src="{{asset('frontEnd/img/team/dipu.jpg')}}" alt="team" />-->
    <!--                        <div class="team-social-icon">-->
    <!--                            <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>-->
    <!--                            <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>-->
    <!--                            <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="team-info">-->
    <!--                        <h3>Md Oadud Hossain</h3>-->
    <!--                        <span>Marketing Manager</span>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="single-team-box">-->
    <!--                    <div class="team-image">-->
    <!--                        <img src="{{asset('frontEnd/img/team/jubayer.jpg')}}" alt="team" />-->
    <!--                        <div class="team-social-icon">-->
    <!--                            <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>-->
    <!--                            <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>-->
    <!--                            <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="team-info">-->
    <!--                        <h3>Jobair Bin Alam</h3>-->
    <!--                        <span> Software Developer</span>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- End Team Section -->

@endsection
