@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name">
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
        <label for="stock">Stock:</label>
        <input type="text" name="stock" id="stock">
        <button type="submit">Save</button>
    </form>
@endsection
