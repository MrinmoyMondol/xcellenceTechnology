<!-- Modal -->
<div class="modal fade" id="newClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="txt_name" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="txt_name" class="form-control" id="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Country</label>
                                <input type="text" name="txt_name" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Platform</label>

                                <select name="txt_platform" class="form-control" id="">
                                    <option value="" selected disabled>Select Platform</option>
                                    <option value="Fiver">Fiver</option>
                                    <option value="Freelancer">Freelancer</option>
                                    <option value="Upwork">Upwork</option>
                                </select>
                            </div>
                        </div>
                    </div>




                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>


        </div>
    </div>
</div>
