@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Category Details</h1>

    <div class="card p-3">
        <h3>{{ $category->name }}</h3>
        <p>Created at: {{ $category->created_at->format('d M Y') }}</p>
        <p>Updated at: {{ $category->updated_at->format('d M Y') }}</p>
    </div>

    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning mt-3">Edit</a>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection