<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div class="bg-dark">
        <h3 class="text-white text-center">residence</h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">add resident</h3>
                    </div>
                    <form action="{{ route('residence.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="image" class="form-label">image</label>
                                <input type="file" class="form-control form-control-lg" placeholder=" image" name="image" id="image">
                            </div>

                            <div class="mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input value="{{ old('firstname')}}" type="text" class="@error('firstname') is-invalid @enderror form-control form-control-lg" placeholder="First Name" name="firstname" id="firstname">
                                @error('firstname')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="middlename" class="form-label">Middle Name</label>
                                <input value="{{ old('middlename')}}" type="text" class="@error('middlename') is-invalid @enderror form-control form-control-lg" placeholder="Middle Name" name="middlename" id="middlename">
                                @error('middlename')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input value="{{ old('lastname')}}" type="text" class="@error('lastname') is-invalid @enderror form-control form-control-lg" placeholder="Last Name" name="lastname" id="lastname">
                                @error('lastname')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input value="{{ old('address')}}" type="text" class="@error('address') is-invalid @enderror form-control form-control-lg" placeholder="Address" name="address" id="address">
                                @error('address')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="birthdate" class="form-label">Birthdate</label>
                                <input value="{{ old('birthdate')}}" type="date" class="@error('birthdate') is-invalid @enderror form-control form-control-lg" name="birthdate" id="birthdate">
                                @error('birthdate')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input value="{{ old('age')}}" type="number" class="@error('age') is-invalid @enderror form-control form-control-lg" name="age" id="age">
                                @error('age')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select value="{{ old('gender')}}" class="@error('gender') is-invalid @enderror form-select form-select-lg" name="gender" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                @error('gender')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="civil_status" class="form-label">Civil Status</label>
                                <input value="{{ old('civil_status')}}" type="text" class="@error('civil_status') is-invalid @enderror form-control form-control-lg" placeholder="Civil Status" name="civil_status" id="civil_status">
                                @error('civil_status')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input value="{{ old('email')}}" type="email" class="@error('email') is-invalid @enderror form-control form-control-lg" placeholder="Email Address" name="email" id="email">
                                @error('email')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="contact_number" class="form-label">Contact Number</label>
                                <input value="{{ old('contact_number')}}" type="text" class="@error('contact_number') is-invalid @enderror form-control form-control-lg" placeholder="Contact Number" name="contact_number" id="contact_number">
                                @error('contact_number')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="suffix" class="form-label">Suffix</label>
                                <input value="{{ old('suffix')}}" type="text" class="@error('suffix') is-invalid @enderror form-control form-control-lg" placeholder="Suffix" name="suffix" id="suffix">
                                @error('suffix')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="job_status" class="form-label">Job Status</label>
                                <input value="{{ old('job_status')}}" type="text" class="@error('job_status') is-invalid @enderror form-control form-control-lg" placeholder="Job Status" name="job_status" id="job_status">
                                @error('job_status')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="block" class="form-label">Block</label>
                                <input value="{{ old('block')}}" type="text" class="@error('block') is-invalid @enderror form-control form-control-lg" placeholder="Block" name="block" id="block">
                                @error('block')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="street" class="form-label">Street</label>
                                <input value="{{ old('street')}}" type="text" class="@error('street') is-invalid @enderror form-control form-control-lg" placeholder="Street" name="street" id="street">
                                @error('street')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subd_purok" class="form-label">Subdivision/Purok</label>
                                <input value="{{ old('subd_purok')}}" type="text" class="@error('subd_purok') is-invalid @enderror form-control form-control-lg" placeholder="Subdivision/Purok" name="subd_purok" id="subd_purok">
                                @error('subd_purok')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="birthplace" class="form-label">Birthplace</label>
                                <input value="{{ old('birthplace')}}" type="text" class="@error('birthplace') is-invalid @enderror form-control form-control-lg" placeholder="Birthplace" name="birthplace" id="birthplace">
                                @error('birthplace')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="citizenship" class="form-label">Citizenship</label>
                                <input value="{{ old('citizenship')}}" type="text" class="@error('citizenship') is-invalid @enderror form-control form-control-lg" placeholder="Citizenship" name="citizenship" id="citizenship">
                                @error('citizenship')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="religion" class="form-label">Religion</label>
                                <input value="{{ old('religion')}}" type="text" class="@error('religion') is-invalid @enderror form-control form-control-lg" placeholder="Religion" name="religion" id="religion">
                                @error('religion')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="blood_type" class="form-label">Blood Type</label>
                                <input value="{{ old('blood_type')}}" type="text" class="@error('blood_type') is-invalid @enderror form-control form-control-lg" placeholder="Blood Type" name="blood_type" id="blood_type">
                                @error('blood_type')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="voters_id" class="form-label">Voter's ID</label>
                                <input value="{{ old('voters_id')}}" type="number" class="@error('voters_id') is-invalid @enderror form-control form-control-lg" placeholder="Voter's ID" name="voters_id" id="voters_id">
                                @error('voters_id')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="precinct_no" class="form-label">Precinct Number</label>
                                <input value="{{ old('precinct_no')}}" type="number" class="@error('precinct_no') is-invalid @enderror form-control form-control-lg" placeholder="Precinct Number" name="precinct_no" id="precinct_no">
                                @error('precinct_no')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="occupation" class="form-label">Occupation</label>
                                <input value="{{ old('occupation')}}" type="text" class="@error('occupation') is-invalid @enderror form-control form-control-lg" placeholder="Occupation" name="occupation" id="occupation">
                                @error('occupation')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="disabilities" class="form-label">Disabilities</label>
                                <input value="{{ old('disabilities')}}" type="text" class="@error('disabilities') is-invalid @enderror form-control form-control-lg" placeholder="Disabilities" name="disabilities" id="disabilities">
                                @error('disabilities')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="emergency_contacts" class="form-label">Emergency Contacts</label>
                                <input value="{{ old('emergency_contacts')}}" type="text" class="@error('emergency_contacts') is-invalid @enderror form-control form-control-lg" placeholder="Emergency Contacts" name="emergency_contacts" id="emergency_contacts">
                                @error('emergency_contacts')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="d-frid">
                                <button class="btn btn-lg btn-primary">submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>