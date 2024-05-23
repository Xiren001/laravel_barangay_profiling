<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of residency</title>
    <link href=" {{ asset('assets/css/certificate/index3.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/certificate/index3.js') }}"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body id="body">

    <div class="container">
        <div id="cform">
            <div id="chform">
            <h5>Certificate of Residency</h5>
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

                        <label for="C">ISSUED (month)</label>
                        <select id="C" name="organisername" required>
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
                        <label>ISSUED day of</label>
                        <input type="number" id="D" name="organisername" required />
                    </div>
                </div>
                <div class="form-div">
                    <div class="div-form">

                        <label>Res.Cert.No.</label>
                        <input type="number" id="E" name="organisername" required />
                    </div>
                    <div class="div-form">

                        <label>ISSUED At</label>
                        <input type="text" id="F" name="organisername" required />
                    </div>
                    <div class="div-form">

                        <label>ISSUED On</label>
                        <input type="date" id="G" name="organisername" required />\
                    </div>
                </div>
                <hr>

                <div style="display: flex; justify-content:flex-end; gap:1rem;">
                <button id="bcertificate" onclick="check()">Generate</button>
                <a class="btn btn-primary btn-sm" href="{{ URL('requested-clearance') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            </div>
        </div>



        <div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="certificateModalLabel">CERTIFICATE OF RESIDENCY</h5>
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
                                <h1>CERTIFICATE OF RESIDENCY</h1>
                            </ins>
                        </div>

                        <div class="font1-text">
                            <h3>TO WHOM IT MAY CONCERN:</h3>
                        </div>


                        <div class="font2-text">

                            <div class="text2p">
                                <p>
                                    This is to certify that <span id="text-1" class="font5"></span>, <span id="text-2" class="font5"></span> years of age, single/married, a natural born Filipino, is a bonafide resident of Barangay Matina, Davao City.
                                </p>

                                <p>
                                    This further certifies that he/she is a law abiding citizen, of good moral character and reputation. That he/she has no derogatory record or pending case filed against him in this barangay.
                                </p>

                                <p>
                                    This certification is issued upon the request of the above-mentioned name for whatever legal intent this may serve.
                                </p>

                                <div class="text22p">
                                    <p>
                                        <b>ISSUED</b> this <span id="text-3" class="font5"></span> day of <span id="text-4" class="font5"></span>, 2024 at Barangay Matina, Davao City
                                    </p>
                                </div>
                            </div>

                            <div class="font3-text">
                                <p>Certified by:</p>
                                <br>
                                <ins>
                                    <h3>CRISTIAN LORIA</h3>
                                </ins>
                                <p>Barangay Captain</p>
                            </div>

                            <div class="font4-text">
                                <div class="text5">
                                    <p>Res. Cert. No:&nbsp;</p>
                                    <p class="font5" id="text-5"></p>
                                </div>
                                <div class="text6">
                                    <p>Issued At:&nbsp;</p>
                                    <p class="font5" id="text-6"></p>
                                </div>
                                <div class="text7">
                                    <p>Issued On:&nbsp;</p>
                                    <p class="font5" id="text-7"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"  onclick="reloadPage()">Close</button>
                        <button type="button" class="btn btn-primary" onclick="dcheck()">Print</button>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>