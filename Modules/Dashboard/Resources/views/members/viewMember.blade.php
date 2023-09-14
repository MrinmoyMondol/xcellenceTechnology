@extends('dashboard::layouts.master')

@section('title')
    VS || Members
@endsection

@section('mainContent')

    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Profile</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <img src="{{ asset($MemberById->avatar) }}" class="img-circle" width="150" />

                            <h4 class="card-title m-t-10">{{ $MemberById->fName }} {{ $MemberById->lName }} </h4>
                            <h6 class="card-subtitle">{{ $MemberById->designation }}</h6>
                        </center>
                    </div>
                    <div>
                        <hr> </div>
                    <div class="card-body">

                        <small class="text-muted"> Email address  </small>
                        <h6>  {{ $MemberById->email }} </h6>

                        <small class="text-muted p-t-30 db">Phone</small>
                        <h6>{{ $MemberById->phone }}</h6>

                        <small class="text-muted p-t-30 db">Address</small>
                        <address>
                            {{ $MemberById->address }} <br>
                            {{ $MemberById->city }} - {{ $MemberById->postalcode }}
                        </address>



                        <small class="text-muted p-t-30 db">Social Profile</small>
                        <br/>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!--second tab-->
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                        <br>
                                        <p class="text-muted">{{ $MemberById->fName }} {{ $MemberById->lName }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                        <br>
                                        <p class="text-muted">{{ $MemberById->phone }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">{{ $MemberById->email }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                        <br>
                                        <address class="text-muted">
                                            {{ $MemberById->address }} <br>
                                            {{ $MemberById->city }} - {{ $MemberById->postalcode }}
                                        </address>
                                    </div>
                                </div>
                                <hr>

                                <table>
                                    <tr>
                                        <td>Date of Birth : &nbsp; </td>
                                        <td>  {{ $MemberById->dob}} </td>
                                    </tr>

                                    <tr>
                                        <td>Gender : &nbsp; </td>
                                        <td>  {{ $MemberById->gender }} </td>
                                    </tr>


                                </table>



                            </div>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-body">

                                @if(\Illuminate\Support\Facades\Auth::guard('admin')->check())

                                    <p> Authenticated </p>

                                    <form class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label class="col-md-12">Full Name</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" value="{{ $MemberById->email }}" class="form-control form-control-line" name="example-email" id="example-email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">Phone No</label>
                                            <div class="col-md-12">
                                                <input type="text" value="{{ $MemberById->phone }}" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Address</label>
                                            <div class="col-md-12">
                                                <textarea rows="5" class="form-control form-control-line"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>

                                @else

                                    <p> UnAuthenticated </p>

                                    <form class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Password</label>
                                            <div class="col-md-12">
                                                <input type="password" value="password" class="form-control form-control-line">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-success">Send</button>
                                            </div>
                                        </div>
                                    </form>

                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
@endsection
