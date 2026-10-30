
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrediksiController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/prediksi', function () {
    return view('prediksi');
})->name('prediksi');

Route::post('/hasil-prediksi', [
    PrediksiController::class,
    'prosesData'
])->name('hasil.prediksi');

Route::get('/riwayat', [
    PrediksiController::class,
    'riwayat'
])->name('riwayat');
