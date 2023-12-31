@extends('admin.layout.main-layout')

@section('title', 'Labacces | Laboratory Loan Letter')

@section('content')
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
            <form action="/updating-inventory-items" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col">
                        <label for="roomCapacity">Room Capacity</label>
                        <input type="integer" class="form-control mt-1" id="roomCapacity " name="roomCapacity"
                            value={{ $inventory->roomCapacity }} required>
                    </div>

                    <div class="col">
                        <label for="computerAvaiable">Avaiable Computer</label>
                        <input type="integer" class="form-control mt-1" id="computerAvaiable" name="computerAvaiable"
                            value={{ $inventory->computerAvaiable }}>
                    </div>

                    <div class="col">
                        <label for="screenProjector">Screen Projector</label>
                        <input type="integer" class="form-control mt-1" id="screenProjector" name="screenProjector"
                            value={{ $inventory->screenProjector }}>
                    </div>

                    <div class="col">
                        <label for="projector">Projector</label>
                        <input type="integer" class="form-control mt-1" id="projector" name="projector"
                            value={{ $inventory->projector }}>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $inventory->id }}">
                <div class="action-area mt-4">
                    <button type="submit" class="justify-content-end btn btn-success">Update</button>
                    <a href="/laboratory" class="btn btn-success">Back</a>
                </div>


            </form>
        </div>


    </div>
@endsection