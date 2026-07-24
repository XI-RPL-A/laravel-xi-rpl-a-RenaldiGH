<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    
    <table border="1" cellpadding="10">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['kelas'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>