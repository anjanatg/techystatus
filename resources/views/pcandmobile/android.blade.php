@extends('layouts.app')

@section('title', "Android - TechNova")

@push('styles')
  <link href="{{ asset('assets/css/pcandmobile/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pcandmobile/index.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pcandmobile/subcategory.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pcandmobile/android.css') }}" rel="stylesheet">
@endpush

@section('content')

<!-- ========== BANNER + BREADCRUMB ========== -->
<section class="container-fluid cat-banner sub-banner android-banner">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="index.html">PC &amp; Mobile</a></li>
        <li class="breadcrumb-item active" aria-current="page">Android</li>
      </ol>
    </nav>
    <div class="d-flex align-items-center gap-3">
      <i class="bi bi-android2 banner-icon"></i>
      <div>
        <h1 class="fw-bold mb-1">Android</h1>
        <p class="mb-0">Phone launches, app picks, updates and simple how-to guides for Android users.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== ARTICLES + SIDEBAR ========== -->
<main class="container py-4">
  <div class="row g-4">

    <!-- Articles (2 columns) -->
    <div class="col-lg-8">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h5 fw-bold section-title m-0">Latest Android Articles</h2>
        <small class="text-muted">14 Articles</small>
      </div>

      <div class="row g-4">
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-android"></div>
            <span class="tag">Update</span>
            <h3>New Android Update Brings Faster Performance and Better Privacy</h3>
            <p>The latest release focuses on smoother performance and stronger privacy controls.</p>
            <div class="foot"><span>Sep 25, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>

        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-tips"></div>
            <span class="tag">Tips</span>
            <h3>5 Battery Saving Tips for Your Android Phone</h3>
            <p>Get through the day without hunting for a charger.</p>
            <div class="foot"><span>Sep 21, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>

        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-phone"></div>
            <span class="tag">Review</span>
            <h3>Best Android Phones Under ₹30,000 Right Now</h3>
            <p>Great cameras, smooth screens and big batteries without a flagship price.</p>
            <div class="foot"><span>Sep 19, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>

        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-code"></div>
            <span class="tag">Apps</span>
            <h3>Best Android Apps You Should Install in 2025</h3>
            <p>Must-have apps to boost productivity, creativity and entertainment.</p>
            <div class="foot"><span>Sep 24, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>

        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-brain"></div>
            <span class="tag">Guide</span>
            <h3>How to Free Up Storage on Android in 5 Minutes</h3>
            <p>Clear junk files, old downloads and unused apps the easy way.</p>
            <div class="foot"><span>Sep 17, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>

        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb bg-windows"></div>
            <span class="tag">Security</span>
            <h3>7 Android Privacy Settings You Should Turn On Today</h3>
            <p>Small changes that keep your data and your location safer.</p>
            <div class="foot"><span>Sep 15, 2025</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
      </div>

      <!-- Pagination -->
      <nav aria-label="Page navigation" class="mt-4">
        <ul class="pagination justify-content-center">
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next <i class="bi bi-arrow-right"></i></a></li>
        </ul>
      </nav>
    </div>

    <!-- Sidebar -->
    <aside class="col-lg-4">
      <div class="sidebar">

        <div class="box mb-4">
          <h3 class="widget-title">Popular Topics</h3>
          <div class="chips">
            <a href="#">Android 15</a><a href="#">Samsung</a><a href="#">Pixel</a>
            <a href="#">Battery</a><a href="#">Apps</a><a href="#">Privacy</a>
            <a href="#">Camera</a><a href="#">Tips</a>
          </div>
        </div>

        <div class="box mb-4">
          <h3 class="widget-title">Top Android Phones</h3>

          <div class="trend d-flex gap-3">
            <span class="num">1</span>
            <div><h4>Google Pixel 10a</h4><small class="text-muted">Best camera for the price</small></div>
          </div>
          <div class="trend d-flex gap-3">
            <span class="num">2</span>
            <div><h4>Samsung Galaxy S25</h4><small class="text-muted">Best all-round flagship</small></div>
          </div>
          <div class="trend d-flex gap-3 border-0 pb-0 mb-0">
            <span class="num">3</span>
            <div><h4>Tecno Pova Curve 2 5G</h4><small class="text-muted">Best battery on a budget</small></div>
          </div>
        </div>

        <div class="box subscribe">
          <h3 class="widget-title">Android Updates</h3>
          <p class="small text-muted">Get new Android articles in your inbox.</p>
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