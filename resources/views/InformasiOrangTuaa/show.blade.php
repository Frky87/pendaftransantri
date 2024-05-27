@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Biodata Calon Santri</h2>
            <a class="btn btn-primary" href="{{ route('wali_santri.index') }}">Back</a>
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
                        <strong>ID Wali:</strong>
                        <p>{{ $walisantri->ID_Wali }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Nama Wali:</strong>
                        <p>{{ $walisantri->Nama_Wali }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Hubungan Wali:</strong>
                        <p>{{ $walisantri->Hubungan_Wali }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Alamat Wali:</strong>
                        <p>{{ $walisantri->Alamat_Wali }}</p>
                    </div>
                    <div class="form-group">
                        <strong>No Telepon Wali:</strong>
                        <p>{{ $walisantri->No_Telepon_Wali }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        <p>{{ $walisantri->Email_Wali }}</p>
                    </div>
                    <div class="form-group">
                        <strong>ID Calon Santri:</strong>
                        <p>{{ $walisantri->ID_Calon_Santri }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection