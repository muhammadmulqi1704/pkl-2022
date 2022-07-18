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
            latihan
        </legend>
        @foreach ($latihan as $a)
        <fieldset>
        Nama dosen : {{$a['name1']}} <br>
        mata kuliah : {{$a['makul']}} <br>
        </fieldset>
        <?php $nilai_b = 0?>
        @foreach($a['mahasiswa'] as $b)
        <li> {{$b ['name']}} 
        {{$b['nilai']}},
        <?php $nilai_b += $b['nilai']?> 
        <br>

        @endforeach
        nilai rata rata : {{$nilai_b / count ($a['mahasiswa'])}}
        <hr>
        </li>
        @endforeach
        
    </fieldset>
</body>
</html>