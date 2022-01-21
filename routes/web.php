<?php

use App\Http\Controllers\AngajatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ComandaController;
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

Route::get('/', function () {
    return view('angajati');
});

//

Route::get('angajati',[AngajatController::class,'index'])
    ->name('angajati');

Route::get('/angajat/{id}',[AngajatController::class,'showEdit'])
    ->where('id','[0-9]+')
    ->name('angajat.edit');

Route::post('/angajat',[AngajatController::class,'postEdit'])
    ->name('angajat.submit');

Route::get('angajat/nou',[AngajatController::class,'nou'])
    ->name('angajat.new');

Route::post('/angajat/nou',[AngajatController::class,'nouCreate'])
    ->name('angajat.create');

//

Route::get('clienti', [ClientController::class,'index'])
    ->name('clienti');

Route::get('/client/{id}',[ClientController::class,'showEdit'])
    ->where('id','[0-9]+')
    ->name('client.edit');

Route::post('/client',[ClientController::class,'postEdit'])
    ->name('client.submit');

Route::get('client/nou',[ClientController::class,'nou'])
    ->name('client.new');

Route::post('client/nou',[ClientController::class,'nouCreate'])
    ->name('client.create');

//

Route::get('comenzi', [ComandaController::class,'index'])
    ->name('comenzi');

Route::get('/comanda/{id}',[ComandaController::class,'showEdit'])
    ->where('id','[0-9]+')
    ->name('comanda.edit');

Route::post('/comanda',[ComandaController::class,'postEdit'])
    ->name('comanda.submit');

Route::get('comanda/nou',[ComandaController::class,'nou'])
    ->name('comanda.new');

Route::post('comanda/nou',[ComandaController::class,'nouCreate'])
    ->name('comanda.create');
    
Route::get('/comanda-produse/{id}',[ComandaController::class,'produse'])
    ->name('comanda.produse');

//cerinta 3

Route::get('cerinta3',function() {
    return view('cerinta3');
})->name('cerinta3');

//cerinta 4

Route::get('cerinta4', function() {
    return view('cerinta4');
})->name('cerinta4');