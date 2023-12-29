<!-- resources/views/foods/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Add Produk</h2>
    <form action="{{ route('foods.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name Produk </label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" class="form-control" id="stok" name="stok" required>
        </div>
        <button type="submit" class="btn btn-primary">Add List Produk</button>
    </form>
@endsection
