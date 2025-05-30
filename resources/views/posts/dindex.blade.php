@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Blog Posts</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-success">+ New Post</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @forelse ($posts as $post)
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none text-dark">
                        {{ $post->title }}
                    </a>
                </h4>
                <p class="card-text">{{ Str::limit($post->content, 100) }}</p>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>

                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-info">No posts found.</div>
    @endforelse

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection