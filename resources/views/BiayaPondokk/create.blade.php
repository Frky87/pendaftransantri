@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Biaya Pondok</h1>

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

    <form action="{{ route('biaya_pondok.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Biaya_Pondok">ID Biaya Pondok:</label>
            <input type="text" name="ID_Biaya_Pondok" class="form-control" placeholder="ID Biaya Pondok">
        </div>

        <div class="form-group">
            <label for="ID_Santri">ID Santri:</label>
            <select name="ID_Santri" class="form-control custom-select">
                <option value="" disabled selected>Pilih ID Santri</option>
                @foreach($santri as $santri)
                    <option value="{{ $santri->ID_Santri }}">{{ $santri->ID_Santri }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Nama_Biaya">Nama Biaya:</label>
            <input type="text" name="Nama_Biaya" class="form-control" placeholder="Nama Biaya">
        </div>

        <div class="form-group">
            <label for="Jenis_Biaya">Jenis Biaya:</label>
            <input type="text" name="Jenis_Biaya" class="form-control" placeholder="Jenis Biaya">
        </div>

        <div class="form-group">
            <label for="Deskripsi">Deskrpisi:</label>
            <input name="Deskripsi" class="form-control" placeholder="Deskripsi">
        </div>

        <div class="form-group">
            <label for="Total_Biaya">Total Biaya:</label>
            <input type="number" name="Total_Biaya" class="form-control" placeholder="Total Biaya">
        </div>

        <div class="form-group">
            <label for="Tanggal_Berlaku">Tanggal Berlaku:</label>
            <input type="date" name="Tanggal_Berlaku" class="form-control" placeholder="Tanggal Berlaku">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection