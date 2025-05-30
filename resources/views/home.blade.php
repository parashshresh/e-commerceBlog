@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero bg-primary text-white py-5 mb-5" style="background: url('https://pd.w.org/2025/05/3606836bf27ab0023.41048351-2048x1536.jpg') center/cover no-repeat;">
  <div class="container text-center">
    <h1 class="display-4 fw-bold">Welcome to My WooShop</h1>
    <p class="lead mb-4">Discover amazing products, great deals, and fast shipping.</p>
    <a href="#" class="btn btn-light btn-lg">Shop Now</a>
  </div>
</section>

<!-- Featured Products -->
<section class="container mb-5">
  <h2 class="mb-5 text-center">Featured Products</h2>
  <div class="row g-4">
    {{-- Dynamic products from controller --}}
    @foreach ($products as $product)
      <div class="col-6 col-md-4 col-lg-3">
        <div class="card shadow-sm h-100">
          <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="price text-primary fw-bold mb-3">${{ number_format($product->price, 2) }}</p>
            <a href="#" class="btn btn-outline-primary mt-auto">Add to Cart</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>

<!-- Call to Action -->
<section class="bg-primary text-white py-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-8 col-lg-6">
        <h3>Sign up for exclusive deals and offers</h3>
        <form class="row g-3 mt-3" style="max-width: 600px; margin: auto;">
          <div class="col-9">
            <input type="email" class="form-control form-control-lg" placeholder="Enter your email" required />
          </div>
          <div class="col-3">
            <button type="submit" class="btn btn-light btn-lg w-100">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection