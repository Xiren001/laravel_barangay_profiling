<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Clearance</title>
    <link href="{{ asset('assets/css/certificate/index1.css') }}" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/certificate/index1.js') }}"></script>
</head>

<body id="body">

    <div class="container">
        <div id="cform">
            <div id="chform">
            <h5>Barangay Clearance</h5>
                <hr>
            <div class="form-div">

                <div class="div-form">
                <label>Full Name</label>
                <input type="text" id="A" name="username" required />
                </div>
                <div class="div-form">
                <label>Age</label>
                <input type="number" id="B" name="userdetails" required />
                </div>
                <div class="div-form">
                <label for="D">ISSUED (month)</label>
                <select id="D" name="organisername" required>
                    <option value="" disabled selected>Select Month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                </div>
                </div>

                <div class="form-div">
                <div class="div-form">
                <label>ISSUED day of</label>
                <input type="number" id="E" name="organisername" required />
                </div>
                <div class="div-form">
                <label>O.R No.</label>
                <input type="number" id="F" name="organisername" required />
                </div>

                <div class="div-form">
                <label>Date ISSUED:</label>
                <input type="date" id="G" name="organisername" required />
                </div>
                </div>
                <hr>
                <div style="display: flex; justify-content:flex-end; gap:1rem;">
                <button id="bcertificate" onclick="check()">Generate</button>
                <a class="btn btn-primary btn-sm" href="{{ URL('requested-clearance') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="certificateModalLabel">Barangay Clearance</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="main">
                    <div class="cert-div">
                        <div class="img-div">
                            <img src="{{ URL('assets/images/LOGO.png') }}">
                        </div>
                        <div class="text-div">
                            <p class="text-p">Republic of the Philippines</p>
                            <p class="text-p">Province of Davao</p>
                            <p class="text-p">Municipality of New Matina</p>
                            <h1 class="brg-text">BARANGAY MATINA</h1>
                        </div>
                    </div>

                    <div class="line"></div>
                    <div class="line"></div>

                    <div class="font-text">
                        <h3>OFFICE OF THE BARANGAY CAPTAIN</h3>
                        <h1>BARANGAY CLEARANCE</h1>
                    </div>

                    <div class="font1-text">
                        <h6>TO WHOM IT MAY CONCERN:</h6>
                    </div>

                    <div class="font2-text">
                        <div class="text2p">
                            <p>This is to certify that <span id="text-1" class="font5"></span>, <span id="text-2" class="font5"></span> years old, a resident of Barangay Matina, is known to be of good moral character and a law-abiding citizen in the community.</p>
                        </div>

                        <div class="text2p">
                            <p>To certify further, that he/she has no derogatory and/or criminal records filed in this barangay.</p>
                        </div>

                        <div class="text2p">
                            <p><b>ISSUED</b> this <span id="text-4" class="font5"></span> day of <span id="text-5" class="font5"></span>, 2024 at Barangay, Davao City upon request of the interested party for whatever legal purposes it may serve.</p>
                        </div>
                    </div>

                    <div class="font3-text">
                        <h6>CRISTIAN LORIA</h6>
                        <p>Barangay Captain</p>
                    </div>

                    <div class="font4-text">
                        <div class="text5">
                            <p>O.R No:&nbsp;</p>
                            <p id="text-6" class="font5"></p>
                        </div>
                        <div class="text6">
                            <p>Date Issued:&nbsp;</p>
                            <p id="text-7" class="font5"></p>
                        </div>
                        <div class="text7">
                            <p>Doc. Stamp:&nbsp; PAID</p>
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

</body>

</html>
