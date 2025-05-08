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

            <h2>Virtual Assitant</h2>

        </div>

        <div class="demo">
            <div class="container">
                <div class="row justify-content-center">


                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable green">
                            <h3 class="title">OFFER</h3>
                            <div class="price-value">
                                <span class="currency">$</span>
                                <span class="amount">2 <small class="small_text">/per hour</small>    </span>

                                {{--                                <span class="currency">Please Contact</span>--}}
                            </div>

                            <p class="pricing-content"> <b>Perfect for start up business who wants to build an online presence.  </b>   </p>

                            <a href="{{ route('orderForm') }}" class="pricingTable-signup">Order Now</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>
    <!-- End About Section -->


    <!-- Start About Section -->
    <section class="about-area section-padding">

        <div class="section-title ">

            <h2>Web Development</h2>

        </div>

        <div class="demo">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable red">
                            <h3 class="title">Basic</h3>
                            <div class="price-value">
                                <span class="currency">$</span>
                                <span class="amount">50 <h6><strike>$ 100</strike></h6>   </span>

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

                            <a href="{{ route('orderForm') }}" class="pricingTable-signup">Order Now</a>

                            <p>T&C Apply</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable green">
                            <h3 class="title">STANDARD</h3>
                            <div class="price-value">
                                <span class="currency">$ </span>
                                <span class="amount">99 <h6><strike>$ 200</strike></h6>   </span>

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

                            </ul>

                            <a href="{{ route('orderForm') }}" class="pricingTable-signup">Order Now</a>

                            <p>T&C Apply</p>
                        </div>
                    </div>



                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable pink">
                            <h3 class="title">BUSINESS</h3>
                            <div class="price-value">
                                <span class="currency">$</span>
                                <span class="amount">150 <h6><strike>$ 300</strike></h6>   </span>

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


                            </ul>

                            <a href="{{ route('orderForm') }}" class="pricingTable-signup">Order Now </a>

                            <p>T&C Apply</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable blue">
                            <h3 class="title">PREMIUM</h3>
                            <div class="price-value">
                                <span class="currency">Please Cntact</span>


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


                            </ul>

                            <a href="{{ route('orderForm') }}" class="pricingTable-signup">Order Now </a>

                            <p>T&C Apply</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End About Section -->




@endsection
