<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Loan Letter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div id="status-letter" class="bg-light p-5">
        <div class="container-fluid bg-white p-4 rounded-3 shadow">
            <h5 class="mb-4">Confirmation</h5>

            <form action="" method="post">
                @csrf
                @method('PUT')
                <div class="row row-cols-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Name</label>
                            <input id="my-input" class="form-control" type="text" name="full_name" value="{{ $status_update->user->full_name }}" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">NIM</label>
                            <input id="my-input" class="form-control" type="number" name="nim" value="{{ $status_update->user->nim }}" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Email</label>
                            <input id="my-input" class="form-control" type="email" name="email" value="{{ $status_update->user->email }}" readonly>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="form-group">
                            <label for="my-input">Major</label>
                            <input id="my-input" class="form-control" type="text" name="major" value="{{ $status_update->user->major }}" readonly>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-3 mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Date</label>
                            <input id="my-input" class="form-control" type="date" name="date"  value="{{ $status_update->date }}" readonly>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Time</label>
                            <input id="my-input" class="form-control" name="time_rent" value="{{ $status_update->time_rent }}">
                        </div>
                    </div>


                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Time to Return</label>
                            <input id="my-input" class="form-control" name="time_return" value="{{ $status_update->time_return }}">
                        </div>
                    </div>


                    <div class="col mt-3">
                        <div class="form-group mt-3">
                            <label for="my-input">Laboratorium</label>
                            <input id="my-input" class="form-control" type="text" name="lab" value="{{ $status_update->lab }}">
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label for="my-input">Booking Purpose</label>
                    <input id="my-input" class="form-control" type="text" name="booking_purpose" value="{{ $status_update->booking_purpose }}">
                </div>

                <div class="d-flex justify-content-center gap-3 mt-5">
                    <button type="submit" name="reject" class="btn btn-danger px-5"> REJECT </button>
                    <button type="submit" name="approve" class="btn btn-success px-5"> APPROVE </button>
                </div>

            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>