@extends('admin.layout.main-layout')

@section('title', 'Labacces | Add Laboratory')

@section('content')

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

    <div class="bg-light p-5">
        <h5> Add Laboratory</h5>
        <div class="container-fluid bg-white p-4 rounded-3 shadow">
            <form action="laboratory-add" method="post">
                @csrf
                <div class="row row-cols-3 mt-4">

                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Laboratory name</label>
                            <input id="my-input" class="form-control" type="text" name="laboratory_name" >
                        </div>
                        @if ($errors->has('laboratory_name'))
                            <p class="text-danger">{{ $errors->first('laboratory_name') }}</p>
                        @endif
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Laboratory Description</label>
                            <input id="my-input" class="form-control" type="text" name="laboratory_description">
                        </div>
                        @if ($errors->has('laboratory_description'))
                            <p class="text-danger">{{ $errors->first('laboratory_description') }}</p>
                        @endif
                    </div>
                    
                    <div class="col">
                        <div class="gap-5">
                            <button type="submit" class="justify-content-end btn btn-success"> SUBMIT </button>
                            <a href="laboratory" class="btn btn-danger"> CANCEL</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection