<?php

namespace App\Controllers;

class Aku extends BaseController
{
    public function matkul()
    {
        return view('aku/matkul');
    }

    public function proyek() 
    {
        return view('aku/proyek');
    }

    public function musik()
    {
        return view('aku/musik');
    }

    public function film()
    {
        return view('aku/film');
    }
}
