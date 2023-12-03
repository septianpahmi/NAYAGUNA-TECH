<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
  
        <a href="{{url('/')}}" class="logo me-auto"><img src="assets/img/Untitled-2.png"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
  
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="active" href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/home/about')}}">About</a></li>
            <li><a href="{{url('/home/pelatihan')}}">Pelatihan</a></li>
            <li><a href="{{url('/home/instruktur')}}">Instruktur</a></li>
            <li><a href="{{url('/home/galeri')}}">Galeri</a></li>
            <li><a href="{{url('/home/contact')}}">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        @if (Route::has('login'))
        @auth
          <a id="navbarDropdown" class="get-started-btn" href="{{ route('logout') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Logout
          </a>
  
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
  
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
        @else
        <a href="{{ route('login') }}" class="get-started-btn">Get Started</a>
        @endauth
        @endif
      </div>
    </header><!-- End Header -->
  
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Learning Today,<br>Leading Tomorrow</h1>
        <h2>Selamat datang di Website resmi NayagunaTech.</h2>
        <a href="courses.html" class="btn-get-started">Get Started</a>
      </div>
    </section><!-- End Hero -->