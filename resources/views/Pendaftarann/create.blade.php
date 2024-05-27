@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Pendaftaran</h1>

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

    <form action="{{ route('pendaftaran.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Pendaftaran">ID Pendaftaran:</label>
            <input type="text" name="ID_Pendaftaran" class="form-control" placeholder="ID Pendaftaran">
        </div>

        <div class="form-group">
            <label for="Tanggal_Pendaftaran">Tanggal Pendaftaran:</label>
            <input type="date" name="Tanggal_Pendaftaran" class="form-control" placeholder="Tanggal Pendaftaran">
        </div>

        <div class="form-group">
            <label for="Status_Pendaftaran">Status Pendaftaran:</label>
            <input type="text" name="Status_Pendaftaran" class="form-control" placeholder="Status Pendaftaran">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection