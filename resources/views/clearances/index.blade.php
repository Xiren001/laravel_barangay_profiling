<!DOCTYPE html>
<html lang="en">

<head>
    <title>Brangay Profiling</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href=" {{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cert.css') }}" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/307a1a6a59.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
</head>

<body>
    <!--home start-->
    <div id="faq" class="invi-div"></div>
    <header class="header">
        <input type="checkbox" id="check" />
        <label for="check" class="icon">
            <i class="bx bx-menu" id="menu-icon"></i>
            <i class="bx bx-right-arrow-circle" id="close-icon"></i>
        </label>
        <nav class="nav">
            <a href="{{ URL('') }}" style="--i: 0">Home</a>
        </nav>
    </header>



    <div class="p-1 text-white text-center logo-text">

        <div class="container log-h">
            <div class="p-1 logo-div">
                <img class="logo img-responsive" src="{{ URL('assets/images/LOGO.png') }}" alt="logo">
            </div>
            <div class="p-1 h1-div">
                <h1> Requested Document </h1>
            </div>
        </div>


        <div class="custom-shape-divider-bottom-1711486951">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <div class="container">
        <div class="table-wrapper" style="padding: 4rem 0;">

            <div class="table-title">
                <div class="roww">
                    <form action="" method="GET" style="display: flex; align-items:center; justify-content:center; width:100%;">
                        <div class="input-group ">
                            <input type="search" name="search" id="search" autocomplete="off" class="form-control search" placeholder="Transaction Number / Name" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                        </div>
                    </form>
                </div>
            </div>


            <table class="table table-striped table-hover">
                <thead>
                    <tr>

                        <th>Tracking Number</th>
                        <th>Name</th>
                        <th>Pick-up Date</th>
    
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($clearances as $clearance)
                    <tr>
                        
                        <td>{{ $clearance->tracking }}</td>
                        <td>{{ $clearance->name }}</td>
                        <td>{{ $clearance->date }}</td>
                        <td>{{ $clearance->status }}</td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">There are no data.</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
            {!! $clearances->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>



    <footer class="footer">
        <div class="container footer-con">
            <div class="row con-row">

                <div class="div-log">
                    <div class="footer-col footer-logo-div">
                        <img class="logo-footer img-responsive" src="{{ URL('assets/images/LOGO.png') }}" alt="logo">
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Page</h4>
                    <ul class="footer-ul">
                        <li><a href="{{ URL('') }}">about us</a></li>
                        <li><a href="{{ URL('') }}">our services</a></li>
                        <li><a href="{{ URL('') }}">map</a></li>
                        <li><a href="{{ URL('') }}">mission</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul class="footer-ul">
                        <li><a href="{{ URL('faq') }}">FAQ</a></li>
                        <li><a href="{{ URL('terms') }}">Terms & Conditions</a></li>
                        <li><a href="{{ URL('disclaimer') }}">Disclaimer</a></li>
                        <li><a href="{{ URL('privacy') }}">privacy policy</a></li>
                    </ul>
                </div>

                <div class="footer-col footer-icons">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/PTD.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        // Function to generate a random alphanumeric string of a specified length
        function generateRandomString(length) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = '';
            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                result += characters[randomIndex];
            }
            return result;
        }

        // Function to generate a tracking code in the specified format
        function generateTrackingCode() {
            const parts = [];
            for (let i = 0; i < 8; i++) {
                parts.push(generateRandomString(4)); // Generate a group of 4 alphanumeric characters
            }
            return parts.join('-'); // Join the parts with dashes to form the tracking code
        }

        // Get the input field for tracking code
        const trackingInput = document.getElementById('tracking');

        // Generate a tracking code when the document is ready
        document.addEventListener('DOMContentLoaded', function() {
            // Set the generated tracking code to the input field
            trackingInput.value = generateTrackingCode();
        });

        // JavaScript to trigger search while typing
        document.getElementById("search").addEventListener("input", function() {
            // Get the search query from the input field
            let searchQuery = this.value.trim().toLowerCase();

            // Get all rows in the table body
            let rows = document.querySelectorAll("tbody tr");

            // Iterate over each row and check if it matches the search query
            rows.forEach((row) => {
                // Get the data in each row
                let rowData = row.textContent.toLowerCase();

                // Show or hide the row based on whether it matches the search query
                if (rowData.includes(searchQuery)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>