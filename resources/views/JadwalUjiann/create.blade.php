@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Jadwal Ujian</h1>

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

    <form action="{{ route('pelaksanaan_ujians.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Pelaksanaan_Ujian">ID Pelaksanaan Ujian:</label>
            <input type="text" name="ID_Pelaksanaan_Ujian" class="form-control" placeholder="ID Pelaksanaan Ujian">
        </div>

        <div class="form-group">
            <label for="Tanggal_Ujian">Tanggal Ujian:</label>
            <input type="date" name="Tanggal_Ujian" class="form-control" placeholder="Tanggal Ujian">
        </div>

        <div class="form-group">
            <label for="Jenis_Ujian">Jenis Ujian:</label>
            <input type="text" name="Jenis_Ujian" class="form-control" placeholder="Jenis Ujian">
        </div>

        <div class="form-group">
            <label for="Waktu_Mulai">Waktu Mulai:</label>
            <input type="time" name="Waktu_Mulai" class="form-control" placeholder="Waktu Mulai">
        </div>

        <div class="form-group">
            <label for="Durasi_Ujian">Durasi Ujian:</label>
            <input type="time" name="Durasi_Ujian" class="form-control" placeholder="Durasi Ujian">
        </div>

        <div class="form-group">
            <label for="Nilai_Minimum">Nilai Minimum:</label>
            <input type="number" name="Nilai_Minimum" class="form-control" placeholder="Nilai Minimum">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection