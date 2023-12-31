@extends('client.layout.client-main-layout')

@section('title', 'Labacces | Status Letter')

@section('content')

@include('client.layout.client-header') 

    <div id="status-letter" class="bg-light p-5">
        <h5>Booking Status</h5>
        <div class="container-fluid bg-white p-4">
            <a href="booking-now" class="btn btn-success">Booking Now</a>
            <hr>
            <div class="table-responsive">
                <table class="table  table-hover table-bordered table-white align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Submission Date</th>
                            <th>Laboratory</th>
                            <th>Booking Date</th>
                            <th>Time</th>
                            <th>Purpose</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($book_status as $item)
                            <tr>
                                <td scope="row">{{ $item -> created_at}}</td>
                                <td scope="row">{{ $item -> laboratory -> laboratory_name }}</td>
                                <td scope="row">{{ $item -> date}}</td>
                                <td scope="row">{{ $item -> time_rent}} - {{ $item -> time_return}}</td>
                                <td scope="row">{{ $item -> booking_purpose}}</td>
                                <td scope="row">
                                @if ($item->status == 'APPROVED')
                                    <i class="fw-bolder text-success">APPROVED</i> 
                                @elseif ($item->status == 'REJECT')
                                    <i class="fw-bolder text-danger">REJECTED</i>
                                @else
                                    <i class="fw-bolder text-secondary">PENDING</i>
                                @endif</td>
                                <td scope="row">
                                    <a href="{{ url('status-letter/delete/'.$item->id)}}" class="btn btn-danger">Delete</a></td>
                                    
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(Session::has('deletedMessage'))
                    <div class="alert alert-danger alert-lg"> {{ Session::get('deletedMessage') }}</div>
                @endif
            </div>
        </div>
    </div>
    
@endsection