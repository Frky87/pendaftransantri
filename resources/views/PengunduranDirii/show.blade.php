@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Pendidikan Calon Santri</h2>
            <a class="btn btn-primary" href="{{ route('pengunduran_diri.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Detail Pengunduran Diri</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>ID Pengunduran Diri:</strong>
                        <p>{{ $pengundurandiri->ID_Pengunduran_Diri }}</p>
                    </div>
                    <div class="form-group">
                        <strong>ID Santri:</strong>
                        <p>{{ $pengundurandiri->ID_Santri }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Pengunduran:</strong>
                        <p>{{ $pengundurandiri->Tanggal_Pengunduran }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Alasan Pengunduran:</strong>
                        <p>{{ $pengundurandiri->Alasan_Pengunduran }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <p>{{ $pengundurandiri->Keterangan }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Status Pengunduran:</strong>
                        <p>{{ $pengundurandiri->Status_Pengunduran }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection