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
                    <h1>BARANGAY CLEARANCE</h1>
                </div>

                <div class="font1-text">
                    <h6>TO WHOM IT MAY CONCERN:</h6>
                </div>

                <div class="font2-text">
                    <div class="text2p">
                        <p>This is to certify that {{ $clearance->name }}, {{ $clearance->age }} years old, a resident of Barangay Matina, is known to be of good moral character and a law-abiding citizen in the community.</p>
                    </div>

                    <div class="text2p">
                        <p>To certify further, that he/she has no derogatory and/or criminal records filed in this barangay.</p>
                    </div>

                    <div class="text2p">
                        <p><b>ISSUED</b> this <span id="currentMonth"></span> day of <span id="currentDay"></span>, 2024 at Barangay, Davao City upon request of the interested party for whatever legal purposes it may serve.</p>
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
                        <p>Date Issued: {{ $clearance->date }}</p>
                        
                    </div>
                    <div class="text7">
                        <p>Doc. Stamp:&nbsp; PAID</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <a class="btn btn-primary btn-sm" href="{{ URL('requested-clearance') }}">Back</a>
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