<?php

namespace devbook\siswa\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function index() {
        return view('siswa::siswa');
    }

    public function send(Request $req) {
        $siswa = new \devbook\siswa\Models\Siswa();
        $siswa->nama_siswa = $req->get('namaSiswa');
        $siswa->umur = $req->get('umur');
        $siswa->alamat = $req->get('alamat');
        $siswa->save();
    }
}




