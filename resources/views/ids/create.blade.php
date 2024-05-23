<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay ID</title>
    <link href=" {{ asset('assets/css/certificate/index5.css') }}" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body id="body">

    <div class="container">
        <div id="cform">
            <div id="chform">
            <h5>Barangay ID</h5>
                <hr>
                <label for="A">Full Name:</label>
                <input type="text" id="A" name="fullName" required />

                <label for="B">Address:</label>
                <input type="text" id="B" name="age" required />

                <label for="C">Date of Birth:</label>
                <input type="date" id="C" name="status" required />

                <label for="D">Your Profile:</label>
                <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file" required>
                
                <div style="display: flex; justify-content:flex-end; gap:1rem;">
                <button id="bcertificate" onclick="check()">Generate</button>
                <a class="btn btn-primary btn-sm" style="text-align: center; padding:10px 20px;" href="{{ URL('requested-id') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="certificateModalLabel">BUSINESS PERMIT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body" id="main">
                    <div class="front" style="background-image: url('{{ URL::asset('assets/images/bgid.jpg') }}')">
                        <div class="top">
                            <div style="display: flex; gap: .5em; padding: .3em;">
                                <img src="{{ URL('assets/images/LOGO.png') }}" alt="" width=" 50px" height="44px">
                                <div>
                                    <h3 class="font1">REPUBLIC OF THE PHILIPPINES</h3>
                                    <h4 class="font2">CITY OF DAVAO - BARANGAY MATINA</h4>
                                    <h4 class="font2">Tel No: (01) 234 567890 | (09) 876 543210</h4>
                                </div>
                                <img src="{{ URL('assets/images/log2.png') }}" alt="" width=" 45px" height="43px">
                            </div>

                            <h5 style="margin: 0;">BARANGAY RESIDENT'S CARD</h5>
                        </div>

                        <div style="display: flex; margin: 1rem; ">

                            <div style=" width: 35%;">
                                <img src="{{ URL('assets/images/p.png') }}" id="profile-pic" class="dp">
                            </div>

                            <div style="padding: 0 1em; width: 65%; display:flex ; flex-direction: column;">

                                <div class="p">
                                    <p>LAST NAME, FIRST NAME</p>
                                </div>

                                <h6 id="text-1" class="font5"></h6>

                                <div class="p"> 
                                    <p>Address:</p>
                                </div>

                                <h6 id="text-2" class="font5"></h6>

                                <div class="p"> 
                                    <p>Date Of Birth:</p>
                                </div>

                                <h6 id="text-3" class="font5"></h6>
                            </div>
                        </div>
                    </div>
                    <div class="back" style="background-image: url('{{ URL::asset('assets/images/bgid.jpg') }}')">


                        <p class="info">Holder is a bonafide constituent of this barangay and is entitled to all privilege and
                            services holder may require.</p>
                        <p class="info">If found, please return to the Barangay Secretariat, Matina Barangay Hall, Davao City.
                        </p>
                        <br><br>
                        <div class="back2">
                            <img src="{{ URL('assets/images/qr.png') }}" width=" 80px">
                        </div>
                        <div class="gg">
                            <h6>LORIA, CRISTIAN PAUL</h6>
                        </div>
                        <div class="ggg">
                            <p>Barangay Captain</p>
                        </div>

                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reloadPage()">Close</button>
                    <button type="button" class="btn btn-primary" onclick="dcheck()">Print</button>
                </div>

            </div>
        </div>
    </div>

    <script>
        let profilePic = document.getElementById("profile-pic");
        let inputFile = document.getElementById("input-file");

        inputFile.onchange = function() {
            profilePic.src = URL.createObjectURL(inputFile.files[0]);
        }
        let profilePic1 = document.getElementById("profile1-pic");
        let inputFile1 = document.getElementById("input1-file");

        inputFile1.onchange = function() {
            profilePic1.src = URL.createObjectURL(inputFile.files[0]);
        }
    </script>
    <script src="{{ asset('assets/js/certificate/index5.js') }}"></script>
</body>

</html>