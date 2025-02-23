@extends('layouts.app')

@section('content')
    <h1>Appointment Details</h1>
    <p><strong>ID:</strong> {{ $appointment->id }}</p>
    <p><strong>Patient Name:</strong> {{ $appointment->patient->user->name }}</p>
    <p><strong>Doctor Name:</strong> {{ $appointment->doctor->user->name }}</p>
    <p><strong>Appointment Time:</strong> {{ $appointment->appointment_time }}</p>
    <p><strong>Status:</strong> {{ $appointment->status }}</p>
    <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Back to Appointments</a>
@endsection