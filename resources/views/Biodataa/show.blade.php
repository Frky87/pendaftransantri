@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Biodata Calon Santri</h2>
            <a class="btn btn-primary" href="{{ route('calon_santri.index') }}">Back</a>
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
                        <strong>ID Calon Santri:</strong>
                        <p>{{ $calonsantri->ID_Calon_Santri }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Nama:</strong>
                        <p>{{ $calonsantri->Nama }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Tempat Tanggal Lahir:</strong>
                        <p>{{ $calonsantri->Tempat_Tanggal_Lahir }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Jenis_Kelamin:</strong>
                        <p>{{ $calonsantri->Jenis_Kelamin }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Alamat Rumah:</strong>
                        <p>{{ $calonsantri->Alamat_Rumah }}</p>
                    </div>
                    <div class="form-group">
                        <strong>No Telepon:</strong>
                        <p>{{ $calonsantri->No_Telepon }}</p>
                    </div>
                    <div class="form-group">
                        <strong>ID_Pendaftaran:</strong>
                        <p>{{ $calonsantri->ID_Pendaftaran }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection