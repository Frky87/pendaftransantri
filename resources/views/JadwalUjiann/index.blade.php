@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Jadwal Ujian</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pelaksanaan_ujians.create') }}"> Create New Ujian</a>
                <a href="{{ route('pdfPelaksanaanUjian') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
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
            <th>ID</th>
            <th>Tanggal Ujian</th>
            <th>Jenis Ujian</th>
            <th>Waktu Mulai</th>
            <th>Durasi Ujian</th>
            <th>Nilai Minimum</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ujian as $ujian)
        <tr>
            <td>{{ $ujian->ID_Pelaksanaan_Ujian }}</td>
            <td>{{ $ujian->Tanggal_Ujian }}</td>
            <td>{{ $ujian->Jenis_Ujian }}</td>
            <td>{{ $ujian->Waktu_Mulai }}</td>
            <td>{{ $ujian->Durasi_Ujian }}</td>
            <td>{{ $ujian->Nilai_Minimum }}</td>
            <td>
                <form action="{{ route('pelaksanaan_ujians.destroy',$ujian->ID_Pelaksanaan_Ujian) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pelaksanaan_ujians.show',$ujian->ID_Pelaksanaan_Ujian) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('pelaksanaan_ujians.edit',$ujian->ID_Pelaksanaan_Ujian) }}">Edit</a>

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
