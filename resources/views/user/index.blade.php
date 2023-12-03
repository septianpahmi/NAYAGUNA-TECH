@include('user.partial.header')
<style type="text/css">
  .left    { text-align: left;}
  .right   { text-align: right;}
  .center  { text-align: center;}
  .justify { text-align: justify;}
</style>
@php
    use Carbon\Carbon;
@endphp
@include('user.partial.navbar')
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>“Sesuatu yang mudah kenapa harus dibuat sulit”
            </h3>
            <p class="justify">
              Pada saat ini begitu banyak mimpi untuk kemajuan pendidikan, mulai dari biaya 
              murah berkualitas, kesejahteraan pengajar, sarana dan prasarana yang baik dan 
              memadai
            </p>
            <p class="justify">
              Itu semua sebagian kecil dari mimpi kita bangsa Indonesia untuk pendidikan.
              Lantas apa yang harus kita lakukan ? 
            </p>
            <p class="justify">
              Rasanya banyak hal yang tidak akan berarti jika kemajuan bangsa ini tidak dibarengi
              dengan kemajuan SDM. Yang perlu anda ketahui untuk kami tentunya saya dan Nayaguna 
              Tech semua itu bukan lagi mimpi tapi PR yang akan kami kejar dan kami buktikan.
            </p>
            <p class="fst-italic"><b>
              “Kita Yakin Kita Bisa !”</b>
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$user}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$countPel}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pelatihan</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$countGal}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Galeri</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$countIns}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Instruktur</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          
          @foreach ($pelatihan as $item)
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

    <!-- ======= Trainers Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Galerir</h2>
            <p>Galeri Kegiatan</p>
          </div>
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($galeri as $item)
            <div class="col-md-4 d-flex align-items-stretch">
              <div class="card">
                <div class="card-img">
                  <img src="Galeri/{{$item->foto}}" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="{{url('/home/galeri')}}">{{$item->judul}}</a></h5>
                  <p class="fst-italic text-center">{{ Carbon::parse($item->created_at)->setTimezone('Asia/Jakarta')->format('l, d M Y H:i T') }}</p>
                  <p class="card-text">{{Str::limit($item->deskripsi,50)}}</p>
                </div>
              </div>
            </div>

          @endforeach
        </div>

      </div>
    </section><!-- End Trainers Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Instruktur</h2>
            <p>Instruktur Ahli</p>
          </div>
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($instruktur as $item)
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
@include('user.partial.footer')