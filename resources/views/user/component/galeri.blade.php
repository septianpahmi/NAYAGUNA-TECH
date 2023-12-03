@include('user.partial.header')
@php
    use Carbon\Carbon;
@endphp
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
          <li><a href="{{url('/home/instruktur')}}">Instruktur</a></li>
          <li><a class="active" href="{{url('/home/galeri')}}">Galeri</a></li>
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

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Galeri</h2>
        <p>Galeri Kegiatan Kami memperlihatkan sorotan dari berbagai acara dan kegiatan yang kami selenggarakan. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
            @foreach ($data as $item)
                
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="Galeri/{{$item->foto}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">{{$item->judul}}</a></h5>
                <p class="fst-italic text-center">{{ Carbon::parse($item->created_at)->setTimezone('Asia/Jakarta')->format('l, d M Y H:i T') }}</p>
                <p class="card-text">{{Str::limit($item->deskripsi,200)}}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->
  @include('user.partial.footer')