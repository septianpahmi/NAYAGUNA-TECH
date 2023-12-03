@include('admin.partial.header')
@include('admin.partial.navbar')
@include('admin.partial.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-3">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Peserta <span>| All</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$user}}</h6>
                      <span class="text-success small pt-1 fw-bold">25%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-3">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Pelatihan <span>| All</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-layout-text-window-reverse"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$pelatihan}}</h6>
                      <span class="text-success small pt-1 fw-bold">15%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-3">
              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Instruktur <span>| All</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$instruktur}}</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-3">
              <div class="card info-card galeri-card">

                <div class="card-body">
                  <h5 class="card-title">Galeri <span>| All</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-image"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$galeri}}</h6>
                      <span class="text-success small pt-1 fw-bold">13%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail Pesan</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3">

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" value="{{$pesan->name}}" id="floatingEmail" placeholder="Your Email" disabled>
                    <label for="floatingEmail">Nama Pengirim</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" value="{{$pesan->email}}" id="floatingPassword" placeholder="Password" disabled>
                    <label for="floatingPassword">Email Pengirim</label>
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" value="{{$pesan->subject}}" id="floatingName" placeholder="Your Name" disabled>
                      <label for="floatingName">Subject</label>
                    </div>
                  </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" value="{{$pesan->pesan}}" placeholder="Address" id="floatingTextarea" style="height: 100px;" disabled>{{$pesan->pesan}}</textarea>
                    <label for="floatingTextarea">Pesan</label>
                  </div>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
    </section>


  </main><!-- End #main -->
@include('admin.partial.footer')