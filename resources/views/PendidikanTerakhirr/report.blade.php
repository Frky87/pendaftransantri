<!DOCTYPE html>
<html>
<head>
    <title>Pendidikan Terakhir Report</title>
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
    <h2>Pendididkan Terakhir Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID Pendidikan</th>
                <th>Tingkatan Pendidikan</th>
                <th>Nama Sekolah</th>
                <th>Tahun Lulus</th>
                <th>Pendidikan Non Formal</th>
                <th>Tahun Lulus</th>
                <th>ID Calon Santri</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendidikanterakhir as $pendidikan)
                <tr>
                    <td>{{ $pendidikan->ID_Pendidikan }}</td>
                    <td>{{ $pendidikan->Tingkatan_Pendidikan }}</td>
                    <td>{{ $pendidikan->Nama_Sekolah }}</td>
                    <td>{{ $pendidikan->Tahun_Lulus_Sekolah }}</td>
                    <td>{{ $pendidikan->Pendidikan_Non_Formal }}</td>
                    <td>{{ $pendidikan->Tahun_Lulus }}</td>
                    <td>{{ $pendidikan->ID_Calon_Santri }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>