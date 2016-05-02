<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function beranda()
    {
        return view('beranda');
    }
    public function kursus()
    {
        return view('kursus');
    }
    public function masuk()
    {
        return view('login');
    }
    public function daftar()
    {
        return view('register');
    }
    public function kami()
    {
        return view('kami');
    }
}
