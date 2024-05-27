<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Ujian Report</title>
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
    <h2>Jadwal Ujian Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Ujian</th>
                <th>Jenis Ujian</th>
                <th>Waktu Mulai</th>
                <th>Durasi Ujian</th>
                <th>Nilai Minimum</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ujian as $ujian)
                <tr>
                    <td>{{ $ujian->ID_Pelaksanaan_Ujian }}</td>
                    <td>{{ $ujian->Tanggal_Ujian }}</td>
                    <td>{{ $ujian->Jenis_Ujian }}</td>
                    <td>{{ $ujian->Waktu_Mulai }}</td>
                    <td>{{ $ujian->Durasi_Ujian }}</td>
                    <td>{{ $ujian->Nilai_Minimum }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>