@extends('layouts.app')

@section('content')
    <h1>Doctors</h1>
    <a href="{{ route('doctors.create') }}" class="btn btn-primary">Add New Doctor</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Specialization</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->user->name }}</td>
                    <td>{{ $doctor->user->email }}</td>
                    <td>{{ $doctor->specialization }}</td>
                    <td>
                        <a href="{{ route('doctors.show', $doctor) }}" class="btn btn-info">View</a>
                        <a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('doctors.destroy', $doctor) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection