@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pembayaran</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('pembayaran.create') }}">Create New Pembayaran</a>
            <a href="{{ route('pdfPembayaran') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
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
            <th>ID Pembayaran</th>
            <th>ID Biaya Penerimaan</th>
            <th>ID Biaya Pondok</th>
            <th>Tanggal Pembayaran</th>
            <th>Jenis Pembayaran</th>
            <th>Status Pembayaran</th>
            <th>Petugas Pembayaran</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pembayaran as $bayar)
        <tr>
            <td>{{ $bayar->ID_Pembayaran }}</td>
            <td>{{ $bayar->ID_Biaya_Penerimaan }}</td>
            <td>{{ $bayar->ID_Biaya_Pondok }}</td>
            <td>{{ $bayar->Tanggal_Pembayaran }}</td>
            <td>{{ $bayar->Jenis_Pembayaran }}</td>
            <td>{{ $bayar->Status_Pembayaran }}</td>
            <td>{{ $bayar->Petugas_Pembayaran }}</td>
            <td>
                <form action="{{ route('pembayaran.destroy',$bayar->ID_Pembayaran) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pembayaran.show',$bayar->ID_Pembayaran) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('pembayaran.edit',$bayar->ID_Pembayaran) }}">Edit</a>

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