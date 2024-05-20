@extends('residents.layout')

@section('content')
<div class="container">
    <div class="container card mt-5">
        <div class="container show-title p-3">
            <h2 class="card-header">Add Resident</h2>
        </div>

        <div class="card-body">

            <form action="{{ route('residents.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="r-first">

                    <div class="m">
                        <label for="inputImage" class="form-label"><strong>Image:</strong></label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="inputImage" accept="image/*" onchange="getImagePreview3(event)">
                        @error('image')
                        <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                        <div id="preview3" class="img-area col-md-4" data-img="" style="width: 340px; height:240px; padding:5px;">
                            <i class='bx bxs-cloud-upload icon-UP'></i>
                            <h3>Upload Image</h3>
                            <p>Image size - less than <span>2MB</span></p>
                        </div>
                    </div>

                    <div class="r-in-e">

                        <div class="r-first-inn">

                            <div class="mb-3">
                                <label for="inputFirstname" class="form-label"><strong>First Name</strong></label>
                                <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="inputFirstname" placeholder="First Name">
                                @error('firstname')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputMiddlename" class="form-label"><strong>Middle Name</strong></label>
                                <input type="text" name="middlename" class="form-control @error('middlename') is-invalid @enderror" id="inputMiddlename" placeholder="Middle Name">
                                @error('middlename')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputLastname" class="form-label"><strong>Last Name</strong></label>
                                <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="inputLastname" placeholder="Last Name">
                                @error('lastname')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="r-first-inn">

                            <div class="mb-3">
                                <label for="inputAddress" class="form-label"><strong>Address</strong></label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="inputAddress" placeholder="Address">
                                @error('address')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputSuffix" class="form-label"><strong>Suffix</strong></label>
                                <select name="suffix" class="form-select @error('suffix') is-invalid @enderror" id="inputSuffix" aria-label="Suffix">
                                    <option value="" selected disabled>Select Suffix</option>
                                    <option value="Jr.">Jr.</option>
                                    <option value="Sr.">Sr.</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('suffix')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="inputJobStatus" class="form-label"><strong>Job Status</strong></label>
                                <select name="job_status" class="form-control @error('job_status') is-invalid @enderror" id="inputJobStatus">
                                    <option value="">Select Job Status</option>
                                    <option value="Employed">Employed</option>
                                    <option value="Unemployed">Unemployed</option>
                                    <option value="Student">Student</option>
                                    <option value="Retired">Retired</option>
                                    <option value="Other">Other</option>
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
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>

                                </select>
                                @error('block')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputStreet" class="form-label"><strong>Street</strong></label>
                                <input type="text" name="street" class="form-control @error('street') is-invalid @enderror" id="inputStreet" placeholder="Street">
                                @error('street')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputSubdPurok" class="form-label"><strong>Purok</strong></label>
                                <select name="subd_purok" class="form-control @error('subd_purok') is-invalid @enderror" id="inputSubdPurok">
                                    <option value="">Select Purok</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>

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
                                <input type="text" name="birthplace" class="form-control @error('birthplace') is-invalid @enderror" id="inputBirthplace" placeholder="Birthplace">
                                @error('birthplace')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputBirthday" class="form-label"><strong>Birthday</strong></label>
                                <input type="date" name="birthday" class="form-control @error('birthday') is-invalid @enderror" id="inputBirthday">
                                @error('birthday')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputAge" class="form-label"><strong>Age</strong></label>
                                <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" id="inputAge" placeholder="Age">
                                @error('age')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputGender" class="form-label"><strong>Gender</strong></label>
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror" id="inputGender">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
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
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Separated">Separated</option>
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
                                    <option value="American">American</option>
                                    <option value="Canadian">Canadian</option>
                                    <option value="Filipino">Filipino</option>
                                    <option value="Indian">Indian</option>
                                    <option value="Japanese">Japanese</option>
                                    <option value="Other">Other</option>

                                </select>
                                @error('citizenship')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label"><strong>Email</strong></label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" placeholder="Email">
                                @error('email')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputReligion" class="form-label"><strong>Religion</strong></label>
                                <select name="religion" class="form-control @error('religion') is-invalid @enderror" id="inputReligion">
                                    <option value="">Select Religion</option>
                                    <option value="Christianity">Christianity</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hinduism">Hinduism</option>
                                    <option value="Buddhism">Buddhism</option>
                                    <option value="Judaism">Judaism</option>
                                    <option value="Atheism">Atheism</option>
                                    <option value="Other">Other</option>

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
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('blood_type')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputVotersID" class="form-label"><strong>Voters ID</strong></label>
                                <input type="number" name="voters_id" class="form-control @error('voters_id') is-invalid @enderror" id="inputVotersID" placeholder="Voters ID">
                                @error('voters_id')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputPresinctNo" class="form-label"><strong>Precinct No</strong></label>
                                <input type="number" name="presinct_no" class="form-control @error('presinct_no') is-invalid @enderror" id="inputPresinctNo" placeholder="Precinct No">
                                @error('presinct_no')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputContactNumber" class="form-label"><strong>Contact Number</strong></label>
                                <input type="number" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror" id="inputContactNumber" placeholder="Contact Number">
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
                                <input type="number" name="household_id" class="form-control @error('household_id') is-invalid @enderror" id="inputHouseholdID" placeholder="Household ID">
                                @error('household_id')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputOccupation" class="form-label"><strong>Occupation</strong></label>
                                <input type="text" name="occupation" class="form-control @error('occupation') is-invalid @enderror" id="inputOccupation" placeholder="Occupation">
                                @error('occupation')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputDisabilities" class="form-label"><strong>Disabilities</strong></label>
                                <select name="disabilities" class="form-control @error('disabilities') is-invalid @enderror" id="inputDisabilities">
                                    <option value="">Select Disabilities</option>
                                    <option value="None">None</option>
                                    <option value="Visual impairment">Visual impairment</option>
                                    <option value="Hearing impairment">Hearing impairment</option>
                                    <option value="Physical disability">Physical disability</option>
                                    <option value="Intellectual disability">Intellectual disability</option>
                                    <option value="Other">Other</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('disabilities')
                                <div class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inputEmergencyContacts" class="form-label"><strong>Emergency Contacts</strong></label>
                                <input type="number" name="emergency_contacts" class="form-control @error('emergency_contacts') is-invalid @enderror" id="inputEmergencyContacts" placeholder="Emergency Contacts">
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
                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Add</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    function getImagePreview3(event) {
        var image = URL.createObjectURL(event.target.files[0]);
        var imagediv = document.getElementById('preview3');
        var newimg = document.createElement('img');
        imagediv.innerHTML = '';
        newimg.src = image;
        imagediv.appendChild(newimg);
    }
</script>
@endsection