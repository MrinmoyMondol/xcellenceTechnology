@extends('dashboard::layouts.master')

@section('title')
    XT || Members
@endsection

@section('mainContent')

    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Sample List</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Sample List</li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->

        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row el-element-overlay">
            <div class="col-md-12">
                <h4 class="card-title">All Sample</h4>
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#newSample"><i class="fa fa-plus-circle"></i> Create New</button>
            </div>






        @foreach($allSamples as $allSample)
                <div class="col-lg-4 col-md-6">




                                <a  href="{{ asset($allSample->sample_file) }}" class="example-image-link" data-lightbox="image-1" data-title="{{ $allSample->sample_code }}">

                                    <img src="{{ asset($allSample->sample_file) }}" alt="Sample File"  class="example-image"  height="400px" width="500px"/>

                                </a>



{{--                            <div class="el-card-content">--}}
{{--                                <h4 class="box-title"> {{ $allSample->sample_code }} </h4>--}}
{{--                                <small></small>--}}
{{--                                <br/>--}}
{{--                            </div>--}}

                    </div>

            @endforeach


        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

    @include('dashboard::sample.newSample')
@endsection
