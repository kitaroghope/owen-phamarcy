@extends('layouts.app')

@section('content')
    <h1>Add New Doctor</h1>
    <form action="{{ route('doctors.store') }}" method="POST">
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
            <label for="specialization">Specialization</label>
            <input type="text" name="specialization" id="specialization" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create Doctor</button>
    </form>
@endsection