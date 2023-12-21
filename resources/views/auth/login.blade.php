<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <div class="col-4">
                <div class="card-text">
					<h4 class="card-title fs-1 mb-2">Account Login</h4>
						<p class="card-text fs-5 text-muted mb-5">If you already have an account, you can login with your email address and password.</p>
				</div>
                @if(Session::has('message'))
                    <div class="alert alert-danger"> {{ Session::get('message') }}</div>
                @endif
                @if(Session::has('status'))
                    <div class="alert alert-success"> {{ Session::get('status') }}</div>
                @endif
                <form action="" method="POST">
                @csrf
                    <div class="form-group mt-3">
                        <label for="my-input">Email Address</label>
                        <input id="my-input" class="form-control" type="email" name="email" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="my-input">Password</label>
                        <input id="my-input" class="form-control" type="password" name="password" required>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" name="login" id="" class="btn btn-success">
                            Login
                        </button>
                    </div>

                </form>
                <div class="text-center mt-4">
                    Doesn't have an account ? <a href="register" class="text-success text-decoration-none">Sign Up Here</a>
                </div>
            </div>
            <div class="col-6">
                <img src="images/pana.png" alt="">
            </div>

        </div>
    </div>
</body>

</html>