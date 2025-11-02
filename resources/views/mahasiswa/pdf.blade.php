<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Mahasiswa</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            font-size: 14px; 
            background-color: #f8f9fa;
            padding: 20px;
            color: #333;
        }
        h2 { 
            text-align: center; 
            color: #2c3e50;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #3498db;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 25px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        th, td { 
            padding: 12px 15px; 
            text-align: left; 
        }
        th { 
            background-color: #3498db; 
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 13px;
        }
        td {
            border-bottom: 1px solid #eaeaea;
        }
        tbody tr {
            transition: background-color 0.2s;
        }
        tbody tr:hover {
            background-color: #f1f9ff;
        }
        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tbody tr:nth-child(even):hover {
            background-color: #e8f4ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Mahasiswa</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $m)
                <tr>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>