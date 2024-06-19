<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo align-items-center me-auto row">
        <div class="col-3"><a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="d-inline-block align-text-top"></a></div>
        <div class="col-9 d-flex align-items-center"><h1 style="text-transform: none ;"><a href="{{ url('/') }}">Go<span style="color: #94CB3A;">Green</span></a></h1></div>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a></li>
          <li><a class="nav-link scrollto {{ request()->is('about_us') ? 'active' : '' }}" href="{{ url('/about_us') }}">Tentang Kami</a></li>
          <li><a class="nav-link scrollto {{ request()->is('article') ? 'active' : '' }}" href="{{ url('/article') }}">Artikel</a></li>
          <li><a class="nav-link scrollto {{ request()->is('registration') ? 'active' : '' }}" href="{{ url('/registration') }}">Pendaftaran</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/login') }}"><button class="btn btn-primary" type="submit" style="border-radius: 24px;border:none;background-color: #94CB3A;">Login</button></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="https://www.instagram.com/gogreen.unja/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
</header><!-- End Header -->