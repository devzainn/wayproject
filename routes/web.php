<?php

use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('beranda');

Route::get('/memahami-mrpn', function () {
    return view('menudua');
})->name('memahami-mrpn');

Route::get('/tentang-mrpn-center', function () {
    return view('menutiga');
})->name('tentang-mrpn-center');

Route::get('/program', function () {
    return view('menuempat');
})->name('program');

Route::get('/kesiapan-mrpn', function () {
    return view('menulima');
})->name('kesiapan-mrpn');

Route::get('/repositori', [DokumenController::class, 'index'])->name('repositori');

// Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen.index');

Route::get('/publikasi', [PublicationController::class, 'index'])->name('publikasi');
// Route::get('/publikasi', function () {
//     return view('menutujuh');
// })->name('publikasi');

