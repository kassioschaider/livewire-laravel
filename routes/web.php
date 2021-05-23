<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Product\ProductCreate;
use App\Http\Livewire\Product\ProductList;
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
    return view('welcome');
});

Route::get('/home', Home::class);

Route::get('/product', ProductList::class)->name('list_product');
// Route::get('/product/add', ProductCreate::class)->name('form_add_product');
// Route::post('/product/add', ProductCreate::class);
// Route::post('/product/add', 'ProductController@store');
// Route::delete('/product/{id}', 'ProductController@destroy');
