@extends('layouts.app')

@section('content')
    <h1>Patient Details</h1>
    <p><strong>ID:</strong> {{ $patient->id }}</p>
    <p><strong>User ID:</strong> {{ $patient->user_id }}</p>
    <p><strong>Medical History:</strong> {{ $patient->medical_history }}</p>
    <a href="{{ route('patients.edit', $patient) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('patients.destroy', $patient) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back to Patients</a>
@endsection