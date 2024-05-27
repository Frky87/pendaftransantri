@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kelas</h1>
    <a class="btn btn-primary" href="{{ route('kelas.index') }}">Back</a>

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

    <form action="{{ route('kelas.update', $kelas->ID_Kelas) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="ID_Kelas">ID Kelas:</label>
            <input type="text" name="ID_Kelas" value="{{ $kelas->ID_Kelas }}" class="form-control" readonly>
        </div>

        <div class="form-group">
            <label for="Level_Kelas">Level Kelas:</label>
            <input type="text" name="Level_Kelas" value="{{ $kelas->Level_Kelas }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="Kapasitas_Kelas">Kapasitas Kelas:</label>
            <input type="text" name="Kapasitas_Kelas" value="{{ $kelas->Kapasitas_Kelas }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection