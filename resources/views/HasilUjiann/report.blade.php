<!DOCTYPE html>
<html>
<head>
    <title>Hasil Ujian Report</title>
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
    <h2>Wawancara Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID Hasil Ujian</th>
                <th>ID Pelaksanaan Ujian</th>
                <th>ID Calon Santri</th>
                <th>Jumlah Soal</th>
                <th>Waktu Selesai</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hasilujian as $item)
                <tr>
                    <td>{{ $item->ID_Hasil_Ujian }}</td>
                    <td>{{ $item->ID_Pelaksanaan_Ujian }}</td>
                    <td>{{ $item->ID_Calon_Santri }}</td>
                    <td>{{ $item->Jumlah_Soal }}</td>
                    <td>{{ $item->Waktu_Selesai }}</td>
                    <td>{{ $item->Nilai_Akhir }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>