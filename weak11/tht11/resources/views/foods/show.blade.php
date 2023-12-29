<!-- resources/views/foods/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>{{ $food->name }}</h2>
    <p>{{ $food->description }}</p>
    <a href="{{ route('foods.edit', $food->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('foods.destroy', $food->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('foods.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
