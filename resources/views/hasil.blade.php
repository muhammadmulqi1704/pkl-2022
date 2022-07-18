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
                    <legend>perhitungan berat badan</legend>
                @if ($hasil2 <= 17.0)
                    berat badan : {{$berat}} kg<br>
                    tinggi badan : {{$tinggi}} cm<br>
                    Hasil BMI : <strong> {{$hasil2}} </strong> <br>
                    status : kurus, kekurangan berat badan <br>
                    umur : {{$umur}} <br>
                    keterangan : {{$umur1}} <br>
                    <hr>
                @elseif ($hasil2 <= 18.4)
                    berat badan : {{$berat}} kg<br>
                    tinggi badan : {{$tinggi}} cm<br>
                    Hasil BMI : <strong> {{$hasil2}} </strong> <br>
                    status : kurus, berat badan ringan <br>
                    umur : {{$umur}} <br>
                    keterangan : {{$umur1}} <br>
                    <hr>
                @elseif ($hasil2 <= 25.0)
                    berat badan : {{$berat}} kg<br>
                    tinggi badan : {{$tinggi}} cm<br>
                    Hasil BMI : <strong> {{$hasil2}} </strong> <br>
                    status : Normal <br>
                    umur : {{$umur}} <br>
                    keterangan : {{$umur1}} <br>
                    <hr>
                @elseif ($hasil2 <= 27.0)
                    berat badan : {{$berat}} kg<br>
                    tinggi badan : {{$tinggi}} cm<br>
                    Hasil BMI : <strong> {{$hasil2}} </strong> <br>
                    status : Gemuk, Kelebihan Berat Badan Tingkat Ringan <br>
                    umur : {{$umur}} <br>
                    keterangan : {{$umur1}} <br>
                    <hr>
                @elseif ($hasil2 <= 28.0)
                    berat badan : {{$berat}} kg<br>
                    tinggi badan : {{$tinggi}} cm<br>
                    Hasil BMI : <strong> {{$hasil2}} </strong> <br>
                    status : Gemuk, Kelebihan Berat Badan Tingkat berat <br>
                    umur : {{$umur}} <br>
                    keterangan : {{$umur1}} <br>
                    <hr>
                @else
                    berat badan : {{$berat}} kg<br>
                    tinggi badan : {{$tinggi}} cm<br>
                    Hasil BMI : <strong> {{$hasil2}} </strong> <br>
                    status : obesitas <br>
                    umur : {{$umur}} <br>
                    keterangan : {{$umur1}} <br>
                    <hr>
                @endif
                <fieldset>
</body>
</html>