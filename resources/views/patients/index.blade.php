@extends('layouts.app')

@section('content')
    <h1>Patients</h1>
    <a href="{{ route('patients.create') }}" class="btn btn-primary">Add New Patient</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Medical History</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->user_id }}</td>
                    <td>{{ $patient->medical_history }}</td>
                    <td>
                        <a href="{{ route('patients.show', $patient) }}" class="btn btn-info">View</a>
                        <a href="{{ route('patients.edit', $patient) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('patients.destroy', $patient) }}" method="POST" style="display:inline;">
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