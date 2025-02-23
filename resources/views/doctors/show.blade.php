@extends('layouts.app')

@section('content')
    <h1>Doctor Details</h1>
    <p><strong>ID:</strong> {{ $doctor->id }}</p>
    <p><strong>Name:</strong> {{ $doctor->user->name }}</p>
    <p><strong>Email:</strong> {{ $doctor->user->email }}</p>
    <p><strong>Specialization:</strong> {{ $doctor->specialization }}</p>
    <a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('doctors.destroy', $doctor) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back to Doctors</a>
@endsection