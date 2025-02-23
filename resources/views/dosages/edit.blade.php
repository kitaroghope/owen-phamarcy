@extends('layouts.app')

@section('content')
    <h1>Edit Dosage</h1>
    <form action="{{ route('dosages.update', $dosage) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="patient_id">Patient</label>
            <select name="patient_id" id="patient_id" class="form-control" required>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $dosage->patient_id == $patient->id ? 'selected' : '' }}>
                        {{ $patient->user->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="medication_name">Medication Name</label>
            <select name="medication_name" id="medication_name" class="form-control" required>
                @foreach($drugs as $drug)
                    <option value="{{ $drug->name }}" {{ $dosage->medication_name == $drug->name ? 'selected' : '' }}>
                        {{ $drug->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="dosage">Dosage</label>
            <input type="text" name="dosage" id="dosage" class="form-control" value="{{ $dosage->dosage }}" required>
        </div>
        <div class="form-group">
            <label for="schedule">Schedule</label>
            <input type="text" name="schedule" id="schedule" class="form-control" value="{{ $dosage->schedule }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Dosage</button>
    </form>
    <a href="{{ route('dosages.index') }}" class="btn btn-secondary">Back to Dosages</a>
@endsection