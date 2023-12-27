@extends('admin.layout.main-layout')

@section('title', 'Labacces | Confirmation Update')

@section('content')
    <div id="status-letter" class="bg-light p-5">
        
        <div class="container-fluid bg-white p-4 rounded-3 shadow">
            <h5 class="mb-4">Confirmation</h5>
            <form action="" method="post">
                @csrf
                @method('PUT')
                <div class="row row-cols-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Name</label>
                            <input id="my-input" class="form-control" type="text" name="full_name" value="{{ $status_update->user->full_name }}" style="background-color: #e0e0e0;" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">NIM</label>
                            <input id="my-input" class="form-control" type="number" name="nim" value="{{ $status_update->user->nim }}"  style="background-color: #e0e0e0;" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Email</label>
                            <input id="my-input" class="form-control" type="email" name="email" value="{{ $status_update->user->email }}" style="background-color: #e0e0e0;" readonly>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="form-group">
                            <label for="my-input">Major</label>
                            <input id="my-input" class="form-control" type="text" name="major" value="{{ $status_update->user->major }}" style="background-color: #e0e0e0;" readonly>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-3 mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Date</label>
                            <input id="my-input" class="form-control" type="date" name="date"  value="{{ $status_update->date }}" style="background-color: #e0e0e0;" readonly>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Time</label>
                            <input id="my-input" class="form-control" name="time_rent" value="{{ $status_update->time_rent }}" style="background-color: #e0e0e0;" readonly>
                        </div>
                    </div>


                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Time to Return</label>
                            <input id="my-input" class="form-control" name="time_return" value="{{ $status_update->time_return }}" style="background-color: #e0e0e0;" readonly>
                        </div>
                    </div>


                    <div class="col mt-3">
                        <div class="form-group mt-3">
                            <label for="my-input">Laboratorium</label>
                            <input id="my-input" class="form-control" type="text" name="lab" value="{{ $status_update->laboratory->laboratory_name }}" style="background-color: #e0e0e0;" readonly>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label for="my-input">Booking Purpose</label>
                    <input id="my-input" class="form-control" type="text" name="booking_purpose" value="{{ $status_update->booking_purpose }}" style="background-color: #e0e0e0;" readonly>
                </div>

                <div class="d-flex justify-content-center gap-3 mt-5">
                    <button type="submit" name="reject" class="btn btn-danger px-5"> REJECT </button>
                    <button type="submit" name="approve" class="btn btn-success px-5"> APPROVE </button>
                </div>

            </form>
        </div>
    </div>
    @endsection