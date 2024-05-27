@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Hasil Ujian</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hasil_ujian.index') }}"> Back</a>
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

    <form action="{{ route('hasil_ujian.update', $hasilujian->ID_Hasil_Ujian) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Hasil Ujian:</strong>
                    <input type="text" name="ID_Hasil_Ujian" value="{{ $hasilujian->ID_Hasil_Ujian }}" class="form-control" placeholder="ID Hasil Ujian" readonly>
                </div>
            </div>
            <div class="form-group">
                <strong>ID Pelaksanaan Ujian:</strong>
                <select name="ID_Pelaksanaan_Ujian" class="form-control custom-select">
                    <option value="" disabled selected>Pilih ID Pelaksanaan Ujian</option>
                    @foreach($ujian as $uji)
                        <option value="{{ $uji->ID_Pelaksanaan_Ujian }}" {{ $uji->ID_Pelaksanaan_Ujian == $hasilujian->ID_Pelaksanaan_Ujian ? 'selected' : '' }}>{{ $uji->ID_Pelaksanaan_Ujian }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>ID Calon Santri:</strong>
                <select name="ID_Calon_Santri" class="form-control custom-select">
                    <option value="" disabled selected>Pilih ID Calon Santri</option>
                    @foreach($calonsantri as $calon)
                        <option value="{{ $calon->ID_Calon_Santri }}" {{ $calon->ID_Calon_Santri == $hasilujian->ID_Calon_Santri ? 'selected' : '' }}>{{ $calon->ID_Calon_Santri }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Soal:</strong>
                    <input type="text" name="Jumlah_Soal" value="{{ $hasilujian->Jumlah_Soal }}" class="form-control" placeholder="Jumlah Soal">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Waktu Selesai:</strong>
                    <input type="time" name="Waktu_Selesai" value="{{ $hasilujian->Waktu_Selesai }}" class="form-control" placeholder="Waktu Selesai">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai Akhir:</strong>
                    <input type="number" name="Nilai_Akhir" value="{{ $hasilujian->Nilai_Akhir }}" class="form-control" placeholder="Nilai Akhir">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection