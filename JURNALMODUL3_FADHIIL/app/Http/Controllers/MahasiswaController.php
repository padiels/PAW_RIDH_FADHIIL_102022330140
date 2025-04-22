<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = [
            'nama' => 'Budi Santoso',
            'nim' => '123456789',
            'email' => 'budi@example.com',
            'jurusan' => 'S1 Sistem Informasi',
            'fakultas' => 'Fakultas Rekayasa Industri',
            'foto' => asset('images/logo-ead.png')
        ];

        return view('profil', ['mahasiswa'=> $mahasiswa]);
    }
}
