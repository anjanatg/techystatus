@extends('layouts.app')

@section('title', "News &amp; Updates - TechyStatus")

@push('styles')
  <link href="{{ asset('assets/css/news.css') }}" rel="stylesheet">
@endpush

@section('content')

  <!-- ========== PAGE TITLE + BREADCRUMB ========== -->
  <section class="container-fluid page-header">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-2">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">News &amp; Updates</li>
        </ol>
      </nav>
      <h1 class="h3 fw-bold m-0">Browsing: News &amp; Updates</h1>
    </div>
  </section>

  <!-- ========== POSTS + SIDEBAR ========== -->
  <main class="container py-4">
    <div class="row g-4">

      <!-- Post list -->
      <div class="col-lg-8">

        <article class="box post row g-3 mx-0 mb-4">
          <div class="col-md-4 px-0">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-japy-34624326.jpg') }}" alt="iPhone 17" loading="lazy"></div>
          </div>
          <div class="col-md-8">
            <span class="badge bg-primary mb-2">News &amp; Updates</span>
            <h2><a href="#">Apple Launches iPhone 17 with Improved Camera and Battery Life</a></h2>
            <div class="meta">
              <span><i class="bi bi-person-fill"></i> TechyStatus Team</span>
              <span><i class="bi bi-clock"></i> 2 hours ago</span>
              <span><i class="bi bi-chat"></i> 0</span>
            </div>
            <p>Apple has officially unveiled the iPhone 17 series with significant upgrades in camera, battery life and performance…</p>
          </div>
        </article>

        <article class="box post row g-3 mx-0 mb-4">
          <div class="col-md-4 px-0">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-andrew-15863044.jpg') }}" alt="GPT-5" loading="lazy"></div>
          </div>
          <div class="col-md-8">
            <span class="badge bg-primary mb-2">Artificial Intelligence</span>
            <h2><a href="#">OpenAI Unveils GPT-5 with Smarter and More Helpful AI</a></h2>
            <div class="meta">
              <span><i class="bi bi-person-fill"></i> TechyStatus Team</span>
              <span><i class="bi bi-clock"></i> 5 hours ago</span>
              <span><i class="bi bi-chat"></i> 0</span>
            </div>
            <p>OpenAI has announced GPT-5, bringing better reasoning, fewer mistakes and more helpful answers to everyday users…</p>
          </div>
        </article>

        <article class="box post row g-3 mx-0 mb-4">
          <div class="col-md-4 px-0">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-kadiremir-31148083.jpg') }}" alt="Android update" loading="lazy"></div>
          </div>
          <div class="col-md-8">
            <span class="badge bg-primary mb-2">PC &amp; Mobile</span>
            <h2><a href="#">New Android Update Brings Faster Performance and Better Privacy</a></h2>
            <div class="meta">
              <span><i class="bi bi-person-fill"></i> TechyStatus Team</span>
              <span><i class="bi bi-clock"></i> 8 hours ago</span>
              <span><i class="bi bi-chat"></i> 0</span>
            </div>
            <p>The latest Android release focuses on smoother performance, longer battery life and stronger privacy controls…</p>
          </div>
        </article>

        <article class="box post row g-3 mx-0 mb-4">
          <div class="col-md-4 px-0">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-cottonbro-6804613.jpg') }}" alt="Windows update" loading="lazy"></div>
          </div>
          <div class="col-md-8">
            <span class="badge bg-primary mb-2">News &amp; Updates</span>
            <h2><a href="#">Windows Gets a Major Update With New Productivity Features</a></h2>
            <div class="meta">
              <span><i class="bi bi-person-fill"></i> TechyStatus Team</span>
              <span><i class="bi bi-clock"></i> Yesterday</span>
              <span><i class="bi bi-chat"></i> 0</span>
            </div>
            <p>Microsoft has started rolling out a new Windows update with improved search, snap layouts and system security…</p>
          </div>
        </article>

        <article class="box post row g-3 mx-0 mb-4">
          <div class="col-md-4 px-0">
            <div class="thumb"><img src="{{ asset('assets/images/Laravel_Microservices_deee6779d5.jpg') }}" alt="Laravel" loading="lazy"></div>
          </div>
          <div class="col-md-8">
            <span class="badge bg-primary mb-2">Development</span>
            <h2><a href="#">Laravel 11 Released: Everything New for Developers</a></h2>
            <div class="meta">
              <span><i class="bi bi-person-fill"></i> TechyStatus Team</span>
              <span><i class="bi bi-clock"></i> Yesterday</span>
              <span><i class="bi bi-chat"></i> 0</span>
            </div>
            <p>Laravel 11 arrives with a slimmer application structure, faster startup and several quality-of-life improvements…</p>
          </div>
        </article>

        <article class="box post row g-3 mx-0 mb-4">
          <div class="col-md-4 px-0">
            <div class="thumb"><img src="{{ asset('assets/images/pexels-magda-ehlers-pexels-35280155.jpg') }}" alt="AI chips" loading="lazy"></div>
          </div>
          <div class="col-md-8">
            <span class="badge bg-primary mb-2">Artificial Intelligence</span>
            <h2><a href="#">AI Chips: Why Demand Is Growing Faster Than Ever</a></h2>
            <div class="meta">
              <span><i class="bi bi-person-fill"></i> TechyStatus Team</span>
              <span><i class="bi bi-clock"></i> 2 days ago</span>
              <span><i class="bi bi-chat"></i> 0</span>
            </div>
            <p>Companies around the world are racing to secure AI chips as demand for computing power keeps climbing…</p>
          </div>
        </article>

        <!-- Pagination -->
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item disabled"><span class="page-link">…</span></li>
            <li class="page-item"><a class="page-link" href="#">11</a></li>
            <li class="page-item"><a class="page-link" href="#">Next <i class="bi bi-arrow-right"></i></a></li>
          </ul>
        </nav>
      </div>

      <!-- Sidebar -->
      <aside class="col-lg-4">
        <div class="sidebar">

          <!-- Search -->
          <div class="box mb-4">
            <h3 class="widget-title">Search</h3>
            <form class="d-flex gap-2" action="#" method="GET">
              <input type="text" name="q" class="form-control" placeholder="Search news...">
              <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div>

          <!-- Editors Picks -->
          <div class="box mb-4">
            <h3 class="widget-title">Editors Picks</h3>

            <div class="trend d-flex gap-3">
              <div class="trend-img"><img src="{{ asset('assets/images/pexels-andrew-15863044.jpg') }}" alt="GPT-5" loading="lazy"></div>
              <div>
                <h4>OpenAI Unveils GPT-5 with Smarter and More Helpful AI</h4>
                <small class="text-muted">Today</small>
              </div>
            </div>

            <div class="trend d-flex gap-3">
              <div class="trend-img"><img src="{{ asset('assets/images/pexels-stanley-ng-2850879-4387779.jpg') }}" alt="Phone battery" loading="lazy"></div>
              <div>
                <h4>iPhone 17 Battery Upgrades Explained</h4>
                <small class="text-muted">Yesterday</small>
              </div>
            </div>

            <div class="trend d-flex gap-3 border-0 pb-0 mb-0">
              <div class="trend-img"><img src="{{ asset('assets/images/pexels-alicia-christin-gerald-1447380217-37880101.jpg') }}" alt="Coding" loading="lazy"></div>
              <div>
                <h4>New Coding Tools Are Changing How Developers Work</h4>
                <small class="text-muted">2 days ago</small>
              </div>
            </div>
          </div>

          <!-- Subscribe -->
          <div class="box subscribe">
            <h3 class="widget-title">Subscribe to Updates</h3>
            <p class="small text-muted">Get the latest tech news and tutorials in your inbox.</p>
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