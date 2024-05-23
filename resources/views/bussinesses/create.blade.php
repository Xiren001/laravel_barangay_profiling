<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Permit</title>
    <link href=" {{ asset('assets/css/certificate/index2.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/certificate/index2.js') }}"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body id="body">

    <div class="container">
        <div id="cform">
            <div id="chform">
            <h5>Business Permit</h5>
                <hr>
                <div class="form-div">
                    <div class="div-form">
                        <label>NAME OF PROPRIETOR</label>
                        <input type="text" id="A" name="username" required />
                    </div>
                    <div class="div-form">
                        <label>TRADE NAME</label>
                        <input type="text" id="B" name="userdetails" required />
                    </div>
                    <div class="div-form">
                        <label>BUSINESS LOCATION</label>
                        <input type="text" id="C" name="organisername" required />
                    </div>
                </div>
                <div class="form-div">
                    <div class="div-form">
                        <label>KIND OF BUSINESS</label>
                        <input type="text" id="D" name="organisername" required />
                    </div>
                    <div class="div-form">

                        <label for="E">ISSUED (month)</label>
                        <select id="E" name="organisername" required>
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
                        <label for="F">Day</label>
                        <input type="number" id="F" name="organisername" required />
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
                        <h1>BUSINESS PERMIT</h1>
                    </div>

                    <div class="font-text">
                        <p>
                            Pursuant to the provisions of R.A 7160 otherwise known as the local Government Code 1991
                            PERMISSION/CLEARANCE is hereby granted to herien applicant/business as follows:
                        </p>
                    </div>


                    <div class="font2-text">

                        <div class="text2p">

                            <p id="text-1" class="font5"></p>
                            <div class="line"></div>
                            <h4>NAME OF PROPRIETOR</h4>

                            <p id="text-2" class="font5"></p>
                            <div class="line"></div>
                            <h4>TRADE NAME</h4>

                            <p id="text-3" class="font5"></p>
                            <div class="line"></div>
                            <h4>BUSINESS LOCATION</h4>

                            <p id="text-4" class="font5"></p>
                            <div class="line"></div>
                            <h4>KIND OF BUSINESS</h4>

                        </div>
                        <div class="text2ppp">
                            <p><b>ISSUED</b> this <span id="text-5" class="font5"></span> day of <span id="text-6" class="font5"></span>, 2024 at Barangay, Davao City.</p>
                        </div>
                    </div>


                    <div class="text2p">
                        <div class="text5pp">
                            <div class="font3-text">
                                <p>Recommending Approval:</p>
                            </div>
                            <div class="font3-text">
                                <p>Approved:</p>
                            </div>
                        </div>


                        <div class="text5p">

                            <div class="font3-text">

                                <h4>MYKO XIREN DUNGCA</h4>
                                <h5>City Treasure</h5>
                            </div>

                            <div class="font3-text">
                                <h4>CHRISTIAN PAUL LORIA</h4>
                                <h5>City Mayor</h5>
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