@extends('admin.layout.main-layout')

@section('title', 'Labacces | Homepage')

@section('content')
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="images/logo.png" alt="">
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Booking</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="book-si">Sistem Informasi</a>
                        </li>
                        <li>
                            <a href="book-ti">Teknik Industri</a>
                        </li>
                        <li>
                            <a href="book-dsc">Digital Chain Supply</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="laboratory">Laboratory</a>
                </li>
                <li>
                    <a href="/add-inventory-items">Add Inventory</a>
                </li>
                <li>
                    <a href="user-manage">User Management</a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content" class="p-0">

        @include('admin.layout.header') 
            
            <div id="content-data" class="px-5">
                <h2>Overview</h2>
                <div class="row">
                    <div class="col-2 ">
                        <div class="card rounded-4 border-success">
                            <div class="card-body">
                                <h5 class="card-title">Total Waiting</h5>
                                <h1>{{$book_count}}</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="line"></div>

                @if(Session::has('status'))
                    <div class="alert alert-danger alert-lg"> {{ Session::get('status') }}</div>
                @endif

                <span class="my-3">
                    <p class="fw-bold text-dark"> Booking History </p>
                </span>

                <table class="table  table-hover table-bordered table-white align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Laboratorium</th>
                            <th>Booking Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($book_history as $item)  
                        <tr>
                            <td scope="row">{{ $loop -> iteration }}</td>
                            <td scope="row">{{ $item -> user -> full_name }}</td>
                            <td scope="row">{{ $item -> laboratory['laboratory_name']}}</td>
                            <td scope="row">{{ $item -> date }}</td>
                            <td scope="row">
                                @if ($item->status == 'APPROVED')
                                    <i class="fw-bolder text-success">APPROVED</i> 
                                @elseif ($item->status == 'REJECT')
                                    <i class="fw-bolder text-danger">REJECTED</i>
                                @else
                                    <i class="fw-bolder text-secondary">PENDING</i>
                                @endif</td>
                            <td scope="row">
                                    <a href="{{url('confirmation-delete/'.$item -> id)}}" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data?')" >Delete</a></td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection