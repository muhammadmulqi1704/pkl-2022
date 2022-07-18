<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Siswa</legend>
    </fieldset>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor Induk Siswa</th>
                <th>Tanggal Lahir</th>
                <th>Jenis kelamin</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $data)
            <tr>
                <td>{{ $data -> id}}</td>
                <td>{{ $data -> nama}}</td>
                <td>{{ $data -> nis}}</td>
                <td>{{ date ('d M Y', strtotime($data ->tgl_lahir)) }}</td>
                <td>{{ $data -> jenis_kelamin}}</td>
                <td>{{ $data -> alamat}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>