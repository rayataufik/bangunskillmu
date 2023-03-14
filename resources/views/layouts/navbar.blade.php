<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  {{-- styles --}}
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- google font -->

  <!-- icon font -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <!-- icon font -->

  {{-- scripts --}}
  <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}" defer></script>
  <script src="{{ asset('js/popper.min.js') }}" defer></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
</head>

<body>
  <!-- navbar -->
  <div id="navbar">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="/img/logo-dark-navy.png" height="50px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item categories-dropdown" href="#">Business</a>
                <a class="dropdown-item categories-dropdown" href="#">Design</a>
                <a class="dropdown-item categories-dropdown" href="#">Photography</a>
                <a class="dropdown-item categories-dropdown" href="#">Development</a>
                <a class="dropdown-item categories-dropdown" href="#">Marketing</a>
                <a class="dropdown-item categories-dropdown" href="#">IT & Software</a>
                <a class="dropdown-item categories-dropdown" href="#">Personal Development</a>
                <a class="dropdown-item categories-dropdown" href="#">Office Productivity</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <span class="line">|</span>
            <button class="btn my-2 my-sm-0 login" onclick="location.href = '{{ url('/login') }}';">Login</button>
            <button class="btn my-2 my-sm-0 daftar" onclick="location.href = '{{ url('/register') }}';">Daftar</button>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- navbar -->

</body>