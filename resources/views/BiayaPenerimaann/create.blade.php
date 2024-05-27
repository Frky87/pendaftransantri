@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Biaya Penerimaan</h1>

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

    <form action="{{ route('biaya_penerimaan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Biaya_Penerimaan">ID Biaya Penerimaan:</label>
            <input type="text" name="ID_Biaya_Penerimaan" class="form-control" placeholder="ID Biaya Penerimaan">
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
            <label for="Jenis_Pembyaran">Jenis Pembayaran:</label>
            <input type="text" name="Jenis_Pembayaran" class="form-control" placeholder="Jenis Pembayaran">
        </div>


        <div class="form-group">
            <label for="Biaya">Biaya:</label>
            <input type="int" name="Biaya" class="form-control" placeholder="Biaya">
        </div>

        <div class="form-group">
            <label for="Deskripsi">Deskripsi:</label>
            <input type="text" name="Deskripsi" class="form-control" placeholder="Deskprisi">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection