  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('/dashboard')}}">
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