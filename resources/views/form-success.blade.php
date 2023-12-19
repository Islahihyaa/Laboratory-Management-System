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
        <nav class="navbar navbar-expand-lg bg-light ">
            <div class="container-fluid px-5">
                <div class="d-block">
                    <a class="navbar-brand btn btn-success rounded-5 px-4 text-light" href="#">Labacces</a>
                    <img src="images/image 3.png" alt="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div id="navbarSupportedContent">
                    <h6><?php echo Auth::user()->full_name; ?></h6>
                </div>
            </div>
        </nav>
    </header>



    <div class="bg-light">
        <div class="container-fluid bg-white">
            <div class="d-flex justify-content-center py-5">
                <img src="images/bro.png" alt="">
            </div>
            <div class="text-center fw-bold">
                The form has been sent, please wait a few moments for confirmation (max 1x24 hours) <br>
                <a href="index" class="btn btn-success px-3 mt-3">Back to home</a>
            </div>



        </div>


    </div>

</body>

</html>