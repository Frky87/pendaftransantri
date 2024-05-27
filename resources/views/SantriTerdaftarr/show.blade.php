@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Santri</h2>
            <a class="btn btn-primary" href="{{ route('pendidikan_terakhir.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Detail Santri</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>ID Santri:</strong>
                        <p>{{ $santri->ID_Santri }}</p>
                    </div>
                    <div class="form-group">
                        <strong>ID Calon Santri:</strong>
                        <p>{{ $santri->ID_Calon_Santri }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Nama:</strong>
                        <p>{{ $santri->Nama }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Diterima:</strong>
                        <p>{{ $santri->Tanggal_Diterima }}</p>
                    </div>
                    <div class="form-group">
                        <strong>ID Kelas:</strong>
                        <p>{{ $santri->ID_Kelas }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection