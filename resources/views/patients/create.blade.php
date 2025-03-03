@extends('layouts.app')

@section('content')
    <h1>Add New Patient</h1>
    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="medical_history">Medical History</label>
            <textarea name="medical_history" id="medical_history" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create Patient</button>
    </form>
@endsection