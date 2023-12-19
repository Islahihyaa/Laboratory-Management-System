<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid px-5 justify-content-end">
                <div class="d-flex">
                    <img src="images/image 3.png" alt="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <div class="container py-5">
        <div class="row rows-cols-2 justify-content-between">
            <div class="col-6">
                <img src="images/amico.png" alt="">
            </div>
            <div class="col-4">
                <h3>Account Register</h3>
                <form action="" method="post">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="my-input my-2">Full Name</label>
                        <input id="my-input" class="form-control" type="text" name="full_name" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="my-input my-2">Email Address</label>
                        <input id="my-input" class="form-control" type="email" name="email" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="my-input my-2">NIM</label>
                        <input id="my-input" class="form-control" type="number" name="nim" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="my-input my-2">Date Of Birth</label>
                        <input id="my-input" class="form-control" type="date" name="date_of_birth" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="my-input my-2">Major</label>
                        <select id="my-select" class="form-control" name="major" required>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Digital Supply Chain">Digital Supply Chain</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="my-input my-2">Password</label>
                        <input id="my-input" class="form-control" type="password" name="password" required>
                    </div>


                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" name="register" id="" class="btn btn-success py-2">
                            Continue
                        </button>
                    </div>

                </form>
                <div class="text-center mt-4">
                    Already have account ? <a href="login" class="text-success text-decoration-none">Login Here</a>
                </div>

            </div>


        </div>
    </div>
</body>

</html>