@extends('residents.layout')

@section('content')
<div class="container-div">
    <div class="menu">
        <nav class="sidebar">
            <div class="logo-menu">
                <h2 class="logo">Barangay</h2>
                <i class='bx bx-menu toggle-btn'></i>
            </div>

            <ul class="nav-list">
                <li class="list-item ">
                    <a href="{{ asset('dashboard') }}">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>
                <hr>
                <div class="men-p">
                    <p>MENU</p>
                </div>
                <li class="list-item ">
                    <a href="{{ asset('admin') }}">
                        <i class='bx bx-user'></i>
                        <span class="link-name">Personel</span>
                    </a>
                </li>
                <li class="list-item active">
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
                                <i class='bx bx-id-card'></i>
                                <span class="link-name">Business Clearance</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ URL('requested-residency') }}">
                                <i class='bx bx-id-card'></i>
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
                    <a href="#">
                        <i class='bx bx-folder'></i>
                        <span class="link-name">Blotter List</span>
                    </a>
                </li>

                <li class="list-item">
                    <a href="">
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
                
            </ul>
        </nav>
    </div>
    <div class="invi-div">
    </div>

    <div class="table-wrapper">
        <div class="table-title">
        <div class="bg-gray-100 dark:bg-gray-900">
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

            <div class="roww">
                <div style="display: flex; flex-direction:row; padding:1rem 4rem; width:100%; gap:1rem;">
                    <div class="col-sm-6">
                        <h2>Community Record</h2>
                    </div>

                    <div class="textt" style="width: 100%;">
                        <a href="{{ route('residents.create') }}" class="btn btn-add" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Resident</span></a>
                    </div>
                    <form action="" method="GET" style="display: flex; align-items:center; justify-content:center; width:100%;">
                        <div class="input-group ">
                            <input type="search" name="search" id="search" autocomplete="off" class="form-control search" placeholder="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                        </div>
                    </form>
                </div>
            </div>

        </div>


        @session('success')
        <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </span>
                    </th>
                    
                    <th>Image</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    
                    <th>Gender</th>
                   
                    <th>Precinct No</th>
                    
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($residents as $resident)
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                            <label for="checkbox1"></label>
                        </span>
                    </td>
                    <td><img src="/images/{{ $resident->image }}" width="50px" height="50px" style="border-radius: 5px;"></td>
                    <td>{{ $resident->firstname }}</td>
                    <td>{{ $resident->middlename }}</td>
                    <td>{{ $resident->lastname }}</td>
                    <td>{{ $resident->address }}</td>
                    
                    <td>{{ $resident->gender }}</td>
                  
                    <td>{{ $resident->presinct_no }}</td>
                   
                    <td width="200px">
                        <form action="{{ route('residents.destroy',$resident->id) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('residents.show',$resident->id) }}"><i class="fa-solid fa-list"></i></a>

                            <a class="btn btn-primary btn-sm" href="{{ route('residents.edit',$resident->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">There are no data.</td>
                </tr>
                @endforelse
            </tbody>

        </table>

        {!! $residents->withQueryString()->links('pagination::bootstrap-5') !!}

    </div>
</div>
@endsection