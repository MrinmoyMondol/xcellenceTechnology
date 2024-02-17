@extends('dashboard::layouts.master')

@section('title')
    XT || New Offer
@endsection

@section('mainContent')




    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Offer</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">New Offer</li>
                    </ol>
                </div>
            </div>
        </div>


        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('dashboard.addOffer') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <h3 class="card-title">Offer Info</h3>
                                <hr>




                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Image <span class="required">*</span> </label>
                                            <input type="file" name="txt_thumb" class="form-control" >
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date & Time</label>
                                            <input type="text" id="startDate" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>End Date & Time</label>
                                            <input type="text" id="endDate" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>




                            </div>



                            <div class="form-actions float-right">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-inverse" data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->


    </div>


    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('dashboard_asset/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('dashboard_asset/assets/node_modules/moment/moment.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>







    <script>

        $('#startDate').bootstrapMaterialDatePicker({
            format : 'DD/MM/YYYY HH:mm',
            minDate : new Date()
        });

        $('#endDate').bootstrapMaterialDatePicker({
            format : 'DD/MM/YYYY HH:mm',
            minDate : new Date()
        });

    </script>



@endsection
