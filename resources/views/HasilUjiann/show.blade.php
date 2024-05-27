@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Show Hasil Ujian</h2>
            <a class="btn btn-primary" href="{{ route('hasil_ujian.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Detail Hasil Ujian</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>ID Hasil Ujian:</strong>
                        <p>{{ $hasilujian->ID_Hasil_Ujian }}</p>
                    </div>
                    <div class="form-group">
                        <strong>ID Pelaksanaan Ujian:</strong>
                        <p>{{ $hasilujian->ID_Pelaksanaan_Ujian }}</p>
                    </div>
                    <div class="form-group">
                        <strong>ID Calon Santri:</strong>
                        <p>{{ $hasilujian->ID_Calon_Santri }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Waktu Selesai:</strong>
                        <p>{{ $hasilujian->Waktu_Selesai }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Nilai Akhir:</strong>
                        <p>{{ $hasilujian->Nilai_Akhir }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection