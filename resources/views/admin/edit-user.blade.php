@extends('admin.layout.main-layout')

@section('title', 'Labacces | Edit Profile')

@section('content')
        <div id="status-letter" class="bg-light p-5">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        User Information
                    </div>
                    <div class="float-end">
                        <a href="{{ url('user-manage') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>

                <form action="" method="post">
                @csrf
                @method('PUT')
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name :</strong></label>
                            <div class="col-md-6" style="line-height: 35px;">
                            <input class="form-control" type="text" name="full_name" value="{{$user_to_edit ->full_name}}" >

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email Address :</strong></label>
                            <div class="col-md-6" style="line-height: 35px;">
                            <input class="form-control" type="email" name="email" value="{{$user_to_edit ->email}}" >
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong>Date of Birth :</strong></label>
                            <div class="col-md-6" style="line-height: 35px;">
                            <input class="form-control" type="date" name="date_of_birth" value="{{$user_to_edit ->date_of_birth}}" >
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong>Password :</strong></label>
                            <div class="col-md-6" style="line-height: 35px;">
                            <input class="form-control" type="password" name="password" >
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong>Confirm Password :</strong></label>
                            <div class="col-md-6" style="line-height: 35px;">
                            <input class="form-control" type="password" name="password_confirmation">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-success px-5"> SUBMIT </button>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </form>
            </div> 
        </div>
    </div>
@endsection