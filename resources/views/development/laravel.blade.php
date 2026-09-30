@extends('layouts.app')

@section('title', "Laravel - TechNova")

@push('styles')
  <link href="{{ asset('assets/css/pcandmobile/index.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pcandmobile/subcategory.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/development/laravel.css') }}" rel="stylesheet">
@endpush

@section('content')

<!-- ========== BANNER + BREADCRUMB ========== -->
<section class="container-fluid cat-banner sub-banner laravel-banner">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('development.index') }}">Development</a></li>
        <li class="breadcrumb-item active" aria-current="page">Laravel</li>
      </ol>
    </nav>
    <div class="d-flex align-items-center gap-3">
      <i class="bi bi-code-slash banner-icon"></i>
      <div>
        <h1 class="fw-bold mb-1">Laravel</h1>
        <p class="mb-0">Tutorials, new releases, packages and tips for building web apps with Laravel.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== ARTICLES + SIDEBAR ========== -->
<main class="container py-4">
  <div class="row g-4">

    <div class="col-lg-8">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h5 fw-bold section-title m-0">Latest Laravel Articles</h2>
        <small class="text-muted">10 Articles</small>
      </div>

      <div class="row g-4">
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/laravel.png') }}" alt="Laravel 11" loading="lazy"></div>
            <span class="tag">Release</span>
            <h3>Laravel 11 Released: Everything New for Developers</h3>
            <p>A slimmer app structure, faster startup and helpful new features.</p>
            <div class="foot"><span>2 hours ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/Laravel_Microservices_deee6779d5.jpg') }}" alt="Laravel and React" loading="lazy"></div>
            <span class="tag">Tutorial</span>
            <h3>Build a Full Stack Web App with Laravel and React</h3>
            <p>Step by step from a fresh install to a working app.</p>
            <div class="foot"><span>Yesterday</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-cottonbro-6804613.jpg') }}" alt="Laravel Breeze" loading="lazy"></div>
            <span class="tag">Guide</span>
            <h3>Laravel Authentication Made Simple with Breeze</h3>
            <p>Add login, register and password reset in a few minutes.</p>
            <div class="foot"><span>2 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-mikhail-nilov-6930895.jpg') }}" alt="Eloquent" loading="lazy"></div>
            <span class="tag">Tips</span>
            <h3>10 Laravel Eloquent Tips to Write Cleaner Queries</h3>
            <p>Small habits that make your database code faster and easier to read.</p>
            <div class="foot"><span>3 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-altman-12883029.jpg') }}" alt="REST API" loading="lazy"></div>
            <span class="tag">Guide</span>
            <h3>How to Build a REST API with Laravel</h3>
            <p>Routes, controllers, validation and API resources explained.</p>
            <div class="foot"><span>4 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-alicia-christin-gerald-1447380217-37880101.jpg') }}" alt="Laravel packages" loading="lazy"></div>
            <span class="tag">Tools</span>
            <h3>Best Laravel Packages Every Developer Should Know</h3>
            <p>Useful packages that save hours of work on every project.</p>
            <div class="foot"><span>5 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
      </div>

      <nav aria-label="Page navigation" class="mt-4">
        <ul class="pagination justify-content-center">
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next <i class="bi bi-arrow-right"></i></a></li>
        </ul>
      </nav>
    </div>

    <aside class="col-lg-4">
      <div class="sidebar">

        <div class="box mb-4">
          <h3 class="widget-title">Popular Topics</h3>
          <div class="chips"><a href="#">Laravel 11</a><a href="#">Eloquent</a><a href="#">API</a><a href="#">Breeze</a><a href="#">Blade</a><a href="#">Queues</a><a href="#">Testing</a><a href="#">Tips</a></div>
        </div>

        <div class="box mb-4">
          <h3 class="widget-title">Top Laravel Reads</h3>
          <div class="trend d-flex gap-3">
            <span class="num">1</span>
            <div class="trend-img"><img src="{{ asset('assets/images/laravel.png') }}" alt="Laravel 11" loading="lazy"></div>
            <div><h4>Laravel 11 Release Guide</h4><small class="text-muted">Start here</small></div>
          </div>
          <div class="trend d-flex gap-3">
            <span class="num">2</span>
            <div class="trend-img"><img src="{{ asset('assets/images/pexels-altman-12883029.jpg') }}" alt="REST API" loading="lazy"></div>
            <div><h4>Build a REST API</h4><small class="text-muted">Most read tutorial</small></div>
          </div>
          <div class="trend d-flex gap-3 border-0 pb-0 mb-0">
            <span class="num">3</span>
            <div class="trend-img"><img src="{{ asset('assets/images/pexels-mikhail-nilov-6930895.jpg') }}" alt="Eloquent" loading="lazy"></div>
            <div><h4>Eloquent Tips</h4><small class="text-muted">Best for beginners</small></div>
          </div>
        </div>

        <div class="box subscribe">
          <h3 class="widget-title">Laravel Updates</h3>
          <p class="small text-muted">Get new Laravel articles in your inbox.</p>
          <form action="" method="POST">
            @csrf
            <input type="email" name="email" class="form-control mb-2" placeholder="Enter your email address" required>
            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
          </form>
        </div>
      </div>
    </aside>
  </div>
</main>

@endsection