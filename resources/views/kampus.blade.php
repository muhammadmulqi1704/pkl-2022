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
        <legend>
            kampus 
        </legend>
        @foreach ($kampus as $a)
        
        nis : {{$a['age']}} <br>
        nama dosen : {{$a['name1']}} <br>
        memiliki siswa :
        @foreach($a['mahasiswa'] as $mahasiswa1)
        <li> {{$mahasiswa1 ['name']}} 
        {{$mahasiswa1['nis']}}, {{$mahasiswa1['jurusan']}}<br>
        @foreach($mahasiswa1['matkul'] as $matkul1)
        {{$matkul1}}
        <br>
        @endforeach
        @endforeach
        <hr>
        </li>
        @endforeach
        <hr>
        
    </fieldset>
</body>
</html>