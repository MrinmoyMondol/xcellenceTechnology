@extends('dashboard::layouts.master')

@section('title')
    VS || Testimonials
@endsection

@section('mainContent')

    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row mt-3">


                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Testimonial  Form</div>
                            <hr>
                            <form action="{{ route('dashboard.addTestimonial') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="input-6">Name</label>
                                            <input type="text" class="form-control form-control-rounded" name="txt_name" id="input-6" placeholder="Enter Client Name">
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="input-6">Country</label>
                                            <input type="text" class="form-control form-control-rounded" name="txt_country" id="input-6" placeholder="Enter Country Name">
                                        </div>

                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="input-6">Client Comments</label>
                                    <textarea name="txt_comments" class="form-control form-control-rounded" id="" cols="10" rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="input-6">Client Image</label>
                                    <input type="file" class="form-control form-control-rounded" name="txt_file" id="">
                                </div>

                                <div class="form-group">
                                    <label for="input-6">Platform</label>
                                    <select name="txt_platform" class="form-control form-control-rounded" id="">
                                        <option value="">Select Platform</option>
                                        <option value="Fiver">Fiver</option>
                                        <option value="UpWork">UpWork</option>
                                        <option value="Freelancer">Freelancer</option>
                                    </select>
                                </div>



                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-check"></i> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->

@endsection
