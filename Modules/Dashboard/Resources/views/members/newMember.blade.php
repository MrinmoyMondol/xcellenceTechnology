<!-- Modal -->
<div class="modal fade" id="newMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title  text-white" id="exampleModalLongTitle">
                    Admin Information
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <form action="{{ route('dashboard.registration') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <h3 class="card-title">Person Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" id="firstName" name="txt_firstName" class="form-control" placeholder="Enter First Name">
                                            </div>
                                            </div>
                                            <!--/span-->

                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" name="txt_lastName" id="lastName" class="form-control " placeholder="Enter Last Name">
                                                </div>
                                                <!--/span-->
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Gender</label>
                                                    <select class="form-control custom-select" name="txt_gender">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input type="date" name="txt_dob" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <!--/span-->

                                        </div>
                                        <!--/row-->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Phone NUmber</label>
                                                    <input type="text" name="txt_phone" class="form-control" >
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Designation</label>
                                                    <input type="text" name="txt_designation" class="form-control" >
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Avatar</label>
                                                    <input type="file" name="txt_thumb" class="form-control" >
                                                </div>
                                            </div>
                                        </div>


                                        <!--/row-->
                                        <h3 class="box-title m-t-40">Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea name="txt_address" id="" class="form-control" cols="5" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" name="txt_city">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Postal Code</label>
                                                    <input type="text" class="form-control" name="txt_postalCode">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Login Information</h4>

                                                        <div class="form-group">
                                                            <label for="exampleInputuname">User Name</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" name="txt_userName" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon2"><i class="ti-email"></i></span>
                                                                </div>
                                                                <input type="email" class="form-control" name="txt_email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd1">Password</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon3"><i class="ti-lock"></i></span>
                                                                </div>
                                                                <input type="password" name="txt_pass" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon3">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd2">Confirm Password</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                                                                </div>
                                                                <input type="password" class="form-control" name="txt_confirmPass" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon4">
                                                            </div>
                                                        </div>


                                                </div>
                                            </div>
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

        </div>
    </div>
</div>
