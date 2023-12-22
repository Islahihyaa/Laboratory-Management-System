<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Letter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-white ">
            <div class="container-fluid px-5">
                <div class="d-block">
                    <a class="navbar-brand btn btn-success rounded-5 px-4 text-light" href="index.php">Labacces</a>
                    <img src="images/image 3.png" alt="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div id="navbarSupportedContent">
                    <div class="d-flex">
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
            </div>
        </nav>
    </header>


    <div id="status-letter" class="bg-light p-5">
        <h5>Booking Status</h5>
        <div class="container-fluid bg-white p-4">
            <a href="booking-now" class="btn btn-success">Booking Now</a>
            <hr>
            <div class="table-responsive">
                <table class="table  table-hover table-bordered table-white align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Submission Date</th>
                            <th>Booking Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($book_status as $item)
                            <tr>
                                <td scope="row">{{ $item -> created_at}}</td>
                                <td scope="row">{{ $item -> date}}</td>
                                <td scope="row">{{ $item -> time_rent}} - {{ $item -> time_return}}</td>
                                <td scope="row">
                                @if ($item->status == 'APPROVED')
                                    <i class="fw-bolder text-success">APPROVED</i> 
                                @elseif ($item->status == 'REJECT')
                                    <i class="fw-bolder text-danger">REJECTED</i>
                                @else
                                    <i class="fw-bolder text-secondary">PENDING</i>
                                @endif</td>
                                <td scope="row">
                                    <a href="" class="btn btn-success">Print</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>

</body>

</html>