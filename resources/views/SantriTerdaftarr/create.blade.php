@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Santri</h1>

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

    <form action="{{ route('santri.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="ID_Santri">ID Santri:</label>
            <input type="text" name="ID_Santri" class="form-control" placeholder="ID Santri">
        </div>

        <div class="form-group">
            <label for="ID_Calon_Santri">ID Calon Santri:</label>
            <select name="ID_Calon_Santri" id="ID_Calon_Santri" class="form-control custom-select">
                <option value="" disabled selected>Pilih ID Calon Santri</option>
                @foreach($calonsantri as $calon)
                    <option value="{{ $calon->ID_Calon_Santri }}">{{ $calon->ID_Calon_Santri }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Nama">Nama:</label>
            <select name="Nama" id="Nama" class="form-control custom-select">
                <option value="" disabled selected>Pilih Nama</option>
                <!-- Options will be populated dynamically -->
            </select>
        </div>

        <div class="form-group">
            <label for="Tanggal_Diterima">Tanggal Diterima:</label>
            <input type="date" name="Tanggal_Diterima" class="form-control" placeholder="Tanggal Diterima">
        </div>

        <div class="form-group">
            <label for="ID_Kelas">ID Kelas:</label>
            <select name="ID_Kelas" class="form-control custom-select">
                <option value="" disabled selected>Pilih ID Kelas</option>
                @foreach($kelas as $kelas)
                    <option value="{{ $kelas->ID_Kelas }}">{{ $kelas->ID_Kelas }}</option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
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
    });
</script>
@endsection