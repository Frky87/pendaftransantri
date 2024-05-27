<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Report</title>
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
    <h2>Pendafataran Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Pendaftaran</th>
                <th>Status Pendaftaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendaftaran as $pendaftaran)
                <tr>
                     <td>{{ $pendaftaran->ID_Pendaftaran }}</td>
                     <td>{{ $pendaftaran->Tanggal_Pendaftaran }}</td>
                     <td>{{ $pendaftaran->Status_Pendaftaran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>