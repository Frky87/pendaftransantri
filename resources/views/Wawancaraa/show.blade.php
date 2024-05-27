@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Wawancara</h2>
            <a class="btn btn-primary" href="{{ route('wawancara.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Wawancara</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>ID Wawancara:</strong>
                        <p>{{ $wawancara->ID_Wawancara }}</p>
                    </div>
                    <div class="form-group">
                        <strong>ID Calon Santri:</strong>
                        <p>{{ $wawancara->ID_Calon_Santri }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Wawancara:</strong>
                        <p>{{ $wawancara->Tanggal_Wawancara }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Mulai Wawancara:</strong>
                        <p>{{ $wawancara->Mulai_Wawancara }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Pewawancara:</strong>
                        <p>{{ $wawancara->Pewawancara }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Nilai Wawancara:</strong>
                        <p>{{ $wawancara->Nilai_Wawancara}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection