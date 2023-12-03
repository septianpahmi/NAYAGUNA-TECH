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
      <a class="nav-link " href="{{url('/dashboard/kwitansi')}}">
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
      <h1>Edit Kwitansi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Edit Kwitansi</li>
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
              <h5 class="card-title">Edit Kwitansi</h5>

              <!-- Horizontal Form -->
              <form action="{{url('/kwitansi/edit-post',$data->id)}}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="nomor" id="floatingName" placeholder="Judul Pelatihan" required>
                    <label for="floatingName">Nomor</label>
                  </div>
              </div>
                <div class="col-md-10">
                    <div class="form-floating">
                      <input type="text" class="form-control" value="{{$data->instansi}}" name="instansi" id="Harga" placeholder="Harga Pelatihan" required>
                      <label for="Harga">Diterima Dari</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="hal" value="{{$data->hal}}" id="Harga" placeholder="Harga Pelatihan" required>
                      <label for="Harga">Hal</label>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-7">
                    <select class="form-select" name="id_pelatihan" id="floatingSelect" aria-label="State" required>
                      @foreach ($kompetensi as $item)
                      <option value="{{$item->id}}">{{$item->kategori}}</option>
                      @endforeach
                    </select>
                    <label for="floatingSelect">Materi Uji Kompetensi</label>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="peserta" value="{{$data->peserta}}" id="Harga" placeholder="Harga Pelatihan" required>
                      <label for="Harga">Jumlah Perserta</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="terbilang" value="{{$data->terbilang}}" id="floatingName1" placeholder="Deksripsi Singkat" required>
                      <label for="floatingName1">Terbilang</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="penerima" value="{{$data->penerima}}" id="floatingName1" placeholder="Deksripsi Singkat" required>
                      <label for="floatingName1">Penerima</label>
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
      
    </section>

  </main><!-- End #main -->
  
@include('admin.partial.footer')