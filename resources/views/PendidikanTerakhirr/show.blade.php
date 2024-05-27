@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Pendidikan Calon Santri</h2>
            <a class="btn btn-primary" href="{{ route('pendidikan_terakhir.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Detail Pendidikan</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>ID Pendidikan:</strong>
                        <p>{{ $pendidikanterakhir->ID_Pendidikan }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Tingkat Pendidikan:</strong>
                        <p>{{ $pendidikanterakhir->Tingkatan_Pendidikan }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Nama Sekolah:</strong>
                        <p>{{ $pendidikanterakhir->Nama_Sekolah }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Tahun Lulus:</strong>
                        <p>{{ $pendidikanterakhir->Tahun_Lulus_Sekolah }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Pendidikan Non Formal:</strong>
                        <p>{{ $pendidikanterakhir->Pendidikan_Non_Formal }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Tahun Lulus:</strong>
                        <p>{{ $pendidikanterakhir->Tahun_Lulus }}</p>
                    </div>
                    <div class="form-group">
                        <strong>ID Calon Santri:</strong>
                        <p>{{ $pendidikanterakhir->ID_Calon_Santri }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection