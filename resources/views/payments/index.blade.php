@extends('layouts.app')

@section('content')
    <h1>Payments</h1>
    <a href="{{ route('payments.create') }}" class="btn btn-primary">Add New Payment</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Patient ID</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->patient_id }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->status }}</td>
                    <td>
                        <a href="{{ route('payments.show', $payment) }}" class="btn btn-info">View</a>
                        <a href="{{ route('payments.edit', $payment) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('payments.destroy', $payment) }}" method="POST" style="display:inline;">
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