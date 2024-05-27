<!DOCTYPE html>
<html>
<head>
    <title>Kelas Report</title>
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
    <h2>Kelas Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kelas</th>
                <th>Kapasitas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $kelas)
                <tr>
                    <td>{{ $kelas->ID_Kelas }}</td>
                    <td>{{ $kelas->Level_Kelas }}</td>
                    <td>{{ $kelas->Kapasitas_Kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>