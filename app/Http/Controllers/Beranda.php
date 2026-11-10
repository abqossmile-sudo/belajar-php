<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda extends Controller
{
    function index()
    {
        $cards = [
        ['title' =>'Aplikasi Web',
        'description'=>'Aplikasi web yang dibuat menggunakan Laravel dan Bootstrap untuk manajemen data.',
        'tech'=>'Laravel, PHP, MySQL, Bootstrap',

        ],
        ['title' =>'Aplikasi Mobile',
        'description'=>'Aplikasi mobile yang dibuat menggunakan Flutter dan Dart.',
        'tech'=>'Flutter, Dart, Firebase',
        ],
        ['title'=>'Sitem Informasi Akademik',
        'description'=>'Sistem informasi akademik yang dibuat menggunakan Laravel dan Bootstrap.',
        'tech'=>'Laravel, PHP, MySQL, Bootstrap',
        ],
        ['title'=>'Sistem Informasi Penjualan',
        'description'=>'Sistem informasi penjualan yang dibuat menggunakan Laravel dan Bootstrap.',
        'tech'=>'Laravel, PHP, MySQL, Bootstrap',
        ]
        ];
        return view('Beranda', compact('cards'));
    }
}
