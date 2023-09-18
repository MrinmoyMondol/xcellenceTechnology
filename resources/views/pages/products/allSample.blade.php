@extends('master')

@section('title')
    Xcellence Technology || All Sample
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>All Sample</h2>
                        <ul>
                            <li><a href="{{ route('welcomePage') }}">Home</a></li>

                            <li>All Sample</li>
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
                <div class="col-lg-4 col-md-4 col-sm-6">

                    @foreach($allSamples as $allSample)

                        <a  href="{{ asset($allSample->sample_file) }}" class="example-image-link" data-lightbox="image-1" data-title="{{ $allSample->sample_code }}">

                            <img src="{{ asset($allSample->sample_file) }}" alt="Sample File"  class="example-image"  height="400px" width="500px"/>

                        </a>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->





@endsection
