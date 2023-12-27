<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    body {
        min-height: 120vh;
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
    }

    .line {
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
        margin: 40px 0;
    }


    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: rgba(19, 136, 76, 1);
        color: #fff;
        transition: all 0.3s;
        padding: 0 28px;
        position: fixed;
        height: 100%;
    }

    #sidebar.active {
        margin-left: -250px;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: rgba(19, 136, 76, 1);
    }


    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #47748b;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px 20px;
        font-size: 1.1em;
        display: block;

    }

    #sidebar ul li a:hover {
        color: #7386D5;
        background: #fff;
        border-radius: 20px;

    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #7386D5;
        background: white;
        border-radius: 20px;
        margin: 8px 0;


    }

    a[data-toggle="collapse"] {
        position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        /* background: #6d7fcc; */

    }

    ul.CTAs {
        padding: 20px;
    }

    ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    a.download {
        background: #fff;
        color: #7386D5;
    }

    a.article,
    a.article:hover {
        background: #6d7fcc !important;
        color: #fff !important;
    }


    #content {
        width: 100%;
        margin-left: 250px;
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
    }



    @media (max-width: 768px) {
        #sidebar {
            margin-left: -250px;
        }

        #sidebar.active {
            margin-left: 0;
        }

        #sidebarCollapse span {
            display: none;
        }
    }
</style>

<body>
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

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-end w-100">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><?php echo Auth::user()->full_name; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout" method="post">Logout</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>


</html>