@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pelaksanaan Ujian</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pendaftaran.index') }}"> Back</a>
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

    <form action="{{ route('pendaftaran.update', $pendaftaran->ID_Pendaftaran) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Pendaftaran:</strong>
                    <input type="text" name="ID_Pendaftaran" value="{{ $pendaftaran->ID_Pendaftaran }}" class="form-control" placeholder="ID Pendaftaran" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Pendaftaran:</strong>
                    <input type="date" name="Tanggal_Pendaftaran" value="{{ $pendaftaran->Tanggal_Pendaftaran }}" class="form-control" placeholder="Tanggal Pendaftaran">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Pendaftaran:</strong>
                    <input type="text" name="Status_Pendaftaran" value="{{ $pendaftaran->Status_Pendaftaran }}" class="form-control" placeholder="Status Pendaftaran">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
