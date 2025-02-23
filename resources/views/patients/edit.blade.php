@extends('layouts.app')

@section('content')
    <h1>Edit Patient</h1>
    <form action="{{ route('patients.update', $patient) }}" method="POST">
        @csrf
        @method('PUT')
        < div class="form-group">
            <label for="user_id">User  ID</label>
            <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $patient->user_id }}" required>
        </div>
        <div class="form-group">
            <label for="medical_history">Medical History</label>
            <textarea name="medical_history" id="medical_history" class="form-control">{{ $patient->medical_history }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update Patient</button>
    </form>
    <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back to Patients</a>
@endsection