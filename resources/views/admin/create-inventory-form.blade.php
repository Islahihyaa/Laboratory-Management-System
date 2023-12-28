<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Loan Letter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-white ">
            <div class="container-fluid px-5">
                <div class="d-block">
                    <a class="navbar-brand btn btn-success rounded-5 px-4 text-light" href="index">Labacces</a>
                    <img src="images/image 3.png" alt="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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



    <div class="bg-light p-5">
        <h5> Add Laboratory</h5>
        <div class="container-fluid bg-white p-4 rounded-3 shadow mt-4">
            <form action="create-inventory-items" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col">
                        <label for="roomCapacity">Room Capacity</label>
                        <input type="integer" class="form-control mt-1" id="roomCapacity " name="roomCapacity" required>
                    </div>

                    <div class="col">
                        <label for="computerAvaiable">Avaiable Computer</label>
                        <input type="integer" class="form-control mt-1" id="computerAvaiable" name="computerAvaiable"
                            required>
                    </div>

                    <div class="col">
                        <label for="screenProjector">Screen Projector</label>
                        <input type="integer" class="form-control mt-1" id="screenProjector" name="screenProjector"
                            required>
                    </div>

                    <div class="col">
                        <label for="projector">Projector</label>
                        <input type="integer" class="form-control mt-1" id="projector" name="projector" required>
                    </div>
                    <div class="col">
                        <label for="lab">Select Laboratorium</label>
                        <select name="labolatoryId" id="lab" class="form-select">
                            <option selected>Choose Laboratorium Rooms</option>
                            @foreach ($laboratoriums as $laboratorium)
                                <option value="{{ $laboratorium->labolatoryId }}">
                                    {{ $laboratorium->laboratory_name }}
                                </option>
                            @endforeach
                        </select>

                    </div>


                </div>

                <div class="action-area mt-4">
                    <button type="submit" class="justify-content-end btn btn-success">Create</button>
                    <a href="/laboratory" class="btn btn-success"> Back</a>
                </div>


            </form>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
