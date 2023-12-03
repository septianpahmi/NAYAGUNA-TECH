@include('admin.partial.header')
@include('admin.partial.navbar')
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link " href="{{url('/dashboard/kategori')}}">
          <i class="bi bi-menu-button-wide"></i>
          <span>Kompetensi</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard/instruktur')}}">
          <i class="bi bi-person"></i>
          <span>Instuktur</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard/pelatihan')}}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Pelatihan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard/galeri')}}">
          <i class="bi bi-journal-text"></i>
          <span>Galeri</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Administratif</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard/kwitansi')}}">
          <i class="bi bi-card-list"></i>
          <span>Kwitansi</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard/sertifikat')}}">
          <i class="bi bi-card-list"></i>
          <span>Sertifikat</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/dashboard/laporan-bulan')}}">
              <i class="bi bi-circle"></i><span>Bulan</span>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard/laporan-tahun')}}">
              <i class="bi bi-circle"></i><span>Tahun</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Kompetensi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Kompetensi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
            @if(session()->has('success'))
            <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                {{session()->get('success')}}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session()->has('delete'))
            <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                {{session()->get('delete')}}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Kompetensi</h5>

              <!-- Horizontal Form -->
              <form action="{{url('/kategori/post')}}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="kategori" id="floatingName" placeholder="Kategori">
                      <label for="floatingName">Kompetensi</label>
                    </div>
                </div>
                
                <div class="text-center">
                  <button type="submit" id="modal1" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->
              <!-- Modal -->

            </div>
          </div>

        </div>

      </div>
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Kompetensi</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kompetensi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $item)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->kategori}}</td>
                    <td><a href="{{url('/kategori/delete', $item->id)}}" style="button" onclick="return confirm('Anda yakin ingin menghapus?')" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  
@include('admin.partial.footer')