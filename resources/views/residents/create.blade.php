@extends('residents.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Add New Resident</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('residents.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ route('residents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="inputFirstname" class="form-label"><strong>First Name:</strong></label>
                <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="inputFirstname" placeholder="First Name">
                @error('firstname')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputMiddlename" class="form-label"><strong>Middle Name:</strong></label>
                <input type="text" name="middlename" class="form-control @error('middlename') is-invalid @enderror" id="inputMiddlename" placeholder="Middle Name">
                @error('middlename')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputLastname" class="form-label"><strong>Last Name:</strong></label>
                <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="inputLastname" placeholder="Last Name">
                @error('lastname')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputAddress" class="form-label"><strong>Address:</strong></label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="inputAddress" placeholder="Address">
                @error('address')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputSuffix" class="form-label"><strong>Suffix:</strong></label>
                <input type="text" name="suffix" class="form-control @error('suffix') is-invalid @enderror" id="inputSuffix" placeholder="Suffix">
                @error('suffix')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputJobStatus" class="form-label"><strong>Job Status:</strong></label>
                <input type="text" name="job_status" class="form-control @error('job_status') is-invalid @enderror" id="inputJobStatus" placeholder="Job Status">
                @error('job_status')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputBlock" class="form-label"><strong>Block:</strong></label>
                <input type="text" name="block" class="form-control @error('block') is-invalid @enderror" id="inputBlock" placeholder="Block">
                @error('block')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputStreet" class="form-label"><strong>Street:</strong></label>
                <input type="text" name="street" class="form-control @error('street') is-invalid @enderror" id="inputStreet" placeholder="Street">
                @error('street')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputSubdPurok" class="form-label"><strong>Subdivision/Purok:</strong></label>
                <input type="text" name="subd_purok" class="form-control @error('subd_purok') is-invalid @enderror" id="inputSubdPurok" placeholder="Subdivision/Purok">
                @error('subd_purok')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputBirthplace" class="form-label"><strong>Birthplace:</strong></label>
                <input type="text" name="birthplace" class="form-control @error('birthplace') is-invalid @enderror" id="inputBirthplace" placeholder="Birthplace">
                @error('birthplace')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputBirthday" class="form-label"><strong>Birthday:</strong></label>
                <input type="date" name="birthday" class="form-control @error('birthday') is-invalid @enderror" id="inputBirthday">
                @error('birthday')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputAge" class="form-label"><strong>Age:</strong></label>
                <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" id="inputAge" placeholder="Age">
                @error('age')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputGender" class="form-label"><strong>Gender:</strong></label>
                <input type="text" name="gender" class="form-control @error('gender') is-invalid @enderror" id="inputGender" placeholder="Gender">
                @error('gender')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputCivilStatus" class="form-label"><strong>Civil Status:</strong></label>
                <input type="text" name="civil_status" class="form-control @error('civil_status') is-invalid @enderror" id="inputCivilStatus" placeholder="Civil Status">
                @error('civil_status')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputCitizenship" class="form-label"><strong>Citizenship:</strong></label>
                <input type="text" name="citizenship" class="form-control @error('citizenship') is-invalid @enderror" id="inputCitizenship" placeholder="Citizenship">
                @error('citizenship')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputEmail" class="form-label"><strong>Email:</strong></label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" placeholder="Email">
                @error('email')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputReligion" class="form-label"><strong>Religion:</strong></label>
                <input type="text" name="religion" class="form-control @error('religion') is-invalid @enderror" id="inputReligion" placeholder="Religion">
                @error('religion')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputBloodType" class="form-label"><strong>Blood Type:</strong></label>
                <input type="text" name="blood_type" class="form-control @error('blood_type') is-invalid @enderror" id="inputBloodType" placeholder="Blood Type">
                @error('blood_type')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputVotersID" class="form-label"><strong>Voter's ID:</strong></label>
                <input type="number" name="voters_id" class="form-control @error('voters_id') is-invalid @enderror" id="inputVotersID" placeholder="Voter's ID">
                @error('voters_id')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputPresinctNo" class="form-label"><strong>Precinct No:</strong></label>
                <input type="number" name="presinct_no" class="form-control @error('presinct_no') is-invalid @enderror" id="inputPresinctNo" placeholder="Precinct No">
                @error('presinct_no')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputContactNumber" class="form-label"><strong>Contact Number:</strong></label>
                <input type="text" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror" id="inputContactNumber" placeholder="Contact Number">
                @error('contact_number')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputHouseholdID" class="form-label"><strong>Household ID:</strong></label>
                <input type="number" name="household_id" class="form-control @error('household_id') is-invalid @enderror" id="inputHouseholdID" placeholder="Household ID">
                @error('household_id')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputOccupation" class="form-label"><strong>Occupation:</strong></label>
                <input type="text" name="occupation" class="form-control @error('occupation') is-invalid @enderror" id="inputOccupation" placeholder="Occupation">
                @error('occupation')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputDisabilities" class="form-label"><strong>Disabilities:</strong></label>
                <input type="text" name="disabilities" class="form-control @error('disabilities') is-invalid @enderror" id="inputDisabilities" placeholder="Disabilities">
                @error('disabilities')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputEmergencyContacts" class="form-label"><strong>Emergency Contacts:</strong></label>
                <input type="number" name="emergency_contacts" class="form-control @error('emergency_contacts') is-invalid @enderror" id="inputEmergencyContacts" placeholder="Emergency Contacts">
                @error('emergency_contacts')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputImage" class="form-label"><strong>Image:</strong></label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="inputImage">
                @error('image')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </form>

    </div>
</div>
@endsection