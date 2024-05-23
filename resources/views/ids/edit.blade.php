<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Clearance</title>
    <link href="{{ asset('assets/css/certificate/index5.css') }}" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body id="body">

    <div class="container">
        <div class="col">
        <div id="main">
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

                                <h6>{{ $id->name }}</h6>

                                <div class="p"> 
                                    <p>Address:</p>
                                </div>

                                <h6> {{ $id->address }}</h6>

                                <div class="p"> 
                                    <p>Date Of Birth:</p>
                                </div>

                                <h6>{{ $id->date }}</h6>
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
                <a class="btn btn-primary" href="{{ URL('requested-id') }}">Back</a>
                <button type="button" class="btn btn-primary" onclick="download()">Print</button>
            </div>
            </div>
    </div>
    <script>
    
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