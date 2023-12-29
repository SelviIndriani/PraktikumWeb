<!-- resources/views/foods/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>LIST PRODUK </h2>
    <a href="{{ route('foods.create') }}" class="btn btn-primary">Add Produk</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stok</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foods as $food)
                <tr>
                    <td>{{ $food->id }}</td>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->description }}</td>
                    <td>{{ $food->price }}</td>
                    <td>{{ $food->stok }}</td>
                    <td>
                        <a href="{{ route('foods.show', $food->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('foods.edit', $food->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('foods.destroy', $food->id) }}" method="POST" style="display:inline">
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
