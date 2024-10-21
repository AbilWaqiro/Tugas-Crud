@extends('layouts.app')

@section('content')
    <div class="container mt-5"> <!-- Use a valid Bootstrap margin class -->
        <div class="row align-items-center my-4">
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/model.jpg') }}" alt="Model" class="img-fluid rounded" style="max-width: 500px;"> <!-- Adjust max-width as needed -->
            </div>
            <div class="col-md-6 text-center">
                <h1>Absensi Karyawan</h1>
                <p><b>Get Started</b></p>
            </div>
        </div>
    </div>
@endsection


