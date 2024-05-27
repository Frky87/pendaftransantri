@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Wawancara</h1>

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

    <form action="{{ route('wawancara.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Wawancara">ID Wawancara:</label>
            <input type="text" name="ID_Wawancara" class="form-control" placeholder="ID Wawancara">
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
            <label for="Tanggal_Wawancara">Tanggal Wawancara:</label>
            <input type="date" name="Tanggal_Wawancara" class="form-control" placeholder="Tanggal Wawancara">
        </div>


        <div class="form-group">
            <label for="Mulai_Wawancara">Waktu Mulai:</label>
            <input type="time" name="Mulai_Wawancara" class="form-control" placeholder="Waktu Mulai">
        </div>

        <div class="form-group">
            <label for="Pewawancara">Pewawancara:</label>
            <input type="text" name="Pewawancara" class="form-control" placeholder="Pewawancara">
        </div>

        <div class="form-group">
            <label for="Nilai_Wawancara">Nilai Wawancara:</label>
            <input type="int" name="Nilai_Wawancara" class="form-control" placeholder="Nilai Wawancara">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection