<!DOCTYPE html>
<html>
<head>
    <title>Wali Santri Report</title>
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
    <h2>Wali Santri Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID Wali</th>
                <th>Nama Wali</th>
                <th>Hubungan Wali</th>
                <th>Alamat Wali</th>
                <th>No Telepon Wali</th>
                <th>Email Wali</th>
                <th>ID Calon Santri</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($walisantri as $informasiorangtua)
                <tr>
                    <td>{{ $informasiorangtua->ID_Wali }}</td>
                    <td>{{ $informasiorangtua->Nama_Wali }}</td>
                    <td>{{ $informasiorangtua->Hubungan_Wali}}</td>
                    <td>{{ $informasiorangtua->Alamat_Wali }}</td>
                    <td>{{ $informasiorangtua->No_Telepon_Wali }}</td>
                    <td>{{ $informasiorangtua->Email_Wali }}</td>
                    <td>{{ $informasiorangtua->ID_Calon_Santri }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>