<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>XT || Registration</title>
    <!-- loader-->
    <link href="{{asset('dashboard_asset/assets/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/js/pace.min.js')}}"></script>
    <!--favicon-->
    <link rel="icon" href="{{asset('dashboard_asset/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="{{asset('dashboard_asset/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{asset('dashboard_asset/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{asset('dashboard_asset/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Custom Style-->
    <link href="{{asset('dashboard_asset/assets/css/app-style.css')}}" rel="stylesheet"/>

</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
<!-- end loader -->

<!-- Start wrapper-->
<div id="wrapper">

    <div class="card card-authentication1 mx-auto my-4">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="{{asset('dashboard_asset/assets/images/logo-icon.png')}}" alt="logo icon">
                </div>
                <div class="card-title text-uppercase text-center py-3">Sign Up</div>
                <form action="{{ route('dashboard.registration') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputName" class="sr-only">First Name</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" id="exampleInputName" name="txt_firstName"
                                           class="form-control input-shadow" placeholder="Enter Your First Name">
                                    <div class="form-control-position">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmailId" class="sr-only">Last Name</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" id="exampleInputEmailId" name="txt_lastName"
                                           class="form-control input-shadow" placeholder="Enter Your Last Name">
                                    <div class="form-control-position">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="form-group">
                        <label for="exampleInputEmailId" class="sr-only">User Name</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="exampleInputEmailId" name="txt_userName" class="form-control input-shadow" placeholder="Enter Your User Name">
                            <div class="form-control-position">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword" class="sr-only">Email</label>
                        <div class="position-relative has-icon-right">
                            <input type="email" id="exampleInputPassword" name="txt_email" class="form-control input-shadow" placeholder="Enter Email">
                            <div class="form-control-position">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="exampleInputPassword" class="sr-only">Phone Number</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="exampleInputPassword" name="txt_phone" class="form-control input-shadow" placeholder="Enter Phone Number">
                            <div class="form-control-position">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="exampleInputPassword" class="sr-only">Password</label>
                        <div class="position-relative has-icon-right">
                            <input type="password" id="exampleInputPassword" name="txt_pass" class="form-control input-shadow" placeholder="Choose Password">
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>





                    <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>


                </form>
            </div>
        </div>

    </div>



</div><!--wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="{{asset('dashboard_asset/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('dashboard_asset/assets/js/popper.min.js')}}"></script>
<script src="{{asset('dashboard_asset/assets/js/bootstrap.min.js')}}"></script>

<!-- sidebar-menu js -->
<script src="{{asset('dashboard_asset/assets/js/sidebar-menu.js')}}"></script>

<!-- Custom scripts -->
<script src="{{asset('dashboard_asset/assets/js/app-script.js')}}"></script>

</body>
</html>
