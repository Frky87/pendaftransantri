@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pembayaran</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pembayaran.index') }}"> Back</a>
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

    <form action="{{ route('pembayaran.update', $pembayaran->ID_Pembayaran) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Pembayaran:</strong>
                    <input type="text" name="ID_Pembayaran" value="{{ $pembayaran->ID_Pembayaran }}" class="form-control" placeholder="ID Pembayaran">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Biaya Penerimaan:</strong>
                    <select name="ID_Penerimaan" class="form-control custom-select">
                        <option value="" disabled selected>Pilih ID Biaya Penerimaan</option>
                        @foreach($biayapenerimaan as $biayapenerimaan)
                            <option value="{{ $biayapenerimaan->ID_Biaya_Penerimaan }}" {{ $biayapenerimaan->ID_Biaya_Penerimaan == $pembayaran->ID_Biaya_Penerimaan ? 'selected' : '' }}>{{ $biayapenerimaan->ID_Biaya_Penerimaan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Biaya Pondok:</strong>
                    <select name="ID_Biaya_Pondok" class="form-control custom-select">
                        <option value="" disabled selected>Pilih ID Biaya Pondok</option>
                        @foreach($biayapondok as $biayapondok)
                            <option value="{{ $biayapondok->ID_Biaya_Pondok }}" {{ $biayapondok->ID_Biaya_Pondok == $pembayaran->ID_Biaya_Pondok ? 'selected' : '' }}>{{ $biayapondok->ID_Biaya_Pondok }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Pembayaran:</strong>
                    <input type="date" name="Tanggal_Pembayaran" value="{{ $pembayaran->Tanggal_Pembayaran }}" class="form-control" placeholder="Tanggal Pembayaran">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Pembayaran:</strong>
                    <select name="Jenis_Pembayaran" class="form-control custom-select">
                        <option value="" disabled selected>Pilih Jenis Pembayaran</option>
                        <option value="Tunai" {{ $pembayaran->Jenis_Pembayaran == 'Tunai' ? 'selected' : '' }}>Tunai</option>
                        <option value="Non-Tunai" {{ $pembayaran->Jenis_Pembayaran == 'Non-Tunia' ? 'selected' : '' }}>Non Tunai</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Pembayaran:</strong>
                    <select name="Status_Pembayaran" class="form-control custom-select">
                        <option value="" disabled selected>Pilih Status Pembayaran</option>
                        <option value="Lunas" {{ $pembayaran->Status_Pembayaran == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                        <option value="Diproses" {{ $pembayaran->Status_Pembayaran == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Petugas Pembayaran:</strong>
                    <input type="text" name="Petugas_Pembayaran" value="{{ $pembayaran->Petugas_Pembayaran }}" class="form-control" placeholder="Petugas Pembayaran">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
