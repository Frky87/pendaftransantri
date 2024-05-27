@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Show Jadwal Ujian</h2>
            <a class="btn btn-primary" href="{{ route('pelaksanaan_ujians.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Detail Jadwal Ujian</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>ID Pelaksanaan Ujian:</strong>
                        <p>{{ $ujian->ID_Pelaksanaan_Ujian }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Ujian:</strong>
                        <p>{{ $ujian->Tanggal_Ujian }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Jenis Ujian:</strong>
                        <p>{{ $ujian->Jenis_Ujian }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Waktu Mulai:</strong>
                        <p>{{ $ujian->Waktu_Mulai }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Durasi Ujian:</strong>
                        <p>{{ $ujian->Durasi_Ujian }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Nilai Minimum:</strong>
                        <p>{{ $ujian->Nilai_Minimum }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection