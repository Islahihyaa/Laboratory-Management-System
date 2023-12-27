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