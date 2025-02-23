@extends('layouts.app')

@section('content')
    <h1>Add New Payment</h1>
    <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="patient_id">Patient ID</label>
            <select name="patient_id" id="patient_id" class="form-control" required>
                <option value="" disabled selected>Select a patient</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->user->name }} - {{ $patient->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="pending">Pending</option>
                <option value="paid">Completed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Create Payment</button>
    </form>
@endsection