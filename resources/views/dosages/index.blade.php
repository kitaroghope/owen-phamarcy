@extends('layouts.app')

@section('content')
    <h1>Dosages</h1>
    <a href="{{ route('dosages.create') }}" class="btn btn-primary">Add New Dosage</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Medication Name</th>
                <th>Dosage</th>
                <th>Schedule</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosages as $dosage)
                <tr>
                    <td>{{ $dosage->id }}</td>
                    <td>{{ $dosage->patient->user->name }}</td>
                    <td>{{ $dosage->medication_name }}</td>
                    <td>{{ $dosage->dosage }}</td>
                    <td>{{ $dosage->schedule }}</td>
                    <td>
                        <a href="{{ route('dosages.show', $dosage) }}" class="btn btn-info">View</a>
                        <a href="{{ route('dosages.edit', $dosage) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('dosages.destroy', $dosage) }}" method="POST" style="display:inline;">
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