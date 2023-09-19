@extends('master')

@section('title')
   Xcellence Technology || Pricing
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Pricing</h2>
                        <ul>
                            <li><a href="{{ route('welcomePage') }}">Home</a></li>

                            <li>Pricing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start About Section -->
    <section class="about-area section-padding">

        <div class="section-title ">
            <h6>Pricing</h6>
            <h2>Our Packages</h2>

        </div>

        <div class="demo">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable red">
                            <h3 class="title">OFFER</h3>
                            <div class="price-value">
                                <span class="currency">৳</span>
                                <span class="amount">2000 <h6><strike>৳ 5000</strike></h6>   </span>

                            </div>
                            <ul class="pricing-content ">

                                    <li>
                                        <i aria-hidden="true" class="fas fa-check-circle offer_icon"></i> <span>  1 Pages  </span>
                                    </li>
                                    <li >
                                         <i aria-hidden="true" class="fas fa-check-circle offer_icon"></i> <span> Logo </span>
                                    </li>


                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle offer_icon"></i> <span> Domain-1st Year Free </span>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle offer_icon"></i> <span> Hosting Free For 1st Year </span>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle offer_icon"></i> <span> 1 Email  </span>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle offer_icon"></i> <span> 1 Contact Form </span>
                                    </li>


                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle offer_icon"></i> <span> Mobile Responsive </span>
                                    </li>

                                    <li>
                                      <i aria-hidden="true" class="fas fa-check-circle offer_icon"></i> <span> Delivery in 2 Days </span>
                                    </li>


                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle offer_icon"></i> <span> 1 Month Free Support </span>
                                    </li>
                            </ul>

                             <a href="{{ route('offer') }}" class="pricingTable-signup">Order Now</a>

                            <p>T&C Apply</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable green">
                            <h3 class="title">STANDARD</h3>
                            <div class="price-value">
                                <span class="currency">৳ </span>
                                <span class="amount">3000 <h6><strike>৳ 6000</strike></h6>   </span>

                            </div>
                            <ul class="pricing-content ">

                                    <li>
                                        <i aria-hidden="true" class="fas fa-check-circle standard_icon"></i> <span> Upto 2 Pages </span>
                                    </li>
                                    <li >
                                         <i aria-hidden="true" class="fas fa-check-circle standard_icon"></i> <span> Logo </span>
                                    </li>
                                    <li >
                                       <i aria-hidden="true" class="fas fa-check-circle standard_icon"></i> <span> Slider / Banner </span>
                                    </li>

                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle standard_icon"></i> <span> Domain-1st Year Free </span>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle standard_icon"></i> <span> Hosting Free For 1st Year </span>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle standard_icon"></i> <span> 1 Email  </span>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle standard_icon"></i> <span> 1 Contact Form </span>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle standard_icon"></i> <span> Free SSL </span>
                                    </li>

                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle standard_icon"></i> <span> Mobile Responsive </span>
                                    </li>

                                    <li>
                                      <i aria-hidden="true" class="fas fa-check-circle standard_icon"></i> <span> Delivery in 3 Days </span>
                                    </li>


                                    <li>
                                       <i aria-hidden="true" class="fas fa-check-circle standard_icon"></i> <span> 3 Month Free Support </span>
                                    </li>
                            </ul>

                             <a href="{{ route('getItSupport') }}" class="pricingTable-signup">Order Now</a>

                            <p>T&C Apply</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable pink">
                            <h3 class="title">BUSINESS</h3>
                            <div class="price-value">
                                <span class="currency">৳</span>
                                <span class="amount">6000 <h6><strike>৳ 12000</strike></h6>   </span>

                            </div>
                            <ul class="pricing-content">

                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Upto 5 Pages </span>
                                </li>
                                <li >
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Logo </span>
                                </li>
                                <li >
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Slider / Banner </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Dynamic Website </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Domain-1st Year Free </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Hosting Free For 1st Year </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> 1 Email  </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> 1 Contact Form </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Free SSL </span>
                                </li>

                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Gallery Section </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Chat Feature </span>
                                </li>

                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Social Profile Link </span>
                                </li>

                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Click to Call/Email </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Mobile Responsive </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Login Details Will Be Given </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> Delivery in 7 Days </span>
                                </li>

                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle business_icon"></i> <span> 6 Month Free Support  </span>
                                </li>
                            </ul>

                            <a href="{{ route('getItSupport') }}" class="pricingTable-signup">Order Now </a>

                            <p>T&C Apply</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable blue">
                            <h3 class="title">PREMIUM</h3>
                            <div class="price-value">
                                <span class="currency">Please Contact</span>


                            </div>
                            <ul class="pricing-content">

                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Upto 10 Pages </span>
                                </li>
                                <li >
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Logo </span>
                                </li>
                                <li >
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Slider /Banner </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Dynamic Website </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Domain-1st Year Free </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Hosting Free For 1st Year </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> 1 Email  </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> 1 Contact Form </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Free SSL </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Products Upload </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Gallery Section </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span>  WhatsApp / Messenger Chat Integration  </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Payment Gateway </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Social Profile Link </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Facebook Page Creation </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Click to Call/Email </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Mobile Responsive </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span>  Revisions – 2 </span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-check-circle premium_icon"></i> <span> Call/Email/Chat Support </span>
                                </li>

                            </ul>


                            <a href="{{ route('getItSupport') }}" class="pricingTable-signup">Order Now</a>

                            <p>T&C Apply</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End About Section -->




@endsection
