<?php

namespace App\Controllers;

class Aku extends BaseController
{
    public function matkul()
    {
        $data = [
            'title' => 'Mata Kuliah'
        ];
        return view('aku/matkul', $data);
    }

    public function proyek() 
    {
        $data = [
            'title' => 'Proyek'
        ];
        return view('aku/proyek', $data);
    }

    public function musik()
    {
        $data = [
            'title' => 'Musik Favorit'
        ];
        return view('aku/musik', $data);
    }

    public function film()
    {
        $data = [
            'title' => 'Film Favorit'
        ];
        return view('aku/film', $data);
    }
}
