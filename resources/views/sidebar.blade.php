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
        <li><a href="{{ url('parent-info') }}">Informasi Orang Tua</a></li>
        <li><a href="{{ url('previous-education') }}">Pendidikan Terakhir</a></li>
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
        <li><a href="{{ url('exam-results') }}">Hasil Ujian</a></li>
        <li><a href="{{ url('interview') }}">Wawancara</a></li>
        <li><a href="{{ url('criteria') }}">Kriteria Penerimaan</a></li>
        <li><a href="{{ url('Biayapenerimaan') }}">Biaya Penerimaan</a></li>
      </ul>
    </li><!-- End Admission Process Nav -->

    <li class="nav-item">
      <a class="nav-link" href="{{ url('payment') }}">
        <i class="bi bi-credit-card"></i>
        <span>Pembayaran</span>
      </a>
    </li><!-- End Payment Nav -->

    <li class="nav-item">
      <a class="nav-link" href="{{ url('fees') }}">
        <i class="bi bi-currency-dollar"></i>
        <span>Biaya Pondok</span>
      </a>
    </li><!-- End Fees Nav -->

    <li class="nav-heading">Santri Aktif</li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('stud