@extends('layouts.app')

@section('title', "TechNova - Tech News, Guides & Reviews")

@section('content')

<main>

    <!-- ========== HERO + TRENDING ========== -->
    <section class="container-fluid pt-4">
     <div class="row g-4 mb-5">

      <!-- Featured -->
      <div class="col-lg-8">
        <div class="hero d-flex align-items-end">
          <div class="hero-text">
            <span class="badge bg-primary mb-3">FEATURED</span>
            <h1 class="h2 fw-bold">Best Laptops for Developers in 2025 (Performance, Battery Life &amp; Price)</h1>
            <p>Find the perfect laptop for coding, development and multitasking. Here are the top picks for 2025 with best performance, battery life and value for money.</p>
            <div class="small d-flex gap-4">
              <span><i class="bi bi-person-circle me-1"></i> By TechNova Team</span>
              <span><i class="bi bi-calendar3 me-1"></i> Sep 28, 2025</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Trending -->
      <div class="col-lg-4">
        <div class="box h-100">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h5 fw-bold m-0"><i class="bi bi-fire text-danger"></i> Trending Now</h2>
            <a href="#" class="small text-primary text-decoration-none">View All <i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="trend d-flex gap-3">
            <span class="num">1</span>
            <div class="thumb thumb-sm bg-ai"></div>
            <div>
              <small class="text-primary">Artificial Intelligence</small>
              <h3>OpenAI Unveils GPT-5 with Smarter and More Helpful AI</h3>
              <small class="text-muted">Sep 27, 2025</small>
            </div>
          </div>

          <div class="trend d-flex gap-3">
            <span class="num">2</span>
            <div class="thumb thumb-sm bg-windows"></div>
            <div>
              <small class="text-primary">Tips &amp; Tricks</small>
              <h3>10 Hidden Windows Features You Should Be Using</h3>
              <small class="text-muted">Sep 26, 2025</small>
            </div>
          </div>

          <div class="trend d-flex gap-3">
            <span class="num">3</span>
            <div class="thumb thumb-sm bg-code"></div>
            <div>
              <small class="text-primary">Development</small>
              <h3>Build a Full Stack Web App with Laravel and React</h3>
              <small class="text-muted">Sep 24, 2025</small>
            </div>
          </div>

          <div class="trend d-flex gap-3">
            <span class="num">4</span>
            <div class="thumb thumb-sm bg-robot"></div>
            <div>
              <small class="text-primary">Artificial Intelligence</small>
              <h3>The Future of AI: What to Expect in the Next 5 Years</h3>
              <small class="text-muted">Sep 24, 2025</small>
            </div>
          </div>

          <div class="trend d-flex gap-3 border-0 pb-0 mb-0">
            <span class="num">5</span>
            <div class="thumb thumb-sm bg-js"></div>
            <div>
              <small class="text-primary">Programming</small>
              <h3>JavaScript ES6 Features You Should Know</h3>
              <small class="text-muted">Sep 20, 2025</small>
            </div>
          </div>
        </div>
      </div>
     </div>
    </section>

    <!-- ========== LATEST ARTICLES ========== -->
    <section class="container mb-5">
      <div class="d-flex justify-content-between align-items-end mb-3">
        <div class="section-title">
          <h2 class="h5 fw-bold m-0">Latest Articles</h2>
          <small class="text-muted">Stay updated with the latest tech news, tutorials and insights.</small>
        </div>
        <a href="#" class="small text-primary text-decoration-none">View All <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4">
          <article class="box article h-100">
            <div class="thumb bg-phone"><span class="badge bg-primary">News &amp; Updates</span></div>
            <h3>Apple Launches iPhone 17 with Improved Camera and Battery Life</h3>
            <p>Apple has officially unveiled the iPhone 17 series with significant upgrades in camera, battery life and performance.</p>
            <div class="meta"><span><i class="bi bi-person-fill"></i> By TechNova Team</span><span><i class="bi bi-clock"></i> Sep 27, 2025</span></div>
          </article>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 col-lg-4">
          <article class="box article h-100">
            <div class="thumb bg-android"><span class="badge bg-primary">PC &amp; Mobile</span></div>
            <h3>Best Android Apps You Should Install in 2025</h3>
            <p>Discover the must-have Android apps in 2025 to boost productivity, creativity and entertainment.</p>
            <div class="meta"><span><i class="bi bi-person-fill"></i> By TechNova Team</span><span><i class="bi bi-clock"></i> Sep 24, 2025</span></div>
          </article>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 col-lg-4">
          <article class="box article h-100">
            <div class="thumb bg-brain"><span class="badge bg-primary">Artificial Intelligence</span></div>
            <h3>The Future of AI: What to Expect in the Next 5 Years</h3>
            <p>From smarter assistants to autonomous systems, explore how AI will shape our world in the coming years.</p>
            <div class="meta"><span><i class="bi bi-person-fill"></i> By TechNova Team</span><span><i class="bi bi-clock"></i> Sep 24, 2025</span></div>
          </article>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6 col-lg-4">
          <article class="box article h-100">
            <div class="thumb bg-tips"><span class="badge bg-primary">Tips &amp; Tricks</span></div>
            <h3>10 Productivity Tips to Get More Done Every Day</h3>
            <p>Simple and effective tips to boost your productivity and make the most of your time.</p>
            <div class="meta"><span><i class="bi bi-person-fill"></i> By TechNova Team</span><span><i class="bi bi-clock"></i> Sep 22, 2025</span></div>
          </article>
        </div>

        <!-- Card 5 -->
        <div class="col-md-6 col-lg-4">
          <article class="box article h-100">
            <div class="thumb bg-code"><span class="badge bg-primary">Development</span></div>
            <h3>Building a Modern Web App with Laravel 11</h3>
            <p>Step-by-step guide to create a modern web application using Laravel 11, Tailwind CSS and MySQL.</p>
            <div class="meta"><span><i class="bi bi-person-fill"></i> By TechNova Team</span><span><i class="bi bi-clock"></i> Sep 23, 2025</span></div>
          </article>
        </div>

        <!-- Card 6 -->
        <div class="col-md-6 col-lg-4">
          <article class="box article h-100">
            <div class="thumb bg-code"><span class="badge bg-primary">Programming</span></div>
            <h3>Python for Beginners: Your First Program</h3>
            <p>Learn the basics of Python with simple examples and easy-to-follow steps.</p>
            <div class="meta"><span><i class="bi bi-person-fill"></i> By TechNova Team</span><span><i class="bi bi-clock"></i> Sep 22, 2025</span></div>
          </article>
        </div>
      </div>
    </section>

    <!-- ========== POPULAR CATEGORIES ========== -->
    <section class="container-fluid mb-4">
     <div class="box">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h5 fw-bold m-0 section-title">Popular Categories</h2>
        <a href="#" class="small text-primary text-decoration-none">View All Categories <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="row g-3">
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="category">
            <span class="cat-icon"><i class="bi bi-newspaper"></i></span>
            <strong>News &amp; Updates</strong>
            <small>48 Articles</small>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="category">
            <span class="cat-icon"><i class="bi bi-phone"></i></span>
            <strong>PC &amp; Mobile</strong>
            <small>36 Articles</small>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="category">
            <span class="cat-icon"><i class="bi bi-cpu"></i></span>
            <strong>Artificial Intelligence</strong>
            <small>29 Articles</small>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="category">
            <span class="cat-icon"><i class="bi bi-lightbulb"></i></span>
            <strong>Tips &amp; Tricks</strong>
            <small>22 Articles</small>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="category">
            <span class="cat-icon"><i class="bi bi-code-slash"></i></span>
            <strong>Development</strong>
            <small>18 Articles</small>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="category">
            <span class="cat-icon"><i class="bi bi-braces"></i></span>
            <strong>Programming</strong>
            <small>16 Articles</small>
          </a>
        </div>
      </div>
     </div>
    </section>

    <!-- ========== NEWSLETTER ========== -->
    <section class="container-fluid newsletter py-4">
     <div class="container">
      <div class="row align-items-center g-3">
      <div class="col-lg-5 d-flex align-items-center gap-3">
        <i class="bi bi-envelope fs-1 text-primary"></i>
        <div>
          <h2 class="h6 fw-bold m-0">Get the Latest Updates</h2>
          <small class="text-muted">Subscribe to our newsletter and never miss the latest tech news, tips and tutorials.</small>
        </div>
      </div>
      <div class="col-lg-7">
        <form class="d-flex gap-2">
          <input type="email" class="form-control" placeholder="Enter your email address">
          <button type="submit" class="btn btn-warning px-4">Subscribe</button>
        </form>
      </div>
      </div>
     </div>
    </section>
  </main>
@endsection
