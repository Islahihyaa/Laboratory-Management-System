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
                <li class="active">
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
                <h2> Laboratory </h2>

                <div class="line my-3"></div>
                <a href="laboratory-add" class="btn btn-success mb-4 mt-4">Add Laboratory</a></td>
                @if (Session::has('message'))
                    <div class="alert alert-primary alert-lg"> {{ Session::get('message') }}</div>
                @endif
                @if (Session::has('storeDataSuccessMessage'))
                    <div class="alert alert-success alert-lg"> {{ Session::get('storeDataSuccessMessage') }}</div>
                @endif
                @if (Session::has('notSetDataMessage'))
                    <div class="alert alert-warning alert-lg"> {{ Session::get('notSetDataMessage') }}</div>
                @endif
                @if (Session::has('updateInventoryMessage'))
                    <div class="alert alert-success alert-lg"> {{ Session::get('updateInventoryMessage') }}</div>
                @endif
                @if (Session::has('deletedDataMessage'))
                    <div class="alert alert-success alert-lg"> {{ Session::get('deletedDataMessage') }}</div>
                @endif
                @if (Session::has('deleteLaboratory'))
                    <div class="alert alert-danger alert-lg"> {{ Session::get('deleteLaboratory') }}</div>
                @endif
                @if (Session::has('activeuser'))
                    <div class="alert alert-primary alert-lg"> {{ Session::get('activeuser') }}</div>
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
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a
                                                href="/labolatory-details/{{ $lab->id }}">{{ $lab->laboratory_name }}</a>
                                        </td>
                                        <td>{{ $lab->laboratory_description }}</td>
                                        <td>
                                            <a href="{{ url('laboratory-edit/' . $lab->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <a href="{{ url('laboratory-delete/' . $lab->id) }}"
                                                class="btn btn-danger">Delete</a>
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
