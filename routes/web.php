<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\DataDiri;
use App\Http\Controllers\Aktivitas;
use App\Http\Controllers\Kontak;
use App\Http\Controllers\Ai;

Route::get('/', [Beranda::class, 'index'])
    ->name('Beranda');

Route::get('/DataDiri', [DataDiri::class, 'index'])
    ->name('DataDiri');

Route::get('/Aktivitas', [Aktivitas::class, 'index'])
    ->name('Aktivitas');

Route::get('/Kontak', [Kontak::class, 'index'])
    ->name('Kontak');

Route::get('/Ai', [Ai::class, 'index'])
    ->name('Ai');
