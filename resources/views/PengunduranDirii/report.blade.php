<!DOCTYPE html>
<html>
<head>
    <title>Pengunduran Diri Report</title>
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
    <h2>Pengunduran Diri Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID Pengunduran Diri</th>
                <th>ID Santri</th>
                <th>Tanggal Pengunduran</th>
                <th>Alasan Pengunduran</th>
                <th>Keterangan</th>
                <th>Status Pengunduran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengundurandiri as $pengunduran)
                <tr>
                    <td>{{ $pengunduran->ID_Pengunduran_Diri }}</td>
                    <td>{{ $pengunduran->ID_Santri }}</td>
                    <td>{{ $pengunduran->Tanggal_Pengunduran }}</td>
                    <td>{{ $pengunduran->Alasan_Pengunduran }}</td>
                    <td>{{ $pengunduran->Keterangan }}</td>
                    <td>{{ $pengunduran->Status_Pengunduran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>