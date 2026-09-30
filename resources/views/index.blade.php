@extends('layouts.app')

@section('title', "TechNova - Tech News, Guides & Reviews")

@section('content')

<main> 

    <!-- ========== HERO + TRENDING ========== -->
    <section class="container-fluid pt-4">
     <div class="row g-4 mb-5">
<!-- Featured + two write-ups -->
<div class="col-lg-8 d-flex flex-column">

  <div class="hero d-flex align-items-center" style="background-image: url('{{ asset('assets/images/pexels-altman-12883029.jpg') }}');">
    <div class="hero-text">
      <span class="hero-badge"><i class="bi bi-star-fill"></i> FEATURED</span>
      <h1 class="fw-bold">Best Laptops for <span class="hl">Developers</span> in 2025 (Performance, Battery Life &amp; Price)</h1>
      <p>Find the perfect laptop for coding, development and multitasking. Here are the top picks for 2025 with best performance, battery life and value for money.</p>
      <div class="small d-flex gap-4">
        <span><i class="bi bi-person-circle me-1"></i> By <a href="#" class="hl">TechNova Team</a></span>
        <span><i class="bi bi-calendar3 me-1"></i> Sep 28, 2025</span>
      </div>
    </div>
  </div>

  <!-- Two write-ups under the hero -->
  <div class="row gx-4 mt-4 flex-grow-1">

    <div class="col-md-6 mb-4 mb-md-0">
      <a href="#" class="note-card" style="--accent:#0f9d75">
        <span class="cat-pill cat-tips">Productivity</span>
        <h3>10 Productivity Tips to Get More Done Every Day</h3>
        <p>Small habits that help you plan your day, avoid distractions and finish more work in less time. Start with the two-minute rule and a simple daily plan.</p>
        <div class="note-meta">
          <span><i class="bi bi-person-fill"></i> TechNova Team &nbsp;•&nbsp; <i class="bi bi-clock"></i> 2 hours ago</span>
          <i class="bi bi-arrow-right"></i>
        </div>
      </a>
    </div>

    <div class="col-md-6">
      <a href="#" class="note-card" style="--accent:#2563eb">
        <span class="cat-pill cat-prog">PC &amp; Mobile</span>
        <h3>Best Android Apps You Should Install This Year</h3>
        <p>From note-taking to file sharing, these free apps make your phone more useful. We picked apps that are light on battery and easy to use.</p>
        <div class="note-meta">
          <span><i class="bi bi-person-fill"></i> TechNova Team &nbsp;•&nbsp; <i class="bi bi-clock"></i> 5 hours ago</span>
          <i class="bi bi-arrow-right"></i>
        </div>
      </a>
    </div>

  </div>
</div>

<!-- Trending -->
<div class="col-lg-4">
  <div class="trend-box box h-100">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="h5 fw-bold m-0"><i class="bi bi-fire text-danger"></i> Trending Now</h2>
      <a href="#" class="small text-primary text-decoration-none">View All <i class="bi bi-arrow-right"></i></a>
    </div>

    <a href="#" class="trend d-flex gap-3 text-decoration-none">
      <div class="trend-img"><img src="{{ asset('assets/images/pexels-andrew-15863044.jpg') }}" alt="GPT-5" loading="lazy"></div>
      <div>
        <span class="cat-pill cat-ai">Artificial Intelligence</span>
        <h3>OpenAI Unveils GPT-5 with Smarter and More Helpful AI</h3>
        <small><i class="bi bi-calendar3"></i> Sep 27, 2025</small>
      </div>
      <i class="bi bi-arrow-right trend-arrow"></i>
    </a>

    <a href="#" class="trend d-flex gap-3 text-decoration-none">
      <div class="trend-img"><img src="{{ asset('assets/images/pexels-cottonbro-6804613.jpg') }}" alt="Windows" loading="lazy"></div>
      <div>
        <span class="cat-pill cat-tips">Tips &amp; Tricks</span>
        <h3>10 Hidden Windows Features You Should Be Using</h3>
        <small><i class="bi bi-calendar3"></i> Sep 26, 2025</small>
      </div>
      <i class="bi bi-arrow-right trend-arrow"></i>
    </a>

    <a href="#" class="trend d-flex gap-3 text-decoration-none">
      <div class="trend-img"><img src="{{ asset('assets/images/Laravel_Microservices_deee6779d5.jpg') }}" alt="Laravel and React" loading="lazy"></div>
      <div>
        <span class="cat-pill cat-dev">Development</span>
        <h3>Build a Full Stack Web App with Laravel and React</h3>
        <small><i class="bi bi-calendar3"></i> Sep 24, 2025</small>
      </div>
      <i class="bi bi-arrow-right trend-arrow"></i>
    </a>

    <a href="#" class="trend d-flex gap-3 text-decoration-none">
      <div class="trend-img"><img src="{{ asset('assets/images/pexels-magda-ehlers-pexels-35280155.jpg') }}" alt="Future of AI" loading="lazy"></div>
      <div>
        <span class="cat-pill cat-ai">Artificial Intelligence</span>
        <h3>The Future of AI: What to Expect in the Next 5 Years</h3>
        <small><i class="bi bi-calendar3"></i> Sep 24, 2025</small>
      </div>
      <i class="bi bi-arrow-right trend-arrow"></i>
    </a>

    <a href="#" class="trend d-flex gap-3 text-decoration-none mb-0">
      <div class="trend-img"><img src="{{ asset('assets/images/pexels-alicia-christin-gerald-1447380217-37880101.jpg') }}" alt="JavaScript ES6" loading="lazy"></div>
      <div>
        <span class="cat-pill cat-prog">Programming</span>
        <h3>JavaScript ES6 Features You Should Know</h3>
        <small><i class="bi bi-calendar3"></i> Sep 20, 2025</small>
      </div>
      <i class="bi bi-arrow-right trend-arrow"></i>
    </a>
  </div>
</div>


<!-- ========== LATEST ARTICLES ========== -->
<section class="latest-section container-fluid px-4 px-lg-5 mb-5">
  <div class="d-flex justify-content-between align-items-start mb-3">
    <div>
      <h2 class="latest-title">
        <span class="latest-dash"></span>Latest <span class="grad-text">Articles</span>
      </h2>
      <small class="latest-sub">Stay updated with the latest tech news, tutorials and insights.</small>
    </div>
    <a href="#" class="latest-viewall">View All <i class="bi bi-arrow-right"></i></a>
  </div>

  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-md-6 col-lg-4">
      <a href="#" class="article-card">
        <div class="article-thumb">
          <img src="{{ asset('assets/images/pexels-japy-34624326.jpg') }}" alt="iPhone 17" loading="lazy">
          <span class="article-badge badge-news"><i class="bi bi-phone"></i> News &amp; Updates</span>
        </div>
        <div class="article-body">
          <h3>Apple Launches iPhone 17 with Improved Camera and Battery Life</h3>
          <p>Apple has officially unveiled the iPhone 17 series, with significant upgrades in camera, battery life and performance.</p>
          <div class="article-meta">
            <img src="{{ asset('assets/images/pexels-yankrukov-7693685.jpg') }}" alt="" class="avatar">
            <span>By TechNova Team</span>
            <span class="ms-2"><i class="bi bi-calendar3"></i> Sep 27, 2025</span>
            <i class="bi bi-arrow-right article-arrow"></i>
          </div>
        </div>
      </a>
    </div>

    <!-- Card 2 -->
    <div class="col-md-6 col-lg-4">
      <a href="#" class="article-card">
        <div class="article-thumb">
          <img src="{{ asset('assets/images/pexels-kadiremir-31148083.jpg') }}" alt="Android apps" loading="lazy">
          <span class="article-badge badge-pc"><i class="bi bi-phone"></i> PC &amp; Mobile</span>
        </div>
        <div class="article-body">
          <h3>Best Android Apps You Should Install in 2025</h3>
          <p>Discover the must-have Android apps in 2025 to boost productivity, creativity and entertainment.</p>
          <div class="article-meta">
            <img src="{{ asset('assets/images/pexels-yankrukov-7693685.jpg') }}" alt="" class="avatar">
            <span>By TechNova Team</span>
            <span class="ms-2"><i class="bi bi-calendar3"></i> Sep 26, 2025</span>
            <i class="bi bi-arrow-right article-arrow"></i>
          </div>
        </div>
      </a>
    </div>

    <!-- Card 3 -->
    <div class="col-md-6 col-lg-4">
      <a href="#" class="article-card">
        <div class="article-thumb">
          <img src="{{ asset('assets/images/pexels-magda-ehlers-pexels-35280155.jpg') }}" alt="Artificial intelligence" loading="lazy">
          <span class="article-badge badge-ai"><i class="bi bi-globe2"></i> Artificial Intelligence</span>
        </div>
        <div class="article-body">
          <h3>The Future of AI: What to Expect in the Next 5 Years</h3>
          <p>From smarter assistants to autonomous systems, explore how AI will shape our world in the coming years.</p>
          <div class="article-meta">
            <img src="{{ asset('assets/images/pexels-yankrukov-7693685.jpg') }}" alt="" class="avatar">
            <span>By TechNova Team</span>
            <span class="ms-2"><i class="bi bi-calendar3"></i> Sep 24, 2025</span>
            <i class="bi bi-arrow-right article-arrow"></i>
          </div>
        </div>
      </a>
    </div>

    <!-- Card 4 -->
    <div class="col-md-6 col-lg-4">
      <a href="#" class="article-card">
        <div class="article-thumb">
          <img src="{{ asset('assets/images/pexels-mikhail-nilov-6930895.jpg') }}" alt="Productivity tips" loading="lazy">
          <span class="article-badge badge-prod"><i class="bi bi-lightbulb"></i> Productivity</span>
        </div>
        <div class="article-body">
          <h3>10 Productivity Tips to Get More Done Every Day</h3>
          <p>Simple and effective tips to boost your productivity and make the most of your time.</p>
          <div class="article-meta">
            <img src="{{ asset('assets/images/pexels-yankrukov-7693685.jpg') }}" alt="" class="avatar">
            <span>By TechNova Team</span>
            <span class="ms-2"><i class="bi bi-calendar3"></i> Sep 22, 2025</span>
            <i class="bi bi-arrow-right article-arrow"></i>
          </div>
        </div>
      </a>
    </div>

    <!-- Card 5 -->
    <div class="col-md-6 col-lg-4">
      <a href="#" class="article-card">
        <div class="article-thumb">
          <img src="{{ asset('assets/images/laravel.png') }}" alt="Laravel 11" loading="lazy">
          <span class="article-badge badge-dev"><i class="bi bi-code-slash"></i> Development</span>
        </div>
        <div class="article-body">
          <h3>Building a Modern Web App with Laravel 11</h3>
          <p>Step-by-step guide to create a modern web application using Laravel 11, Tailwind CSS and more.</p>
          <div class="article-meta">
            <img src="{{ asset('assets/images/pexels-yankrukov-7693685.jpg') }}" alt="" class="avatar">
            <span>By TechNova Team</span>
            <span class="ms-2"><i class="bi bi-calendar3"></i> Sep 21, 2025</span>
            <i class="bi bi-arrow-right article-arrow"></i>
          </div>
        </div>
      </a>
    </div>

    <!-- Card 6 -->
    <div class="col-md-6 col-lg-4">
      <a href="#" class="article-card">
        <div class="article-thumb">
          <img src="{{ asset('assets/images/pexels-alicia-christin-gerald-1447380217-37880101.jpg') }}" alt="Python" loading="lazy">
          <span class="article-badge badge-prog"><i class="bi bi-code-slash"></i> Programming</span>
        </div>
        <div class="article-body">
          <h3>Python for Beginners: Your First Program</h3>
          <p>Learn the basics of Python with simple examples and easy-to-follow steps.</p>
          <div class="article-meta">
            <img src="{{ asset('assets/images/pexels-yankrukov-7693685.jpg') }}" alt="" class="avatar">
            <span>By TechNova Team</span>
            <span class="ms-2"><i class="bi bi-calendar3"></i> Sep 20, 2025</span>
            <i class="bi bi-arrow-right article-arrow"></i>
          </div>
        </div>
      </a>
    </div>

  </div>
</section>

<!-- ========== POPULAR CATEGORIES ========== -->
<section class="popular-section container-fluid px-4 px-lg-5">
  <div class="d-flex justify-content-between align-items-start mb-3">
    <div class="pop-head">
      <h2 class="pop-title">Popular Categories</h2>
      <small class="pop-sub">Explore the top categories and stay ahead in the tech world.</small>
    </div>
    <a href="#" class="pop-viewall">View All Categories <i class="bi bi-arrow-right"></i></a>
  </div>

  <div class="row g-3">

    <div class="col-6 col-md-4 col-lg-2">
      <a href="#" class="cat-card">
        <span class="cat-circle c-news"><i class="bi bi-newspaper"></i></span>
        <span class="cat-info">
          <strong>News &amp; Updates</strong>
          <small>48 Articles</small>
        </span>
        <span class="cat-go"><i class="bi bi-chevron-right"></i></span>
      </a>
    </div>

    <div class="col-6 col-md-4 col-lg-2">
      <a href="#" class="cat-card">
        <span class="cat-circle c-pc"><i class="bi bi-phone"></i></span>
        <span class="cat-info">
          <strong>PC &amp; Mobile</strong>
          <small>36 Articles</small>
        </span>
        <span class="cat-go"><i class="bi bi-chevron-right"></i></span>
      </a>
    </div>

    <div class="col-6 col-md-4 col-lg-2">
      <a href="#" class="cat-card">
        <span class="cat-circle c-ai"><i class="bi bi-cpu"></i></span>
        <span class="cat-info">
          <strong>Artificial Intelligence</strong>
          <small>24 Articles</small>
        </span>
        <span class="cat-go"><i class="bi bi-chevron-right"></i></span>
      </a>
    </div>

    <div class="col-6 col-md-4 col-lg-2">
      <a href="#" class="cat-card">
        <span class="cat-circle c-tips"><i class="bi bi-lightbulb"></i></span>
        <span class="cat-info">
          <strong>Tips &amp; Tricks</strong>
          <small>21 Articles</small>
        </span>
        <span class="cat-go"><i class="bi bi-chevron-right"></i></span>
      </a>
    </div>

    <div class="col-6 col-md-4 col-lg-2">
      <a href="#" class="cat-card">
        <span class="cat-circle c-dev"><i class="bi bi-code-slash"></i></span>
        <span class="cat-info">
          <strong>Development</strong>
          <small>32 Articles</small>
        </span>
        <span class="cat-go"><i class="bi bi-chevron-right"></i></span>
      </a>
    </div>

    <div class="col-6 col-md-4 col-lg-2">
      <a href="#" class="cat-card">
        <span class="cat-circle c-prod"><i class="bi bi-gear-fill"></i></span>
        <span class="cat-info">
          <strong>Productivity</strong>
          <small>18 Articles</small>
        </span>
        <span class="cat-go"><i class="bi bi-chevron-right"></i></span>
      </a>
    </div>

  </div>
</section>

    <!-- ========== TIPS & TRICKS (magazine layout) ========== -->
<section class="mag-section container-fluid px-4 px-lg-5 ">
  <h2 class="mag-title">Tips &amp; Tricks</h2>

  <div class="mag-pills">
    <a href="#" class="active">All</a>
    <a href="#">Windows</a>
    <a href="#">Android</a>
    <a href="#">iOS</a>
    <a href="#">Productivity</a>
    <a href="#">Linux</a>
  </div>

  <div class="row g-4">

    <!-- Left column: two small articles -->
    <div class="col-lg-3">
      <article class="mag-item">
        <img class="mag-img" src="{{ asset('assets/images/pexels-stanley-ng-2850879-4387779.jpg') }}" alt="Phone battery" loading="lazy">
        <h3><a href="#">Save Your Phone Battery</a></h3>
        <p class="text-dark">Five small settings that add hours to your Android battery life without slowing the phone down.
          <span class="mag-time">16h ago</span></p>
      </article>

              <div class="article-body">
          <span class="article-badge inline badge-prod"><i class="bi bi-lightbulb"></i> Productivity</span>
          <h3>Windows Shortcuts</h3>
          <p>Fifteen keyboard shortcuts that save you hours every week. Learn them once and use them every day.</p>
          <div class="article-meta">
            <span><i class="bi bi-clock"></i> 1d ago</span>
            <i class="bi bi-arrow-right article-arrow"></i>
          </div>
        </div>

    </div>

    <!-- Center: large featured article -->
    <div class="col-lg-6">
      <article class="mag-item mag-featured">
        <img class="mag-img mag-img-lg" src="{{ asset('assets/images/pexels-altman-12883029.jpg') }}" alt="Windows features" loading="lazy">
        <h3><a href="#">10 Hidden Windows Features You Should Be Using</a></h3>
        <p class="text-dark">Windows has many useful tools that most people never find, from clipboard history to virtual desktops.
          This guide shows the ten best ones and how to switch each of them on in under a minute.
          <span class="mag-time">5h ago</span></p>
      </article>
    </div>

    <!-- Right column: tip of the day + one article -->
        <div class="col-lg-3 d-flex flex-column gap-4">
      <div class="tip-stat">
        <small>Tip of the day</small>
        <strong>15</strong>
        <p>keyboard shortcuts can save you hours of work every single week.</p>
      </div>
 
      <a href="#" class="article-card flex-grow-1">
        <div class="article-thumb">
          <img src="{{ asset('assets/images/pexels-izafi-39534908.jpg') }}" alt="Wi-Fi router" loading="lazy">
          <span class="article-badge badge-ai"><i class="bi bi-wifi"></i> Networking</span>
        </div>
        <div class="article-body">
          <h3>Faster Home Wi-Fi</h3>
          <p>Move the router, change the channel and update the firmware. Five steps for a stronger signal in every room.</p>
          <div class="article-meta">
            <span><i class="bi bi-clock"></i> 10h ago</span>
            <i class="bi bi-arrow-right article-arrow"></i>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>
{{-- =====================================================
     2) MORE NEWS  +  SIDEBAR (Most Read, Topics, Follow)
     Place: after the LATEST ARTICLES section
     ===================================================== --}}
<section class="container-fluid px-4 px-lg-5 mb-5">
  <div class="mn-heading">
    <h2>More <span>News</span></h2>
    <a href="{{ route('news') }}">See all news <i class="bi bi-arrow-right"></i></a>
  </div>
 
  <div class="row g-4">
 
    {{-- News list --}}
    <div class="col-lg-8">
 
      <a href="#" class="mn-item">
        <img src="{{ asset('assets/images/pexels-cottonbro-6804613.jpg') }}" alt="" loading="lazy">
        <div>
          <span class="mn-tag">Security</span>
          <h3>Why Every Small Business Should Turn On Two-Step Login Today</h3>
          <p>Experts say most account break-ins can be stopped with one simple setting. Here is how to switch it on.</p>
          <small><i class="bi bi-clock"></i> 2 hours ago &nbsp;•&nbsp; By TechNova Team</small>
        </div>
      </a>
 
      <a href="#" class="mn-item">
        <img src="{{ asset('assets/images/pexels-andrew-15863044.jpg') }}" alt="" loading="lazy">
        <div>
          <span class="mn-tag">Artificial Intelligence</span>
          <h3>AI Assistants Are Moving Into Everyday Apps: What It Means for You</h3>
          <p>From email to spreadsheets, AI features are appearing everywhere. We explain what is useful and what is hype.</p>
          <small><i class="bi bi-clock"></i> 5 hours ago &nbsp;•&nbsp; By TechNova Team</small>
        </div>
      </a>
 
      <a href="#" class="mn-item">
        <img src="{{ asset('assets/images/pexels-kadiremir-31148083.jpg') }}" alt="" loading="lazy">
        <div>
          <span class="mn-tag">PC &amp; Mobile</span>
          <h3>Foldable Phones Get Cheaper: Are They Ready for Everyone?</h3>
          <p>Prices are dropping and hinges are getting stronger. We look at who should buy one now and who should wait.</p>
          <small><i class="bi bi-clock"></i> 8 hours ago &nbsp;•&nbsp; By TechNova Team</small>
        </div>
      </a>
 
      <a href="#" class="mn-item">
        <img src="{{ asset('assets/images/Laravel_Microservices_deee6779d5.jpg') }}" alt="" loading="lazy">
        <div>
          <span class="mn-tag">Development</span>
          <h3>Monolith or Microservices? How Teams Decide in Real Projects</h3>
          <p>Developers share the questions they ask before splitting an app into services.</p>
          <small><i class="bi bi-clock"></i> Yesterday &nbsp;•&nbsp; By TechNova Team</small>
        </div>
      </a>
 
      <a href="#" class="mn-item">
        <img src="{{ asset('assets/images/pexels-izafi-39534908.jpg') }}" alt="" loading="lazy">
        <div>
          <span class="mn-tag">Tips &amp; Tricks</span>
          <h3>Wi-Fi 7 Explained: Do You Need a New Router?</h3>
          <p>A plain-language guide to the new standard, what speeds to expect and when an upgrade makes sense.</p>
          <small><i class="bi bi-clock"></i> Yesterday &nbsp;•&nbsp; By TechNova Team</small>
        </div>
      </a>
 
    </div>
 
    {{-- Sidebar --}}
    <aside class="col-lg-4">
 
      <div class="mn-widget">
        <h3 class="mn-widget-title">Most Read</h3>
        <a href="#" class="mr-row"><span>1</span> OpenAI Unveils Its Smarter, More Helpful AI</a>
        <a href="#" class="mr-row"><span>2</span> 10 Hidden Windows Features You Should Be Using</a>
        <a href="#" class="mr-row"><span>3</span> Best Laptops for Developers: Our Top Picks</a>
        <a href="#" class="mr-row"><span>4</span> How to Speed Up Your Home Wi-Fi in 5 Steps</a>
        <a href="#" class="mr-row"><span>5</span> Python for Beginners: Your First Program</a>
      </div>
 
      <div class="mn-widget">
        <h3 class="mn-widget-title">Trending Topics</h3>
        <div class="mn-tags">
          <a href="#">#ArtificialIntelligence</a><a href="#">#Android</a><a href="#">#Windows</a>
          <a href="#">#Laravel</a><a href="#">#Cybersecurity</a><a href="#">#Startups</a>
          <a href="#">#Gadgets</a><a href="#">#Productivity</a>
        </div>
      </div>
 
      <div class="mn-widget">
        <h3 class="mn-widget-title">Follow Us</h3>
        <div class="mn-follow">
          <a href="#"><i class="bi bi-facebook"></i> Facebook</a>
          <a href="#"><i class="bi bi-twitter-x"></i> X</a>
          <a href="#"><i class="bi bi-youtube"></i> YouTube</a>
          <a href="#"><i class="bi bi-linkedin"></i> LinkedIn</a>
        </div>
      </div>
 
    </aside>
  </div>
</section>
{{-- =====================================================
     4) TOP REVIEWS
     ===================================================== --}}

<section class="container-fluid px-4 px-lg-5 mb-5">
  <div class="mn-heading">
    <h2>Top <span>Reviews</span></h2>
    <a href="#">All reviews <i class="bi bi-arrow-right"></i></a>
  </div>
 
  <div class="row g-4">
 
    <div class="col-md-6 col-lg-3">
      <a href="#" class="rev-card">
        <div class="rev-img">
          <img src="{{ asset('assets/images/pexels-japy-34624326.jpg') }}" alt="" loading="lazy">
          
        </div>
        <div class="rev-body">
          <span class="rev-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <h3>Flagship Phone Review: Camera King?</h3>
          <p>Great camera and battery, but the price is high.</p>
        </div>
      </a>
    </div>
 
    <div class="col-md-6 col-lg-3">
      <a href="#" class="rev-card">
        <div class="rev-img">
          <img src="{{ asset('assets/images/pexels-altman-12883029.jpg') }}" alt="" loading="lazy">
        </div>
        <div class="rev-body">
          <span class="rev-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <h3>Developer Laptop Review: All-Day Battery</h3>
          <p>Fast, quiet and light. The screen could be brighter.</p>
        </div>
      </a>
    </div>
 
    <div class="col-md-6 col-lg-3">
      <a href="#" class="rev-card">
        <div class="rev-img">
          <img src="{{ asset('assets/images/pexels-izafi-39534908.jpg') }}" alt="" loading="lazy">
        </div>
        <div class="rev-body">
          <span class="rev-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <h3>Wi-Fi Router Review: Strong in Every Room</h3>
          <p>Easy setup and steady speeds for a mid-size home.</p>
        </div>
      </a>
    </div>
 
    <div class="col-md-6 col-lg-3">
      <a href="#" class="rev-card">
        <div class="rev-img">
          <img src="{{ asset('assets/images/pexels-stanley-ng-2850879-4387779.jpg') }}" alt="" loading="lazy">
        </div>
        <div class="rev-body">
          <span class="rev-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <h3>Budget Phone Review: Big Value</h3>
          <p>Long battery life and a smooth screen for the price.</p>
        </div>
      </a>
    </div>
 
  </div>
</section>

<!-- ========== NEWSLETTER ========== -->
<section class="news-section container-fluid px-4 px-lg-5">
  <div class="news-card">
    <div class="row align-items-center g-4">

      <div class="col-lg-6 d-flex align-items-center gap-3">
        <span class="news-icon"><i class="bi bi-envelope-paper-fill"></i></span>
        <div>
          <h2 class="news-title">Get the Latest <span class="grad-text-light">Updates</span></h2>
          <small class="news-sub">Subscribe to our newsletter and never miss the latest tech news, tips and tutorials.</small>
        </div>
      </div>

      <div class="col-lg-6">
        <form class="news-form" action="#" method="POST">
          @csrf
          <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
          <button type="submit" class="news-btn">Subscribe <i class="bi bi-arrow-right"></i></button>
        </form>
        <small class="news-note"><i class="bi bi-shield-check"></i> No spam. Unsubscribe anytime.</small>
      </div>

    </div>
  </div>
</section>
  </main>
@endsection
