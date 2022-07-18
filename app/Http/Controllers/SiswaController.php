<?php

namespace App\Http\Controllers;

use App\Siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function tampil()
    {
        //menampilkan semua data dari model siswa yang bersumber
        //dari table / migrations siswas
        //atau sama dengan kuary sql
        //select * from siswas
        $a = Siswa::all();
        return view('siswa.index', ['siswa'=> $a]);
    }
}
