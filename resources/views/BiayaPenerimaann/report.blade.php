<!DOCTYPE html>
<html>
<head>
    <title>Biaya Penerimaan Report</title>
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
    <h2>Biaya Penerimaan Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID Biaya Penerimaan</th>
                <th>ID Calon Santri</th>
                <th>Jenis Pembayaran</th>
                <th>Biaya</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($biayapenerimaan as $item)
                <tr>
                    <td>{{ $item->ID_Biaya_Penerimaan }}</td>
                    <td>{{ $item->ID_Calon_Santri }}</td>
                    <td>{{ $item->Jenis_Pembayaran }}</td>
                    <td>{{ $item->Biaya }}</td>
                    <td>{{ $item->Deskripsi }}</td> 
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>