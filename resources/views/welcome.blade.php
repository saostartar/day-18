@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>Welcome to Sales and Purchase Management System</h1>
        <p>This application helps you manage products, sales, and purchases efficiently.</p>
        <a href="{{ route('sales.index') }}" class="btn btn-primary">Go to Sales</a>
        <a href="{{ route('purchases.index') }}" class="btn btn-secondary">Go to Purchases</a>
    </div>
@endsection
