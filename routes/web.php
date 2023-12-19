<?php

use App\Http\Controllers\DokterController;
use App\Http\Livewire\Chat\CreateChat;
use App\Http\Livewire\Chat\Main;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('user.index');
});

Route::get('/artikel', function () {
    return view('user.artikelkesehatan');
});

Route::get('/tentang', function () {
    return view('user.tentang');
});

Route::get('/riwayat', function () {
    return view('user.riwayatskrining');
});

Route::get('/home', function () {
    return view('admin.layouts.main');
});

// Dokter
Route::get('/dokter/upload-form', [DokterController::class, 'showUploadForm'])->name('dokter.uploadForm');
Route::post('/dokter/upload', [DokterController::class, 'upload'])->name('dokter.upload');


//livewire routes

Route::get('/users',CreateChat::class)->name('users');
Route::get('/chat{key?}',Main::class)->name('chat');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
