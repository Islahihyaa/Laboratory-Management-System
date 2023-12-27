<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Loan Letter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-white ">
            <div class="container-fluid px-5">
                <div class="d-block">
                    <a class="navbar-brand btn btn-success rounded-5 px-4 text-light" href="index">Labacces</a>
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
                    </div>
                </div>

                
            </div>
        </nav>
    </header>



    <div id="status-letter" class="bg-light p-5">
        <h5>Laboratory Loan Letter</h5>
        <div class="container-fluid bg-white p-4 rounded-3 shadow">

            <form action="loan" method="post">
                @csrf
                <div class="row row-cols-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Name</label>
                            <input id="my-input" class="form-control" style="background-color: #e0e0e0;" type="text" name="full_name" value="<?php echo Auth::user()->full_name; ?>" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">NIM</label>
                            <input id="my-input" class="form-control" style="background-color: #e0e0e0;" type="number" name="nim" value="<?php echo Auth::user()->nim; ?>" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Email</label>
                            <input id="my-input" class="form-control" style="background-color: #e0e0e0;" type="email" name="email" value="<?php echo Auth::user()->email; ?>" readonly>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="form-group">
                            <label for="my-input">Major</label>
                            <input id="my-input" class="form-control" style="background-color: #e0e0e0;" type="text" name="major" value="<?php echo Auth::user()->major; ?>" readonly>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-3 mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Date</label>
                            <input id="my-input" class="form-control" type="date" name="date">
                        </div>
                        @if ($errors->has('date'))
                            <p class="text-danger">{{ $errors->first('date') }}</p>
                        @endif

                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Time</label>
                            <input id="my-input" class="form-control" type="time" name="time_rent">
                        </div>

                        @if ($errors->has('time_rent'))                                
                            <p class="text-danger">{{ $errors->first('time_rent') }}</p>
                        @endif
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Time to Return</label>
                            <input id="my-input" class="form-control" type="time" name="time_return">
                        </div>
                        @if ($errors->has('time_return'))
                            <p class="text-danger">{{ $errors->first('time_return') }}</p>
                         @endif
                    </div>
                    <div class="col mt-3">
                        <div class="form-group mt-3">
                            <label for="my-input">Chose Laboratorium</label>
                            <select name="lab_id" class="form-control" >
                                @foreach($lab_name as $selectlab)
                                <option value="{{ $selectlab->id }}">{{$selectlab -> laboratory_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('lab_id'))
                            <p class="text-danger">{{ $errors->first('lab_id') }}</p>
                         @endif
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label for="my-input">Booking Purpose</label>
                    <input id="my-input" class="form-control" type="text" name="booking_purpose">
                </div>
                    @if ($errors->has('booking_purpose'))
                        <p class="text-danger">{{ $errors->first('booking_purpose') }}</p>

                    @endif
                    
                <div class="d-flex justify-content-end gap-3 mt-5">
                    <a href="index" class="btn btn-danger px-5"> CANCEL</a>
                    <button type="submit" class="btn btn-success px-5"> SUBMIT </button>
                </div>

            </form>



        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>