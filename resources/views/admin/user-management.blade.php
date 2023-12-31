@extends('admin.layout.main-layout')

@section('title', 'Labacces | Manage User')

@section('content')
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="images/logo.png" alt="">
            </div>

            <ul class="list-unstyled components">
                <li>
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
                <li class="active">
                    <a href="user-manage">User Management</a>
                </li>
            </ul>
        </nav>
        
        <div id="content" class="p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-end w-100">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><?php echo Auth::user()->full_name; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="logout" method="post">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="content-data" class="px-5">
                <h2> User Management </h2>

                <div class="line my-3"></div>
                @if(Session::has('activeuser'))
                    <div class="alert alert-success alert-lg"> {{ Session::get('activeuser') }}</div>
                @endif
                @if(Session::has('status'))
                    <div class="alert alert-danger alert-lg"> {{ Session::get('status') }}</div>
                @endif
                @if(Session::has('dataupdate'))
                    <div class="alert alert-success alert-lg"> {{ Session::get('dataupdate') }}</div>
                @endif

                <div class="row row-cos-1">
                    <div class="col">
                        <table class="table  table-hover table-bordered table-white align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>User Name</th>
                                    <th>Email Address</th>
                                    <th>Major</th>
                                    <th>Date of Birth</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
 
                            <tbody>
                                @foreach ($show_user as $user)
                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td>{{ $user -> full_name}}</td>
                                    <td>{{ $user -> email}}</td>
                                    <td>{{ $user -> major}}</td>
                                    <td>{{ $user -> date_of_birth}}</td>
                                    <td>
                                        <a href="{{url('user-edit/'.$user -> id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{url('user-delete/'.$user -> id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    </div>
                </div>
            </div>
    </div>
@endsection