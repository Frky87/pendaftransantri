@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Jadwal Ujian</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pelaksanaan_ujians.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pelaksanaan_ujians.update', $ujian->ID_Pelaksanaan_Ujian) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Pelaksanaan Ujian:</strong>
                    <input type="text" name="ID_Pelaksanaan_Ujian" value="{{ $ujian->ID_Pelaksanaan_Ujian }}" class="form-control" placeholder="ID Pelaksanaan Ujian" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Ujian:</strong>
                    <input type="date" name="Tanggal_Ujian" value="{{ $ujian->Tanggal_Ujian }}" class="form-control" placeholder="Tanggal Ujian">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Ujian:</strong>
                    <input type="text" name="Jenis_Ujian" value="{{ $ujian->Jenis_Ujian }}" class="form-control" placeholder="Jenis Ujian">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Durasi Ujian:</strong>
                    <input type="time" name="Durasi_Ujian" value="{{ $ujian->Durasi_Ujian }}" class="form-control" placeholder="Durasi Ujian">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Waktu Mulai:</strong>
                    <input type="time" name="Waktu_Mulai" value="{{ $ujian->Waktu_Mulai }}" class="form-control" placeholder="Waktu_Mulai">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai Minimum:</strong>
                    <input type="number" name="Nilai_Minimum" value="{{ $ujian->Nilai_Minimum }}" class="form-control" placeholder="Nilai Minimum">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
