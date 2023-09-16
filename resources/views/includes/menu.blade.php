<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="techvio-responsive-nav">
        <div class="container">
            <div class="techvio-responsive-menu">
                <div class="logo">
                    <a href="{{ route('welcomePage') }}">
                        <img src="{{asset('frontEnd/img/logo.png')}}" class="white-logo" alt="logo" width="250px" height="50px">
                        <img src="{{asset('frontEnd/img/logo-black.png')}}" class="black-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="techvio-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('welcomePage') }}">
                    <img src="{{asset('frontEnd/img/logo.png')}}" class="white-logo" alt="logo" width="250px" height="50px">
                    <img src="{{asset('frontEnd/img/logo-black.png')}}" class="black-logo" alt="logo" width="150px" height="50px">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('welcomePage') }}" class="nav-link">Home </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('aboutUs') }}" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">Services <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('webDev') }}" class="nav-link">Web Development</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('appDev') }}" class="nav-link">Mobile Development</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="{{ route('virtual') }}" class="nav-link">Virtual Assistant</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="{{ route('graphics') }}" class="nav-link">Graphics Design</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="{{ route('marketing') }}" class="nav-link">Digital Marketing</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('ecommerce') }}" class="nav-link">E-Commerce Solution</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('lead') }}" class="nav-link">Lead Generation</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">

                            <a href="" class="nav-link">Products <i class="fas fa-chevron-down"></i> </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('products') }}" class="nav-link">Our Works </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('allSample') }}" class="nav-link">All Samples</a>
                                </li>


                            </ul>


                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pricing') }}" class="nav-link">Pricing </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('testimonial') }}" class="nav-link">Testimonial </a>

                        </li>


                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="other-option">
                        <a class="default-btn" href="{{ route('getItSupport') }}">Get It Support <span></span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
