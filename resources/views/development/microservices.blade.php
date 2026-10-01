@extends('layouts.app')

@section('title', "Microservices - TechyStatus")

@push('styles')
  <link href="{{ asset('assets/css/pcandmobile/index.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pcandmobile/subcategory.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/development/microservices.css') }}" rel="stylesheet">
@endpush

@section('content')

<!-- ========== BANNER + BREADCRUMB ========== -->
<section class="container-fluid cat-banner sub-banner microservices-banner">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('development.index') }}">Development</a></li>
        <li class="breadcrumb-item active" aria-current="page">Microservices</li>
      </ol>
    </nav>
    <div class="d-flex align-items-center gap-3">
      <i class="bi bi-diagram-3 banner-icon"></i>
      <div>
        <h1 class="fw-bold mb-1">Microservices</h1>
        <p class="mb-0">Architecture guides, patterns, tools and real examples for building with microservices.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== ARTICLES + SIDEBAR ========== -->
<main class="container py-4">
  <div class="row g-4">

    <div class="col-lg-8">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h5 fw-bold section-title m-0">Latest Microservices Articles</h2>
        <small class="text-muted">8 Articles</small>
      </div>

      <div class="row g-4">
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-andrew-15863044.jpg') }}" alt="Monolith vs microservices" loading="lazy"></div>
            <span class="tag">Guide</span>
            <h3>Microservices vs Monolith: Which Should You Choose?</h3>
            <p>A simple comparison to help you pick the right architecture.</p>
            <div class="foot"><span>2 hours ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-alicia-christin-gerald-1447380217-37880101.jpg') }}" alt="Patterns" loading="lazy"></div>
            <span class="tag">Pattern</span>
            <h3>5 Microservices Patterns Every Developer Should Know</h3>
            <p>API gateway, service discovery, circuit breaker and more.</p>
            <div class="foot"><span>Yesterday</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-izafi-39534908.jpg') }}" alt="Docker" loading="lazy"></div>
            <span class="tag">Tutorial</span>
            <h3>Build Your First Microservice with Docker</h3>
            <p>Package a small service and run it in a container.</p>
            <div class="foot"><span>2 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-magda-ehlers-pexels-35280155.jpg') }}" alt="Services talking" loading="lazy"></div>
            <span class="tag">Guide</span>
            <h3>How Microservices Talk to Each Other</h3>
            <p>REST, gRPC and message queues explained with examples.</p>
            <div class="foot"><span>3 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-cottonbro-6804613.jpg') }}" alt="Mistakes" loading="lazy"></div>
            <span class="tag">Tips</span>
            <h3>Common Microservices Mistakes and How to Avoid Them</h3>
            <p>Learn from problems that many teams run into.</p>
            <div class="foot"><span>4 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-stanley-ng-2850879-4387779.jpg') }}" alt="Monitoring" loading="lazy"></div>
            <span class="tag">Tools</span>
            <h3>Best Tools for Monitoring Microservices</h3>
            <p>Logs, metrics and tracing tools that keep services healthy.</p>
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
          <div class="chips"><a href="#">Docker</a><a href="#">Kubernetes</a><a href="#">API Gateway</a><a href="#">gRPC</a><a href="#">Queues</a><a href="#">Patterns</a><a href="#">Monitoring</a><a href="#">Tips</a></div>
        </div>

        <div class="box mb-4">
          <h3 class="widget-title">Top Microservices Reads</h3>
          <div class="trend d-flex gap-3">
            <span class="num">1</span>
            <div class="trend-img"><img src="{{ asset('assets/images/pexels-andrew-15863044.jpg') }}" alt="Monolith" loading="lazy"></div>
            <div><h4>Microservices vs Monolith</h4><small class="text-muted">Start here</small></div>
          </div>
          <div class="trend d-flex gap-3">
            <span class="num">2</span>
            <div class="trend-img"><img src="{{ asset('assets/images/pexels-alicia-christin-gerald-1447380217-37880101.jpg') }}" alt="First microservice" loading="lazy"></div>
            <div><h4>Your First Microservice</h4><small class="text-muted">Best hands-on tutorial</small></div>
          </div>
          <div class="trend d-flex gap-3 border-0 pb-0 mb-0">
            <span class="num">3</span>
            <div class="trend-img"><img src="{{ asset('assets/images/pexels-magda-ehlers-pexels-35280155.jpg') }}" alt="Patterns" loading="lazy"></div>
            <div><h4>5 Key Patterns</h4><small class="text-muted">Most saved</small></div>
          </div>
        </div>

        <div class="box subscribe">
          <h3 class="widget-title">Microservices Updates</h3>
          <p class="small text-muted">Get new Microservices articles in your inbox.</p>
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