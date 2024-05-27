@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Wawancara</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('wawancara.create') }}">Create New Wawancara</a>
                <a href="{{ route('pdfWawancara') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
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
            <th>ID Wawancara</th>
            <th>ID Calon Santri</th>
            <th>Tanggal Wawancara</th>
            <th>Mulai Wawancara</th>
            <th>Pewawancara</th>
            <th>Nilai Wawancara</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($wawancara as $item)
        <tr>
            <td>{{ $item->ID_Wawancara }}</td>
            <td>{{ $item->ID_Calon_Santri }}</td>
            <td>{{ $item->Tanggal_Wawancara }}</td>
            <td>{{ $item->Mulai_Wawancara }}</td>
            <td>{{ $item->Pewawancara }}</td> <!-- Memperbaiki Pewawancara -->
            <td>{{ $item->Nilai_Wawancara }}</td> <!-- Memastikan Nilai Wawancara ditampilkan -->
            <td>
                <form action="{{ route('wawancara.destroy', $item->ID_Wawancara) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('wawancara.show', $item->ID_Wawancara) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('wawancara.edit', $item->ID_Wawancara) }}">Edit</a>

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