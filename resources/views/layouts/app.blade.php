<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'TechyStatus - Tech News, Guides & Reviews')</title>

  {{-- Apply the saved light/dark theme before the page is drawn --}}
  <script>document.documentElement.setAttribute("data-bs-theme", localStorage.getItem("theme") || "light");</script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  {{-- Shared styles, then the styles of the current page --}}
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  @stack('styles')
</head>
<body>

@include('partials.header')

@yield('content')

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/js/include.js') }}"></script>
@stack('scripts')
</body>
</html>