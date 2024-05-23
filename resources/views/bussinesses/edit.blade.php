<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Clearance</title>
    <link href="{{ asset('assets/css/certificate/index2.css') }}" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body id="body">

    <div class="container">
        <div class="col">
            <div id="main">
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

                        {{ $bussiness->name }}
                        <div class="line"></div>
                        <h4>NAME OF PROPRIETOR</h4>

                        <p></p>
                        <div class="line"></div>
                        <h4>TRADE NAME</h4>

                        {{ $bussiness->address }}
                        <div class="line"></div>
                        <h4>BUSINESS LOCATION</h4>

                        <p></p>
                        <div class="line"></div>
                        <h4>KIND OF BUSINESS</h4>

                    </div>
                    <div class="text2ppp">
                        <p><b>ISSUED</b> this <span id="currentMonth"></span> day of <span id="currentDay"></span>, 2024 at Barangay, Davao City.</p>
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

                        <div class="font3-text" style=" padding-bottom: 2rem;">
                            <h4>CHRISTIAN PAUL LORIA</h4>
                            <h5>City Mayor</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <a class="btn btn-primary btn-sm" href="{{ URL('requested-business') }}">Back</a>
                <button type="button" class="btn btn-primary" onclick="download()">Print</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date();
            const options = {
                month: 'long'
            }; // Use 'short' for abbreviated month names
            document.getElementById('currentMonth').textContent = today.toLocaleDateString('en-US', options);
            document.getElementById('currentDay').textContent = today.getDate();
        });

        function download() {
            var bodyContent = document.getElementById("body").innerHTML;
            var mainContent = document.getElementById("main").innerHTML;

            var originalBody = document.body.innerHTML;
            document.body.innerHTML = mainContent;
            window.print();
            document.body.innerHTML = originalBody;

            // Reinitialize modal after print
            $('#certificateModal').modal('hide');
            document.getElementById("body").innerHTML = bodyContent;
            $('#certificateModal').modal();
        }

        function reloadPage() {
            location.reload();
        }
    </script>

</body>

</html>