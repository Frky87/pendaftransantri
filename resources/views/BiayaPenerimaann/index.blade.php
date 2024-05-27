@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Biaya Penerimaan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('biaya_penerimaan.create') }}">Create New Biaya Penerimaan</a>
                <a href="{{ route('pdfBiayaPenerimaan') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
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
            <th>ID Biaya Penerimaan</th>
            <th>ID Calon Santri</th>
            <th>Jenis Pembayaran</th>
            <th>Biaya</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($biayapenerimaan as $item)
        <tr>
            <td>{{ $item->ID_Biaya_Penerimaan }}</td>
            <td>{{ $item->ID_Calon_Santri }}</td>
            <td>{{ $item->Jenis_Pembayaran }}</td>
            <td>{{ $item->Biaya }}</td>
            <td>{{ $item->Deskripsi }}</td> 
            <td>
                <form action="{{ route('biaya_penerimaan.destroy', $item->ID_Biaya_Penerimaan) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('biaya_penerimaan.show', $item->ID_Biaya_Penerimaan) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('biaya_penerimaan.edit', $item->ID_Biaya_Penerimaan) }}">Edit</a>

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