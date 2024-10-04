@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Create New Product</a>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }} - {{ $product->price }} - Stock: {{ $product->stock }}</li>
        @endforeach
    </ul>
@endsection
