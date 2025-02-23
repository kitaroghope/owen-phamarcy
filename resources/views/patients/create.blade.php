@extends('layouts.app')

@section('content')
    <h1>Add New Patient</h1>
    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User  ID</label>
            <input type="text" name="user_id" id="user_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="medical_history">Medical History</label>
            <textarea name="medical_history" id="medical_history" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create Patient</button>
    </form>
@endsection