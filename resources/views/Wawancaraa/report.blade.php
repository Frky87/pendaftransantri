<!DOCTYPE html>
<html>
<head>
    <title>Wawancara Report</title>
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
                <th>ID Wawancara</th>
                <th>ID Calon Santri</th>
                <th>Tanggal Wawancara</th>
                <th>Mulai Wawancara</th>
                <th>Pewawancara</th>
                <th>Nilai Wawancara</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wawancara as $item)
                <tr>
                    <td>{{ $item->ID_Wawancara }}</td>
                    <td>{{ $item->ID_Calon_Santri }}</td>
                    <td>{{ $item->Tanggal_Wawancara }}</td>
                    <td>{{ $item->Mulai_Wawancara }}</td>
                    <td>{{ $item->Pewawancara }}</td>
                    <td>{{ $item->Nilai_Wawancara }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>