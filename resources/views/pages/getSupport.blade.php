@extends('master')

@section('title')
   Xcellence Technology || Get IT Support
@endsection

@section('mainContent')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Get IT Support</h2>
                        <ul>
                            <li><a href="{{ route('welcomePage') }}">Home</a></li>

                            <li>Get IT Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- ======= Contact Section ======= -->
    <section id="getItSupport" class="getItSupport ">
        <div class="container" data-aos="fade-up">

            <div class="section-title ">
                <h2>Get IT Support</h2>
            </div>

            <div class="row gx-lg-0 gy-4 justify-content-md-center">

                <div class="col-lg-10">

                    <div class="support_form">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <form action="{{ route('sendQuotes') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name <span class="text-danger">*</span></label>

                                        <input type="text" name="txt_name" id="email" class="form-control" required="" placeholder="Your Email">
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone Number <span class="text-danger">*</span> </label>
                                                <input type="text" name="txt_number" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email <span class="text-danger">*</span></label>
                                                <input type="email" name="txt_email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Company Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="txt_cmpName" class="form-control" id="exampleInputPassword1" placeholder="Enter Company Name">
                                    </div>


                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Problem Category <span class="text-danger">*</span> </label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" name="problem[]" class="form-check-input" id="exampleCheck1" value="Software">
                                                <label class="form-check-label" for="exampleCheck1">Software</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="problem[]" class="form-check-input" id="exampleCheck1" value="Web Application">
                                                <label class="form-check-label" for="exampleCheck1">Web Application</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="problem[]" class="form-check-input" id="exampleCheck1" value="Graphics Design">
                                                <label class="form-check-label" for="exampleCheck1">Graphics Design</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="problem[]" class="form-check-input" id="exampleCheck1" value="E-Commerce Solution">
                                                <label class="form-check-label" for="exampleCheck1">E-Commerce Solution</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="problem[]" class="form-check-input" id="exampleCheck1" value="Virtual Assistant">
                                                <label class="form-check-label" for="exampleCheck1">Virtual Assistant</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox"  name="problem[]" class="form-check-input" id="exampleCheck1" value="Lead Generation">
                                                <label class="form-check-label" for="exampleCheck1">Lead Generation</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="problem[]" class="form-check-input" id="exampleCheck1" value="Digital Marketing">
                                                <label class="form-check-label" for="exampleCheck1">Digital Marketing</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description <span class="text-danger">*</span> </label>
                                                <textarea name="txt_description" class="form-control" id="" cols="10" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <br>


                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Comments or Question <span class="text-danger">*</span> </label>
                                                <textarea name="txt_comments" class="form-control" id="" cols="10" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success float-right">Submit <i class="fa fa-paper-plane"></i> </button>

                                </form>
                            </div>
                        </div>
                    </div>








                </div>



            </div>

        </div>
    </section><!-- End Contact Section -->



@endsection
