<?php

use App\Http\Controllers\ProdukController;

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

Route::get('/Nama', function () {
    //echo'Nama Saya Ryan';
    return view('nama');
});


Route::get('/Kelas', function () {
    //echo'IS-3';
    return view('kelas');
});


Route::get('/Teman', function () {
    //echo'Cendy';
    return view('teman');
});


Route::get('/Belajar', function () {
    //echo'Mari belajar';
    return view('learn');
});    
  

Route::get('/nadya', function () {
    $nama="nadya";
    $jk="Perempuan";
    return view('ryan1',compact('nama','jk'));  
});

//Route::get('/RYAN', [ProdukController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/create/{produk}', [ProdukController::class, 'store']);
//Route::get('/produk/show', [ProdukController::class, 'store']);
Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::delete('/produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');