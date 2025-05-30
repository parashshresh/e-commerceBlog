@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Create New Post</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following issues:
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" class="card p-4 shadow-sm border-0">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content:</label>
            <textarea name="content" id="content" rows="5" class="form-control" required>{{ old('content') }}</textarea>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
@endsection