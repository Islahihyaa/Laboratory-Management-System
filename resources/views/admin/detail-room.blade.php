@extends('admin.layout.main-layout')

@section('title', 'Labacces | Detail Room Laboratory')

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
                <li class="active">
                    <a href="detail-room">Detail Room</a>
                </li>
                <li>
                    <a href="laboratory">Laboratory</a>
                </li>
                <li>
                    <a href="add-inventory">Add Inventory</a>
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
                <div>
                    <div class="detail-title my-5">
                        <h1>Detail Room</h1>
                        <p class="text-dark fw-bold">Detail of integra TULT laboratorium</p>
                    </div>

                    <div class="description">
                        <h6 class="fw-bold">Description</h6>
                        <p class="text-dark w-75">A computer laboratory is a specially designed workspace for testing, development, and experiments in the field of computer technology. This room has an organized layout with workstations equipped with computers, monitors, and other computer accessories.</p>
                    </div>
                </div>


                <div class="row">
                    <h5 class="my-3">Facilities</h5>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-6">
                        <div class="card rounded-4 border-success">

                            <div class="card-body">
                                <h5 class="card-title">Capacity</h5>
                                <h6>50 <br>People</h6>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-6">
                        <div class="card rounded-4 border-success">

                            <div class="card-body">
                                <h5 class="card-title">Capacity</h5>
                                <h6>50 <br>Unit</h6>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-6">
                        <div class="card rounded-4 border-success">

                            <div class="card-body">
                                <h5 class="card-title">Projector</h5>
                                <h6>2 <br>Unit</h6>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-6">
                        <div class="card rounded-4 border-success">

                            <div class="card-body">
                                <h5 class="card-title">Projector Screen</h5>
                                <h6>2 <br>Unit</h6>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="line"></div>
                <span class="my-2">
                    <p class="fw-bold text-dark"> Pictures </p>
                </span>
                <div class="row row-cols-3 my-5">
                    <div class="col">
                                <img src="images/Mask group.png" alt="">
                    </div>
                    <div class="col">
                                <img src="images/Mask group-2.png" alt="">
                    </div>
                    <div class="col">
                                <img src="images/Mask group-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection