@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hasil Ujian</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('hasilujian.create') }}">Create New Hasil Ujian</a>
                <a href="{{ route('pdfHasilUjian') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
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
            <th>ID Hasil Ujian</th>
            <th>ID Pelaksanaan Ujian</th>
            <th>ID Calon Santri</th>
            <th>Jumlah Soal</th>
            <th>Waktu Selesai</th>
            <th>Nilai Akhir</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($hasilujian as $item)
        <tr>
            <td>{{ $item->ID_Hasil_Ujian }}</td>
            <td>{{ $item->ID_Pelaksanaan_Ujian }}</td>
            <td>{{ $item->ID_Calon_Santri }}</td>
            <td>{{ $item->Jumlah_Soal }}</td>
            <td>{{ $item->Waktu_Selesai }}</td>
            <td>{{ $item->Nilai_Akhir }}</td>
            <td>
                <form action="{{ route('hasilujian.destroy', $item->ID_Hasil_Ujian) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('hasilujian.show', $item->ID_Hasil_Ujian) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('hasilujian.edit', $item->ID_Hasil_Ujian) }}">Edit</a>

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