<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

public function home ()
    {
         // Data mahasiswa
        $mahasiswa = [
            ['nim' => '1234567890', 'nama' => 'Reynaldi', 'kelas' => '11'],
            ['nim' => '1234567891', 'nama' => 'Andi', 'kelas' => '11'],
        ];

        return view('belajar', ['mahasiswa' => $mahasiswa]);
    }
    
    public function index ()
    
    {
        
        return 'Hi! Selamat Datang di Website Laravel';
    }

    public function about ()
    {
        return 'NIM: 1234567890, Nama: ry, Kelas: 11';
    }
    public function articles ($id)
    {
        return "Artikel dengan ID: ". $id;
    }
}
