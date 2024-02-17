@extends('dashboard::layouts.master')

@section('title')
    XT || Testimonials
@endsection

@section('mainContent')

    <div class="content-wrapper">
        <div class="container-fluid">






            <div class="row mt-3">



                <div class="col-lg-12">


                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Basic Table</h5>
                            <a href="{{ route('dashboard.newTestimonial') }}" class="btn btn-primary float-right"> <i class="fa fa-plus"></i> New Testimonials</a>

                            <div class="table-responsive">
                                <table id="testimonials" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th> Image </th>
                                        <th>Client Name</th>
                                        <th>Country</th>
                                        <th>Platform</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($allTestimonials as $allTestimonial)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($allTestimonial->image) }}" alt="" width="100px" height="100px">
                                        </td>
                                        <td>{{ $allTestimonial->name }}</td>
                                        <td>{{ $allTestimonial->country }}</td>
                                        <td>{{ $allTestimonial->platform }}</td>
                                       <td>
                                           <a href="" class="btn btn-sm btn-success"> <i class="fa fa-eye"></i> </a>
                                           <a href="" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>
                                           <a href="" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                                       </td>
                                    </tr>
                                    @endforeach




                                </table>


                            </div>
                        </div>
                    </div>
                </div>

            </div><!--End Row-->



        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->



@endsection
