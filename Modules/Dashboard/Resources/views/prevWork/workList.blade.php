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
                <h4 class="text-themecolor">All Previous Work</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Previous Work</li>
                    </ol>
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#newWork"><i class="fa fa-plus-circle"></i> Create New</button>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->


            <div class="card-columns el-element-overlay">

            @foreach($allWorks as $allWork)
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1">

                            <div class="popup-gallery ">

                                <a  href="{{ asset($allWork->work_file) }}" class="image-popup-no-margins" data-lightbox="image-1" data-title="{{ $allWork->work_title }}">

                                    <img src="{{ asset($allWork->work_file) }}" alt="Sample File"  class="example-image" />

                                </a>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <p class="box-title">
                                <a href="{{ asset($allWork->work_link) }}"> {{ $allWork->work_title }} </a>
                            </p>
                            <br/>

                            <a href="{{ route('dashboard.deleteWork',$allWork->id ) }}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
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

    @include('dashboard::prevWork.newWork')
@endsection
