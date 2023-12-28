@extends('admin.layout.main-layout')

@section('title', 'Labacces | Edit Laboratory')

@section('content')
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
@endsection