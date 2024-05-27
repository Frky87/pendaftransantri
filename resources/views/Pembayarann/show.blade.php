@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Pembayaran</h2>
            <a class="btn btn-primary" href="{{ route('pembayaran.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Detail Pembayaran</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>ID Pembayaran:</strong>
                        <p>{{ $pembayaran->ID_Pembayaran }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Biaya Penerimaan:</strong>
                        <p>{{ $pembayaran->ID_Biaya_Penerimaan }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Biaya Pondok:</strong>
                        <p>{{ $pembayaran->ID_Biaya_Pondok }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Jenis Pembayaran:</strong>
                        <p>{{ $pembayaran->Jenis_Pembayaran }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Status Pembayaran:</strong>
                        <p>{{ $pembayaran->Status_Pembayaran }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Petugas Pembayaran:</strong>
                        <p>{{ $pembayaran->Petugas_Pembayaran }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection