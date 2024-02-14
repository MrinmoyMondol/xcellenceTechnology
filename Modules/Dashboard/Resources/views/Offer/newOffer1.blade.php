<!-- Modal -->
<div class="modal fade" id="newOffer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                    <input type="text" name="txt_startDate" id="startDate" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>End Date & Time</label>
                                                    <input type="text" name="txt_endDate" id="endDate" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
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


