<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Loan Letter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-light p-5">
        <h5 class="mb-4">Confirmation</h5>
        <div class="container-fluid bg-white p-4 rounded-3 shadow">

            <form action="" method="post">
                @csrf
                @method('PUT')
                <div class="row row-cols-3">
                <div class="col">
                        <div class="form-group">
                            <label for="my-input">Laboratory name</label>
                            <input id="my-input" class="form-control" type="text" name="laboratory_name" value="{{ $lab_detail['laboratory_name'] }}">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Laboratory Description</label>
                            <input id="my-input" class="form-control" type="text" name="laboratory_description" value="{{ $lab_detail['laboratory_description'] }}">
                        </div>
                    </div>


                    <div class="d-flex justify-content-center gap-3 mt-5">
                        <button type="submit" name="approve" class="btn btn-success px-5"> Submit </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>