@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Biodata</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('calon_santri.create') }}">Create New Biodata</a>
            <a href="{{ route('pdfBiodata') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
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
            <th>ID Calon Santri</th>
            <th>Nama</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat Rumah</th>
            <th>No Telepon</th>
            <th>ID_Pendaftaran</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($calonsantri as $biodata)
        <tr>
            <td>{{ $biodata->ID_Calon_Santri }}</td>
            <td>{{ $biodata->Nama }}</td>
            <td>{{ $biodata->Tempat_Tanggal_Lahir}}</td>
            <td>{{ $biodata->Jenis_Kelamin }}</td>
            <td>{{ $biodata->Alamat_Rumah }}</td>
            <td>{{ $biodata->No_Telepon }}</td>
            <td>{{ $biodata->ID_Pendaftaran }}</td>
            <td>
                <form action="{{ route('calon_santri.destroy',$biodata->ID_Calon_Santri) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('calon_santri.show',$biodata->ID_Calon_Santri) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('calon_santri.edit',$biodata->ID_Calon_Santri) }}">Edit</a>

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
