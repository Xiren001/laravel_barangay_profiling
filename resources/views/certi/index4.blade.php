<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of indigency</title>
    <link href=" {{ asset('assets/css/certificate/index4.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/certificate/index4.js') }}"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body id="body">

    <div class="container">
        <div id="cform">
            <div id="chform">

                <div class="form-div">
                    <div class="div-form">
                        <label>Full Name</label>
                        <input type="text" id="A" name="username" required />
                    </div>
                    <div class="div-form">

                        <label>Age</label>
                        <input type="number" id="B" name="userdetails" required />
                    </div>
                </div>

                <div class="form-div">
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
                    <div class="div-form">
                        <label>ISSUED day</label>
                        <input type="number" id="E" name="organisername" required />
                    </div>
                </div>
                <hr>
                <button id="bcertificate" onclick="check()">Generate</button>
            </div>
        </div>

        <div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="certificateModalLabel">CERTIFICATE OF INDIGENCY</h5>
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
                            <ins>
                                <h1>CERTIFICATE OF INDIGENCY</h1>
                            </ins>
                        </div>
                        <div class="font1-text">
                            <h3>TO WHOM IT MAY CONCERN:</h3>
                        </div>
                        <div class="font2-text">
                            <p>
                                <b>THIS IS TO CERTIFY</b> that <span id="text-1" class="font5"></span>,
                                <span id="text-2" class="font5"></span> years of age, Filioino and a resident of
                                Barangay Matina, Davao City. has no regular income and a member of indigent person in th barangay.
                            </p>
                            <p>
                                thus certification is issued the request of the above named person, and duly
                                certified by the punong barangay, that their family belong to indigent families here in our barangay.
                            </p>
                            <p>
                                <b>ISSUED</b> this <span id="text-4" class="font5"></span> day of
                                <span id="text-5" class="font5"></span>, 2024 at Barangay Matina, Davao City.
                            </p>
                        </div>
                        <div class="font3-text">
                            <h3>CRISTIAN LORIA</h3>
                            <p>Barangay Captain</p>
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="dcheck()">Print</button>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>