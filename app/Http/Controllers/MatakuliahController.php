<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
    public function awal(){
        //relasi dari dosen ke pengguna
        return $data = dosen::where('pengguna_id', 12)->with('pengguna')->get(); 
        //relasi dari pengguna ke dosen
        return $data = pengguna::where('id', 12)->with('dosen')->get();
    }
    public function tambah(){
        return $this -> simpan();
    }
    public function simpan(){
        $matakuliah = new matakuliah();
        $matakuliah -> title = 'smbd';
        $matakuliah -> keterangan = 'sistem management basis data';
        $matakuliah -> save();
        return "data dengan nama {$matakuliah->title} telah disimpan";
    }
}
