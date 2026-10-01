@extends('layouts.app')

@section('title', "Artificial Intelligence - TechyStatus")

@push('styles')
  <link href="{{ asset('assets/css/ai.css') }}" rel="stylesheet">
@endpush

@section('content')

<!-- ========== DARK HERO ========== -->
<section class="container-fluid ai-hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="badge bg-primary mb-3">ARTIFICIAL INTELLIGENCE</span>
        <h1>Understand <span class="gradient-text">AI</span> Without the Jargon</h1>
        <p class="mb-4">News, tools, guides and simple explanations to help you use AI with confidence.</p>
        <div class="d-flex gap-3">
          <a href="#explore" class="btn btn-primary px-4">Explore Articles</a>
          <a href="#prompts" class="btn btn-outline-light px-4">Try Prompts</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="glass">
          <small class="text-uppercase" style="color:#b8c4e0">Top story</small>
          <h2 class="mt-2">OpenAI Unveils GPT-5 with Smarter and More Helpful AI</h2>
          <div class="row text-center mt-4 g-3">
            <div class="col-4 stat"><strong>29</strong><small>Articles</small></div>
            <div class="col-4 stat"><strong>12</strong><small>AI Tools</small></div>
            <div class="col-4 stat"><strong>Weekly</strong><small>Updates</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== TABBED ARTICLES ========== -->
<section class="container py-5" id="explore">
  <h2 class="h4 fw-bold mb-3">Explore AI</h2>
  <ul class="nav nav-pills ai-tabs gap-2 mb-4">
      <li class="nav-item"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab-latest" type="button">Latest</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-tools" type="button">AI Tools</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-guides" type="button">Guides</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-ethics" type="button">Ethics &amp; Safety</button></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane fade show active" id="tab-latest">
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">News</span>
            <h3><a href="#">OpenAI Unveils GPT-5 with Smarter and More Helpful AI</a></h3>
            <p>Better reasoning, fewer mistakes and more useful answers for everyday users.</p>
            <small><i class="bi bi-clock"></i> Sep 27, 2025</small>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">Future</span>
            <h3><a href="#">The Future of AI: What to Expect in the Next 5 Years</a></h3>
            <p>From smarter assistants to autonomous systems.</p>
            <small><i class="bi bi-clock"></i> Sep 24, 2025</small>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">Hardware</span>
            <h3><a href="#">AI Chips: Why Demand Is Growing Faster Than Ever</a></h3>
            <p>Companies are racing to secure computing power.</p>
            <small><i class="bi bi-clock"></i> Sep 22, 2025</small>
          </article>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="tab-tools">
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">Tools</span>
            <h3><a href="#">Best Free AI Tools for Students in 2025</a></h3>
            <p>Write, summarise and study faster with these picks.</p>
            <small><i class="bi bi-clock"></i> Sep 21, 2025</small>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">Tools</span>
            <h3><a href="#">5 AI Image Generators Compared</a></h3>
            <p>Quality, price and ease of use side by side.</p>
            <small><i class="bi bi-clock"></i> Sep 18, 2025</small>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">Tools</span>
            <h3><a href="#">AI Coding Assistants: Which One Should You Use?</a></h3>
            <p>A simple comparison for beginners and professionals.</p>
            <small><i class="bi bi-clock"></i> Sep 16, 2025</small>
          </article>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="tab-guides">
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">Guide</span>
            <h3><a href="#">How to Write Better Prompts for Any AI Tool</a></h3>
            <p>Clear steps and examples you can copy today.</p>
            <small><i class="bi bi-clock"></i> Sep 20, 2025</small>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">Guide</span>
            <h3><a href="#">Getting Started With Machine Learning in Python</a></h3>
            <p>A friendly first project with simple code.</p>
            <small><i class="bi bi-clock"></i> Sep 17, 2025</small>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">Guide</span>
            <h3><a href="#">How AI Chatbots Work: A Simple Explanation</a></h3>
            <p>No maths needed, just clear ideas.</p>
            <small><i class="bi bi-clock"></i> Sep 14, 2025</small>
          </article>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="tab-ethics">
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">Ethics</span>
            <h3><a href="#">Is AI Safe? What Experts Are Saying</a></h3>
            <p>A balanced look at the risks and the benefits.</p>
            <small><i class="bi bi-clock"></i> Sep 19, 2025</small>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">Privacy</span>
            <h3><a href="#">What Happens to Your Data When You Use AI Chatbots</a></h3>
            <p>Simple privacy tips every user should know.</p>
            <small><i class="bi bi-clock"></i> Sep 15, 2025</small>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="box ai-card">
            <span class="tag">Ethics</span>
            <h3><a href="#">Spotting AI-Generated Content: 6 Easy Signs</a></h3>
            <p>How to tell what is real and what is not.</p>
            <small><i class="bi bi-clock"></i> Sep 12, 2025</small>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== TIMELINE ========== -->
<section class="container-fluid bg-white py-5">
  <div class="container">
    <h2 class="h4 fw-bold text-center mb-4">AI in a Few Key Moments</h2>
    <div class="timeline">
      <div class="t-item"><span class="t-year">2022</span><h3>ChatGPT Launches</h3><p>AI chatbots reach millions of everyday users in just a few weeks.</p></div>
      <div class="t-item"><span class="t-year">2023</span><h3>GPT-4 and Image Generators</h3><p>AI gets better at reasoning, and creating pictures becomes easy for anyone.</p></div>
      <div class="t-item"><span class="t-year">2024</span><h3>AI Comes to Phones and PCs</h3><p>Assistants move into apps, search engines and office tools.</p></div>
      <div class="t-item"><span class="t-year">2025</span><h3>GPT-5 and Smarter Assistants</h3><p>More helpful, more accurate and more useful in daily work.</p></div>
    </div>
  </div>
</section>

<!-- ========== PROMPT IDEAS ========== -->
<section class="container py-5" id="prompts">
  <h2 class="h4 fw-bold mb-1">Try These Prompts</h2>
  <p class="text-muted mb-4">Copy a prompt into your favourite AI tool and change it to fit your needs.</p>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="box h-100">
        <span class="icon-round"><i class="bi bi-pencil-square"></i></span>
        <h3 class="h6 fw-bold mt-3 mb-0">Write an Email</h3>
        <p class="prompt">Write a polite email to my manager asking for a day off next Friday. Keep it under 80 words.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box h-100">
        <span class="icon-round"><i class="bi bi-lightbulb"></i></span>
        <h3 class="h6 fw-bold mt-3 mb-0">Explain Simply</h3>
        <p class="prompt">Explain how the internet works to a 12-year-old using a real-life example.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box h-100">
        <span class="icon-round"><i class="bi bi-code-slash"></i></span>
        <h3 class="h6 fw-bold mt-3 mb-0">Fix My Code</h3>
        <p class="prompt">Find the bug in this Python function and explain the fix in simple steps: [paste code]</p>
      </div>
    </div>
  </div>
</section>
@endsection