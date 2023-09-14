
<!-- Modal -->
<div class="modal fade" id="viewCustomerMail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_header"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">




                <div class="row">
                    <div class="col-md-6">
                        <strong id="client_name"></strong>
                            <p> <strong> Phone:</strong>  <span id="phone"></span></p>
                            <p> <strong> Email: </strong>  <span id="email"></span></p>
                            <p class="text-justify"> <strong> Description:</strong>  <span id="description"></span></p>
                            <p class="text-justify"> <strong> Comments:</strong>  <span id="comments"></span></p>

                    </div>
                    <div class="col-md-6">
                        <div>


                            <p> <strong>Company Name: </strong> <span id="cmp_name"></span> </p>
                        </div>

                        <div class="problem_category">
                            <p> <strong>Problem Category:</strong> </p>

                            <p id="prbCat">  </p>


                        </div>


                    </div>
                </div>




                <div class="reply_section">
                    <form action="{{ route('dashboard.supportReply') }}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="txt_sendMail" id="client_email">
                        <input type="text" class="form-control" name="txt_clientID" id="client_id">


                        <div class="form-group">
                            <label for="">Subject : </label>
                            <input type="text" class="form-control" name="txt_subject" id="client_email">

                        </div>

                        <div class="form-group">
                            <label for="">Reply: </label>
                            <textarea name="txt_reply" class="form-control" id="" cols="10" rows="10"></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary float-right">Send  <i class="fa fa-paper-plane"></i> </button>


                    </form>
                </div>


            </div>

        </div>
    </div>
</div>
