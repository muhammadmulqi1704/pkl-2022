<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    {{-- Font Source --}}
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Exo 2', sans-serif;
        }
    </style>
    <title>Nilai</title>
</head>

<body class="p-5">

    <h2 class="mb-4">
        <b><legend>Daftar Nilai</legend></b>
    </h2>

    @foreach ($nilai as $datanilai)
        @php
            $total = 0;
        @endphp
        <fieldset>
        Nama : <b>{{ $datanilai['name'] }}</b> <br />
        @foreach ($datanilai['nilai1'] as $nilaiMapel)
            Mata Pelajaran : {{ $nilaiMapel['mapel'] }} <br />
            Nilai : <b>{{ $nilaiMapel['nilai_mapel'] }}</b> <br />
            @php
                $total += $nilaiMapel['nilai_mapel'];
            @endphp
            <hr />
        @endforeach
        @php
            $rata = $total / count($datanilai['nilai1']);
        @endphp
        Rata-rata Nilai : <b>{{ $rata }}</b> <br />
        Grade : <b>
            @if ($rata > 100)
                Nilai Tidak Valid
            @elseif($rata >= 85)
                A
            @elseif($rata >= 75)
                B
            @elseif($rata >= 60)
                C
            @elseif($rata >= 50)
                D
            @elseif($rata >= 0)
                E
            @endif
            </fieldset>
            
        </b>
        <br>
    @endforeach
    

</body>

</html>