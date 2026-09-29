@extends('layouts.app')

@section('title', "Windows - TechNova")

@push('styles')
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pcandmobile/index.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pcandmobile/subcategory.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pcandmobile/windows.css') }}" rel="stylesheet">
@endpush

@section('content')
<!-- ========== BANNER + BREADCRUMB ========== -->
<section class="container-fluid cat-banner sub-banner windows-banner">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="index.html">PC &amp; Mobile</a></li>
        <li class="breadcrumb-item active" aria-current="page">Windows</li>
      </ol>
    </nav>
    <div class="d-flex align-items-center gap-3">
      <i class="bi bi-windows banner-icon"></i>
      <div>
        <h1 class="fw-bold mb-1">Windows</h1>
        <p class="mb-0">Windows updates, hidden features, troubleshooting and PC tips made simple.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== ARTICLES + SIDEBAR ========== -->
<main class="container py-4">
  <div class="row g-4">

    <div class="col-lg-8">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h5 fw-bold section-title m-0">Latest Windows Articles</h2>
        <small class="text-muted">15 Articles</small>
      </div>

      <div class="row g-4">
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-windows"></div>
            <span class="tag">Tips</span>
            <h3>10 Hidden Windows Features You Should Be Using</h3>
            <p>Handy tools that are already on your PC.</p>
            <div class="foot"><span>Sep 26, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-ai"></div>
            <span class="tag">Update</span>
            <h3>Windows Gets a Major Update With New Productivity Features</h3>
            <p>Improved search, snap layouts and system security.</p>
            <div class="foot"><span>Sep 24, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-code"></div>
            <span class="tag">Fix</span>
            <h3>How to Speed Up a Slow Windows PC in 10 Minutes</h3>
            <p>Simple settings changes that make an old computer feel faster.</p>
            <div class="foot"><span>Sep 22, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-brain"></div>
            <span class="tag">Review</span>
            <h3>Best Laptops for Students Under ₹50,000</h3>
            <p>Good performance and battery life without spending too much.</p>
            <div class="foot"><span>Sep 20, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-android"></div>
            <span class="tag">Guide</span>
            <h3>How to Reinstall Windows Without Losing Your Files</h3>
            <p>A clear guide for a clean, safe reinstall.</p>
            <div class="foot"><span>Sep 18, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-tips"></div>
            <span class="tag">Security</span>
            <h3>7 Windows Security Settings to Check Today</h3>
            <p>Keep your PC safe from common threats.</p>
            <div class="foot"><span>Sep 16, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
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
          <div class="chips"><a href="#">Windows 11</a><a href="#">Updates</a><a href="#">Shortcuts</a><a href="#">Speed</a><a href="#">Security</a><a href="#">Laptops</a><a href="#">Fixes</a><a href="#">Tips</a></div>
        </div>

        <div class="box mb-4">
          <h3 class="widget-title">Top Windows Picks</h3>
          <div class="trend d-flex gap-3">
            <span class="num">1</span>
            <div><h4>Windows 11 24H2</h4><small class="text-muted">Latest stable release</small></div>
          </div>
          <div class="trend d-flex gap-3">
            <span class="num">2</span>
            <div><h4>PowerToys</h4><small class="text-muted">Best free utility pack</small></div>
          </div>
          <div class="trend d-flex gap-3 border-0 pb-0 mb-0">
            <span class="num">3</span>
            <div><h4>Windows Terminal</h4><small class="text-muted">Best for power users</small></div>
          </div>
        </div>

        <div class="box subscribe">
          <h3 class="widget-title">Windows Updates</h3>
          <p class="small text-muted">Get new Windows articles in your inbox.</p>
          <form>
            <input type="email" class="form-control mb-2" placeholder="Enter your email address">
            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
          </form>
        </div>
      </div>
    </aside>
  </div>
</main>

@endsection