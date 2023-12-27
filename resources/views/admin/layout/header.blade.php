<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <div class="d-flex justify-content-end w-100">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><?php echo Auth::user()->full_name; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="logout" method="post">Logout</a>
                </li>
            </ul>

        </div>
    </div>
</nav>