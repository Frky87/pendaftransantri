@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Informasi Orang Tua</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('wali_santri.create') }}">Create New Informasi Orang Tua</a>
            <a href="{{ route('pdfWaliSantri') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
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
            <th>ID Wali</th>
            <th>Nama Wali</th>
            <th>Hubungan Wali</th>
            <th>Alamat Wali</th>
            <th>No Telepon Wali</th>
            <th>Email Wali</th>
            <th>ID Calon Santri</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($walisantri as $informasiorangtua)
        <tr>
            <td>{{ $informasiorangtua->ID_Wali }}</td>
            <td>{{ $informasiorangtua->Nama_Wali }}</td>
            <td>{{ $informasiorangtua->Hubungan_Wali}}</td>
            <td>{{ $informasiorangtua->Alamat_Wali }}</td>
            <td>{{ $informasiorangtua->No_Telepon_Wali }}</td>
            <td>{{ $informasiorangtua->Email_Wali }}</td>
            <td>{{ $informasiorangtua->ID_Calon_Santri }}</td>
            <td>
                <form action="{{ route('wali_santri.destroy',$informasiorangtua->ID_Wali) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('wali_santri.show',$informasiorangtua->ID_Wali) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('wali_santri.edit',$informasiorangtua->ID_Wali) }}">Edit</a>

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