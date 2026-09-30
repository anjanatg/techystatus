@extends('layouts.app')

@section('title', "Productivity - TechNova")

@push('styles')
  <link href="{{ asset('assets/css/productivity.css') }}" rel="stylesheet">
@endpush

@section('content')

<!-- ========== HERO (centered, with search) ========== -->
<section class="container-fluid prod-hero">
  <div class="container">
    <span class="badge bg-primary mb-3">PRODUCTIVITY</span>
    <h1>Work Smarter, Not Harder</h1>
    <p>Simple tools, habits and shortcuts that help you get more done every day.</p>
    <form class="prod-search" action="#" method="GET">
      <input type="text" name="q" class="form-control" placeholder="Search productivity tips...">
      <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
    </form>
  </div>
</section>

<!-- ========== TOPIC TILES ========== -->
<section class="container py-4">
  <div class="row g-3">
    <div class="col-6 col-lg-3">
      <a href="#" class="topic"><span class="icon-round"><i class="bi bi-grid"></i></span><div><strong>Apps &amp; Tools</strong><small>14 Articles</small></div></a>
    </div>
    <div class="col-6 col-lg-3">
      <a href="#" class="topic"><span class="icon-round"><i class="bi bi-alarm"></i></span><div><strong>Time Management</strong><small>9 Articles</small></div></a>
    </div>
    <div class="col-6 col-lg-3">
      <a href="#" class="topic"><span class="icon-round"><i class="bi bi-keyboard"></i></span><div><strong>Shortcuts</strong><small>11 Articles</small></div></a>
    </div>
    <div class="col-6 col-lg-3">
      <a href="#" class="topic"><span class="icon-round"><i class="bi bi-laptop"></i></span><div><strong>Remote Work</strong><small>8 Articles</small></div></a>
    </div>
  </div>
</section>

<!-- ========== FEATURED (image left, text right) ========== -->
<section class="container pb-4">
  <article class="box spotlight row g-0 mx-0">
    <div class="col-md-5"><div class="thumb"><img src="{{ asset('assets/images/pexels-mikhail-nilov-6930895.jpg') }}" alt="Productivity tips" loading="lazy"></div></div>
    <div class="col-md-7 body">
      <span class="badge bg-primary mb-3">EDITOR'S PICK</span>
      <h2>10 Productivity Tips to Get More Done Every Day</h2>
      <p>Simple and effective habits to plan your day, avoid distractions and make the most of your time. No complicated systems needed.</p>
      <div class="small text-muted mb-3"><i class="bi bi-clock"></i> 6 min read &nbsp;•&nbsp; Today</div>
      <a href="#" class="btn btn-primary px-4">Read Article <i class="bi bi-arrow-right"></i></a>
    </div>
  </article>
</section>

<!-- ========== QUICK TIPS (icon cards) ========== -->
<section class="container py-4">
  <h2 class="h5 fw-bold section-title mb-3">Quick Tips</h2>
  <div class="row g-4">
    <div class="col-md-6 col-lg-4">
      <a href="#" class="box tip"><span class="icon-round"><i class="bi bi-stopwatch"></i></span><h3>Use the 2-Minute Rule to Clear Small Tasks</h3><small>3 min read</small></a>
    </div>
    <div class="col-md-6 col-lg-4">
      <a href="#" class="box tip"><span class="icon-round"><i class="bi bi-bell-slash"></i></span><h3>How to Turn Off Notifications and Actually Focus</h3><small>4 min read</small></a>
    </div>
    <div class="col-md-6 col-lg-4">
      <a href="#" class="box tip"><span class="icon-round"><i class="bi bi-keyboard"></i></span><h3>15 Keyboard Shortcuts That Save Hours Every Week</h3><small>5 min read</small></a>
    </div>
    <div class="col-md-6 col-lg-4">
      <a href="#" class="box tip"><span class="icon-round"><i class="bi bi-calendar-check"></i></span><h3>Plan Your Week in 15 Minutes With a Simple Template</h3><small>4 min read</small></a>
    </div>
    <div class="col-md-6 col-lg-4">
      <a href="#" class="box tip"><span class="icon-round"><i class="bi bi-journal-text"></i></span><h3>Best Note-Taking Apps for Students and Professionals</h3><small>6 min read</small></a>
    </div>
    <div class="col-md-6 col-lg-4">
      <a href="#" class="box tip"><span class="icon-round"><i class="bi bi-cloud-check"></i></span><h3>Keep Your Files Organised With Cloud Storage</h3><small>5 min read</small></a>
    </div>
  </div>
</section>

<!-- ========== TOOL OF THE WEEK (dark full-width band) ========== -->
<section class="container-fluid tool-band my-4">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <span class="badge bg-primary mb-3">TOOL OF THE WEEK</span>
        <h2 class="fw-bold">Notion: Notes, Tasks and Projects in One Place</h2>
        <p>A flexible workspace that can replace several apps. Great for planning, note-taking and keeping your team on the same page.</p>
        <a href="#" class="btn btn-light px-4">Read the Review</a>
      </div>
      <div class="col-lg-5">
        <div class="row g-3">
          <div class="col-4"><div class="tool-card"><i class="bi bi-check2-square"></i><small class="d-block mt-2">Tasks</small></div></div>
          <div class="col-4"><div class="tool-card"><i class="bi bi-journal-richtext"></i><small class="d-block mt-2">Notes</small></div></div>
          <div class="col-4"><div class="tool-card"><i class="bi bi-kanban"></i><small class="d-block mt-2">Projects</small></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== LATEST (compact list, 2 columns) ========== -->
<section class="container py-4 mb-3">
  <h2 class="h5 fw-bold section-title mb-3">Latest Productivity Articles</h2>
  <div class="row g-4">
    <div class="col-lg-6"><div class="box mini"><div class="thumb"><img src="{{ asset('assets/images/pexels-stanley-ng-2850879-4387779.jpg') }}" alt="Productivity apps" loading="lazy"></div><div><h3><a href="#">Best Free Productivity Apps for Windows and Android</a></h3><small>Yesterday</small></div></div></div>
    <div class="col-lg-6"><div class="box mini"><div class="thumb"><img src="{{ asset('assets/images/pexels-cottonbro-6804613.jpg') }}" alt="Daily routine" loading="lazy"></div><div><h3><a href="#">How to Build a Daily Routine That Sticks</a></h3><small>2 days ago</small></div></div></div>
    <div class="col-lg-6"><div class="box mini"><div class="thumb"><img src="{{ asset('assets/images/pexels-andrew-15863044.jpg') }}" alt="AI tools" loading="lazy"></div><div><h3><a href="#">Using AI Tools to Save Time on Everyday Tasks</a></h3><small>3 days ago</small></div></div></div>
    <div class="col-lg-6"><div class="box mini"><div class="thumb"><img src="{{ asset('assets/images/pexels-altman-12883029.jpg') }}" alt="Clean desktop" loading="lazy"></div><div><h3><a href="#">Set Up a Distraction-Free Desktop in 5 Steps</a></h3><small>4 days ago</small></div></div></div>
  </div>
  <div class="text-center mt-4"><a href="#" class="btn btn-primary px-5">View All Articles</a></div>
</section>
@endsection