@extends('layouts.app')

@section('title', "Development - TechNova")

@push('styles')
  <link href="{{ asset('assets/css/pcandmobile/index.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pcandmobile/subcategory.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/development/index.css') }}" rel="stylesheet">
@endpush

@section('content')

<!-- ========== CATEGORY BANNER (full width) ========== -->
<section class="container-fluid cat-banner development-banner">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <span class="badge bg-light text-primary mb-3">18 Articles</span>
        <h1 class="fw-bold">Development</h1>
        <p class="mb-0">Tutorials, guides and tips for building modern web apps with Laravel and microservices.</p>
      </div>
      <div class="col-lg-5">
        <div class="row g-3 text-center">
          <div class="col-6"><a href="{{ route('development.laravel') }}" class="os-tile"><i class="bi bi-code-slash"></i><small>Laravel</small></a></div>
          <div class="col-6"><a href="{{ route('development.microservices') }}" class="os-tile"><i class="bi bi-diagram-3"></i><small>Microservices</small></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== FILTER PILLS ========== -->
<section class="container pt-4">
  <ul class="nav nav-pills filter gap-2">
    <li class="nav-item"><a class="nav-link active" href="{{ route('development.index') }}">All</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('development.laravel') }}">Laravel</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('development.microservices') }}">Microservices</a></li>
  </ul>
</section>

<!-- ========== FEATURED (1 big + 2 small) ========== -->
<section class="container py-4">
  <div class="row g-4">
    <div class="col-lg-7">
      <a href="#" class="feature big d-flex align-items-end">
        <img class="feature-img" src="{{ asset('assets/images/Laravel_Microservices_deee6779d5.jpg') }}" alt="Laravel and React" loading="lazy">
        <div>
          <span class="badge bg-primary mb-2">Laravel</span>
          <h2>Build a Full Stack Web App with Laravel and React</h2>
          <small><i class="bi bi-clock"></i> Yesterday</small>
        </div>
      </a>
    </div>
    <div class="col-lg-5 d-flex flex-column gap-4">
      <a href="#" class="feature small-f d-flex align-items-end">
        <img class="feature-img" src="{{ asset('assets/images/pexels-alicia-christin-gerald-1447380217-37880101.jpg') }}" alt="Monolith vs microservices" loading="lazy">
        <div>
          <span class="badge bg-primary mb-2">Microservices</span>
          <h3>Microservices vs Monolith: Which Should You Choose?</h3>
        </div>
      </a>
      <a href="#" class="feature small-f d-flex align-items-end">
        <img class="feature-img" src="{{ asset('assets/images/pexels-altman-12883029.jpg') }}" alt="REST API" loading="lazy">
        <div>
          <span class="badge bg-primary mb-2">Laravel</span>
          <h3>How to Build a REST API with Laravel</h3>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ========== ARTICLE GRID (3 columns) ========== -->
<section class="container pb-5">
  <h2 class="h5 fw-bold section-title mb-3">Latest in Development</h2>

  <div class="row g-4">
    <div class="col-md-6 col-lg-4">
      <article class="box card-item h-100">
        <div class="thumb"><img src="{{ asset('assets/images/laravel.png') }}" alt="Laravel 11" loading="lazy"></div>
        <span class="tag">Laravel</span>
        <h3>Laravel 11 Released: Everything New for Developers</h3>
        <p>A slimmer app structure, faster startup and helpful new features.</p>
        <div class="foot"><span>2 hours ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
      </article>
    </div>
    <div class="col-md-6 col-lg-4">
      <article class="box card-item h-100">
        <div class="thumb"><img src="{{ asset('assets/images/pexels-andrew-15863044.jpg') }}" alt="Monolith" loading="lazy"></div>
        <span class="tag">Microservices</span>
        <h3>Microservices vs Monolith: Which Should You Choose?</h3>
        <p>A simple comparison to help you pick the right architecture.</p>
        <div class="foot"><span>Yesterday</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
      </article>
    </div>
    <div class="col-md-6 col-lg-4">
      <article class="box card-item h-100">
        <div class="thumb"><img src="{{ asset('assets/images/pexels-cottonbro-6804613.jpg') }}" alt="Breeze" loading="lazy"></div>
        <span class="tag">Laravel</span>
        <h3>Laravel Authentication Made Simple with Breeze</h3>
        <p>Add login, register and password reset in a few minutes.</p>
        <div class="foot"><span>2 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
      </article>
    </div>
    <div class="col-md-6 col-lg-4">
      <article class="box card-item h-100">
        <div class="thumb"><img src="{{ asset('assets/images/pexels-magda-ehlers-pexels-35280155.jpg') }}" alt="Patterns" loading="lazy"></div>
        <span class="tag">Microservices</span>
        <h3>5 Microservices Patterns Every Developer Should Know</h3>
        <p>API gateway, service discovery, circuit breaker and more.</p>
        <div class="foot"><span>3 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
      </article>
    </div>
    <div class="col-md-6 col-lg-4">
      <article class="box card-item h-100">
        <div class="thumb"><img src="{{ asset('assets/images/pexels-mikhail-nilov-6930895.jpg') }}" alt="Eloquent" loading="lazy"></div>
        <span class="tag">Laravel</span>
        <h3>10 Laravel Eloquent Tips to Write Cleaner Queries</h3>
        <p>Small habits that make your database code faster.</p>
        <div class="foot"><span>4 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
      </article>
    </div>
    <div class="col-md-6 col-lg-4">
      <article class="box card-item h-100">
        <div class="thumb"><img src="{{ asset('assets/images/pexels-izafi-39534908.jpg') }}" alt="Docker" loading="lazy"></div>
        <span class="tag">Microservices</span>
        <h3>Build Your First Microservice with Docker</h3>
        <p>Package a small service and run it in a container.</p>
        <div class="foot"><span>5 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
      </article>
    </div>
  </div>

  <div class="text-center mt-5">
    <a href="#" class="btn btn-primary px-5">Load More Articles</a>
  </div>
</section>

@endsection