<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Report</title>
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
                <th>ID Pembayaran</th>
                <th>ID Biaya Penerimaan</th>
                <th>ID Biaya Pondok</th>
                <th>Tanggal Pembayaran</th>
                <th>Jenis Pembayaran</th>
                <th>Status Pembayaran</th>
                <th>Petugas Pembayaran</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($pembayaran as $bayar)s
                <tr>
                    <td>{{ $bayar->ID_Pembayaran }}</td>
                    <td>{{ $bayar->ID_Biaya_Penerimaan }}</td>
                    <td>{{ $bayar->ID_Biaya_Pondok }}</td>
                    <td>{{ $bayar->Tanggal_Pembayaran }}</td>
                    <td>{{ $bayar->Jenis_Pembayaran }}</td>
                    <td>{{ $bayar->Status_Pembayaran }}</td>
                    <td>{{ $bayar->Petugas_Pembayaran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>