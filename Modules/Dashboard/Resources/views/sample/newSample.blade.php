<!-- Modal -->
<div class="modal fade" id="newSample" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title  text-white" id="exampleModalLongTitle">
                    Sample Information
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
                                <form action="{{ route('dashboard.addSample') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">

                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Sample Code <span class="required">*</span></label>
                                                    <input type="text" id="firstName" name="txt_sampleCode" class="form-control" placeholder="Enter Sample Code">
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Sample File <span class="required">*</span></label>
                                                    <input type="file" class="form-control" name="txt_sampleFile">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>


                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="txt_description" id="" cols="5" rows="5"></textarea>
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
