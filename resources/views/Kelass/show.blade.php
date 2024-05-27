@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Show Kelas</h2>
            <div>
                <a class="btn btn-primary" href="{{ route('kelas.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Detail Kelas</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>ID Kelas:</strong>
                                <p>{{ $kelas->ID_Kelas }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Level Kelas:</strong>
                                <p>{{ $kelas->Level_Kelas }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Kapasitas Kelas:</strong>
                                <p>{{ $kelas->Kapasitas_Kelas }}</p>
                            </div>
                        </div>
                        <!-- Add more fields here if necessary -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection