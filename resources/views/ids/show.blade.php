@extends('ids.layout')

@section('content')
<div class="container p-5">
    <div class="container card mt-5">
        <div class="container show-title p-3">
            <h2 class="card-header">Barangay ID</h2>
        </div>

        <div class="card-body">

            <div class="container row">

                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group f-show">
                        <strong>Tracking code</strong> <br />
                        {{ $id->tracking }}
                    </div>
                </div>
                <hr style="color:black;">


                <div class="d-md-flex gap-5 ">

                    <div class="form-group f-show">
                        <strong>Full Name</strong><br />
                        {{ $id->name }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Address</strong><br />
                        {{ $id->address }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Date of Birth</strong><br />
                        {{ $id->dateb }}
                    </div>


                    <div class="form-group f-show">
                        <strong>Contact Number</strong><br />
                        {{ $id->number }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Pick-up date</strong><br />
                        {{ $id->date }}
                    </div>
                </div>


                <div class="d-md-flex gap-5 ">
                    <div class="form-group f-show">
                        <strong>Community Tax Certificate (Cedula)</strong><br />
                        <div class="container show">
                        <img src="/images/{{ $id->upload_file }}" >
                        </div>
                    </div>



                    <div class="form-group f-show ">
                        <strong>DTI Business Name Registration</strong><br />
                        <div class="container show">
                        <img src="/images/{{ $id->upload_file_sig }}">
                        </div>
                    </div>
                </div>

                <div class="d-md-flex gap-5 ">
                    <div class="form-group f-show">
                        <strong>Payment Method</strong><br />
                        {{ $id->payment }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Gcash Reference No</strong><br />
                        {{ $id->ref }}
                    </div>
                </div>


                <div class="card-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group f-show">
                            <strong>Purpose</strong><br />
                            {{ $id->bio }}
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <div class="p-2 gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary btn-sm" href="{{ URL('requested-id') }}"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
@endsection