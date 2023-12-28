@extends('client.layout.client-main-layout')

@section('title', 'Labacces | Success Form Letter')

@section('content')

@include('client.layout.client-header') 
    <div class="bg-light">
        <div class="container-fluid bg-white">
            <div class="d-flex justify-content-center py-5">
                <img src="images/bro.png" alt="">
            </div>
            <div class="text-center fw-bold">
                The form has been sent, please wait a few moments for confirmation (max 1x24 hours) <br>
                <a href="index" class="btn btn-success px-3 mt-3">Back to home</a>
            </div>
        </div>
    </div>
@endsection