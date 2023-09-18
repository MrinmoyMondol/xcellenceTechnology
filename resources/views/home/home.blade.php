@extends('master')

@section('title')
    Xcellence Technology
@endsection

@section('mainContent')

    <!-- Start Home Area -->
    <div class="home-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="main-banner-content">
                                <h3>Improve and Innovate with the Tech Trends</h3>
                                <p>Quality Technologies. Productivity. Reliability. Innovation.</p>
                                <div class="banner-btn">
                                    <a href="{{ route('getItSupport') }}" class="default-btn-one">
                                        Get It Support
                                        <span></span>
                                    </a>
                                    <a class="default-btn" href="contact.html">
                                        Free Consultation
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="banner-image">
                                <img src="{{asset('frontEnd/img/home-font.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="creative-shape">
            <img src="{{asset('frontEnd/img/home-bottom-shape.png')}}" alt="svg shape">
        </div>
    </div>
    <!-- End Home Area -->

    <!-- Start About Section -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content">
                        <div class="about-content-text">
                            <h6>About Our Company</h6>
                            <h2>We are here to grow Your Business.</h2>
                            <p>Xcellence Technology is the partner of choice for many of the world’s leading enterprises, SMEs, and technology challengers. We help businesses elevate their value through Virtual Assistants, custom website development, Software Quality Assurance, Project Management, and consultancy services.</p>

                            <div class="about-btn-box">
                                <a class="default-btn project-btn-1" href="{{ route('aboutUs') }}">Learn More<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12">
                    <div class="about-image">
                        <img src="{{asset('frontEnd/img/about.jpg')}}" alt="About image">
                        <div class="years-design">
                            <h2>7</h2>
                            <h5>Years Experience</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Services Section -->
    <section class="services-section bg-grey section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>What We Provide</h6>
                        <h2>IT Solutions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="services-icon">
                            <i class="flaticon-project-management"></i>
                        </div>
                        <h3>Lead Generation</h3>
                        <p>
                            Online lead generation is the process of building consumer interest in your products and services on the internet.
                            Before making a purchase, customers go online to research products and services,
                            compare competitor offerings and learn more about their interests.
                        </p>
                        <div class="services-btn-link">
                            <a href="{{ route('lead') }}" class="services-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="services-icon">
                            <i class="flaticon-programming"></i>
                        </div>
                        <h3>Web Development</h3>
                        <p>Web development refers to building, creating, and maintaining websites.
                            It includes aspects such as web design, web publishing, web programming, and database management.</p>
                        <div class="services-btn-link">
                            <a href="{{ route('webDev') }}" class="services-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="services-icon">
                            <i class="flaticon-cpu-1"></i>
                        </div>
                        <h3>Digital Marketing</h3>
                        <p>Digital marketing, also known as online marketing, refers to advertising delivered through digital channels
                            to promote brands and connect potential customers using the internet and other forms of digital communication.</p>
                        <div class="services-btn-link">
                            <a href="{{ route('marketing') }}" class="services-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="services-icon">
                            <i class="flaticon-coding"></i>
                        </div>
                        <h3>Virtual Assitant</h3>
                        <p>
                            We are offering virtual assistant service. You can hire a virtual assistant to save on permanent staff for performing admin functions
                            such as calendar management, travel and event arrangements, email support service etc.

                        </p>
                        <div class="services-btn-link">
                            <a href="{{ route('virtual') }}" class="services-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="services-icon">
                            <i class="flaticon-mobile-app"></i>
                        </div>
                        <h3>App Development</h3>
                        <p>

                            Mobile app development is the act or process by which a mobile app is developed for mobile devices,
                            such as personal digital assistants, enterprise digital assistants or mobile phones.

                        </p>
                        <div class="services-btn-link">
                            <a href="{{ route('appDev') }}" class="services-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="services-icon">
                            <i class="flaticon-cloud"></i>
                        </div>
                        <h3>Admin Support</h3>
                        <p>Administrative support services are essential to the operation of any office.
                            Your administrative duties could include scheduling, answering phones, typing,
                            taking dictation, organization and similar activities. </p>
                        <div class="services-btn-link">
                            <a href="{{ route('admin') }}" class="services-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->


    <!-- Start Project Section -->
    <section class="project-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <h6>Recent Works</h6>
                        <h2>Our Portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="project-list">
                        <ul class="nav" id="project-flters">
                            <li class="filter filter-active" data-filter=".all">all</li>
                            <li class="filter" data-filter=".webdesign">WEB</li>
                            <li class="filter" data-filter=".graphics">Graphics</li>
                            <li class="filter" data-filter=".data">Data Entry</li>
                        </ul>
                    </div>
                </div>
                <div class="project-container">

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://devsalient.com/mdh/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/1.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>My Debt Help</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://devsalient.com/infosol/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/2.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Infosol</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://golfchateaucartier.com/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/3.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Golf Chateau Cartier</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://www.ottawa-attorneys.ca/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/4.png')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>Ottawa-Attorneys</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>



                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  webdesign">
                        <a href="https://jobsoutlet.net/">
                            <div class="project-item">
                                <img src="{{asset('frontEnd/img/portfolio/JobsOutlet.jpg')}}" alt="image">
                                <div class="project-content-overlay">
                                    <p>JobsOutlet</p>
                                    <h3> Web Application</h3>
                                </div>
                            </div>
                        </a>
                    </div>






                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all  graphics">

                        <div class="project-item">
                            <img src="{{asset('frontEnd/img/portfolio/creative_desgin 1.png')}}" alt="image">
                            <div class="project-content-overlay">

                                <h3>Graphics Design</h3>
                            </div>
                        </div>

                    </div>

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                        <div class="project-item">
                            <img src="{{asset('frontEnd/img/portfolio/creative_desgin 2.png')}}" alt="image">
                            <div class="project-content-overlay">

                                <h3>Graphics Design</h3>
                            </div>
                        </div>

                    </div>

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                        <div class="project-item">
                            <img src="{{asset('frontEnd/img/portfolio/creative_desgin 3.png')}}" alt="image">
                            <div class="project-content-overlay">

                                <h3>Graphics Design</h3>
                            </div>
                        </div>

                    </div>

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                        <div class="project-item">
                            <img src="{{asset('frontEnd/img/portfolio/creative_desgin 4.png')}}" alt="image">
                            <div class="project-content-overlay">

                                <h3>Graphics Design</h3>
                            </div>
                        </div>

                    </div>

                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all graphics">

                        <div class="project-item">
                            <img src="{{asset('frontEnd/img/portfolio/creative_desgin 5.png')}}" alt="image">
                            <div class="project-content-overlay">

                                <h3>Graphics Design</h3>
                            </div>
                        </div>

                    </div>


                    {{--  portfolio Item --}}
                    <div class="col-lg-4 col-md-6 project-grid-item all data">

                        <div class="project-item">
                            <img src="{{asset('frontEnd/img/portfolio/data1.png')}}" alt="image">
                            <div class="project-content-overlay">

                                <h3>Data Entry</h3>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Project Section -->



    <!-- Start Counter Section -->
    <section class="counter-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 counter-item">
                    <div class="single-counter">
                        <div class="counter-contents">
                            <h2>
                                <span class="counter-number">7</span>
                                <span>+</span>
                            </h2>
                            <h3 class="counter-heading">Years Helping Business</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 counter-item">
                    <div class="single-counter">
                        <div class="counter-contents">
                            <h2>
                                <span class="counter-number">10</span>
                                <span>+</span>
                            </h2>
                            <h3 class="counter-heading">Employees</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 counter-item">
                    <div class="single-counter">
                        <div class="counter-contents">
                            <h2>
                                <span class="counter-number">5</span>
                                <span>K</span>
                            </h2>
                            <h3 class="counter-heading">Complete Projects</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 counter-item">
                    <div class="single-counter">
                        <div class="counter-contents">
                            <h2>
                                <span class="counter-number">2</span>
                                <span>K+</span>
                            </h2>
                            <h3 class="counter-heading">5 Star Rating</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Start Overview Section -->
    <section class="overview-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="overview-image">
                        <img src="{{asset('frontEnd/img/choose-1.jpg')}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="overview-content">
                        <h6>Why Choose Us?</h6>
                        <h2>Safeguard your brand with  IT Solutions</h2>
                        <ul class="features-list">
                            <li> <span>Remote It Assistance</span></li>
                            <li> <span>Solving IT Problems</span></li>
                            <li> <span>Customized Software</span></li>
                            <li> <span>Information Security</span></li>
                            <li> <span>7+ Years Experience </span></li>
                            <li> <span>24/7 Customer Support</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Overview Section -->



    <!-- Start Hire Section -->
    <section class="hire-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12">
                    <div class="hire-content">
                        <h6>Want to work with us?</h6>
                        <h2>Digitally transform and grow your business!</h2>
                        <p>
                            We specialize in Web development, Virtual Assistant, Lead Generation and many more  as a high-quality supply
                            of outsourcing in Bangladesh. Our services square measure tailored to suit the requirements of every consumer.
                            We can provide and  assist you to construct and  grow  your business  day to day service.
                            So, you can contact us  at any time , we are eager to serve you.

                        </p>
                        <div class="hire-btn">
                            <a class="default-btn" href="mailto:info@virtualsheba.com">Email Now<span></span></a>
                            <a class="default-btn-one" href="{{ route('contact') }}">Contact Us<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hire Section -->



    {{-- Pricing Section --}}
    <section class="pricing-section section-padding">
        <div class="container">
            <div class="section-title">
                <h6>Pricing</h6>
                <h2> Our Packages</h2>
            </div>

        <div class="demo">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable red">
                        <h3 class="title">OFFER</h3>
                        <div class="price-value">
                            <span class="currency">৳</span>
                            <span class="amount">00.00</span>

                        </div>

                        <p class="pricing-content"> <b>Perfect for start up business who wants to build an online presence  </b>   </p>

                        <a href="{{ route('pricing') }}" class="pricingTable-signup">Read More</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable green">
                        <h3 class="title">STANDARD</h3>
                        <div class="price-value">
                            <span class="currency">৳</span>
                            <span class="amount">3000 <h6><strike>৳ 6000</strike></h6>   </span>

                        </div>

                        <p class="pricing-content"> <b>Perfect for start up business who wants to build an online presence  </b>   </p>

                        <a href="{{ route('pricing') }}" class="pricingTable-signup">Read More</a>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable pink">
                        <h3 class="title">BUSINESS</h3>
                        <div class="price-value">
                            <span class="currency">৳</span>
                            <span class="amount">6000 <h6><strike>৳ 12000</strike></h6>   </span>

                        </div>
                        <p class="pricing-content"><b>  Best fit for established business or organizations who has a lot to offer and share </b> </p>

                        <a href="{{ route('pricing') }}" class="pricingTable-signup">Read More </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable blue">
                        <h3 class="title">PREMIUM</h3>
                        <div class="price-value">
                            <span class="currency">Please Contact</span>


                        </div>
                       <p class="pricing-content"> <b>  Start your business online </b> </p>
                        <a href="{{ route('pricing') }}" class="pricingTable-signup">Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
    </section>

    {{-- End Pricing Section --}}



    <!-- Start Testimonial Section -->
    <section class="testimonial-section section-padding">
        <div class="container">
            <div class="section-title">
                <h6>Testimonial</h6>
                <h2>What Our Client Say</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Great worker. Delivers on time and great quality
                                </p>

                                <span>- Freelancer</span>
                            </div>
                            <div class="avatar">
                                <img src="{{asset('frontEnd/img/client/user.jpg')}}" alt="testimonial images">
                            </div>
                            <div class="testimonial-bio">
                                <div class="bio-info">
                                    <h3>John edwards</h3>
                                    <span> United States </span>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    They are fast attentive, Knowledgeable, and very responsive i am going to work with them on continuous basis.
                                </p>

                                <span>- Freelancer</span>
                            </div>
                            <div class="avatar">
                                <img src="{{asset('frontEnd/img/client/Aditya.jpg')}}" alt="testimonial images">
                            </div>
                            <div class="testimonial-bio">
                                <div class="bio-info">
                                    <h3>Aditya Vikram</h3>
                                    <span> India </span>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Great service - highly recommend. Conscientious and helpful.
                                </p>

                                <span>- Freelancer</span>
                            </div>
                            <div class="avatar">
                                <img src="{{asset('frontEnd/img/client/user.jpg')}}" alt="testimonial images">
                            </div>
                            <div class="testimonial-bio">
                                <div class="bio-info">
                                    <h3>Tony Stock</h3>
                                    <span>  United Kingdom </span>
                                </div>
                            </div>
                        </div>

                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    They were very polite and courteous.
                                    I was very happy with their work.
                                    They were quick and efficient.
                                    I will rehire them for future work.
                                </p>
                                <span>- Upwork</span>
                            </div>
                            <div class="avatar">
                                <img src="{{asset('frontEnd/img/client/user.jpg')}}" alt="testimonial images">
                            </div>
                            <div class="testimonial-bio">
                                <div class="bio-info">
                                    <h3>Kris Jobson</h3>

                                    <span>  United States </span>
                                </div>
                            </div>
                        </div>

                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Did very good and fast work. Here comes the next order.
                                </p>

                                <span>- Fiverr</span>
                            </div>
                            <div class="avatar">
                                <img src="{{asset('frontEnd/img/client/Alexandrusir.jpg')}}" alt="testimonial images">
                            </div>
                            <div class="testimonial-bio">
                                <div class="bio-info">
                                    <h3>Alexandrusir</h3>
                                    <span>  Spain </span>
                                </div>
                            </div>
                        </div>

                         <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Quick, accurate and skilled, turned a pdf catalogue into a spreadsheet intelligently and with great communication
                                </p>

                                <span>- Fiverr</span>
                            </div>
                            <div class="avatar">
                                <img src="{{asset('frontEnd/img/client/user.jpg')}}" alt="testimonial images">
                            </div>
                            <div class="testimonial-bio">
                                <div class="bio-info">
                                    <h3>Danielstart</h3>
                                    <span> United Kingdom </span>
                                </div>
                            </div>
                        </div>


                        <!-- testimonials item -->
                        <div class="single-testimonial">
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Exceptional contractor to oversee any tasks, would highly recommend for time saved and project goals achieved.
                                </p>

                                <span>- Upwork</span>
                            </div>
                            <div class="avatar">
                                <img src="{{asset('frontEnd/img/client/user.jpg')}}" alt="testimonial images">
                            </div>
                            <div class="testimonial-bio">
                                <div class="bio-info">
                                    <h3>John Smith</h3>
                                    <span> New Zealand </span>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->



@endsection
