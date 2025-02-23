@extends('layouts.app')

@section('content')
    <h1>Dosage Details</h1>
    <p><strong>ID:</strong> {{ $dosage->id }}</p>
    <p><strong>Patient Name:</strong> {{ $dosage->patient->user->name }}</p>
    <p><strong>Medication Name:</strong> {{ $dosage->medication_name }}</p>
    <p><strong>Dosage:</strong> {{ $dosage->dosage }}</p>
    <p><strong>Schedule:</strong> {{ $dosage->schedule }}</p>
    <a href="{{ route('dosages.edit', $dosage) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('dosages.destroy', $dosage) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('dosages.index') }}" class="btn btn-secondary">Back to Dosages</a>
@endsection