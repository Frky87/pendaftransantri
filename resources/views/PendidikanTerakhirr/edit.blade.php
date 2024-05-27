@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pendidikan Terakhir</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pendidikan_terakhir.index') }}"> Back</a>
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

    <form action="{{ route('pendidikan_terakhir.update', $pendidikanterakhir->ID_Pendidikan) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Pendidikan:</strong>
                    <input type="text" name="ID_Pendidikan" value="{{ $pendidikanterakhir->ID_Pendidikan }}" class="form-control" placeholder="ID Pendidikan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tingkatan Pendidikan:</strong>
                    <input type="text" name="Tingkatan_Pendidikan" value="{{ $pendidikanterakhir->Tingkatan_Pendidikan }}" class="form-control" placeholder="Tingkatan Pendidikan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Sekolah:</strong>
                    <input type="text" name="Nama_Sekolah" value="{{ $pendidikanterakhir->Nama_Sekolah }}" class="form-control" placeholder="Nama Sekolah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Lulus:</strong>
                    <input type="text" name="Tahun_Lulus_Sekolah" value="{{ $pendidikanterakhir->Tahun_Lulus_Sekolah }}" class="form-control" placeholder="Tahun Lulus">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pendidikan Non Formal:</strong>
                    <input type="text" name="Pendidikan_Non_Formal" value="{{ $pendidikanterakhir->Pendidikan_Non_Formal }}" class="form-control" placeholder="Pendidikan Non Formal">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Lulus:</strong>
                    <input type="text" name="Tahun_Lulus" value="{{ $pendidikanterakhir->Tahun_Lulus }}" class="form-control" placeholder="Tahun Lulus">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Calon Santri:</strong>
                    <select name="ID_Calon_Santri" class="form-control custom-select">
                        <option value="" disabled selected>Pilih ID Calon Santri</option>
                        @foreach($calonsantri as $calon)
                            <option value="{{ $calon->ID_Calon_Santri }}" {{ $calon->ID_Calon_Santri == $pendidikanterakhir->ID_Calon_Santri ? 'selected' : '' }}>{{ $calon->ID_Calon_Santri }}</option>
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
