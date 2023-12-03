@include('admin.partial.header')
@include('admin.partial.navbar')
@include('admin.partial.sidebar')
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
      <a class="nav-link collapsed" href="{{url('/dashboard/kategori')}}">
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
      <a class="nav-link " href="{{url('/dashboard/pelatihan')}}">
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
      <h1>Pelatihan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Pelatihan</li>
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
            @if(session()->has('edit'))
            <div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
                {{session()->get('edit')}}
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
              <h5 class="card-title">Tambah Pelatihan</h5>

              <!-- Horizontal Form -->
              <form action="{{url('/pelatihan/post')}}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="judul" id="floatingName" placeholder="Judul Pelatihan" required>
                      <label for="floatingName">Judul Pelatihan</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="harga" id="Harga" placeholder="Harga Pelatihan" required>
                      <label for="Harga">Harga Pelatihan</label>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" name="id_kategori" id="floatingSelect" aria-label="State" required>
                      @foreach ($kategori as $item)
                      <option value="{{$item->id}}">{{$item->kategori}}</option>
                      @endforeach
                    </select>
                    <label for="floatingSelect">Kompetensi</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" name="id_instruktur" id="floatingSelect1" aria-label="State" required>
                      @foreach ($instruktur as $item)
                      <option value="{{$item->id}}">{{$item->nama}}</option>
                      @endforeach
                    </select>
                    <label for="floatingSelect1">Instruktur</label>
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="deskripsi" id="floatingName1" placeholder="Deksripsi Singkat" required>
                      <label for="floatingName1">Deksripsi Singkat</label>
                    </div>
                </div>
                <div class="col-mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto</label>
                  <input type="file" class="form-control" name="foto" id="gambarInput" accept="image/*" required>
                  <br>
                  <div class="col-md-8 col-lg-9">
                    <img id="gambarPreview" src="#" alt="Preview Gambar" style="display: none; max-width: 100%; max-height: 100px;">
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
              <h5 class="card-title">Data Pelatihan</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kompetensi</th>
                    <th scope="col">Instruktur</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pelatihan as $item)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->judul}}</td>
                    <td>{{ 'Rp ' . number_format($item->harga, 0, ',', '.') }}</td>
                    <td>{{$item->kategoriId->kategori}}</td>
                    <td>{{$item->instrukturId->nama}}</td>
                    <td>
                      <a href="{{url('/pelatihan/edit', $item->id)}}" style="button" class="btn btn-warning">Edit</a>
                      <a href="{{url('/pelatihan/delete', $item->id)}}" style="button" onclick="return confirm('Anda yakin ingin menghapus?')" class="btn btn-danger">Hapus</a>
                    </td>
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