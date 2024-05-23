@extends('indegencys.layout')

@section('content')
<div class="container p-5">
    <div class="container card mt-5">
        <div class="container show-title p-3">
            <h2 class="card-header">Certificate of Indigency</h2>
        </div>

        <div class="card-body">

            <div class="container row">

                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group f-show">
                        <strong>Tracking code</strong> <br />
                        {{ $indegency->tracking }}
                    </div>
                </div>
                <hr style="color:black;">


                <div class="d-md-flex gap-5 ">

                    <div class="form-group f-show">
                        <strong>Full Name</strong><br />
                        {{ $indegency->name }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Address</strong><br />
                        {{ $indegency->address }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Age</strong><br />
                        {{ $indegency->age }}
                    </div>


                    <div class="form-group f-show">
                        <strong>Contact Number</strong><br />
                        {{ $indegency->number }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Pick-up date</strong><br />
                        {{ $indegency->date }}
                    </div>
                </div>


                <div class="d-md-flex gap-5 ">
                    <div class="form-group f-show">
                        <strong>Valid ID</strong><br />
                        <div class="container show">
                        <img src="/images/{{ $indegency->upload_file }}" >
                        </div>
                    </div>



                    <div class="form-group f-show ">
                        <strong>Upload Proof of Income</strong><br />
                        <div class="container show">
                        <img src="/images/{{ $indegency->upload_file_sig }}">
                        </div>
                    </div>
                </div>

                <div class="d-md-flex gap-5 ">
                    <div class="form-group f-show">
                        <strong>Payment Method</strong><br />
                        {{ $indegency->payment }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Gcash Reference No</strong><br />
                        {{ $indegency->ref }}
                    </div>
                </div>


                <div class="card-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group f-show">
                            <strong>Purpose</strong><br />
                            {{ $indegency->bio }}
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <div class="p-2 gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary btn-sm" href="{{ URL('requested-indigency') }}"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
@endsection