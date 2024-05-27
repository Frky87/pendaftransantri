@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kelas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kelas.create') }}"> Create New Kelas</a>
                <a href="{{ route('pdfKelas') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
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
            <th>Kelas</th>
            <th>Kapasitas</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kelas as $kelas)
        <tr>
            <td>{{ $kelas->ID_Kelas }}</td>
            <td>{{ $kelas->Level_Kelas }}</td>
            <td>{{ $kelas->Kapasitas_Kelas }}</td>
            <td>
            <form action="{{ route('kelas.destroy', $kelas->ID_Kelas) }}" method="POST" style="display: inline">
            <a href="{{ route('kelas.show', $kelas->ID_Kelas) }}" class="btn btn-primary">Show</a>
            <a href="{{ route('kelas.edit', $kelas->ID_Kelas) }}" class="btn btn-success">Edit</a>

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