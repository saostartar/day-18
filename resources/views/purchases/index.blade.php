@extends('layouts.app')

@section('content')
    <h1>Purchases</h1>
    <a href="{{ route('purchases.create') }}" class="btn btn-primary">Create New Purchase</a>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Product</th>
                <th>Supplier</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchases as $purchase)
                <tr>
                    <td>{{ $purchase->product->name }}</td>
                    <td>{{ $purchase->supplier->name }}</td>
                    <td>{{ $purchase->quantity }}</td>
                    <td>{{ $purchase->total_price }}</td>
                    <td>
                        <a href="{{ route('purchases.edit', $purchase->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('purchases.destroy', $purchase->id) }}" method="POST" style="display: inline-block;">
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
