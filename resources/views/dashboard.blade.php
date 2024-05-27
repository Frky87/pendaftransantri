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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Nunito:wght@300;400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

  <!-- Custom CSS -->
  <style>
    /* Custom styling */
    .info-card {
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .info-card .card-title {
      font-size: 1.5rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 15px;
    }
    .info-card .widget {
      margin-bottom: 20px;
    }
    .info-card .widget h6 {
      font-size: 1.2rem;
      font-weight: 600;
      color: #555;
      margin-bottom: 5px;
    }
    .info-card .widget p {
      font-size: 1rem;
      color: #777;
      margin: 0;
    }
    .info-card .clock {
      font-size: 1.2rem;
      color: #333;
      font-weight: 600;
      margin-top: 10px;
    }
    .info-card .clock div {
      margin: 5px 0;
    }
    .footer {
      text-align: center;
      padding: 20px;
      background-color: #f8f9fa;
      border-top: 1px solid #dee2e6;
      margin-top: 20px;
    }
    .footer .credits a {
      color: #0062cc;
      text-decoration: none;
    }
    .footer .credits a:hover {
      text-decoration: underline;
    }
    .back-to-top {
      background-color: #0062cc;
      color: #fff;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      bottom: 20px;
      right: 20px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .back-to-top:hover {
      background-color: #004a99;
    }
    .breadcrumb {
      background-color: #f8f9fa;
      padding: 10px;
      border-radius: 5px;
    }
    .breadcrumb-item a {
      color: #0062cc;
      text-decoration: none;
    }
    .breadcrumb-item a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('dashboard') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('style/assets/img/daral.png') }}" alt="Logo">
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

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
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
            <a class="nav-link            " href="{{ url('biayapondok') }}">
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
  </aside><!-- End Sidebar -->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Selamat Datang Card -->
        <div class="col-lg-12">
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title">Selamat Datang <span> | Pecinta Ilmu Agama</span></h5>
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <h6>Selamat Datang di Dashboard Pendaftaran Santri Baru</h6>
                  <p class="small pt-1">Semoga Allah SWT memudahkan jalan kita dalam menuntut ilmu dan beribadah.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Selamat Datang Card -->

        <!-- Widget and Clock -->
        <div class="col-lg-12">
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title">Widget <span> | Jam & Tanggal</span></h5>
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <div id="widget-container">
                    <div class="widget">
                      <h6>Cuaca Hari Ini</h6>
                      <p id="weather">Loading...</p>
                    </div>
                    <div class="widget">
                      <h6>Kutipan Harian</h6>
                      <p id="quote">"Tuntutlah ilmu dari buaian sampai ke liang lahat." - Hadis Nabi Muhammad SAW</p>
                    </div>
                  </div>
                  <div id="clock" class="clock">
                    <!-- Jam dan tanggal akan ditampilkan di sini -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Widget and Clock -->

      </div>
    </section><!-- End Dashboard Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      Selamat Berjuang <strong><span>Sang Pewaris Rasulullah SAW</span></strong>
    </div>
    <div class="credits">
      Didesain oleh <a href="https://edu.almuwasholah.com/members/firkypribadi/">Firky - 2218049</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('style/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('style/assets/js/main.js') }}"></script>

  <script>
    function updateClock() {
      const clock = document.getElementById('clock');
      const now = new Date();
      const hours = now.getHours().toString().padStart(2, '0');
      const minutes = now.getMinutes().toString().padStart(2, '0');
      const seconds = now.getSeconds().toString().padStart(2, '0');
      const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
      const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
      const day = days[now.getDay()];
      const date = now.getDate();
      const month = months[now.getMonth()];
      const year = now.getFullYear();
      clock.innerHTML = `<div>${day}, ${date} ${month} ${year}</div><div>${hours}:${minutes}:${seconds}</div>`;
    }

    setInterval(updateClock, 1000);
    updateClock(); // initial call to display clock immediately

    async function fetchWeather() {
      const apiKey = 'YOUR_API_KEY'; // Ganti dengan API Key Anda dari Open
      Weather
      const city = 'Jakarta';
      const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

      try {
        const response = await fetch(url);
        const data = await response.json();
        const weather = document.getElementById('weather');
        weather.textContent = `${data.weather[0].description}, ${data.main.temp}°C`;
      } catch (error) {
        console.error('Error fetching weather data:', error);
        const weather = document.getElementById('weather');
        weather.textContent = 'Unable to fetch weather data';
      }
    }

    fetchWeather();
  </script>
</body>
</html>

