@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Pembayaran</h1>

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

    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Pembayaran">ID Pembayaran:</label>
            <input type="text" name="ID_Pembayaran" class="form-control" placeholder="ID Pembayaran">
        </div>

        <div class="form-group">
            <label for="ID_Biaya_Penerimaan">ID Biaya Penerimaan:</label>
            <select name="ID_Biaya_Penerimaan" class="form-control custom-select">
                <option value="" disabled selected>Pilih ID Biaya Penerimaan</option>
                @foreach($biayapenerimaan as $biayapenerimaan)
                    <option value="{{ $biayapenerimaan->ID_Biaya_Penerimaan }}">{{ $biayapenerimaan->ID_Biaya_Penerimaan }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ID_Biaya_Pondok">ID Biaya Pondok:</label>
            <select name="ID_Biaya_Pondok" class="form-control custom-select">
                <option value="" disabled selected>Pilih ID Biaya Pondok</option>
                @foreach($biayapondok as $biayapondok)
                    <option value="{{ $biayapondok->ID_Biaya_Pondok }}">{{ $biayapondok->ID_Biaya_Pondok }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Tanggal_Pembayaran">Tanggal Pembayaran:</label>
            <input type="date" name="Tanggal_Pembayaran" class="form-control" placeholder="Tanggal Pembayaran">
        </div>

        <div class="form-group">
            <label for="Jenis Pembayaran">Jenis Pembayaran:</label>
            <select name="Jenis_Pembayaran" class="form-control custom-select">
                <option value="" disabled selected>Pilih Jenis Pembayaran</option>
                <option value="Tunai">Tunai</option>
                <option value="Non-Tunai">Non Tunai</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Status_Pembayaran">Status_Pembayaran:</label>
            <select name="Status_Pembayaran" class="form-control custom-select">
                <option value="" disabled selected>Pilih Jenis Pembayaran</option>
                <option value="Lunas">Lunas</option>
                <option value="Diproses">Diproses</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Petugas_Pembayaran">Petugas Pembayaran:</label>
            <input type="text" name="Petugas_Pembayaran" class="form-control" placeholder="Petugas Pembayaran">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection