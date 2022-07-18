<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <fieldset>
                    <legend>pemesanan</legend>
                @if ($a == null)
                    <strong> {{"$a"}} </strong>
                @elseif ($a == 'mie goreng')
                    makanan : <strong> {{$a}} </strong> <br>
                    harga : Rp.5000 
                @elseif ($a == 'seblak')
                    makanan : <strong> {{$a}} </strong> <br>
                    harga : Rp.7500 
                @elseif ($a == 'nasi padang')
                    makanan : <strong> {{$a}} </strong> <br>
                    harga : Rp.15000
                @else
                    makanan : <strong> {{$a}} </strong> <br>
                @endif
                    <hr>
                @if ($b == null)
                    <strong> {{"$b"}} </strong>
                @elseif ($b == 'teh')
                    minuman : <strong> {{$b}} </strong> <br>
                    harga : Rp.5000 
                @elseif ($b == 'kopi')
                    minuman : <strong> {{$b}} </strong> <br>
                    harga : Rp.7500 
                @elseif ($b == 'juss')
                    minuman : <strong> {{$b}} </strong> <br>
                    harga : Rp.10000
                @else
                    minuman : <strong> {{$b}} </strong> <br>
                @endif
                    <hr>
                @if ($c == null)
                    <strong> {{"$c"}} </strong>
                @elseif ($c == 'kecil')
                    ukuran : <strong> {{$c}} </strong> <br>
                    harga : Rp.2500
                @elseif ($c == 'sedang')
                    ukuran : <strong> {{$c}} </strong> <br>
                    harga : Rp.5000 
                @elseif ($c == 'besar')
                    ukuran : <strong> {{$c}} </strong> <br>
                    harga : Rp.10000
                @else
                    ukuran : <strong> {{$c}} </strong> <br>
                @endif
                    <hr>
                <fieldset>

                
            </div>
        </div>
    </body>
</html>
