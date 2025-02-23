@extends('layouts.app')

@section('content')
    <h1>Edit Payment</h1>
    <form action="{{ route('payments.update', $payment) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="patient_id">Patient ID</label>
            <select name="patient_id" id="patient_id" class="form-control" required>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $payment->patient_id == $patient->id ? 'selected' : '' }}>
                        {{ $patient->id }} - {{ $patient->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" value="{{ $payment->amount }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value ="pending" {{ $payment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="paid" {{ $payment->status == 'paid' ? 'selected' : '' }}>Completed</option>
                <option value="refunded" {{ $payment->status == 'refunded' ? 'selected' : '' }}>Failed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update Payment</button>
    </form>
@endsection