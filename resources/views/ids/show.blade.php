@extends('bussinesses.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Show Business</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href=""><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Tracking code:</strong> <br />
                    {{ $bussiness->tracking }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Full Name:</strong><br />
                    {{ $bussiness->name }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Address:</strong><br />
                    {{ $bussiness->address }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Date of Birth:</strong><br />
                    {{ $bussiness->dateb }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Contact Number:</strong><br />
                    {{ $bussiness->number }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Pick-up date:</strong><br />
                    {{ $bussiness->date }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Community Tax Certificate (Cedula) Image:</strong><br />
                    <img src="/images/{{ $bussiness->upload_file }}" width="500px">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>DTI Business Name Registration Image:</strong><br />
                    <img src="/images/{{ $bussiness->upload_file_sig }}" width="500px">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Payment Method:</strong><br />
                    {{ $bussiness->payment }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Gcash Reference No:</strong><br />
                    {{ $bussiness->ref }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Purpose:</strong><br />
                    {{ $bussiness->bio }}
                </div>
            </div>

        </div>

    </div>
</div>
@endsection