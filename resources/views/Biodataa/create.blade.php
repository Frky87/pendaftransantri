@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Biodata Calon Santri</h1>

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

    <form action="{{ route('calon_santri.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Calon_Santri">ID Calon Santri:</label>
            <input type="text" name="ID_Calon_Santri" class="form-control" placeholder="ID Calon Santri">
        </div>

        <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" name="Nama" class="form-control" placeholder="Nama">
        </div>

        <div class="form-group">
            <label for="Tempat_Tanggal_Lahir">TTL:</label>
            <input type="text" name="Tempat_Tanggal_Lahir" class="form-control" placeholder="TTL">
        </div>

        <div class="form-group">
            <label for="Jenis_Kelamin">Jenis Kelamin:</label>
            <select name="Jenis_Kelamin" class="form-control custom-select">
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Alamat_Rumah">Alamat Rumah:</label>
            <input type="text" name="Alamat_Rumah" class="form-control" placeholder="Alamat Rumah">
        </div>

        <div class="form-group">
            <label for="No_Telepon">No Telp:</label>
            <input type="text" name="No_Telepon" class="form-control" placeholder="No Telepon">
        </div>

        <div class="form-group">
            <label for="ID_Pendaftaran">ID Pendaftaran:</label>
            <select name="ID_Pendaftaran" class="form-control custom-select">
                <option value="" disabled selected>Pilih Pendaftaran</option>
                @foreach($pendaftaran as $pendaftaran)
                    <option value="{{ $pendaftaran->ID_Pendaftaran }}">{{ $pendaftaran->ID_Pendaftaran }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection