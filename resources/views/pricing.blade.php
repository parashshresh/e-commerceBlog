@extends('layouts.app')

@section('content')
<!-- Add this in your Blade or HTML file -->

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Our Pricing Plans</h2>
    <div class="row g-4 justify-content-center">

      <!-- Basic Plan -->
      <div class="col-md-4">
        <div class="card border-primary shadow-sm h-100">
          <div class="card-header text-center bg-primary text-white">
            <h3 class="my-0">Basic</h3>
          </div>
          <div class="card-body text-center">
            <h4 class="card-title pricing-card-title">$9 <small class="text-muted">/ month</small></h4>
            <ul class="list-unstyled mt-3 mb-4">
              <li>5 Projects</li>
              <li>10 GB Storage</li>
              <li>Email Support</li>
              <li>Help Center Access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-outline-primary w-100">Sign up</button>
          </div>
        </div>
      </div>

      <!-- Pro Plan -->
      <div class="col-md-4">
        <div class="card border-success shadow-sm h-100">
          <div class="card-header text-center bg-success text-white">
            <h3 class="my-0">Pro</h3>
          </div>
          <div class="card-body text-center">
            <h4 class="card-title pricing-card-title">$29 <small class="text-muted">/ month</small></h4>
            <ul class="list-unstyled mt-3 mb-4">
              <li>50 Projects</li>
              <li>100 GB Storage</li>
              <li>Priority Email Support</li>
              <li>Help Center Access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-outline-success w-100">Get started</button>
          </div>
        </div>
      </div>

      <!-- Enterprise Plan -->
      <div class="col-md-4">
        <div class="card border-danger shadow-sm h-100">
          <div class="card-header text-center bg-danger text-white">
            <h3 class="my-0">Enterprise</h3>
          </div>
          <div class="card-body text-center">
            <h4 class="card-title pricing-card-title">$99 <small class="text-muted">/ month</small></h4>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Unlimited Projects</li>
              <li>1 TB Storage</li>
              <li>Phone & Email Support</li>
              <li>Personalized Help Center</li>
            </ul>
            <button type="button" class="btn btn-lg btn-outline-danger w-100">Contact us</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Bootstrap JS Bundle (optional, for components that need JS) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


@endsection