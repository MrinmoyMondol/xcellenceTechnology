<!-- Modal -->
<div class="modal fade" id="newWork" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title  text-white" id="exampleModalLongTitle">
                    Previous Work Information
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
                                <form action="{{ route('dashboard.addWork') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">

                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Title <span class="required">*</span></label>
                                                    <input type="text" id="firstName" name="txt_title" class="form-control" placeholder="Enter Sample Code">
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Link <span class="required">*</span></label>
                                                    <input type="url" class="form-control" name="txt_url">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Type <span class="required">*</span></label>

                                                    <select name="txt_workType" class="form-control" id="">
                                                        <option value="">Select Type</option>
                                                        <option value="Web">Web</option>
                                                        <option value="Graphics">Graphics</option>
                                                        <option value="Data_Entry">Data Entry</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <!--/span-->

                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> File <span class="required">*</span></label>
                                                    <input type="file" class="form-control" name="txt_workFile">
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

        </div>
    </div>
</div>
