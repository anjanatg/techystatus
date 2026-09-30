<!-- ========== HEADER ========== -->
<header class="site-header" data-bs-theme="dark">
  <div class="container-fluid d-flex align-items-center justify-content-between gap-3 py-3 px-lg-4">
    <a href="{{ route('home') }}" class="logo text-decoration-none d-flex align-items-center gap-2">
      <span class="logo-icon"><i class="bi bi-lightning-charge-fill"></i></span>
      <span>
        <strong class="brand d-block lh-1">Techy<span>Status</span></strong>
        <small class="tagline">Tech News • Guides • Reviews</small>
      </span>
    </a>

    <form class="search-box d-none d-md-flex flex-grow-1 mx-4">
      <input type="text" class="form-control" placeholder="Search articles, topics, or keywords...">
      <i class="bi bi-search"></i>
    </form>

    <div class="d-flex align-items-center gap-2">
      <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
      <a href="#" class="social-btn"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="social-btn"><i class="bi bi-youtube"></i></a>
      <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
      <a href="#" class="social-btn" id="theme-toggle" aria-label="Toggle dark mode"><i class="bi bi-moon-fill"></i></a>
    </div>
  </div>
</header>

<!-- ========== NAVBAR ========== -->
<div class="site-nav" data-bs-theme="dark">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid px-lg-4">
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav gap-lg-2">
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}"><i class="bi bi-house-fill me-1"></i> Home</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">News &amp; Updates</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('pcandmobile.*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">PC &amp; Mobile</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('pcandmobile.android') }}">Android</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('pcandmobile.ios') }}">iOS</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('pcandmobile.linux') }}">Linux</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('pcandmobile.windows') }}">Windows</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('development.*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Development</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('development.laravel') }}">Laravel</a></li>
              <li><a class="dropdown-item" href="{{ route('development.microservices') }}">Microservices</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('productivity') ? 'active' : '' }}" href="{{ route('productivity') }}">Productivity</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('ai') ? 'active' : '' }}" href="{{ route('ai') }}">Artificial Intelligence</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>