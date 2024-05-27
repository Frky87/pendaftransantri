@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Calon Santri</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('calon_santri.index') }}"> Back</a>
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

    <form action="{{ route('calon_santri.update', $calonsantri->ID_Calon_Santri) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Calon Santri:</strong>
                    <input type="text" name="ID_Calon_Santri" value="{{ $calonsantri->ID_Calon_Santri }}" class="form-control" placeholder="ID Calon Santri">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="Nama" value="{{ $calonsantri->Nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>TTL:</strong>
                    <input type="text" name="Tempat_Tanggal_Lahir" value="{{ $calonsantri->Tempat_Tanggal_Lahir }}" class="form-control" placeholder="Tempat Tanggal Lahir">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <select name="Jenis_Kelamin" class="form-control custom-select">
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki" {{ $calonsantri->Jenis_Kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="Perempuan" {{ $calonsantri->Jenis_Kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Rumah:</strong>
                    <input type="text" name="Alamat_Rumah" value="{{ $calonsantri->Alamat_Rumah }}" class="form-control" placeholder="Alamat Rumah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Telepon:</strong>
                    <input type="text" name="No_Telepon" value="{{ $calonsantri->No_Telepon }}" class="form-control" placeholder="No Telepon">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Pendaftaran:</strong>
                    <select name="ID_Pendaftaran" class="form-control custom-select">
                        <option value="" disabled selected>Pilih Pendaftaran</option>
                        @foreach($pendaftaran as $pendaftaran)
                            <option value="{{ $pendaftaran->ID_Pendaftaran }}" {{ $pendaftaran->ID_Pendaftaran == $calonsantri->ID_Pendaftaran ? 'selected' : '' }}>{{ $pendaftaran->ID_Pendaftaran }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
