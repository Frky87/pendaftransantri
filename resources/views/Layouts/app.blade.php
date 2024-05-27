<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Darul Aman</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('style/assets/img/daral1.png') }}" rel="icon">
  <link href="{{ asset('style/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
  <!-- Header -->
  <header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="{{ url('dashboard') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('style/assets/img/daral.png') }}" alt="">
      <span class="d-none d-lg-block">Pendaftaran Santri</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle" href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="{{ asset('style/assets/img/admin.png') }}" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">Administrator</span>
        </a><!-- End Profile Image Icon -->
      </li><!-- End Profile Nav -->
    </ul>
  </nav><!-- End Icons Navigation -->
</header>
  <!-- End Header -->

  <!-- Sidebar -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ url('pendaftaran') }}">
                <i class="bi bi-file-earmark-person"></i>
                <span>Pendaftaran</span>
            </a>
        </li><!-- End Registration Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#student-info-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i>
                <span>Informasi Calon Santri</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="student-info-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li><a href="{{ url('biodata') }}">Biodata</a></li>
                <li><a href="{{ url('informasiorangtua') }}">Informasi Orang Tua</a></li>
                <li><a href="{{ url('pendidikanterakhir') }}">Pendidikan Terakhir</a></li>
            </ul>
        </li><!-- End Student Info Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#admission-process-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i>
                <span>Proses Penerimaan</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="admission-process-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li><a href="{{ url('pelaksanaan_ujians') }}">Jadwal Ujian</a></li>
                <li><a href="{{ url('hasilujian') }}">Hasil Ujian</a></li>
                <li><a href="{{ url('wawancara') }}">Wawancara</a></li>
                <li><a href="{{ url('kriteria') }}">Kriteria Penerimaan</a></li>
                <li><a href="{{ url('biayapenerimaan') }}">Biaya Penerimaan</a></li>
            </ul>
        </li><!-- End Admission Process Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ url('pembayaran') }}">
                <i class="bi bi-credit-card"></i>
                <span>Pembayaran</span>
            </a>
        </li><!-- End Payment Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ url('biayapondok') }}">
                <i class="bi bi-currency-dollar"></i>
                <span>Biaya Pondok</span>
            </a>
        </li><!-- End Fees Nav -->

        <li class="nav-heading">Santri Aktif</li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('santri') }}">
                <i class="bi bi-people-fill"></i>
                <span>Santri Terdaftar</span>
            </a>
        </li><!-- End Registered Students Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ url('kelas') }}">
                <i class="bi bi-journal-richtext"></i>
                <span>Kelas</span>
            </a>
        </li><!-- End Classes Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ url('pengundurandiri') }}">
                <i class="bi bi-arrow-left-square"></i>
                <span>Pengunduran Diri</span>
            </a>
        </li><!-- End Resignation Nav -->

        <li class="nav-heading">Tentang</li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('profilpondok') }}">
                <i class="bi bi-building"></i>
                <span>Profil Pondok</span>
            </a>
        </li><!-- End School Profile Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ url('logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Logout Nav -->
    </ul>
  </aside>

  <main id="main" class="py-4">
    @yield("content")

  </main><!-- End #main -->

  <!-- Footer -->
  <footer id="footer" class="footer">
    <div class="copyright">
      Selamat Berjuang <strong><span>Sang Pewaris Rasulullah SAW</span></strong>
    </div>
    <div class="credits">
      Didesain oleh <a href="https://edu.almuwasholah.com/members/firkypribadi/">Firky - 2218049</a>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <!-- Vendor JS Files and other scripts -->
  <!-- Vendor JS Files -->
  <script src="{{ asset('style/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('style/assets/js/main.js') }}"></script>
</body>
</html>