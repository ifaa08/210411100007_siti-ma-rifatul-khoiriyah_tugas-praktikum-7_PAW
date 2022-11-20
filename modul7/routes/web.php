<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Modul7Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Modul7Controller::class, 'home']);
Route::get('/tambah_data', [Modul7Controller::class, 'tambah_data']);
Route::post('/tambah', [Modul7Controller::class, 'tambah_baru']);
Route::get('/tampil/{post:nim}', [Modul7Controller::class, 'tampil_data']);
Route::put('/ubah/{post:nim}', [Modul7Controller::class, 'ubah_data']);
Route::delete('/hapus/{post:nim}', [Modul7Controller::class, 'hapus_data']);
Route::get('/mahasiswa/{post:nim}', [Modul7Controller::class, 'tampil_data_mahasiswa']);
Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'judul4' => 'About Me',
        'judul5' => 'Background',
        'judul6' => 'Suka Duka Praktikum PAW'
    ]);
});