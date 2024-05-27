@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pelaksanaan Ujian</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('wawancara.index') }}"> Back</a>
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

    <form action="{{ route('wawancara.update', $wawancara->ID_Wawancara) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Wawancara:</strong>
                    <input type="text" name="ID_Wawancara" value="{{ $wawancara->ID_Wawancara }}" class="form-control" placeholder="ID Wawancara" readonly>
                </div>
            </div>
            <div class="form-group">
                <strong>ID Calon Santri:</strong>
                    <select name="ID_Calon_Santri" class="form-control custom-select">
                        <option value="" disabled selected>Pilih ID Calon Santri</option>
                        @foreach($calonsantri as $calon)
                            <option value="{{ $calon->ID_Calon_Santri }}" {{ $calon->ID_Calon_Santri == $wawancara->ID_Calon_Santri ? 'selected' : '' }}>{{ $calon->ID_Calon_Santri }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Wawancara:</strong>
                    <input type="date" name="Tanggal_Wawancara" value="{{ $wawancara->Tanggal_Wawancara }}" class="form-control" placeholder="Tanggal Wawancara">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mulai Wawancara:</strong>
                    <input type="time" name="Mulai_Wawancara" value="{{ $wawancara->Mulai_Wawancara }}" class="form-control" placeholder="Mulai Wawancara">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pewawancara:</strong>
                    <input type="text" name="Pewawancara" value="{{ $wawancara->Pewawancara }}" class="form-control" placeholder="Pewawancara">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai Wawancara:</strong>
                    <input type="number" name="Nilai_Wawancara" value="{{ $wawancara->Nilai_Wawancara }}" class="form-control" placeholder="Nilai Wawancara">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
