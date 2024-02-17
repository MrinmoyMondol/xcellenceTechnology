@extends('dashboard::layouts.master')

@section('title')
    XT || Customer Support
@endsection

@section('mainContent')

    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row mt-3">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Customer Support Table</h5>

                            <div class="table-responsive">
                                <table id="testimonials" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th> SL </th>
                                        <th>Customer Name</th>
                                        <th>Company Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php
                                        $i = 1;
                                    @endphp

                                    @foreach($allMessages as $allMessage)
                                        <tr>


                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>{{ $allMessage->name }}</td>
                                            <td>{{ $allMessage->cmp_name }}</td>
                                            <td>{{ $allMessage->email }}</td>
                                            <td>{{ $allMessage->phone }}</td>


                                            <td>

                                                @if($allMessage->status ==0 )
                                                    <button  id="replyMailModal"
                                                       class="btn btn-danger btn-sm" data-toggle="modal" data-id="{{$allMessage->id}}"
                                                            data-target="#replyMail">
                                                        UnSend
                                                    </button>
                                                @else
                                                    <h5> <span class="text-success font-bold">Send</span> </h5>
                                                @endif

                                            </td>


                                            <td>
                                                <a href="" id="viewSupportDetails" class="btn btn-sm btn-success"
                                                   data-toggle="modal" data-id="{{$allMessage->id}}" data-target="#viewClientDetails">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <a href="" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div><!--End Row-->



        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->

@include('dashboard::support.viewSupport')
@include('dashboard::support.supReply')



@endsection
