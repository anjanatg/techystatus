@extends('layouts.app')

@section('title', "PC &amp; Mobile - TechyStatus")

@push('styles')
  <link href="{{ asset('assets/css/pcandmobile/index.css') }}" rel="stylesheet">
@endpush

@section('content')

  <!-- ========== CATEGORY BANNER (full width, blue) ========== -->
  <section class="container-fluid cat-banner">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-7">
          <span class="badge bg-light text-primary mb-3">36 Articles</span>
          <h1 class="fw-bold">PC &amp; Mobile</h1>
          <p class="mb-0">Phone launches, laptop reviews, OS updates and simple guides for Android, iOS, Linux and Windows.</p>
        </div>
        <div class="col-lg-5">
          <div class="row g-3 text-center">
            <div class="col-3"><a href="{{ route('pcandmobile.android') }}" class="os-tile"><i class="bi bi-android2"></i><small>Android</small></a></div>
            <div class="col-3"><a href="{{ route('pcandmobile.ios') }}" class="os-tile"><i class="bi bi-apple"></i><small>iOS</small></a></div>
            <div class="col-3"><a href="{{ route('pcandmobile.linux') }}" class="os-tile"><i class="bi bi-ubuntu"></i><small>Linux</small></a></div>
            <div class="col-3"><a href="{{ route('pcandmobile.windows') }}" class="os-tile"><i class="bi bi-windows"></i><small>Windows</small></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FILTER PILLS (each one opens its page) ========== -->
  <section class="container pt-4">
    <ul class="nav nav-pills filter gap-2">
      <li class="nav-item"><a class="nav-link active" href="{{ route('pcandmobile.index') }}">All</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('pcandmobile.android') }}">Android</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('pcandmobile.ios') }}">iOS</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('pcandmobile.linux') }}">Linux</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('pcandmobile.windows') }}">Windows</a></li>
    </ul>
  </section>

  <!-- ========== FEATURED (1 big + 2 small) ========== -->
  <section class="container py-4">
    <div class="row g-4">
      <div class="col-lg-7">
        <a href="#" class="feature big d-flex align-items-end">
          <img class="feature-img" src="{{ asset('assets/images/pexels-japy-34624326.jpg') }}" alt="iPhone 17" loading="lazy">
          <div>
            <span class="badge bg-primary mb-2">iOS</span>
            <h2>Apple Launches iPhone 17 with Improved Camera and Battery Life</h2>
            <small><i class="bi bi-clock"></i> 2 hours ago</small>
          </div>
        </a>
      </div>
      <div class="col-lg-5 d-flex flex-column gap-4">
        <a href="#" class="feature small-f d-flex align-items-end">
          <img class="feature-img" src="{{ asset('assets/images/pexels-kadiremir-31148083.jpg') }}" alt="Android apps" loading="lazy">
          <div>
            <span class="badge bg-primary mb-2">Android</span>
            <h3>Best Android Apps You Should Install This Year</h3>
          </div>
        </a>
        <a href="#" class="feature small-f d-flex align-items-end">
          <img class="feature-img" src="{{ asset('assets/images/pexels-cottonbro-6804613.jpg') }}" alt="Windows features" loading="lazy">
          <div>
            <span class="badge bg-primary mb-2">Windows</span>
            <h3>10 Hidden Windows Features You Should Be Using</h3>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- ========== ARTICLE GRID (3 columns) ========== -->
  <section class="container pb-5">
    <h2 class="h5 fw-bold section-title mb-3">Latest in PC &amp; Mobile</h2>

    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <article class="box card-item h-100">
          <div class="thumb"><img src="{{ asset('assets/images/pexels-stanley-ng-2850879-4387779.jpg') }}" alt="Android update" loading="lazy"></div>
          <span class="tag">Android</span>
          <h3>New Android Update Brings Faster Performance and Better Privacy</h3>
          <p>The latest release focuses on smoother performance and stronger privacy controls.</p>
          <div class="foot"><span>2 hours ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
        </article>
      </div>

      <div class="col-md-6 col-lg-4">
        <article class="box card-item h-100">
          <div class="thumb"><img src="{{ asset('assets/images/pexels-andrew-15863044.jpg') }}" alt="iOS 19" loading="lazy"></div>
          <span class="tag">iOS</span>
          <h3>iOS 19: 8 Features Worth Updating For</h3>
          <p>From a redesigned lock screen to smarter battery tools, here is what is new.</p>
          <div class="foot"><span>Yesterday</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
        </article>
      </div>

      <div class="col-md-6 col-lg-4">
        <article class="box card-item h-100">
          <div class="thumb"><img src="{{ asset('assets/images/pexels-alicia-christin-gerald-1447380217-37880101.jpg') }}" alt="Linux distros" loading="lazy"></div>
          <span class="tag">Linux</span>
          <h3>Best Linux Distros for Beginners This Year</h3>
          <p>Easy to install, easy to use. Our picks for anyone switching from Windows.</p>
          <div class="foot"><span>2 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
        </article>
      </div>

      <div class="col-md-6 col-lg-4">
        <article class="box card-item h-100">
          <div class="thumb"><img src="{{ asset('assets/images/pexels-altman-12883029.jpg') }}" alt="Slow Windows PC" loading="lazy"></div>
          <span class="tag">Windows</span>
          <h3>How to Speed Up a Slow Windows PC in 10 Minutes</h3>
          <p>Simple settings changes that make an old computer feel faster.</p>
          <div class="foot"><span>3 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
        </article>
      </div>

      <div class="col-md-6 col-lg-4">
        <article class="box card-item h-100">
          <div class="thumb"><img src="{{ asset('assets/images/pexels-mikhail-nilov-6930895.jpg') }}" alt="Phone battery" loading="lazy"></div>
          <span class="tag">Android</span>
          <h3>5 Battery Saving Tips for Your Android Phone</h3>
          <p>Get through the day without hunting for a charger.</p>
          <div class="foot"><span>4 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
        </article>
      </div>

      <div class="col-md-6 col-lg-4">
        <article class="box card-item h-100">
          <div class="thumb"><img src="{{ asset('assets/images/pexels-magda-ehlers-pexels-35280155.jpg') }}" alt="Student laptops" loading="lazy"></div>
          <span class="tag">Windows</span>
          <h3>Best Laptops for Students Under ₹50,000</h3>
          <p>Good performance and battery life without spending too much.</p>
          <div class="foot"><span>5 days ago</span><a href="#">Read more <i class="bi bi-arrow-right"></i></a></div>
        </article>
      </div>

    </div>

    <div class="text-center mt-5">
      <a href="#" class="btn btn-primary px-5">Load More Articles</a>
    </div>
  </section>
@endsection