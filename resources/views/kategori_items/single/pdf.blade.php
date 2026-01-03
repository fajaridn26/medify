<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kategori Item</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        @page {
            margin: 80px 40px 60px 40px;
        }

        header {
            position: fixed;
            top: -60px;
            left: 0;
            right: 0;
            height: 50px;
            text-align: center;
        }

        footer {
            position: fixed;
            bottom: -40px;
            left: 0;
            right: 0;
            height: 30px;
            font-size: 10px;
            text-align: center;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid #000;
        }

        th {
            background: #f2f2f2;
            width: 30%;
        }
    </style>
</head>

<body>

    <header>
        <strong>Detail Kategori Item</strong>
    </header>

    <footer>
        Dicetak pada:
        {{ \Carbon\Carbon::now()->translatedFormat('d F Y H:i:s') }}
    </footer>

    <main>
        <table>
            <tr>
                <th>Kode</th>
                <td>{{ $data->kode }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $data->nama }}</td>
            </tr>
        </table>
    </main>

</body>

</html>
