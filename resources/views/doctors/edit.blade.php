@extends('layouts.app')

@section('content')
    <h1>Edit Doctor</h1>
    <form action="{{ route('doctors.update', $doctor) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $doctor->user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $doctor->user->email }}" required>
        </div>
        <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="text" name="specialization" id="specialization" class="form-control" value="{{ $doctor->specialization }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Doctor</button>
    </form>
    <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back to Doctors</a>
@endsection