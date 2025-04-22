<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kostum Cosplay</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        h1 {
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Daftar Kostum Cosplay</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nama Karakter</th>
                <th>Ukuran</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cosplays as $cosplay)
            <tr>
                <td>{{ $cosplay->kostum_karakter }}</td>
                <td>{{ $cosplay->ukuran }}</td>
                <td>Rp {{ number_format($cosplay->harga, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>