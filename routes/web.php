<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeubleController;

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

Route::get('/', function () {
    return view('welcome');
});

#gestion des meubles
Route::get('/meubles',[MeubleController::class, 'index'] )-> name('meubles.index');
Route::get('/meubles/create',[MeubleController::class, 'create'] )-> name('meubles.create');
Route::post('/meubles', [MeubleController::class, 'store'] )->name('meubles.store');
Route::get('/meubles/{meuble}/update', [MeubleController::class, 'update'] )->name('meubles.update');
Route::put('/meubles/{meuble}/edit', [MeubleController::class, 'edit'] )->name('meubles.edit');
Route::delete('/meubles/{meuble}/delete', [MeubleController::class, 'delete'] )->name('meubles.destroy');


#home page
Route::view('/', 'index')-> name('home');
Route::get('/',[MeubleController::class, 'showMeubles'] )-> name('home');

// continue de home page par defaut : index :extends app
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
