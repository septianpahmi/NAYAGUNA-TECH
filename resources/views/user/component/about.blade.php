@include('user.partial.header')
<style type="text/css">
  .left    { text-align: left;}
  .right   { text-align: right;}
  .center  { text-align: center;}
  .justify { text-align: justify;}
</style>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{url('/')}}" class="logo me-auto"><img src="assets/img/Untitled-2.png"></a>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a class="active" href="{{url('/home/about')}}">About</a></li>
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

  <main id="main" data-aos="fade-in">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p>Kenalan lebih dekat sama sejarah Nayaguna Tech dan orang-orang dibaliknya</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <div class="section-title">
              <h2>Sejarah</h2>
              <p>Sejarah Nayaguna Tech</p>
            </div>
               <p class="justify">Kami berdiri Januari 2013, tidak begitu mudah tapi cukup menyenangkan untuk kami hanya bermodalkan tekad. Kami berkeyakinan bisa membangun lembaga pendidikan yang terbaik untuk bangsa ini khususnya daerah kabupaten cianjur. Tidak adanya area untuk membangun dan mewujudkan tekad kami, cukup membuat kami harus berpikir keras tapi kami yakin jalan untuk kebaikan selalu ada. Segala bentuk sarana dan media pendidikan kami mulai dari NOL berbagai proposal dan segala bentuk kerjasama kami buat untuk mewujudkan lembaga pendidikan ini. Jurusan Teknologi Informasi dan Komunikasi kami pilih untuk menjadi pembentukan SDM berkualitas, dan kami mulai beraksi pada Juli 2013.</p>
               <p class="justify">Tahun 2021 kami mendapat kepercayaan untuk menjadi Tempat Uji Komptensi dibidang Teknologi Informasi dan Komunikasi dari LSK-TIK. Pada tahun 2023 tepatnya bulan Desember kami merubah nama lembaga kami dari awalnya GIPPAMS Academy menjadi Nayaguna Tech dibawah naungan PT. Taruna Cahya Wiguna. Ingin tahu kisah kami selanjutnya, kami pastikan sejarah-sejarah kami selanjutnya akan diisi oleh prestasi.</p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <div class="section-title">
                      <h2>Pimpinan Lemabaga</h2>
                      <p>NAYAGUNA Tech</p>
                    </div>
                    <p class="justify">Terima kasih sudah mau mengenal kami, dan salam sukses.</p>
                    <p class="justify">Untuk kami lembaran ini bukan untuk menceritakan kerja kami, siapa kami dan mau apa kami, tapi kami ingin anda bisa bergabung dengan kami untuk membangun dunia pendidikan dengan cara yang besar, biasa, kecil bahkan sederhana sekalipun.</p>
                    <p class="justify">Kami ingin berbagi semangat, ingin berbagi betapa menyenangkannya masuk di dunia pendidikan ini, begitu banyak generasi muda yang butuh kita sebagai seniornya.</p>
                    <p class="justify">Kami yakin sudah banyak lembaga, system, teknik di negeri ini untuk pendidikan tapi bukan dengan cara itu kami ingin membangun lembaga ini, kami ingin kita, anda dan semua bisa berkolaborasi untuk pendidikan dengan cara yang paling sederhana dan maksimal. </p>
                    <p class="justify">Jadi bergabunglah bersama kami dan mari bersemangat membangun pendidikan untuk negeri.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/pimpinan.jpg" alt="" class="img-fluid">
                    <p><b>Eva Susilawati, S.Kom., M.M</b></p>
                    <p class="fst-italic">“Jadi idealis memang rumit, tapi kami buktikan kami akan sukses dengan idealis”
                    </p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          {{-- <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div> --}}
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <div class="section-title">
              <h2>Visi & Misi</h2>
              <p>Visi & Misi Nayaguna Tech</p>
            </div>
            <h3>Visi</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> "Terwujudnya Mutu Pendidikan Luar Sekolah Yang Berkualitas, Beriman, Bertaqwa Dan Berprestasi."</li>
            </ul>
            <h3>Misi</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> Menyiapkan sumber daya yang handal dibidang komputer baik Instruktur, Media Pembelajaran yang sesuai dengan tuntutan jaman.</li>
              <li><i class="bi bi-check-circle"></i> Menjadi Lembaga Pendidikan berskala nasional, mengajarkan teknologi terapan, aplikasinya yang bermanfaat langsung bagi masyarakat.</li>
              <li><i class="bi bi-check-circle"></i> Menjadi Lembaga Pendidikan yang menjadi manusia Kerja Cerdas, Kerja Keras, Kerjas Tuntas, Kerja Ikhlas.</li>
              <li><i class="bi bi-check-circle"></i> Menjadi Lembaga pendidikan yang melayani live time learning dan pusat informasi teknologi bagi masyarakat.</li>
              <li><i class="bi bi-check-circle"></i> Menjadi wadah generasi muda dalam pemahaman Teknologi Informasi.</li>
              <li><i class="bi bi-check-circle"></i> Membina peserta didik untuk berkembang menjadi tenaga profesional dibidang teknologi informasi.</li>
              <li><i class="bi bi-check-circle"></i> Melakukan kerjasama kemitraan yang sinergis dengan pihak lain.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
  </main><!-- End #main -->
  @include('user.partial.footer')