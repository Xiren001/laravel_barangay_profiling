@extends('layouts.content')
@section('main-content')
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
                <li class="list-item active">
                    <a href="{{ asset('admin') }}">
                        <i class='bx bx-user'></i>
                        <span class="link-name">Personel</span>
                    </a>
                </li>
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
                    <a href="{{ URL('blotters') }}">
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
                        <h2>Employee Record</h2>
                    </div>

                    <div class="textt" style="width: 100%;">
                    
                        <a href="{{ route('user.create') }}" class="btn btn-add" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Employee</span></a>
                    </div>
                    <form action="" method="GET" style="display: flex; align-items:center; justify-content:center; width:100%;">
                        <div class="input-group ">
                            <input type="search" name="search" id="search" autocomplete="off" class="form-control search" placeholder="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="alrets" id="alert" style=" padding: 0 ; position:fixed;  left:  85%;
    top: 90%;">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
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

                    <th class="th">Photo</th>
                    <th class="th">Name</th>
                    <th class="th">User Type</th>
                    <th class="th">Email</th>
                    <th class="th">Password</th>
                    <th class="th">Status</th>

                    <th style="text-align: center; padding-right:25px; display:flex; flex-wrap:nowrap; ">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $index => $row)
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                            <label for="checkbox1"></label>
                        </span>
                    </td>

                    <td class="td">
                        <div class="showPhoto">
                            <div id="imagePreview" style="@if ($row->photo != '') background-image:url('{{ url('/') }}/uploads/{{ $row->photo }}')@else background-image: url('{{ url('/img/avatar.png') }}') @endif;">
                            </div>
                        </div>
                    </td>
                    <td class="td">{{ $row->name }}</td>
                    <td class="td">{{ $row->usertype }}</td>
                    <td class="td">{{ $row->email }}</td>
                    <td class="td">{{ $row->password }}</td>
                    <td>
                        <select name="status" class="form-control @error('status') is-invalid @enderror" id="inputStatus" data-business-id="{{ $row->id }}" onchange="updateStatus(this)">
                            <option hidden value="{{ $row->status }}">{{ $row->status }}</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                           
                        </select>
                        @error('status')
                        <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </td>

                    <td>
                        <a href="{{ route('user.edit', ['id' => $row->id]) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <button class="delete" onClick="deleteFunction('{{ $row->id }}')"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No Users Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @include ('admin.modal_delete')
    @endsection
</div>

@push('js')
<script>
    function deleteFunction(id) {
        document.getElementById('delete_id').value = id;
        $("#modalDelete").modal('show');
    }

    function updateStatus(selectElement) {
        const status = selectElement.value;
        const businessId = selectElement.getAttribute('data-business-id');
        const url = `/admin/${businessId}`;

        // Make an AJAX request to update the status
        fetch(url, {
                method: 'PUT', // Use PUT or PATCH depending on your route
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
                },
                body: JSON.stringify({
                    status: status
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Status updated successfully');
                } else {
                    alert('Error updating status');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
</script>
@endpush

