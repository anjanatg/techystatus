@extends('layouts.app')

@section('title', "iOS - TechyStatus")

@push('styles')
  <link href="{{ asset('assets/css/pcandmobile/index.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pcandmobile/subcategory.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/pcandmobile/ios.css') }}" rel="stylesheet">
@endpush

@section('content')

<!-- ========== BANNER + BREADCRUMB ========== -->
<section class="container-fluid cat-banner sub-banner ios-banner">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('pcandmobile.index') }}">PC &amp; Mobile</a></li>
        <li class="breadcrumb-item active" aria-current="page">iOS</li>
      </ol>
    </nav>
    <div class="d-flex align-items-center gap-3">
      <i class="bi bi-apple banner-icon"></i>
      <div>
        <h1 class="fw-bold mb-1">iOS</h1>
        <p class="mb-0">iPhone and iPad news, iOS updates, app picks and simple how-to guides.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== ARTICLES + SIDEBAR ========== -->
<main class="container py-4">
  <div class="row g-4">

    <div class="col-lg-8">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h5 fw-bold section-title m-0">Latest iOS Articles</h2>
        <small class="text-muted">12 Articles</small>
      </div>

      <div class="row g-4">
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-japy-34624326.jpg') }}" alt="iOS update" loading="lazy"></div>
            <span class="tag">Update</span>
            <h3>iOS 19: 8 Features Worth Updating For</h3>
            <p>From a redesigned lock screen to smarter battery tools, here is what is new.</p>
            <div class="foot"><span>2 hours ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-cottonbro-6804613.jpg') }}" alt="iPhone settings" loading="lazy"></div>
            <span class="tag">Tips</span>
            <h3>10 Hidden iPhone Settings You Should Turn On</h3>
            <p>Small changes that make your iPhone easier and safer to use.</p>
            <div class="foot"><span>Yesterday</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-stanley-ng-2850879-4387779.jpg') }}" alt="iPhone comparison" loading="lazy"></div>
            <span class="tag">Review</span>
            <h3>iPhone 17 vs iPhone 16: Is It Worth Upgrading?</h3>
            <p>A simple comparison of camera, battery and performance.</p>
            <div class="foot"><span>2 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-mikhail-nilov-6930895.jpg') }}" alt="iPhone apps" loading="lazy"></div>
            <span class="tag">Apps</span>
            <h3>Best iPhone Apps for Productivity This Year</h3>
            <p>Apps that help you plan, write and get more done.</p>
            <div class="foot"><span>3 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-kadiremir-31148083.jpg') }}" alt="iPhone storage" loading="lazy"></div>
            <span class="tag">Guide</span>
            <h3>How to Free Up iPhone Storage Without Deleting Photos</h3>
            <p>Clear cache, offload apps and manage iCloud the easy way.</p>
            <div class="foot"><span>4 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="box card-item h-100">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-andrew-15863044.jpg') }}" alt="iPhone privacy" loading="lazy"></div>
            <span class="tag">Security</span>
            <h3>7 iPhone Privacy Features Most People Miss</h3>
            <p>Keep your data and location safer with a few taps.</p>
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
          <div class="chips"><a href="#">iOS 19</a><a href="#">iPhone 17</a><a href="#">iPad</a><a href="#">Battery</a><a href="#">Apps</a><a href="#">Privacy</a><a href="#">Camera</a><a href="#">Tips</a></div>
        </div>

        <div class="box mb-4">
          <h3 class="widget-title">Top iPhones</h3>
          <div class="trend d-flex gap-3">
            <span class="num">1</span>
            <div class="trend-img"><img src="{{ asset('assets/images/pexels-japy-34624326.jpg') }}" alt="iPhone 17 Pro" loading="lazy"></div>
            <div><h4>iPhone 17 Pro</h4><small class="text-muted">Best camera on an iPhone</small></div>
          </div>
          <div class="trend d-flex gap-3">
            <span class="num">2</span>
            <div class="trend-img"><img src="{{ asset('assets/images/pexels-stanley-ng-2850879-4387779.jpg') }}" alt="iPhone 17" loading="lazy"></div>
            <div><h4>iPhone 17</h4><small class="text-muted">Best all-round iPhone</small></div>
          </div>
          <div class="trend d-flex gap-3 border-0 pb-0 mb-0">
            <span class="num">3</span>
            <div class="trend-img"><img src="{{ asset('assets/images/pexels-kadiremir-31148083.jpg') }}" alt="iPhone 16e" loading="lazy"></div>
            <div><h4>iPhone 16e</h4><small class="text-muted">Best value iPhone</small></div>
          </div>
        </div>

        <div class="box subscribe">
          <h3 class="widget-title">iOS Updates</h3>
          <p class="small text-muted">Get new iOS articles in your inbox.</p>
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