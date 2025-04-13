<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            //'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('Pages/home', $data);
    }
    public function contact(): string
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Desa Peterongan no 28',
                    'kota' => 'Jombang'
                ],
                [
                    'tipe' => 'Kantor', 
                    'alamat' => 'Kompleks Ponpes Darul Ulum Peterongan',
                    'kota' => 'Jombang'
                ]
            ]
        ];
        return view('Pages/contact', $data);
    }

}