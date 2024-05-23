@extends('blotters.layout')

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
                        <span class="link-name">Personnel</span>
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
                        <span class="link-name">Barangay Certification</span>
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
                <li class="list-item active">
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
    <div class="invi-div"></div>

    <div class="table-wrapper">
        <div class="table-title">
            <div class="bg-gray-100 dark:bg-gray-900">
                @include('layouts.navigation')

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
                        <h2>Blotter</h2>
                    </div>

                    <div class="textt" style="width: 100%;">
                        <a href="{{ route('blotters.create') }}" class="btn btn-add" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Blotter</span></a>
                    </div>
                    <form action="" method="GET" style="display: flex; align-items:center; justify-content:center; width:100%;">
                        <div class="input-group ">
                            <input type="search" name="search" id="search" autocomplete="off" class="form-control search" placeholder="Search" value="{{ request('search') }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        @if(session('success'))
        <div class="alert alert-success" style="position: fixed; top:90%; left:45%;" role="alert"> {{ session('success') }} </div>
        @endif
        <div style="display: flex;">

            <div style="width: 100%;">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>Complainant</th>
                            <th>Respondent</th>
                            <th>Victim</th>
                            <th>Incident</th>
                            <th>Incident Date</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($blotters as $blotter)
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox{{ $loop->index }}" name="options[]" value="{{ $blotter->id }}">
                                    <label for="checkbox{{ $loop->index }}"></label>
                                </span>
                            </td>
                            <td>{{ $blotter->complainant }}</td>
                            <td>{{ $blotter->respondent }}</td>
                            <td>{{ $blotter->victim }}</td>
                            <td>{{ $blotter->incident }}</td>
                            <td>{{ $blotter->incident_date }}</td>
                            <td>{{ $blotter->status }}</td>
                            <td width="200px">
                                <form action="{{ route('blotters.destroy', $blotter->id) }}" method="POST">
                                    <a class="btn btn-primary btn-sm" href="{{ route('blotters.edit', $blotter->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">There are no data.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $blotters->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>
            <div class="status-counts">
                <div class="blotter-count">
                    <ul>
                        @foreach($statusCounts as $status => $count)
                        <li>{{ $status }} <br> {{ $count }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
           
        </div>

    </div>
</div>
@endsection