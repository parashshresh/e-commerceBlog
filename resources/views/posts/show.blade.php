@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text mt-3">{{ $post->content }}</p>

            <div class="mt-4 d-flex gap-2">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-primary">Edit</a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">← Back to Posts</a>
    </div>
</div>
@endsection