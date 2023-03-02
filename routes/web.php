<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ArtistasController;
use App\http\Controllers\PinturasController;
use App\http\Controllers\ObrasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/menuObra', function () {
    return view('menu.recorridoObra');
})->name('menuObra');

Route::get('/', function () {
    return view('menu.recorridoartista');
})->name('menuArtista');

Route::get('/', [ArtistasController::class, 'index'])->name('menuArtista');


Route::get('/menuObra', [PinturasController::class, 'indexm'])->name('menuObra');


Route::get('/addArtist', function () {
    return view('artist.addArtist');
})->name('addArtist');

Route::post('/addArtist', [ArtistasController::class, 'store'])->name('addArtist');

Route::get('/Artista/{id}', [ArtistasController::class , 'show'])->name('artist-show');

Route::get('/Obra/{id}', [PinturasController::class , 'show'])->name('obra-show');

Route::get('/addObra', function () {
    return view('artist.AddObra');
})->name('addPintura');

Route::get('/addObra', [PinturasController::class, 'index'])->name('addPintura');

Route::post('/addObra', [PinturasController::class, 'store'])->name('addPintura');

Route::resource('Obras', ObrasController::class);