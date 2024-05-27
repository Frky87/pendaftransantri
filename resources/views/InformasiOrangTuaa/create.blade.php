@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Wali Santri</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('wali_santri.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Wali">ID Wali:</label>
            <input type="text" name="ID_Wali" class="form-control" placeholder="ID Wali">
        </div>

        <div class="form-group">
            <label for="Nama_Wali">Nama Wali:</label>
            <input type="text" name="Nama_Wali" class="form-control" placeholder="Nama Wali">
        </div>

        <div class="form-group">
            <label for="Hubungan_Wali">Hubungan Dengan Wali:</label>
            <select name="Hubungan_Wali" class="form-control custom-select">
                <option value="" disabled selected>Pilih Hubungan</option>
                <option value="Kandung">Kandung</option>
                <option value="Angkat">Angkat</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Alamat_Wali">Alamat Wali:</label>
            <input type="text" name="Alamat_Wali" class="form-control" placeholder="Alamat Wali">
        </div>

        <div class="form-group">
            <label for="No_Telepon_Wali">No Telp Wali:</label>
            <input type="text" name="No_Telepon_Wali" class="form-control" placeholder="No Telepon Wali">
        </div>

        <div class="form-group">
            <label for="Email_Wali">Email Wali:</label>
            <input type="text" name="Email_Wali" class="form-control" placeholder="Email Wali">
        </div>

        <div class="form-group">
            <label for="ID_Calon_Santri">ID Calon Santri:</label>
            <select name="ID_Calon_Santri" class="form-control custom-select">
                <option value="" disabled selected>Pilih ID Santri</option>
                @foreach($calonsantri as $calonsantri)
                    <option value="{{ $calonsantri->ID_Calon_Santri }}">{{ $calonsantri->ID_Calon_Santri }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection