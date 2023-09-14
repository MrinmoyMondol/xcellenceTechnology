@extends('master')

@section('title')
   Xcellence Technology || Testimonial
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Testimonial</h2>
                        <ul>
                            <li><a href="{{ route('welcomePage') }}">Home</a></li>
                            <li>Testimonial</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Start About Section -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row">

                @foreach($allTestimonials as $allTestimonial)
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="about-content">
                            <div class="card-container">
                                <span class="pro">{{ $allTestimonial->platform }}</span>
                                <img class="round" src="{{asset($allTestimonial->image)}}" alt="user" width="100px" height="100px" />
                                <h3>{{ $allTestimonial->name }}</h3>
                                <h6>{{ $allTestimonial->country }}</h6>
                                <div class="skills">
                                    <p>{{ $allTestimonial->comments }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach







            </div>
        </div>
    </section>
    <!-- End About Section -->


@endsection
