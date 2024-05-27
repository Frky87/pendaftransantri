@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pengunduran Diri</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('pengunduran_diri.create') }}">Create New Pengunduran Diri</a>
            <a href="{{ route('pdfPengunduranDiri') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
                </a>
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
            <th>ID Pengunduran Diri</th>
            <th>ID Santri</th>
            <th>Tanggal Pengunduran</th>
            <th>Alasan Pengunduran</th>
            <th>Keterangan</th>
            <th>Status Pengunduran</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pengundurandiri as $pengunduran)
        <tr>
            <td>{{ $pengunduran->ID_Pengunduran_Diri }}</td>
            <td>{{ $pengunduran->ID_Santri }}</td>
            <td>{{ $pengunduran->Tanggal_Pengunduran }}</td>
            <td>{{ $pengunduran->Alasan_Pengunduran }}</td>
            <td>{{ $pengunduran->Keterangan }}</td>
            <td>{{ $pengunduran->Status_Pengunduran }}</td>
            <td>
                <form action="{{ route('pengunduran_diri.destroy',$pengunduran->ID_Pengunduran_Diri) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pengunduran_diri.show',$pengunduran->ID_Pengunduran_Diri) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('pengunduran_diri.edit',$pengunduran->ID_Pengunduran_Diri) }}">Edit</a>

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