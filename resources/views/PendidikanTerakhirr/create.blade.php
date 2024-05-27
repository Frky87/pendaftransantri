@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Pendidikan Terakhir</h1>

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

    <form action="{{ route('pendidikan_terakhir.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Pendidikan">ID Pendidikan:</label>
            <input type="text" name="ID_Pendidikan" class="form-control" placeholder="ID Pendidikan">
        </div>

        <div class="form-group">
            <label for="Tingkatan_Pendidikan">Tingkat Pendidikan:</label>
            <input type="text" name="Tingkatan_Pendidikan" class="form-control" placeholder="SD/MI SMP/MTS SMK/SMA/MA S1/S2/S3">
        </div>

        <div class="form-group">
            <label for="Nama_Sekolah">Nama Sekolah:</label>
            <input type="text" name="Nama_Sekolah" class="form-control" placeholder="Nama Sekolah">
        </div>

        <div class="form-group">
            <label for="Tahun_Lulus_Sekolah">Tahun Lulus:</label>
            <input type="text" name="Tahun_Lulus_Sekolah" class="form-control" placeholder="Tahun Lulus Sekolah">
        </div>

        <div class="form-group">
            <label for="Pendidikan_Non_Formal">Pendidikan Non Formal:</label>
            <input type="text" name="Pendidikan_Non_Formal" class="form-control" placeholder="Jika Tidak Ada Diisi (-)">
        </div>

        <div class="form-group">
            <label for="Tahun_Lulus">Tahun Lulus:</label>
            <input type="text" name="Tahun_Lulus" class="form-control" placeholder="Jika Tidak Ada Diisi (-)">
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

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection