@extends('layouts.app')

@section('content')
    <h1>Add New Dosage</h1>
    <form action="{{ route('dosages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="patient_id">Patient</label>
            <select name="patient_id " id="patient_id" class="form-control" required>
                <option value="" disabled selected>Select a patient</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="medication_name">Medication Name</label>
            <select name="medication_name" id="medication_name" class="form-control" required>
                <option value="" disabled selected>Select a medication</option>
                @foreach($drugs as $drug)
                    <option value="{{ $drug->name }}">{{ $drug->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="dosage">Dosage</label>
            <input type="text" name="dosage" id="dosage" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="schedule">Schedule</label>
            <input type="text" name="schedule" id="schedule" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create Dosage</button>
    </form>
@endsection