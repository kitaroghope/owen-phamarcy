@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">
        @if (Route::has('login'))
            <div class="position-absolute top-0 end-0 p-3">
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-outline-primary">Home</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary ms-2">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <h1 class="display-4 fw-bold">Welcome to Pharmacy</h1>
        <p class="lead text-muted">Manage doctors, patients, appointments, and more.</p>

        <div class="row mt-5">
            @php
                $links = [
                    ['route' => 'doctors.index', 'title' => 'Doctors', 'desc' => 'Manage and view all doctors.'],
                    ['route' => 'patients.index', 'title' => 'Patients', 'desc' => 'Manage and view all patients.'],
                    ['route' => 'appointments.index', 'title' => 'Appointments', 'desc' => 'Schedule and manage appointments.'],
                    ['route' => 'payments.index', 'title' => 'Payments', 'desc' => 'Process and manage payments.'],
                    ['route' => 'drugs.index', 'title' => 'Drugs', 'desc' => 'Manage and view pharmacy inventory.']
                ];
            @endphp

            @foreach ($links as $link)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $link['title'] }}</h5>
                            <p class="card-text text-muted">{{ $link['desc'] }}</p>
                            <a href="{{ route($link['route']) }}" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <footer class="mt-5 text-muted small">
            Pharmacy v1.0 (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
@endsection
