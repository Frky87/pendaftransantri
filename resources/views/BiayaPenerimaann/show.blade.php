@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Biaya Penerimaan</h2>
            <a class="btn btn-primary" href="{{ route('biaya_penerimaan.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Biaya Penerimaan</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>ID Biaya Penerimaan:</strong>
                        <p>{{ $biayapenerimaan->ID_Biaya_Penerimaan }}</p>
                    </div>
                    <div class="form-group">
                        <strong>ID Calon Santri:</strong>
                        <p>{{ $biayapenerimaan->ID_Calon_Santri }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Jenis Pembayaran:</strong>
                        <p>{{ $biayapenerimaan->Jenis_Pembayaran}}</p>
                    </div>
                    <div class="form-group">
                        <strong>Biaya:</strong>
                        <p>{{ $biayapenerimaan->Biaya }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Deskripsi:</strong>
                        <p>{{ $biayapenerimaan->Deskripsi }}</p>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection