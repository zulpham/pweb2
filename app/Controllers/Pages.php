<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Fish Universe',
        ];
        return view('Pages/home', $data);
    }
    public function contact(): string
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Raya Jombang No. 28'
                ],
                [
                    'tipe' => 'Email', 
                    'alamat' => 'emailku@email.com'
                ]
            ]
        ];
        return view('Pages/contact', $data);
    }

    public function fish(): string
    {
        $data = [
            'title' => 'Fish'
        ];
        return view('Pages/fish', $data);
    }

    public function tips(): string
    {
        $data = [
            'title' => 'Tips'
        ];
        return view('Pages/tips', $data);
    }
}