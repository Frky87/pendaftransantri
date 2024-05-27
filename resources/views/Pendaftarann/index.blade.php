@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pendaftaran</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pendaftaran.create') }}"> Create New Pendaftaran</a>
                <a href="{{ route('pdfPendaftaran') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
            </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Tanggal Pendaftaran</th>
            <th>Status Pendaftaran</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pendaftaran as $pendaftaran)
        <tr>
            <td>{{ $pendaftaran->ID_Pendaftaran }}</td>
            <td>{{ $pendaftaran->Tanggal_Pendaftaran }}</td>
            <td>{{ $pendaftaran->Status_Pendaftaran }}</td>
            <td>
                <form action="{{ route('pendaftaran.destroy',$pendaftaran->ID_Pendaftaran) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pendaftaran.show',$pendaftaran->ID_Pendaftaran) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('pendaftaran.edit',$pendaftaran->ID_Pendaftaran) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>
@endsection