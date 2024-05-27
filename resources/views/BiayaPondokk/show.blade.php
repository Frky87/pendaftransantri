@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Biaya Pondok</h2>
            <a class="btn btn-primary" href="{{ route('biaya_pondok.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Detail Biodata</strong>
                </div>
                <div class="card-body">
                <div class="form-group">
                        <strong>ID Biaya Pondok:</strong>
                        <p>{{ $biayapondok->ID_Biaya_Pondok }}</p>
                    </div>
                    <div class="form-group">
                        <strong>ID Santri:</strong>
                        <p>{{ $biayapondok->ID_Santri }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Nama Biaya:</strong>
                        <p>{{ $biayapondok->Nama_Biaya }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Jenis Biaya:</strong>
                        <p>{{ $biayapondok->Jenis_Biaya }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Deskripsi:</strong>
                        <p>{{ $biayapondok->Deskripsi }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Total Biaya:</strong>
                        <p>{{ $biayapondok->Total_Biaya }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Berlaku:</strong>
                        <p>{{ $biayapondok->Tanggal_Berlaku }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection