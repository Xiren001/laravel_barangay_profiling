@extends('residents.layout')

@section('content')
<div class="container" style="margin-bottom: 2rem;">
    <div class="container card mt-5">
        <div class="container show-title p-3">
            <h2 class="card-header">Edit Resident</h2>
        </div>

        <div class="card-body">

            <form action="{{ route('residents.update',$resident->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="r-first">

                    <div class="m">
                        <label for="inputImage" class="form-label"><strong>Profile Picture</strong></label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="inputImage">
                        <div class="img-area col-md-4" data-img="" style="width: 340px; height:240px; padding:5px;">
                            <img src="/images/{{ $resident->image }}" width="340px">
                        </div>
                        @error('image')
                        <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="r-in-e">

                        <div class="r-first-inn">

                            <div class="mb-3">
                                <label for="inputFirstname" class="form-label"><strong>First Name</strong></label>
                                <input type="text" name="firstname" value="{{ $resident->firstname }}" class="form-control @error('firstname') is-invalid @enderror" id="inputFirstname" placeholder="First Name">
                                @error('firstname')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputMiddlename" class="form-label"><strong>Middle Name</strong></label>
                                <input type="text" name="middlename" value="{{ $resident->middlename }}" class="form-control @error('middlename') is-invalid @enderror" id="inputMiddlename" placeholder="Middle Name">
                                @error('middlename')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputLastname" class="form-label"><strong>Last Name</strong></label>
                                <input type="text" name="lastname" value="{{ $resident->lastname }}" class="form-control @error('lastname') is-invalid @enderror" id="inputLastname" placeholder="Last Name">
                                @error('lastname')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="r-first-inn">

                            <div class="mb-3">
                                <label for="inputAddress" class="form-label"><strong>Address</strong></label>
                                <input type="text" name="address" value="{{ $resident->address }}" class="form-control @error('address') is-invalid @enderror" id="inputAddress" placeholder="Address">
                                @error('address')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputSuffix" class="form-label"><strong>Suffix</strong></label>
                                <select name="suffix" class="form-control @error('suffix') is-invalid @enderror" id="inputSuffix">
                                    <option value="">Select Suffix</option>
                                    <option value="Jr" {{ $resident->suffix == 'Jr' ? 'selected' : '' }}>Jr</option>
                                    <option value="Sr" {{ $resident->suffix == 'Sr' ? 'selected' : '' }}>Sr</option>
                                    <option value="II" {{ $resident->suffix == 'II' ? 'selected' : '' }}>II</option>
                                    <option value="III" {{ $resident->suffix == 'III' ? 'selected' : '' }}>III</option>
                                    <option value="IV" {{ $resident->suffix == 'IV' ? 'selected' : '' }}>IV</option>
                                    <option value="V" {{ $resident->suffix == 'V' ? 'selected' : '' }}>V</option>
                                    <option value="none" {{ $resident->suffix == 'none' ? 'selected' : '' }}>none</option>
                                </select>
                                @error('suffix')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputJobStatus" class="form-label"><strong>Job Status</strong></label>
                                <select name="job_status" class="form-control @error('job_status') is-invalid @enderror" id="inputJobStatus">
                                    <option value="">Select Job Status</option>
                                    <option value="Employed" {{ $resident->job_status == 'Employed' ? 'selected' : '' }}>Employed</option>
                                    <option value="Unemployed" {{ $resident->job_status == 'Unemployed' ? 'selected' : '' }}>Unemployed</option>
                                    <option value="Student" {{ $resident->job_status == 'Student' ? 'selected' : '' }}>Student</option>
                                    <option value="Retired" {{ $resident->job_status == 'Retired' ? 'selected' : '' }}>Retired</option>
                                    <option value="Other" {{ $resident->job_status == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('job_status')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>

                        <div class="r-first-inn">


                            <div class="mb-3">
                                <label for="inputBlock" class="form-label"><strong>Block</strong></label>
                                <select name="block" class="form-control @error('block') is-invalid @enderror" id="inputBlock">
                                    <option value="">Select Block</option>
                                    <option value="1" {{ $resident->block == '1' ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ $resident->block == '2' ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ $resident->block == '3' ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ $resident->block == '4' ? 'selected' : '' }}>4</option>
                                    <option value="5" {{ $resident->block == '5' ? 'selected' : '' }}>5</option>
                                    <option value="6" {{ $resident->block == '6' ? 'selected' : '' }}>6</option>
                                    <option value="7" {{ $resident->block == '7' ? 'selected' : '' }}>7</option>
                                    <option value="8" {{ $resident->block == '8' ? 'selected' : '' }}>8</option>
                                    <option value="9" {{ $resident->block == '9' ? 'selected' : '' }}>9</option>
                                    <option value="10" {{ $resident->block == '10' ? 'selected' : '' }}>10</option>

                                </select>
                                @error('block')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="inputStreet" class="form-label"><strong>Street</strong></label>
                                <input type="text" name="street" value="{{ $resident->street }}" class="form-control @error('street') is-invalid @enderror" id="inputStreet" placeholder="Street">
                                @error('street')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputSubdPurok" class="form-label"><strong>Purok</strong></label>
                                <select name="subd_purok" class="form-control @error('subd_purok') is-invalid @enderror" id="inputSubdPurok">
                                    <option value="">Select Purok</option>
                                    <option value="1" {{ $resident->subd_purok == '1' ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ $resident->subd_purok == '2' ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ $resident->subd_purok == '3' ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ $resident->subd_purok == '4' ? 'selected' : '' }}>4</option>
                                    <option value="5" {{ $resident->subd_purok == '5' ? 'selected' : '' }}>5</option>
                                    <option value="6" {{ $resident->subd_purok == '6' ? 'selected' : '' }}>6</option>
                                    <option value="7" {{ $resident->subd_purok == '7' ? 'selected' : '' }}>7</option>
                                    <option value="8" {{ $resident->subd_purok == '8' ? 'selected' : '' }}>8</option>
                                    <option value="9" {{ $resident->subd_purok == '9' ? 'selected' : '' }}>9</option>
                                    <option value="10" {{ $resident->subd_purok == '10' ? 'selected' : '' }}>10</option>

                                </select>
                                @error('subd_purok')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
                <div class="r-div">
                    <div class="r-second">
                        <div class="r-second-in">
                            <div class="mb-3">
                                <label for="inputBirthplace" class="form-label"><strong>Birthplace</strong></label>
                                <input type="text" name="birthplace" value="{{ $resident->birthplace }}" class="form-control @error('birthplace') is-invalid @enderror" id="inputBirthplace" placeholder="Birthplace">
                                @error('birthplace')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputBirthday" class="form-label"><strong>Birthday</strong></label>
                                <input type="date" name="birthday" value="{{ $resident->birthday }}" class="form-control @error('birthday') is-invalid @enderror" id="inputBirthday">
                                @error('birthday')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputAge" class="form-label"><strong>Age</strong></label>
                                <input type="number" name="age" value="{{ $resident->age }}" class="form-control @error('age') is-invalid @enderror" id="inputAge" placeholder="Age">
                                @error('age')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputGender" class="form-label"><strong>Gender</strong></label>
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror" id="inputGender">
                                    <option value="">Select Gender</option>
                                    <option value="Male" {{ $resident->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ $resident->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                    <option value="Other" {{ $resident->gender == 'Other' ? 'selected' : '' }}>Other</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('gender')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                    </div>


                    <div class="r-second">
                        <div class="r-second-in">

                            <div class="mb-3">
                                <label for="inputCivilStatus" class="form-label"><strong>Civil Status</strong></label>
                                <select name="civil_status" class="form-control @error('civil_status') is-invalid @enderror" id="inputCivilStatus">
                                    <option value="">Select Civil Status</option>
                                    <option value="Single" {{ $resident->civil_status == 'Single' ? 'selected' : '' }}>Single</option>
                                    <option value="Married" {{ $resident->civil_status == 'Married' ? 'selected' : '' }}>Married</option>
                                    <option value="Widowed" {{ $resident->civil_status == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                    <option value="Divorced" {{ $resident->civil_status == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                    <option value="Separated" {{ $resident->civil_status == 'Separated' ? 'selected' : '' }}>Separated</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('civil_status')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="inputCitizenship" class="form-label"><strong>Citizenship</strong></label>
                                <select name="citizenship" class="form-control @error('citizenship') is-invalid @enderror" id="inputCitizenship">
                                    <option value="">Select Citizenship</option>
                                    <option value="American" {{ $resident->citizenship == 'American' ? 'selected' : '' }}>American</option>
                                    <option value="Canadian" {{ $resident->citizenship == 'Canadian' ? 'selected' : '' }}>Canadian</option>
                                    <option value="Filipino" {{ $resident->citizenship == 'Filipino' ? 'selected' : '' }}>Filipino</option>
                                    <option value="Indian" {{ $resident->citizenship == 'Indian' ? 'selected' : '' }}>Indian</option>
                                    <option value="Japanese" {{ $resident->citizenship == 'Japanese' ? 'selected' : '' }}>Japanese</option>
                                    <option value="Other" {{ $resident->citizenship == 'Other' ? 'selected' : '' }}>Other</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('citizenship')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="inputEmail" class="form-label"><strong>Email</strong></label>
                                <input type="email" name="email" value="{{ $resident->email }}" class="form-control @error('email') is-invalid @enderror" id="inputEmail" placeholder="Email">
                                @error('email')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputReligion" class="form-label"><strong>Religion</strong></label>
                                <select name="religion" class="form-control @error('religion') is-invalid @enderror" id="inputReligion">
                                    <option value="">Select Religion</option>
                                    <option value="Christianity" {{ $resident->religion == 'Christianity' ? 'selected' : '' }}>Christianity</option>
                                    <option value="Islam" {{ $resident->religion == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Hinduism" {{ $resident->religion == 'Hinduism' ? 'selected' : '' }}>Hinduism</option>
                                    <option value="Buddhism" {{ $resident->religion == 'Buddhism' ? 'selected' : '' }}>Buddhism</option>
                                    <option value="Judaism" {{ $resident->religion == 'Judaism' ? 'selected' : '' }}>Judaism</option>
                                    <option value="Atheism" {{ $resident->religion == 'Atheism' ? 'selected' : '' }}>Atheism</option>
                                    <option value="Other" {{ $resident->religion == 'Other' ? 'selected' : '' }}>Other</option>

                                </select>
                                @error('religion')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>
                    </div>

                    <div class="r-second">
                        <div class="r-second-in">
                            <div class="mb-3">
                                <label for="inputBloodType" class="form-label"><strong>Blood Type</strong></label>
                                <select name="blood_type" class="form-control @error('blood_type') is-invalid @enderror" id="inputBloodType">
                                    <option value="">Select Blood Type</option>
                                    <option value="A+" {{ $resident->blood_type == 'A+' ? 'selected' : '' }}>A+</option>
                                    <option value="A-" {{ $resident->blood_type == 'A-' ? 'selected' : '' }}>A-</option>
                                    <option value="B+" {{ $resident->blood_type == 'B+' ? 'selected' : '' }}>B+</option>
                                    <option value="B-" {{ $resident->blood_type == 'B-' ? 'selected' : '' }}>B-</option>
                                    <option value="AB+" {{ $resident->blood_type == 'AB+' ? 'selected' : '' }}>AB+</option>
                                    <option value="AB-" {{ $resident->blood_type == 'AB-' ? 'selected' : '' }}>AB-</option>
                                    <option value="O+" {{ $resident->blood_type == 'O+' ? 'selected' : '' }}>O+</option>
                                    <option value="O-" {{ $resident->blood_type == 'O-' ? 'selected' : '' }}>O-</option>
                                    <option value="N/A" {{ $resident->blood_type == 'N/A' ? 'selected' : '' }}>N/A</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('blood_type')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="inputVotersID" class="form-label"><strong>Voters ID</strong></label>
                                <input type="number" name="voters_id" value="{{ $resident->voters_id }}" class="form-control @error('voters_id') is-invalid @enderror" id="inputVotersID" placeholder="Voters ID">
                                @error('voters_id')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputPresinctNo" class="form-label"><strong>Precinct No</strong></label>
                                <input type="number" name="presinct_no" value="{{ $resident->presinct_no }}" class="form-control @error('presinct_no') is-invalid @enderror" id="inputPresinctNo" placeholder="Precinct No">
                                @error('presinct_no')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputContactNumber" class="form-label"><strong>Contact Number</strong></label>
                                <input type="number" name="contact_number" value="{{ $resident->contact_number }}" class="form-control @error('contact_number') is-invalid @enderror" id="inputContactNumber" placeholder="Contact Number">
                                @error('contact_number')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="r-second">
                        <div class="r-second-in">
                            <div class="mb-3">
                                <label for="inputHouseholdID" class="form-label"><strong>Household ID</strong></label>
                                <input type="number" name="household_id" value="{{ $resident->household_id }}" class="form-control @error('household_id') is-invalid @enderror" id="inputHouseholdID" placeholder="Household ID">
                                @error('household_id')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputOccupation" class="form-label"><strong>Occupation</strong></label>
                                <input type="text" name="occupation" value="{{ $resident->occupation }}" class="form-control @error('occupation') is-invalid @enderror" id="inputOccupation" placeholder="Occupation">
                                @error('occupation')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputDisabilities" class="form-label"><strong>Disabilities</strong></label>
                                <select name="disabilities" class="form-control @error('disabilities') is-invalid @enderror" id="inputDisabilities">
                                    <option value="">Select Disabilities</option>
                                    <option value="None" {{ $resident->disabilities == 'None' ? 'selected' : '' }}>None</option>
                                    <option value="Visual impairment" {{ $resident->disabilities == 'Visual impairment' ? 'selected' : '' }}>Visual impairment</option>
                                    <option value="Hearing impairment" {{ $resident->disabilities == 'Hearing impairment' ? 'selected' : '' }}>Hearing impairment</option>
                                    <option value="Physical disability" {{ $resident->disabilities == 'Physical disability' ? 'selected' : '' }}>Physical disability</option>
                                    <option value="Intellectual disability" {{ $resident->disabilities == 'Intellectual disability' ? 'selected' : '' }}>Intellectual disability</option>
                                    <option value="Other" {{ $resident->disabilities == 'Other' ? 'selected' : '' }}>Other</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('disabilities')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputEmergencyContacts" class="form-label"><strong>Emergency Contacts</strong></label>
                                <input type="number" name="emergency_contacts" value="{{ $resident->emergency_contacts }}" class="form-control @error('emergency_contacts') is-invalid @enderror" id="inputEmergencyContacts" placeholder="Emergency Contacts">
                                @error('emergency_contacts')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>
                    </div>
                </div>


                <div class="card-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary btn-sm" href="{{ route('residents.index') }}">Cancel</a>
                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection