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
          <li><a href="{{url('/home/pelatihan')}}">Pelatihan</a></li>
          <li><a class="active" href="{{url('/home/instruktur')}}">Instruktur</a></li>
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
        <h2>Instruktur</h2>
        <p>Dengan pengetahuan dan keahlian yang mendalam di bidangnya, instruktur Kami bertanggung jawab untuk memberikan bimbingan, pengajaran, dan pemahaman kepada Anda.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
              @foreach ($data as $item)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="Instruktur/{{$item->foto}}" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>{{$item->nama}}</h4>
                  <span>{{$item->kategori->kategori}}</span>
                  <p>
                      {{$item->deksripsi}}
                  </p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            @endforeach
          </div>
  
        </div>
      </section><!-- End Trainers Section -->
  
    </main><!-- End #main -->

  </main><!-- End #main -->
  @include('user.partial.footer')