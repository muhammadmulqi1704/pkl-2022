<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            [
                'nama' =>'abdul','nis'=>'220101','jenis_kelamin'=> 'laki-laki',
                'tgl_lahir' => '1998-08-05','alamat'=>'bandung'
            ],
            [
                'nama' =>'vina','nis'=>'220102','jenis_kelamin'=> 'perempuan',
                'tgl_lahir' => '1999-07-17','alamat'=>'jakarta'
            ]
        ];
        DB::table('siswas')->insert($sample);
    }
}
