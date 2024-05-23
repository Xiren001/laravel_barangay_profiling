@extends('residences.layout')

@section('content')
<div class="container p-5">
    <div class="container card mt-5">
        <div class="container show-title p-3">
            <h2 class="card-header">Certificate of Residency</h2>
        </div>

        <div class="card-body">

            <div class="container row">

                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group f-show">
                        <strong>Tracking code</strong> <br />
                        {{ $residence->tracking }}
                    </div>
                </div>
                <hr style="color:black;">


                <div class="d-md-flex gap-5 ">

                    <div class="form-group f-show">
                        <strong>Full Name</strong><br />
                        {{ $residence->name }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Address</strong><br />
                        {{ $residence->address }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Age</strong><br />
                        {{ $residence->age }}
                    </div>


                    <div class="form-group f-show">
                        <strong>Contact Number</strong><br />
                        {{ $residence->number }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Pick-up date</strong><br />
                        {{ $residence->date }}
                    </div>
                </div>


                <div class="d-md-flex gap-5 ">
                    <div class="form-group f-show">
                        <strong>Valid ID</strong><br />
                        <div class="container show">
                        <img src="/images/{{ $residence->upload_file }}" >
                        </div>
                    </div>



                    <div class="form-group f-show ">
                        <strong>Proof of Address (electricity bill etc.)</strong><br />
                        <div class="container show">
                        <img src="/images/{{ $residence->upload_file_sig }}">
                        </div>
                    </div>
                </div>

                <div class="d-md-flex gap-5 ">
                    <div class="form-group f-show">
                        <strong>Payment Method</strong><br />
                        {{ $residence->payment }}
                    </div>



                    <div class="form-group f-show">
                        <strong>Gcash Reference No</strong><br />
                        {{ $residence->ref }}
                    </div>
                </div>


                <div class="card-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group f-show">
                            <strong>Purpose</strong><br />
                            {{ $residence->bio }}
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <div class="p-2 gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary btn-sm" href="{{ URL('requested-residency') }}"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
@endsection