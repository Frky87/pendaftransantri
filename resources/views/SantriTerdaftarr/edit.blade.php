@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Santri</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('santri.index') }}"> Back</a>
            </div>
        </div>
    </div>

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

    <form action="{{ route('santri.update', $santri->ID_Santri) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Santri:</strong>
                    <input type="text" name="ID_Santri" value="{{ $santri->ID_Santri }}" class="form-control" placeholder="ID Santri">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Calon Santri:</strong>
                    <select name="ID_Calon_Santri" id="ID_Calon_Santri" class="form-control custom-select">
                        <option value="" disabled selected>Pilih ID Calon Santri</option>
                        @foreach($calonsantri as $calon)
                            <option value="{{ $calon->ID_Calon_Santri }}" {{ $calon->ID_Calon_Santri == $santri->ID_Calon_Santri ? 'selected' : '' }}>{{ $calon->ID_Calon_Santri }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <select name="Nama" id="Nama" class="form-control custom-select">
                        @foreach($calonsantri as $calon)
                            @if($calon->ID_Calon_Santri == $santri->ID_Calon_Santri)
                                <option value="{{ $calon->Nama }}" selected>{{ $calon->Nama }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Diterima:</strong>
                    <input type="date" name="Tanggal_Diterima" value="{{ $santri->Tanggal_Diterima }}" class="form-control" placeholder="Tanggal Diterima">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Kelas:</strong>
                    <select name="ID_Kelas" class="form-control custom-select">
                        <option value="" disabled selected>Pilih Kelas</option>
                        @foreach($kelas as $kelas)
                            <option value="{{ $kelas->ID_Kelas }}" {{ $kelas->ID_Kelas == $santri->ID_Kelas ? 'selected' : '' }}>{{ $kelas->ID_Kelas }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#ID_Calon_Santri').change(function() {
            var id = $(this).val();
            if (id) {
                $.ajax({
                    url: '/calonsantri/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#Nama').empty(); // Clear previous options
                        if (data) {
                            $('#Nama').append('<option value="' + data.Nama + '">' + data.Nama + '</option>');
                        } else {
                            $('#Nama').append('<option value="" disabled>No Name Available</option>');
                        }
                    },
                    error: function() {
                        $('#Nama').empty();
                        $('#Nama').append('<option value="" disabled>Error Fetching Name</option>');
                    }
                });
            } else {
                $('#Nama').empty();
                $('#Nama').append('<option value="" disabled selected>Pilih Nama</option>');
            }
        });

        // Trigger change event on page load to populate the Nama field if ID Calon Santri is already selected
        $('#ID_Calon_Santri').trigger('change');
    });
</script>
@endsection