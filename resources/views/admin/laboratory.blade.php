@extends('admin.layout.main-layout')

@section('title', 'Labacces | Laboratory')

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
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Booking</a>
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
                    <a href="detail-room">Detail Room</a>
                </li>
                <li class="active">
                    <a href="laboratory">Laboratory</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-0">

        @include('admin.layout.header') 

            <div id="content-data" class="px-5">
                <h2> Laboratory </h2>

                <div class="line my-3"></div>
                <a href="laboratory-add" class="btn btn-success mb-4 mt-4">Add Laboratory</a></td>
                @if(Session::has('message'))
                        <div class="alert alert-primary alert-lg"> {{ Session::get('message') }}</div>
                    @endif
                    @if(Session::has('status'))
                        <div class="alert alert-primary alert-lg"> {{ Session::get('status') }}</div>
                    @endif
                <div class="row row-cos-1">
                    <div class="col">
                        <table class="table  table-hover table-bordered table-white align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Laboratory Name</th>
                                    <th>Laboratory Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($lab_detail as $lab)  
                            <tbody>
                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td>{{ $lab -> laboratory_name}}</td>
                                    <td>{{ $lab -> laboratory_description}}</td>
                                    <td>
                                        <a href="{{url('laboratory-edit/'.$lab -> id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{url('laboratory-delete/'.$lab -> id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection