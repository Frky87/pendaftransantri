@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pengunduran Diri</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pengunduran_diri.index') }}"> Back</a>
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

    <form action="{{ route('pengunduran_diri.update', $pengundurandiri->ID_Pengunduran_Diri) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Pengunduran Diri:</strong>
                    <input type="text" name="ID_Pengunduran_Diri" value="{{ $pengundurandiri->ID_Pengunduran_Diri }}" class="form-control" placeholder="ID Pengunduran Diri">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Santri:</strong>
                    <select name="ID_Santri" class="form-control custom-select">
                        <option value="" disabled selected>Pilih ID Santri</option>
                        @foreach($santri as $santri)
                            <option value="{{ $santri->ID_Santri }}" {{ $santri->ID_Santri == $pengundurandiri->ID_Santri ? 'selected' : '' }}>{{ $santri->ID_Santri }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Pengunduran:</strong>
                    <input type="date" name="Tanggal_Pengunduran" value="{{ $pengundurandiri->Tanggal_Pengunduran }}" class="form-control" placeholder="Tanggal Pengunduran">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alasan Pengunduran:</strong>
                    <input type="text" name="Alasan_Pengunduran" value="{{ $pengundurandiri->Alasan_Pengunduran }}" class="form-control" placeholder="Alasan Pengunduran">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    <input type="text" name="Keterangan" value="{{ $pengundurandiri->Keterangan }}" class="form-control" placeholder="Keterangan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Pengunduran:</strong>
                    <select name="Status_Pengunduran" class="form-control custom-select">
                        <option value="" disabled selected>Pilih Status Pengunduran</option>
                        <option value="Diterima" {{ $pengundurandiri->Status_Pengunduran == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                        <option value="Diproses" {{ $pengundurandiri->Status_Pengunduran == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                        <option value="Ditolak" {{ $pengundurandiri->Status_Pengunduran == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
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
