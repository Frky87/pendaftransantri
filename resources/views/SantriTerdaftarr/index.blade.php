@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Santri</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('santri.create') }}">Create New Santri</a>
                <a href="{{ route('pdfSantri') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
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
            <th>ID Santri</th>
            <th>ID Calon Santri</th>
            <th>Nama</th>
            <th>Tanggal Diterima</th>
            <th>ID Kelas</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($santri as $item)
        <tr>
            <td>{{ $item->ID_Santri }}</td>
            <td>{{ $item->ID_Calon_Santri }}</td>
            <td>{{ $item->Nama }}</td>
            <td>{{ $item->Tanggal_Diterima }}</td>
            <td>{{ $item->ID_Kelas }}</td>
            <td>
                <form action="{{ route('santri.destroy', $item->ID_Santri) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('santri.show', $item->ID_Santri) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('santri.edit', $item->ID_Santri) }}">Edit</a>

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