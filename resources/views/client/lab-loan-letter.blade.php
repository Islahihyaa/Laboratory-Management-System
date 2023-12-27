@extends('client.layout.client-main-layout')

@section('title', 'Labacces | Laboratory Loan Letter')

@section('content')

@include('client.layout.client-header') 

    <div id="status-letter" class="bg-light p-5">
        <h5>Laboratory Loan Letter</h5>
        <div class="container-fluid bg-white p-4 rounded-3 shadow">

            <form action="loan" method="post">
                @csrf
                <div class="row row-cols-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Name</label>
                            <input id="my-input" class="form-control" style="background-color: #e0e0e0;" type="text" name="full_name" value="<?php echo Auth::user()->full_name; ?>" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">NIM</label>
                            <input id="my-input" class="form-control" style="background-color: #e0e0e0;" type="number" name="nim" value="<?php echo Auth::user()->nim; ?>" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Email</label>
                            <input id="my-input" class="form-control" style="background-color: #e0e0e0;" type="email" name="email" value="<?php echo Auth::user()->email; ?>" readonly>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="form-group">
                            <label for="my-input">Major</label>
                            <input id="my-input" class="form-control" style="background-color: #e0e0e0;" type="text" name="major" value="<?php echo Auth::user()->major; ?>" readonly>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-3 mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Date</label>
                            <input id="my-input" class="form-control" type="date" name="date">
                        </div>
                        @if ($errors->has('date'))
                            <p class="text-danger">{{ $errors->first('date') }}</p>
                        @endif

                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Time</label>
                            <input id="my-input" class="form-control" type="time" name="time_rent">
                        </div>

                        @if ($errors->has('time_rent'))                                
                            <p class="text-danger">{{ $errors->first('time_rent') }}</p>
                        @endif
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="my-input">Select Time to Return</label>
                            <input id="my-input" class="form-control" type="time" name="time_return">
                        </div>
                        @if ($errors->has('time_return'))
                            <p class="text-danger">{{ $errors->first('time_return') }}</p>
                         @endif
                    </div>
                    <div class="col mt-3">
                        <div class="form-group mt-3">
                            <label for="my-input">Chose Laboratorium</label>
                            <select name="lab_id" class="form-control" >
                                @foreach($lab_name as $selectlab)
                                <option value="{{ $selectlab->id }}">{{$selectlab -> laboratory_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('lab_id'))
                            <p class="text-danger">{{ $errors->first('lab_id') }}</p>
                         @endif
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label for="my-input">Booking Purpose</label>
                    <input id="my-input" class="form-control" type="text" name="booking_purpose">
                </div>
                    @if ($errors->has('booking_purpose'))
                        <p class="text-danger">{{ $errors->first('booking_purpose') }}</p>

                    @endif
                    
                <div class="d-flex justify-content-end gap-3 mt-5">
                    <a href="index" class="btn btn-danger px-5"> CANCEL</a>
                    <button type="submit" class="btn btn-success px-5"> SUBMIT </button>
                </div>
            </form>
        </div>
    </div>

@endsection
