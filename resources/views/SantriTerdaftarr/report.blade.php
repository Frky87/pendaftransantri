<!DOCTYPE html>
<html>
<head>
    <title>Santri Report</title>
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
    <h2>Santri Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID Santri</th>
                <th>ID Calon Santri</th>
                <th>Nama</th>
                <th>Tanggal Diterima</th>
                <th>ID Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($santri as $item)
                <tr>
                    <td>{{ $item->ID_Santri }}</td>
                    <td>{{ $item->ID_Calon_Santri }}</td>
                    <td>{{ $item->Nama }}</td>
                    <td>{{ $item->Tanggal_Diterima }}</td>
                    <td>{{ $item->ID_Kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>