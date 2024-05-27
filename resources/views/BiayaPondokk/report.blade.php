<!DOCTYPE html>
<html>
<head>
    <title>Biaya Pondok</title>
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
    <h2>Biaya Pondok Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID Biaya Pondok</th>
                <th>ID Santri</th>
                <th>Nama Biaya</th>
                <th>Jenis Biaya</th>
                <th>Deskripsi</th>
                <th>Total Biaya</th>
                <th>Tanggal Berlaku</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($biayapondok as $biaya)
                <tr>
                    <td>{{ $biaya->ID_Biaya_Pondok }}</td>
                    <td>{{ $biaya->ID_Santri }}</td>
                    <td>{{ $biaya->Nama_Biaya}}</td>
                    <td>{{ $biaya->Jenis_Biaya }}</td>
                    <td>{{ $biaya->Deskripsi }}</td>
                    <td>{{ $biaya->Total_Biaya }}</td>
                    <td>{{ $biaya->Tanggal_Berlaku }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>