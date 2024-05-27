@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Wali Santri</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('wali_santri.index') }}"> Back</a>
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

    <form action="{{ route('wali_santri.update', $walisantri->ID_Wali) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Wali:</strong>
                    <input type="text" name="ID_Wali" value="{{ $walisantri->ID_Wali }}" class="form-control" placeholder="ID Wali">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Wali:</strong>
                    <input type="text" name="Nama_Wali" value="{{ $walisantri->Nama_Wali }}" class="form-control" placeholder="Nama Wali">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hubungan Wali:</strong>
                    <select name="Hubungan_Wali" class="form-control custom-select">
                        <option value="" disabled selected>Pilih Hubungan Wali</option>
                        <option value="Kandung" {{ $walisantri->Hubungan_Wali == 'Kandung' ? 'selected' : '' }}>Kandung</option>
                        <option value="Angkat" {{ $walisantri->Hubungan_Wali == 'Angkat' ? 'selected' : '' }}>Angkat</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Wali:</strong>
                    <input type="text" name="Alamat_Wali" value="{{ $walisantri->Alamat_Wali }}" class="form-control" placeholder="Alamat Wali">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Telepon Wali:</strong>
                    <input type="text" name="No_Telepon_Wali" value="{{ $walisantri->No_Telepon_Wali }}" class="form-control" placeholder="No Telepon Wali">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email Wali:</strong>
                    <input type="text" name="Email_Wali" value="{{ $walisantri->Email_Wali }}" class="form-control" placeholder="Email Wali">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Calon Santri:</strong>
                    <select name="ID_Calon_Santri" class="form-control custom-select">
                        <option value="" disabled selected>Pilih ID Calon Wali Santri</option>
                        @foreach($calonsantri as $calon)
                            <option value="{{ $calon->ID_Calon_Santri }}" {{ $calon->ID_Calon_Santri == $walisantri->ID_Calon_Santri ? 'selected' : '' }}>{{ $calon->ID_Calon_Santri }}</option>
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
