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
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-overlay-1">
                                <img src="{{ asset($allSample->sample_file) }}" alt="Sample File"   height="500px"/>
                                <div class="el-overlay">
                                    <ul class="el-info">
                                        <li>
                                            <a class="btn default btn-outline " href="">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn default btn-outline" href="javascript:void(0);">
                                                <i class="icon-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="box-title"> {{ $allSample->sample_code }} </h4>
                                <small></small>
                                <br/> </div>
                        </div>
                    </div>
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
