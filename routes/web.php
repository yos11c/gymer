<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as controller;

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

//Route::get('/',[controller::class,'public']);


Route::get('/', [controller::class, 'home']) ->name("/");


Route::get('productos',[controller::class,'productos'])->name('productos');

Route::get('clientes',[controller::class,'clientes'])->name('clientes');

Route::get('add',[controller::class, 'add'])->name('add');

Route::get('addC',[controller::class, 'addC'])->name('addC');


Route::post('store', [controller::class, 'store']);

Route::post('storeC', [controller::class, 'storeC']);

Route::get('delete{id}',[controller::class,'delete'])->name('remove');

Route::get('destroy{id}',[controller::class,'destroy'])->name('destroy');

Route::get('edit{id}',[controller::class,'edit'])->name('edit');

Route::get('modificarCliente{id}',[controller::class,'modificarCliente'])->name('modificarCliente');

Route::get('menu{id}',[controller::class,'menu'])->name('menu');

Route::put('update{id}',[controller::class,'update'])->name('update');


Route::put('actualizarCliente{id}',[controller::class,'actualizarCliente'])->name('actualizarCliente');



Route::middleware(['auth','is_admin'])->group(function ()

{

}


);




