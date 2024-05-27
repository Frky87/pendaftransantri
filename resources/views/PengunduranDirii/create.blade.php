@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Pengunduran Diri</h1>

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

    <form action="{{ route('pengunduran_diri.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Pengunduran_Diri">ID Pengunduran Diri:</label>
            <input type="text" name="ID_Pengunduran_Diri" class="form-control" placeholder="ID Pengunduran Diri">
        </div>

        <div class="form-group">
            <label for="ID_Santri">ID Santri:</label>
            <select name="ID_Santri" class="form-control custom-select">
                <option value="" disabled selected>Pilih ID Santri</option>
                @foreach($santri as $s)
                    <option value="{{ $s->ID_Santri }}">{{ $s->ID_Santri }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Tanggal_Pengunduran">Tanggal Pengunduran:</label>
            <input type="date" name="Tanggal_Pengunduran" class="form-control" placeholder="Tanggal Pengunduran">
        </div>

        <div class="form-group">
            <label for="Alasan_Pengunduran">Alasan Pengunduran:</label>
            <input type="text" name="Alasan_Pengunduran" class="form-control" placeholder="Alasan Pengunduran">
        </div>

        <div class="form-group">
            <label for="Keterangan">Keterangan:</label>
            <input type="text" name="Keterangan" class="form-control" placeholder="Keterangan">
        </div>

        <div class="form-group">
            <label for="Status_Pengunduran">Status Pengunduran:</label>
            <select name="Status_Pengunduran" class="form-control custom-select">
                <option value="" disabled selected>Pilih Status Pengunduran</option>
                <option value="Diterima">Diterima</option>
                <option value="Diproses">Diproses</option>
                <option value="Ditolak">Ditolak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection