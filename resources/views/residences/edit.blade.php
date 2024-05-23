<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Residency</title>
    <link href="{{ asset('assets/css/certificate/index3.css') }}" rel="stylesheet" />
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
                           
                                <h1>CERTIFICATE OF RESIDENCY</h1>
                          
                        </div>

                        <div class="font1-text">
                            <h3>TO WHOM IT MAY CONCERN:</h3>
                        </div>


                        <div class="font2-text">

                            <div class="text2p">
                                <p>
                                    This is to certify that   {{ $residence->name }},   {{ $residence->age }} years of age, single/married, a natural born Filipino, is a bonafide resident of Barangay Matina, Davao City.
                                </p>

                                <p>
                                    This further certifies that he/she is a law abiding citizen, of good moral character and reputation. That he/she has no derogatory record or pending case filed against him in this barangay.
                                </p>

                                <p>
                                    This certification is issued upon the request of the above-mentioned name for whatever legal intent this may serve.
                                </p>

                                <div class="text22p">
                                    <p>
                                        <b>ISSUED</b> this <span id="currentMonth"></span> day of <span id="currentDay"></span>, 2024 at Barangay Matina, Davao City
                                    </p>
                                </div>
                            </div>

                            <div style="width: 100%; display:flex">
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
                                    <p>Issued At: {{ $residence->address }}</p>
                                    
                                </div>
                                <div class="text7">
                                    <p>Issued On:  {{ $residence->date }}</p>
                                   
                                </div>
                            </div>
                            </div>
                        </div>
                
            </div>
            <div class="modal-footer ">
                <a class="btn btn-primary btn-sm" href="{{ URL('requested-residency') }}">Back</a>
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