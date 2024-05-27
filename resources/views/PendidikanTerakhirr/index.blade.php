@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pendidikan Terakhir</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('pendidikan_terakhir.create') }}">Create New Pendidikan Terakhir</a>
            <a href="{{ route('pdfPendidikanTerakhir') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
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
            <th>ID Pendidikan</th>
            <th>Tingkatan Pendidikan</th>
            <th>Nama Sekolah</th>
            <th>Tahun Lulus</th>
            <th>Pendidikan Non Formal</th>
            <th>Tahun Lulus</th>
            <th>ID Calon Santri</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pendidikanterakhir as $pendidikan)
        <tr>
            <td>{{ $pendidikan->ID_Pendidikan }}</td>
            <td>{{ $pendidikan->Tingkatan_Pendidikan }}</td>
            <td>{{ $pendidikan->Nama_Sekolah }}</td>
            <td>{{ $pendidikan->Tahun_Lulus_Sekolah }}</td>
            <td>{{ $pendidikan->Pendidikan_Non_Formal }}</td>
            <td>{{ $pendidikan->Tahun_Lulus }}</td>
            <td>{{ $pendidikan->ID_Calon_Santri }}</td>
            <td>
                <form action="{{ route('pendidikan_terakhir.destroy',$pendidikan->ID_Pendidikan) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pendidikan_terakhir.show',$pendidikan->ID_Pendidikan) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('pendidikan_terakhir.edit',$pendidikan->ID_Pendidikan) }}">Edit</a>

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