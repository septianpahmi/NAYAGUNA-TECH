@include('user.partial.header')
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{url('/')}}" class="logo me-auto"><img src="assets/img/Untitled-2.png"></a>

      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('/home/about')}}">About</a></li>
          <li><a class="active" href="{{url('/home/pelatihan')}}">Pelatihan</a></li>
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

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Pelatihan</h2>
        <p>Pelatihan Kami akan mempersiapkan Anda untuk menghadapi tuntutan dunia yang dinamis. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
  
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
              @foreach ($data as $item)
                  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="Pelatihan/{{$item->foto}}" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>{{$item->kategoriId->kategori}}</h4>
                    <p class="price">{{ 'Rp ' . number_format($item->harga, 0, ',', '.') }}</p>
                  </div>
  
                  <h3><a href="course-details.html">{{$item->judul}}</a></h3>
                  <p>{{Str::limit ($item->deskripsi, 100)}}</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="Instruktur/{{$item->instrukturId->foto}}" class="img-fluid" alt="">
                      <span>{{$item->instrukturId->nama}}</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;50
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;65
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item-->
            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Popular Courses Section -->

  </main><!-- End #main -->
  @include('user.partial.footer')