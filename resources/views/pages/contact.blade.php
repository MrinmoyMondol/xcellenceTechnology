@extends('master')

@section('title')
    Xcellence Technology || Contact Us
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="{{ route('welcomePage') }}">Home</a></li>

                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->







    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title ">
                <h2>Contact</h2>
                
            </div>

            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="fa fa-map flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Dhaka , Bangladesh</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="fa fa-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@xcellencetechnology.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="fa fa-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>(+880) 16-255-48959</p>
                            </div>
                        </div><!-- End Info Item -->


                    </div>

                </div>

                <div class="col-lg-8">

                    <div class="contact-form">
                        <p class="form-message"></p><br />
                        <form id="contact-form" class="contact-form form" action="{{ route('mailSend') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required placeholder="Your Email">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" class="form-control" required placeholder="Your Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn submit-btn">Send Message <i class="fa fa-paper-plane"></i> <span></span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->




    <!-- Map Section Start -->
    <div class="map-area">
        <div class="map-content">
            <div class="map-canvas" id="contact-map"></div>
        </div>
    </div>
    <!-- Map Section End -->

@endsection
