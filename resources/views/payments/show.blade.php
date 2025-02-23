@extends('layouts.app')

@section('content')
    <h1>Payment Details</h1>
    <p><strong>ID:</strong> {{ $payment->id }}</p>
    <p><strong>Patient ID:</strong> {{ $payment->patient_id }}</p>
    <p><strong>Amount:</strong> {{ $payment->amount }}</p>
    <p><strong>Status:</strong> {{ $payment->status }}</p>
    <a href="{{ route('payments.edit', $payment) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('payments.destroy', $payment) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('payments.index') }}" class="btn btn-secondary">Back to Payments</a>
@endsection