<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href=" {{ asset('assets/css/Cdashboard.css') }}" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href=" {{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <title>Barangay Profiling</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">


    <!-- Page Content -->
    <main>
        <div class="container-div">
            <div class="menu">
                <nav class="sidebar">
                    <div class="logo-menu">
                        <h2 class="logo">Barangay</h2>
                        <i class='bx bx-menu toggle-btn'></i>
                    </div>

                    <ul class="nav-list">
                        <li class="list-item active">
                            <a href="{{ asset('dashboard') }}">
                                <i class='bx bx-grid-alt'></i>
                                <span class="link-name">Dashboard</span>
                            </a>
                        </li>
                        <hr>
                        <div class="men-p">
                            <p>MENU</p>
                        </div>
                        @if (auth()->user()->usertype === 'admin')
                        <li class="list-item">
                            <a href="{{ asset('admin') }}">
                                <i class='bx bx-user'></i>
                                <span class="link-name">Personnel</span>
                            </a>
                        </li>
                        @endif
                        <li class="list-item">
                            <a href="{{ asset('residents') }}">
                                <i class='bx bx-message-square-dots'></i>
                                <span class="link-name">Community Record</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ URL('requested-clearance') }}">
                                <i class='bx bx-certification'></i>
                                <span class="link-name">Brangay Certification</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ URL('requested-indigency') }}">
                                <i class='bx bx-receipt'></i>
                                <span class="link-name">Certificate of Indigency</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ URL('requested-business') }}">
                            <i class='bx bx-copy-alt'></i>
                                <span class="link-name">Business Clearance</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ URL('requested-residency') }}">
                            <i class='bx bx-food-menu'></i>
                                <span class="link-name">Certificate of Residency</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ URL('requested-id') }}">
                                <i class='bx bx-id-card'></i>
                                <span class="link-name">Barangay ID</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ URL('blotters') }}">
                                <i class='bx bx-folder'></i>
                                <span class="link-name">Blotter List</span>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="invi-div">
            </div>
            <div class="content">
                <div class=" bg-gray-100 dark:bg-gray-900">
                    @include('layouts.navigation')

                    <!-- Page Heading -->
                    @if (isset($header))
                    <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                    @endif
                </div>
                <div class="contents-div">
                    <div class="dashboard-content">
                        <div style="display: flex; flex-direction:column;">
                            <p>POPULATION</p>
                            <div style="display: flex; padding:1em;flex-wrap: wrap; width:100%; height:100%; gap:1rem;">
                                <div class="req-div">
                                    <h6><i class='bx bx-user'></i><span>{{ $residentCount }} </span></h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-content">
                        <div style="display: flex; flex-direction:column;">
                            <p>MALE</p>
                            <div style="display: flex; padding:1em;flex-wrap: wrap; width:100%; height:100%; gap:1rem;">
                                <div class="req-div">
                                    <h6><i class='bx bx-male' ></i><span>{{ $residentMCount }} </span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-content">
                        <div style="display: flex; flex-direction:column;">
                            <p>FEMALE</p>
                            <div style="display: flex; padding:1em;flex-wrap: wrap; width:100%; height:100%; gap:1rem;">
                                <div class="req-div">
                                    <h6><i class='bx bx-female' ></i><span>{{ $residentFCount }}</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-content">
                        <div style="display: flex; flex-direction:column;">
                            <p>BARANGAY CLEARANCE</p>
                            <div style="display: flex; padding:1em;flex-wrap: wrap; width:100%; height:100%; gap:1rem;">
                                <div class="req-div">
                                    <h6><i class='bx bx-certification' > </i> <span>{{ $clearanceCount }}</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-content">

                        <div style="display: flex; flex-direction:column;">
                            <p>BUSINESS PERMIT</p>
                            <div style="display: flex; padding:1em;flex-wrap: wrap; width:100%; height:100%; gap:1rem;">

                                <div class="req-div">
                                    <h6><i class='bx bx-copy-alt'></i> <span>{{ $bussinessCount }}</span></h6>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="dashboard-content">
                        <div style="display: flex; flex-direction:column;">
                            <p>BARANGAY ID</p>
                            <div style="display: flex; padding:1em;flex-wrap: wrap; width:100%; height:100%; gap:1rem;">
                                <div class="req-div">
                                    <h6><i class='bx bx-id-card'></i> <span>{{ $idCount }}</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-content">
                        <div style="display: flex; flex-direction:column;">
                            <p>CERTIFICATE OF INDIGENCY</p>
                            <div style="display: flex; padding:1em;flex-wrap: wrap; width:100%; height:100%; gap:1rem;">
                                <div class="req-div">
                                    <h6><i class='bx bx-receipt'></i> <span>{{ $indegencysCount }}</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-content">
                        <div style="display: flex; flex-direction:column;">
                            <p>CERTIFICATE OF RESIDENCY</p>
                            <div style="display: flex; padding:1em;flex-wrap: wrap; width:100%; height:100%; gap:1rem;">
                                <div class="req-div">
                                    <h6><i class='bx bx-food-menu'> </i><span>{{ $residencesCount }}</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-content">
                        <div style="display: flex; flex-direction:column;">
                            <p>BLOTTER</p>
                            <div style="display: flex; padding:1em;flex-wrap: wrap; width:100%; height:100%; gap:1rem;">
                                <div class="req-div">
                                    <h6><i class='bx bx-folder'> </i> <span>{{ $statusACounts }}</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{ $slot }}
    </main>

    <script src="{{ asset('assets/js/Cdashboard.js') }}"></script>
</body>

</html>