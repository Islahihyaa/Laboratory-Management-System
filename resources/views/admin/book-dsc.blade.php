@extends('admin.layout.main-layout')

@section('title', 'Labacces | Digital Chain Supply')

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
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Booking</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="book-si">Sistem Informasi</a>
                        </li>
                        <li>
                            <a href="book-ti">Teknik Industri</a>
                        </li>
                        <li class="active">
                            <a href="book-dsc">Digital Chain Supply</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="detail-room">Detail Room</a>
                </li>
                <li>
                    <a href="laboratory">Laboratory</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-0">

        @include('admin.layout.header')
        
            <div id="content-data" class="px-5">

                <h2>Digital Chain Supply</h2>
                <div class="row row-cos-1">
                    <div class="col">
                        <table class="table  table-hover table-bordered table-white align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Laboratory Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($dsc_approved as $item)
                                <tr>
                                    <td scope="row">{{ $item -> laboratory['laboratory_name'] }}</td>
                                    <td scope="row">{{ $item -> date }}</td>
                                    <td scope="row">{{ $item -> time_rent }} - {{ $item -> time_return }}</td>
                                    <td scope="row">
                                        <i class="fw-bolder text-success">{{ $item -> status }}</i>
                                    </td>
                                    </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="line my-3"></div>
                <span class="my-3">
                    <p class="fw-bold text-dark"> Booking History </p>
                @if(Session::has('message'))
                    <div class="alert alert-primary alert-lg"> {{ Session::get('message') }}</div>
                @endif
                </span>
                <div class="row row-cos-1">
                    <div class="col">
                        <table class="table  table-hover table-bordered table-white align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>laboratorium</th>
                                    <th>Booking Date</th>
                                    <th>Purpose</th>
                                    <th>Submission Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($dsc_book_history as $item)  
                                <tr>
                                    <td scope="row">{{ $loop -> iteration }}</td>
                                    <td scope="row">{{ $item -> user -> full_name }}</td>
                                    <td scope="row">{{ $item -> laboratory['laboratory_name'] }}</td>
                                    <td scope="row">{{ $item -> date }}</td>
                                    <td scope="row">{{ $item -> booking_purpose }}</td>
                                    <td scope="row">{{ $item -> created_at}}</td>
                                    <td scope="row">    
                                        @if ($item->status == 'APPROVED')
                                            <i class="fw-bolder text-success">APPROVED</i> 
                                        @elseif ($item->status == 'REJECT')
                                            <i class="fw-bolder text-danger">REJECTED</i>
                                        @else
                                            <i class="fw-bolder text-secondary">PENDING</i>
                                        @endif</td>
                                    <td scope="row">
                                           <a href="{{url('confirmation-update/'.$item -> id)}}" class="btn btn-primary">Change Status</a></td>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection