<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return 'ini adalah halaman news';
    }
    public function detail($slug)
    {
        return "ini adalaah halaman news dengan : " . $slug;
    }
}
