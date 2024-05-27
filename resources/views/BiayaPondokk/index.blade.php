@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Biaya Pondok</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('biaya_pondok.create') }}">Create New Biaya Pondok</a>
            <a href="{{ route('pdfBiayaPondok') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
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
            <th>ID Biaya Pondok</th>
            <th>ID Santri</th>
            <th>Nama Biaya</th>
            <th>Jenis Biaya</th>
            <th>Deskripsi</th>
            <th>Total Biaya</th>
            <th>Tanggal Berlaku</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($biayapondok as $biaya)
        <tr>
            <td>{{ $biaya->ID_Biaya_Pondok }}</td>
            <td>{{ $biaya->ID_Santri }}</td>
            <td>{{ $biaya->Nama_Biaya}}</td>
            <td>{{ $biaya->Jenis_Biaya }}</td>
            <td>{{ $biaya->Deskripsi }}</td>
            <td>{{ $biaya->Total_Biaya }}</td>
            <td>{{ $biaya->Tanggal_Berlaku }}</td>
            <td>
                <form action="{{ route('biayapondok.destroy',$biaya->ID_Biaya_Pondok) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('biayapondok.show',$biaya->ID_Biaya_Pondok) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('biayapondok.edit',$biaya->ID_Biaya_Pondok) }}">Edit</a>

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
