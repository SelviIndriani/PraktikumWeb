<!-- resources/views/foods/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Edit Produk</h2>
    <form action="{{ route('foods.update', $food->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name Produk</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $food->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$food->description }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$food->price }}" required>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" class="form-control" id="stok" name="stok" value="{{$food->stok }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Produk</button>
    </form>
@endsection
