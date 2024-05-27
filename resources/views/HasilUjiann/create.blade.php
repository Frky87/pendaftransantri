@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Hasil Ujian</h1>

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

    <form action="{{ route('hasil_ujian.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Hasil_Ujian">ID Hasil Ujian:</label>
            <input type="text" name="ID_Hasil_Ujian" class="form-control" placeholder="ID Hasil Ujian">
        </div>

        <div class="form-group">
            <label for="ID_Pelaksanaan_Ujian">ID Pelaksanaan Ujian:</label>
            <select name="ID_Pelaksanaan_Ujian" class="form-control custom-select">
                <option value="" disabled selected>Pilih ID Pelaksanaan Ujian</option>
                @foreach($ujian as $ujian)
                    <option value="{{ $ujian->ID_Pelaksanaan_Ujian }}">{{ $ujian->ID_Pelaksanaan_Ujian }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ID_Calon_Santri">ID Calon Santri:</label>
            <select name="ID_Calon_Santri" class="form-control custom-select">
                <option value="" disabled selected>Pilih ID Santri</option>
                @foreach($calonsantri as $calonsantri)
                    <option value="{{ $calonsantri->ID_Calon_Santri }}">{{ $calonsantri->ID_Calon_Santri }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Jumlah_Soal">Jumlah Soal:</label>
            <input type="text" name="Jumlah_Soal" class="form-control" placeholder="Jumlah Soal">
        </div>


        <div class="form-group">
            <label for="Waktu_Selesai">Waktu Selesai:</label>
            <input type="time" name="Waktu_Selesai" class="form-control" placeholder="Waktu Selesai">
        </div>

        <div class="form-group">
            <label for="Nilai_Akhir">Nilai Akhir:</label>
            <input type="int" name="Nilai_Akhir" class="form-control" placeholder="Nilai Akhir">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection