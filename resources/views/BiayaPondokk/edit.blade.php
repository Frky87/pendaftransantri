@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Biaya Pondok</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('biaya_pondok.index') }}"> Back</a>
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

    <form action="{{ route('biaya_pondok.update', $biayapondok->ID_Biaya_Pondok) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Biaya Pondok:</strong>
                    <input type="text" name="ID_Biaya_Pondok" value="{{ $biayapondok->ID_Biaya_Pondok }}" class="form-control" placeholder="ID Biaya Pondok">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Santri:</strong>
                    <select name="ID_Santri" class="form-control custom-select">
                        <option value="" disabled selected>Pilih ID Santri </option>
                        @foreach($santri as $santri)
                            <option value="{{ $santri->ID_Santri }}" {{ $santri->ID_Santri == $biayapondok->ID_Santri ? 'selected' : '' }}>{{ $santri->ID_Santri }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Biaya:</strong>
                    <input type="text" name="Nama" value="{{ $biayapondok->Nama_Biaya }}" class="form-control" placeholder="Nama Biaya">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Biaya:</strong>
                    <input type="text" name="Jenis_Biaya" value="{{ $biayapondok->Jenis_Biaya }}" class="form-control" placeholder="Jenis Biaya">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <input type="text" name="Deskripsi" value="{{ $biayapondok->Deskripsi }}" class="form-control" placeholder="Deskripsi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Biaya:</strong>
                    <input type="int" name="Total_Biaya" value="{{ $biayapondok->Total_Biaya }}" class="form-control" placeholder="Total Biaya">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Berlaku:</strong>
                    <input type="date" name="Tanggal Berlaku" value="{{ $biayapondok->Tanggal_Berlaku }}" class="form-control" placeholder="Tanggal Biaya">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
