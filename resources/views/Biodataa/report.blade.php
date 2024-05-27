<!DOCTYPE html>
<html>
<head>
    <title>Biodata Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <h2>Biodata Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID Calon Santri</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat Rumah</th>
                <th>No Telepon</th>
                <th>ID_Pendaftaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($calonsantri as $biodata)
                <tr>
                    <td>{{ $biodata->ID_Calon_Santri }}</td>
                    <td>{{ $biodata->Nama }}</td>
                    <td>{{ $biodata->Tempat_Tanggal_Lahir}}</td>
                    <td>{{ $biodata->Jenis_Kelamin }}</td>
                    <td>{{ $biodata->Alamat_Rumah }}</td>
                    <td>{{ $biodata->No_Telepon }}</td>
                    <td>{{ $biodata->ID_Pendaftaran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>