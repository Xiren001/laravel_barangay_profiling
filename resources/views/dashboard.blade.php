
 
       
  

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <link href=" {{ asset('assets/css/Cdashboard.css') }}" rel="stylesheet" />
 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href=" {{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
</head>

<body>
    <div class="container-div">
    <x-app-layout>
    <x-slot name="header">
            <div class="acc">

                <div class="face">
                    <i class='bx bxs-face'></i>
                </div>
               
            </div>
            </x-slot>
    </x-app-layout>

        <div class="menu">
            <nav class="sidebar">
                <div class="logo-menu">
                    <h2 class="logo">Barangay</h2>
                    <i class='bx bx-menu toggle-btn'></i>
                </div>

                <ul class="nav-list">
                    <li class="list-item ">
                        <a href="/IT26/BARANGAY/dashboard-1/dashboard.php">
                            <i class='bx bx-grid-alt'></i>
                            <span class="link-name">Dashboard</span>
                        </a>
                    </li>
                    <hr>
                    <div class="men-p">
                        <p>MENU</p>
                    </div>
                    <li class="list-item">
                        <a href="/IT26/BARANGAY/dashboard-residence/CdashboardPersonel.php">
                            <i class='bx bx-user'></i>
                            <span class="link-name">Personel</span>
                        </a>
                    </li>
                    <li class="list-item active">
                        <a href="/IT26/BARANGAY/dashboard-residence/CdashboardPersonel.php">
                            <i class='bx bx-message-square-dots'></i>
                            <span class="link-name">Community Record</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-certification'></i>
                            <span class="link-name">Brangay Certification</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-receipt'></i>
                            <span class="link-name">Certificate of Indigency</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-id-card'></i>
                            <span class="link-name">Business Clearance</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-folder'></i>
                            <span class="link-name">Blotter List</span>
                        </a>
                    </li>
                    
                    <li class="list-item">
                        <a href="/IT26/BARANGAY/dashboard-3/dashboard.php">
                            <i class='bx bx-food-menu'></i>
                            <span class="link-name">Requested Document</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-building-house'></i>
                            <span class="link-name">Household Record</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-cog'></i>
                            <span class="link-name">Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="invi-div">
        </div>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Community Record</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#add" class="btn btn-add" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Resident</span></a>
                    </div>
                    <form action="" method="GET">
                        <div class="input-group mb-3">
                            <input type="search" name="search" id="search" autocomplete="off" class="form-control search" placeholder="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                        </div>
                    </form>

                </div>
            </div>


            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>Firstname</th>
                        <th>middlename</th>
                        <th>Lastname</th>
                        <th>Purok</th>
                        <th>presinct_no</th>
                        <th style="text-align: center; padding-right:25px; ">Action</th>
                    </tr>
                </thead>
                <tbody>
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                            <label for="checkbox1"></label>
                                        </span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="padding: 5px; display:flex; flex-direction:row; justify-content:center; align-items:center;">
                                        <a href="#edit" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                                        <a href="#delete" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

                                        <a href="#view" class="view" data-toggle="modal"><i class='bx bxs-show' data-toggle="tooltip" title="view">&#xE872;</i></a>
                                    </td>
                                    
                                </tr>
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="padding: 5px; display:flex; flex-direction:row; justify-content:center; align-items:center;">
                                    <a href="#edit" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                                    <a href="#delete" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

                                    <a href="#view" class="view" data-toggle="modal"><i class='bx bxs-show' data-toggle="tooltip" title="view">&#xE872;</i></a>
                                </td>
                               
                </tbody>


            </table>
        </div>
    </div>
    <script src="Cdashboard.js"></script>
</body>

</html>