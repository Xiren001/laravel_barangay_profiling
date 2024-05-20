@extends('residents.layout')
@section('content')
<div class="container">
    <div class="container card mt-5">
        <div class="container show-title p-3">
            <h2 class="card-header">Show Resident</h2>
        </div>

        <div class="card-body">
            <div class="container row">
                <div class="r-first">
                    <div class="form-group">
                    <div id="preview3" class="img-area col-md-4" data-img="" style="width: 340px; height:240px; padding:5px;">
                        <img src="/images/{{ $resident->image }}" width="340px" style="border-radius: 5px;">
                    </div>
                    </div>
                    <div class="r-in">
                        <div class="r-first-in">
                            <div class="form-group f-show">
                                <strong>First Name</strong> <br />
                                {{ $resident->firstname }}
                            </div>
                            <div class="form-group f-show">
                                <strong>Middle Name</strong> <br />
                                {{ $resident->middlename }}
                            </div>
                            <div class="form-group f-show">
                                <strong>Last Name</strong> <br />
                                {{ $resident->lastname }}
                            </div>
                        </div>
                        <div class="r-first-in">
                            <div class="form-group f-show">
                                <strong>Address</strong> <br />
                                {{ $resident->address }}
                            </div>
                            <div class="form-group f-show">
                                <strong>Suffix</strong> <br />
                                {{ $resident->suffix }}
                            </div>
                            <div class="form-group f-show">
                                <strong>Job Status</strong> <br />
                                {{ $resident->job_status }}
                            </div>
                        </div>
                        <div class="r-first-in">
                            <div class="form-group f-show">
                                <strong>Block</strong> <br />
                                {{ $resident->block }}
                            </div>
                            <div class="form-group f-show">
                                <strong>Street</strong> <br />
                                {{ $resident->street }}
                            </div>
                            <div class="form-group f-show">
                                <strong>Subdivision/Purok</strong> <br />
                                {{ $resident->subd_purok }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="r-second">
                    <div class="r-second-in">
                        <div class="form-group f-show">
                            <strong>Birthplace</strong> <br />
                            {{ $resident->birthplace }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Birthday</strong> <br />
                            {{ $resident->birthday }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Age</strong> <br />
                            {{ $resident->age }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Gender</strong> <br />
                            {{ $resident->gender }}
                        </div>

                    </div>
                </div>
                <div class="r-second">
                    <div class="r-second-in">
                        <div class="form-group f-show">
                            <strong>Civil Status</strong> <br />
                            {{ $resident->civil_status }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Citizenship</strong> <br />
                            {{ $resident->citizenship }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Email</strong> <br />
                            {{ $resident->email }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Religion</strong> <br />
                            {{ $resident->religion }}
                        </div>

                    </div>
                </div>
                <div class="r-second">
                    <div class="r-second-in">
                        <div class="form-group f-show">
                            <strong>Blood Type</strong> <br />
                            {{ $resident->blood_type }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Voters ID</strong> <br />
                            {{ $resident->voters_id }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Precinct No</strong> <br />
                            {{ $resident->presinct_no }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Contact Number</strong> <br />
                            {{ $resident->contact_number }}
                        </div>

                    </div>
                </div>
                <div class="r-second">
                    <div class="r-second-in">
                        <div class="form-group f-show">
                            <strong>Household ID</strong> <br />
                            {{ $resident->household_id }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Occupation</strong> <br />
                            {{ $resident->occupation }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Disabilities</strong> <br />
                            {{ $resident->disabilities }}
                        </div>
                        <div class="form-group f-show">
                            <strong>Emergency Contacts</strong> <br />
                            {{ $resident->emergency_contacts }}
                        </div>
                       
                    </div>
                </div>
                <div class="card-footer">
                    <div class="p-2 gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary btn-sm" href="{{ route('residents.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection