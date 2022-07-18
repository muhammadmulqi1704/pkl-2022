<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
public function hallo()
{
            $f = 1;
            $total = $f * 100;
        if ($total >= 1000){
        return 'diatas seribu';
        }
        else {
        return 'dibawah seribu';
        }
}
public function profile()
{
        return view(' profile ');
}
public function facebook($perkalian)
{
            $calculator = 1 + 5;
            $hasilperkalian = $calculator * $perkalian;
            $jk = 10;
        return view('about', compact('hasilperkalian','jk'));
}

public function berat_badan($tinggi,$berat,$umur)
{

            $hasil1 =($tinggi/100);
            $hasil2 =$berat /($hasil1 * $hasil1);
        if ($umur >= 17){
            $umur1 ='bisa memiliki sim';
        }
        else {
            $umur1 ='belum bisa memiliki sim';
        }
        return view('hasil', compact('hasil2','tinggi','berat','umur','umur1'));

    }

public function siswa()

{
            $a = [
            array('id' => 1, 'name' => 'dadang','age' => 15, 
            'hobi' => ['membaca novel', 'push rank', 'bernyanyi',]),
            array('id' => 2, 'name' => 'dudang','age' => 18,
            'hobi' => ['renang', 'futsal', 'mancing',])
            ];
        return view('siswa',['siswa' => $a]);

}
public function kampus()
{
            $kampus1 = [
            array('age' => 10011, 'name1' => 'dosen1', 'mahasiswa' =>
            [
            ['nis' => 100101,'name'=>'mahasiswa1', 'jurusan' => 'rpl','matkul'=> 
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100202,'name'=>'mahasiswa2', 'jurusan' => 'tkj','matkul'=> 
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100303,'name'=>'mahasiswa3', 'jurusan' => 'tbsm','matkul'=> 
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100404,'name'=>'mahasiswa4', 'jurusan' => 'tkro','matkul'=> 
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100505,'name'=>'mahasiswa5', 'jurusan' => 'koki','matkul'=> 
            ['B.inggris','b.indonesia','b.inggris']] 
            ]),
            array('age' => 10012, 'name1' => 'dosen2', 'mahasiswa' =>
            [
            ['nis' => 100106,'name'=>'mahasiswa1', 'jurusan' => 'rpl','matkul'=> 
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100207,'name'=>'mahasiswa2', 'jurusan' => 'tkj','matkul'=> 
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100308,'name'=>'mahasiswa3', 'jurusan' => 'tbsm','matkul'=> 
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100409,'name'=>'mahasiswa4', 'jurusan' => 'tkro','matkul'=> 
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100510,'name'=>'mahasiswa5', 'jurusan' => 'koki','matkul'=> 
            ['B.inggris','b.indonesia','b.inggris']] 
            ]),
            array('age' => 10013, 'name1' => 'dosen3', 'mahasiswa' =>
            [
            ['nis' => 100111,'name'=>'mahasiswa1', 'jurusan' => 'rpl','matkul'=>
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100212,'name'=>'mahasiswa2', 'jurusan' => 'tkj','matkul'=> 
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100313,'name'=>'mahasiswa3', 'jurusan' => 'tbsm','matkul'=>
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100414,'name'=>'mahasiswa4', 'jurusan' => 'tkro','matkul'=>
            ['B.inggris','b.indonesia','b.inggris']],
            ['nis' => 100515,'name'=>'mahasiswa5', 'jurusan' => 'koki','matkul'=>
            ['B.inggris','b.indonesia','b.inggris']] 
            ])
            ];
        return view('kampus',['kampus' => $kampus1]);
}
public function latihan()
{
    $a = [
        array('name1' => 'yusuf bachiar','makul'=> 'pemrograman web', 'mahasiswa' =>
            [
            ['name'=>'muhammad soleh : ', 'nilai' => 78],
            ['name'=>'jujun junaedi : ', 'nilai' => 85],
            ['name'=>'mamat alkatiri : ', 'nilai' => 90]
            ]),
        array('name1' => 'yaris triadi','makul'=> 'pemrograman web','mahasiswa' =>
            [
            ['name'=>'alfred McTomminay : ', 'nilai' => 67],
            ['name'=>'Bruno Kasmir : ', 'nilai' => 90],
            ])
    ];
    return view('latihan',['latihan' => $a]);

}
public function nilai () {
    $nilai = [
        ['name' => 'AGUS',
        'nilai1' => [
            ['mapel' => 'Bahasa Indonesia','nilai_mapel' => '80'],
            ['mapel' => 'Bahasa Inggris','nilai_mapel'=>'97'],
            ['mapel' => 'Produktif Kejuruan','nilai_mapel'=>'67'],
            ['mapel' => 'matematika','nilai_mapel'=>'100']
        ]
        ],

        ['name' => 'Mahmud',
        'nilai1' => [
            ['mapel' => 'Bahasa Indonesia','nilai_mapel' => '78'],
            ['mapel' => 'Bahasa Inggris','nilai_mapel'=>'86'],
            ['mapel' => 'Produktif Kejuruan','nilai_mapel'=>'90'],
            ['mapel' => 'matematika','nilai_mapel'=>'67']
        ]
        ],
        ['name' => 'Rendi',
        'nilai1' => [
            ['mapel' => 'Bahasa Indonesia','nilai_mapel' => '90'],
            ['mapel' => 'Bahasa Inggris','nilai_mapel'=>'50'],
            ['mapel' => 'Produktif Kejuruan','nilai_mapel'=>'65'],
            ['mapel' => 'matematika','nilai_mapel'=>'78']
        ]
        ],
        ['name' => 'Firman',
        'nilai1' => [
            ['mapel' => 'Bahasa Indonesia','nilai_mapel' => '78'],
            ['mapel' => 'Bahasa Inggris','nilai_mapel'=>'90'],
            ['mapel' => 'Produktif Kejuruan','nilai_mapel'=>'56'],
            ['mapel' => 'matematika','nilai_mapel'=>'78']
        ]
        ],
        ['name' => 'Abdul',
        'nilai1' => [
            ['mapel' => 'Bahasa Indonesia','nilai_mapel' => '89'],
            ['mapel' => 'Bahasa Inggris','nilai_mapel'=>'67'],
            ['mapel' => 'Produktif Kejuruan','nilai_mapel'=>'80'],
            ['mapel' => 'matematika','nilai_mapel'=>'90']
        ]
        ]
    ];

    return view('nilai', ['nilai' =>$nilai]);
}
public function belanja() {

    $belanja = [
        [
            'name' => 'Alfian', 
            'belanja' => [
                ['produk' => 'Sepatu', 'harga' => 250000],
                ['produk' => 'Baju', 'harga' => 100000],
                ['produk' => 'Celana', 'harga' => 150000],
                ['produk' => 'Kupluk', 'harga' => 100000]
            ]
        ],
        [
            'name' => 'Dida', 
            'belanja' => [
                ['produk' => 'Topi', 'harga' => 100000],
                ['produk' => 'Baju', 'harga' => 75000],
                ['produk' => 'Celana', 'harga' => 125000]
            ]
        ]
    ];

    // dd($belanja);
    return view('belanja', ['belanja' => $belanja]);

}

}

